<?php

namespace panix\mod\exchange1c\migrations;

use panix\engine\db\Migration;

/**
 * Class m170913_151246_exchange1c
 */
class m170913_151246_exchange1c extends Migration
{

    public function up()
    {
        $this->createTable('{{%exchange1c}}', [
            'id' => $this->primaryKey()->unsigned(),
            'object_id' => $this->integer()->unsigned(),
            'object_type' => $this->tinyInteger(2)->unsigned(),
            'external_id' => $this->string(255),
        ], $this->tableOptions);

        $this->createIndex('external_id', '{{%exchange1c}}', 'external_id', 0);
        $this->createIndex('object_type', '{{%exchange1c}}', 'object_type', 0);
    }

    public function down()
    {
        $this->dropTable('{{%exchange1c}}');
    }

}
