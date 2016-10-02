<?php

use yii\db\Migration;

class m160630_205643_table_user extends Migration
{
    public function safeUp()
    {
        $this->createTable('{{%user}}', [
            'id' => $this->primaryKey(),
            'username' => $this->string(20)->notNull(),
            'email' => $this->string(30)->notNull(),
            'password' => $this->string()->notNull(),
            'auth_key' => $this->string()->notNull(),
            'role' => $this->smallInteger()->defaultExpression('1')->notNull(),
        ]);
        $this->createIndex('unique_username', '{{%user}}', 'username', true);
        $this->createIndex('unique_email', '{{%user}}', 'email', true);

        $this->insert('{{%user}}',[
            'username' => 'admin',
            'email' => 'rauanktl@ya.ru',
            'password' => 'admin',
            'role' => '2',
        ]);

    }

    public function safeDown()
    {
        $this->dropTable('{{%user}}');
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
