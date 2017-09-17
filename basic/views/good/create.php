<?php
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;

$this->title = "Добавить товар";
?>

<div class="good-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        
        <?php $form = ActiveForm::begin(['options' => ['action' => 'create', 'enctype' => 'multipart/form-data']])?>
            <?= $form->field($good, 'name')->label('Название товара')?><br>
            <?= $form->field($good, 'description')->textarea(['rows' => '3', 'cols' => '85'])->label('Описание товара')?><br>
            <?= $form->field($good, 'price')->label('Цена')?><br>
            <?= $form->field($good, 'available')->label('В наличии, шт')?>
            
            <div class='addImage'>
                <div id='addedImage' style='display: none'>
                    <?php $form->field($image, 'imageFile[]')->fileInput()->label('Выберите изображение')?><br>
                    <?php $form->field($image, 'imageDescription[]')->label('Введите описание изображения')?><br>
                </div>
            </div>
    
            <?= Html::a('+ Изображение', null, [
                'name' => 'addImage',
                'class' => 'addImageSubmit'
            ])?><br><br>
    
            <?= Html::submitButton('Создать')?><br>
            
        <?php ActiveForm::end()?>
    </p>
</div>