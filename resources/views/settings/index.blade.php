<x-layout>
    {{ $settings }}

    <section class="px-6 py-8">
        <main class="max-w-lg mx-auto mt-10 bg-gray-100 border border-gray-200 p-6 rounded-xl">
            <h1 class="text-center font-bold text-xl">Create a new setting</h1>

            <form method="POST" action="/settings/new" class="mt-10">
                @csrf
                <div class="mb-6">
                    <label for="key" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                        Key
                    </label>
                    <input class="border border-gray-400 p-2 w-full rounded"
                           type="text"
                           name="key"
                           id="key"
                           required
                    >
                    @error('key')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="value" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                        Value
                    </label>
                    <input class="border border-gray-400 p-2 w-full rounded"
                           type="text"
                           name="value"
                           id="value"
                           required
                    >
                    @error('value')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <button type="submit" class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500">
                        Submit
                    </button>
                </div>
            </form>
        </main>
    </section>
</x-layout>
