<?php

use yii\db\Migration;

class m170325_083557_table_page extends Migration
{
    public function safeUp()
    {
        $this->createTable('{{%page}}', [
            'id' => $this->primaryKey()->unique(),
            'parent_id' => $this->integer(11),
            'title' => $this->string(100)->notNull(),
            'status' => $this->smallInteger()->defaultValue('0')->notNull(),
            'url' => $this->string(100)->notNull(),
            'layout' => $this->string(100)->defaultValue('new')->notNull(),
        ]);
        $this->createIndex('unique_title', '{{%page}}', 'title', true);
        $this->createIndex('unique_url', '{{%page}}', 'url', true);
        $this->createIndex('index_parent_id', '{{%page}}', 'parent_id', false);
        $this->addForeignKey('pagetable_parent_fk', '{{%page}}', 'parent_id', '{{%page}}', 'id', 'CASCADE', 'CASCADE');

        $this->insert('{{%page}}',[
            'parent_id' => null,
            'title' => 'home',
            'status' => 1,
            'url' => '',
        ]);
    }

    public function down()
    {
        $this->dropTable('{{%page}}');
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
