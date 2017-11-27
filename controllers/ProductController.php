<?php

namespace app\controllers;

use yii\rest\ActiveController;//index, view, create, update, delete, options
use yii\data\ActiveDataProvider;

use app\models\Product;

class ProductController extends ActiveController
{
    public $modelClass = 'app\models\Product';

    public function actions()
    {
        $actions = parent::actions();

        unset($actions['delete'], $actions['create'], $actions['update'], $actions['options']);

        $actions['index']['prepareDataProvider'] = [$this, 'prepareDataProvider'];

        return $actions;
    }

    public function prepareDataProvider()
    {
        $query = Product::find();
        $pageSize = 10;

        $provider = new ActiveDataProvider([
            'query' => $query,
//            'pagination' => [
//                'pageSize' => $pageSize,
//            ],
            'sort' => [
                'defaultOrder' => [
                    'productId' => SORT_DESC,
                ]
            ]
        ]);

        return $products = $provider->getModels();
    }
}