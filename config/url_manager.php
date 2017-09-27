<?php

return [
    'enablePrettyUrl' => true,
    'enableStrictParsing' => true,
    'showScriptName' => false,
    'rules' => [
        [
            'class' => 'yii\rest\UrlRule',
            'controller' => 'product',
            'only' => [],
        ],
        [
            'class' => 'yii\rest\UrlRule',
            'controller' => ['v1/user'],
            'extraPatterns'=>[
                'POST login'=>'login',
                'GET signup-test' =>'signup-test',
            ]
        ],
        [
            'class' => 'yii\rest\UrlRule',
            'controller' => 'order'
        ],
        [
            'class' => 'yii\rest\UrlRule',
            'controller' => 'cart'
        ]
    ],
];