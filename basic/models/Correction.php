<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;
/**
 *
 * @author qwegram
 */
class Correction extends ActiveRecord
{
    public static function tableName()
    {
        return 'corrections';
    }
    
    public function rules()
    {
        return [
            ['number', 'required'],
        ];
    }
    
    public function getGood()
    {
        return $this->hasMany(Good::className(), ['id' => 'goodId']);
    }
    
    public function getOrder()
    {
        return $this->hasOne(Order::className(), ['id' => 'orderId']);
    }
    
    public function getUsersAllGoodsCount()
    {
        $this->find();
                
    }
    
    /**
     * Существует ли Товары(Коррекции) у актуального пользователя
     */
    public function isUserCorrections()
    {
        $Order = Order::findOne(['userId' => Yii::$app->user->identity->id]);
        if(empty($Order)) {
            return false;
        }
        else {
            $Correction = $this->findOne(['orderId' => $Order->id]);
            return !empty($Correction) ? true : false;
        }
    }
    
}
