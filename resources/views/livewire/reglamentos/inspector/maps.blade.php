<div>
    @section('section-title-header')
        {{ __($title) }}
    @endsection

    <button class="text-lg p-2 m-2 bg-green-200 rounded-lg" id="getLocation">GET LOCATION🗺️</button>

    <x-maps-leaflet
        :markers="[['lat' => 20.07145, 'long' => -98.69709]]"
        :centerPoint="['lat' => 20.07, 'long' => -98.69]"
        :zoomLevel="16"
    ></x-maps-leaflet>

    <div id="map" style="height: 500px;"></div>

    <script>
        var mapId = "defaultMapId";
        var map = L.map('map').setView([20.07145, -98.69709], 15);
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '© OpenStreetMap contributors',
            maxZoom: 19,
        }).addTo(map);

        function addMarker(lat, lng, state) {
            var color = state ? 'green' : 'red';
            var marker = L.circleMarker([lat, lng], {
                color: color,
                radius: 8
            }).addTo(map);
            marker.bindPopup("Status: " + (state ? "True" : "Lat: " + lat + " Long: " + lng));
        }

        const initialMarkers = [
            { lat: 20.07145, lng: -98.69709, state: true },
            { lat: 20.07245, lng: -98.69709, state: false },
            { lat: 20.07445, lng: -98.69556, state: false },
            { lat: 20.07645, lng: -98.69609, state: false },
            { lat: 20.07245, lng: -98.69609, state: true },
            { lat: 20.07345, lng: -98.69409, state: true },
            { lat: 20.07045, lng: -98.69109, state: true }
        ];

        initialMarkers.forEach(marker => addMarker(marker.lat, marker.lng, marker.state));

        // Manejo de geolocalización
        document.getElementById("getLocation").addEventListener("click", function() {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(showPosition, showError);
            } else {
                alert("Geolocalización no es soportada por este navegador.");
            }
        });


        function showPosition(position) {
            var lat = position.coords.latitude;
            var lng = position.coords.longitude;
            alert("Ubicación actual: \nLatitud: " + lat + "\nLongitud: " + lng);
            map.setView([lat, lng], 15); // Mover el mapa a la ubicación actual
            addMarker(lat, lng, true)
            L.marker([lat, lng]);
        }

        function showError(error) {
            const errorMessages = {
                1: "Permiso denegado para acceder a la ubicación.",
                2: "La ubicación no está disponible.",
                3: "La solicitud para obtener la ubicación ha caducado.",
                0: "Ha ocurrido un error desconocido."
            };
            alert(errorMessages[error.code] || "Error desconocido.");
            console.error("Error de geolocalización: ", error);
        }


    </script>
</div>
