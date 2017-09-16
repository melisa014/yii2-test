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
            
        <!-- Вывод картинок -->
            <?php foreach ($good->images as $image) {
                    echo "img src='web/uploads/" . htmlspecialchars($image->path) . "' height='200px'>";
                } ?><br>
            <?= $form->field($good, 'description')->textarea(['rows' => '3', 'cols' => '85'])->label('Описание товара')?><br>
            <?= $form->field($good, 'price')->label('Цена')?><br>
            <?= $form->field($good, 'available')->label('В наличии, шт')?>
            
            <div class='addImage'>
                <div id='addedImage' style='display: none'>
                    <?php // $form->field($image, 'imageFile[]')->fileInput(['multiple'=>true])
                             //                              ->label('Выберите изображение')?><br>
                    <?php // $form->field($goods, 'imagesFile[]')->fileInput(['multiple'=>true])
                        //->label('Выберите изображение')?>
                        <!--<input name="Good[images][1][Image][image-file]">
                        <input name="Good[images][1][Image][descripttion]">
                    <br>-->
                    <?php //$form->field($image, 'imageDescription[]')->textInput(['multiple'=>true])
                            //                                      ->label('Введите описание изображения')?><br>
                </div>
            </div>
    
            <?= Html::a('+ Изображение', null, [
                'name' => 'addImage',
                'class' => 'addImageSubmit'
            ])?><br><br>
            
            <?= Html::submitButton('Сохранить изменения')?><br>
            <?= Html::a('Назад', ['good/view', 'goodId' => $good->id])?><br>
            <?= Html::a('Удалить', ['good/delete', 'goodId' => $good->id])?><br>
            
        <?php ActiveForm::end()?>
            
        
            
            
        
    </p>
    
    
</div>

