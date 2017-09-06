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
        
        if (!empty(Yii::$app->request->post()) 
                && $good->load(Yii::$app->request->post()) 
                && $good->validate()) {
            $good->save();
//            echo "<pre>";
//            print_r($good);
//            echo "</pre>";
////            die();
            
            return $this->redirect(['good/view', 'goodId' => $good->id]);
        }
//        echo "hello"; die();
        else {
            return $this->render('create', ['good' => $good,]);
        }
    }
    
    public function actionView($goodId)
    {
        
        $good = Good::findOne($goodId); 
        
                return $this->render('view', [
            'good' => $good,
        ]);
    }
    
    /**
     * 1) неявное получение гет-параметров.
     * 
     * @param type $goodId
     * @return type
     */
    public function actionUpdate($goodId)
    {
     
            
        $good = Good::findOne($goodId);
        
        if (!empty(Yii::$app->request->post())){
            if ($good->load(Yii::$app->request->post()) 
                && $good->validate()
                && $good->save()) {
                Yii::$app->getSession()->setFlash('update success', 'Запись успешно обновлена!');   
                return $this->redirect(['good/view', 'goodId' => $good->id]);
            }
            else {
                Yii::$app->getSession()->setFlash('update error', 'Произошла ошибка! Запись не обновлена!');
                return $this->redirect(['good/view', 'goodId' => $good->id]);
            }
        } 
        return $this->render('update', [
            'good' => $good,
        ]);
        
    }
    
    public function actionDelete($goodId)
    {
        $good = Good::findOne($goodId);
        
         echo "<pre>";
            print_r(Yii::$app->request->post());
            echo "</pre>";
//            die();
        
        if (!empty(Yii::$app->request->post())){
            if ($good->delete()) { 
                Yii::$app->getSession()->setFlash('delete success', 'Запись успешно удалена!');
                return $this->redirect(['good/index']);
            }
            else {
                Yii::$app->getSession()->setFlash('delete error', 'Произошла ошибка! Запись не удалена!');
                return $this->redirect(['good/index']);
            }
        }
        return $this->render('delete', [
                'good' => $good,
            ]);
    }
}
