<?php

namespace panix\mod\exchange1c\models;

use panix\engine\SettingsModel;
use panix\engine\CMS;

/**
 * Class SettingsForm
 * @package panix\mod\exchange1c\models
 */
class SettingsForm extends SettingsModel
{

    public static $category = 'exchange1c';
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

    public static function defaultSettings()
    {
        return [
            'ip' => '127.0.0.1',
            'deletion_product_flag' => false,
            'deletion_attribute_flag' => false,
            'security_key' => CMS::gen(50)
        ];
    }

}
