<?php

use yii\db\Migration;

/**
 * Handles the creation of table `users`.
 */
class m170906_155115_create_users_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('users', [
            'id' => $this->primaryKey(),
            'login' => $this->char()->notNull()->unique(),
            'pass' => $this->char()->notNull(),
            'email' => $this->char(),
            'role' => $this->char()->notNull(),
            'salt' => $this->integer()->notNull(),
            'timestamp' => $this->date(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('users');
    }
}
