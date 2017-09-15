<?php

namespace app\models;

use yii\db\ActiveRecord;

/**
 *
 * @author qwegram
 */
class Image extends ActiveRecord
{
    public $imageFile = [];
    public $imageDescription = [];
    
    public static function tableName()
    {
        return 'images';
    }
    
    public function rules()
    {
        return [
           // [['imageFile'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png, jpg'],
            ['image-file', 'skipOnEmpty' => false, 'extensions' => 'png, jpg'],
            ['description', 'string'],
        ];
    }
    
    public function getGood()
    {
        return $this->hasOne(Good::className(), ['id' => 'goodId']);
    }
    
}