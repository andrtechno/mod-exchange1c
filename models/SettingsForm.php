<?php

namespace panix\mod\exchange1c\models;

use panix\engine\SettingsModel;

class SettingsForm extends SettingsModel {

    const MODULE_ID = 'exchange1c';

    public $ip;
    public $password;
    public $deletion_product_flag;
    public $deletion_attribute_flag;

    public function getForm() {
        return new TabForm(array(
            'attributes' => array(
                'id' => __CLASS__,
                'class' => 'form-horizontal',
            ),
            'showErrorSummary' => true,
            'elements' => array(
                'connect' => array(
                    'type' => 'form',
                    'title' => self::t('TAB_CONNECT'),
                    'elements' => array(
                        'ip' => array(
                            'type' => 'text',
                            'hint' => self::t('HINT_IP')
                        ),
                        'password' => array(
                            'type' => 'text',
                            'hint' => self::t('HINT_PASS', array(
                                '{host}' => Yii::app()->request->hostInfo,
                                '{password}' => $this->password
                            ))
                        ),
                    ),
                ),
                'option' => array(
                    'type' => 'form',
                    'title' => self::t('TAB_OPTION'),
                    'elements' => array(
                        'deletion_product_flag' => array(
                            'type' => 'dropdownlist',
                            'items' => array(
                                'switch' => self::t('DELETION_PRODUCT_FLAG_SWITCH'),
                                'delete' => self::t('DELETION_PRODUCT_FLAG_DEL')
                            )
                        ),
                        'deletion_attribute_flag' => array(
                            'type' => 'checkbox',
                            'hint' => 'not work.'
                        ),
                    ),
                ),
            ),
            'buttons' => array(
                'submit' => array(
                    'type' => 'submit',
                    'class' => 'btn btn-success',
                    'label' => Yii::t('app', 'SAVE')
                )
            )
                ), $this);
    }

    public function rules() {
        return [
            [['ip', 'password', 'deletion_product_flag', 'deletion_attribute_flag'], 'required'],
        ];
    }



}
