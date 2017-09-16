<?php

namespace app\controllers;

use Yii;
use app\models\Good;
use app\models\Image;
use yii\web\Controller;
use yii\data\Pagination;
use ItForFree\FileUploader;

class GoodController extends Controller
{
    /**
     * Lists all Good models.
     * @return mixed
     */
    public function actionIndex()
    {
        $goods = Good::find(); 

        $pagination = new Pagination([
            'defaultPageSize' => 3,
            'totalCount' => $goods->count(),
        ]);
        
        $orderGoods = $goods->orderBy('id')
                ->offset($pagination->offset)
                ->limit($pagination->limit)
                ->all();
        
        return $this->render('index', [
            'goods' => $orderGoods,
            'pagination' => $pagination,
        ]);
    }
    
    /**
     * Создание нового товара 
     */
    public function actionCreate()
    {
        
        $good = new Good();
        $image = new Image();
        
        if (!empty(Yii::$app->request->post())){
            if($good->load(Yii::$app->request->post()) 
                && $good->validate()
                && $good->save()){
                
//                $additionalPath = "basic/web/images/goods/" . $good->id;
//                $uploadedFiles = (new FileUploader())->uploadToRelativePath($_FILES, '', $additionalPath);
//                $pathArray = [];
//                foreach ($uploadedFiles as $image) {
//                    $pathArray[] = $image['filepath'];
//                }
//                $image->path = $pathArray;
////              
//                $image->load(Yii::$app->request->post());
//                $image->goodId = $good->id;
//                $image->save();
                
                Yii::$app->getSession()->setFlash('create success', 'Запись успешно создана!');
                return $this->redirect(['good/view', 'goodId' => $good->id]);
            }
            else {
                Yii::$app->getSession()->setFlash('create error', 'Произошла ошибка! Запись не создана!');
                return $this->redirect(['good/index']);
            }
        }
        return $this->render('create', ['good' => $good, 'image' => $image]);
    }
    
    /**
     * Просмотр информации о товаре
     */
    public function actionView($goodId)
    {
        
        $good = Good::findOne($goodId); 
        
                return $this->render('view', [
            'good' => $good,
        ]);
    }
    
    /**
     * Обновление данных о товаре
     * @param type $goodId
     * @return type
     */
    public function actionUpdate($goodId)
    {
        $good = Good::findOne($goodId);
        $image = new Image();
        
        if (!empty(Yii::$app->request->post())){
            if ($good->load(Yii::$app->request->post()) 
                && $good->validate()
                && $good->save()) {
                
//                $additionalPath = "basic/web/images/goods/" . $good->id;
//                $uploadedFiles = (new FileUploader())->uploadToRelativePath($_FILES, '', $additionalPath);
//                $pathArray = [];
//                foreach ($uploadedFiles as $image) {
//                    $pathArray[] = $image['filepath'];
//                }
//                $image->path = $pathArray;
////              
//                $image->load(Yii::$app->request->post());
//                $image->goodId = $good->id;
//                $image->save();
                
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
            'image' => $image
        ]);
        
    }
    
    /**
     * Удаление товара
     */
    public function actionDelete($goodId)
    {
        $good = Good::findOne($goodId);
        
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
