var VP = window.VP || {};
VP.Pricing = VP.Pricing || {}

VP.Pricing.UI = function() {

    /* element ids */
    var posterNumId = 'poster-num',
        totalPriceId = 'total-price';

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
        },

        computePrice: function() {
            var posterNum = $('#' + posterNumId);

            var total = posterNum.val() * posterPrice;
            totalPrice.text(total ? ('$' +total) : 'invalid num');
        }
    }

}();

$(document).ready(function() {VP.Pricing.UI.init();});