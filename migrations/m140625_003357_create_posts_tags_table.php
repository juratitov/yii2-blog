<?php

use yii\db\Schema;

class m140625_003357_create_posts_tags_table extends \yii\db\Migration
{

    public function safeUp()
    {
        $this->createTable('posts_tags', [
            'post_id' => Schema::TYPE_INTEGER,
            'tag_id' => Schema::TYPE_INTEGER,
        ]);

        $this->addForeignKey('post_tag_id', 'posts_tags', 'tag_id', 'tags', 'id');
        $this->addForeignKey('tag_post_id', 'posts_tags', 'post_id', 'posts', 'id');
    }

    public function safeDown()
    {
        $this->dropForeignKey('post_tag_id', 'posts_tags');
        $this->dropForeignKey('tag_post_id', 'posts_tags');
        $this->dropTable('posts_tags');
    }

}
