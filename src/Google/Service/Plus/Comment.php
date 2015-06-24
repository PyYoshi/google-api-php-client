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

class Comment extends \Google\Collection
{
    protected $collection_key = 'inReplyTo';
    protected $internal_gapi_mappings = array(
    );
    protected $actorType = 'Google\Service\Plus\CommentActor';
    protected $actorDataType = '';
    public $etag;
    public $id;
    protected $inReplyToType = 'Google\Service\Plus\CommentInReplyTo';
    protected $inReplyToDataType = 'array';
    public $kind;
    protected $objectType = 'Google\Service\Plus\CommentObject';
    protected $objectDataType = '';
    protected $plusonersType = 'Google\Service\Plus\CommentPlusoners';
    protected $plusonersDataType = '';
    public $published;
    public $selfLink;
    public $updated;
    public $verb;

    public function setActor(\Google\Service\Plus\CommentActor $actor)
    {
        $this->actor = $actor;
    }

    public function getActor()
    {
        return $this->actor;
    }

    public function setEtag($etag)
    {
        $this->etag = $etag;
    }

    public function getEtag()
    {
        return $this->etag;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setInReplyTo($inReplyTo)
    {
        $this->inReplyTo = $inReplyTo;
    }

    public function getInReplyTo()
    {
        return $this->inReplyTo;
    }

    public function setKind($kind)
    {
        $this->kind = $kind;
    }

    public function getKind()
    {
        return $this->kind;
    }

    public function setObject(\Google\Service\Plus\CommentObject $object)
    {
        $this->object = $object;
    }

    public function getObject()
    {
        return $this->object;
    }

    public function setPlusoners(\Google\Service\Plus\CommentPlusoners $plusoners)
    {
        $this->plusoners = $plusoners;
    }

    public function getPlusoners()
    {
        return $this->plusoners;
    }

    public function setPublished($published)
    {
        $this->published = $published;
    }

    public function getPublished()
    {
        return $this->published;
    }

    public function setSelfLink($selfLink)
    {
        $this->selfLink = $selfLink;
    }

    public function getSelfLink()
    {
        return $this->selfLink;
    }

    public function setUpdated($updated)
    {
        $this->updated = $updated;
    }

    public function getUpdated()
    {
        return $this->updated;
    }

    public function setVerb($verb)
    {
        $this->verb = $verb;
    }

    public function getVerb()
    {
        return $this->verb;
    }
}
