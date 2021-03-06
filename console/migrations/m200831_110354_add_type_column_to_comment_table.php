<?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%comment}}`.
 */
class m200831_110354_add_type_column_to_comment_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%comment}}', 'type', $this->string()->notNull());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('{{%comment}}', 'type');
    }
}
