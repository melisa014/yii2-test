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
    
    public function getUsersAllGoodsCount()
    {
        $this->find();
                
    }
    
    
}
