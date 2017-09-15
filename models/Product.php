<?php

namespace app\models;

use yii\db\ActiveRecord;

class Product extends ActiveRecord
{
    public static function product()
    {
        return 'product';
    }

//    public function fields()
//    {
//        return [
//            'id' => 'productId',
//            'name' => 'productName',
//            'price',
//            'intro' => 'listIntro',
//            'coverUrl'
//        ];
//    }
}
