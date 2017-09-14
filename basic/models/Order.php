<?php

namespace app\models;

use yii\db\ActiveRecord;
/**
 *
 * @author qwegram
 */
class Order extends ActiveRecord
{
    public static function tableName()
    {
        return 'orders';
    }
    
}
