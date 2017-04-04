<?php

use yii\db\Migration;

class m170329_154550_table_griditem extends Migration
{
    public function up()
    {
        $this->createTable('{{%griditem}}', [
            'id' => $this->primaryKey()->unique(),
            'parent_page_id' => $this->integer(11)->notNull(),
            'page_id' => $this->integer(11)->notNull(),
            'title' => $this->text()->notNull(),
            'subtitle' => $this->text()->notNull(),
            'info' =>  $this->text()->notNull(),
            'order'=> $this->integer()->notNull(),
            'type' => $this->integer()->notNull(),
            'color' => $this->integer()->notNull(),
            'image' => $this->text()->notNull()
        ]);

        $this->addForeignKey('tablegriditem_parent_page_id_fk', '{{%griditem}}', 'parent_page_id', '{{%page}}', 'id', 'CASCADE', 'CASCADE');
        $this->addForeignKey('tablegriditem_page_id_fk', '{{%griditem}}', 'page_id', '{{%page}}', 'id', 'CASCADE', 'CASCADE');

    }

    public function down()
    {
        $this->dropTable('{{%griditem}}');

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
