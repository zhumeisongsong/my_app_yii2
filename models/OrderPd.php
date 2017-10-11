<?php

namespace app\models;

use yii\db\ActiveRecord;

class OrderPd extends ActiveRecord
{
    public static function order()
    {
        return 'order_product';
    }
}