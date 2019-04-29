<?php

namespace codexten\yii\modules\locale\migrations;

use yii\db\Migration;

/**
 * Handles the creation of table `{{%locale}}`.
 */
class M190429085112Create_locale_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%locale}}', [
            'id' => $this->primaryKey(),
            'code' => $this->string(50),
            'created_at' => $this->integer(11),
            'updated_at' => $this->integer(11)
,
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%locale}}');
    }
}
