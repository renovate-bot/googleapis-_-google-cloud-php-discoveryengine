<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/discoveryengine/v1beta/conversational_search_service.proto

namespace GPBMetadata\Google\Cloud\Discoveryengine\V1Beta;

class ConversationalSearchService
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
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Cloud\Discoveryengine\V1Beta\Conversation::initOnce();
        \GPBMetadata\Google\Cloud\Discoveryengine\V1Beta\SearchService::initOnce();
        \GPBMetadata\Google\Protobuf\GPBEmpty::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        $pool->internalAddGeneratedFile(
            '
�\'
Ggoogle/cloud/discoveryengine/v1beta/conversational_search_service.proto#google.cloud.discoveryengine.v1betagoogle/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.proto6google/cloud/discoveryengine/v1beta/conversation.proto8google/cloud/discoveryengine/v1beta/search_service.protogoogle/protobuf/empty.proto google/protobuf/field_mask.proto"�
ConverseConversationRequestA
name (	B3�A�A-
+discoveryengine.googleapis.com/ConversationB
query (2..google.cloud.discoveryengine.v1beta.TextInputB�AI
serving_config (	B1�A.
,discoveryengine.googleapis.com/ServingConfigG
conversation (21.google.cloud.discoveryengine.v1beta.Conversation
safe_search (e
user_labels (2P.google.cloud.discoveryengine.v1beta.ConverseConversationRequest.UserLabelsEntryf
summary_spec (2P.google.cloud.discoveryengine.v1beta.SearchRequest.ContentSearchSpec.SummarySpec
filter	 (	1
UserLabelsEntry
key (	
value (	:8"�
ConverseConversationResponse9
reply (2*.google.cloud.discoveryengine.v1beta.ReplyG
conversation (21.google.cloud.discoveryengine.v1beta.Conversation
related_questions (	X
search_results (2@.google.cloud.discoveryengine.v1beta.SearchResponse.SearchResult"�
CreateConversationRequest@
parent (	B0�A�A*
(discoveryengine.googleapis.com/DataStoreL
conversation (21.google.cloud.discoveryengine.v1beta.ConversationB�A"�
UpdateConversationRequestL
conversation (21.google.cloud.discoveryengine.v1beta.ConversationB�A/
update_mask (2.google.protobuf.FieldMask"^
DeleteConversationRequestA
name (	B3�A�A-
+discoveryengine.googleapis.com/Conversation"[
GetConversationRequestA
name (	B3�A�A-
+discoveryengine.googleapis.com/Conversation"�
ListConversationsRequest@
parent (	B0�A�A*
(discoveryengine.googleapis.com/DataStore
	page_size (

page_token (	
filter (	
order_by (	"~
ListConversationsResponseH
conversations (21.google.cloud.discoveryengine.v1beta.Conversation
next_page_token (	2�
ConversationalSearchService�
ConverseConversation@.google.cloud.discoveryengine.v1beta.ConverseConversationRequestA.google.cloud.discoveryengine.v1beta.ConverseConversationResponse"��A
name,query����"K/v1beta/{name=projects/*/locations/*/dataStores/*/conversations/*}:converse:*Z^"Y/v1beta/{name=projects/*/locations/*/collections/*/dataStores/*/conversations/*}:converse:*Z["V/v1beta/{name=projects/*/locations/*/collections/*/engines/*/conversations/*}:converse:*�
CreateConversation>.google.cloud.discoveryengine.v1beta.CreateConversationRequest1.google.cloud.discoveryengine.v1beta.Conversation"��Aparent,conversation����"B/v1beta/{parent=projects/*/locations/*/dataStores/*}/conversations:conversationZ`"P/v1beta/{parent=projects/*/locations/*/collections/*/dataStores/*}/conversations:conversationZ]"M/v1beta/{parent=projects/*/locations/*/collections/*/engines/*}/conversations:conversation�
DeleteConversation>.google.cloud.discoveryengine.v1beta.DeleteConversationRequest.google.protobuf.Empty"��Aname����*B/v1beta/{name=projects/*/locations/*/dataStores/*/conversations/*}ZR*P/v1beta/{name=projects/*/locations/*/collections/*/dataStores/*/conversations/*}ZO*M/v1beta/{name=projects/*/locations/*/collections/*/engines/*/conversations/*}�
UpdateConversation>.google.cloud.discoveryengine.v1beta.UpdateConversationRequest1.google.cloud.discoveryengine.v1beta.Conversation"��Aconversation,update_mask����2O/v1beta/{conversation.name=projects/*/locations/*/dataStores/*/conversations/*}:conversationZm2]/v1beta/{conversation.name=projects/*/locations/*/collections/*/dataStores/*/conversations/*}:conversationZj2Z/v1beta/{conversation.name=projects/*/locations/*/collections/*/engines/*/conversations/*}:conversation�
GetConversation;.google.cloud.discoveryengine.v1beta.GetConversationRequest1.google.cloud.discoveryengine.v1beta.Conversation"��Aname����B/v1beta/{name=projects/*/locations/*/dataStores/*/conversations/*}ZRP/v1beta/{name=projects/*/locations/*/collections/*/dataStores/*/conversations/*}ZOM/v1beta/{name=projects/*/locations/*/collections/*/engines/*/conversations/*}�
ListConversations=.google.cloud.discoveryengine.v1beta.ListConversationsRequest>.google.cloud.discoveryengine.v1beta.ListConversationsResponse"��Aparent����B/v1beta/{parent=projects/*/locations/*/dataStores/*}/conversationsZRP/v1beta/{parent=projects/*/locations/*/collections/*/dataStores/*}/conversationsZOM/v1beta/{parent=projects/*/locations/*/collections/*/engines/*}/conversationsR�Adiscoveryengine.googleapis.com�A.https://www.googleapis.com/auth/cloud-platformB�
\'com.google.cloud.discoveryengine.v1betaB ConversationalSearchServiceProtoPZQcloud.google.com/go/discoveryengine/apiv1beta/discoveryenginepb;discoveryenginepb�DISCOVERYENGINE�#Google.Cloud.DiscoveryEngine.V1Beta�#Google\\Cloud\\DiscoveryEngine\\V1beta�&Google::Cloud::DiscoveryEngine::V1betabproto3'
        , true);

        static::$is_initialized = true;
    }
}

