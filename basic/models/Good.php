<?php

namespace app\models;

use yii\db\ActiveRecord;
/**
 *
 * @author qwegram
 */
class Good extends ActiveRecord
{
    public static function tableName()
    {
        return 'goods';
    }
    
    public function rules()
    {
        return [
            [['price', 'name', 'available'], 'required'],
            [['name'], 'unique'],
            [['description'], 'safe'],
        ];
    }
    
    public function getImages()
    {
        return $this->hasMany(Image::className(), ['goodId' => 'id']);
    }
    
     public function getCorrectios()
    {
        return $this->hasMany(Correction::className(), ['goodId' => 'id']);
    }
    
}
