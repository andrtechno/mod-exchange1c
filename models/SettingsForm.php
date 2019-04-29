<?php

namespace panix\mod\exchange1c\models;

use panix\engine\SettingsModel;

/**
 * Class SettingsForm
 * @package panix\mod\exchange1c\models
 */
class SettingsForm extends SettingsModel
{

    protected $module = 'exchange1c';

    public $ip;
    public $security_key;
    public $deletion_product_flag;
    public $deletion_attribute_flag;

    public function rules()
    {
        return [
            [['ip', 'deletion_product_flag', 'deletion_attribute_flag', 'security_key'], 'required'],
        ];
    }

}
