@extends('layouts.materialyou')

<head>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css"
        integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI=" crossorigin="" />
    <!-- Make sure you put this AFTER Leaflet's CSS -->
    <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js"
        integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM=" crossorigin=""></script>
    <script src="{{ asset('assets/js/leaflet.ajax.js') }}"></script>
</head>

@section('content')
    <div class="container">
        <div class="row justify-content-center">

            <div class="p-5 mb-4 bg-light rounded-3">
                <div class="container-fluid py-5">
                    <h1 class="display-5 fw-bold">Welcome to Kemang District</h1>
                    <p class="col-md-8 fs-4">Geographically located in the northwestern part of Bogor
                        Regency, with a distance of 23 km from the center of Bogor City (point taken from the mayor's
                        office). Kemang District is a part of Bogor Regency, West Java Province with an area of ​​33.61
                        km2, consisting of 9 villages or sub-districts.</p>
                    <button class="btn btn-primary btn-lg" type="button">Explore now</button>
                </div>
            </div>

            <div class="row align-items-md-stretch">
                <div class="col-md-6">
                    <div class="h-64 p-5 text-bg-primary rounded-3">
                        <h2>Tegal Village</h2>
                        <p>Find Tegal typical batik souvenirs and unique snacks here!</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="h-64 p-5 bg-light border rounded-3">
                        <h2>Bojong Village</h2>
                        <p>Explore Bojong has many tourism recommendations!</p>
                    </div>
                </div>
            </div>


            <div class="mt-5">
                <h1 class="display-5 fw-bold">Find places</h1>
                <div id="map">
                    <script>
                        const map = L.map('map').setView([-6.5029305, 106.7371722], 13);

                        const tiles = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
                            maxZoom: 19,
                            attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
                        }).addTo(map);

                        const geojsonlayer = new L.GeoJSON.AJAX("{{ asset('assets/maps/kemang.geojson') }}").addTo(map);
                    </script>

                    @foreach ($places->get() as $key => $value)
                        <script>
                            var marker = L.marker([{{ $value->latitude }}, {{ $value->longitude }}]).addTo(map)
                                .bindPopup('<b>{{ $value->name }}</b><br />{{ $value->category->name }} at {{ $value->village->name }}');
                        </script>
                    @endforeach

                </div>
            </div>

            <div class="card border-0 shadow-lg p-5">
                <div class="">
                    <form action="{{ route('landing') }}" method="get">
                        @csrf
                        <input type="search" name="search" class="form-control py-3" placeholder="Search places">
                        @if (request('search'))
                            <div class="d-flex flex-row align-items-baseline my-3">
                                <p>Showing {{ $places->count() }} results for <span
                                        class="text-primary fw-bold">{{ request('search') }}</span></p>
                                <a class="btn btn-secondary ms-2" href="{{ route('landing') }}">
                                    Clear
                                </a>
                            </div>
                        @endif
                    </form>
                </div>

                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Address</th>
                            <th scope="col">Category</th>
                            <th scope="col">Smart Payment</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($places->paginate(10) as $key => $value)
                            <tr>
                                <th scope="row">{{ $places->paginate(10)->firstItem() + $key }}</th>
                                <td>{{ $value->name }}</td>
                                <td>{{ $value->address }}</td>
                                <td>{{ $value->category->name }}</td>
                                <td>
                                    @if ($value->has_smart_payment_support)
                                        Yes
                                    @else
                                        Not yet
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $places->paginate(10)->links() }}
            </div>

        </div>
    </div>
    </div>
@endsection

<style>
    #map {
        height: 615px;
    }
</style>
