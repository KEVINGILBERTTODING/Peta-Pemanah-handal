<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="initial-scale=1,user-scalable=no,maximum-scale=1,width=device-width">
        <meta name="mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <link rel="stylesheet" href="css/leaflet.css">
        <link rel="stylesheet" href="css/qgis2web.css"><link rel="stylesheet" href="css/fontawesome-all.min.css">
        <link rel="stylesheet" href="css/leaflet-search.css">
        <link rel="stylesheet" href="css/leaflet-measure.css">
        <style>
        html, body, #map {
            width: 100%;
            height: 100%;
            padding: 0;
            margin: 0;
        }
        </style>
        <title></title>
    </head>
    <body>
        <div id="map">
        </div>
        <script src="js/qgis2web_expressions.js"></script>
        <script src="js/leaflet.js"></script>
        <script src="js/leaflet.rotatedMarker.js"></script>
        <script src="js/leaflet.pattern.js"></script>
        <script src="js/leaflet-hash.js"></script>
        <script src="js/Autolinker.min.js"></script>
        <script src="js/rbush.min.js"></script>
        <script src="js/labelgun.min.js"></script>
        <script src="js/labels.js"></script>
        <script src="js/leaflet-measure.js"></script>
        <script src="js/leaflet-search.js"></script>
        <script src="data/ADMINISTRASI_KEC_KAB_KEDIRI_0.php"></script>
        <script src="data/puskesmas_1.php"></script>
        <script>
        var highlightLayer;
        function highlightFeature(e) {
            highlightLayer = e.target;

            if (e.target.feature.geometry.type === 'LineString') {
              highlightLayer.setStyle({
                color: '#ffff00',
              });
            } else {
              highlightLayer.setStyle({
                fillColor: '#ffff00',
                fillOpacity: 1
              });
            }
        }
        var map = L.map('map', {
            zoomControl:true, maxZoom:28, minZoom:1
        }).fitBounds([[-7.997116821691316,111.69695981424947],[-7.579500152458541,112.51548848594571]]);
        var hash = new L.Hash(map);
        map.attributionControl.setPrefix('<a href="https://github.com/tomchadwin/qgis2web" target="_blank">qgis2web</a> &middot; <a href="https://leafletjs.com" title="A JS library for interactive maps">Leaflet</a> &middot; <a href="https://qgis.org">QGIS</a>');
        var autolinker = new Autolinker({truncate: {length: 30, location: 'smart'}});
        var measureControl = new L.Control.Measure({
            position: 'topleft',
            primaryLengthUnit: 'meters',
            secondaryLengthUnit: 'kilometers',
            primaryAreaUnit: 'sqmeters',
            secondaryAreaUnit: 'hectares'
        });
        measureControl.addTo(map);
        document.getElementsByClassName('leaflet-control-measure-toggle')[0]
        .innerHTML = '';
        document.getElementsByClassName('leaflet-control-measure-toggle')[0]
        .className += ' fas fa-ruler';
        var bounds_group = new L.featureGroup([]);
        function setBounds() {
        }
        function pop_ADMINISTRASI_KEC_KAB_KEDIRI_0(feature, layer) {
            layer.on({
                mouseout: function(e) {
                    for (i in e.target._eventParents) {
                        e.target._eventParents[i].resetStyle(e.target);
                    }
                },
                mouseover: highlightFeature,
            });
            var popupContent = '<table>\
                    <tr>\
                        <th scope="row">id</th>\
                        <td>' + (feature.properties['id'] !== null ? autolinker.link(feature.properties['id'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Nama Kec</th>\
                        <td>' + (feature.properties['Nama Kec'] !== null ? autolinker.link(feature.properties['Nama Kec'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">TAHUN</th>\
                        <td>' + (feature.properties['TAHUN'] !== null ? autolinker.link(feature.properties['TAHUN'].toLocaleString()) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {maxHeight: 400});
        }

        function style_ADMINISTRASI_KEC_KAB_KEDIRI_0_0(feature) {
            if (feature.properties['TAHUN'] >= 1986.000000 && feature.properties['TAHUN'] <= 2620.600000 ) {
                return {
                pane: 'pane_ADMINISTRASI_KEC_KAB_KEDIRI_0',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(255,255,255,1.0)',
                interactive: true,
            }
            }
            if (feature.properties['TAHUN'] >= 2620.600000 && feature.properties['TAHUN'] <= 3894.600000 ) {
                return {
                pane: 'pane_ADMINISTRASI_KEC_KAB_KEDIRI_0',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(255,191,191,1.0)',
                interactive: true,
            }
            }
            if (feature.properties['TAHUN'] >= 3894.600000 && feature.properties['TAHUN'] <= 5290.000000 ) {
                return {
                pane: 'pane_ADMINISTRASI_KEC_KAB_KEDIRI_0',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(255,128,128,1.0)',
                interactive: true,
            }
            }
            if (feature.properties['TAHUN'] >= 5290.000000 && feature.properties['TAHUN'] <= 6536.000000 ) {
                return {
                pane: 'pane_ADMINISTRASI_KEC_KAB_KEDIRI_0',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(255,64,64,1.0)',
                interactive: true,
            }
            }
            if (feature.properties['TAHUN'] >= 6536.000000 && feature.properties['TAHUN'] <= 9864.000000 ) {
                return {
                pane: 'pane_ADMINISTRASI_KEC_KAB_KEDIRI_0',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(255,0,0,1.0)',
                interactive: true,
            }
            }
        }
        map.createPane('pane_ADMINISTRASI_KEC_KAB_KEDIRI_0');
        map.getPane('pane_ADMINISTRASI_KEC_KAB_KEDIRI_0').style.zIndex = 400;
        map.getPane('pane_ADMINISTRASI_KEC_KAB_KEDIRI_0').style['mix-blend-mode'] = 'normal';
        var layer_ADMINISTRASI_KEC_KAB_KEDIRI_0 = new L.geoJson(json_ADMINISTRASI_KEC_KAB_KEDIRI_0, {
            attribution: '',
            interactive: true,
            dataVar: 'json_ADMINISTRASI_KEC_KAB_KEDIRI_0',
            layerName: 'layer_ADMINISTRASI_KEC_KAB_KEDIRI_0',
            pane: 'pane_ADMINISTRASI_KEC_KAB_KEDIRI_0',
            onEachFeature: pop_ADMINISTRASI_KEC_KAB_KEDIRI_0,
            style: style_ADMINISTRASI_KEC_KAB_KEDIRI_0_0,
        });
        bounds_group.addLayer(layer_ADMINISTRASI_KEC_KAB_KEDIRI_0);
        map.addLayer(layer_ADMINISTRASI_KEC_KAB_KEDIRI_0);
        function pop_puskesmas_1(feature, layer) {
            layer.on({
                mouseout: function(e) {
                    for (i in e.target._eventParents) {
                        e.target._eventParents[i].resetStyle(e.target);
                    }
                },
                mouseover: highlightFeature,
            });
            var popupContent = '<table>\
                    <tr>\
                        <th scope="row">id</th>\
                        <td>' + (feature.properties['id'] !== null ? autolinker.link(feature.properties['id'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">nama</th>\
                        <td>' + (feature.properties['nama'] !== null ? autolinker.link(feature.properties['nama'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">alamat</th>\
                        <td>' + (feature.properties['alamat'] !== null ? autolinker.link(feature.properties['alamat'].toLocaleString()) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {maxHeight: 400});
        }

        function style_puskesmas_1_0() {
            return {
                pane: 'pane_puskesmas_1',
        rotationAngle: 0.0,
        rotationOrigin: 'center center',
        icon: L.icon({
            iconUrl: 'markers/h.svg',
            iconSize: [26.599999999999998, 26.599999999999998]
        }),
                interactive: true,
            }
        }
        map.createPane('pane_puskesmas_1');
        map.getPane('pane_puskesmas_1').style.zIndex = 401;
        map.getPane('pane_puskesmas_1').style['mix-blend-mode'] = 'normal';
        var layer_puskesmas_1 = new L.geoJson(json_puskesmas_1, {
            attribution: '',
            interactive: true,
            dataVar: 'json_puskesmas_1',
            layerName: 'layer_puskesmas_1',
            pane: 'pane_puskesmas_1',
            onEachFeature: pop_puskesmas_1,
            pointToLayer: function (feature, latlng) {
                var context = {
                    feature: feature,
                    variables: {}
                };
                return L.marker(latlng, style_puskesmas_1_0(feature));
            },
        });
        bounds_group.addLayer(layer_puskesmas_1);
        map.addLayer(layer_puskesmas_1);
        var baseMaps = {};
        L.control.layers(baseMaps,{'<img src="legend/puskesmas_1.png" /> puskesmas': layer_puskesmas_1,'ADMINISTRASI_KEC_KAB_KEDIRI<br /><table><tr><td style="text-align: center;"><img src="legend/ADMINISTRASI_KEC_KAB_KEDIRI_0_198626210.png" /></td><td>1986 - 2621</td></tr><tr><td style="text-align: center;"><img src="legend/ADMINISTRASI_KEC_KAB_KEDIRI_0_262138951.png" /></td><td>2621 - 3895</td></tr><tr><td style="text-align: center;"><img src="legend/ADMINISTRASI_KEC_KAB_KEDIRI_0_389552902.png" /></td><td>3895 - 5290</td></tr><tr><td style="text-align: center;"><img src="legend/ADMINISTRASI_KEC_KAB_KEDIRI_0_529065363.png" /></td><td>5290 - 6536</td></tr><tr><td style="text-align: center;"><img src="legend/ADMINISTRASI_KEC_KAB_KEDIRI_0_653698644.png" /></td><td>6536 - 9864</td></tr></table>': layer_ADMINISTRASI_KEC_KAB_KEDIRI_0,}).addTo(map);
        setBounds();
        var i = 0;
        layer_ADMINISTRASI_KEC_KAB_KEDIRI_0.eachLayer(function(layer) {
            var context = {
                feature: layer.feature,
                variables: {}
            };
            layer.bindTooltip((layer.feature.properties['Nama Kec'] !== null?String('<div style="color: #323232; font-size: 10pt; font-family: \'Arial\', sans-serif;">' + layer.feature.properties['Nama Kec']) + '</div>':''), {permanent: true, offset: [-0, -16], className: 'css_ADMINISTRASI_KEC_KAB_KEDIRI_0'});
            labels.push(layer);
            totalMarkers += 1;
              layer.added = true;
              addLabel(layer, i);
              i++;
        });
        map.addControl(new L.Control.Search({
            layer: layer_ADMINISTRASI_KEC_KAB_KEDIRI_0,
            initial: false,
            hideMarkerOnCollapse: true,
            propertyName: 'Nama Kec'}));
        document.getElementsByClassName('search-button')[0].className +=
         ' fa fa-binoculars';
        resetLabels([layer_ADMINISTRASI_KEC_KAB_KEDIRI_0]);
        map.on("zoomend", function(){
            resetLabels([layer_ADMINISTRASI_KEC_KAB_KEDIRI_0]);
        });
        map.on("layeradd", function(){
            resetLabels([layer_ADMINISTRASI_KEC_KAB_KEDIRI_0]);
        });
        map.on("layerremove", function(){
            resetLabels([layer_ADMINISTRASI_KEC_KAB_KEDIRI_0]);
        });
        </script>
    </body>
</html>
