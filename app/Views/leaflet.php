<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Leaflet</title>
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/main.css"/>
    <link rel="stylesheet" href="<?= base_url() ?>assets/libs/leaflet/leaflet.css"/>
  </head>
  <body>
    <div id="map"></div>
    <script src="<?= base_url() ?>assets/libs/leaflet/leaflet.js"></script>
    <script>
      let map = L.map('map').setView([0, 0], 1);

      L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 19,
        attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
      }).addTo(map);

      async function load_shapefile() {
        let url = '<?= base_url() ?>assets/cek.geojson';
        const response = await fetch(url)
        const shape_obj = await response.json();
        return shape_obj;
      }

      load_shapefile().then(L.geoJson).then(map.addLayer.bind(map));

    </script>
  </body>
</html>