<?php

use yii\db\Schema;

class m140625_003329_create_tags_table extends \yii\db\Migration
{

    public function up()
    {
        $this->createTable('tags', [
            'id' => Schema::TYPE_PK,
            'name' => Schema::TYPE_STRING . '(20) NOT NULL',
        ]);
    }

    public function down()
    {
        $this->dropTable('tags');
    }

}
