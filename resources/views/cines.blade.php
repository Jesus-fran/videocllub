@extends('index')
{{-- const longitud = {!! json_encode($long_dest) !!};
const latitud = {!! json_encode($lat_dest) !!}; --}}
@section('content')
    <br><br>
    <h5>¿Cómo llegar al cine de Ocosingo?</h5>
    <br><br>
    <div id="map"></div>
    <br><br>
    <script async
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCGtREyM9Lhjwb3Hxayfn6bEZOY5vgaIJI&callback=initMap"></script>

    <script>
        let latitude = 0;
        let longitude = 0;

        if ("geolocation" in navigator) {
            navigator.geolocation.getCurrentPosition(function(position) {
                latitude = position.coords.latitude;
                longitude = position.coords.longitude;
                console.log("Latitud: " + latitude + ", Longitud: " + longitude);
            });
        } else {
            console.log("La geolocalización no está disponible en este navegador.");
        }

        var map;

        function initMap() {
            map = new google.maps.Map(document.getElementById('map'), {
                center: {
                    lat: 40.349650,
                    lng: -3.695202
                },
                zoom: 13
            });
            const longitud = "-92.046420586242466"
            const latitud = "16.731540320524086"
            console.log(longitud);
            console.log(latitud);
            //Begin Routing
            const directionsService = new google.maps.DirectionsService();
            const directionsRenderer = new google.maps.DirectionsRenderer();
            directionsRenderer.setMap(map);
            const request = {
                // 16.915506683042203, -92.0927208306507
                origin: new google.maps.LatLng(16.915506683042203, -92.0927208306507),
                destination: new google.maps.LatLng(latitude, longitude),
                travelMode: 'WALKING'
            };
            directionsService.route(request, response => {
                directionsRenderer.setDirections(response);
            });
        }
    </script>
@endsection
