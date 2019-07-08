<?php

use codexten\yii\modules\api\ApiModule;

return [
    'modules' => [
        'api' => [
            'class' => ApiModule::class,
        ],
    ],
    'components' => [
        'urlManager' => [
            'rules' => [
                'api' => [
                    'class' => 'yii\rest\UrlRule',
                    'patterns' => [
                        'POST {id}' => 'update',
                        'DELETE {id}' => 'delete',
                        'GET,HEAD {id}' => 'view',
                        'POST' => 'create',
                        'GET,HEAD' => 'index',
                        '{id}' => 'options',
                        '' => 'options',
                    ],
                    'controller' => [

                    ],
                ],
            ],
        ],
    ],
];
