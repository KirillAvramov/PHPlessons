<?php

use yii\db\Migration;

/**
 * Handles the creation of table `directors`.
 */
class m181016_221908_create_directors_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('directors', [
            'id' => $this->primaryKey(11),
            'first_name' => $this->string(45)->notNull(),
            'last_name' => $this->string(45)->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('directors');
    }
}
