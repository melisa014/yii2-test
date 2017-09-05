<?php

use yii\helpers\Html;

$this->title = "Все товары";
?>

<div class="good-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('+ Добавить товар', ['create']) ?>
    </p>
    
    <p>
        <?php foreach($goods as $good) : ?>
             
            <?= HTML::a($good->name, ['view']) ?><br>
            <span>Цена: <?= $good->price ?> шт.</span><br>
            <span>В наличии: <?= $good->available ?></span><br>
            <?= HTML::button('Редактировать', ['update']) ?><br>
            <?= HTML::button('Удалить', ['delete']) ?><br>
    
        <?php endforeach; ?>
       
    </p>
</div>

