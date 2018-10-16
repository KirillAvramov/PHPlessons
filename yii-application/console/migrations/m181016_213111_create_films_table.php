<?php

use yii\db\Migration;

/**
 * Handles the creation of table `films`.
 */
class m181016_213111_create_films_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('films', [
            'id' => $this->primaryKey(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('films');
    }
}
