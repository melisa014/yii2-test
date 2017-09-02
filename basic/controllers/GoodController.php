<?php

namespace app\controllers;

use yii\web\Controller;
use app\models\Good;

/**
 *
 * @author qwegram
 */
class GoodController extends Controller
{
    /**
     * Выводит список всех товаров магазина
     * @throws NotFoundHttpException
     */
    public function actionIndex()
    {
        $goods = Good::find()->all();
        
        if ($goods === null) {
            throw new NotFoundHttpException;
        }
         return $this->render('index', [
            'model' => $goods,
        ]);
    }
    
    /**
     * Выводит подробное описание товара на отдельной странице
     * @throws NotFoundHttpException
     */
    public function actionView($id)
    {
        $model = Good::find()
                ->where('id')
                
                ;
        if ($model === null) {
            throw new NotFoundHttpException;
        }

        return $this->render('view', [
            'model' => $model,
        ]);
    }
    
    /**
     * Выводит форму для редактирования товара
     */
    public function actionEdit()
    {
        $model = Good::update();
    }
    
    /**
     * Выводит предупреждение об удалении товара
     */
    public function actionDelete()
    {
        
    }
    
    /**
     * Выводит форму для добавления товара (для администратора)
     */
    public function actionAdd()
    {
        
    }
    
    
}
