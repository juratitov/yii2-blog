<?php

use yii\db\Schema;

class m140624_224613_create_projects_table extends \yii\db\Migration
{

    public function up()
    {
        $this->createTable('projects', [
            'id' => Schema::TYPE_PK,
            'title' => Schema::TYPE_STRING . '(150) NOT NULL',
            'description' => Schema::TYPE_TEXT . ' NOT NULL',
            'url' => Schema::TYPE_STRING . '(250) NOT NULL',
            'screen' => Schema::TYPE_STRING . '(250) NOT NULL',
            'count_view' => 'MEDIUMINT UNSIGNED',
        ]);
    }

    public function down()
    {
        $this->dropTable('projects');
    }

}
