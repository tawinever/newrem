<?php

use yii\db\Migration;

class m160701_000934_table_device extends Migration
{
    public function up()
    {
        $this->createTable('{{%device}}', [
            'id' => $this->primaryKey(),
            'category_id' => $this->integer()->notNull(),
            'title' => $this->string(100)->notNull(),
            'status' => $this->smallInteger()->defaultExpression('0')->notNull(),
        ]);
        $this->createIndex('unique_title', '{{%device}}', 'title', true);
        $this->addForeignKey('category_id_fk', '{{%device}}', 'category_id', '{{%category}}', 'id', 'CASCADE', 'CASCADE');

        $this->insert('{{%device}}',[
            'category_id' => 1,
            'title' => 'Iphone 6 plus',
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
