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

namespace Google\Service\Storage\Channels;

class Resource extends \Google\Service\Resource
{
    /**
     * Stop watching resources through this channel (channels.stop)
     *
     * @param \Google\Service\Storage\Channel $postBody
     * @param array $optParams Optional parameters.
     */
    public function stop(\Google\Service\Storage\Channel $postBody, $optParams = array())
    {
        $params = array('postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('stop', array($params));
    }
}
 