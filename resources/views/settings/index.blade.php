<!-- resources/views/settings/index.blade.php -->
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Settings</h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6 text-gray-900 dark:text-gray-100">
                <p class="mb-4">This is the Settings page.</p>

            

                        <button type="button" class="w-full text-blue-600 border border-blue-600 hover:text-blue-800 hover:border-blue-800 px-4 py-2 rounded-full">
                            Reboot Device
                        </button>

                        <button type="button" class="w-full text-blue-600 border border-blue-600 hover:text-blue-800 hover:border-blue-800 px-4 py-2 rounded-full">
                            Reset Device
                        </button>

                        <button type="button" class="w-full text-blue-600 border border-blue-600 hover:text-blue-800 hover:border-blue-800 px-4 py-2 rounded-full">
                            Backup Call Logs, SMS, and Numbers
                        </button>
                    </div>
                </form>

                <script>
                    function addImeiField() {
                        const container = document.getElementById('imei-fields');
                        const div = document.createElement('div');
                        div.className = 'flex items-center space-x-2 mb-2';
                        div.innerHTML = `
                            <input name="imeis[]" type="text" class="border rounded p-2 w-full" placeholder="Enter Device IMEI" required>
                            <button type="button" onclick="this.parentElement.remove()" class="text-red-600 hover:text-red-800 p-2 rounded-full border border-red-600">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H4" />
                                </svg>
                            </button>
                        `;
                        container.appendChild(div);
                    }
                </script>

            </div>
        </div>
    </div>
</x-app-layout>
