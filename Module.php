<?php

namespace panix\mod\exchange1c;

use panix\engine\WebModule;

class Module extends WebModule {

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

}
