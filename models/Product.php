<?php

namespace app\models;

use yii\db\ActiveRecord;

class Product extends ActiveRecord
{
    public static function product()
    {
        return 'product';
    }
}
