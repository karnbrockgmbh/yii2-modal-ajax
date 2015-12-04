<?php

/**
 * @copyright Copyright &copy; Karnbrock GmbH, 2015
 * @package yii2-modal-ajax
 */

namespace karnbrockgmbh\modal;

use Yii;

class ModalAsset extends \yii\bootstrap\Modal {
    /**
     * @inheritdoc
     */
    public $sourcePath = '@vendor/karnbrockgmbh/yii2-modal-ajax/assets/';

    /**
     * @inheritdoc
     */
    public $depends = [
        'yii\bootstrap\BootstrapAsset',
    ];

    /**
     * @inheritdoc
     */
    public $js = [
        'js/kb-modal-ajax.js',
    ];
}
