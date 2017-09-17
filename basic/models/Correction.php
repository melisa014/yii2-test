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
    
    /**
     * Транзакция "Заказ товара". Включает создание коррекции и обновление таблицы товаров
     * (создание резерва и уменьшение количества товаров в наличии)
     */
    public function updateUserGoodsTransaction()
    {
        $transaction = Correction::getDb()->beginTransaction();
        try {
//            $Order = Order::findOne(['userId' => Yii::$app->user->identity->id]);
//            $userId = $this->orderId = $Order->userId;
            
            $isGoodInCorrection = Correction::findOne(['goodId' => $this->goodId]);
            if (!empty($isGoodInCorrection)){
                $isGoodInCorrection += $this->number;
                $isGoodInCorrection->save();
            }
            else {
                $userId = $this->order->userId;
                $this->save();
            }
            
            $good = Good::findOne(['id' => $this->goodId]);
            $good->reserve += $this->number;
            $good->available -= $this->number;
            $good->save();
            
//            "START TRANSACTION;"
//                . "INSERT INTO corrections SET id_goods=:id_goods, number=:number, id_orders=:id_orders 
//                    ON DUPLICATE KEY UPDATE number = number + :number;"
//                . "UPDATE  goods SET reserve = reserve + :number, available = available - :number WHERE id = :id_goods;"
//                . "COMMIT";
            
            $transaction->commit();
        } catch(\Throwable $e) {
            $transaction->rollBack();
            throw $e;
        }
    }
}
