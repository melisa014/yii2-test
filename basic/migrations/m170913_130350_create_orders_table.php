<?php

use yii\db\Migration;

/**
 * Handles the creation of table `orders`.
 */
class m170913_130350_create_orders_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('orders', [
            'id' => $this->primaryKey(),
            'userId' => $this->integer()->notNull(),
        ]);
    
        $this->addForeignKey(
                'userId',
                'orders',
                'userId',
                'user',
                'id',
                'CASCADE',
                'CASCADE'
        );
    }
        
    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('orders');
        
        $this->dropForeignKey(
            'userId',
            'user'
        );
    }
}
