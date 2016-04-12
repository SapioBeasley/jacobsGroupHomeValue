"use strict";
/* global document */
jQuery(document).ready(function () {
    /***
     Adding Google Map.
     ***/

    /* Calling goMap() function, initializing map and adding markers. */
    jQuery('#map_canvas').goMap({
        maptype: 'ROADMAP',
        latitude: 36.1699,
        longitude: -115.1398,
        zoom: 13,
        scaleControl: true,
        scrollwheel: false,
        markers: []

    });
    jQuery('#doctor-location').goMap({
        maptype: 'ROADMAP',
        latitude: 40.760651,
        longitude: -73.930635,
        zoom: 6,
        scaleControl: true,
        scrollwheel: false,
        markers: [
            {latitude: 40.716818, longitude: -73.983164, group: 'doctor', icon: 'images/map/01.png', html: {
                    content: 'Lorem ipsum dolor sit amet.<br /><a href="company-page.html">Read More</a>'
                }}
        ]
    });
    $.goMap.ready(function () {
        var bounds = $.goMap.getBounds();
        var southWest = bounds.getSouthWest();
        var northEast = bounds.getNorthEast();
        var lngSpan = northEast.lng() - southWest.lng();
        var latSpan = northEast.lat() - southWest.lat();


        var markers = [];

        for (var i in $.goMap.markers) {
            var temp = $($.goMap.mapId).data($.goMap.markers[i]);
            markers.push(temp);
        }


        var markerclusterer = new MarkerClusterer($.goMap.map, markers);

    });
    /* Hiding all the markers on the map. */
    $(".group").change(function () {
        var group = $(this).val();

        if (group == 'all')
            for (var i in $.goMap.markers) {
                $.goMap.showHideMarker($.goMap.markers[i], true);
            }
        else {
            for (var i in $.goMap.markers) {
                $.goMap.showHideMarker($.goMap.markers[i], false);
            }

            $.goMap.showHideMarkerByGroup(group, true);
        }

    });
});
