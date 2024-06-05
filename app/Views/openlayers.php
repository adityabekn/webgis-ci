<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Openlayers</title>
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/main.css"/>
    <link rel="stylesheet" href="<?= base_url() ?>assets/libs/leaflet/leaflet.css"/>
    <link rel="stylesheet" href="<?= base_url() ?>assets/libs/openlayers/ol.css"/>
  </head>
  <body>
    <div id="map"></div>

    <script src="<?= base_url() ?>assets/libs/leaflet/leaflet.js"></script>
    <script src="<?= base_url() ?>assets/libs/openlayers/dist/ol.js"></script>

    <script>
        const projection = ol.proj.get('EPSG:4326');

        const cekSource = new ol.source.Vector({
            projection: projection,
            url: '<?= base_url() ?>assets/pharmacies.geojson',
            format: new ol.format.GeoJSON(),
        });

        const usStatesSource = new ol.source.Vector({
            projection: projection,
            url: '<?= base_url() ?>assets/us-states.geojson',
            format: new ol.format.GeoJSON(),
        });

        const view = new ol.View({
            projection: projection,
            center: [0, 0],
            zoom: 2,
        });

        const map = new ol.Map({
            layers: [
                new ol.layer.Tile({
                    source: new ol.source.OSM()
                }),
                new ol.layer.Group({
                    layers: [
                        new ol.layer.VectorImage({
                            source: usStatesSource,
                        }),
                        new ol.layer.VectorImage({
                            minZoom: 8,
                            source: cekSource,
                            style: new ol.style.Style({
                                image: new ol.style.Icon({
                                    src: 'https://openlayers.org/en/v4.6.5/examples/data/icon.png',
                                    scale: 0.8,
                                    anchor: [0.5, 1]
                                })
                            })
                        }),
                    ]
                })
            ],
            view: view,
            target: 'map',
        });
    </script>

  </body>
</html>