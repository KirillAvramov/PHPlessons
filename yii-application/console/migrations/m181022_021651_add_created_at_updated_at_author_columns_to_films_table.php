<?php

use yii\db\Migration;

/**
 * Handles adding created_at, updated_at, author to table `films`.
 */
class m181022_021651_add_created_at_updated_at_author_columns_to_films_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('films', 'created_at', $this->integer());
        $this->addColumn('films', 'updated_at', $this->integer());
        $this->addColumn('films', 'author', $this->string());

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('films', 'created_at');
        $this->dropColumn('films', 'updated_at');
        $this->dropColumn('films', 'author');
    }
}
