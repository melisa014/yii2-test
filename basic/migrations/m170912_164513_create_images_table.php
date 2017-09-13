<?php

use yii\db\Migration;

/**
 * Handles the creation of table `images`.
 */
class m170912_164513_create_images_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('images', [
            'id' => $this->primaryKey()->notNull(),
            'path' => $this->char(250)->notNull(),
            'description' => $this->char(255)->defaultValue(null),
            'goodId' => $this->bigInteger(20)->notNull(),
        ]);
        
        $this->addForeignKey(
            'goodId',
            'images',
            'goodId',
            'goods',
            'id',
            'CASCADE'
        );
    }
    
    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('images');
        
        $this->dropForeignKey(
            'goodId',
            'goods'
        );
    }
}
