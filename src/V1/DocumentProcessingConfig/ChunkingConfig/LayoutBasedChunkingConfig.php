<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/discoveryengine/v1/document_processing_config.proto

namespace Google\Cloud\DiscoveryEngine\V1\DocumentProcessingConfig\ChunkingConfig;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Configuration for the layout based chunking.
 *
 * Generated from protobuf message <code>google.cloud.discoveryengine.v1.DocumentProcessingConfig.ChunkingConfig.LayoutBasedChunkingConfig</code>
 */
class LayoutBasedChunkingConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * The token size limit for each chunk.
     * Supported values: 100-500 (inclusive).
     * Default value: 500.
     *
     * Generated from protobuf field <code>int32 chunk_size = 1;</code>
     */
    protected $chunk_size = 0;
    /**
     * Whether to include appending different levels of headings to chunks
     * from the middle of the document to prevent context loss.
     * Default value: False.
     *
     * Generated from protobuf field <code>bool include_ancestor_headings = 2;</code>
     */
    protected $include_ancestor_headings = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $chunk_size
     *           The token size limit for each chunk.
     *           Supported values: 100-500 (inclusive).
     *           Default value: 500.
     *     @type bool $include_ancestor_headings
     *           Whether to include appending different levels of headings to chunks
     *           from the middle of the document to prevent context loss.
     *           Default value: False.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Discoveryengine\V1\DocumentProcessingConfig::initOnce();
        parent::__construct($data);
    }

    /**
     * The token size limit for each chunk.
     * Supported values: 100-500 (inclusive).
     * Default value: 500.
     *
     * Generated from protobuf field <code>int32 chunk_size = 1;</code>
     * @return int
     */
    public function getChunkSize()
    {
        return $this->chunk_size;
    }

    /**
     * The token size limit for each chunk.
     * Supported values: 100-500 (inclusive).
     * Default value: 500.
     *
     * Generated from protobuf field <code>int32 chunk_size = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setChunkSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->chunk_size = $var;

        return $this;
    }

    /**
     * Whether to include appending different levels of headings to chunks
     * from the middle of the document to prevent context loss.
     * Default value: False.
     *
     * Generated from protobuf field <code>bool include_ancestor_headings = 2;</code>
     * @return bool
     */
    public function getIncludeAncestorHeadings()
    {
        return $this->include_ancestor_headings;
    }

    /**
     * Whether to include appending different levels of headings to chunks
     * from the middle of the document to prevent context loss.
     * Default value: False.
     *
     * Generated from protobuf field <code>bool include_ancestor_headings = 2;</code>
     * @param bool $var
     * @return $this
     */
    public function setIncludeAncestorHeadings($var)
    {
        GPBUtil::checkBool($var);
        $this->include_ancestor_headings = $var;

        return $this;
    }

}


