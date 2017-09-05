<?php
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;

//echo "<pre>";
//print_r($good);
//echo "</pre>";
//die();


$this->title = $good->name;
?>

<div class="good-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?php $form = ActiveForm::begin(['action' => ['view?id=' . $good->id]])?>
            <?= $form->field($good, 'name')->label('Название товара')?><br>
            <?= $form->field($good, 'description')->textarea(['rows' => '3', 'cols' => '85'])->label('Описание товара')?><br>
            <?= $form->field($good, 'price')->label('Цена')?><br>
            <?= $form->field($good, 'available')->label('В наличии, шт')?><br>
            <?= Html::submitButton('Сохранить изменения', ['name' => 'saveChanges'])?><br>
            <?= Html::submitButton('Удалить', ['name'  => 'delete'])?><br>
            
        <?php ActiveForm::end()?>
    </p>
    
    
</div>

