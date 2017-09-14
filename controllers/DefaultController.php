<?php

namespace panix\mod\exchange1c\controllers;

use Yii;
use panix\engine\controllers\WebController;
use panix\mod\exchange1c\components\C1ProductsImport;

class DefaultController extends WebController {

    public function behaviors() {
        return [
            'basicAuth' => [
                'class' => \yii\filters\auth\HttpBasicAuth::className(),
                'auth' => function ($username, $password) {
                    $user = \panix\mod\user\models\User::find()->where(['username' => $username])->one();
                    if ($user->verifyPassword($password)) {
                        print_r($user);
                        return die('basicAuth success');
                        return $user;
                    }
                    return null;
                },
                    ],
                ];
            }

            public function actionIndex() {
                $request = Yii::$app->request;
                $config = Yii::$app->settings->get('exchange1c');


                if ($request->getQueryParam('password') != $config['password'])
                    exit(Yii::t('exchange1c/default', 'ERR_WRONG_PASS'));

                if ($request->getUserIP() != $config['ip']) {
                    exit(Yii::t('exchange1c/default', 'ERR_WRONG_IP'));
                }

                if ($request->getQueryParam('type') && $request->getQueryParam('mode'))
                    C1ProductsImport::processRequest($request->getQueryParam('type'), $request->getQueryParam('mode'));
            }

        }
        