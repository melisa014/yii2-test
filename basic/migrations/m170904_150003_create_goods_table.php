<?php

use yii\db\Migration;

/**
 * Handles the creation of table `goods`.
 */
class m170904_150003_create_goods_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('goods', [
            'id' => $this->bigPrimaryKey(),
            'name' => $this->char(200),
            'description' => $this->text(),
            'available' => $this->integer(),
            'price' => $this->integer(),
            'likes' => $this->integer(),
            'reserve' => $this->integer(),
            
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('goods');
    }
}
