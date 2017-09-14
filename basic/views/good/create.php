<?php
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;

$this->title = "Добавить товар";
?>

<div class="good-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?php $form = ActiveForm::begin(['action' => 'create'])?>
            <?= $form->field($good, 'name')->label('Название товара')?><br>
            <?= $form->field($good, 'description')->textarea(['rows' => '3', 'cols' => '85'])->label('Описание товара')?><br>
            <?= $form->field($good, 'price')->label('Цена')?><br>
            <?= $form->field($good, 'available')->label('В наличии, шт')?><br>
            
            <div class='addImage'>
                <div id='addedImage' style='display: none'>
                    <input type='file' name='imageFile[]' placeholder='Выберите изображение'><br> 
                    <input type='text' name='imageDescription[]' placeholder='Введите описание изображения'><br>
                </div>
            </div>
            <input class='addImageSubmit' type="submit" name="addImage" value="+ Изображение"><br><br>
            
            <?= Html::submitButton('Создать')?><br>
            
        <?php ActiveForm::end()?>
    </p>
</div>