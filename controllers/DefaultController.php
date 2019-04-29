<?php

namespace panix\mod\exchange1c\controllers;

use Yii;
use yii\web\Response;
use panix\engine\controllers\WebController;
use panix\mod\exchange1c\components\C1ProductsImport;
use panix\mod\user\models\User;

/**
 * Class DefaultController
 * @package panix\mod\exchange1c\controllers
 */
class DefaultController extends WebController
{

    public function behaviors()
    {
        return [
            'basicAuth' => [
                'class' => \yii\filters\auth\HttpBasicAuth::class,
                'only' => ['exchange'],
                //'optional'=>['exchange'],
                'auth' => function ($username, $password) {
                    $user = User::find()->where(['username' => $username])->one();
                    /** @var $user User */
                    if ($user->verifyPassword($password)) {
                        print_r($user);
                        return 'basicAuth success';
                        return $user;
                    }
                    return null;
                },
            ],
        ];
    }

    public function actionExchange($key)
    {
        $request = Yii::$app->request;
        $config = Yii::$app->settings->get('exchange1c');

        Yii::$app->response->format = Response::FORMAT_RAW;

        if ($key != $config->security_key)
            return Yii::t('exchange1c/default', 'ERR_WRONG_PASS');

        if ($request->getUserIP() != $config->ip) {
            return Yii::t('exchange1c/default', 'ERR_WRONG_IP');
        }

        if ($request->getQueryParam('type') && $request->getQueryParam('mode'))
            C1ProductsImport::processRequest($request->getQueryParam('type'), $request->getQueryParam('mode'));
    }

}
