<?php

use yii\db\Schema;

class m140625_003603_create_links_tags_table extends \yii\db\Migration
{

    public function safeUp()
    {
        $this->createTable('links_tags', [
            'link_id' => Schema::TYPE_INTEGER,
            'tag_id' => Schema::TYPE_INTEGER,
        ]);

        $this->addForeignKey('link_tag_id', 'links_tags', 'tag_id', 'tags', 'id');
        $this->addForeignKey('tag_link_id', 'links_tags', 'link_id', 'links', 'id');
    }

    public function safeDown()
    {
        $this->dropForeignKey('link_tag_id', 'links_tags');
        $this->dropForeignKey('tag_link_id', 'links_tags');
        $this->dropTable('links_tags');
    }

}
