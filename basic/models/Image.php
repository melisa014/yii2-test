<?php

namespace app\models;

use yii\db\ActiveRecord;
/**
 *
 * @author qwegram
 */
class Image extends ActiveRecord
{
    public static function tableName()
    {
        return 'images';
    }
    
    public function rules()
    {
        return [
            ['path', 'required'],
            ['description', 'safe'],
        ];
    }
    
    public function getGood()
    {
        return $this->hasOne(Good::className(), ['id' => 'goodId']);
    }
    
}
