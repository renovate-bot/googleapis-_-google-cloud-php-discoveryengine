<?php
/*
 * Copyright 2024 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     https://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/*
 * GENERATED CODE WARNING
 * This file was automatically generated - do not edit!
 */

require_once __DIR__ . '/../../../vendor/autoload.php';

// [START discoveryengine_v1_generated_DocumentService_BatchGetDocumentsMetadata_sync]
use Google\ApiCore\ApiException;
use Google\Cloud\DiscoveryEngine\V1\BatchGetDocumentsMetadataRequest;
use Google\Cloud\DiscoveryEngine\V1\BatchGetDocumentsMetadataRequest\Matcher;
use Google\Cloud\DiscoveryEngine\V1\BatchGetDocumentsMetadataResponse;
use Google\Cloud\DiscoveryEngine\V1\Client\DocumentServiceClient;

/**
 * Gets index freshness metadata for
 * [Document][google.cloud.discoveryengine.v1.Document]s. Supported for
 * website search only.
 *
 * @param string $formattedParent The parent branch resource name, such as
 *                                `projects/{project}/locations/{location}/collections/{collection}/dataStores/{data_store}/branches/{branch}`. Please see
 *                                {@see DocumentServiceClient::branchName()} for help formatting this field.
 */
function batch_get_documents_metadata_sample(string $formattedParent): void
{
    // Create a client.
    $documentServiceClient = new DocumentServiceClient();

    // Prepare the request message.
    $matcher = new Matcher();
    $request = (new BatchGetDocumentsMetadataRequest())
        ->setParent($formattedParent)
        ->setMatcher($matcher);

    // Call the API and handle any network failures.
    try {
        /** @var BatchGetDocumentsMetadataResponse $response */
        $response = $documentServiceClient->batchGetDocumentsMetadata($request);
        printf('Response data: %s' . PHP_EOL, $response->serializeToJsonString());
    } catch (ApiException $ex) {
        printf('Call failed with message: %s' . PHP_EOL, $ex->getMessage());
    }
}

/**
 * Helper to execute the sample.
 *
 * This sample has been automatically generated and should be regarded as a code
 * template only. It will require modifications to work:
 *  - It may require correct/in-range values for request initialization.
 *  - It may require specifying regional endpoints when creating the service client,
 *    please see the apiEndpoint client configuration option for more details.
 */
function callSample(): void
{
    $formattedParent = DocumentServiceClient::branchName(
        '[PROJECT]',
        '[LOCATION]',
        '[DATA_STORE]',
        '[BRANCH]'
    );

    batch_get_documents_metadata_sample($formattedParent);
}
// [END discoveryengine_v1_generated_DocumentService_BatchGetDocumentsMetadata_sync]
