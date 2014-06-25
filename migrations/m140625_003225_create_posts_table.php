<?php

use yii\db\Schema;

class m140625_003225_create_posts_table extends \yii\db\Migration
{

    public function up()
    {
        $this->createTable('posts', [
            'id' => Schema::TYPE_PK,
            'title' => Schema::TYPE_STRING . ' NOT NULL',
            'content_prev' => Schema::TYPE_TEXT . ' NOT NULL',
            'content_full' => 'LONGTEXT NOT NULL',
            'status' => 'TINYINT(1) UNSIGNED',
            'count_view' => 'INT UNSIGNED',
            'created_at' => Schema::TYPE_TIMESTAMP,
            'updated_at' => Schema::TYPE_TIMESTAMP,
        ]);
    }

    public function down()
    {
        $this->dropTable('posts');
    }

}
