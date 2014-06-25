<?php

use yii\db\Schema;

class m140625_012541_create_projects_tags_table extends \yii\db\Migration
{

    public function safeUp()
    {
        $this->createTable('projects_tags', [
            'project_id' => Schema::TYPE_INTEGER,
            'tag_id' => Schema::TYPE_INTEGER,
        ]);

        $this->addForeignKey('project_tag_id', 'projects_tags', 'tag_id', 'tags', 'id');
        $this->addForeignKey('tag_project_id', 'projects_tags', 'project_id', 'projects', 'id');
    }

    public function safeDown()
    {
        $this->dropForeignKey('project_tag_id', 'projects_tags');
        $this->dropForeignKey('tag_project_id', 'projects_tags');
        $this->dropTable('projects_tags');
    }

}
