<?php
use yii\helpers\Html;

$this->title = 'Удаление товара';
?>

<div class="good-delete">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?php Html::beginForm('good/delete?id=' . $good->id)?>
            <?= Html::encode('Вы уверены, что хотите удалить данные о товаре?') ?><br>
            <?= Html::submitButton('Да', ['name' => 'deleteGood', 'value' => 'delete'])?><br>
            <?= Html::submitButton('Вернуться', ['name' => 'Cancel', 'value' => 'close'])?><br>
        <?php Html::endForm()?>
    </p>
    
    
</div>

