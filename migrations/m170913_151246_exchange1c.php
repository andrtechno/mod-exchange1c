<?php

use yii\db\Migration;

/**
 * Class m170913_151246_exchange1c
 */
class m170913_151246_exchange1c extends Migration {

    public function up() {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }
        $this->createTable('{{%exchange1c}}', [
            'id' => $this->primaryKey(),
            'object_id' => $this->primaryKey(),
            'object_type' => $this->integer(),
            'external_id' => $this->string(255),
                ], $tableOptions);

        $this->createIndex('external_id', '{{%exchange1c}}', 'external_id', 0);
        $this->createIndex('object_type', '{{%exchange1c}}', 'object_type', 0);
    }

    public function down() {
        $this->dropTable('{{%exchange1c}}');
    }

}
