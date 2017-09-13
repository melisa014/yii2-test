<?php

use yii\db\Migration;

/**
 * Handles the creation of table `corrections`.
 */
class m170913_130404_create_corrections_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('corrections', [
            'id' => $this->primaryKey(),
            'number' => $this->integer(9)->notNull(),
            'orderId' => $this->integer()->notNull(),
            'goodId' => $this->bigInteger(20)->notNull(),
        ]);
        
        $this->addForeignKey(
                'orderId',
                'corrections',
                'orderId',
                'orders',
                'id',
                'CASCADE',
                'CASCADE'
        );
        
        $this->addForeignKey(
                'correct-goodId',
                'corrections',
                'goodId',
                'goods',
                'id',
                'CASCADE',
                'CASCADE'
        );
        
        $this->createIndex(
            'myOrder',
            'corrections',
            ['orderId', 'goodId'],
            true
        );
    }
    
    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('corrections');
        
        $this->dropForeignKey(
            'userId',
            'user'
        );
        
        $this->dropForeignKey(
            'userId',
            'user'
        );
        
        $this->dropIndex(
            'myOrder',
            'corrections'
        );
    }
}
