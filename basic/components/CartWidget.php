<?php

namespace app\components;

use yii\base\Widget;
use yii\helpers\Html;

/**
 * Реализация потребительской корзины
 */
class CartWidget extends Widget
{
    public function init() 
    {
        parent::init();
        ob_start();
    }
    
    public function run()
    {
        $orderCount = ob_get_clean();
        return $this->render('cart');
    }
}
