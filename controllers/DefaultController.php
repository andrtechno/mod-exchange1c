<?php

namespace panix\mod\exchange1c\controllers;

use panix\engine\controllers\WebController;
use panix\mod\exchange1c\components\C1ProductsImport;

class DefaultController extends WebController {

    public function actionIndex() {
        $request = Yii::$app->request;
        $config = Yii::$app->settings->get('exchange1c');


        if ($request->getQueryParam('password') != $config['password'])
            exit('ERR_WRONG_PASS');

        if ($request->getUserIP() != $config['ip']) {
            exit('ERR_WRONG_IP');
        }

        if ($request->getQueryParam('type') && $request->getQueryParam('mode'))
            C1ProductsImport::processRequest($request->getQueryParam('type'), $request->getQueryParam('mode'));
    }

}
