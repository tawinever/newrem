<?php

use yii\db\Migration;

class m160701_001816_table_price extends Migration
{
    public function up()
    {
        $this->createTable('{{%price}}', [
            'id' => $this->primaryKey(),
            'device_id' => $this->integer()->notNull(),
            'repair_id' => $this->integer()->notNull(),
            'price' => $this->integer()->notNull(),
            'info' => $this->string(255)->notNull(),
            'status' => $this->smallInteger()->defaultExpression('0')->notNull(),
        ]);
        $this->addForeignKey('device_id_fk', '{{%price}}', 'device_id', '{{%device}}', 'id', 'CASCADE', 'CASCADE');
        $this->addForeignKey('repair_id_fk', '{{%price}}', 'repair_id', '{{%repair}}', 'id', 'CASCADE', 'CASCADE');

        $this->insert('{{%price}}',[
            'device_id' => 1,
            'repair_id' => 1,
            'price' => 2500,
            'info' => "There is a gift if 2 or more repairs",
            'status' => 1,
        ]);
    }

    public function down()
    {
        $this->dropTable('{{%price}}');
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
