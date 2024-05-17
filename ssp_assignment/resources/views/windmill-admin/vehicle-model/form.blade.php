<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />


    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles
</head>
<body>


<div class="font-sans text-gray-900 antialiased">
    <div class="container mx-auto mt-10 mb-10">
        <div class="space-y-10 divide-y divide-gray-900/10">

            <div class="grid grid-cols-1 gap-x-8 gap-y-8 md:grid-cols-3">
                <div class="px-4 sm:px-0">
                    @if ($purpose == 'Create Vehicle Model')
                        <h2 class="text-base font-semibold leading-7 text-gray-900">
                            Create Vehicle Model
                        </h2>
                        <p class="mt-1 text-sm leading-6 text-gray-600">
                            Create a new vehicle model by filling the below details.
                        </p>
                    @endif


                </div>

                <form method="POST" action="{{ route('vehicle-model.store') }}"
                      class="bg-white shadow-sm ring-1 ring-gray-900/5 sm:rounded-xl md:col-span-2">

                    @csrf

                    <div class="px-4 py-6 sm:p-8">
                        <div class="grid max-w-2xl grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">

                            <div class="col-span-full">
                                <label for="year" class="block text-sm font-medium leading-6 text-gray-900">
                                    Model
                                </label>
                                <div class="mt-2">
                                    <input id="model" name="model" rows="3"
                                           class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"/>
                                </div>
                                <p class="mt-3 text-sm leading-6 text-gray-600">
                                    Model of the vehicle.
                                </p>
                            </div>

                        </div>
                    </div>
                    <div class="flex items-center justify-end gap-x-6 border-t border-gray-900/10 px-4 py-4 sm:px-8">
                        <button type="button" class="text-sm font-semibold leading-6 text-gray-900"
                                onclick="backtoUserList()">Cancel
                        </button>
                        <button type="submit"
                                class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                            Save
                        </button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>


<script>
    function backtoUserList() {
        window.location.href = "{{ route('vehicle-model.index') }}";
    }
</script>

</body>
</html>
