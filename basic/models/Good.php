<?php

namespace app\models;

use yii\db\ActiveRecord;
/**
 *
 * @author qwegram
 */
class Good extends ActiveRecord
{
    
    public $number;


    public static function tableName()
    {
        return 'goods';
    }
    
    public function rules()
    {
        return [
            [['price', 'name', 'available'], 'required'],
            ['name', 'unique'],
            ['description', 'string'],
//            [['images'], 'safe', 'filter' => [$this, 'saveImages']],
        ];
    }
    
    
   /**
    * 
    * @param array $images
    * @return type
    */
//   static function saveImages($images) {
//       foreach ($images as $image) {
//           $Image = new Image();
//           $Image->load($images);
//           $Image = new Image();
//           
//       }
//
//   }
    
    public function getImages()
    {
        return $this->hasMany(Image::className(), ['goodId' => 'id']);
    }
    
     public function getCorrections()
    {
        return $this->hasMany(Correction::className(), ['goodId' => 'id']);
    }
    
}
