/*!
 * http://www.sininglahi.byethost7.com
 *
 * Copyright 2010, Marc Lambert Agas
 *
 * Date: Wed Nov 10 14:29:55 2010 -0400
 */

var VP = window.VP || {};
VP.ContcatUs= VP.ContactUs || {};

VP.ContactUs.UI = function() {

    var geocoder,
    map,
    marker,                                                                 /* marks the location */
    markersArray = [],
    gmap = google.maps;

    var defaultLatLng = new gmap.LatLng(15.000001, 120.95182189941408);     /* default location is center of luzon map */

    var mapCanvasId = 'map_canvas',                                         /* div container for the map */
    searchBtnId = 'btn_search',
    txtLocationId = 'txt_location',
    txtLocationDefVal = '',
    i = '#';

    var gmapDefaultOptions = {
        zoom: 8,
        center: defaultLatLng,
        mapTypeId: gmap.MapTypeId.HYBRID,
        scaleControl: true,
        navigationControl: true,
        navigationControlOptions: {
            style: gmap.NavigationControlStyle.SMALL,
            position: gmap.ControlPosition.LEFT
        }
    };

    var self;

    return {
        init: function() {
            geocoder = new gmap.Geocoder();										/* instantiate geocoding service */
            map = new gmap.Map(document.getElementById(mapCanvasId), gmapDefaultOptions);

            $(i+searchBtnId).bind('click', this.search);
            self = this;

            var txtLocation = $(i+txtLocationId);
            txtLocation.bind({
                'focus':this.onfocus,
                'blur':this.onblur
                });
            txtLocationDefVal = txtLocation.val();

        },

        onfocus: function(e) {
            var txtLocation = $(i+txtLocationId);
            if ($.trim(txtLocation.val()) === txtLocationDefVal) {
                txtLocation.val('').css({
                    'font-style':'normal',
                    'color':'#000'
                })
            }
        },

        onblur: function(e) {
            var txtLocation = $(i+txtLocationId);
            if ($.trim(txtLocation.val()) === '') {
                txtLocation.val(txtLocationDefVal).css({
                    'font-style':'italic',
                    'color':'#aaa'
                })
            }
        },

        search: function() {
            if (map !== null) {
                self.clearMarkers();
            }

            var address = $(i+txtLocationId).val();
            if (address !== txtLocationDefVal) {
                geocoder.geocode({
                    'address': address
                }, function(results, status) {
                    if (status == gmap.GeocoderStatus.OK) {
                        map.setCenter(results[0].geometry.location);

                        /* mark search results */
                        len = results.length;
                        for (var i=0; i<len; i++) {
                            marker = new gmap.Marker({
                                map: map,
                                position: results[i].geometry.location
                            });
                            markersArray.push(marker);
                        }
                    }
                });
            }
        },

        /* remove markers */
        clearMarkers: function() {
            if (markersArray !== null) {
                var len = markersArray.length - 1;
                for (var i=0;i<=len;i++) {
                    markersArray[i].setMap(null);
                }
                markersArray.length = 0;
            }
        }
    }

}();

$(document).ready(function() {
    SL.MapDisplay.UI.init();
});