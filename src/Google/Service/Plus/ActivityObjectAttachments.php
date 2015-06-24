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

namespace Google\Service\Plus;

class ActivityObjectAttachments extends \Google\Collection
{
    protected $collection_key = 'thumbnails';
    protected $internal_gapi_mappings = array(
    );
    public $content;
    public $displayName;
    protected $embedType = 'Google\Service\Plus\ActivityObjectAttachmentsEmbed';
    protected $embedDataType = '';
    protected $fullImageType = 'Google\Service\Plus\ActivityObjectAttachmentsFullImage';
    protected $fullImageDataType = '';
    public $id;
    protected $imageType = 'Google\Service\Plus\ActivityObjectAttachmentsImage';
    protected $imageDataType = '';
    public $objectType;
    protected $thumbnailsType = 'Google\Service\Plus\ActivityObjectAttachmentsThumbnails';
    protected $thumbnailsDataType = 'array';
    public $url;

    public function setContent($content)
    {
        $this->content = $content;
    }

    public function getContent()
    {
        return $this->content;
    }

    public function setDisplayName($displayName)
    {
        $this->displayName = $displayName;
    }

    public function getDisplayName()
    {
        return $this->displayName;
    }

    public function setEmbed(\Google\Service\Plus\ActivityObjectAttachmentsEmbed $embed)
    {
        $this->embed = $embed;
    }

    public function getEmbed()
    {
        return $this->embed;
    }

    public function setFullImage(\Google\Service\Plus\ActivityObjectAttachmentsFullImage $fullImage)
    {
        $this->fullImage = $fullImage;
    }

    public function getFullImage()
    {
        return $this->fullImage;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setImage(\Google\Service\Plus\ActivityObjectAttachmentsImage $image)
    {
        $this->image = $image;
    }

    public function getImage()
    {
        return $this->image;
    }

    public function setObjectType($objectType)
    {
        $this->objectType = $objectType;
    }

    public function getObjectType()
    {
        return $this->objectType;
    }

    public function setThumbnails($thumbnails)
    {
        $this->thumbnails = $thumbnails;
    }

    public function getThumbnails()
    {
        return $this->thumbnails;
    }

    public function setUrl($url)
    {
        $this->url = $url;
    }

    public function getUrl()
    {
        return $this->url;
    }
}
