<?php

use yii\helpers\Html;

$this->title = "Все товары";
?>

<div class="good-index">

    <h1><?= Html::encode($this->title) ?></h1>
    
    <p>
        <?= Yii::$app->session->getFlash('delete success'); ?>
        <?= Yii::$app->session->getFlash('delete error'); ?>
    </p>
    <p>
        <?= Html::a('+ Добавить товар', ['good/create']) ?>
    </p>
    <p>
        <?php foreach($goods as $good) : ?>
             
            <?= Html::a($good->name, ['good/view', 'goodId' =>  $good->id]) ?><br>
            <span>Цена: <?= $good->price ?> шт.</span><br>
            <span>В наличии: <?= $good->available ?></span><br>
            
    
        <?php endforeach; ?>
       
    </p>
</div>

