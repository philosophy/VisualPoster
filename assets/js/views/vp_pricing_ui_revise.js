var VP = window.VP || {};
VP.Pricing = VP.Pricing || {}

VP.Pricing.test = function() {

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

//            totalPrice = $('#' + totalPriceId);
//            posterNum.bind('change keyup', self.computePrice);
//            $('#'+deliveryPointsId).bind('change keyup', self.computePrice);

            $('.pricing.index .' + printClass).live('click', self.redirect);

//            self.computePrice();
        },

        computePrice: function() {
            var total = '$0';
            var posterInput = $('#'+posterNumId);
            var posterId = posterInput.data('poster');

            switch(posterId) {
                case 'A1' :
                    //computation for A1 posters
                    total = self.computeA1(posterInput);
                    break;
                case 'A2' :
                    //computation for A2 posters
                    total = self.computeA2(posterInput);
                    break;
            }

            totalPrice.text(total);
        },

        computeA1: function(elem) {
            var total = 0;
            var num = elem.val();
            if (num === '1') {
                total = 60;
            } else if (num>1 && num<26) {
                total = 60 + ((num-1)*25);
            } else if (num>=26 && num<=100) {
                total = 700;
            } else if (num>100 && num<=300) {
                var dividend;
                var base = 700;

                dividend = Math.floor((num-1)/50);
                total = base + (dividend * 25);
            } else if (num>300 && num<=350) {
                total = 810;
            } else if (num>350 && num<=500) {
                total = 825;
            } else if (num>500 && num<=550) {
                total = 840;
            } else if (num>550 && num<=600) {
                total = 875;
            } else if (num>600 && num<=650) {
                total = 890;
            } else if (num>650 && num<=700) {
                total = 905;
            } else if (num>700 && num<=750) {
                total = 920;
            } else if (num>750 && num<=800) {
                total = 930;
            } else if (num>800 && num<=850) {
                total = 945;
            } else if (num>850 && num<=900) {
                total = 960;
            } else if (num>900 && num<=950) {
                total = 980;
            } else if (num>950 && num<=1000) {
                total = 1110;
            }

            return '$' + total;
        },

        computeA2:function(elem) {
            var total = 0;
            var num = elem.val();

            if (num === '1') {
                total = 45;
            } else if (num>1 && num<=23) {
                total = 45 + ((num-1)*15);
            } else if (num>23 && num<=199) {
                // missing
            } else if (num>199 && num<=264) {
                total = 360;
            } else if (num>264 && num<=500) {
                total = 395;
            } else if (num>500 && num<=600) {
                total = 430;
            } else if (num>600 && num<=700) {
               total = 460;
            }
            return ('$' + total);
        },

        getTotalPrice: function() {
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
    VP.Pricing.test.init();
});