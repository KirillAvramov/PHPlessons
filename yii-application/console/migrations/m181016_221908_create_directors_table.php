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
            'id' => $this->primaryKey(),
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
