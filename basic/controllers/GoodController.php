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
    
    public function actionEdit()
    {
        
    }
    
    public function actionDelete()
    {
        
    }
    
    public function actionAdd()
    {
        
    }
    
    public function actionArchive()
    {
        $goods = Good::find()->all();
        
        if ($goods === null) {
            throw new NotFoundHttpException;
        }
         return $this->render('archive', [
            'model' => $goods,
        ]);
    }
}
