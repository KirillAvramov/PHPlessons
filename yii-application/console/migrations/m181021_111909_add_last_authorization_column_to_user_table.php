<?php

use yii\db\Migration;

/**
 * Handles adding last_authorization to table `user`.
 */
class m181021_111909_add_last_authorization_column_to_user_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('user', 'last_authorization', $this->integer());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('user', 'last_authorization');
    }
}
