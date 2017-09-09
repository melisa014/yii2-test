<?php

use yii\helpers\Html;
use yii\widgets\LinkPager;

$this->title = "Все товары";
?>

<div class="good-index">

    <h1><?= Html::encode($this->title) ?></h1>
    
    <p>
        <?= Yii::$app->session->getFlash('delete success'); ?>
        <?= Yii::$app->session->getFlash('delete error'); ?>
        <?= Yii::$app->session->getFlash('create error'); ?>
    </p>
    <p>
        <?= Html::a('+ Добавить товар', ['good/create']) ?>
    </p>
    
    <p>
        <?php foreach($goods as $good) : ?>
             
            <?= Html::a($good->name, ['good/view', 'goodId' =>  $good->id]) ?><br>
            <span>Цена: <?= $good->price ?> р.</span><br>
            <span>В наличии: <?= $good->available ?> шт.</span><br><br>
            <hr>
    
        <?php endforeach; ?>
    </p>
    <?= LinkPager::widget(['pagination' => $pagination])?>
</div>

