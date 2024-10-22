<div>
    @section('section-title-header')
        {{ __($title) }}
    @endsection

{{--    <button class="text-lg p-2 m-2 bg-green-200 rounded-lg" id="getLocation">GET LOCATION🗺️</button>--}}

{{--    <div id="map" style="height: 700px;" wire:ignore></div>--}}
{{--        <x-maps-leaflet--}}
{{--            :markers="[['lat' => 20.07145, 'long' => -98.69709]]"--}}
{{--            :centerPoint="['lat' => 20.07, 'long' => -98.69]"--}}
{{--            :zoomLevel="16"--}}
{{--        ></x-maps-leaflet>--}}

{{--        <div id="map" style="height: 500px;" wire:ignore></div>--}}

{{--        <style>#map{height:700px;}</style>--}}
        <div id="map" style="height: 600px;" wire:ignore></div>

    <script>
        var mylat = 20.07145;
        var mylon = -98.69709;
        var myzoom = 15;


        // function initMap() {

            // var mk = L.marker([mylat,mylon]).addTo(mymap);
            // var lc = L.control.locate({
            //     position: 'topleft',
            //     flyTo: true,
            //     strings: {
            //         title: "Obtener posición"
            //     },
            //     onLocationError: showError,
            //     onLocationFound: function(e) {
            //         var lat = e.latitude;
            //         var lng = e.longitude;
            //         Livewire.emit('saveCoordinate', lat, lng);
            //         addMarker(lat, lng, true);
            //     }
            // }).addTo(mymap);

            {{--const coordinates = @json($coordinates);--}}
            {{--coordinates.forEach(function(coordinate) {--}}
            {{--    var color = state ? 'green' : 'red';--}}
            {{--    var marker = L.circleMarker([latitude, longitude], {--}}
            {{--        color: color,--}}
            {{--        radius: 8--}}
            {{--    }).addTo(mymap);--}}
            {{--    // marker.bindPopup("Status: " + (state ? "True" : "Lat: " + lat + " Long: " + lng));--}}

            {{--    // addMarker(coordinate.latitude, coordinate.longitude, coordinate.status);--}}
            {{--});--}}

        // };

        // window.onload = function(){
        //     initMap();
        //
        // };


        {{--const coordinates = @json($coordinates);--}}
        {{--coordinates.forEach(function(coordinate) {--}}
        {{--         addMarker(coordinate.latitude, coordinate.longitude, coordinate.status);--}}
        {{--});--}}

        // function addMarker(lat, lng, state) {
        //
        //     var color = state ? 'green' : 'red';
        //     var marker = L.circleMarker([lat, lng], {
        //         color: color,
        //         radius: 8
        //     }).addTo(mymap);
        //     marker.bindPopup("Status: " + (state ? "True" : "Lat: " + lat + " Long: " + lng));
        // }

        //     var mapId = "defaultMapId";
        // var map = L.map('map').setView([20.07145, -98.69709], 15);
        // L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        //     attribution: '© OpenStreetMap contributors',
        //     minZoom: 1,
        //     maxZoom: 20,
        // }).addTo(map);

        // L.control.locate({
        //     position: 'topleft',
        //     flyTo: true,
        //     strings: {
        //         title: "Show me where I am!"
        //     },
        //     onLocationError: showError,
        //     onLocationFound: function(e) {
        //         var lat = e.latitude;
        //         var lng = e.longitude;
        //         Livewire.emit('saveCoordinate', lat, lng);
        //         addMarker(lat, lng, true);
        //     }
        // }).addTo(map);

        // Function to add markers




        // function showPosition(position) {
        //     var lat = position.coords.latitude;
        //     var lng = position.coords.longitude;
        //     Livewire.dispatch('saveCoordinate', { latitude: lat, longitude:lng })
        //     alert("Ubicación actual: \nLatitud: " + lat + "\nLongitud: " + lng);
        //     map.setView([lat, lng], 15); // Mover el mapa a la ubicación actual
        //     addMarker(lat, lng, true)
        //     L.marker([lat, lng]);
        // }

        // function showError(error) {
        //     const errorMessages = {
        //         1: "Permiso denegado para acceder a la ubicación.",
        //         2: "La ubicación no está disponible.",
        //         3: "La solicitud para obtener la ubicación ha caducado.",
        //         0: "Ha ocurrido un error desconocido."
        //     };
        //     alert(errorMessages[error.code] || "Error desconocido.");
        //     console.error("Error de geolocalización: ", error);
        // }

        // document.addEventListener('livewire:initialized', () => {
        //     document.getElementById("getLocation").addEventListener("click", function() {
        //         Livewire.dispatch('saveCoordinate', { latitude: 20.0706700, longitude:-98.6970900 })
        //
        //         // if (navigator.geolocation) {
        //         //     navigator.geolocation.getCurrentPosition(showPosition, showError);
        //         // } else {
        //         //     alert("Geolocalización no es soportada por este navegador.");
        //         // }
        //     });
        // })

        document.addEventListener('DOMContentLoaded', function () {
            var map = L.map('map').setView([20.07145, -98.69709], 15);
            // var mk = L.marker([mylat,mylon]).addTo(map);
            // Add OpenStreetMap tiles
            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '© OpenStreetMap contributors',
                maxZoom: 19,
            }).addTo(map);

            // Add the locate control button
            L.control.locate({
                position: 'topleft',  // position of the button
                flyTo: true,  // Fly to the user's location
                strings: {
                    title: "Show me where I am!"  // Title of the button
                },
                onLocationError: showError, // Handle geolocation errors
                onLocationFound: function(e) {
                    var lat = e.latitude;
                    var lng = e.longitude;
                    Livewire.emit('saveCoordinate', lat, lng); // Pass location to Livewire
                    addMarker(lat, lng, true); // Add marker to the map
                }
            }).addTo(map);

            // Function to add markers
            function addMarker(lat, lng, state) {
                var color = state ? 'green' : 'red';
                var marker = L.circleMarker([lat, lng], {
                    color: color,
                    radius: 8
                }).addTo(map);
                marker.bindPopup("Lat: " + lat + " Long: " + lng);
                // if (state){
                //     L.marker([mylat,mylon]).addTo(map);
                // }
            }

            // Load existing markers from Livewire
            const coordinates = @json($coordinates);
            coordinates.forEach(function(coordinate) {
                addMarker(coordinate.latitude, coordinate.longitude, coordinate.status);
            });

            // Error handler for geolocation
            function showError(error) {
                const errorMessages = {
                    1: "Permission denied for accessing location.",
                    2: "Location information is unavailable.",
                    3: "The request to get the location timed out.",
                    0: "An unknown error occurred."
                };
                alert(errorMessages[error.code] || "Unknown error.");
            }
        });

    </script>


</div>
