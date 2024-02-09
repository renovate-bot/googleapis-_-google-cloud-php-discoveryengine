<?php

return [
    'interfaces' => [
        'google.cloud.discoveryengine.v1.EngineService' => [
            'CreateEngine' => [
                'longRunning' => [
                    'operationReturnType' => '\Google\Cloud\DiscoveryEngine\V1\Engine',
                    'metadataReturnType' => '\Google\Cloud\DiscoveryEngine\V1\CreateEngineMetadata',
                    'initialPollDelayMillis' => '500',
                    'pollDelayMultiplier' => '1.5',
                    'maxPollDelayMillis' => '5000',
                    'totalPollTimeoutMillis' => '300000',
                ],
                'callType' => \Google\ApiCore\Call::LONGRUNNING_CALL,
                'headerParams' => [
                    [
                        'keyName' => 'parent',
                        'fieldAccessors' => [
                            'getParent',
                        ],
                    ],
                ],
            ],
            'DeleteEngine' => [
                'longRunning' => [
                    'operationReturnType' => '\Google\Protobuf\GPBEmpty',
                    'metadataReturnType' => '\Google\Cloud\DiscoveryEngine\V1\DeleteEngineMetadata',
                    'initialPollDelayMillis' => '500',
                    'pollDelayMultiplier' => '1.5',
                    'maxPollDelayMillis' => '5000',
                    'totalPollTimeoutMillis' => '300000',
                ],
                'callType' => \Google\ApiCore\Call::LONGRUNNING_CALL,
                'headerParams' => [
                    [
                        'keyName' => 'name',
                        'fieldAccessors' => [
                            'getName',
                        ],
                    ],
                ],
            ],
            'GetEngine' => [
                'callType' => \Google\ApiCore\Call::UNARY_CALL,
                'responseType' => 'Google\Cloud\DiscoveryEngine\V1\Engine',
                'headerParams' => [
                    [
                        'keyName' => 'name',
                        'fieldAccessors' => [
                            'getName',
                        ],
                    ],
                ],
            ],
            'ListEngines' => [
                'pageStreaming' => [
                    'requestPageTokenGetMethod' => 'getPageToken',
                    'requestPageTokenSetMethod' => 'setPageToken',
                    'requestPageSizeGetMethod' => 'getPageSize',
                    'requestPageSizeSetMethod' => 'setPageSize',
                    'responsePageTokenGetMethod' => 'getNextPageToken',
                    'resourcesGetMethod' => 'getEngines',
                ],
                'callType' => \Google\ApiCore\Call::PAGINATED_CALL,
                'responseType' => 'Google\Cloud\DiscoveryEngine\V1\ListEnginesResponse',
                'headerParams' => [
                    [
                        'keyName' => 'parent',
                        'fieldAccessors' => [
                            'getParent',
                        ],
                    ],
                ],
            ],
            'UpdateEngine' => [
                'callType' => \Google\ApiCore\Call::UNARY_CALL,
                'responseType' => 'Google\Cloud\DiscoveryEngine\V1\Engine',
                'headerParams' => [
                    [
                        'keyName' => 'engine.name',
                        'fieldAccessors' => [
                            'getEngine',
                            'getName',
                        ],
                    ],
                ],
            ],
            'templateMap' => [
                'collection' => 'projects/{project}/locations/{location}/collections/{collection}',
                'engine' => 'projects/{project}/locations/{location}/collections/{collection}/engines/{engine}',
            ],
        ],
    ],
];
