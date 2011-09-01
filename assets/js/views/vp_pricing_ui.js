var VP = window.VP || {};
VP.Pricing = VP.Pricing || {}

VP.Pricing.UI = function() {

    /* element ids */
    var posterNumId = 'poster-num',
    totalPriceId = 'total-price',
    deliveryPointsId = 'delivery-points',
    totalPriceGstId = 'total-price-gst';

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
            $('#'+deliveryPointsId).bind('change keyup', self.computePrice);

            $('.' + printClass).live('click', self.redirect);
        },

        computePrice: function() {
            var posterNum = $('#' + posterNumId);
            var deliveryCharge,
                min_delivery_charge,
                min_delivery,
                setup_fee,
                deliveryPoints,
                min_order,
                min_order_price;

            var total,
            totalDeliveryCharge,
            numOfPieces;

            deliveryCharge = posterNum.data('delivery-charge');
            min_delivery_charge = posterNum.data('min-delivery-charge');
            min_delivery = posterNum.data('min-delivery');
            setup_fee = posterNum.data('setup-fee');
            min_order = posterNum.data('min-order');
            min_order_price = posterNum.data('min-order-price');
            deliveryPoints = $('#' + deliveryPointsId).val();
            numOfPieces = posterNum.val();

            total = self.getTotalPrice(numOfPieces, posterPrice, min_order, min_order_price, setup_fee);
            if (numOfPieces <= min_delivery) {
                // if number of posters is <= min-delivery then deliverycharge = min-delivery-charge
                totalDeliveryCharge = deliveryPoints * min_delivery_charge;
            } else {
                // if number of posters is > min-delivery deliverycharge = delivery-charge
                totalDeliveryCharge = deliveryPoints * deliveryCharge;
            }

            total = total + totalDeliveryCharge;
            if (!total) {
                total = 0;
            }

            // calculate for total with gst
            // add 10% for the total
            var gstPercent = total * .10;
            var totalPriceWithGst = total + gstPercent;

            totalPrice.text('$' + total);
            $('#' + totalPriceGstId).text('$' + totalPriceWithGst);
        },

        getTotalPrice: function(num, price, min_order, min_order_price, fee) {
            var total;
            var leastPieces = Math.ceil(min_order / price);

            if (num >= leastPieces && num <= min_order) {
                total = min_order_price;
            } else if (num < leastPieces) {
                total = (num * price) + fee;
            } else {
                // fee is only for low qty's'
                if (fee === null || fee === undefined) {fee = 0;}

                var piecesLeft = num - min_order;
                total = min_order_price + (piecesLeft * price);
            }

            return total;
        },

        redirect: function(e) {
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

$(document).ready(function() {
//    VP.Pricing.UI.init();
});