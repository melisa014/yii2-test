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
        <ul id="headlines">
            <?php foreach($goods as $good) : ?>
                <li>
                    <h2><?= Html::a($good->name, ['good/view', 'goodId' =>  $good->id]) ?></h2>
                    <span class="summary">Цена: <?= $good->price ?> р.</span><br>
                    <span class="summary">В наличии: <?= $good->available ?> шт.</span><br><br>
                </li>
    
            <?php endforeach; ?>
        </ul>
    </p>
    <?= LinkPager::widget(['pagination' => $pagination])?>
</div>

