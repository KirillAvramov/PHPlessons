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
            'id' => $this->primaryKey(11),
            'name' => $this->string(45)->notNull(),
            'director_id' => $this->integer(11)->notNull(),
            'country' => $this->string(45)->notNull(),
            'date' => $this->date(),
        ]);
        /*
        $this->addForeignKey(
            'film_has_director',
            'films',
            'director_id',
            'directors',
            'id'
        );
        */
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('films');
    }
}
