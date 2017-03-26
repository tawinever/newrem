<?php

use yii\db\Migration;

class m170326_135909_table_wps extends Migration
{
    public function up()
    {
        $this->createTable('{{%wps}}', [
            'id' => $this->primaryKey()->unique(),
            'page_id' => $this->integer(11)->notNull(),
            'widget_namespace' => $this->string(100)->notNull(),
            'status' => $this->smallInteger()->defaultValue('0')->notNull(),
            'position' => $this->string(100)->notNull(),
        ]);
        $this->createIndex('wps_page_id', '{{%wps}}', 'page_id', false);
        $this->addForeignKey('wpstable_page_id_fk', '{{%wps}}', 'page_id', '{{%page}}', 'id', 'CASCADE', 'CASCADE');


    }

    public function down()
    {
        $this->dropTable('{{%wps}}');
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
