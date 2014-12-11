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

namespace Google\Service\Autoscaler\Autoscalers;

/**
 * The "autoscalers" collection of methods.
 * Typical usage is:
 *  <code>
 *   $autoscalerService = new \Google\Service\Autoscaler(...);
 *   $autoscalers = $autoscalerService->autoscalers;
 *  </code>
 */
class Resource extends \Google\Service\Resource
{

    /**
     * Deletes the specified Autoscaler resource. (autoscalers.delete)
     *
     * @param string $project Project ID of Autoscaler resource.
     * @param string $zone Zone name of Autoscaler resource.
     * @param string $autoscaler Name of the Autoscaler resource.
     * @param array $optParams Optional parameters.
     * @return \Google\Service\Autoscaler\Operation
     */
    public function delete($project, $zone, $autoscaler, $optParams = array())
    {
        $params = array('project' => $project, 'zone' => $zone, 'autoscaler' => $autoscaler);
        $params = array_merge($params, $optParams);
        return $this->call('delete', array($params), 'Google\Service\Autoscaler\Operation');
    }

    /**
     * Gets the specified Autoscaler resource. (autoscalers.get)
     *
     * @param string $project Project ID of Autoscaler resource.
     * @param string $zone Zone name of Autoscaler resource.
     * @param string $autoscaler Name of the Autoscaler resource.
     * @param array $optParams Optional parameters.
     * @return \Google\Service\Autoscaler\Autoscaler
     */
    public function get($project, $zone, $autoscaler, $optParams = array())
    {
        $params = array('project' => $project, 'zone' => $zone, 'autoscaler' => $autoscaler);
        $params = array_merge($params, $optParams);
        return $this->call('get', array($params), 'Google\Service\Autoscaler\Autoscaler');
    }

    /**
     * Adds new Autoscaler resource. (autoscalers.insert)
     *
     * @param string $project Project ID of Autoscaler resource.
     * @param string $zone Zone name of Autoscaler resource.
     * @param \Google\Service\Autoscaler $postBody
     * @param array $optParams Optional parameters.
     * @return \Google\Service\Autoscaler\Operation
     */
    public function insert($project, $zone, \Google\Service\Autoscaler\Autoscaler $postBody, $optParams = array())
    {
        $params = array('project' => $project, 'zone' => $zone, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('insert', array($params), 'Google\Service\Autoscaler\Operation');
    }

    /**
     * Lists all Autoscaler resources in this zone. (autoscalers.listAutoscalers)
     *
     * @param string $project Project ID of Autoscaler resource.
     * @param string $zone Zone name of Autoscaler resource.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string filter
     * @opt_param string pageToken
     * @opt_param string maxResults
     * @return \Google\Service\Autoscaler\AutoscalerListResponse
     */
    public function listAutoscalers($project, $zone, $optParams = array())
    {
        $params = array('project' => $project, 'zone' => $zone);
        $params = array_merge($params, $optParams);
        return $this->call('list', array($params), 'Google\Service\Autoscaler\AutoscalerListResponse');
    }

    /**
     * Update the entire content of the Autoscaler resource. This method supports
     * patch semantics. (autoscalers.patch)
     *
     * @param string $project Project ID of Autoscaler resource.
     * @param string $zone Zone name of Autoscaler resource.
     * @param string $autoscaler Name of the Autoscaler resource.
     * @param \Google\Service\Autoscaler $postBody
     * @param array $optParams Optional parameters.
     * @return \Google\Service\Autoscaler\Operation
     */
    public function patch(
        $project,
        $zone,
        $autoscaler,
        \Google\Service\Autoscaler\Autoscaler $postBody,
        $optParams = array()
    ) {
        $params = array('project' => $project, 'zone' => $zone, 'autoscaler' => $autoscaler, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('patch', array($params), 'Google\Service\Autoscaler\Operation');
    }

    /**
     * Update the entire content of the Autoscaler resource. (autoscalers.update)
     *
     * @param string $project Project ID of Autoscaler resource.
     * @param string $zone Zone name of Autoscaler resource.
     * @param string $autoscaler Name of the Autoscaler resource.
     * @param \Google\Service\Autoscaler $postBody
     * @param array $optParams Optional parameters.
     * @return \Google\Service\Autoscaler\Operation
     */
    public function update(
        $project,
        $zone,
        $autoscaler,
        \Google\Service\Autoscaler\Autoscaler $postBody,
        $optParams = array()
    ) {
        $params = array('project' => $project, 'zone' => $zone, 'autoscaler' => $autoscaler, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('update', array($params), 'Google\Service\Autoscaler\Operation');
    }
}
