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
        <?php $form = ActiveForm::begin(['action' => ['good/update', 'goodId' => $good->id]])?>
            <?= $form->field($good, 'name')->label('Название товара')?><br>
            <?= $form->field($good, 'description')->textarea(['rows' => '3', 'cols' => '85'])->label('Описание товара')?><br>
            <?= $form->field($good, 'price')->label('Цена')?><br>
            <?= $form->field($good, 'available')->label('В наличии, шт')?>
            <?= Html::a('+ Изображение', 'good/update', [
                'class' => 'addImageSubmit',
                'name' => 'addImage'
            ])?><br><br>
            <?= Html::submitButton('Сохранить изменения')?><br>
            <?= Html::a('Назад', ['good/view', 'goodId' => $good->id])?><br>
            <?= Html::a('Удалить', ['good/delete', 'goodId' => $good->id])?><br>
            
        <?php ActiveForm::end()?>
            
        <div class='addImage'>
            <div id='addedImage' style='display: none'>
                <input type='file' name='imageFile[]' placeholder='Выберите изображение'><br> 
                <input type='text' name='imageDescription[]' placeholder='Введите описание изображения'><br>
            </div>
        </div>
        
    </p>
    
    
</div>

