<?php

namespace panix\mod\exchange1c\models;

use panix\engine\SettingsModel;

class SettingsForm extends SettingsModel {

    protected $module = 'exchange1c';
    public $ip;
    public $password;
    public $deletion_product_flag;
    public $deletion_attribute_flag;

    public function rules() {
        return [
            [['ip', 'password', 'deletion_product_flag', 'deletion_attribute_flag'], 'required'],
        ];
    }

}
