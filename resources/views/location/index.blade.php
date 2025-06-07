<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Visited Locations (Dummy Data)</h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6 text-gray-900 dark:text-gray-100">
                <div id="map" style="height: 500px;"></div>
            </div>
        </div>
    </div>

    <!-- Leaflet.js CDN -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const map = L.map('map').setView([37.7749, -122.4194], 13); // Centered at San Francisco

            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                maxZoom: 18,
                attribution: '© OpenStreetMap'
            }).addTo(map);

            // Dummy coordinate data
            const coordinates = [
                { latitude: 37.7749, longitude: -122.4194 },
                { latitude: 37.7755, longitude: -122.4180 },
                { latitude: 37.7760, longitude: -122.4170 },
                { latitude: 37.7768, longitude: -122.4160 },
                { latitude: 37.7772, longitude: -122.4150 },
            ];

            const latlngs = coordinates.map(coord => [coord.latitude, coord.longitude]);

            latlngs.forEach(([lat, lng], index) => {
                L.circleMarker([lat, lng], {
                    radius: 5,
                    color: 'red',
                    fillColor: 'red',
                    fillOpacity: 0.7
                }).addTo(map)
                .bindTooltip(`Point ${index + 1}`, { permanent: false });
            });

            // Draw a line between all points
            L.polyline(latlngs, { color: 'blue', weight: 2, opacity: 0.5 }).addTo(map);
        });
    </script>
</x-app-layout>
