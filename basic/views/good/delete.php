<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Удаление товара';
?>

<div class="good-delete">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?php $form = ActiveForm::begin(['action' => ['good/delete', 'goodId' => $good->id]])?>
            <?= Html::encode('Вы уверены, что хотите удалить данные о товаре?') ?><br>
            <?= Html::submitButton('Да')?><br>
            <?= Html::a('Назад', ['good/update', 'goodId' => $good->id])?><br>
        <?php ActiveForm::end()?>
    </p>
    
    
</div>

