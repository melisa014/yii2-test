<?php
use yii\helpers\Html;


$this->title = $good->name;
?>

<div class="good-view">

    <h1><?= Html::encode($this->title) ?></h1>
    
    <p>
        <?= Yii::$app->session->getFlash('update success'); ?>
        <?= Yii::$app->session->getFlash('update error'); ?>
        <?= Yii::$app->session->getFlash('create success'); ?>
    </p>
    <p>
        <?= Html::encode('Название товара: ' . $good->name) ?><br>
        
    <!-- Вывод картинок -->
        <?php foreach ($good->images as $image) {
                echo "img src='web/uploads/" . htmlspecialchars($image->path) . "' height='200px'>";
            } ?><br>
            
        <?= Html::encode('Описание товара: ' . $good->description) ?><br>
        <?= Html::encode('Товаров в наличии: ' . $good->available . 'шт.') ?><br>
        <?= Html::encode('Цена товара: ' . $good->price) ?><br>
        <?= Html::a('Редактировать', ['good/update', 'goodId' => $good->id]) ?>
        <?= Html::a('Назад', ['good/index']) ?>
    </p>
    
    
</div>

