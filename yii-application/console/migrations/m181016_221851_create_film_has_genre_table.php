<?php

use yii\db\Migration;

/**
 * Handles the creation of table `film_has_genre`.
 */
class m181016_221851_create_film_has_genre_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('film_has_genre', [
            'id' => $this->primaryKey(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('film_has_genre');
    }
}
