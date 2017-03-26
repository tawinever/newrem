<?php

use yii\db\Migration;

class m160709_195515_table_notification extends Migration
{
    public function up()
    {
        $this->createTable('{{%notification}}', [
            'id' => $this->primaryKey(),
            'sender_name' => $this->string()->notNull(),
            'sender_number' => $this->string()->notNull(),
            'info' => $this->text(),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer(),
            'status' => $this->smallInteger()->defaultExpression('0')->notNull(),
        ]);

        $this->insert('{{%notification}}',[
            'sender_name' => 1,
            'sender_number' => 1,
            'created_at' => 1468094599,
            'updated_at' => 1468094599,
            'status' => 1,
        ]);
    }

    public function down()
    {
        $this->dropTable('{{%notification}}');
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
