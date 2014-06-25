<?php

use yii\db\Schema;

class m140625_003301_create_posts_categories_table extends \yii\db\Migration
{

    public function safeUp()
    {
        $this->createTable('posts_categories', [
            'post_id' => Schema::TYPE_INTEGER,
            'category_id' => Schema::TYPE_INTEGER,
        ]);

        $this->addForeignKey('post_category_id', 'posts_categories', 'category_id', 'categories', 'id');
        $this->addForeignKey('category_post_id', 'posts_categories', 'post_id', 'posts', 'id');
    }

    public function safeDown()
    {
        $this->dropForeignKey('post_category_id', 'posts_categories');
        $this->dropForeignKey('category_post_id', 'posts_categories');
        $this->dropTable('posts_categories');
    }

}
