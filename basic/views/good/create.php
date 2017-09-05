<?php

use yii\helpers\Html;

$this->title = "Добавить товар";
?>

<div class="good-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::beginForm(['good/create'], 'post') ?>
            <?= Html::label('Название товара', 'name', ['class' => 'label name']) ?>
            <?= Html::input('text', 'name', null, ['placeholder' => 'Введите название товара']) ?><br>

            <?= Html::label('Описание товара', 'description', ['class' => 'label description']) ?>
            <?= Html::textarea('description', '', [
                'placeholder' => 'Введите описание товара',
                'rows' => '3',
                'cols' => '85',
                ]) ?><br>
            
            <?= Html::label('Цена товара', 'price', ['class' => 'label price']) ?>
            <?= Html::input('text', 'price', null, ['placeholder' => 'Введите цену товара']) ?><br>

            <?= Html::label('Товар в наличии', 'available', ['class' => 'label available']) ?>
            <?= Html::input('text', 'available', null, ['placeholder' => 'Товаров в наличии']) ?><br>
            <?= Html::submitButton('Сохранить') ?>
        <?= Html::endForm() ?>     
    </p>
</div>