<?php

namespace app\controllers;

use yii\rest\ActiveController;

class ProductController extends ActiveController
{
    public $modelClass = 'app\models\Product';
}

//use yii\rest\Controller;
//use yii\data\ActiveDataProvider;
//use app\models\Product;
//
//class ProductController extends Controller
//{
//    public function actionIndex()
//    {
//        return new ActiveDataProvider([
//            'query' => Post::find(),
//        ]);
//    }
//}