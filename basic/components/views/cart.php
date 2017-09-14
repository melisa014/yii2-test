<?php
use yii\helpers\Html;
?>
<p>
    <?= Html::encode('Корзина')?><br>
    Мой заказ: <?= Html::tag('span', '*здесь будет число заказов*', ['style' => 'font-style: italic']) ?> шт.
</p>