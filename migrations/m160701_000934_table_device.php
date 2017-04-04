<?php

use yii\db\Migration;

class m160701_000934_table_device extends Migration
{
    public function up()
    {
        $this->createTable('{{%device}}', [
            'id' => $this->primaryKey(),
            'parent_id' => $this->integer(11),
            'title' => $this->string(100)->notNull(),
            'status' => $this->smallInteger()->defaultExpression('0')->notNull(),
        ]);
        $this->createIndex('unique_title', '{{%device}}', 'title', true);
        $this->addForeignKey('devicetable_parent_fk', '{{%device}}', 'parent_id', '{{%device}}', 'id', 'CASCADE', 'CASCADE');

        $this->insert('{{%device}}',[
            'parent_id' => null,
            'title' => 'iPhone',
            'status' => 1,
        ]);
    }

    public function down()
    {
        $this->dropTable('{{%device}}');
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
