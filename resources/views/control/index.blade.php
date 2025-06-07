<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Microphone</h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 p-6 rounded shadow text-gray-900 dark:text-gray-100">
                <p class="mb-6 text-lg">Microphone Control Panel (Dummy)</p>

                <div class="space-y-4">
                    <!-- Microphone Controls -->

                    <button type="button" onclick="alert('Microphone Muted (Dummy Action)')" class="w-full text-red-600 border border-red-600 hover:text-red-800 hover:border-red-800 px-4 py-2 rounded-full">
                        Mute Microphone
                    </button>

                    <button type="button" onclick="alert('Microphone Unmuted (Dummy Action)')" class="w-full text-blue-600 border border-blue-600 hover:text-blue-800 hover:border-blue-800 px-4 py-2 rounded-full">
                        Unmute Microphone
                    </button>

                    <!-- Divider -->
                    <hr class="my-6 border-t border-gray-400 dark:border-gray-600" />

                    <!-- Erase/Reset Actions -->
                    <p class="text-lg">Erase Actions (Dummy)</p>

                    <button type="button" onclick="alert('Phone Erased (Dummy Action)')" class="w-full text-red-700 border border-red-700 hover:text-red-900 hover:border-red-900 px-4 py-2 rounded-full">
                        Erase Phone
                    </button>

                    <button type="button" onclick="alert('Photos Erased (Dummy Action)')" class="w-full text-red-500 border border-red-500 hover:text-red-700 hover:border-red-700 px-4 py-2 rounded-full">
                        Erase Photos
                    </button>

                    <button type="button" onclick="alert('Files Erased (Dummy Action)')" class="w-full text-red-400 border border-red-400 hover:text-red-600 hover:border-red-600 px-4 py-2 rounded-full">
                        Erase Files
                    </button>

                    <button type="button" onclick="alert('Factory Reset Initiated (Dummy Action)')" class="w-full text-red-800 border border-red-800 hover:text-red-900 hover:border-red-900 px-4 py-2 rounded-full">
                        Factory Reset
                    </button>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
