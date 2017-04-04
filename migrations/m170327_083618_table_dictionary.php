<?php

use yii\db\Migration;

class m170327_083618_table_dictionary extends Migration
{
    public function up()
    {
        $this->createTable('{{%dictionary}}', [
            'id' => $this->primaryKey()->unique(),
            'widget_name' => $this->string(100)->notNull(),
            'field' => $this->string(100)->notNull(),
            'description' => $this->text()->notNull(),
        ]);

    }

    public function down()
    {
        $this->dropTable('{{%dictionary}}');
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
