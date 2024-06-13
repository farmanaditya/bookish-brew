<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Bookish</title>
</head>

<body>
    <div id="app">
        <x-app-layout>
            <x-slot name="header">
                <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                    {{ __('Dashboard') }}
                </h2>
            </x-slot>

            <div class="container py-12">
                <div class="card shadow">
                    <div class="card-header">
                        <h3 class="card-title">Data</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <div class="alert alert-primary" role="alert">
                                    <h4> <i class="fa-solid fa-location-dot"></i> Total Points</h4>
                                    <p style="font-size: 32pt">{{ $total_points }}</p>
                                </div>
                            </div>
                            <div class="col">
                                <div class="alert alert-success" role="alert">
                                    <h4> <i class="fa-solid fa-route"></i> Total Polylines</h4>
                                    <p style="font-size: 32pt">{{ $total_polylines }}</p>
                                </div>
                            </div>
                            <div class="col">
                                <div class="alert alert-danger" role="alert">
                                    <h4> <i class="fa-solid fa-draw-polygon"></i> Total Polygons</h4>
                                    <p style="font-size: 32pt">{{ $total_polygons }}</p>
                                </div>
                            </div>
                        </div>
                        <hr>


                        <div class="container py-12">
                            <div class="card shadow">
                                <div class="card-header">
                                    <h3 class="card-title"> Book Community </h3>
                                    <div class="mt-4">
                                        <div class="table-responsive">
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th class="text-center">Name</th>
                                                        <th class="text-center">Social Media</th>
                                                        <th class="text-center">Upcoming Event</th>
                                                        <th class="text-center">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <hr>
                        <p> You are login as <b>{{ Auth::user()->name }}</b> email <i>{{ Auth::user()->email }}</i></p>
        </x-app-layout>
    </div>


    <script>
        // Example data
        var communityData = [{
                id: 1,
                name: 'Yogya Book Party',
                social_media: 'https://www.instagram.com/yogbookparty',
                upcoming_event: 'Event A'
            },
            {
                id: 2,
                name: 'Klub Buku Yogyakarta',
                social_media: 'https://www.instagram.com/klubbuku_yogya',
                upcoming_event: 'Event B'
            },
            {
                id: 3,
                name: 'Sunmor Book Club Jogja',
                social_media: 'https://www.instagram.com/sunmorbookclub',
                upcoming_event: 'Event C'
            }
        ];

        // Load data table community
        function loadCommunityData() {
            var tbody = document.querySelector('tbody'); // Ubah ini sesuai dengan selector tbody yang sesuai
            tbody.innerHTML = '';

            communityData.forEach(function(community) {
                var row = `
                    <tr data-id="${community.id}">
                        <td contenteditable>${community.name}</td>
                        <td contenteditable>${community.social_media}</td>
                        <td contenteditable>${community.upcoming_event}</td>
                        <td>
                            <button class="btn btn-primary btn-sm" onclick="saveCommunity(${community.id})">Save</button>
                        </td>
                    </tr>
                `;
                tbody.innerHTML += row;
            });
        }

        // Save data community
        function saveCommunity(communityId) {
            var row = document.querySelector(`tr[data-id="${communityId}"]`);
            var cells = row.querySelectorAll('td[contenteditable]');

            var community = {
                id: communityId,
                name: cells[0].textContent,
                social_media: cells[1].textContent,
                upcoming_event: cells[2].textContent
            };

            console.log('Saving community:', community);
        }

        // Load data saat dokumen siap
        document.addEventListener('DOMContentLoaded', function() {
            loadCommunityData();

        });
    </script>

</body>

</html>
