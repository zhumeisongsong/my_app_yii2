<?php

namespace app\controllers;

use yii\rest\ActiveController;

class UserController extends ActiveController
{
    public $modelClass = 'app\models\user';
}


//class SiteController extends Controller
//{
//    public function actionSay($message = 'Hello')//Yii 使用 action 前缀区分普通方法和操作,action 前缀后面的名称被映射为操作的 ID
//    {
//        return $this->render('say', ['message' => $message]);
//    }
//}
