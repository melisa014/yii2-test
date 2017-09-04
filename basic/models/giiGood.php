<?php
namespace app\models;

use yii\db\ActiveRecord;
/**
 *
 * @author qwegram
 */
class GiiGood extends ActiveRecord
{
    public static function tableName()
    {
        return 'goods';
    }
    
    public function rules()
    {
        return [
            [['price', 'name'], 'required'],
            [['name'], 'unique'],
        ];
    }
    
    
}
