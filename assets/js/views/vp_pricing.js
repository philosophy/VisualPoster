var VP = window.VP || {};
VP.Pricing = VP.Pricing || {};

VP.Pricing.UI = function() {

    /* element ids */
    var btnComputeId = 'btn-compute';
    var posterNumId = 'poster-num';
    var totalPriceId = 'total-price';
    var totalPriceGSTId = 'total-price-gst';

    /* element classes */
    var printClass = 'print';

    /* element data attributes*/
    var posterPriceData = 'poster-price';

    var self,
    posterPrice;

    return {
        init: function() {
            self = this;
            $('#' + btnComputeId).bind('click', self.computePrice);
        },

        computePrice: function() {
            // validate input

            // ajax request for price
            var btnCompute = $('#' + btnComputeId);
            var url = btnCompute.data('ajax-url');
            var poster = $('#' + posterNumId);

            var ajax = new VP.Ajax.Request();
            ajax.send(
                'testaction',
                {
                    poster: poster.data('poster'),
                    num   : poster.val()
                },
                '',
                {},
                '',
                function(data) {
                    // success

                    var total;
                    var totalWithGST;
                    var posterPrice;

                    posterPrice = data.data.price;

                    //todo compute total with delivery points
                    total = posterPrice;
                    $('#'+totalPriceId).text(total);

                    // total price with gst
                    var gst = total * .10;
                    $('#'+totalPriceGSTId).text(parseInt(total) + gst);

                },
                function() {
                    // error
                },
                url
            );
        }
    }

}();

$(document).ready(function() {
    VP.Pricing.UI.init();
});