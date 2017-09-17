<?php
use yii\helpers\Html;
?>
<p>
    <?= Html::a('Корзина', ['order/index'])?><br>
    Мой заказ: <?= Html::tag('span', '*здесь будет число заказов*', ['style' => 'font-style: italic']) ?> шт.
</p>