<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Регистрация';
?>
<div class="site-signup">
    <h1><?= Html::encode($this->title) ?></h1>
    
    <p>Для регистрации в системе, заполните поля:</p>

    <?php $form = ActiveForm::begin(['action' => ['site/signup']]); ?>

        <?= $form->field($model, 'username')->textInput(['autofocus' => true])->label('Введите ник') ?>

        <?= $form->field($model, 'email')->textInput()->label('Введите e-mail') ?>
        
        <?= $form->field($model, 'password')->passwordInput()->label('Введите пароль') ?>
    
        <?= $form->field($model, 'passwordRepeat')->passwordInput()->label('Повторите пароль') ?>
        
        <div>
            <?= Html::submitButton('Зарегистрироваться', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
        </div>
        

    <?php ActiveForm::end(); ?>
    
</div>