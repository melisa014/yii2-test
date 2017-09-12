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
            'id' => $this->primaryKey(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('images');
    }
}
