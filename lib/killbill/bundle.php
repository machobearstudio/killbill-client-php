<?php
/*
 * Copyright 2011-2012 Ning, Inc.
 *
 * Ning licenses this file to you under the Apache License, version 2.0
 * (the "License"); you may not use this file except in compliance with the
 * License.  You may obtain a copy of the License at:
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.  See the
 * License for the specific language governing permissions and limitations
 * under the License.
 */

class Killbill_Bundle extends Killbill_Resource {
    protected $bundleId;
    protected $accountId;
    protected $externalKey;

    public function get() {
        $response = $this->_get(Killbill_Client::PATH_BUNDLES . '/' . $this->bundleId);
        return $this->_getFromBody(Killbill_Bundle, $response);
    }

    public function getByExternalKey() {
        $response = $this->_get(Killbill_Client::PATH_BUNDLES . '?external_key=' . $this->externalKey);
        return $this->_getFromBody(Killbill_Bundle, $response);
    }

    public function getSubscriptions() {
        $response = $this->_get(Killbill_Client::PATH_BUNDLES . '/' . $this->bundleId . '/subscriptions');
        return $this->_getFromBody(Killbill_Subscription, $response);
    }

    public function getTags() {
        // TODO This will change
        $response = $this->_get(Killbill_Client::PATH_BUNDLES . Killbill_Client::PATH_TAGS . '/' . $this->bundleId);
        return $this->_getFromBody(Killbill_Tag, $response);
    }

    public function create($user, $reason, $comment) {
        $response = $this->_create(Killbill_Client::PATH_BUNDLES, $user, $reason, $comment);
        return $this->_getFromResponse(Killbill_Bundle, $response);
    }

    public function addTags($tags, $user, $reason, $comment) {
        // TODO This will change
        $response = $this->_create(Killbill_Client::PATH_BUNDLES . Killbill_Client::PATH_TAGS . '/' . $this->accountId . '?tag_list=' . join(',', $tags),
            $user, $reason, $comment);
        return $this->_getFromResponse(Killbill_Tag, $response);
    }
}