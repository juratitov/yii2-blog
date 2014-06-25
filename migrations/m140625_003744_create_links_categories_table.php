<?php

use yii\db\Schema;

class m140625_003744_create_links_categories_table extends \yii\db\Migration
{

    public function safeUp()
    {
        $this->createTable('links_categories', [
            'link_id' => Schema::TYPE_INTEGER,
            'category_id' => Schema::TYPE_INTEGER,
        ]);

        $this->addForeignKey('link_category_id', 'links_categories', 'category_id', 'categories', 'id');
        $this->addForeignKey('category_link_id', 'links_categories', 'link_id', 'links', 'id');
    }

    public function safeDown()
    {
        $this->dropForeignKey('link_category_id', 'links_categories');
        $this->dropForeignKey('category_link_id', 'links_categories');
        $this->dropTable('links_categories');
    }

}
