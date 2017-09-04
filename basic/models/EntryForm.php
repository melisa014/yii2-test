<?php


namespace app\models;

use yii\base\Model;

/**
 * 
 */
class EntryForm extends Model
{
    /**
     * Имя пользователя, хранится в модели
     */
    public $name;
    
    /**
     * Email пользователя, хранится в модели 
     */
    public $email;
    
    public function rules()
    {
        return [
            [['name', 'email'], 'required'],
            ['email', 'email'],
        ];
    }
    
    
}
