<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/discoveryengine/v1beta/site_search_engine.proto

namespace GPBMetadata\Google\Cloud\Discoveryengine\V1Beta;

class SiteSearchEngine
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
<google/cloud/discoveryengine/v1beta/site_search_engine.proto#google.cloud.discoveryengine.v1betagoogle/api/resource.protogoogle/protobuf/timestamp.proto"�
SiteSearchEngine
name (	:��A�
/discoveryengine.googleapis.com/SiteSearchEnginePprojects/{project}/locations/{location}/dataStores/{data_store}/siteSearchEngineiprojects/{project}/locations/{location}/collections/{collection}/dataStores/{data_store}/siteSearchEngine"�	

TargetSite
name (	B�A$
provided_uri_pattern (	B�A�AB
type (24.google.cloud.discoveryengine.v1beta.TargetSite.Type
exact_match (B�A"
generated_uri_pattern (	B�A^
site_verification_info (29.google.cloud.discoveryengine.v1beta.SiteVerificationInfoB�A\\
indexing_status (2>.google.cloud.discoveryengine.v1beta.TargetSite.IndexingStatusB�A4
update_time (2.google.protobuf.TimestampB�AZ
failure_reason	 (2=.google.cloud.discoveryengine.v1beta.TargetSite.FailureReasonB�A�
FailureReasonc
quota_failure (2J.google.cloud.discoveryengine.v1beta.TargetSite.FailureReason.QuotaFailureH ,
QuotaFailure
total_required_quota (B	
failure"6
Type
TYPE_UNSPECIFIED 
INCLUDE
EXCLUDE"g
IndexingStatus
INDEXING_STATUS_UNSPECIFIED 
PENDING

FAILED
	SUCCEEDED
DELETING:��A�
)discoveryengine.googleapis.com/TargetSitejprojects/{project}/locations/{location}/dataStores/{data_store}/siteSearchEngine/targetSites/{target_site}�projects/{project}/locations/{location}/collections/{collection}/dataStores/{data_store}/siteSearchEngine/targetSites/{target_site}"�
SiteVerificationInfop
site_verification_state (2O.google.cloud.discoveryengine.v1beta.SiteVerificationInfo.SiteVerificationState/
verify_time (2.google.protobuf.Timestamp"l
SiteVerificationState\'
#SITE_VERIFICATION_STATE_UNSPECIFIED 
VERIFIED

UNVERIFIED
EXEMPTEDB�
\'com.google.cloud.discoveryengine.v1betaBSiteSearchEngineProtoPZQcloud.google.com/go/discoveryengine/apiv1beta/discoveryenginepb;discoveryenginepb�DISCOVERYENGINE�#Google.Cloud.DiscoveryEngine.V1Beta�#Google\\Cloud\\DiscoveryEngine\\V1beta�&Google::Cloud::DiscoveryEngine::V1betabproto3'
        , true);

        static::$is_initialized = true;
    }
}

