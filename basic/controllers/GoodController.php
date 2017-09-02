<?php

namespace app\controllers;

use yii\web\Controller;
use yii\models\Good;

/**
 *
 * @author qwegram
 */
class GoodController extends Controller
{
    public function actionView($id)
    {
        $model = Good::findOne($id);
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
        
    }
}
