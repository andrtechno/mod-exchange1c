<?php

namespace panix\mod\exchange1c\controllers\admin;

use panix\engine\controllers\AdminController;

class DefaultController extends AdminController {


    public function actionIndex() {
        $this->pageName = Yii::t('exchange1c/default', 'MODULE_NAME');
        $this->breadcrumbs[] = [
            'label' => Yii::t('shop/default', 'MODULE_NAME'),
            'url' => ['/admin/shop']
        ];
        $this->breadcrumbs[] = $this->pageName;

        $model = new SettingsForm;

        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            $model->save();
        }

        return $this->render('index', ['model' => $model]);
    }

}
