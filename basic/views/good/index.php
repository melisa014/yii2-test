<?php

use yii\helpers\Html;
use yii\widgets\LinkPager;
use yii\widgets\ActiveForm;

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
                    <span class="summary">В наличии: <?= $good->available ?> шт.</span><br>
                    
                <!-- Вывод картинок -->
                    <?php foreach ($good->images as $image) {
                            echo "img src='web/uploads/" . htmlspecialchars($image->path) . "' height='200px'>";
                        }
                    ?><br><br>
                    
                    <?= Yii::$app->session->getFlash('correction success'); ?>
                    <?= Yii::$app->session->getFlash('correction error'); ?>
                    
                    <?php $form = ActiveForm::begin(['action' => ['order/manage']])?>
                        <?= $form->field($good, 'number')->label('Количество товара') ?>
                        <?= Html::hiddenInput('goodId', $good->id) ?>
                        <?= Html::submitButton('Заказать') ?>
                    <?php ActiveForm::end()?>
                    
                </li>
    
            <?php endforeach; ?>
        </ul>
    </p>
    <?= LinkPager::widget(['pagination' => $pagination])?>
</div>

