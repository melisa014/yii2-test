<?php
//    echo "Hello)";
//    echo "<pre>";
//    print_r($model);
//    echo "</pre>";
    
?>
<?php 
    use yii\helpers\Html;

   
?>
<div>
    <h1><?= Html::encode("Архив товаров") ?></h1>
    
    <ul>
        <?php foreach($model as $value) :?>
            <ol> 
                <?php HTML::beginForm() ?>
                    <?php HTML::tag('a', $value->name) ?>
                    <span><?= $value->name; ?></span>
                    <span>Цена: <?= $value->price; ?></span>
                    <span>В наличии: <?= $value->available; ?></span>
                <?php HTML::endForm() ?>    
            </ol>
        <?php endforeach; ?>
    </ul>
    
</div>