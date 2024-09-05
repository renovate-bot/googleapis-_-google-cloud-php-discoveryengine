<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/discoveryengine/v1/recommendation_service.proto

namespace Google\Cloud\DiscoveryEngine\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for Recommend method.
 *
 * Generated from protobuf message <code>google.cloud.discoveryengine.v1.RecommendRequest</code>
 */
class RecommendRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Full resource name of a
     * [ServingConfig][google.cloud.discoveryengine.v1.ServingConfig]:
     * `projects/&#42;&#47;locations/global/collections/&#42;&#47;engines/&#42;&#47;servingConfigs/&#42;`, or
     * `projects/&#42;&#47;locations/global/collections/&#42;&#47;dataStores/&#42;&#47;servingConfigs/&#42;`
     * One default serving config is created along with your recommendation engine
     * creation. The engine ID is used as the ID of the default serving
     * config. For example, for Engine
     * `projects/&#42;&#47;locations/global/collections/&#42;&#47;engines/my-engine`, you can use
     * `projects/&#42;&#47;locations/global/collections/&#42;&#47;engines/my-engine/servingConfigs/my-engine`
     * for your
     * [RecommendationService.Recommend][google.cloud.discoveryengine.v1.RecommendationService.Recommend]
     * requests.
     *
     * Generated from protobuf field <code>string serving_config = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $serving_config = '';
    /**
     * Required. Context about the user, what they are looking at and what action
     * they took to trigger the Recommend request. Note that this user event
     * detail won't be ingested to userEvent logs. Thus, a separate userEvent
     * write request is required for event logging.
     * Don't set
     * [UserEvent.user_pseudo_id][google.cloud.discoveryengine.v1.UserEvent.user_pseudo_id]
     * or
     * [UserEvent.user_info.user_id][google.cloud.discoveryengine.v1.UserInfo.user_id]
     * to the same fixed ID for different users. If you are trying to receive
     * non-personalized recommendations (not recommended; this can negatively
     * impact model performance), instead set
     * [UserEvent.user_pseudo_id][google.cloud.discoveryengine.v1.UserEvent.user_pseudo_id]
     * to a random unique ID and leave
     * [UserEvent.user_info.user_id][google.cloud.discoveryengine.v1.UserInfo.user_id]
     * unset.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1.UserEvent user_event = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $user_event = null;
    /**
     * Maximum number of results to return. Set this property
     * to the number of recommendation results needed. If zero, the service
     * chooses a reasonable default. The maximum allowed value is 100. Values
     * above 100 are set to 100.
     *
     * Generated from protobuf field <code>int32 page_size = 3;</code>
     */
    protected $page_size = 0;
    /**
     * Filter for restricting recommendation results with a length limit of 5,000
     * characters. Currently, only filter expressions on the `filter_tags`
     * attribute is supported.
     * Examples:
     *  * `(filter_tags: ANY("Red", "Blue") OR filter_tags: ANY("Hot", "Cold"))`
     *  * `(filter_tags: ANY("Red", "Blue")) AND NOT (filter_tags: ANY("Green"))`
     * If `attributeFilteringSyntax` is set to true under the `params` field, then
     * attribute-based expressions are expected instead of the above described
     * tag-based syntax. Examples:
     *  * (launguage: ANY("en", "es")) AND NOT (categories: ANY("Movie"))
     *  * (available: true) AND
     *    (launguage: ANY("en", "es")) OR (categories: ANY("Movie"))
     * If your filter blocks all results, the API returns generic
     * (unfiltered) popular Documents. If you only want results strictly matching
     * the filters, set `strictFiltering` to `true` in
     * [RecommendRequest.params][google.cloud.discoveryengine.v1.RecommendRequest.params]
     * to receive empty results instead.
     * Note that the API never returns
     * [Document][google.cloud.discoveryengine.v1.Document]s with `storageStatus`
     * as `EXPIRED` or `DELETED` regardless of filter choices.
     *
     * Generated from protobuf field <code>string filter = 4;</code>
     */
    protected $filter = '';
    /**
     * Use validate only mode for this recommendation query. If set to `true`, a
     * fake model is used that returns arbitrary Document IDs.
     * Note that the validate only mode should only be used for testing the API,
     * or if the model is not ready.
     *
     * Generated from protobuf field <code>bool validate_only = 5;</code>
     */
    protected $validate_only = false;
    /**
     * Additional domain specific parameters for the recommendations.
     * Allowed values:
     * * `returnDocument`: Boolean. If set to `true`, the associated Document
     *    object is returned in
     *    [RecommendResponse.RecommendationResult.document][google.cloud.discoveryengine.v1.RecommendResponse.RecommendationResult.document].
     * * `returnScore`: Boolean. If set to true, the recommendation score
     *    corresponding to each returned Document is set in
     *    [RecommendResponse.RecommendationResult.metadata][google.cloud.discoveryengine.v1.RecommendResponse.RecommendationResult.metadata].
     *    The given score indicates the probability of a Document conversion given
     *    the user's context and history.
     * * `strictFiltering`: Boolean. True by default. If set to `false`, the
     * service
     *    returns generic (unfiltered) popular Documents instead of empty if
     *    your filter blocks all recommendation results.
     * * `diversityLevel`: String. Default empty. If set to be non-empty, then
     *    it needs to be one of:
     *     *  `no-diversity`
     *     *  `low-diversity`
     *     *  `medium-diversity`
     *     *  `high-diversity`
     *     *  `auto-diversity`
     *    This gives request-level control and adjusts recommendation results
     *    based on Document category.
     * * `attributeFilteringSyntax`: Boolean. False by default. If set to true,
     *    the `filter` field is interpreted according to the new,
     *    attribute-based syntax.
     *
     * Generated from protobuf field <code>map<string, .google.protobuf.Value> params = 6;</code>
     */
    private $params;
    /**
     * The user labels applied to a resource must meet the following requirements:
     * * Each resource can have multiple labels, up to a maximum of 64.
     * * Each label must be a key-value pair.
     * * Keys have a minimum length of 1 character and a maximum length of 63
     *   characters and cannot be empty. Values can be empty and have a maximum
     *   length of 63 characters.
     * * Keys and values can contain only lowercase letters, numeric characters,
     *   underscores, and dashes. All characters must use UTF-8 encoding, and
     *   international characters are allowed.
     * * The key portion of a label must be unique. However, you can use the same
     *   key with multiple resources.
     * * Keys must start with a lowercase letter or international character.
     * See [Requirements for
     * labels](https://cloud.google.com/resource-manager/docs/creating-managing-labels#requirements)
     * for more details.
     *
     * Generated from protobuf field <code>map<string, string> user_labels = 8;</code>
     */
    private $user_labels;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $serving_config
     *           Required. Full resource name of a
     *           [ServingConfig][google.cloud.discoveryengine.v1.ServingConfig]:
     *           `projects/&#42;&#47;locations/global/collections/&#42;&#47;engines/&#42;&#47;servingConfigs/&#42;`, or
     *           `projects/&#42;&#47;locations/global/collections/&#42;&#47;dataStores/&#42;&#47;servingConfigs/&#42;`
     *           One default serving config is created along with your recommendation engine
     *           creation. The engine ID is used as the ID of the default serving
     *           config. For example, for Engine
     *           `projects/&#42;&#47;locations/global/collections/&#42;&#47;engines/my-engine`, you can use
     *           `projects/&#42;&#47;locations/global/collections/&#42;&#47;engines/my-engine/servingConfigs/my-engine`
     *           for your
     *           [RecommendationService.Recommend][google.cloud.discoveryengine.v1.RecommendationService.Recommend]
     *           requests.
     *     @type \Google\Cloud\DiscoveryEngine\V1\UserEvent $user_event
     *           Required. Context about the user, what they are looking at and what action
     *           they took to trigger the Recommend request. Note that this user event
     *           detail won't be ingested to userEvent logs. Thus, a separate userEvent
     *           write request is required for event logging.
     *           Don't set
     *           [UserEvent.user_pseudo_id][google.cloud.discoveryengine.v1.UserEvent.user_pseudo_id]
     *           or
     *           [UserEvent.user_info.user_id][google.cloud.discoveryengine.v1.UserInfo.user_id]
     *           to the same fixed ID for different users. If you are trying to receive
     *           non-personalized recommendations (not recommended; this can negatively
     *           impact model performance), instead set
     *           [UserEvent.user_pseudo_id][google.cloud.discoveryengine.v1.UserEvent.user_pseudo_id]
     *           to a random unique ID and leave
     *           [UserEvent.user_info.user_id][google.cloud.discoveryengine.v1.UserInfo.user_id]
     *           unset.
     *     @type int $page_size
     *           Maximum number of results to return. Set this property
     *           to the number of recommendation results needed. If zero, the service
     *           chooses a reasonable default. The maximum allowed value is 100. Values
     *           above 100 are set to 100.
     *     @type string $filter
     *           Filter for restricting recommendation results with a length limit of 5,000
     *           characters. Currently, only filter expressions on the `filter_tags`
     *           attribute is supported.
     *           Examples:
     *            * `(filter_tags: ANY("Red", "Blue") OR filter_tags: ANY("Hot", "Cold"))`
     *            * `(filter_tags: ANY("Red", "Blue")) AND NOT (filter_tags: ANY("Green"))`
     *           If `attributeFilteringSyntax` is set to true under the `params` field, then
     *           attribute-based expressions are expected instead of the above described
     *           tag-based syntax. Examples:
     *            * (launguage: ANY("en", "es")) AND NOT (categories: ANY("Movie"))
     *            * (available: true) AND
     *              (launguage: ANY("en", "es")) OR (categories: ANY("Movie"))
     *           If your filter blocks all results, the API returns generic
     *           (unfiltered) popular Documents. If you only want results strictly matching
     *           the filters, set `strictFiltering` to `true` in
     *           [RecommendRequest.params][google.cloud.discoveryengine.v1.RecommendRequest.params]
     *           to receive empty results instead.
     *           Note that the API never returns
     *           [Document][google.cloud.discoveryengine.v1.Document]s with `storageStatus`
     *           as `EXPIRED` or `DELETED` regardless of filter choices.
     *     @type bool $validate_only
     *           Use validate only mode for this recommendation query. If set to `true`, a
     *           fake model is used that returns arbitrary Document IDs.
     *           Note that the validate only mode should only be used for testing the API,
     *           or if the model is not ready.
     *     @type array|\Google\Protobuf\Internal\MapField $params
     *           Additional domain specific parameters for the recommendations.
     *           Allowed values:
     *           * `returnDocument`: Boolean. If set to `true`, the associated Document
     *              object is returned in
     *              [RecommendResponse.RecommendationResult.document][google.cloud.discoveryengine.v1.RecommendResponse.RecommendationResult.document].
     *           * `returnScore`: Boolean. If set to true, the recommendation score
     *              corresponding to each returned Document is set in
     *              [RecommendResponse.RecommendationResult.metadata][google.cloud.discoveryengine.v1.RecommendResponse.RecommendationResult.metadata].
     *              The given score indicates the probability of a Document conversion given
     *              the user's context and history.
     *           * `strictFiltering`: Boolean. True by default. If set to `false`, the
     *           service
     *              returns generic (unfiltered) popular Documents instead of empty if
     *              your filter blocks all recommendation results.
     *           * `diversityLevel`: String. Default empty. If set to be non-empty, then
     *              it needs to be one of:
     *               *  `no-diversity`
     *               *  `low-diversity`
     *               *  `medium-diversity`
     *               *  `high-diversity`
     *               *  `auto-diversity`
     *              This gives request-level control and adjusts recommendation results
     *              based on Document category.
     *           * `attributeFilteringSyntax`: Boolean. False by default. If set to true,
     *              the `filter` field is interpreted according to the new,
     *              attribute-based syntax.
     *     @type array|\Google\Protobuf\Internal\MapField $user_labels
     *           The user labels applied to a resource must meet the following requirements:
     *           * Each resource can have multiple labels, up to a maximum of 64.
     *           * Each label must be a key-value pair.
     *           * Keys have a minimum length of 1 character and a maximum length of 63
     *             characters and cannot be empty. Values can be empty and have a maximum
     *             length of 63 characters.
     *           * Keys and values can contain only lowercase letters, numeric characters,
     *             underscores, and dashes. All characters must use UTF-8 encoding, and
     *             international characters are allowed.
     *           * The key portion of a label must be unique. However, you can use the same
     *             key with multiple resources.
     *           * Keys must start with a lowercase letter or international character.
     *           See [Requirements for
     *           labels](https://cloud.google.com/resource-manager/docs/creating-managing-labels#requirements)
     *           for more details.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Discoveryengine\V1\RecommendationService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Full resource name of a
     * [ServingConfig][google.cloud.discoveryengine.v1.ServingConfig]:
     * `projects/&#42;&#47;locations/global/collections/&#42;&#47;engines/&#42;&#47;servingConfigs/&#42;`, or
     * `projects/&#42;&#47;locations/global/collections/&#42;&#47;dataStores/&#42;&#47;servingConfigs/&#42;`
     * One default serving config is created along with your recommendation engine
     * creation. The engine ID is used as the ID of the default serving
     * config. For example, for Engine
     * `projects/&#42;&#47;locations/global/collections/&#42;&#47;engines/my-engine`, you can use
     * `projects/&#42;&#47;locations/global/collections/&#42;&#47;engines/my-engine/servingConfigs/my-engine`
     * for your
     * [RecommendationService.Recommend][google.cloud.discoveryengine.v1.RecommendationService.Recommend]
     * requests.
     *
     * Generated from protobuf field <code>string serving_config = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getServingConfig()
    {
        return $this->serving_config;
    }

    /**
     * Required. Full resource name of a
     * [ServingConfig][google.cloud.discoveryengine.v1.ServingConfig]:
     * `projects/&#42;&#47;locations/global/collections/&#42;&#47;engines/&#42;&#47;servingConfigs/&#42;`, or
     * `projects/&#42;&#47;locations/global/collections/&#42;&#47;dataStores/&#42;&#47;servingConfigs/&#42;`
     * One default serving config is created along with your recommendation engine
     * creation. The engine ID is used as the ID of the default serving
     * config. For example, for Engine
     * `projects/&#42;&#47;locations/global/collections/&#42;&#47;engines/my-engine`, you can use
     * `projects/&#42;&#47;locations/global/collections/&#42;&#47;engines/my-engine/servingConfigs/my-engine`
     * for your
     * [RecommendationService.Recommend][google.cloud.discoveryengine.v1.RecommendationService.Recommend]
     * requests.
     *
     * Generated from protobuf field <code>string serving_config = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setServingConfig($var)
    {
        GPBUtil::checkString($var, True);
        $this->serving_config = $var;

        return $this;
    }

    /**
     * Required. Context about the user, what they are looking at and what action
     * they took to trigger the Recommend request. Note that this user event
     * detail won't be ingested to userEvent logs. Thus, a separate userEvent
     * write request is required for event logging.
     * Don't set
     * [UserEvent.user_pseudo_id][google.cloud.discoveryengine.v1.UserEvent.user_pseudo_id]
     * or
     * [UserEvent.user_info.user_id][google.cloud.discoveryengine.v1.UserInfo.user_id]
     * to the same fixed ID for different users. If you are trying to receive
     * non-personalized recommendations (not recommended; this can negatively
     * impact model performance), instead set
     * [UserEvent.user_pseudo_id][google.cloud.discoveryengine.v1.UserEvent.user_pseudo_id]
     * to a random unique ID and leave
     * [UserEvent.user_info.user_id][google.cloud.discoveryengine.v1.UserInfo.user_id]
     * unset.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1.UserEvent user_event = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\DiscoveryEngine\V1\UserEvent|null
     */
    public function getUserEvent()
    {
        return $this->user_event;
    }

    public function hasUserEvent()
    {
        return isset($this->user_event);
    }

    public function clearUserEvent()
    {
        unset($this->user_event);
    }

    /**
     * Required. Context about the user, what they are looking at and what action
     * they took to trigger the Recommend request. Note that this user event
     * detail won't be ingested to userEvent logs. Thus, a separate userEvent
     * write request is required for event logging.
     * Don't set
     * [UserEvent.user_pseudo_id][google.cloud.discoveryengine.v1.UserEvent.user_pseudo_id]
     * or
     * [UserEvent.user_info.user_id][google.cloud.discoveryengine.v1.UserInfo.user_id]
     * to the same fixed ID for different users. If you are trying to receive
     * non-personalized recommendations (not recommended; this can negatively
     * impact model performance), instead set
     * [UserEvent.user_pseudo_id][google.cloud.discoveryengine.v1.UserEvent.user_pseudo_id]
     * to a random unique ID and leave
     * [UserEvent.user_info.user_id][google.cloud.discoveryengine.v1.UserInfo.user_id]
     * unset.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1.UserEvent user_event = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\DiscoveryEngine\V1\UserEvent $var
     * @return $this
     */
    public function setUserEvent($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\DiscoveryEngine\V1\UserEvent::class);
        $this->user_event = $var;

        return $this;
    }

    /**
     * Maximum number of results to return. Set this property
     * to the number of recommendation results needed. If zero, the service
     * chooses a reasonable default. The maximum allowed value is 100. Values
     * above 100 are set to 100.
     *
     * Generated from protobuf field <code>int32 page_size = 3;</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * Maximum number of results to return. Set this property
     * to the number of recommendation results needed. If zero, the service
     * chooses a reasonable default. The maximum allowed value is 100. Values
     * above 100 are set to 100.
     *
     * Generated from protobuf field <code>int32 page_size = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setPageSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->page_size = $var;

        return $this;
    }

    /**
     * Filter for restricting recommendation results with a length limit of 5,000
     * characters. Currently, only filter expressions on the `filter_tags`
     * attribute is supported.
     * Examples:
     *  * `(filter_tags: ANY("Red", "Blue") OR filter_tags: ANY("Hot", "Cold"))`
     *  * `(filter_tags: ANY("Red", "Blue")) AND NOT (filter_tags: ANY("Green"))`
     * If `attributeFilteringSyntax` is set to true under the `params` field, then
     * attribute-based expressions are expected instead of the above described
     * tag-based syntax. Examples:
     *  * (launguage: ANY("en", "es")) AND NOT (categories: ANY("Movie"))
     *  * (available: true) AND
     *    (launguage: ANY("en", "es")) OR (categories: ANY("Movie"))
     * If your filter blocks all results, the API returns generic
     * (unfiltered) popular Documents. If you only want results strictly matching
     * the filters, set `strictFiltering` to `true` in
     * [RecommendRequest.params][google.cloud.discoveryengine.v1.RecommendRequest.params]
     * to receive empty results instead.
     * Note that the API never returns
     * [Document][google.cloud.discoveryengine.v1.Document]s with `storageStatus`
     * as `EXPIRED` or `DELETED` regardless of filter choices.
     *
     * Generated from protobuf field <code>string filter = 4;</code>
     * @return string
     */
    public function getFilter()
    {
        return $this->filter;
    }

    /**
     * Filter for restricting recommendation results with a length limit of 5,000
     * characters. Currently, only filter expressions on the `filter_tags`
     * attribute is supported.
     * Examples:
     *  * `(filter_tags: ANY("Red", "Blue") OR filter_tags: ANY("Hot", "Cold"))`
     *  * `(filter_tags: ANY("Red", "Blue")) AND NOT (filter_tags: ANY("Green"))`
     * If `attributeFilteringSyntax` is set to true under the `params` field, then
     * attribute-based expressions are expected instead of the above described
     * tag-based syntax. Examples:
     *  * (launguage: ANY("en", "es")) AND NOT (categories: ANY("Movie"))
     *  * (available: true) AND
     *    (launguage: ANY("en", "es")) OR (categories: ANY("Movie"))
     * If your filter blocks all results, the API returns generic
     * (unfiltered) popular Documents. If you only want results strictly matching
     * the filters, set `strictFiltering` to `true` in
     * [RecommendRequest.params][google.cloud.discoveryengine.v1.RecommendRequest.params]
     * to receive empty results instead.
     * Note that the API never returns
     * [Document][google.cloud.discoveryengine.v1.Document]s with `storageStatus`
     * as `EXPIRED` or `DELETED` regardless of filter choices.
     *
     * Generated from protobuf field <code>string filter = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setFilter($var)
    {
        GPBUtil::checkString($var, True);
        $this->filter = $var;

        return $this;
    }

    /**
     * Use validate only mode for this recommendation query. If set to `true`, a
     * fake model is used that returns arbitrary Document IDs.
     * Note that the validate only mode should only be used for testing the API,
     * or if the model is not ready.
     *
     * Generated from protobuf field <code>bool validate_only = 5;</code>
     * @return bool
     */
    public function getValidateOnly()
    {
        return $this->validate_only;
    }

    /**
     * Use validate only mode for this recommendation query. If set to `true`, a
     * fake model is used that returns arbitrary Document IDs.
     * Note that the validate only mode should only be used for testing the API,
     * or if the model is not ready.
     *
     * Generated from protobuf field <code>bool validate_only = 5;</code>
     * @param bool $var
     * @return $this
     */
    public function setValidateOnly($var)
    {
        GPBUtil::checkBool($var);
        $this->validate_only = $var;

        return $this;
    }

    /**
     * Additional domain specific parameters for the recommendations.
     * Allowed values:
     * * `returnDocument`: Boolean. If set to `true`, the associated Document
     *    object is returned in
     *    [RecommendResponse.RecommendationResult.document][google.cloud.discoveryengine.v1.RecommendResponse.RecommendationResult.document].
     * * `returnScore`: Boolean. If set to true, the recommendation score
     *    corresponding to each returned Document is set in
     *    [RecommendResponse.RecommendationResult.metadata][google.cloud.discoveryengine.v1.RecommendResponse.RecommendationResult.metadata].
     *    The given score indicates the probability of a Document conversion given
     *    the user's context and history.
     * * `strictFiltering`: Boolean. True by default. If set to `false`, the
     * service
     *    returns generic (unfiltered) popular Documents instead of empty if
     *    your filter blocks all recommendation results.
     * * `diversityLevel`: String. Default empty. If set to be non-empty, then
     *    it needs to be one of:
     *     *  `no-diversity`
     *     *  `low-diversity`
     *     *  `medium-diversity`
     *     *  `high-diversity`
     *     *  `auto-diversity`
     *    This gives request-level control and adjusts recommendation results
     *    based on Document category.
     * * `attributeFilteringSyntax`: Boolean. False by default. If set to true,
     *    the `filter` field is interpreted according to the new,
     *    attribute-based syntax.
     *
     * Generated from protobuf field <code>map<string, .google.protobuf.Value> params = 6;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getParams()
    {
        return $this->params;
    }

    /**
     * Additional domain specific parameters for the recommendations.
     * Allowed values:
     * * `returnDocument`: Boolean. If set to `true`, the associated Document
     *    object is returned in
     *    [RecommendResponse.RecommendationResult.document][google.cloud.discoveryengine.v1.RecommendResponse.RecommendationResult.document].
     * * `returnScore`: Boolean. If set to true, the recommendation score
     *    corresponding to each returned Document is set in
     *    [RecommendResponse.RecommendationResult.metadata][google.cloud.discoveryengine.v1.RecommendResponse.RecommendationResult.metadata].
     *    The given score indicates the probability of a Document conversion given
     *    the user's context and history.
     * * `strictFiltering`: Boolean. True by default. If set to `false`, the
     * service
     *    returns generic (unfiltered) popular Documents instead of empty if
     *    your filter blocks all recommendation results.
     * * `diversityLevel`: String. Default empty. If set to be non-empty, then
     *    it needs to be one of:
     *     *  `no-diversity`
     *     *  `low-diversity`
     *     *  `medium-diversity`
     *     *  `high-diversity`
     *     *  `auto-diversity`
     *    This gives request-level control and adjusts recommendation results
     *    based on Document category.
     * * `attributeFilteringSyntax`: Boolean. False by default. If set to true,
     *    the `filter` field is interpreted according to the new,
     *    attribute-based syntax.
     *
     * Generated from protobuf field <code>map<string, .google.protobuf.Value> params = 6;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setParams($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Protobuf\Value::class);
        $this->params = $arr;

        return $this;
    }

    /**
     * The user labels applied to a resource must meet the following requirements:
     * * Each resource can have multiple labels, up to a maximum of 64.
     * * Each label must be a key-value pair.
     * * Keys have a minimum length of 1 character and a maximum length of 63
     *   characters and cannot be empty. Values can be empty and have a maximum
     *   length of 63 characters.
     * * Keys and values can contain only lowercase letters, numeric characters,
     *   underscores, and dashes. All characters must use UTF-8 encoding, and
     *   international characters are allowed.
     * * The key portion of a label must be unique. However, you can use the same
     *   key with multiple resources.
     * * Keys must start with a lowercase letter or international character.
     * See [Requirements for
     * labels](https://cloud.google.com/resource-manager/docs/creating-managing-labels#requirements)
     * for more details.
     *
     * Generated from protobuf field <code>map<string, string> user_labels = 8;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getUserLabels()
    {
        return $this->user_labels;
    }

    /**
     * The user labels applied to a resource must meet the following requirements:
     * * Each resource can have multiple labels, up to a maximum of 64.
     * * Each label must be a key-value pair.
     * * Keys have a minimum length of 1 character and a maximum length of 63
     *   characters and cannot be empty. Values can be empty and have a maximum
     *   length of 63 characters.
     * * Keys and values can contain only lowercase letters, numeric characters,
     *   underscores, and dashes. All characters must use UTF-8 encoding, and
     *   international characters are allowed.
     * * The key portion of a label must be unique. However, you can use the same
     *   key with multiple resources.
     * * Keys must start with a lowercase letter or international character.
     * See [Requirements for
     * labels](https://cloud.google.com/resource-manager/docs/creating-managing-labels#requirements)
     * for more details.
     *
     * Generated from protobuf field <code>map<string, string> user_labels = 8;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setUserLabels($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->user_labels = $arr;

        return $this;
    }

}

