@extends('layouts.template')

@section('styles')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet.draw/1.0.4/leaflet.draw.css">
<style>
        html, body {
            height: 100%;
            width: 100%;
        }
        #map {
            height: calc(100vh - 56px);
            width: 100%;
            margin: 0%
        }</style>
@endsection
</head>

<body>
    @section('content')
    <div id="map"></div>

    <!-- Modal Create Point -->
        <div class="modal fade" id="PointModal" tabindex="-1" aria-labelledby="PointModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Create Point</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('store-point') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Fill point name">
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control" id="description" name="description" rows="3"></textarea>
                </div>
                <div class="mb-3">
                    <label for="geom" class="form-label">Geometry</label>
                    <textarea class="form-control" id="geom_point" name="geom" rows="3" readonly></textarea>
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">Image</label>
                    <input type="file" class="form-control" id="image_point" name="image" >
                </div>
            </div>
            <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </form>
                </div>
            </div>
            </div>

        <!-- Modal Create Polyline -->
        </div>
        <div class="modal fade" id="PolylineModal" tabindex="-1" aria-labelledby="PolylineModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Create Polyline</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('store-polyline') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Fill point name">
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Descirption</label>
                    <textarea class="form-control" id="description" name="description" rows="3"></textarea>
                </div>
                <div class="mb-3">
                    <label for="geom" class="form-label">Geometry</label>
                    <textarea class="form-control" id="geom_polyline" name="geom" rows="3" readonly></textarea>
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">Image</label>
                    <input type="file" class="form-control" id="image_polyline" name="image" >
                </div>
            </div>
            <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </form>
                </div>

            </div>
            </div>
        </div>
        <!-- Modal Create Polygon -->
        </div>
        <div class="modal fade" id="PolygonModal" tabindex="-1" aria-labelledby="PolygonModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Create Polygon</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('store-polygon') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Fill polygon name">
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Descirption</label>
                    <textarea class="form-control" id="description" name="description" rows="3"></textarea>
                </div>
                <div class="mb-3">
                    <label for="geom" class="form-label">Geometry</label>
                    <textarea class="form-control" id="geom_polygon" name="geom" rows="3" readonly></textarea>
                </div>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Image</label>
                <input type="file" class="form-control" id="image_polygon" name="image" >
            </div>
            <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </form>
                </div>
            </div>
            </div>
        </div>
    @endsection

    @section('script')
        <script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet.draw/1.0.4/leaflet.draw.js"></script>
        <script src="https://unpkg.com/terraformer@1.0.7/terraformer.js"></script>
        <script src="https://unpkg.com/terraformer-wkt-parser@1.1.2/terraformer-wkt-parser.js"></script>
    <script>
        //Map
        var map = L.map('map').setView([-6.1753924, 106.8271528], 13);

        // Basemap
        L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 19,
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

    /* Digitize Function */
        var drawnItems = new L.FeatureGroup();
        map.addLayer(drawnItems);

    var drawControl = new L.Control.Draw({
        draw: {
		position: 'topleft',
		polyline: true,
		polygon: true,
		rectangle: true,
		circle: false,
		marker: true,
		circlemarker: false
	},
	edit: false
});

map.addControl(drawControl);

map.on('draw:created', function(e) {
	var type = e.layerType,
		layer = e.layer;

	console.log(type);

	var drawnJSONObject = layer.toGeoJSON();
	var objectGeometry = Terraformer.WKT.convert(drawnJSONObject.geometry);

	console.log(drawnJSONObject);
	console.log(objectGeometry);

	if (type === 'polyline') {
		// Set value geometry to input geom
        $("#geom_polyline").val(objectGeometry);

        // Show modal
        $("#PolylineModal").modal('show');
	} else if (type === 'polygon' || type === 'rectangle') {
		// Set value geometry to input geom
        $("#geom_polygon").val(objectGeometry);

        // Show modal
        $("#PolygonModal").modal('show');
	} else if (type === 'marker') {
        // Set value geometry to input geom
        $("#geom_point").val(objectGeometry);

        // Show modal
        $("#PointModal").modal('show');
	} else {
		console.log('_undefined_');
	}

	drawnItems.addLayer(layer);
});

    /* GeoJSON Point */
			var point = L.geoJson(null, {
				onEachFeature: function (feature, layer) {
					var popupContent = "Nama: " + feature.properties.name + "<br>" +
						"Deskripsi: " + feature.properties.description + "<br>" +
                        "Foto: <img src='{{ asset('storage/images') }}/" + feature.properties.image + "' width='100px'>"
                        ;
					layer.on({
						click: function (e) {
							point.bindPopup(popupContent);
						},
						mouseover: function (e) {
							point.bindTooltip(feature.properties.name, {
                                direction: "top",
                            }).openTooltip();
						},
					});
				},
			});
			$.getJSON("{{ route('api.points') }}", function (data) {
				point.addData(data);
				map.addLayer(point);
			});
    /* GeoJSON polyline */
			var polyline = L.geoJson(null, {
				onEachFeature: function (feature, layer) {
					var popupContent = "Nama: " + feature.properties.name + "<br>" +
						"Deskripsi: " + feature.properties.description + "<br>" +
                        "Foto: <img src='{{ asset('storage/images') }}/" + feature.properties.image + "' width='100px'>"
                        ;
					layer.on({
						click: function (e) {
							polyline.bindPopup(popupContent);
						},
						mouseover: function (e) {
							polyline.bindTooltip(feature.properties.name, {
                                direction: "top",
                            }).openTooltip();
						},
					});
				},
			});
			$.getJSON("{{ route('api.polylines') }}", function (data) {
				polyline.addData(data);
				map.addLayer(polyline);
			});
    /* GeoJSON polygon */
			var polygon = L.geoJson(null, {
				onEachFeature: function (feature, layer) {
					var popupContent = "Nama: " + feature.properties.name + "<br>" +
						"Deskripsi: " + feature.properties.description + "<br>" +
                        "Foto: <img src='{{ asset('storage/images') }}/" + feature.properties.image + "' width='100px'>"

                        ;
					layer.on({
						click: function (e) {
							polygon.bindPopup(popupContent);
						},
						mouseover: function (e) {
							polygon.bindTooltip(feature.properties.name, {
                                direction: "top",
                            }).openTooltip();
						},
					});
				},
			});
			$.getJSON("{{ route('api.polygons') }}", function (data) {
				polygon.addData(data);
				map.addLayer(polygon);
			});

            // Layer Control
            var overlayMaps = {
                "Point": point,
                "Polyline": polyline,
                "Polygon": polygon
          };

          var layerControl = L.control.layers(null, overlayMaps).addTo(map);

    </script>
    @endsection
