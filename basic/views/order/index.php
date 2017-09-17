<?php
use yii\helpers\Html;
use yii\widgets\GridView; 


$this->title = 'Мой заказ';
?>

<div class="order-view">

    <h1><?= Html::encode($this->title) ?></h1>
    
    <p>
        <?= Yii::$app->session->getFlash('order approve success'); ?>
        <?= Yii::$app->session->getFlash('order cancel success'); ?>
        <?= Yii::$app->session->getFlash('order approve error'); ?>
        <?= Yii::$app->session->getFlash('order cancel error'); ?>
    </p>
    <p>
        <?php if (empty($correction)) : ?>
            <?= Html::encode($message) ?><br><br>
        <?php else : ?>
            <?php foreach ($correction as $good) : ?>
                    <?= GridView::widget([
                        'dataProvider' => $dataProvider,
                        'filterModel' => $searchModel,
                        'columns' => [
                            ['class' => 'yii\grid\SerialColumn'],

                            'code',
                            'name',
                            'population',

                            ['class' => 'yii\grid\ActionColumn'],
                        ],
                    ]); ?>
            <?php endforeach; ?>
        <?php endif; ?>
        
        <?= Html::submitButton('Подтвердить заказ', ['order/index']) ?><br>
        <?= Html::a('Отменить заказ', ['order/delete']) ?><br>
        <?= Html::a('Назад', ['good/index']) ?><br>
    </p>
    
    
</div>

