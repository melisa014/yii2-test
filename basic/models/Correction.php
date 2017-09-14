<?php

namespace app\models;

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
    
    public function getUsersAllGoodsCount()
    {
        $this->find();
                
    }
    
    
}
