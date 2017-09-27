<?php

namespace app\controllers;

use yii\rest\ActiveController;

class UserController extends ActiveController
{
    public $modelClass = 'app\models\User';

    public function actionCheckMobileExists()
    {
        $mobile = Yii::$app->request->post('mobile');
        if(User::findByMobile($mobile)){
            echo 'Success';
        }else{
            echo  'Failed';
        }
    }

    public function actionSendLoginCode()
    {
        $mobile = Yii::$app->request->post('mobile');
        $code = $this->createCode();
        $content = "本次验证码为".$code."，您正在登录纽仁云客管理系统，打死也不告诉别人哦";
        if($this->send($mobile,$content)===true){
            //检查session是否打开
            if(!Yii::$app->session->isActive){
                Yii::$app->session->open();
            }
            //验证码和短信发送时间存储session
            Yii::$app->session->set('login_sms_code',$code);
            Yii::$app->session->set('login_sms_time',time());
            echo 'Success';
        }else{
            echo  'Failed';
        }
    }


}
