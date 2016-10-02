<?php

use yii\db\Migration;

class m160701_000103_table_category extends Migration
{
    public function up()
    {
        $this->createTable('{{%category}}', [
            'id' => $this->primaryKey(),
            'parent_id' => $this->integer(20),
            'title' => $this->string(100)->notNull(),
            'status' => $this->smallInteger()->defaultExpression('0')->notNull(),
        ]);
        $this->createIndex('unique_title', '{{%category}}', 'title', true);
        $this->addForeignKey('parent_id_fk', '{{%category}}', 'parent_id', '{{%category}}', 'id', 'SET NULL', 'CASCADE');

        $this->insert('{{%category}}',[
            'parent_id' => null,
            'title' => 'Iphone',
            'status' => 1,
        ]);
    }

    public function down()
    {
        $this->dropTable('{{%category}}');
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
