<?php

use yii\db\Migration;

class m170327_055610_table_swd extends Migration
{
    public function up()
    {
        $this->createTable('{{%swd}}', [
            'id' => $this->primaryKey()->unique(),
            'page_id' => $this->integer(11)->notNull(),
            'widget_namespace' => $this->string(100)->notNull(),
            'key' => $this->string(100)->notNull(),
            'value' => $this->text()->notNull(),
        ]);
        $this->createIndex('swd_page_id', '{{%swd}}', 'page_id', false);
        $this->addForeignKey('swdtable_page_id_fk', '{{%swd}}', 'page_id', '{{%page}}', 'id', 'CASCADE', 'CASCADE');

    }

    public function down()
    {
        $this->dropTable('{{%swd}}');
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
