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

/**
 * @author Vadym Yanovskyy
 */
class CveDef
{
    private $_id;
    private $_definitionId;
    private $_title;
    private $_refUrl;
    private $_vdsSubSourceDefId;
    private $_cves = array();

    /**
     * @return array
     */
    public function getCves()
    {
        return $this->_cves;
    }

    /**
     * @param array $cves
     */
    public function setCves($cves)
    {
        $this->_cves = $cves;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->_id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->_id = $id;
    }

    /**
     * @return mixed
     */
    public function getDefinitionId()
    {
        return $this->_definitionId;
    }

    /**
     * @param mixed $definitionId
     */
    public function setDefinitionId($definitionId)
    {
        $this->_definitionId = $definitionId;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->_title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title)
    {
        $this->_title = $title;
    }

    /**
     * @return mixed
     */
    public function getRefUrl()
    {
        return $this->_refUrl;
    }

    /**
     * @param mixed $refUrl
     */
    public function setRefUrl($refUrl)
    {
        $this->_refUrl = $refUrl;
    }

    /**
     * @return mixed
     */
    public function getVdsSubSourceDefId()
    {
        return $this->_vdsSubSourceDefId;
    }

    /**
     * @param mixed $vdsSubSourceDefId
     */
    public function setVdsSubSourceDefId($vdsSubSourceDefId)
    {
        $this->_vdsSubSourceDefId = $vdsSubSourceDefId;
    }

}