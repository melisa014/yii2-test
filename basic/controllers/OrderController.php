<?php

namespace app\controllers;

use Yii;
use yii\base\Controller;
use app\models\Correction;
use app\models\Order;

/**
 * Управление заказами
 */
class OrderController extends Controller
{
    
    /**
     * Просмотр информации об актуальном заказе
     */
    public function actionIndex()
    {
        //Проверяем, существует ли у пользователя актуальный Заказ и Товары в нём. Если нет, выводим сообщение
        if(!(new Order)->isUserOrder() && !(new Correction)->isUserCorrections()) {
            return $this->render('index', [
                'message' => 'Вы ещё ничего не заказали',
            ]);
        }
        
        // Если получена информация о подтверждении заказа, подтверждаем
        if(!empty(Yii::$app->request->post())){
            
        }
        // Выводим на экран таблицу с заказанными товарами
        
        $searchModel = new Correction();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
        
//        return $this->render('index', [
//            'correction' => $Correction,
//        ]);
    }
    
    /**
     * Обработка формы заказа товара
     */
    public function actionManage()
    {
        //Проверяем наличие заказа у данного полдьзователя, если его нет, то создаём
        $Order = new Order();
        if(!$Order->isUserOrder()){
//            $Order = (new Order)->insert(true, ['userId' => Yii::$app->user->identity->id]);
            $Order->userId = Yii::$app->user->identity->id;
            $Order->save();
        }
        
        //Переводим товары в статус зарезервированных
        $Correction = new Correction();
        if($Correction->load(Yii::$app->request->post()) 
                && $Correction->updateUserGoodsTransaction()) {
            Yii::$app->getSession()->setFlash('correction access', 'Товар добавлен в корзину!');
            return Yii::$app->response->redirect(['good/index']);
        }
        
        //Если коррекция не прошла выводим сообщение об ошибке
        Yii::$app->getSession()->setFlash('correction error', 'Произошла ошибка! Товар не добавлен.');
        return Yii::$app->response->redirect(['good/index']);
        
        
    }
    
    public function actionDelete()
    {
        if ((new Order)->isUserOrder()) {
            $Order->delete();
            return $this->render('index', [
                'message' => 'Вы ещё ничего не заказали'
            ]);
        } 
        else {
            return $this->render('index', [
                'message' => 'Вы ещё ничего не заказали'
            ]);
        }
    }
    
}
