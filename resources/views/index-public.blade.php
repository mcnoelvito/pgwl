@extends('layouts.template')

@section('styles')

    <style>
        html,
        body {
            height: 100%;
            width: 100%;
        }

        #map {
            height: calc(100vh - 56px);
            width: 100%;
            margin: 0;
        }
    </style>
@endsection

@section('content')
    <div id="map" style="width: 100%; height: calc(100vh - 56px); margin: 0"></div>

@endsection

@section('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet.draw/1.0.4/leaflet.draw.js"></script>
    <script src="https://unpkg.com/terraformer@1.0.7/terraformer.js"></script>
    <script src="https://unpkg.com/terraformer-wkt-parser@1.1.2/terraformer-wkt-parser.js"></script>
    <script>
        // Map
        var map = L.map('map').setView([-7.87115, 112.527], 13);

        //Basemap
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);



        /* GeoJSON Point */
        var point = L.geoJson(null, {
    onEachFeature: function (feature, layer) {
        var popupContent = "Name: " + feature.properties.name + "<br>" +
            "Description: " + feature.properties.description + "<br>" +
            "Foto: <img src='{{ asset('storage/images/') }}/" + feature.properties.image +
            "' class='img-thumbnail' alt='...'>"


            ;



        layer.on({
            click: function (e) {
                layer.bindPopup(popupContent).openPopup();
            },
            mouseover: function (e) {
                layer.bindTooltip(feature.properties.kab_kota).openTooltip();
            },
        });
    },
});

                    $.getJSON("{{ route('api.points')}}", function (data) {
                        point.addData(data);
                        map.addLayer(point);
                    });


        /* GeoJSON Polyline */
        var polyline = L.geoJson(null, {
    onEachFeature: function (feature, layer) {
        var popupContent = "Name: " + feature.properties.name + "<br>" +
            "Description: " + feature.properties.description + "<br>" +
            "Foto: <img src='{{ asset('storage/images/') }}/" + feature.properties.image +
            "' class='img-thumbnail' alt='...'>"

            ;
                layer.on({
                    click: function(e) {
                        polyline.bindPopup(popupContent);
                    },
                    mouseover: function(e) {
                        polyline.bindTooltip(feature.properties.name);
                    },
                });
            },
        });
        $.getJSON("{{ route('api.polylines') }}", function(data) {
            polyline.addData(data);
            map.addLayer(polyline);
        });

        /* GeoJSON polygon */
        var polygon = L.geoJson(null, {
    onEachFeature: function (feature, layer) {
        var popupContent = "Name: " + feature.properties.name + "<br>" +
            "Description: " + feature.properties.description + "<br>" +
            "Foto: <img src='{{ asset('storage/images/') }}/" + feature.properties.image +
            "' class='img-thumbnail' alt='...'>"

            ;

                layer.on({
                    click: function(e) {
                        polygon.bindPopup(popupContent);
                    },
                    mouseover: function(e) {
                        polygon.bindTooltip(feature.properties.name);
                    },
                });
            },
        });
        $.getJSON("{{ route('api.polygons') }}", function(data) {
            polygon.addData(data);
            map.addLayer(polygon);
        });

        //Basemap
        L.tileLayer("https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png", {
        maxZoom: 19,
        attribution:
        'Map data 0 <a href="https: //www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
        }). addTo(map);
        var basemap1 = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '<a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> | <a href="DIVSIG UGM" target="_blank">DIVSIG UGM</a>' //menambahkan nama//
        });
        var basemap2 = L.tileLayer('https://server.arcgisonline.com/ArcGIS/rest/services/World_Street_Map/MapServer/tile/{ z }/{ y }/{ x }',
            {
                attribution: 'Tiles &copy; Esri | <a href="WebGIS Kota Batu" target="_blank">DIVSIG UGM</a>'
            });
        var basemap3 = L.tileLayer('https://server.arcgisonline.com/ArcGIS/rest/services/World_Imagery/MapServer/tile/{ z }/{ y }/{ x }',
            {
                attribution: 'Tiles &copy; Esri | <a href="WebGIS Kota Batu" target="_blank">DIVSIG UGM</a>'
            });
        var basemap4 = L.tileLayer('https://tiles.stadiamaps.com/tiles/alidade_smooth_dark/{z}/{x}/{y}{r}.png', {
            attribution: '&copy; <a href="https://stadiamaps.com/">Stadia Maps</a>, &copy; <a href="https://openmaptiles.org/">OpenMapTiles</a> &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors'
        });


        basemap1.addTo(map);

    // layer control
    var baseMaps = {
            "OpenStreetMap": basemap1,
            "Esri World Street": basemap2,
            "Esri Imagery": basemap3,
            "Stadia Dark Mode": basemap4

        };
    var overlayMaps = {
            "Point": point,
            "Polyline": polyline,
            "Polygon": polygon
        };

        var layerControl = L.control.layers(baseMaps, overlayMaps).addTo(map);

    //Watermark
    L.Control.Watermark = L.Control.extend({
            onAdd: function (map) {
                var img = L.DomUtil.create('img');
                img.src = '{{ asset('storage/images/2.png') }}';
                img.style.width = '100px';
                return img;
            }
        });

        L.control.watermark = function (opts) {
            return new L.Control.Watermark(opts);
        }
        L.control.watermark({ position: 'bottomright' }).addTo(map);


</script>
@endsection
