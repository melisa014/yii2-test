<?php


namespace app\models;

use yii\base\Model;

/**
 * 
 */
class SignupForm extends Model
{
    /**
     * Имя пользователя, хранится в модели
     */
    public $username;
    
    /**
     * Email пользователя, хранится в модели 
     */
    public $email;
    
    /**
     * Пароль пользователя, хранится в модели 
     */
    public $password;
    
    public $passwordRepeat;
    
    public function rules()
    {
        return [
            [['username', 'email'], 'trim'],
            [['username', 'email', 'password', 'passwordRepeat'], 'required'],
            ['username', 'unique', 'targetClass' => '\app\models\User', 'message' => 'Данный ник уже занят.'],
            ['username', 'string', 'min' => 2, 'max' => 255],
            ['email', 'email'],
            ['email', 'string', 'max' => 255],
            ['email', 'unique', 'targetClass' => '\app\models\User', 'message' => 'Данный e-mail уже занят.'],
            ['password', 'string', 'min' => 6, 'message' => 'Слишком короткий пароль.'],
            
            ['passwordRepeat', 'required', 'on'=>'register'],
            ['password', 'compare', 'on'=>'register', 'message' => 'Пароль повторён неверно.'],

        ];
    }
    
    /**
     * Signs user up.
     *
     * @return User|null the saved model or null if saving fails
     */
    public function signup()
    {
 
        if (!$this->validate()) {
            return null;
        }
 
        $user = new User();
        $user->username = $this->username;
        $user->email = $this->email;
        $user->setPassword($this->password);
        $user->generateAuthKey();
        return $user->save() ? $user : null;
    }
    
    
}
