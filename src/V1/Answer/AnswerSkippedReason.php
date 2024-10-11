<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/discoveryengine/v1/answer.proto

namespace Google\Cloud\DiscoveryEngine\V1\Answer;

use UnexpectedValueException;

/**
 * An enum for answer skipped reasons.
 *
 * Protobuf type <code>google.cloud.discoveryengine.v1.Answer.AnswerSkippedReason</code>
 */
class AnswerSkippedReason
{
    /**
     * Default value. The answer skipped reason is not specified.
     *
     * Generated from protobuf enum <code>ANSWER_SKIPPED_REASON_UNSPECIFIED = 0;</code>
     */
    const ANSWER_SKIPPED_REASON_UNSPECIFIED = 0;
    /**
     * The adversarial query ignored case.
     *
     * Generated from protobuf enum <code>ADVERSARIAL_QUERY_IGNORED = 1;</code>
     */
    const ADVERSARIAL_QUERY_IGNORED = 1;
    /**
     * The non-answer seeking query ignored case
     * Google skips the answer if the query is chit chat.
     *
     * Generated from protobuf enum <code>NON_ANSWER_SEEKING_QUERY_IGNORED = 2;</code>
     */
    const NON_ANSWER_SEEKING_QUERY_IGNORED = 2;
    /**
     * The out-of-domain query ignored case.
     * Google skips the answer if there are no high-relevance search results.
     *
     * Generated from protobuf enum <code>OUT_OF_DOMAIN_QUERY_IGNORED = 3;</code>
     */
    const OUT_OF_DOMAIN_QUERY_IGNORED = 3;
    /**
     * The potential policy violation case.
     * Google skips the answer if there is a potential policy violation
     * detected. This includes content that may be violent or toxic.
     *
     * Generated from protobuf enum <code>POTENTIAL_POLICY_VIOLATION = 4;</code>
     */
    const POTENTIAL_POLICY_VIOLATION = 4;
    /**
     * The no relevant content case.
     * Google skips the answer if there is no relevant content in the
     * retrieved search results.
     *
     * Generated from protobuf enum <code>NO_RELEVANT_CONTENT = 5;</code>
     */
    const NO_RELEVANT_CONTENT = 5;
    /**
     * The jail-breaking query ignored case.
     * For example, "Reply in the tone of a competing company's CEO".
     * Google skips the answer if the query is classified as a jail-breaking
     * query.
     *
     * Generated from protobuf enum <code>JAIL_BREAKING_QUERY_IGNORED = 6;</code>
     */
    const JAIL_BREAKING_QUERY_IGNORED = 6;
    /**
     * The customer policy violation case.
     * Google skips the summary if there is a customer policy violation
     * detected. The policy is defined by the customer.
     *
     * Generated from protobuf enum <code>CUSTOMER_POLICY_VIOLATION = 7;</code>
     */
    const CUSTOMER_POLICY_VIOLATION = 7;
    /**
     * The non-answer seeking query ignored case.
     * Google skips the answer if the query doesn't have clear intent.
     *
     * Generated from protobuf enum <code>NON_ANSWER_SEEKING_QUERY_IGNORED_V2 = 8;</code>
     */
    const NON_ANSWER_SEEKING_QUERY_IGNORED_V2 = 8;

    private static $valueToName = [
        self::ANSWER_SKIPPED_REASON_UNSPECIFIED => 'ANSWER_SKIPPED_REASON_UNSPECIFIED',
        self::ADVERSARIAL_QUERY_IGNORED => 'ADVERSARIAL_QUERY_IGNORED',
        self::NON_ANSWER_SEEKING_QUERY_IGNORED => 'NON_ANSWER_SEEKING_QUERY_IGNORED',
        self::OUT_OF_DOMAIN_QUERY_IGNORED => 'OUT_OF_DOMAIN_QUERY_IGNORED',
        self::POTENTIAL_POLICY_VIOLATION => 'POTENTIAL_POLICY_VIOLATION',
        self::NO_RELEVANT_CONTENT => 'NO_RELEVANT_CONTENT',
        self::JAIL_BREAKING_QUERY_IGNORED => 'JAIL_BREAKING_QUERY_IGNORED',
        self::CUSTOMER_POLICY_VIOLATION => 'CUSTOMER_POLICY_VIOLATION',
        self::NON_ANSWER_SEEKING_QUERY_IGNORED_V2 => 'NON_ANSWER_SEEKING_QUERY_IGNORED_V2',
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


