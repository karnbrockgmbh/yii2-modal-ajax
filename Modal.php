<?php

/**
 * @copyright Copyright &copy; Karnbrock GmbH, 2015
 * @package yii2-modal-ajax
 */

namespace karnbrockgmbh\modal;

use karnbrockgmbh\modal\ModalAsset;

class Modal extends \yii\bootstrap\Modal {
    /**
     * @inheritdocs
     */
    public function run()
    {
        $view = $this->getView();
        parent::run();

        ModalAsset::register($view);

        $id = $this->options['id'];
        $js = "jQuery('#$id').kbModalAjax();";
        $view->registerJs($js);
    }
}
