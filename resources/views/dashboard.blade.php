<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12 max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-8">

        {{-- App Description --}}
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6 text-gray-900 dark:text-gray-100">
            <h3 class="text-lg font-semibold mb-2">About Where is my hat</h3>
            <p>
                <strong>Where is my hat</strong> is an application designed to help you locate and access your lost phone remotely. 
                It offers features such as live location tracking, remote camera access, call and SMS backup, and device control 
                to increase the chances of recovering your device safely and efficiently.
            </p>
        </div>

        {{-- Recent Device Locations --}}
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6 text-gray-900 dark:text-gray-100">
            <h3 class="text-lg font-semibold mb-2">Recent Locations</h3>
            <ul class="list-disc list-inside">
                <li>San Francisco, CA — 10 minutes ago</li>
                <li>Oakland, CA — 1 hour ago</li>
                <li>Berkeley, CA — 3 hours ago</li>
            </ul>
        </div>

        {{-- Camera Access --}}
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6 text-gray-900 dark:text-gray-100">
            <h3 class="text-lg font-semibold mb-2">Camera Status</h3>
            <p>Last accessed 15 minutes ago. <button class="text-blue-600 hover:underline">View Live Feed</button></p>
        </div>

        {{-- Backup Status --}}
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6 text-gray-900 dark:text-gray-100">
            <h3 class="text-lg font-semibold mb-2">Backup Status</h3>
            <p>Call logs and SMS were last backed up 1 day ago.</p>
            <button class="px-3 py-1 bg-green-600 rounded text-white hover:bg-green-700">Backup Now</button>
        </div>

        {{-- Device Controls --}}
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6 text-gray-900 dark:text-gray-100 space-x-3">
            <h3 class="text-lg font-semibold mb-2">Device Controls</h3>
            <button class="px-4 py-2 bg-red-600 rounded text-white hover:bg-red-700">Reboot Device</button>
            <button class="px-4 py-2 bg-yellow-600 rounded text-white hover:bg-yellow-700">Reset Device</button>
            <button class="px-4 py-2 bg-blue-600 rounded text-white hover:bg-blue-700">Backup Call Logs & SMS</button>
        </div>

    </div>
</x-app-layout>
