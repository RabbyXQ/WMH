<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Microphone</h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 p-6 rounded shadow text-gray-900 dark:text-gray-100">
                <p class="mb-6 text-lg">Microphone Control Panel (Dummy)</p>

                <div class="space-y-4">
                    <!-- Mute -->
                    <button type="button"
                        onclick="alert('Microphone Muted (Dummy Action)')"
                        class="w-full text-red-600 border border-red-600 hover:text-red-800 hover:border-red-800 px-4 py-2 rounded-full">
                        Mute Microphone
                    </button>

                    <!-- Unmute -->
                    <button type="button"
                        onclick="alert('Microphone Unmuted (Dummy Action)')"
                        class="w-full text-blue-600 border border-blue-600 hover:text-blue-800 hover:border-blue-800 px-4 py-2 rounded-full">
                        Unmute Microphone
                    </button>
                </div>

                <!-- Real-time Audio to Text -->
                <div class="mt-10">
                    <p class="text-lg mb-2">Real-time Audio to Text:</p>

                    <div class="bg-gray-100 dark:bg-gray-700 p-4 rounded h-40 overflow-y-auto">
                        <p id="transcript" class="text-sm whitespace-pre-wrap"></p>
                    </div>

                    <div class="mt-4 flex space-x-4">
                        <button type="button"
                            onclick="startRecognition()"
                            class="text-green-600 border border-green-600 hover:text-green-800 hover:border-green-800 px-4 py-2 rounded-full">
                            Start Listening
                        </button>

                        <button type="button"
                            onclick="stopRecognition()"
                            class="text-yellow-600 border border-yellow-600 hover:text-yellow-800 hover:border-yellow-800 px-4 py-2 rounded-full">
                            Stop Listening
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Speech Recognition Script -->
    <script>
        let recognition;
        let isRecognizing = false;

        if ('webkitSpeechRecognition' in window) {
            recognition = new webkitSpeechRecognition();
            recognition.continuous = true;
            recognition.interimResults = true;
            recognition.lang = 'en-US';

            recognition.onresult = function (event) {
                let finalTranscript = '';
                for (let i = event.resultIndex; i < event.results.length; ++i) {
                    const transcript = event.results[i][0].transcript;
                    if (event.results[i].isFinal) {
                        finalTranscript += transcript + '\n';
                    }
                }
                document.getElementById('transcript').innerText += finalTranscript;
            };

            recognition.onerror = function (event) {
                console.error('Speech recognition error:', event.error);
            };
        } else {
            alert("Your browser doesn't support speech recognition.");
        }

        function startRecognition() {
            if (recognition && !isRecognizing) {
                recognition.start();
                isRecognizing = true;
            }
        }

        function stopRecognition() {
            if (recognition && isRecognizing) {
                recognition.stop();
                isRecognizing = false;
            }
        }
    </script>
</x-app-layout>
