<?php
# Copyright (c) 2017, CESNET. All rights reserved.
#
# Redistribution and use in source and binary forms, with or
# without modification, are permitted provided that the following
# conditions are met:
#
#   o Redistributions of source code must retain the above
#     copyright notice, this list of conditions and the following
#     disclaimer.
#   o Redistributions in binary form must reproduce the above
#     copyright notice, this list of conditions and the following
#     disclaimer in the documentation and/or other materials
#     provided with the distribution.
#
# THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND
# CONTRIBUTORS "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES,
# INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF
# MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE
# DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT OWNER OR CONTRIBUTORS
# BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL,
# EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED
# TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE,
# DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON
# ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY,
# OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY
# OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE
# POSSIBILITY OF SUCH DAMAGE.

require(realpath(dirname(__FILE__)) . '/../../../common/Loader.php');
require(realpath(dirname(__FILE__)) . '/../Html.php');

// Instantiate the HTML module
$html = new HtmlModule($pakiti);

// Access control
$html->checkPermission("cve");


$html->setTitle("CVE");

$cveName = Utils::getHttpGetVar("cveName", null);
$vulnerabilities = $html->getPakiti()->getManager("VulnerabilitiesManager")->getVulnerabilitiesByCveName($cveName);

// HTML
?>


<?php include(realpath(dirname(__FILE__)) . "/../common/header.php"); ?>

<h1><?php echo $cveName; ?></h1>

<br><br>
<a href="https://bugzilla.redhat.com/show_bug.cgi?id=<?php echo $cveName; ?>" target="_blank">Link to the RedHat Bugzilla</a><br>
<a href="https://security-tracker.debian.org/tracker/<?php echo $cveName; ?>" target="_blank">Link to the Debian Security Tracker</a><br>
<a href="https://www.suse.com/security/cve/<?php echo $cveName; ?>/" target="_blank">Link to the SUSE Security</a><br>
<br>

<table class="table table-hover table-condensed">
    <thead>
        <tr>
            <th>Name</th>
            <th>Version</th>
            <th>Architecture</th>
            <th>OsGroup</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($vulnerabilities as $vulnerability) { ?>
            <?php $vulnerabilityOsGroup = $html->getPakiti()->getManager("OsGroupsManager")->getOsGroupById($vulnerability->getOsGroupId()); ?>
            <tr>
                <td><?php echo $vulnerability->getName(); ?></td>
                <td><?php echo $vulnerability->getOperator() . " " .$vulnerability->getVersion() . "-" . $vulnerability->getRelease(); ?></td>
                <td><?php echo $vulnerability->getArch(); ?></td>
                <td><?php echo $vulnerabilityOsGroup->getName(); ?></td>
            </tr>
        <?php } ?>
    </tbody>
</table>


<?php include(realpath(dirname(__FILE__)) . "/../common/footer.php"); ?>
