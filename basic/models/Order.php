<?php

namespace app\models;

use Yii;
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
    
    public function rules()
    {
        return [
            ['userId', 'default', 'value' => Yii::$app->user->identity->id],
        ];
    }
    
     public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'userId']);
    }
    
    /**
     * Существует ли Заказ у актуального пользователя
     */
    public function isUserOrder()
    {
        $Order = $this->findOne(['userId' => Yii::$app->user->identity->id]);
        return !empty($Order) ? true : false;
    }
}
