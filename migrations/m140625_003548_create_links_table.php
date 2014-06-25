<?php

use yii\db\Schema;

class m140625_003548_create_links_table extends \yii\db\Migration
{

    public function up()
    {
        $this->createTable('links', [
            'id' => Schema::TYPE_PK,
            'title' => Schema::TYPE_STRING . '(50) NOT NULL',
            'description' => Schema::TYPE_TEXT . ' NOT NULL',
            'link' => Schema::TYPE_STRING . ' NOT NULL',
            'count_clicked' => Schema::TYPE_INTEGER . ' UNSIGNED',
            'created_at' => Schema::TYPE_TIMESTAMP,
            'updated_at' => Schema::TYPE_TIMESTAMP,
        ]);
    }

    public function down()
    {
        $this->dropTable('links');
    }

}
