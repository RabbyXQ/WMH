<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Camera</h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6 text-gray-900 dark:text-gray-100">
                <img src="http://android-device-ip:port/camera/stream" alt="Android Camera Stream" style="max-width:100%; border:1px solid #ccc;">
            </div>
        </div>
    </div>
</x-app-layout>
