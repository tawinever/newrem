<?php

use yii\db\Migration;

class m160710_180610_table_copyrights extends Migration
{
    public function up()
    {
        $this->createTable('{{%copyright}}', [
            'id' => $this->primaryKey(),
            'page' => $this->string()->notNull(),
            'section' => $this->string()->notNull(),
            'position' => $this->string()->notNull(),
            'content' => $this->text(),
        ]);

        $this->insert('{{%copyright}}',[
            'page' => 'home',
            'section' => 'mainSection',
            'position' => 'utp',
            'content' => 'БЫСТРО ПОЧИНИМ IPHONY',
        ]);
    }

    public function down()
    {
        $this->dropTable('{{%copyright}}');
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
