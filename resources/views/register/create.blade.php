<x-layout>
    <section class ="px-6 py-8">
        <main class="max-w-lg mx-auto mt-10 bg-gray-100 border border-gray-200 p-6 rounded-xl">
            <h1 class="text-center font-bold text-xl">Register Now!</h1>
            <div class="mb-6">
                <label for="name" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                    Name
                </label>
                <input class="border border-gray-400 p-2 w-full rounded"
                type="text"
                name="name"
                id="name"
                required
                >
            </div>

            <form method="POST" action="/register" class="mt-10">
                 <div class="mb-6">
                     <label for="username" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                         Username
                     </label>

                     <input class="border border-gray-400 p-2 w-full rounded"
                     type="text"
                     name="username"
                     id="username"
                     required
                     >
                 </div>
            </form>

            <div class="mb-6">
                <label for="password" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                    Password
                </label>
                <input class="border border-gray-400 p-2 w-full rounded"
                type="password"
                name="password"
                id="password"
                required
                >
            </div>

            <div class="text-center  mb-6">
                <button type="submit" class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500">
                    Submit
                </button>
            </div>

        </main>
    </section>
</x-layout>
