<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
    {{-- leaflet css --}}
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />

    {{-- Bootstrap CSS --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

    {{-- FontAwesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    @yield('styles')
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('storage/images/icon.png') }}" alt="" style="width: 30px; height: auto;">
                {{ $title }}
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('index') }}"> <i
                                class="fa-solid fa-house"></i> Home</a>
                        {{-- </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('table') }}"><i class="fa-solid fa-table"></i> Tabel Point</a>
                    </li> --}}

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false"> <i class="fa-solid fa-table"></i>
                            Table
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ route('table-point') }}">Tabel Point</a></li>
                            <li><a class="dropdown-item" href="{{ route('table-polyline') }}">Tabel Polyline</a></li>
                            {{-- <li><hr class="dropdown-divider"></li> --}}
                            <li><a class="dropdown-item" href="{{ route('table-polygon') }}">Tabel Polygon</a></li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#infoModal"> <i
                                class="fa-solid fa-circle-info"></i> Info</a>
                    </li>



                    @if (Auth::check())
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('dashboard') }}"> <i class="fa-solid fa-gauge"></i></i>
                                Dashboard</a>
                        </li>

                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <li class="nav-item">
                                <button class="nav-link text-danger" type="submit"> <i
                                        class="fa-solid fa-right-from-bracket"></i></i>
                                    Logout</a>
                            </li>
                        </form>
                    @else
                        <li class="nav-item">
                            <a class="nav-link text-primary" href="{{ route('login') }}"> <i
                                    class="fa-solid fa-right-to-bracket"></i>
                                Login</a>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>

    <!-- Modal -->
    <div class="modal fade" id="infoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Info</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h2>Bookish Brew</h2>
                    <p>This project is developed to fulfill the final assignment requirement for the Advanced Web
                    Geospatial Programming (PGWL) course, a WebGIS project developed with Laravel. Discover bookstores
                    and book-themed coffee shops throughout Yogyakarta.</p>
                    Farmana Ditya Alya Safitri <br>
                    22/493937/SV/20758 <br>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

                </div>
            </div>
        </div>
    </div>



    @yield('content')

    {{-- leaflet js --}}
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>

    {{-- Bootstrap JS --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    {{-- jQuery --}}
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

    @include('components.toast')

    @yield('script')

    {{-- <!-- Footer Section -->
    <footer class="ud-footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ud-footer-widgets">
                        <p class="ud-widget-desc">
                            &copy; 2024 Bookish Brew. All Rights Reserved.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer Section --> --}}


</body>


</html>
