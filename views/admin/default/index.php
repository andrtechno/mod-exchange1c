<?php

use panix\engine\Html;
use panix\engine\bootstrap\ActiveForm;

/**
 * @var $model \panix\mod\exchange1c\models\SettingsForm
 */

$this->registerJs('
$(document).on("keyup","#settingsform-security_key",function(){
    $("#security_key").html($(this).val());
});
');
?>


<?php $form = ActiveForm::begin(); ?>
    <div class="card">
        <div class="card-header">
            <h5><?= $this->context->pageName ?></h5>
        </div>
        <div class="card-body">
            <?= $form->field($model, 'security_key')->hint($model::t('HINT_URL', [
                'host' => Yii::$app->request->hostInfo,
                'key' => $model->security_key
            ])) ?>
            <?= $form->field($model, 'ip') ?>
            <?=
            $form->field($model, 'deletion_product_flag')->dropDownList([
                'switch' => $model::t('DELETION_PRODUCT_FLAG_SWITCH'),
                'delete' => $model::t('DELETION_PRODUCT_FLAG_DEL')
            ])->label();
            ?>
            <?= $form->field($model, 'deletion_attribute_flag')->checkBox(['label' => null])->label(); ?>

        </div>
        <div class="card-footer text-center">

            <?= Html::submitButton(Html::icon('check') . ' ' . Yii::t('app', 'SAVE'), ['class' => 'btn btn-success']) ?>

        </div>
    </div>
<?php ActiveForm::end(); ?>