<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\GoodSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Все товары';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="good-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('+ Добавить товар', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    
    <p>
        <?php 
        echo "<pre>";
        print_r($searchModel);
        print_r($dataProvider);
        echo "</pre>";?>
       
    </p>

   <!-- <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'name',
            'description:ntext',
            'available',
            'price',
            'id',
            // 'likes',
            // 'reserve',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?> -->
   </div>
