<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Peta</title>
    {{-- leaflet css --}}
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />

</head>
<body>
    <div id="map"></div>
    <style>g
    html, body, #map {
        height: 100%;
        width: 100%;
        margin: 0%;
    }</style>

    {{-- leaflet js --}}
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
    <script>
        //Map
        var map = L.map('map').setView([-6.1753924, 106.8271528], 13);

        // Basemap
    L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
      maxZoom: 19,
      attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);

    //Marker
    var marker = L.marker([-6.1753924, 106.8271528]).addTo(map);

    //popup
    marker.bindPopup("<b>Jakarta</b><br>Capital City").openPopup();

    //circle
    var circle = L.circle([-6.1753924, 106.8271528], {
        color: 'red',
        fillColor: '#f03',
        fillOpacity: 0.5,
        radius: 1500
    }).addTo(map);

    </script>
    {{-- <h1>Ini halaman Laravel, praktikum PGWL</h1> --}}
</body>
</html>
