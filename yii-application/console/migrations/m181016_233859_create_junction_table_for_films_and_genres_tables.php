<?php

use yii\db\Migration;

/**
 * Handles the creation of table `films_genres`.
 * Has foreign keys to the tables:
 *
 * - `films`
 * - `genres`
 */
class m181016_233859_create_junction_table_for_films_and_genres_tables extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('film_has_genre', [
            'film_id' => $this->integer(11),
            'genre_id' => $this->integer(11),
            'PRIMARY KEY(film_id, genre_id)',
        ]);

        // add foreign key for table `films`
        $this->addForeignKey(
            'fk_film_has_genre_films_1',
            'film_has_genre',
            'film_id',
            'films',
            'id',
            'CASCADE'
        );


        // add foreign key for table `genres`
        $this->addForeignKey(
            'fk_film_has_genre_genres_1',
            'film_has_genre',
            'genre_id',
            'genres',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `films`
        $this->dropForeignKey(
            'fk-films_genres-films_id',
            'films_genres'
        );

        // drops foreign key for table `genres`
        $this->dropForeignKey(
            'fk-films_genres-genres_id',
            'films_genres'
        );

        $this->dropTable('films_genres');
    }
}
