<?php

namespace app\models;

use yii\db\ActiveRecord;
use yii\web\IdentityInterface;

//class User extends ActiveRecord implements IdentityInterface
//{
//    public static function user ()//table name
//    {
//        return 'user';
//    }
//
//    /**
//     * 根据给到的ID查询身份。
//     *
//     * @param string|integer $id 被查询的ID
//     * @return IdentityInterface|null 通过ID匹配到的身份对象
//     */
//    public static function findIdentity($id)
//    {
//       return static::findOne($id);
//    }
//
//    /**
//     * 根据 token 查询身份。
//     *
//     * @param string $token 被查询的 token
//     * @return IdentityInterface|null 通过 token 得到的身份对象
//     * 无状态RESTful应用
//     */
//    public static function findIdentityByAccessToken($token, $type = null)
//    {
//        return static::findOne(['access_token' => $token]);
//    }
//
//    /**
//     * @return int|string 当前用户ID
//     * 无状态RESTful应用
//     */
//    public function getId()
//    {
//        return $this->id;
//    }
//
//    /**
//     * @return string 当前用户的（cookie）认证密钥
//     * 利用 cookie 登录
//     */
//    public function getAuthKey()
//    {
//    }
//
//    /**
//     * @param string $authKey
//     * @return boolean if auth key is valid for current user
//     * 利用 cookie 登录
//     */
//    public function validateAuthKey($authKey)
//    {
//    }
//}
