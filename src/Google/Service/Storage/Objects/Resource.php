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

namespace Google\Service\Storage\Objects;

class Resource extends \Google\Service\Resource
{

    /**
     * Concatenates a list of existing objects into a new object in the same bucket.
     * (objects.compose)
     *
     * @param string $destinationBucket
     * Name of the bucket in which to store the new object.
     * @param string $destinationObject
     * Name of the new object.
     * @param \Google\Service\Storage\ComposeRequest $postBody
     * @param array $optParams Optional parameters.
     *
     * @opt_param string ifGenerationMatch
     * Makes the operation conditional on whether the object's current generation matches the given
     * value.
     * @opt_param string ifMetagenerationMatch
     * Makes the operation conditional on whether the object's current metageneration matches the given
     * value.
     * @opt_param string destinationPredefinedAcl
     * Apply a predefined set of access controls to the destination object.
     * @return \Google\Service\Storage\StorageObject
     */
    public function compose($destinationBucket, $destinationObject, \Google\Service\Storage\ComposeRequest $postBody, $optParams = array())
    {
        $params = array('destinationBucket' => $destinationBucket, 'destinationObject' => $destinationObject, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('compose', array($params), 'Google\Service\Storage\StorageObject');
    }

    /**
     * Copies an object to a specified location. Optionally overrides metadata.
     * (objects.copy)
     *
     * @param string $sourceBucket
     * Name of the bucket in which to find the source object.
     * @param string $sourceObject
     * Name of the source object.
     * @param string $destinationBucket
     * Name of the bucket in which to store the new object. Overrides the provided object metadata's
     * bucket value, if any.
     * @param string $destinationObject
     * Name of the new object. Required when the object metadata is not otherwise provided. Overrides
     * the object metadata's name value, if any.
     * @param \Google\Service\Storage\StorageObject $postBody
     * @param array $optParams Optional parameters.
     *
     * @opt_param string ifSourceGenerationNotMatch
     * Makes the operation conditional on whether the source object's generation does not match the
     * given value.
     * @opt_param string ifGenerationNotMatch
     * Makes the operation conditional on whether the destination object's current generation does not
     * match the given value.
     * @opt_param string ifSourceMetagenerationNotMatch
     * Makes the operation conditional on whether the source object's current metageneration does not
     * match the given value.
     * @opt_param string ifMetagenerationMatch
     * Makes the operation conditional on whether the destination object's current metageneration
     * matches the given value.
     * @opt_param string sourceGeneration
     * If present, selects a specific revision of the source object (as opposed to the latest version,
     * the default).
     * @opt_param string destinationPredefinedAcl
     * Apply a predefined set of access controls to the destination object.
     * @opt_param string ifSourceGenerationMatch
     * Makes the operation conditional on whether the source object's generation matches the given
     * value.
     * @opt_param string ifSourceMetagenerationMatch
     * Makes the operation conditional on whether the source object's current metageneration matches
     * the given value.
     * @opt_param string ifGenerationMatch
     * Makes the operation conditional on whether the destination object's current generation matches
     * the given value.
     * @opt_param string ifMetagenerationNotMatch
     * Makes the operation conditional on whether the destination object's current metageneration does
     * not match the given value.
     * @opt_param string projection
     * Set of properties to return. Defaults to noAcl, unless the object resource specifies the acl
     * property, when it defaults to full.
     * @return \Google\Service\Storage\StorageObject
     */
    public function copy($sourceBucket, $sourceObject, $destinationBucket, $destinationObject, \Google\Service\Storage\StorageObject $postBody, $optParams = array())
    {
        $params = array('sourceBucket' => $sourceBucket, 'sourceObject' => $sourceObject, 'destinationBucket' => $destinationBucket, 'destinationObject' => $destinationObject, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('copy', array($params), 'Google\Service\Storage\StorageObject');
    }

    /**
     * Deletes an object and its metadata. Deletions are permanent if versioning is
     * not enabled for the bucket, or if the generation parameter is used.
     * (objects.delete)
     *
     * @param string $bucket
     * Name of the bucket in which the object resides.
     * @param string $object
     * Name of the object.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string ifGenerationNotMatch
     * Makes the operation conditional on whether the object's current generation does not match the
     * given value.
     * @opt_param string generation
     * If present, permanently deletes a specific revision of this object (as opposed to the latest
     * version, the default).
     * @opt_param string ifMetagenerationMatch
     * Makes the operation conditional on whether the object's current metageneration matches the given
     * value.
     * @opt_param string ifGenerationMatch
     * Makes the operation conditional on whether the object's current generation matches the given
     * value.
     * @opt_param string ifMetagenerationNotMatch
     * Makes the operation conditional on whether the object's current metageneration does not match
     * the given value.
     */
    public function delete($bucket, $object, $optParams = array())
    {
        $params = array('bucket' => $bucket, 'object' => $object);
        $params = array_merge($params, $optParams);
        return $this->call('delete', array($params));
    }

    /**
     * Retrieves an object or its metadata. (objects.get)
     *
     * @param string $bucket
     * Name of the bucket in which the object resides.
     * @param string $object
     * Name of the object.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string ifGenerationNotMatch
     * Makes the operation conditional on whether the object's generation does not match the given
     * value.
     * @opt_param string generation
     * If present, selects a specific revision of this object (as opposed to the latest version, the
     * default).
     * @opt_param string ifMetagenerationMatch
     * Makes the operation conditional on whether the object's current metageneration matches the given
     * value.
     * @opt_param string ifGenerationMatch
     * Makes the operation conditional on whether the object's generation matches the given value.
     * @opt_param string ifMetagenerationNotMatch
     * Makes the operation conditional on whether the object's current metageneration does not match
     * the given value.
     * @opt_param string projection
     * Set of properties to return. Defaults to noAcl.
     * @return \Google\Service\Storage\StorageObject
     */
    public function get($bucket, $object, $optParams = array())
    {
        $params = array('bucket' => $bucket, 'object' => $object);
        $params = array_merge($params, $optParams);
        return $this->call('get', array($params), 'Google\Service\Storage\StorageObject');
    }

    /**
     * Stores a new object and metadata. (objects.insert)
     *
     * @param string $bucket
     * Name of the bucket in which to store the new object. Overrides the provided object metadata's
     * bucket value, if any.
     * @param \Google\Service\Storage\StorageObject $postBody
     * @param array $optParams Optional parameters.
     *
     * @opt_param string predefinedAcl
     * Apply a predefined set of access controls to this object.
     * @opt_param string projection
     * Set of properties to return. Defaults to noAcl, unless the object resource specifies the acl
     * property, when it defaults to full.
     * @opt_param string ifGenerationNotMatch
     * Makes the operation conditional on whether the object's current generation does not match the
     * given value.
     * @opt_param string ifMetagenerationMatch
     * Makes the operation conditional on whether the object's current metageneration matches the given
     * value.
     * @opt_param string contentEncoding
     * If set, sets the contentEncoding property of the final object to this value. Setting this
     * parameter is equivalent to setting the contentEncoding metadata property. This can be useful
     * when uploading an object with uploadType=media to indicate the encoding of the content being
     * uploaded.
     * @opt_param string ifGenerationMatch
     * Makes the operation conditional on whether the object's current generation matches the given
     * value.
     * @opt_param string ifMetagenerationNotMatch
     * Makes the operation conditional on whether the object's current metageneration does not match
     * the given value.
     * @opt_param string name
     * Name of the object. Required when the object metadata is not otherwise provided. Overrides the
     * object metadata's name value, if any.
     * @return \Google\Service\Storage\StorageObject
     */
    public function insert($bucket, \Google\Service\Storage\StorageObject $postBody, $optParams = array())
    {
        $params = array('bucket' => $bucket, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('insert', array($params), 'Google\Service\Storage\StorageObject');
    }

    /**
     * Retrieves a list of objects matching the criteria. (objects.listObjects)
     *
     * @param string $bucket
     * Name of the bucket in which to look for objects.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string projection
     * Set of properties to return. Defaults to noAcl.
     * @opt_param bool versions
     * If true, lists all versions of a file as distinct results.
     * @opt_param string prefix
     * Filter results to objects whose names begin with this prefix.
     * @opt_param string maxResults
     * Maximum number of items plus prefixes to return. As duplicate prefixes are omitted, fewer total
     * results may be returned than requested.
     * @opt_param string pageToken
     * A previously-returned page token representing part of the larger set of results to view.
     * @opt_param string delimiter
     * Returns results in a directory-like mode. items will contain only objects whose names, aside
     * from the prefix, do not contain delimiter. Objects whose names, aside from the prefix, contain
     * delimiter will have their name, truncated after the delimiter, returned in prefixes. Duplicate
     * prefixes are omitted.
     * @return \Google\Service\Storage\Objects
     */
    public function listObjects($bucket, $optParams = array())
    {
        $params = array('bucket' => $bucket);
        $params = array_merge($params, $optParams);
        return $this->call('list', array($params), 'Google\Service\Storage\Objects');
    }

    /**
     * Updates an object's metadata. This method supports patch semantics.
     * semantics. (objects.patch)
     *
     * @param string $bucket
     * Name of the bucket in which the object resides.
     * @param string $object
     * Name of the object.
     * @param \Google\Service\Storage\StorageObject $postBody
     * @param array $optParams Optional parameters.
     *
     * @opt_param string predefinedAcl
     * Apply a predefined set of access controls to this object.
     * @opt_param string ifGenerationNotMatch
     * Makes the operation conditional on whether the object's current generation does not match the
     * given value.
     * @opt_param string generation
     * If present, selects a specific revision of this object (as opposed to the latest version, the
     * default).
     * @opt_param string ifMetagenerationMatch
     * Makes the operation conditional on whether the object's current metageneration matches the given
     * value.
     * @opt_param string ifGenerationMatch
     * Makes the operation conditional on whether the object's current generation matches the given
     * value.
     * @opt_param string ifMetagenerationNotMatch
     * Makes the operation conditional on whether the object's current metageneration does not match
     * the given value.
     * @opt_param string projection
     * Set of properties to return. Defaults to full.
     * @return \Google\Service\Storage\StorageObject
     */
    public function patch($bucket, $object, \Google\Service\Storage\StorageObject $postBody, $optParams = array())
    {
        $params = array('bucket' => $bucket, 'object' => $object, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('patch', array($params), 'Google\Service\Storage\StorageObject');
    }

    /**
     * Updates an object's metadata. (objects.update)
     *
     * @param string $bucket
     * Name of the bucket in which the object resides.
     * @param string $object
     * Name of the object.
     * @param \Google\Service\Storage\StorageObject $postBody
     * @param array $optParams Optional parameters.
     *
     * @opt_param string predefinedAcl
     * Apply a predefined set of access controls to this object.
     * @opt_param string ifGenerationNotMatch
     * Makes the operation conditional on whether the object's current generation does not match the
     * given value.
     * @opt_param string generation
     * If present, selects a specific revision of this object (as opposed to the latest version, the
     * default).
     * @opt_param string ifMetagenerationMatch
     * Makes the operation conditional on whether the object's current metageneration matches the given
     * value.
     * @opt_param string ifGenerationMatch
     * Makes the operation conditional on whether the object's current generation matches the given
     * value.
     * @opt_param string ifMetagenerationNotMatch
     * Makes the operation conditional on whether the object's current metageneration does not match
     * the given value.
     * @opt_param string projection
     * Set of properties to return. Defaults to full.
     * @return \Google\Service\Storage\StorageObject
     */
    public function update($bucket, $object, \Google\Service\Storage\StorageObject $postBody, $optParams = array())
    {
        $params = array('bucket' => $bucket, 'object' => $object, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('update', array($params), 'Google\Service\Storage\StorageObject');
    }

    /**
     * Watch for changes on all objects in a bucket. (objects.watchAll)
     *
     * @param string $bucket
     * Name of the bucket in which to look for objects.
     * @param \Google\Service\Storage\Channel $postBody
     * @param array $optParams Optional parameters.
     *
     * @opt_param string projection
     * Set of properties to return. Defaults to noAcl.
     * @opt_param bool versions
     * If true, lists all versions of a file as distinct results.
     * @opt_param string prefix
     * Filter results to objects whose names begin with this prefix.
     * @opt_param string maxResults
     * Maximum number of items plus prefixes to return. As duplicate prefixes are omitted, fewer total
     * results may be returned than requested.
     * @opt_param string pageToken
     * A previously-returned page token representing part of the larger set of results to view.
     * @opt_param string delimiter
     * Returns results in a directory-like mode. items will contain only objects whose names, aside
     * from the prefix, do not contain delimiter. Objects whose names, aside from the prefix, contain
     * delimiter will have their name, truncated after the delimiter, returned in prefixes. Duplicate
     * prefixes are omitted.
     * @return \Google\Service\Storage\Channel
     */
    public function watchAll($bucket, \Google\Service\Storage\Channel $postBody, $optParams = array())
    {
        $params = array('bucket' => $bucket, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('watchAll', array($params), 'Google\Service\Storage\Channel');
    }
}
 