var VP = window.VP || {};
VP.Pricing = VP.Pricing || {};

VP.Pricing.UI = function() {

    /* element ids */
    var btnComputeId = 'btn-compute';
    var posterNumId = 'poster-num';
    var totalPriceId = 'total-price';
    var totalPriceGSTId = 'total-price-gst';
    var deliveryPointsId = 'delivery-points';
    var resultDetailsId = 'result-details';
    var btnAddResultId = 'btn-addresult';
    var btnExportResultId = 'btn-exportresult';
    var exportDataLinkId = 'export-data-link';

    /* element classes */
    var printClass = 'print';
    var deleteLinkClass = 'delete-link';
    var productDetailsClass = 'product-details';

    /* element data attributes*/
    var posterPriceData = 'poster-price';

    var self,
    posterPrice;

    return {
        init: function() {
            self = this;
            $('#' + btnComputeId).bind('click', self.computePrice);

            $('#' + btnAddResultId).bind('click', self.addResult);

            $('.' + deleteLinkClass).live('click', self.removeResult);

            // fire ajax if on pricing show page only
            if ($('.pricing.show').length>0) {
                self.computePrice();
            }

            $('.static-tooltip').each(function() {
                $(this).qtip({
                    content: {
                        text: $(this).parent().siblings('.hide')
                    }
                });
            });

            $('.pricing.index .' + printClass).live('click', self.redirect);

            // get cookie result_details and append to table
            var previousResults = $.cookie('result_details');
            if (previousResults !== undefined && previousResults !== null && $('.pricing.show').length>0) {
                $('#'+resultDetailsId).append(previousResults);
            }

            $('#'+btnExportResultId).bind('click', self.exportResultToSpreadsheet);
            $('#'+exportDataLinkId).bind('click', self.exportDataToSpreadsheet);
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
                    if (data.code == 200) {
                        // success
                        var total;
                        var totalWithGST;
                        var posterPrice;
                        var deliveryPoints = parseInt($('#'+deliveryPointsId).val());
                        var deliveryCharge = poster.data('delivery-charge');

                        posterPrice = parseInt(data.data.price);

                        //todo compute total with delivery points
                        total = posterPrice + (deliveryPoints * deliveryCharge);
                        self.setTotalPrice(total);

                        // total price with gst
                        var gst = total * .10;
                        self.setTotalPriceGST(total + gst);
                    } else {
                        self.setTotalPrice(0);
                        self.setTotalPriceGST(0);
                    }


                },
                function() {
                // error

                },
                url
                );
        },

        setTotalPrice: function(price) {
            $('#'+totalPriceId).text('$'+price);
        },

        setTotalPriceGST: function(price) {
            $('#'+totalPriceGSTId).text('$'+price);
        },

        addResult: function() {

            if ($('#total-price').text() !== '$0') {
                var poster = $('#'+posterNumId);
                var posterName = poster.data('poster');
                var posterType = poster.data('type');
                var paperType = $('.bubble select option:selected').val();
                var deliveryCharge = poster.data('delivery-charge');
                var deliveryPoints = $('#'+deliveryPointsId).val();
                var numPoster = poster.val();
                var price = $('#' + totalPriceId).text();
                var totalPriceGST = $('#' + totalPriceGSTId).text();

                var element = '<tr class="hide '+productDetailsClass+'"><td>' + posterName + '</td>' +
                '<td>' + posterType + '</td>' +
                '<td>' + paperType + '</td>' +
                '<td>' + deliveryCharge + '</td>' +
                '<td>' + deliveryPoints + '</td>' +
                '<td>' + numPoster + '</td>' +
                '<td>' + price + '</td>' +
                '<td><span class="value">' + totalPriceGST + '</span><a class="delete-link" href="#"><span>x</span></a></td>';

                //apend elem to result table
                var container = $('#'+resultDetailsId+' tbody');
                container.append(element);
                container.children().last().fadeIn('slow');

                self.setDataForResultDetails();
            }
        },

        setDataForResultDetails: function() {
            var data = $('#' + resultDetailsId + ' tbody tr:not(:first-child)');
            var val = '';        // string to set as cookie

            for(var i =0; i<data.length; i++) {
                val = val + '<tr class="'+productDetailsClass+'">' + $(data[i]).html() + '</tr>';
            }

            self.setCookie('result_details', val);
        },

        setCookie: function(key, value) {
            if (key !== null && value !== null) {
                $.cookie(key, value);
            }
        },

        removeResult: function(e) {
            $(this).closest('tr').fadeOut(function() {
                $(this).remove();
                self.setDataForResultDetails();
            });
            return false;
        },

        exportResultToSpreadsheet: function() {
            var ajax = new VP.Ajax.Request();
            ajax.send(
                'testaction',
                {
                },
                '',
                {},
                '',
                function(data) {
                },
                function() {
                // error

                },
                'export_data'
                );
        },

        exportDataToSpreadsheet: function(e) {
            // make an array of data as parameter for the excel
            var resultDetails = $('#'+resultDetailsId);
            var tableRow = resultDetails.find('tr.product-details');
            var tableData;
            var i=0;
            var list = {};
            var data = new Array();

            tableRow.each(function() {
                tableData = $(this).children('td');
                tableData.each(function() {
                    data.push($(this).text());
                });
                list[i] = data;
                data = [];
                i++;
            });

            list = JSON.stringify(list);

            var link = $(this).attr('href');
            $(this).attr('href', link+'?list='+list);
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
    VP.Pricing.UI.init();
});