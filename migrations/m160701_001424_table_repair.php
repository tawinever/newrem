<?php

use yii\db\Migration;

class m160701_001424_table_repair extends Migration
{
    public function up()
    {
        $this->createTable('{{%repair}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string(100)->notNull(),
            'status' => $this->smallInteger()->defaultExpression('0')->notNull(),
        ]);
        $this->createIndex('unique_title', '{{%repair}}', 'title', true);

        $this->insert('{{%repair}}',[
            'title' => 'Экран',
            'status' => 1,
        ]);
    }

    public function down()
    {
        $this->dropTable('{{%repair}}');
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
