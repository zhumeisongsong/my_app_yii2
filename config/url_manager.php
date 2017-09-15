<?php

return [
    'enablePrettyUrl' => true,
    'enableStrictParsing' => true,
    'showScriptName' => false,
    'rules' => [
        [
            'class' => 'yii\rest\UrlRule', 'controller' => 'product'
        ],
        [
            'class' => 'yii\rest\UrlRule', 'controller' => 'user'
        ],
        [
            'class' => 'yii\rest\UrlRule', 'controller' => 'order'
        ],
        [
            'class' => 'yii\rest\UrlRule', 'controller' => 'cart'
        ]
    ],
];