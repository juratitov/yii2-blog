<?php

use yii\db\Schema;

class m140624_230345_create_categories_table extends \yii\db\Migration
{

    public function up()
    {
        $this->createTable('categories', [
            'id' => Schema::TYPE_PK,
            'name' => Schema::TYPE_STRING . '(50) NOT NULL',
        ]);
    }

    public function down()
    {
        $this->dropTable('categories');
    }

}
