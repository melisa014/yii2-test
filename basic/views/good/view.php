<?php

use yii\helpers\Html;

$this->title = $good->name;
?>

<div class="good-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::beginForm(['good/view'], 'post') ?>
            <?= Html::encode('Название товара: ' . $good->name) ?><br>
            <?= Html::encode('Описание товара: ' . $good->description) ?><br>
            <?= Html::encode('Товаров в наличии: ' . $good->available . 'шт.') ?><br>
            <?= Html::encode('Цена товара: ' . $good->price) ?><br>
            <?= Html::submitButton('Редактировать') ?>
            <?= Html::submitButton('Назад') ?>
        <?= Html::endForm() ?>     
    </p>
</div>

