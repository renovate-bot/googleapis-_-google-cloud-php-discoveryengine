<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/discoveryengine/v1beta/engine_service.proto

namespace Google\Cloud\DiscoveryEngine\V1beta;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request for
 * [EngineService.CreateEngine][google.cloud.discoveryengine.v1beta.EngineService.CreateEngine]
 * method.
 *
 * Generated from protobuf message <code>google.cloud.discoveryengine.v1beta.CreateEngineRequest</code>
 */
class CreateEngineRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The parent resource name, such as
     * `projects/{project}/locations/{location}/collections/{collection}`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * Required. The [Engine][google.cloud.discoveryengine.v1beta.Engine] to
     * create.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1beta.Engine engine = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $engine = null;
    /**
     * Required. The ID to use for the
     * [Engine][google.cloud.discoveryengine.v1beta.Engine], which will become the
     * final component of the
     * [Engine][google.cloud.discoveryengine.v1beta.Engine]'s resource name.
     * This field must conform to [RFC-1034](https://tools.ietf.org/html/rfc1034)
     * standard with a length limit of 63 characters. Otherwise, an
     * INVALID_ARGUMENT error is returned.
     *
     * Generated from protobuf field <code>string engine_id = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $engine_id = '';

    /**
     * @param string                                      $parent   Required. The parent resource name, such as
     *                                                              `projects/{project}/locations/{location}/collections/{collection}`. Please see
     *                                                              {@see EngineServiceClient::collectionName()} for help formatting this field.
     * @param \Google\Cloud\DiscoveryEngine\V1beta\Engine $engine   Required. The [Engine][google.cloud.discoveryengine.v1beta.Engine] to
     *                                                              create.
     * @param string                                      $engineId Required. The ID to use for the
     *                                                              [Engine][google.cloud.discoveryengine.v1beta.Engine], which will become the
     *                                                              final component of the
     *                                                              [Engine][google.cloud.discoveryengine.v1beta.Engine]'s resource name.
     *
     *                                                              This field must conform to [RFC-1034](https://tools.ietf.org/html/rfc1034)
     *                                                              standard with a length limit of 63 characters. Otherwise, an
     *                                                              INVALID_ARGUMENT error is returned.
     *
     * @return \Google\Cloud\DiscoveryEngine\V1beta\CreateEngineRequest
     *
     * @experimental
     */
    public static function build(string $parent, \Google\Cloud\DiscoveryEngine\V1beta\Engine $engine, string $engineId): self
    {
        return (new self())
            ->setParent($parent)
            ->setEngine($engine)
            ->setEngineId($engineId);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The parent resource name, such as
     *           `projects/{project}/locations/{location}/collections/{collection}`.
     *     @type \Google\Cloud\DiscoveryEngine\V1beta\Engine $engine
     *           Required. The [Engine][google.cloud.discoveryengine.v1beta.Engine] to
     *           create.
     *     @type string $engine_id
     *           Required. The ID to use for the
     *           [Engine][google.cloud.discoveryengine.v1beta.Engine], which will become the
     *           final component of the
     *           [Engine][google.cloud.discoveryengine.v1beta.Engine]'s resource name.
     *           This field must conform to [RFC-1034](https://tools.ietf.org/html/rfc1034)
     *           standard with a length limit of 63 characters. Otherwise, an
     *           INVALID_ARGUMENT error is returned.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Discoveryengine\V1Beta\EngineService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The parent resource name, such as
     * `projects/{project}/locations/{location}/collections/{collection}`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The parent resource name, such as
     * `projects/{project}/locations/{location}/collections/{collection}`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * Required. The [Engine][google.cloud.discoveryengine.v1beta.Engine] to
     * create.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1beta.Engine engine = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\DiscoveryEngine\V1beta\Engine|null
     */
    public function getEngine()
    {
        return $this->engine;
    }

    public function hasEngine()
    {
        return isset($this->engine);
    }

    public function clearEngine()
    {
        unset($this->engine);
    }

    /**
     * Required. The [Engine][google.cloud.discoveryengine.v1beta.Engine] to
     * create.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1beta.Engine engine = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\DiscoveryEngine\V1beta\Engine $var
     * @return $this
     */
    public function setEngine($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\DiscoveryEngine\V1beta\Engine::class);
        $this->engine = $var;

        return $this;
    }

    /**
     * Required. The ID to use for the
     * [Engine][google.cloud.discoveryengine.v1beta.Engine], which will become the
     * final component of the
     * [Engine][google.cloud.discoveryengine.v1beta.Engine]'s resource name.
     * This field must conform to [RFC-1034](https://tools.ietf.org/html/rfc1034)
     * standard with a length limit of 63 characters. Otherwise, an
     * INVALID_ARGUMENT error is returned.
     *
     * Generated from protobuf field <code>string engine_id = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getEngineId()
    {
        return $this->engine_id;
    }

    /**
     * Required. The ID to use for the
     * [Engine][google.cloud.discoveryengine.v1beta.Engine], which will become the
     * final component of the
     * [Engine][google.cloud.discoveryengine.v1beta.Engine]'s resource name.
     * This field must conform to [RFC-1034](https://tools.ietf.org/html/rfc1034)
     * standard with a length limit of 63 characters. Otherwise, an
     * INVALID_ARGUMENT error is returned.
     *
     * Generated from protobuf field <code>string engine_id = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setEngineId($var)
    {
        GPBUtil::checkString($var, True);
        $this->engine_id = $var;

        return $this;
    }

}

