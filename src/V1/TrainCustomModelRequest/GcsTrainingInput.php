<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/discoveryengine/v1/search_tuning_service.proto

namespace Google\Cloud\DiscoveryEngine\V1\TrainCustomModelRequest;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Cloud Storage training data input.
 *
 * Generated from protobuf message <code>google.cloud.discoveryengine.v1.TrainCustomModelRequest.GcsTrainingInput</code>
 */
class GcsTrainingInput extends \Google\Protobuf\Internal\Message
{
    /**
     * The Cloud Storage corpus data which could be associated in train data.
     * The data path format is `gs://<bucket_to_data>/<jsonl_file_name>`.
     * A newline delimited jsonl/ndjson file.
     * For search-tuning model, each line should have the _id, title
     * and text. Example:
     * `{"_id": "doc1", title: "relevant doc", "text": "relevant text"}`
     *
     * Generated from protobuf field <code>string corpus_data_path = 1;</code>
     */
    protected $corpus_data_path = '';
    /**
     * The gcs query data which could be associated in train data.
     * The data path format is `gs://<bucket_to_data>/<jsonl_file_name>`.
     * A newline delimited jsonl/ndjson file.
     * For search-tuning model, each line should have the _id
     * and text. Example: {"_id": "query1",  "text": "example query"}
     *
     * Generated from protobuf field <code>string query_data_path = 2;</code>
     */
    protected $query_data_path = '';
    /**
     * Cloud Storage training data path whose format should be
     * `gs://<bucket_to_data>/<tsv_file_name>`. The file should be in tsv
     * format. Each line should have the doc_id and query_id and score (number).
     * For search-tuning model, it should have the query-id corpus-id
     * score as tsv file header. The score should be a number in `[0, inf+)`.
     * The larger the number is, the more relevant the pair is. Example:
     * * `query-id\tcorpus-id\tscore`
     * * `query1\tdoc1\t1`
     *
     * Generated from protobuf field <code>string train_data_path = 3;</code>
     */
    protected $train_data_path = '';
    /**
     * Cloud Storage test data. Same format as train_data_path. If not provided,
     * a random 80/20 train/test split will be performed on train_data_path.
     *
     * Generated from protobuf field <code>string test_data_path = 4;</code>
     */
    protected $test_data_path = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $corpus_data_path
     *           The Cloud Storage corpus data which could be associated in train data.
     *           The data path format is `gs://<bucket_to_data>/<jsonl_file_name>`.
     *           A newline delimited jsonl/ndjson file.
     *           For search-tuning model, each line should have the _id, title
     *           and text. Example:
     *           `{"_id": "doc1", title: "relevant doc", "text": "relevant text"}`
     *     @type string $query_data_path
     *           The gcs query data which could be associated in train data.
     *           The data path format is `gs://<bucket_to_data>/<jsonl_file_name>`.
     *           A newline delimited jsonl/ndjson file.
     *           For search-tuning model, each line should have the _id
     *           and text. Example: {"_id": "query1",  "text": "example query"}
     *     @type string $train_data_path
     *           Cloud Storage training data path whose format should be
     *           `gs://<bucket_to_data>/<tsv_file_name>`. The file should be in tsv
     *           format. Each line should have the doc_id and query_id and score (number).
     *           For search-tuning model, it should have the query-id corpus-id
     *           score as tsv file header. The score should be a number in `[0, inf+)`.
     *           The larger the number is, the more relevant the pair is. Example:
     *           * `query-id\tcorpus-id\tscore`
     *           * `query1\tdoc1\t1`
     *     @type string $test_data_path
     *           Cloud Storage test data. Same format as train_data_path. If not provided,
     *           a random 80/20 train/test split will be performed on train_data_path.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Discoveryengine\V1\SearchTuningService::initOnce();
        parent::__construct($data);
    }

    /**
     * The Cloud Storage corpus data which could be associated in train data.
     * The data path format is `gs://<bucket_to_data>/<jsonl_file_name>`.
     * A newline delimited jsonl/ndjson file.
     * For search-tuning model, each line should have the _id, title
     * and text. Example:
     * `{"_id": "doc1", title: "relevant doc", "text": "relevant text"}`
     *
     * Generated from protobuf field <code>string corpus_data_path = 1;</code>
     * @return string
     */
    public function getCorpusDataPath()
    {
        return $this->corpus_data_path;
    }

    /**
     * The Cloud Storage corpus data which could be associated in train data.
     * The data path format is `gs://<bucket_to_data>/<jsonl_file_name>`.
     * A newline delimited jsonl/ndjson file.
     * For search-tuning model, each line should have the _id, title
     * and text. Example:
     * `{"_id": "doc1", title: "relevant doc", "text": "relevant text"}`
     *
     * Generated from protobuf field <code>string corpus_data_path = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setCorpusDataPath($var)
    {
        GPBUtil::checkString($var, True);
        $this->corpus_data_path = $var;

        return $this;
    }

    /**
     * The gcs query data which could be associated in train data.
     * The data path format is `gs://<bucket_to_data>/<jsonl_file_name>`.
     * A newline delimited jsonl/ndjson file.
     * For search-tuning model, each line should have the _id
     * and text. Example: {"_id": "query1",  "text": "example query"}
     *
     * Generated from protobuf field <code>string query_data_path = 2;</code>
     * @return string
     */
    public function getQueryDataPath()
    {
        return $this->query_data_path;
    }

    /**
     * The gcs query data which could be associated in train data.
     * The data path format is `gs://<bucket_to_data>/<jsonl_file_name>`.
     * A newline delimited jsonl/ndjson file.
     * For search-tuning model, each line should have the _id
     * and text. Example: {"_id": "query1",  "text": "example query"}
     *
     * Generated from protobuf field <code>string query_data_path = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setQueryDataPath($var)
    {
        GPBUtil::checkString($var, True);
        $this->query_data_path = $var;

        return $this;
    }

    /**
     * Cloud Storage training data path whose format should be
     * `gs://<bucket_to_data>/<tsv_file_name>`. The file should be in tsv
     * format. Each line should have the doc_id and query_id and score (number).
     * For search-tuning model, it should have the query-id corpus-id
     * score as tsv file header. The score should be a number in `[0, inf+)`.
     * The larger the number is, the more relevant the pair is. Example:
     * * `query-id\tcorpus-id\tscore`
     * * `query1\tdoc1\t1`
     *
     * Generated from protobuf field <code>string train_data_path = 3;</code>
     * @return string
     */
    public function getTrainDataPath()
    {
        return $this->train_data_path;
    }

    /**
     * Cloud Storage training data path whose format should be
     * `gs://<bucket_to_data>/<tsv_file_name>`. The file should be in tsv
     * format. Each line should have the doc_id and query_id and score (number).
     * For search-tuning model, it should have the query-id corpus-id
     * score as tsv file header. The score should be a number in `[0, inf+)`.
     * The larger the number is, the more relevant the pair is. Example:
     * * `query-id\tcorpus-id\tscore`
     * * `query1\tdoc1\t1`
     *
     * Generated from protobuf field <code>string train_data_path = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setTrainDataPath($var)
    {
        GPBUtil::checkString($var, True);
        $this->train_data_path = $var;

        return $this;
    }

    /**
     * Cloud Storage test data. Same format as train_data_path. If not provided,
     * a random 80/20 train/test split will be performed on train_data_path.
     *
     * Generated from protobuf field <code>string test_data_path = 4;</code>
     * @return string
     */
    public function getTestDataPath()
    {
        return $this->test_data_path;
    }

    /**
     * Cloud Storage test data. Same format as train_data_path. If not provided,
     * a random 80/20 train/test split will be performed on train_data_path.
     *
     * Generated from protobuf field <code>string test_data_path = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setTestDataPath($var)
    {
        GPBUtil::checkString($var, True);
        $this->test_data_path = $var;

        return $this;
    }

}


