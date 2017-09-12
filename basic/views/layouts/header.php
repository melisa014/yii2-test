<!DOCTYPE html>

<?php 
    
    use Yii;
    use app\assets\AppAsset;
    use yii\helpers\Url;
    use yii\helpers\Html;
    
    AppAsset::register($this);
    $this->beginPage();
?>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=windows-1251" />
        <title>Магазин (Yii2)</title>
        <!--<script src="/web/JS/jquery-3.2.1.js"></script>
        <script src="/web/JS/jquery.validate.js"></script>
        <script src="web/JS/loaderIdentity.js"></script>
        <script src="/web/JS/javascript.js"></script> -->
        <?php $this->head(); ?>
    </head>
    <body>
        <?php $this->beginBody();?>
        
        <a href="<?= Url::toRoute("good/index")?>"><?= Html::img('@web/images/flower1.png', ['alt' => 'Flower']) ?></a>
        <h1>ЦВЕТЫ ВАШЕЙ ЖИЗНИ</h1>
        <hr>
        
<!-- Это блок навигации по сайту -->
        <p>
            <a href="<?= Url::toRoute("good/index")?>">На домашнюю страницу</a>
            <a href="<?= Url::toRoute("site/login")?>">Войти под своим именем</a><br>
            
            <?php if (Yii::$app->user->identity) : ?>
            Приветствуем, <?= Yii::$app->user->identity->username ?>! 
            <?php endif; ?>
            
            <a href="<?= Url::toRoute("site/logout")?>">Выйти</a>

          
<!--//        \core\User::get()->returnIfAllowed("article/add", 
//                   "<a href=" . Url::to("article/add") . ">+ Добавить статью</a>");
//                \core\User::get()->returnIfAllowed("archive/allCategories", 
//                   "<a href=" . Url::to("archive/allCategories") . ">В архив(Категории)</a>");
//                \core\User::get()->returnIfAllowed("archive/allUsers", 
//                   "<a href=" . Url::to("archive/allUsers") . ">В архив(Пользователи)</a>");
//                \core\User::get()->returnIfAllowed("category/add", 
//                   "<a href=" . Url::to("category/add") . ">+ Добавить категорию</a>");
//                \core\User::get()->returnIfAllowed("admin/adminusers/add", 
//                   "<a href=" . Url::to("admin/adminusers/add") . ">+ Добавить пользователя</a>");
//                \core\User::get()->returnIfAllowed("archive/allGoods", 
//                   "<a href=" . Url::to("archive/allGoods") . ">В архив(Товары)</a>");
//                \core\User::get()->returnIfAllowed("admin/good/add", 
//                   "<a href=" . Url::to("admin/good/add") . ">+ Добавить товар</a>");
//                \core\User::get()->returnIfAllowed("goodSearch/index", 
//                   "<a href=" . Url::to("goodSearch/index") . ">Поиск по товарам</a>");-->

          
        </p>
       
<!-- Это блок данных о пользователе и для пользователя-->
<!--        <p>
            \core\User::get()->userName . ' ' <br>
            <span id="sessionLikesCount">Понравилось:  \core\Session::get()->session['user']['userSessionLikesCount']</span><br>-->

    <!-- Выводим на экран ссылку на "Мой заказ" для просмотра и подтверждения, и в скобках кол-во заказанных товаров-->
<!--            <span>
                 \core\User::get()->returnIfAllowed("order/index", 
                        "<a href=" . Url::to("order/index") 
                        . ">Мой заказ</a> (" . (new \application\models\Correction())->getUsersAllGoodsCount() . ")");
            </span><br>-->
            
           
        </p>
        
<!-- Это начало страницы сайта-->
        <div id="container">
        
            
            <?= $content ?>
            <div id="footer">
                2017. All rights reserved. 
            </div>
        </div>
        <?php $this->endBody();?>
    </body>
</html>
            <?php $this->endPage(); ?>
           