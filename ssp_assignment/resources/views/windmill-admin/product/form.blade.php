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
                    @if ($purpose == 'Create Product')
                        <h2 class="text-base font-semibold leading-7 text-gray-900">
                            Create Product
                        </h2>
                        <p class="mt-1 text-sm leading-6 text-gray-600">
                            Create a new product by filling the below details.
                        </p>
                    @else
                        <h2 class="text-base font-semibold leading-7 text-gray-900">
                            Update Product
                        </h2>
                        <p class="mt-1 text-sm leading-6 text-gray-600">
                            Update the product's details.
                        </p>
                    @endif


                </div>

                <form method="POST"
                        enctype="multipart/form-data"
                      @if ($product->id) action="{{ route('product.update', $product->id) }}"
                      @else
                          action="{{ route('product.store') }}" @endif
                      class="bg-white shadow-sm ring-1 ring-gray-900/5 sm:rounded-xl md:col-span-2">

                    @csrf
                    @if ($product->id)
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
                                           value="{{ old('name', $product->name) }}"
                                           class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"/>
                                </div>
                                <p class="mt-3 text-sm leading-6 text-gray-600">
                                    Name of the product.
                                </p>
                                @error('name')
                                <p class="mt-3 text-sm leading-6 text-red-600">
                                    {{ $message }}
                                </p>
                                @enderror

                            </div>

                            <div class="col-span-full">
                                <label for="slug" class="block text-sm font-medium leading-6 text-gray-900">
                                    Slug
                                </label>
                                <div class="mt-2">
                                    <input id="slug" name="slug" rows="3"
                                           value="{{ old('slug', $product->slug) }}"
                                           class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"/>
                                </div>
                                <p class="mt-3 text-sm leading-6 text-gray-600">
                                    Url of the product.
                                </p>
                                @error('slug')
                                <p class="mt-3 text-sm leading-6 text-red-600">
                                    {{ $message }}
                                </p>
                                @enderror

                            </div>

                            <div class="col-span-full">
                                <label for="category" class="block text-sm font-medium leading-6 text-gray-900">
                                    Category
                                </label>
                                <div class="mt-2">
                                    <select id="category" name="category"
                                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}"
                                                {{ ($category && old('name', $category?->category) == $category->name ? 'selected' : '') }}>
                                                {{ $category->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <p class="mt-3 text-sm leading-6 text-gray-600">
                                    Category of the product.
                                </p>
                                @error('category')
                                <p class="mt-3 text-sm leading-6 text-red-600">
                                    {{ $message }}
                                </p>
                                @enderror
                            </div>

                            @if (strpos(url()->current(), 'edit'))
                                <div class="col-span-full">
                                    <label for="image" class="block text-sm font-medium leading-6 text-gray-900">Image 1 Preview</label>
                                    <div class="my-2 flex justify-center rounded-lg border border-dashed border-gray-900/25 px-6 py-10">
                                        <div class="text-center">
                                            <img src="{{ asset($product->image) }}" style="border-radius: 15px">
                                        </div>
                                    </div>
                                </div>
                            @endif

                            <div class="col-span-full">
                                <label for="image" class="block text-sm font-medium leading-6 text-gray-900">Image 1</label>
                                <div class="mt-2 flex justify-center rounded-lg border border-dashed border-gray-900/25 px-6 py-10">


                                    <div class="text-center">
                                        <svg class="mx-auto h-12 w-12 text-gray-300" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd" d="M1.5 6a2.25 2.25 0 012.25-2.25h16.5A2.25 2.25 0 0122.5 6v12a2.25 2.25 0 01-2.25 2.25H3.75A2.25 2.25 0 011.5 18V6zM3 16.06V18c0 .414.336.75.75.75h16.5A.75.75 0 0021 18v-1.94l-2.69-2.689a1.5 1.5 0 00-2.12 0l-.88.879.97.97a.75.75 0 11-1.06 1.06l-5.16-5.159a1.5 1.5 0 00-2.12 0L3 16.061zm10.125-7.81a1.125 1.125 0 112.25 0 1.125 1.125 0 01-2.25 0z" clip-rule="evenodd" />
                                        </svg>
                                        <div class="mt-4 flex text-sm leading-6 text-gray-600">
                                            <label for="file-upload" class="relative cursor-pointer rounded-md bg-white font-semibold text-indigo-600 focus-within:outline-none focus-within:ring-2 focus-within:ring-indigo-600 focus-within:ring-offset-2 hover:text-indigo-500">
                                                <span>Upload a file</span>
                                                <input id="file-upload" name="image" type="file" class="sr-only">
                                            </label>
                                            <p class="pl-1">or drag and drop</p>
                                        </div>
                                        <p class="text-xs leading-5 text-gray-600">PNG, JPG, GIF up to 10MB</p>
                                    </div>
                                </div>
                            </div>

                            @if (strpos(url()->current(), 'edit') && ($product->image2 != 'uploads/products/' && $product->image2 != null))
                                <div class="col-span-full">
                                    <label for="image2" class="block text-sm font-medium leading-6 text-gray-900">Image 2 Preview</label>
                                    <div class="mt-2 flex justify-center rounded-lg border border-dashed border-gray-900/25 px-6 py-10">
                                        <div class="text-center">
                                            <img src="{{ asset($product->image2) }}" style="border-radius: 15px">
                                        </div>
                                    </div>
                                </div>
                            @endif

                            <div class="col-span-full">
                                <label for="image2" class="block text-sm font-medium leading-6 text-gray-900">Image 2</label>
                                <div class="mt-2 flex justify-center rounded-lg border border-dashed border-gray-900/25 px-6 py-10">


                                    <div class="text-center">
                                        <svg class="mx-auto h-12 w-12 text-gray-300" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd" d="M1.5 6a2.25 2.25 0 012.25-2.25h16.5A2.25 2.25 0 0122.5 6v12a2.25 2.25 0 01-2.25 2.25H3.75A2.25 2.25 0 011.5 18V6zM3 16.06V18c0 .414.336.75.75.75h16.5A.75.75 0 0021 18v-1.94l-2.69-2.689a1.5 1.5 0 00-2.12 0l-.88.879.97.97a.75.75 0 11-1.06 1.06l-5.16-5.159a1.5 1.5 0 00-2.12 0L3 16.061zm10.125-7.81a1.125 1.125 0 112.25 0 1.125 1.125 0 01-2.25 0z" clip-rule="evenodd" />
                                        </svg>
                                        <div class="mt-4 flex text-sm leading-6 text-gray-600">
                                            <label for="file-upload2" class="relative cursor-pointer rounded-md bg-white font-semibold text-indigo-600 focus-within:outline-none focus-within:ring-2 focus-within:ring-indigo-600 focus-within:ring-offset-2 hover:text-indigo-500">
                                                <span>Upload a file</span>
                                                <input id="file-upload2" name="image2" type="file" class="sr-only">
                                            </label>
                                            <p class="pl-1">or drag and drop</p>
                                        </div>
                                        <p class="text-xs leading-5 text-gray-600">PNG, JPG, GIF up to 10MB</p>
                                    </div>
                                </div>
                            </div>

                            @if (strpos(url()->current(), 'edit') && ($product->image3 != 'uploads/products/' && $product->image3 != null))
                                <div class="col-span-full">
                                    <label for="image3" class="block text-sm font-medium leading-6 text-gray-900">Image 3 Preview</label>
                                    <div class="mt-2 flex justify-center rounded-lg border border-dashed border-gray-900/25 px-6 py-10">
                                        <div class="text-center">
                                            <img src="{{ asset($product->image3) }}" style="border-radius: 15px">
                                        </div>
                                    </div>
                                </div>
                            @endif

                            <div class="col-span-full">
                                <label for="image3" class="block text-sm font-medium leading-6 text-gray-900">Image 3</label>
                                <div class="mt-2 flex justify-center rounded-lg border border-dashed border-gray-900/25 px-6 py-10">


                                    <div class="text-center">
                                        <svg class="mx-auto h-12 w-12 text-gray-300" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd" d="M1.5 6a2.25 2.25 0 012.25-2.25h16.5A2.25 2.25 0 0122.5 6v12a2.25 2.25 0 01-2.25 2.25H3.75A2.25 2.25 0 011.5 18V6zM3 16.06V18c0 .414.336.75.75.75h16.5A.75.75 0 0021 18v-1.94l-2.69-2.689a1.5 1.5 0 00-2.12 0l-.88.879.97.97a.75.75 0 11-1.06 1.06l-5.16-5.159a1.5 1.5 0 00-2.12 0L3 16.061zm10.125-7.81a1.125 1.125 0 112.25 0 1.125 1.125 0 01-2.25 0z" clip-rule="evenodd" />
                                        </svg>
                                        <div class="mt-4 flex text-sm leading-6 text-gray-600">
                                            <label for="file-upload3" class="relative cursor-pointer rounded-md bg-white font-semibold text-indigo-600 focus-within:outline-none focus-within:ring-2 focus-within:ring-indigo-600 focus-within:ring-offset-2 hover:text-indigo-500">
                                                <span>Upload a file</span>
                                                <input id="file-upload3" name="image3" type="file" class="sr-only">
                                            </label>
                                            <p class="pl-1">or drag and drop</p>
                                        </div>
                                        <p class="text-xs leading-5 text-gray-600">PNG, JPG, GIF up to 10MB</p>
                                    </div>
                                </div>
                            </div>

                            @if (strpos(url()->current(), 'edit') && ($product->image4 != 'uploads/products/' && $product->image4 != null))
                                <div class="col-span-full">
                                    <label for="image4" class="block text-sm font-medium leading-6 text-gray-900">Image 4 Preview</label>
                                    <div class="mt-2 flex justify-center rounded-lg border border-dashed border-gray-900/25 px-6 py-10">
                                        <div class="text-center">
                                            <img src="{{ asset($product->image4) }}" style="border-radius: 15px">
                                        </div>
                                    </div>
                                </div>
                            @endif

                            <div class="col-span-full">
                                <label for="image4" class="block text-sm font-medium leading-6 text-gray-900">Image 4</label>
                                <div class="mt-2 flex justify-center rounded-lg border border-dashed border-gray-900/25 px-6 py-10">


                                    <div class="text-center">
                                        <svg class="mx-auto h-12 w-12 text-gray-300" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd" d="M1.5 6a2.25 2.25 0 012.25-2.25h16.5A2.25 2.25 0 0122.5 6v12a2.25 2.25 0 01-2.25 2.25H3.75A2.25 2.25 0 011.5 18V6zM3 16.06V18c0 .414.336.75.75.75h16.5A.75.75 0 0021 18v-1.94l-2.69-2.689a1.5 1.5 0 00-2.12 0l-.88.879.97.97a.75.75 0 11-1.06 1.06l-5.16-5.159a1.5 1.5 0 00-2.12 0L3 16.061zm10.125-7.81a1.125 1.125 0 112.25 0 1.125 1.125 0 01-2.25 0z" clip-rule="evenodd" />
                                        </svg>
                                        <div class="mt-4 flex text-sm leading-6 text-gray-600">
                                            <label for="file-upload4" class="relative cursor-pointer rounded-md bg-white font-semibold text-indigo-600 focus-within:outline-none focus-within:ring-2 focus-within:ring-indigo-600 focus-within:ring-offset-2 hover:text-indigo-500">
                                                <span>Upload a file</span>
                                                <input id="file-upload4" name="image4" type="file" class="sr-only">
                                            </label>
                                            <p class="pl-1">or drag and drop</p>
                                        </div>
                                        <p class="text-xs leading-5 text-gray-600">PNG, JPG, GIF up to 10MB</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-span-full">
                                <fieldset>
                                    <legend class="text-sm font-semibold leading-6 text-gray-900">Visibility Status</legend>
                                    <div class="mt-6 space-y-6">
                                        <div class="flex items-center gap-x-3">
                                            <input id="active" value="active" name="status" type="radio" class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600" {{ old('status', $product->status) == 'active' ? 'checked' : '' }}>
                                            <label for="active" class="block text-sm font-medium leading-6 text-gray-900">Active</label>
                                        </div>
                                        <div class="flex items-center gap-x-3">
                                            <input id="inactive" value="inactive" name="status" type="radio" class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600" {{ old('status', $product->status) == 'inactive' ? 'checked' : '' }}>
                                            <label for="inactive" class="block text-sm font-medium leading-6 text-gray-900">Inactive</label>
                                        </div>
                                    </div>
                                </fieldset>
                            </div>

                            <div class="col-span-full">
                                <label for="price" class="block text-sm font-medium leading-6 text-gray-900">Unit Price</label>
                                <div class="mt-2">
                                    <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                                        <span class="flex select-none items-center pl-3 text-gray-500 sm:text-sm">Rs. &nbsp;&nbsp;</span>
                                        <input type="text" name="price" id="price" autocomplete="price" value="{{ old('price', $product->price) }}" class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="12000">
                                    </div>
                                </div>
                                @error('price')
                                <p class="mt-3 text-sm leading-6 text-red-600">
                                    {{ $message }}
                                </p>
                                @enderror
                            </div>

                            <div class="col-span-full">
                                <label for="stock" class="block text-sm font-medium leading-6 text-gray-900">Stock</label>
                                <div class="mt-2">
                                    <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                                        <span class="flex select-none items-center pl-3 text-gray-500 sm:text-sm">Items : &nbsp;&nbsp;</span>
                                        <input type="text" name="stock" id="stock" autocomplete="stock" value="{{ old('stock', $product->stock) }}" class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="50">
                                    </div>
                                </div>
                                @error('stock')
                                <p class="mt-3 text-sm leading-6 text-red-600">
                                    {{ $message }}
                                </p>
                                @enderror
                            </div>

                            <div class="col-span-full">
                                <label for="description" class="block text-sm font-medium leading-6 text-gray-900">Product Description</label>
                                <div class="mt-2">
                                    <textarea id="description" name="description" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">{{ old('description', $product->description) }}</textarea>
                                </div>
                                <p class="mt-3 text-sm leading-6 text-gray-600">Write a few sentences about the product.</p>
                                @error('description')
                                <p class="mt-3 text-sm leading-6 text-red-600">
                                    {{ $message }}
                                </p>
                                @enderror
                            </div>

                            <div class="col-span-full">
                                <label for="name" class="block text-sm font-medium leading-6 text-gray-900">
                                    Meta Title
                                </label>
                                <div class="mt-2">
                                    <input id="meta_title" name="meta_title" rows="3"
                                           value="{{ old('meta_title', $product->meta_title) }}"
                                           class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"/>
                                </div>
                                <p class="mt-3 text-sm leading-6 text-gray-600">
                                    Meta title of the product.
                                </p>
                                @error('meta_title')
                                <p class="mt-3 text-sm leading-6 text-red-600">
                                    {{ $message }}
                                </p>
                                @enderror
                            </div>

                            <div class="col-span-full">
                                <label for="meta_description" class="block text-sm font-medium leading-6 text-gray-900">Meta Description</label>
                                <div class="mt-2">
                                    <textarea id="meta_description" name="meta_description" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">{{ old('meta_description', $product->meta_description) }}</textarea>
                                </div>
                                <p class="mt-3 text-sm leading-6 text-gray-600">Write the meta description about the product.</p>
                                @error('meta_description')
                                <p class="mt-3 text-sm leading-6 text-red-600">
                                    {{ $message }}
                                </p>
                                @enderror
                            </div>

                            <div class="col-span-full">
                                <label for="meta_keywords" class="block text-sm font-medium leading-6 text-gray-900">Meta Keywords</label>
                                <div class="mt-2">
                                    <textarea id="meta_keywords" name="meta_keywords" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">{{ old('meta_keywords', $product->meta_keywords) }}</textarea>
                                </div>
                                <p class="mt-3 text-sm leading-6 text-gray-600">Write a meta keywords of the product.</p>
                                @error('meta_keywords')
                                <p class="mt-3 text-sm leading-6 text-red-600">
                                    {{ $message }}
                                </p>
                                @enderror
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
        window.location.href = "{{ route('admin.product.index') }}";
    }
</script>

</body>
</html>
