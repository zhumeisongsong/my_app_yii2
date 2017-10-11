<?php

namespace app\controllers;

use yii\rest\ActiveController;
use yii\data\ActiveDataProvider;

use app\models\Order;
use app\models\OrderPd;

class OrderController extends ActiveController
{
    public $modelClass = 'app\models\Order';

    public function actions()
    {
        $actions = parent::actions();

        unset( $actions['update'], $actions['options']);

        $actions['index']['prepareDataProvider'] = [$this, 'prepareDataProvider'];

        return $actions;
    }

    public function prepareDataProvider()
    {
        $query = Order::find();
        $pageSize = 10;

        $provider = new ActiveDataProvider([
            'query' => $query,
//            'pagination' => [
//                'pageSize' => $pageSize,
//            ],
            'sort' => [
                'defaultOrder' => [
                    'orderId' => SORT_DESC,
                ]
            ]
        ]);

        return $products = $provider->getModels();
    }
}