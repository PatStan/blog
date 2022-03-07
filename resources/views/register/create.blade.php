<x-layout>
    <section class="px-6 py-8">
        <main class="max-w-lg mx-auto mt-10">
            <x-panel>
                <h1 class="text-center font-bold text-xl">Register Now!</h1>

                <form method="POST" action="/register" class="mt-10">
                    @csrf

                    <x-form.input name="name" type="text" autocomplete="name"/>
                    <x-form.input name="username" autocomplete="username"/>
                    <x-form.input name="email" type="email" autocomplete="email"/>
                    <x-form.input name="password" type="password" autocomplete="password"/>


                    <div class="mb-6">
                        <button type="submit" class="bg-blue-500 text-white rounded-xl py-2 px-4 hover:bg-blue-600">
                            Submit
                        </button>
                    </div>
                </form>
            </x-panel>
        </main>
    </section>
</x-layout>
