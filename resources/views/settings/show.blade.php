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
</x-layout>
