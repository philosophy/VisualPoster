var VP = window.VP || {};
VP.Pricing = VP.Pricing || {}

VP.Pricing.UI = function() {

    return {
        init: function() {

            $('.static-tooltip').each(function() {
                $(this).qtip({
                    content: {
                        text: $(this).parent().siblings('.hide')
                    }
                });
            });
        }
    }

}();

$(document).ready(function() {VP.Pricing.UI.init();});