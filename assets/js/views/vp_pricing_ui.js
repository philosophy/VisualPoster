var VP = window.VP || {};
VP.Pricing = VP.Pricing || {}

VP.Pricing.UI = function() {

    /* element ids */
    var posterNumId = 'poster-num',
        totalPriceId = 'total-price';

    /* element classes */
    var printClass = 'print';

    /* element data attributes*/
    var posterPriceData = 'poster-price';

    var self,
        posterPrice,
        totalPrice;

    return {
        init: function() {
            self = this;
            $('.static-tooltip').each(function() {
                $(this).qtip({
                    content: {
                        text: $(this).parent().siblings('.hide')
                    }
                });
            });
            var posterNum = $('#'+posterNumId);
            posterPrice = posterNum.data(posterPriceData);
            totalPrice = $('#' + totalPriceId);
            totalPrice.text('$'+posterNum.val() * posterPrice);

            posterNum.bind('change keyup', self.computePrice);

            $('.' + printClass).live('click', self.redirect);
        },

        computePrice: function() {
            var posterNum = $('#' + posterNumId);

            var total = posterNum.val() * posterPrice;
            totalPrice.text(total ? ('$' +total) : 'invalid num');
        },

        redirect: function(e) {
            console.log('was called');
            var container;
            var target = $(e.target);

            if (e.target.nodeName !== 'A') {
                if (target.hasClass('print')) {
                    container = target;
                } else {
                    container = target.closest('div.print');
                }

                window.location = container.data('url');
            }
        }
    }

}();

$(document).ready(function() {VP.Pricing.UI.init();});