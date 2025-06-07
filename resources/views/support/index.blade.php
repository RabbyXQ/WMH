<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Support</h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-900 p-6 rounded shadow text-gray-900 dark:text-white">
                <p class="mb-6">Need help? Fill out the form below and we’ll get back to you.</p>

                <!-- Dummy support form -->
                <form onsubmit="handleDummySubmit(event)" class="space-y-6">
                    <!-- Name -->
                    <div>
                        <label for="name" class="block text-sm font-medium">Your Name</label>
                        <input id="name" name="name" type="text" required
                            class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2 text-black" />
                    </div>

                    <!-- Email -->
                    <div>
                        <label for="email" class="block text-sm font-medium">Email Address</label>
                        <input id="email" name="email" type="email" required
                            class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2 text-black" />
                    </div>

                    <!-- Subject -->
                    <div>
                        <label for="subject" class="block text-sm font-medium">Subject</label>
                        <input id="subject" name="subject" type="text" required
                            class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2 text-black" />
                    </div>

                    <!-- Message -->
                    <div>
                        <label for="message" class="block text-sm font-medium">Message</label>
                        <textarea id="message" name="message" rows="4" required
                            class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2 text-black"></textarea>
                    </div>

                    <!-- Submit -->
                    <div>
                        <button type="submit"
                            class="bg-white border border-blue-600 text-blue-600 hover:bg-blue-50 hover:text-blue-800 font-semibold px-6 py-2 rounded-full shadow-sm">
                            Submit Support Request
                        </button>
                    </div>
                </form>

                <!-- Dummy submit script -->
                <script>
                    function handleDummySubmit(event) {
                        event.preventDefault();
                        alert('Support request submitted (dummy action)');
                    }
                </script>
            </div>
        </div>
    </div>
</x-app-layout>
