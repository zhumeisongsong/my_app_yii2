<?php

namespace app\models;

use yii\db\ActiveRecord;
use yii\web\IdentityInterface;

//class User extends ActiveRecord
//{
//    public static function user()
//    {
//        return 'User';
//    }
//}

class User extends ActiveRecord implements IdentityInterface
{
    public static function user()
    {
        return 'user';
    }

    public static function findIdentity($mobile)
    {
        return static::findOne($mobile);
    }

    /*无状态RESTful应用*/
    /**
     * 根据 token 查询身份。
     *
     * @param string $token 被查询的 token
     * @return IdentityInterface|null 通过 token 得到的身份对象
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {
        return static::findOne(['access_token' => $token]);
    }

    /**
     * @return int|string 当前用户ID
     */
    public function getId()
    {
        return $this->id;
    }

    public function getAuthKey(){}
    public function validateAuthKey($authKey){}
}
