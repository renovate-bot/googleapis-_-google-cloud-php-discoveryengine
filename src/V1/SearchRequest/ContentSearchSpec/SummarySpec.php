<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/discoveryengine/v1/search_service.proto

namespace Google\Cloud\DiscoveryEngine\V1\SearchRequest\ContentSearchSpec;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A specification for configuring a summary returned in a search
 * response.
 *
 * Generated from protobuf message <code>google.cloud.discoveryengine.v1.SearchRequest.ContentSearchSpec.SummarySpec</code>
 */
class SummarySpec extends \Google\Protobuf\Internal\Message
{
    /**
     * The number of top results to generate the summary from. If the number
     * of results returned is less than `summaryResultCount`, the summary is
     * generated from all of the results.
     * At most 10 results for documents mode, or 50 for chunks mode, can be
     * used to generate a summary. The chunks mode is used when
     * [SearchRequest.ContentSearchSpec.search_result_mode][] is set to
     * [CHUNKS][SearchRequest.ContentSearchSpec.SearchResultMode.CHUNKS].
     *
     * Generated from protobuf field <code>int32 summary_result_count = 1;</code>
     */
    protected $summary_result_count = 0;
    /**
     * Specifies whether to include citations in the summary. The default
     * value is `false`.
     * When this field is set to `true`, summaries include in-line citation
     * numbers.
     * Example summary including citations:
     * BigQuery is Google Cloud's fully managed and completely serverless
     * enterprise data warehouse [1]. BigQuery supports all data types, works
     * across clouds, and has built-in machine learning and business
     * intelligence, all within a unified platform [2, 3].
     * The citation numbers refer to the returned search results and are
     * 1-indexed. For example, [1] means that the sentence is attributed to
     * the first search result. [2, 3] means that the sentence is attributed
     * to both the second and third search results.
     *
     * Generated from protobuf field <code>bool include_citations = 2;</code>
     */
    protected $include_citations = false;
    /**
     * Specifies whether to filter out adversarial queries. The default value
     * is `false`.
     * Google employs search-query classification to detect adversarial
     * queries. No summary is returned if the search query is classified as an
     * adversarial query. For example, a user might ask a question regarding
     * negative comments about the company or submit a query designed to
     * generate unsafe, policy-violating output. If this field is set to
     * `true`, we skip generating summaries for adversarial queries and return
     * fallback messages instead.
     *
     * Generated from protobuf field <code>bool ignore_adversarial_query = 3;</code>
     */
    protected $ignore_adversarial_query = false;
    /**
     * Specifies whether to filter out queries that are not summary-seeking.
     * The default value is `false`.
     * Google employs search-query classification to detect summary-seeking
     * queries. No summary is returned if the search query is classified as a
     * non-summary seeking query. For example, `why is the sky blue` and `Who
     * is the best soccer player in the world?` are summary-seeking queries,
     * but `SFO airport` and `world cup 2026` are not. They are most likely
     * navigational queries. If this field is set to `true`, we skip
     * generating summaries for non-summary seeking queries and return
     * fallback messages instead.
     *
     * Generated from protobuf field <code>bool ignore_non_summary_seeking_query = 4;</code>
     */
    protected $ignore_non_summary_seeking_query = false;
    /**
     * If specified, the spec will be used to modify the prompt provided to
     * the LLM.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1.SearchRequest.ContentSearchSpec.SummarySpec.ModelPromptSpec model_prompt_spec = 5;</code>
     */
    protected $model_prompt_spec = null;
    /**
     * Language code for Summary. Use language tags defined by
     * [BCP47](https://www.rfc-editor.org/rfc/bcp/bcp47.txt).
     * Note: This is an experimental feature.
     *
     * Generated from protobuf field <code>string language_code = 6;</code>
     */
    protected $language_code = '';
    /**
     * If specified, the spec will be used to modify the model specification
     * provided to the LLM.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1.SearchRequest.ContentSearchSpec.SummarySpec.ModelSpec model_spec = 7;</code>
     */
    protected $model_spec = null;
    /**
     * If true, answer will be generated from most relevant chunks from top
     * search results. This feature will improve summary quality.
     * Note that with this feature enabled, not all top search results
     * will be referenced and included in the reference list, so the citation
     * source index only points to the search results listed in the reference
     * list.
     *
     * Generated from protobuf field <code>bool use_semantic_chunks = 8;</code>
     */
    protected $use_semantic_chunks = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $summary_result_count
     *           The number of top results to generate the summary from. If the number
     *           of results returned is less than `summaryResultCount`, the summary is
     *           generated from all of the results.
     *           At most 10 results for documents mode, or 50 for chunks mode, can be
     *           used to generate a summary. The chunks mode is used when
     *           [SearchRequest.ContentSearchSpec.search_result_mode][] is set to
     *           [CHUNKS][SearchRequest.ContentSearchSpec.SearchResultMode.CHUNKS].
     *     @type bool $include_citations
     *           Specifies whether to include citations in the summary. The default
     *           value is `false`.
     *           When this field is set to `true`, summaries include in-line citation
     *           numbers.
     *           Example summary including citations:
     *           BigQuery is Google Cloud's fully managed and completely serverless
     *           enterprise data warehouse [1]. BigQuery supports all data types, works
     *           across clouds, and has built-in machine learning and business
     *           intelligence, all within a unified platform [2, 3].
     *           The citation numbers refer to the returned search results and are
     *           1-indexed. For example, [1] means that the sentence is attributed to
     *           the first search result. [2, 3] means that the sentence is attributed
     *           to both the second and third search results.
     *     @type bool $ignore_adversarial_query
     *           Specifies whether to filter out adversarial queries. The default value
     *           is `false`.
     *           Google employs search-query classification to detect adversarial
     *           queries. No summary is returned if the search query is classified as an
     *           adversarial query. For example, a user might ask a question regarding
     *           negative comments about the company or submit a query designed to
     *           generate unsafe, policy-violating output. If this field is set to
     *           `true`, we skip generating summaries for adversarial queries and return
     *           fallback messages instead.
     *     @type bool $ignore_non_summary_seeking_query
     *           Specifies whether to filter out queries that are not summary-seeking.
     *           The default value is `false`.
     *           Google employs search-query classification to detect summary-seeking
     *           queries. No summary is returned if the search query is classified as a
     *           non-summary seeking query. For example, `why is the sky blue` and `Who
     *           is the best soccer player in the world?` are summary-seeking queries,
     *           but `SFO airport` and `world cup 2026` are not. They are most likely
     *           navigational queries. If this field is set to `true`, we skip
     *           generating summaries for non-summary seeking queries and return
     *           fallback messages instead.
     *     @type \Google\Cloud\DiscoveryEngine\V1\SearchRequest\ContentSearchSpec\SummarySpec\ModelPromptSpec $model_prompt_spec
     *           If specified, the spec will be used to modify the prompt provided to
     *           the LLM.
     *     @type string $language_code
     *           Language code for Summary. Use language tags defined by
     *           [BCP47](https://www.rfc-editor.org/rfc/bcp/bcp47.txt).
     *           Note: This is an experimental feature.
     *     @type \Google\Cloud\DiscoveryEngine\V1\SearchRequest\ContentSearchSpec\SummarySpec\ModelSpec $model_spec
     *           If specified, the spec will be used to modify the model specification
     *           provided to the LLM.
     *     @type bool $use_semantic_chunks
     *           If true, answer will be generated from most relevant chunks from top
     *           search results. This feature will improve summary quality.
     *           Note that with this feature enabled, not all top search results
     *           will be referenced and included in the reference list, so the citation
     *           source index only points to the search results listed in the reference
     *           list.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Discoveryengine\V1\SearchService::initOnce();
        parent::__construct($data);
    }

    /**
     * The number of top results to generate the summary from. If the number
     * of results returned is less than `summaryResultCount`, the summary is
     * generated from all of the results.
     * At most 10 results for documents mode, or 50 for chunks mode, can be
     * used to generate a summary. The chunks mode is used when
     * [SearchRequest.ContentSearchSpec.search_result_mode][] is set to
     * [CHUNKS][SearchRequest.ContentSearchSpec.SearchResultMode.CHUNKS].
     *
     * Generated from protobuf field <code>int32 summary_result_count = 1;</code>
     * @return int
     */
    public function getSummaryResultCount()
    {
        return $this->summary_result_count;
    }

    /**
     * The number of top results to generate the summary from. If the number
     * of results returned is less than `summaryResultCount`, the summary is
     * generated from all of the results.
     * At most 10 results for documents mode, or 50 for chunks mode, can be
     * used to generate a summary. The chunks mode is used when
     * [SearchRequest.ContentSearchSpec.search_result_mode][] is set to
     * [CHUNKS][SearchRequest.ContentSearchSpec.SearchResultMode.CHUNKS].
     *
     * Generated from protobuf field <code>int32 summary_result_count = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setSummaryResultCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->summary_result_count = $var;

        return $this;
    }

    /**
     * Specifies whether to include citations in the summary. The default
     * value is `false`.
     * When this field is set to `true`, summaries include in-line citation
     * numbers.
     * Example summary including citations:
     * BigQuery is Google Cloud's fully managed and completely serverless
     * enterprise data warehouse [1]. BigQuery supports all data types, works
     * across clouds, and has built-in machine learning and business
     * intelligence, all within a unified platform [2, 3].
     * The citation numbers refer to the returned search results and are
     * 1-indexed. For example, [1] means that the sentence is attributed to
     * the first search result. [2, 3] means that the sentence is attributed
     * to both the second and third search results.
     *
     * Generated from protobuf field <code>bool include_citations = 2;</code>
     * @return bool
     */
    public function getIncludeCitations()
    {
        return $this->include_citations;
    }

    /**
     * Specifies whether to include citations in the summary. The default
     * value is `false`.
     * When this field is set to `true`, summaries include in-line citation
     * numbers.
     * Example summary including citations:
     * BigQuery is Google Cloud's fully managed and completely serverless
     * enterprise data warehouse [1]. BigQuery supports all data types, works
     * across clouds, and has built-in machine learning and business
     * intelligence, all within a unified platform [2, 3].
     * The citation numbers refer to the returned search results and are
     * 1-indexed. For example, [1] means that the sentence is attributed to
     * the first search result. [2, 3] means that the sentence is attributed
     * to both the second and third search results.
     *
     * Generated from protobuf field <code>bool include_citations = 2;</code>
     * @param bool $var
     * @return $this
     */
    public function setIncludeCitations($var)
    {
        GPBUtil::checkBool($var);
        $this->include_citations = $var;

        return $this;
    }

    /**
     * Specifies whether to filter out adversarial queries. The default value
     * is `false`.
     * Google employs search-query classification to detect adversarial
     * queries. No summary is returned if the search query is classified as an
     * adversarial query. For example, a user might ask a question regarding
     * negative comments about the company or submit a query designed to
     * generate unsafe, policy-violating output. If this field is set to
     * `true`, we skip generating summaries for adversarial queries and return
     * fallback messages instead.
     *
     * Generated from protobuf field <code>bool ignore_adversarial_query = 3;</code>
     * @return bool
     */
    public function getIgnoreAdversarialQuery()
    {
        return $this->ignore_adversarial_query;
    }

    /**
     * Specifies whether to filter out adversarial queries. The default value
     * is `false`.
     * Google employs search-query classification to detect adversarial
     * queries. No summary is returned if the search query is classified as an
     * adversarial query. For example, a user might ask a question regarding
     * negative comments about the company or submit a query designed to
     * generate unsafe, policy-violating output. If this field is set to
     * `true`, we skip generating summaries for adversarial queries and return
     * fallback messages instead.
     *
     * Generated from protobuf field <code>bool ignore_adversarial_query = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setIgnoreAdversarialQuery($var)
    {
        GPBUtil::checkBool($var);
        $this->ignore_adversarial_query = $var;

        return $this;
    }

    /**
     * Specifies whether to filter out queries that are not summary-seeking.
     * The default value is `false`.
     * Google employs search-query classification to detect summary-seeking
     * queries. No summary is returned if the search query is classified as a
     * non-summary seeking query. For example, `why is the sky blue` and `Who
     * is the best soccer player in the world?` are summary-seeking queries,
     * but `SFO airport` and `world cup 2026` are not. They are most likely
     * navigational queries. If this field is set to `true`, we skip
     * generating summaries for non-summary seeking queries and return
     * fallback messages instead.
     *
     * Generated from protobuf field <code>bool ignore_non_summary_seeking_query = 4;</code>
     * @return bool
     */
    public function getIgnoreNonSummarySeekingQuery()
    {
        return $this->ignore_non_summary_seeking_query;
    }

    /**
     * Specifies whether to filter out queries that are not summary-seeking.
     * The default value is `false`.
     * Google employs search-query classification to detect summary-seeking
     * queries. No summary is returned if the search query is classified as a
     * non-summary seeking query. For example, `why is the sky blue` and `Who
     * is the best soccer player in the world?` are summary-seeking queries,
     * but `SFO airport` and `world cup 2026` are not. They are most likely
     * navigational queries. If this field is set to `true`, we skip
     * generating summaries for non-summary seeking queries and return
     * fallback messages instead.
     *
     * Generated from protobuf field <code>bool ignore_non_summary_seeking_query = 4;</code>
     * @param bool $var
     * @return $this
     */
    public function setIgnoreNonSummarySeekingQuery($var)
    {
        GPBUtil::checkBool($var);
        $this->ignore_non_summary_seeking_query = $var;

        return $this;
    }

    /**
     * If specified, the spec will be used to modify the prompt provided to
     * the LLM.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1.SearchRequest.ContentSearchSpec.SummarySpec.ModelPromptSpec model_prompt_spec = 5;</code>
     * @return \Google\Cloud\DiscoveryEngine\V1\SearchRequest\ContentSearchSpec\SummarySpec\ModelPromptSpec|null
     */
    public function getModelPromptSpec()
    {
        return $this->model_prompt_spec;
    }

    public function hasModelPromptSpec()
    {
        return isset($this->model_prompt_spec);
    }

    public function clearModelPromptSpec()
    {
        unset($this->model_prompt_spec);
    }

    /**
     * If specified, the spec will be used to modify the prompt provided to
     * the LLM.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1.SearchRequest.ContentSearchSpec.SummarySpec.ModelPromptSpec model_prompt_spec = 5;</code>
     * @param \Google\Cloud\DiscoveryEngine\V1\SearchRequest\ContentSearchSpec\SummarySpec\ModelPromptSpec $var
     * @return $this
     */
    public function setModelPromptSpec($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\DiscoveryEngine\V1\SearchRequest\ContentSearchSpec\SummarySpec\ModelPromptSpec::class);
        $this->model_prompt_spec = $var;

        return $this;
    }

    /**
     * Language code for Summary. Use language tags defined by
     * [BCP47](https://www.rfc-editor.org/rfc/bcp/bcp47.txt).
     * Note: This is an experimental feature.
     *
     * Generated from protobuf field <code>string language_code = 6;</code>
     * @return string
     */
    public function getLanguageCode()
    {
        return $this->language_code;
    }

    /**
     * Language code for Summary. Use language tags defined by
     * [BCP47](https://www.rfc-editor.org/rfc/bcp/bcp47.txt).
     * Note: This is an experimental feature.
     *
     * Generated from protobuf field <code>string language_code = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setLanguageCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->language_code = $var;

        return $this;
    }

    /**
     * If specified, the spec will be used to modify the model specification
     * provided to the LLM.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1.SearchRequest.ContentSearchSpec.SummarySpec.ModelSpec model_spec = 7;</code>
     * @return \Google\Cloud\DiscoveryEngine\V1\SearchRequest\ContentSearchSpec\SummarySpec\ModelSpec|null
     */
    public function getModelSpec()
    {
        return $this->model_spec;
    }

    public function hasModelSpec()
    {
        return isset($this->model_spec);
    }

    public function clearModelSpec()
    {
        unset($this->model_spec);
    }

    /**
     * If specified, the spec will be used to modify the model specification
     * provided to the LLM.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1.SearchRequest.ContentSearchSpec.SummarySpec.ModelSpec model_spec = 7;</code>
     * @param \Google\Cloud\DiscoveryEngine\V1\SearchRequest\ContentSearchSpec\SummarySpec\ModelSpec $var
     * @return $this
     */
    public function setModelSpec($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\DiscoveryEngine\V1\SearchRequest\ContentSearchSpec\SummarySpec\ModelSpec::class);
        $this->model_spec = $var;

        return $this;
    }

    /**
     * If true, answer will be generated from most relevant chunks from top
     * search results. This feature will improve summary quality.
     * Note that with this feature enabled, not all top search results
     * will be referenced and included in the reference list, so the citation
     * source index only points to the search results listed in the reference
     * list.
     *
     * Generated from protobuf field <code>bool use_semantic_chunks = 8;</code>
     * @return bool
     */
    public function getUseSemanticChunks()
    {
        return $this->use_semantic_chunks;
    }

    /**
     * If true, answer will be generated from most relevant chunks from top
     * search results. This feature will improve summary quality.
     * Note that with this feature enabled, not all top search results
     * will be referenced and included in the reference list, so the citation
     * source index only points to the search results listed in the reference
     * list.
     *
     * Generated from protobuf field <code>bool use_semantic_chunks = 8;</code>
     * @param bool $var
     * @return $this
     */
    public function setUseSemanticChunks($var)
    {
        GPBUtil::checkBool($var);
        $this->use_semantic_chunks = $var;

        return $this;
    }

}


