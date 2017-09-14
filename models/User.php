<?php

namespace app\models;

use yii\db\ActiveRecord;

class User extends ActiveRecord
{
    public static function user ()//table name
    {
        return 'user';
    }
}
