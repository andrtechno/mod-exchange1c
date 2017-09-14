<?php

namespace panix\mod\exchange1c;

use Yii;
use panix\engine\WebModule;

class Module extends WebModule {

    public $icon = 'icon-1c';
    public $routes = [
        'exchange1c/<password>' => 'exchange1c/default/index',
        'exchange1c/<password>/*' => 'exchange1c/default/index',
    ];

    public function getAdminMenu2() {
        return array(
            'shop' => array(
                'items' => array(
                    array(
                        'label' => $this->name,
                        'url' => $this->adminHomeUrl,
                        'icon' => Html::icon($this->icon),
                    ),
                ),
            ),
        );
    }

    public function getInfo() {
        return [
            'label' => Yii::t('exchange1c/default', 'MODULE_NAME'),
            'author' => 'andrew.panix@gmail.com',
            'version' => '1.0',
            'icon' => 'icon-1c',
            'description' => Yii::t('exchange1c/default', 'MODULE_DESC'),
            'url' => ['/admin/exchange1c'],
        ];
    }

}
