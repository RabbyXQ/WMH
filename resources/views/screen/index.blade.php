<!-- resources/views/screen/viewer.blade.php -->
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Live Screen Viewer</h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 p-6 rounded shadow">
                <p class="mb-4">Live Android Screen Stream:</p>

                <canvas id="screenCanvas" class="w-full border rounded shadow"></canvas>

                <script>
                    const canvas = document.getElementById('screenCanvas');
                    const ctx = canvas.getContext('2d');
                    const img = new Image();

                    const socket = new WebSocket('ws://YOUR_SERVER_IP:PORT');

                    socket.onmessage = (event) => {
                        img.onload = () => ctx.drawImage(img, 0, 0, canvas.width, canvas.height);
                        img.src = 'data:image/jpeg;base64,' + event.data;
                    };
                </script>
            </div>
        </div>
    </div>
</x-app-layout>
