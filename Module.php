<?php
/**/
namespace panix\mod\exchange1c;

use Yii;
use panix\engine\WebModule;

class Module extends WebModule {

    public $icon = '1c';
    public $routes = [
        'exchange1c/<password>' => 'exchange1c/default/index',
        'exchange1c/<password>/*' => 'exchange1c/default/index',
    ];
    public function getAdminMenu() {
        return [
            'shop' => [
                'items' => [
                    [
                        'label' => Yii::t('exchange1c/default', 'MODULE_NAME'),
                        'url' => ['/admin/exchange1c'],
                          'icon' => $this->icon,
                    ],
                ],
            ],
        ];
    }
    public function getAdminSidebar() {
        $mod = new \panix\engine\widgets\nav\Nav;
        $items = $mod->findMenu('shop');
        return $items['items'];
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
