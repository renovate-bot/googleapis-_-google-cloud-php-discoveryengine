<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/discoveryengine/v1/user_event_service.proto

namespace GPBMetadata\Google\Cloud\Discoveryengine\V1;

class UserEventService
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Httpbody::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Cloud\Discoveryengine\V1\ImportConfig::initOnce();
        \GPBMetadata\Google\Cloud\Discoveryengine\V1\PurgeConfig::initOnce();
        \GPBMetadata\Google\Cloud\Discoveryengine\V1\UserEvent::initOnce();
        \GPBMetadata\Google\Longrunning\Operations::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
8google/cloud/discoveryengine/v1/user_event_service.protogoogle.cloud.discoveryengine.v1google/api/client.protogoogle/api/field_behavior.protogoogle/api/httpbody.protogoogle/api/resource.proto3google/cloud/discoveryengine/v1/import_config.proto2google/cloud/discoveryengine/v1/purge_config.proto0google/cloud/discoveryengine/v1/user_event.proto#google/longrunning/operations.proto"�
WriteUserEventRequest@
parent (	B0�A�A*
(discoveryengine.googleapis.com/DataStoreH

user_event (2*.google.cloud.discoveryengine.v1.UserEventB�AH �
write_async (B
_user_event"�
CollectUserEventRequest@
parent (	B0�A�A*
(discoveryengine.googleapis.com/DataStore

user_event (	B�A
uri (	H �
ets (H�B
_uriB
_ets2�
UserEventService�
WriteUserEvent6.google.cloud.discoveryengine.v1.WriteUserEventRequest*.google.cloud.discoveryengine.v1.UserEvent"�����"A/v1/{parent=projects/*/locations/*/dataStores/*}/userEvents:write:
user_eventZ]"O/v1/{parent=projects/*/locations/*/collections/*/dataStores/*}/userEvents:write:
user_eventZB"4/v1/{parent=projects/*/locations/*}/userEvents:write:
user_event�
CollectUserEvent8.google.cloud.discoveryengine.v1.CollectUserEventRequest.google.api.HttpBody"�����C/v1/{parent=projects/*/locations/*/dataStores/*}/userEvents:collectZSQ/v1/{parent=projects/*/locations/*/collections/*/dataStores/*}/userEvents:collectZ86/v1/{parent=projects/*/locations/*}/userEvents:collect�
PurgeUserEvents7.google.cloud.discoveryengine.v1.PurgeUserEventsRequest.google.longrunning.Operation"��Ar
7google.cloud.discoveryengine.v1.PurgeUserEventsResponse7google.cloud.discoveryengine.v1.PurgeUserEventsMetadata����"A/v1/{parent=projects/*/locations/*/dataStores/*}/userEvents:purge:*ZT"O/v1/{parent=projects/*/locations/*/collections/*/dataStores/*}/userEvents:purge:*�
ImportUserEvents8.google.cloud.discoveryengine.v1.ImportUserEventsRequest.google.longrunning.Operation"��At
8google.cloud.discoveryengine.v1.ImportUserEventsResponse8google.cloud.discoveryengine.v1.ImportUserEventsMetadata����"B/v1/{parent=projects/*/locations/*/dataStores/*}/userEvents:import:*ZU"P/v1/{parent=projects/*/locations/*/collections/*/dataStores/*}/userEvents:import:*R�Adiscoveryengine.googleapis.com�A.https://www.googleapis.com/auth/cloud-platformB�
#com.google.cloud.discoveryengine.v1BUserEventServiceProtoPZMcloud.google.com/go/discoveryengine/apiv1/discoveryenginepb;discoveryenginepb�DISCOVERYENGINE�Google.Cloud.DiscoveryEngine.V1�Google\\Cloud\\DiscoveryEngine\\V1�"Google::Cloud::DiscoveryEngine::V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

