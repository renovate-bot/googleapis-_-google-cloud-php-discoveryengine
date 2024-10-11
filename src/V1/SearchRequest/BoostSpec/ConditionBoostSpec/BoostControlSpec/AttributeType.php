<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/discoveryengine/v1/search_service.proto

namespace Google\Cloud\DiscoveryEngine\V1\SearchRequest\BoostSpec\ConditionBoostSpec\BoostControlSpec;

use UnexpectedValueException;

/**
 * The attribute(or function) for which the custom ranking is to be
 * applied.
 *
 * Protobuf type <code>google.cloud.discoveryengine.v1.SearchRequest.BoostSpec.ConditionBoostSpec.BoostControlSpec.AttributeType</code>
 */
class AttributeType
{
    /**
     * Unspecified AttributeType.
     *
     * Generated from protobuf enum <code>ATTRIBUTE_TYPE_UNSPECIFIED = 0;</code>
     */
    const ATTRIBUTE_TYPE_UNSPECIFIED = 0;
    /**
     * The value of the numerical field will be used to dynamically update
     * the boost amount. In this case, the attribute_value (the x value)
     * of the control point will be the actual value of the numerical
     * field for which the boost_amount is specified.
     *
     * Generated from protobuf enum <code>NUMERICAL = 1;</code>
     */
    const NUMERICAL = 1;
    /**
     * For the freshness use case the attribute value will be the duration
     * between the current time and the date in the datetime field
     * specified. The value must be formatted as an XSD `dayTimeDuration`
     * value (a restricted subset of an ISO 8601 duration value). The
     * pattern for this is: `[nD][T[nH][nM][nS]]`.
     * For example, `5D`, `3DT12H30M`, `T24H`.
     *
     * Generated from protobuf enum <code>FRESHNESS = 2;</code>
     */
    const FRESHNESS = 2;

    private static $valueToName = [
        self::ATTRIBUTE_TYPE_UNSPECIFIED => 'ATTRIBUTE_TYPE_UNSPECIFIED',
        self::NUMERICAL => 'NUMERICAL',
        self::FRESHNESS => 'FRESHNESS',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}


