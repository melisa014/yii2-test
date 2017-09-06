<?php

namespace app\controllers;

use Yii;
use app\models\User;
use yii\web\Controller;
/**
 *
 * @author qwe
 */
class LoginController extends Controller 
{
    public function actionLogin()
    {
        echo "Hello!";
        
        $identity = new User();

        if  (!empty(Yii::$app->request->post())){
            $identity = User::findOne(['login' => $login]);
            Yii::$app->user->login($identity);
        }
        
        return $this->render('login', ['identity' => $identity]);
    }
}
