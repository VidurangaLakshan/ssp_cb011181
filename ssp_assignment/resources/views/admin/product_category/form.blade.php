{{-- <x-guest-layout>
    <form action="{{  route('product-category.store') }}" method="post">
        @csrf

        <div>
            <label for="name" value="{{ __('Name') }}" />
            <input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required
                autofocus autocomplete="name" />
        </div>

        <div>
            <label for="slug" value="{{ __('Slug') }}" />
            <input id="slug" class="block mt-1 w-full"
            type="text" name="slug" :value="old('slug')" required
                autofocus autocomplete="slug" />
        </div>


        <button type="submit">
            Save
        </button>
    </form>
</x-guest-layout> --}}

<x-guest-layout>
    <div class="container mx-auto mt-10 mb-10">
        <div class="space-y-10 divide-y divide-gray-900/10">

            <div class="grid grid-cols-1 gap-x-8 gap-y-8 md:grid-cols-3">
                <div class="px-4 sm:px-0">
                    @if ($purpose == 'Create Product Category')
                        <h2 class="text-base font-semibold leading-7 text-gray-900">
                            Create Product Category
                        </h2>
                        <p class="mt-1 text-sm leading-6 text-gray-600">
                            Create a new product category by filling the below details.
                        </p>
                        @else
                        <h2 class="text-base font-semibold leading-7 text-gray-900">
                            Update Product Category
                        </h2>
                        <p class="mt-1 text-sm leading-6 text-gray-600">
                            Update the product category's details.
                        </p>
                    @endif
                    
                    
                </div>

                <form method="post"
                    @if ($category->id) action="{{ route('product-category.update', $category->id) }}"
                    @else
                    action="{{ route('product-category.store') }}" @endif
                    class="bg-white shadow-sm ring-1 ring-gray-900/5 sm:rounded-xl md:col-span-2">

                    @csrf
                    @if ($category->id)
                        @method('PUT')
                    @endif

                    <div class="px-4 py-6 sm:p-8">
                        <div class="grid max-w-2xl grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">

                            <div class="col-span-full">
                                <label for="name" class="block text-sm font-medium leading-6 text-gray-900">
                                    Name
                                </label>
                                <div class="mt-2">
                                    <input id="name" name="name" rows="3"
                                        value="{{ old('name', $category->name) }}"
                                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" />
                                </div>
                                <p class="mt-3 text-sm leading-6 text-gray-600">
                                    Name of the product category.
                                </p>
                                @error('name')
                                    <p class="mt-3 text-sm leading-6 text-red-600">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>

                            <div class="col-span-full">
                                <label for="slug" class="block text-sm font-medium leading-6 text-gray-900">
                                    URL
                                </label>
                                <div class="mt-2">
                                    <input id="slug" name="slug" rows="3"
                                        value="{{ old('slug', $category->slug) }}"
                                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" />
                                </div>
                                <p class="mt-3 text-sm leading-6 text-gray-600">
                                    URL of the product category.
                                </p>
                                @error('slug')
                                    <p class="mt-3 text-sm leading-6 text-red-600">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>

                            {{-- <div class="col-span-full">
                                <label for="email" class="block text-sm font-medium leading-6 text-gray-900">
                                    Email
                                </label>
                                <div class="mt-2">
                                    <input id="email" name="email" type="email" rows="3"
                                        value="{{ old('email', $category->name) }}"
                                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" />
                                </div>
                                <p class="mt-3 text-sm leading-6 text-gray-600">
                                    Email of the user.
                                </p>
                                @error('email')
                                    <p class="mt-3 text-sm leading-6 text-red-600">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div> --}}

                            {{-- <div class="col-span-full">
                                <label for="role" class="block text-sm font-medium leading-6 text-gray-900">
                                    Role
                                </label>
                                <div class="mt-2">
                                    <select id="role" name="role"
                                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                        @foreach ($roles as $role)
                                            <option value="{{ $role->value }}"
                                                {{ ($user && old('role', $user?->role?->value) == $role->value ? 'selected' : '') }}>
                                                {{ ucwords(str_replace('_', ' ', Str::snake($role->name))) }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <p class="mt-3 text-sm leading-6 text-gray-600">
                                    Role of the user.
                                </p>
                                @error('role')
                                    <p class="mt-3 text-sm leading-6 text-red-600">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div> --}}

                        </div>
                    </div>
                    <div class="flex items-center justify-end gap-x-6 border-t border-gray-900/10 px-4 py-4 sm:px-8">
                        <button type="button" class="text-sm font-semibold leading-6 text-gray-900" onclick="backtoCategoryList()">Cancel</button>
                        <button type="submit"
                            class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
                    </div>
                </form>
            </div>

        </div>
    </div>

    <script>
        function backtoCategoryList() {
            window.location.href = "{{ route('product-category.index') }}";
        }
    </script>

</x-guest-layout>
