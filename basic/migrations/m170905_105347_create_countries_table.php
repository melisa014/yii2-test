<?php

use yii\db\Migration;

/**
 * Handles the creation of table `countryes`.
 */
class m170905_105347_create_countries_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('countries', [
            'code' => $this->primaryKey(),
            'name' => $this->char(),
            'population' => $this->integer(),
            
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('countries');
    }
}
