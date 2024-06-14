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


        .ud-widget-desc {
            margin-bottom: 20px;
        }

        .carousel-image-wrapper {
            position: relative;
            width: 100%;
            padding-bottom: 56.25%;
            /* 16:9 aspect ratio */
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .carousel-image {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .container-fluid,
        .row,
        .col-lg-12 {
            padding: 10px;
        }

        /* Footer styles */
        .ud-footer {
            background-color: #1d4185;
            color: #ffffff;
            padding: 50px 0;
            text-align: center;
            position: bottom;
            bottom: 0;
            width: 100%;
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

        <!-- About Section -->
        <section id="about" class="ud-about">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="ud-about-content-wrapper">
                            <div class="ud-about-content">
                                <h2>About Bookish Brew</h2>
                                <p>
                                    At Bookish Brew, we combine the love for books with the aroma of freshly brewed coffee.
                                    Our
                                    mission is to create a welcoming space where literature enthusiasts can discover new
                                    books
                                    while savoring delicious coffee blends. Whether you're a reader looking for your next
                                    favorite
                                    novel or a coffee lover seeking a cozy spot to enjoy your drink, Bookish Brew is your
                                    destination.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- carousel for images --}}
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="carousel-image-wrapper">
                                        <img src="{{ asset('storage/images/bukuakik2.jpeg') }}"
                                            class="d-block w-100 carousel-image" alt="Bookish Brew 1">
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="carousel-image-wrapper">
                                        <img src="{{ asset('storage/images/bukuakik.jpeg') }}"
                                            class="d-block w-100 carousel-image" alt="Bookish Brew 2">
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="carousel-image-wrapper">
                                        <img src="{{ asset('storage/images/blanco.jpeg') }}"
                                            class="d-block w-100 carousel-image" alt="Bookish Brew 3">
                                    </div>
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                                data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                                data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Features Section -->
            <section id="features" class="ud-features">
                <div class="container">
                    <div class="row mt-5">
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
                                    <h3 class="ud-feature-title">Bookshop</h3>
                                    <p class="ud-feature-desc">
                                        Discover a variety of indie bookshops, vintage bookstores with rare collections, and
                                        secondhand book stores. Whether you're looking for contemporary literature or
                                        out-of-print gems, our curated selection caters to all book lovers.
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
                                    <h3 class="ud-feature-title">Cafe Book</h3>
                                    <p class="ud-feature-desc">
                                        Explore cozy coffee shops with intriguing book collections that provide the perfect
                                        ambiance for reading. Enjoy a unique blend of coffee while you dive into a good book
                                        or engage in literary discussions with fellow book enthusiasts.
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
                                    <h3 class="ud-feature-title">Bookish Events or Community</h3>
                                    <p class="ud-feature-desc">
                                        Explore cozy coffee shops with intriguing book collections that provide the perfect
                                        ambiance for reading. Enjoy a unique blend of coffee while you dive into a good book
                                        or engage in literary discussions with fellow book enthusiasts.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Feature 4 -->
                        <div class="col-xl-3 col-lg-3 col-sm-6 mb-0">
                            <div class="ud-single-feature">
                                <div class="ud-feature-icon">
                                    <i class="lni lni-customer"></i>
                                </div>
                                <div class="ud-feature-content">
                                    <h3 class="ud-feature-title">Register and Login</h3>
                                    <p class="ud-feature-desc">
                                        Sign up and log in to add and share your favorite bookish spots. Connect with other
                                        book lovers, share recommendations, and become a part of our growing literary
                                        community.
                                    </p>
                                    <a href="{{ route('register') }}" class=""><strong><u>Register Here</u></strong></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End Features Section -->

            <!-- Map Section -->
            <section id="map-section" style="padding: 20px; border-radius: 10px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);">
                <div id="map"></div>
            </section>
            {{-- Footer --}}
            <footer class="ud-footer">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12" style="margin-bottom: 0px;">
                            <div class="ud-footer-widgets">
                                <p class="ud-widget-desc">
                                    &copy; 2024 Bookish Brew. farmanadiya on Github -> <a
                                        href="https://github.com/farmanaditya/bookish-brew.git" target="_blank"><i
                                            class="fab fa-github" style="font-size: 24px; color: white;"></i></a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
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

                // Create a GeoJSON layer for polygon data
                var admin_diy = L.geoJson(null, {
                    style: function(feature) {
                        // Adjust this function to define styles based on your polygon properties
                        var value = feature.properties.admin_diy; // Change this to your actual property name
                        return {
                            fillColor: getColor(value),
                            weight: 2,
                            opacity: 1,
                            color: "red",
                            dashArray: "3",
                            fillOpacity: 0.5,
                        };
                    },
                    onEachFeature: function(feature, layer) {
                        // Adjust the popup content based on your polygon properties
                        var content =
                            "KABUPATEN: " +
                            feature.properties.KAB +
                            "<br>";

                        layer.bindPopup(content);
                    },
                });

                // Function to generate a random color //
                function getRandomColor() {
                    const letters = '0123456789ABCDEF';
                    let color = '#';
                    for (let i = 0; i < 6; i++) {
                        color += letters[Math.floor(Math.random() * 16)];
                    }
                    return color;
                }

                // Load GeoJSON //
                fetch('storage/geojson/admin_diy.geojson')
                    .then(response => response.json())
                    .then(data => {
                        L.geoJSON(data, {
                            style: function(feature) {
                                return {
                                    opacity: 1,
                                    color: "black",
                                    weight: 0.5,
                                    fillOpacity: 0.1,
                                    fillColor: getRandomColor(),
                                };
                            },
                            onEachFeature: function(feature, layer) {
                                var content = "Kabupaten : " + feature.properties.KAB;
                                layer.on({
                                    click: function(e) {
                                        // Fungsi ketika objek diklik
                                        layer.bindPopup(content).openPopup();
                                    },
                                    mouseover: function(e) {
                                        // Tidak ada perubahan warna saat mouse over
                                        layer.bindPopup("Kabupaten : " + feature.properties.KAB, {
                                            sticky: false
                                        }).openPopup();
                                    },
                                    mouseout: function(e) {
                                        // Fungsi ketika mouse keluar dari objek
                                        layer.resetStyle(e
                                            .target); // Mengembalikan gaya garis ke gaya awal
                                        map.closePopup(); // Menutup popup
                                    },
                                });
                            }

                        }).addTo(map);
                    })
                    .catch(error => {
                        console.error('Error loading the GeoJSON file:', error);
                    });


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

    </body>
@endsection
