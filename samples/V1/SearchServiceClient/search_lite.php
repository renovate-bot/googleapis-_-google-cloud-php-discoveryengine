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

// [START discoveryengine_v1_generated_SearchService_SearchLite_sync]
use Google\ApiCore\ApiException;
use Google\ApiCore\PagedListResponse;
use Google\Cloud\DiscoveryEngine\V1\Client\SearchServiceClient;
use Google\Cloud\DiscoveryEngine\V1\SearchRequest;
use Google\Cloud\DiscoveryEngine\V1\SearchResponse\SearchResult;

/**
 * Performs a search. Similar to the
 * [SearchService.Search][google.cloud.discoveryengine.v1.SearchService.Search]
 * method, but a lite version that allows API key for authentication, where
 * OAuth and IAM checks are not required.
 *
 * Only public website search is supported by this method. If data stores and
 * engines not associated with public website search are specified, a
 * `FAILED_PRECONDITION` error is returned.
 *
 * This method can be used for easy onboarding without having to implement an
 * authentication backend. However, it is strongly recommended to use
 * [SearchService.Search][google.cloud.discoveryengine.v1.SearchService.Search]
 * instead with required OAuth and IAM checks to provide better data security.
 *
 * @param string $formattedServingConfig The resource name of the Search serving config, such as
 *                                       `projects/&#42;/locations/global/collections/default_collection/engines/&#42;/servingConfigs/default_serving_config`,
 *                                       or
 *                                       `projects/&#42;/locations/global/collections/default_collection/dataStores/default_data_store/servingConfigs/default_serving_config`.
 *                                       This field is used to identify the serving configuration name, set
 *                                       of models used to make the search. Please see
 *                                       {@see SearchServiceClient::servingConfigName()} for help formatting this field.
 */
function search_lite_sample(string $formattedServingConfig): void
{
    // Create a client.
    $searchServiceClient = new SearchServiceClient();

    // Prepare the request message.
    $request = (new SearchRequest())
        ->setServingConfig($formattedServingConfig);

    // Call the API and handle any network failures.
    try {
        /** @var PagedListResponse $response */
        $response = $searchServiceClient->searchLite($request);

        /** @var SearchResult $element */
        foreach ($response as $element) {
            printf('Element data: %s' . PHP_EOL, $element->serializeToJsonString());
        }
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
    $formattedServingConfig = SearchServiceClient::servingConfigName(
        '[PROJECT]',
        '[LOCATION]',
        '[DATA_STORE]',
        '[SERVING_CONFIG]'
    );

    search_lite_sample($formattedServingConfig);
}
// [END discoveryengine_v1_generated_SearchService_SearchLite_sync]
