(function($) {
    "use strict";

    var pluginName = 'kbModalAjax';

    function ModalAjax(element, options) {
        this.element = element;
        this.init(options);
    };

    ModalAjax.prototype.constructor = ModalAjax;

    ModalAjax.prototype.init = function(options) {
        $(this.element).on('show.bs.modal', this.show);
    };

    ModalAjax.prototype.show = function(e) {
    };

    $.fn[pluginName] = function(options) {
        return this.each(function () {
            if (!$.data(this, pluginName)) {
                $.data(this, pluginName,
                new ModalAjax(this, options));
            }
        });
    };
})(jQuery);
