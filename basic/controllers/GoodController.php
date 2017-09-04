<?php

namespace app\controllers;

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

        return $this->render('index2', [
            'goods' => $goods,
        ]);
    }
}
