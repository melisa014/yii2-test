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
    
    <?php foreach ($goods as $good): ?>
        
    <?php print_r($good); echo '<br>-----------------------<br>' ?>
    <?php endforeach; ?>

   </div>
