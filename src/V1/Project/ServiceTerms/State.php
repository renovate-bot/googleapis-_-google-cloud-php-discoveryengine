<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/discoveryengine/v1/project.proto

namespace Google\Cloud\DiscoveryEngine\V1\Project\ServiceTerms;

use UnexpectedValueException;

/**
 * The agreement states this terms of service.
 *
 * Protobuf type <code>google.cloud.discoveryengine.v1.Project.ServiceTerms.State</code>
 */
class State
{
    /**
     * The default value of the enum. This value is not actually used.
     *
     * Generated from protobuf enum <code>STATE_UNSPECIFIED = 0;</code>
     */
    const STATE_UNSPECIFIED = 0;
    /**
     * The project has given consent to the terms of service.
     *
     * Generated from protobuf enum <code>TERMS_ACCEPTED = 1;</code>
     */
    const TERMS_ACCEPTED = 1;
    /**
     * The project is pending to review and accept the terms of service.
     *
     * Generated from protobuf enum <code>TERMS_PENDING = 2;</code>
     */
    const TERMS_PENDING = 2;
    /**
     * The project has declined or revoked the agreement to terms of service.
     *
     * Generated from protobuf enum <code>TERMS_DECLINED = 3;</code>
     */
    const TERMS_DECLINED = 3;

    private static $valueToName = [
        self::STATE_UNSPECIFIED => 'STATE_UNSPECIFIED',
        self::TERMS_ACCEPTED => 'TERMS_ACCEPTED',
        self::TERMS_PENDING => 'TERMS_PENDING',
        self::TERMS_DECLINED => 'TERMS_DECLINED',
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


