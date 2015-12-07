<?php

/**
 * @copyright Copyright &copy; Karnbrock GmbH, 2015
 * @package yii2-modal-ajax
 */

namespace karnbrockgmbh\modal;

use karnbrockgmbh\modal\ModalAsset;

class Modal extends \yii\bootstrap\Modal {

    /**
     * The url to request when modal is opened
     * @var string
     */
    public $url;

    /**
     * Submit the form via ajax
     * @var boolean
     */
    public $ajaxSubmit = true;

    /**
     * @inheritdocs
     */
    public function run()
    {
        $view = $this->getView();
        parent::run();

        ModalAsset::register($view);

        $id = $this->options['id'];
        $ajaxSubmit = $this->ajaxSubmit ? 'true' : 'false';
        $js = <<<JS
        jQuery('#$id').kbModalAjax({
            url: '{$this->url}',
            ajaxSubmit: {$ajaxSubmit},
        });
JS;
        $view->registerJs($js);
    }
}
