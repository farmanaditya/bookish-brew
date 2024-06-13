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
        margin: 0%
    }

    /* Custom styles for Bookish Brew landing page */
    .ud-hero {
        background-color: #1d4185;
        color: #ffffff;
        padding: 100px 0;
        text-align: center;
    }

    .ud-hero-title {
        font-size: 3rem;
        margin-bottom: 20px;
    }

    .ud-hero-desc {
        font-size: 1.5rem;
        margin-bottom: 40px;
    }

    .ud-main-btn {
        background-color: #2855a7;
        color: #ffffff;
        padding: 12px 24px;
        border-radius: 4px;
        text-decoration: none;
        margin-right: 10px;
    }

    .ud-main-btn:hover {
        background-color: #1a3b6d;
    }

    .ud-white-btn {
        background-color: #ffffff;
        color: #2855a7;
        border: 1px solid #2855a7;
    }

    .ud-white-btn:hover {
        background-color: #f0f0f0;
    }

    .ud-section-title {
        text-align: center;
        margin-bottom: 60px;
    }

    .ud-feature-icon {
        font-size: 3rem;
        margin-bottom: 20px;
    }

    .ud-feature-title {
        font-size: 1.5rem;
        margin-bottom: 10px;
    }

    .ud-feature-desc {
        font-size: 1.1rem;
    }

    .ud-about {
        background-color: #f8f9fa;
        padding: 100px 0;
    }

    .ud-about-content {
        text-align: center;
        max-width: 800px;
        margin: 0 auto;
    }

    .ud-contact {
        padding: 100px 0;
        text-align: center;
    }

    .ud-footer {
        background-color: #1d4185;
        color: #ffffff;
        padding: 50px 0;
        text-align: center;
    }

    .ud-footer-widgets {
        margin-top: 30px;
    }

    .ud-widget-desc {
        margin-bottom: 20px;
    }

    .back-to-top {
        position: fixed;
        bottom: 30px;
        right: 30px;
        font-size: 2rem;
        background-color: #2855a7;
        color: #ffffff;
        padding: 10px 20px;
        border-radius: 50%;
        text-decoration: none;
        display: none;
    }

    .back-to-top:hover {
        background-color: #1a3b6d;
    }


</style>
@endsection
</head>

<body>
    @section('content')

    <!-- Hero Section -->
    <section class="ud-hero" id="home">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ud-hero-content">
                        <h1 class="ud-hero-title">
                            Bookish Brew - Your Destination for Books and Coffee
                        </h1>
                        <p class="ud-hero-desc">
                            Explore our collection of books while enjoying your favorite brew of coffee.
                        </p>
                        <ul class="ud-hero-buttons">
                            <li>
                                <a href="#map" class="ud-main-btn">
                                    Go to Map
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Hero Section -->

    <!-- Features Section -->
    <section id="features" class="ud-features">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ud-section-title">
                        <h2>Our Features</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- Feature 1 -->
                <div class="col-xl-3 col-lg-3 col-sm-6">
                    <div class="ud-single-feature">
                        <div class="ud-feature-icon">
                            <i class="lni lni-book"></i>
                        </div>
                        <div class="ud-feature-content">
                            <h3 class="ud-feature-title">Wide Selection of Books</h3>
                            <p class="ud-feature-desc">
                                Explore a diverse collection of literature from around the world.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Feature 2 -->
                <div class="col-xl-3 col-lg-3 col-sm-6">
                    <div class="ud-single-feature">
                        <div class="ud-feature-icon">
                            <i class="lni lni-coffee-cup"></i>
                        </div>
                        <div class="ud-feature-content">
                            <h3 class="ud-feature-title">Coffee Bar</h3>
                            <p class="ud-feature-desc">
                                Enjoy specialty coffee blends while browsing through our books.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Feature 3 -->
                <div class="col-xl-3 col-lg-3 col-sm-6">
                    <div class="ud-single-feature">
                        <div class="ud-feature-icon">
                            <i class="lni lni-bookmark-alt"></i>
                        </div>
                        <div class="ud-feature-content">
                            <h3 class="ud-feature-title">Bookish Events</h3>
                            <p class="ud-feature-desc">
                                Join book clubs, author readings, and literary discussions.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Feature 4 -->
                <div class="col-xl-3 col-lg-3 col-sm-6">
                    <div class="ud-single-feature">
                        <div class="ud-feature-icon">
                            <i class="lni lni-customer"></i>
                        </div>
                        <div class="ud-feature-content">
                            <h3 class="ud-feature-title">Customer Service</h3>
                            <p class="ud-feature-desc">
                                Dedicated support team to assist with your book and coffee needs.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Features Section -->

    <!-- About Section -->
    <section id="about" class="ud-about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ud-about-content-wrapper">
                        <div class="ud-about-content">
                            <h2>About Bookish Brew</h2>
                            <p>
                                At Bookish Brew, we combine the love for books with the aroma of freshly brewed coffee. Our
                                mission is to create a welcoming space where literature enthusiasts can discover new books
                                while savoring delicious coffee blends. Whether you're a reader looking for your next favorite
                                novel or a coffee lover seeking a cozy spot to enjoy your drink, Bookish Brew is your
                                destination.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End About Section -->

    <!-- Map Section -->
    <section id="map-section">
        <div id="map"></div>
    </section>
    <!-- End Map Section -->

    @endsection

    @section('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet.draw/1.0.4/leaflet.draw.js"></script>
    <script>
        // Map initialization
        var map = L.map('map').setView([-7.7956, 110.3695], 13);

        // Basemap
        L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 19,
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        // GeoJSON Point
        var point = L.geoJson(null, {
            onEachFeature: function(feature, layer) {
                var popupContent = "<h3>" + feature.properties.name + "</h3>" +
                    " " + feature.properties.description + "<br>" +
                    " <br><img src='{{ asset('storage/images') }}/" + feature.properties.image +
                    "' width='200px'>";

                layer.on({
                    click: function(e) {
                        point.bindPopup(popupContent);
                    },
                    mouseover: function(e) {
                        point.bindTooltip(feature.properties.name, {
                            direction: "top",
                        }).openTooltip();
                    },
                });
            },
        });

        $.getJSON("{{ route('api.points') }}", function(data) {
            point.addData(data);
            map.addLayer(point);
        });

        // GeoJSON polyline
        var polyline = L.geoJson(null, {
            onEachFeature: function(feature, layer) {
                var popupContent = "<h3>" + feature.properties.name + "</h3>" +
                    " " + feature.properties.description + "<br>" +
                    " <br><img src='{{ asset('storage/images') }}/" + feature.properties.image +
                    "' width='200px'>" + "<br>";
                layer.on({
                    click: function(e) {
                        layer.bindPopup(popupContent).openPopup();
                    },
                    mouseover: function(e) {
                        layer.bindTooltip(feature.properties.name, {
                            direction: "top",
                        }).openTooltip();
                    },
                });
            },
        });

        $.getJSON("{{ route('api.polylines') }}", function(data) {
            polyline.addData(data);
            map.addLayer(polyline);
        });

        // GeoJSON polygon
        var polygon = L.geoJson(null, {
            onEachFeature: function(feature, layer) {
                var popupContent = "<h3>" + feature.properties.name + "</h3>" +
                    " " + feature.properties.description + "<br>" +
                    " <br><img src='{{ asset('storage/images') }}/" + feature.properties.image +
                    "' width='200px'>";
                layer.on({
                    click: function(e) {
                        polygon.bindPopup(popupContent);
                    },
                    mouseover: function(e) {
                        polygon.bindTooltip(feature.properties.name, {
                            direction: "top",
                        }).openTooltip();
                    },
                });
            },
        });

        $.getJSON("{{ route('api.polygons') }}", function(data) {
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
