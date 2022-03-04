<x-layout>
    <section class="px-6 py-8">
        <main class="max-w-6xl mx-auto mt-10 lg:mt-20 space-y-6">

            <div class="flex items-center lg:justify-center text-xl mt-4">
                <div class="ml-3 text-left">
                    <h5 class="font-bold">
                        Key: {{ $setting->key }}
                    </h5>

                    <h5 class="font-bold">
                        Value: {{ $setting->value }}
                    </h5>

                </div>
            </div>

        </main>

        <section class="px-6 py-8">
            <main class="max-w-6xl mx-auto mt-10 lg:mt-20 space-y-6">
                <div class="flex items-center lg:justify-center text-xl mt-4">
                    <form method="POST" action="/settings/{{ $setting->key }}" class="mt-10">
                        @method('PUT')
                        @csrf

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
                                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-6">
                            <button type="submit" class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500 justify-center">
                                Submit
                            </button>
                        </div>

                    </form>
                </div>

                <div class="flex items-center lg:justify-center text-xl mt-4">
                    <form method="POST" action="/settings/{{ $setting->key }}" class="mt-10">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="bg-red-400 text-white rounded py-2 px-4 hover:bg-red-600">
                            Delete
                        </button>
                    </form>
                </div>

                <div class="col-span-8">
                    <div class="hidden lg:flex justify-between mb-6">
                        <a href="/settings"
                           class="transition-colors duration-300 relative inline-flex items-center text-lg hover:text-blue-500">
                            <x-icon name="left-arrow"></x-icon>
                            Back to Settings
                        </a>
                    </div>
                </div>
            </main>
        </section>
    </section>
</x-layout>
