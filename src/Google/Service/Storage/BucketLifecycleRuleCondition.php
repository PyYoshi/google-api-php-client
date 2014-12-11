<?php
/*
* Copyright 2010 Google Inc.
*
* Licensed under the Apache License, Version 2.0 (the "License"); you may not
* use this file except in compliance with the License. You may obtain a copy of
* the License at
*
* http://www.apache.org/licenses/LICENSE-2.0
*
* Unless required by applicable law or agreed to in writing, software
* distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
* WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
* License for the specific language governing permissions and limitations under
* the License.
*/

namespace Google\Service\Storage;

class BucketLifecycleRuleCondition extends \Google\Model
{
    protected $internal_gapi_mappings = array();
    public $age;
    public $createdBefore;
    public $isLive;
    public $numNewerVersions;

    public function setAge($age)
    {
        $this->age = $age;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function setCreatedBefore($createdBefore)
    {
        $this->createdBefore = $createdBefore;
    }

    public function getCreatedBefore()
    {
        return $this->createdBefore;
    }

    public function setIsLive($isLive)
    {
        $this->isLive = $isLive;
    }

    public function getIsLive()
    {
        return $this->isLive;
    }

    public function setNumNewerVersions($numNewerVersions)
    {
        $this->numNewerVersions = $numNewerVersions;
    }

    public function getNumNewerVersions()
    {
        return $this->numNewerVersions;
    }
}
