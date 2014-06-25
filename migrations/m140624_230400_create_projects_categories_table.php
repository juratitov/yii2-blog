<?php

use yii\db\Schema;

class m140624_230400_create_projects_categories_table extends \yii\db\Migration
{

    public function safeUp()
    {
        $this->createTable('projects_categories', [
            'category_id' => Schema::TYPE_INTEGER,
            'project_id' => Schema::TYPE_INTEGER,
        ]);

        $this->addForeignKey('project_category_id', 'projects_categories', 'category_id', 'categories', 'id');
        $this->addForeignKey('category_project_id', 'projects_categories', 'project_id', 'projects', 'id');
    }

    public function safeDown()
    {
        $this->dropForeignKey('project_category_id', 'projects_categories');
        $this->dropForeignKey('category_project_id', 'projects_categories');
        $this->dropTable('projects_categories');
    }

}
