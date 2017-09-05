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
        
//        echo "<pre>";
//        print_r(Yii::$app->request->post());
//        echo "</pre>";
//        die();
        
        if (!empty(Yii::$app->request->post()) 
                && $good->load(Yii::$app->request->post()) 
                && $good->validate()) {
            $good->save();
//            echo "<pre>";
//            print_r($good);
//            echo "</pre>";
////            die();
            
            return $this->redirect(['view?id=' . $good->id]);
        }
//        echo "hello"; die();
        else {
            return $this->render('create', ['good' => $good,]);
        }
    }
    
    public function actionView()
    {
        echo "<pre>";
        print_r(Yii::$app->request->post());
        print_r(Yii::$app->request->get());
        echo "</pre>";
//        die();
        
        $good = Good::findOne(['id' => Yii::$app->request->get('id')]);
        
        if (!empty(Yii::$app->request->post())){
            return $this->redirect(['update?id=' . $good->id]);
        }

        return $this->render('view', [
            'good' => $good,
        ]);
    }
    
    public function actionUpdate()
    {
     
        echo "<pre>";
        print_r(Yii::$app->request->post());
        echo "</pre>";
        die();
            
        $good = Good::findOne(['id' => Yii::$app->request->get('id')]);
        
        if (!empty(Yii::$app->request->post()) 
                && $good->load(Yii::$app->request->post()) 
                && $good->validate()) {
            $good->save();
            
        }
        else {
            return $this->render('update', [
                'good' => $good,
            ]);
        }
    }
    
    public function actionDelete()
    {
        $good = Good::findOne(['id' => Yii::$app->request->get('id')]);
        
            echo "<pre>";
        print_r(Yii::$app->request->post());
        print_r(Yii::$app->request->get());
        print_r($_POST);
        echo "</pre>";
//        die();
        
        if (!empty(Yii::$app->request->post())) {
        
            
        }

        return $this->render('delete', [
                'good' => $good,
            ]);
    }
}
