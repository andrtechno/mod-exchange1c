<?php

use panix\engine\Html;
use yii\widgets\ActiveForm;
?>
<?php
$form = ActiveForm::begin([
            //  'id' => 'form',
            'options' => ['class' => 'form-horizontal'],
            'fieldConfig' => [
                'template' => "{label}\n<div class=\"col-sm-7\">{input}</div>\n<div class=\"col-sm-7 col-sm-offset-5\">{error}</div>",
                'labelOptions' => ['class' => 'col-sm-5 control-label'],
            ],
        ]);
?>
<div class="card bg-light">
    <div class="card-header">
        <h5><?= $this->context->pageName ?></h5>
    </div>
    <div class="card-body">
        <?= $form->field($model, 'ip') ?>
        <?= $form->field($model, 'password') ?>
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