<?php

namespace app\controllers;

use Yii;
use app\models\Good;
use yii\web\Controller;

class GoodController extends Controller
{
    /**
     * Lists all Good models.
     * @return mixed
     */
    public function actionIndex()
    {
        $goods = Good::find()->all();

        return $this->render('index', [
            'goods' => $goods,
        ]);
    }
    
    public function actionCreate()
    {
        
        $good = new Good();
        
        echo "<pre>";
        print_r(Yii::$app->request->post());
        echo "</pre>";
//        die();
        
        if (!empty(Yii::$app->request->post())) {
            $good->insert(true, Yii::$app->request->post());
            
            echo "<pre>";
            print_r($good);
            echo "</pre>";
//            die();
            
            return $this->redirect(['view', 'id' => $good->id]);
        }
//        echo "hello"; die();
        return $this->render('create', ['good' => $good,]);
    }
    
//    public function actionView()
//    {
//        $good = Good::findOne(['id' => ]);
//
//        return $this->render('index', [
//            'good' => $good,
//        ]);
//    }
}
