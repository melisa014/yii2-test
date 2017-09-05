<?php

use yii\db\Migration;

/**
 * Handles the creation of table `gii_goods`.
 */
class m170905_105325_create_gii_goods_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('gii_goods', [
            'id' => $this->primaryKey(),
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
        $this->dropTable('gii_goods');
    }
}
