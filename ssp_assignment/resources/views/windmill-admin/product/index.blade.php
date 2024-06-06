<x-admin>
    <div class="container grid px-6 mx-auto">
        <h2
            class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200"
        >
            Products
        </h2>


        @if (session('success'))
            <div id="successMessage"
                 class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mt-4 mb-5"
                 role="alert">
                <strong class="font-bold">Success!</strong>
                <span class="block sm:inline">{{ session('success') }}</span>
                <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                    </span>
            </div>
        @endif


        <h4
            class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300"
        >
        </h4>


        <div class="w-full overflow-hidden rounded-lg shadow-xs">
            <div class="w-full overflow-x-auto">
                <table class="w-full whitespace-no-wrap">
                    <thead>
                    <tr
                        class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800"
                    >
                        <th class="px-4 py-3">Image</th>
                        <th class="px-4 py-3">Name</th>
                        <th class="px-4 py-3">Price</th>
                        <th class="px-4 py-3">Category</th>
                        <th class="px-4 py-3">Status</th>
                        <th class="px-4 py-3">Created Date</th>
                        <th class="px-4 py-3">Actions</th>
                    </tr>
                    </thead>
                    <tbody
                        class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800"
                    >

                    @foreach($products as $product)
                        <tr class="text-gray-700 dark:text-gray-400">
                            <td class="px-4 py-3 text-sm">
                                <img src="{{ asset($product->image) }}"
                                     style="border-radius: 10px; max-height: 100px; width: auto;">
                            </td>

                            <td class="px-4 py-3">
                                <div class="flex items-center text-sm">
                                    <div>
                                        <p class="font-semibold">{{ $product->name }}</p>
                                    </div>
                                </div>
                            </td>

                            <td class="px-4 py-3 text-sm">
                                Rs.{{ number_format($product->price, 2, '.', ',') }}
                            </td>

                            <td class="px-4 py-3 text-sm">
                                {{ $product->category->name }}
                            </td>

                            <td class="px-4 py-3 text-xs">
                                @if ($product->status != 'active')
                                    <span
                                        class="px-2 py-1 font-semibold leading-tight text-red-700 bg-red-100 rounded-full dark:bg-red-700 dark:text-red-100">
                                              Inactive
                                        </span>
                                @else
                                    <span
                                        class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100">
                                            Active
                                        </span>
                                @endif
                            </td>

                            <td class="px-4 py-3 text-sm">
                                {{ $product->created_at->format('Y-m-d') }}
                            </td>
                            <td class="px-4 py-3">
                                <div class="flex items-center space-x-4 text-sm">
                                    <form action="{{ route('product.remove-images', $product->id) }}" method="POST">
                                        @csrf

                                        <button
                                            class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
                                            aria-label="RemoveImages" style="color: #ff8800;" type="submit">
                                            <svg class="w-6 h-6"
                                                 aria-hidden="true"
                                                 viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                                   stroke-linejoin="round"></g>
                                                <g id="SVGRepo_iconCarrier">
                                                    <path d="M3 3L21 21" stroke="#e00606" stroke-width="2"
                                                          stroke-linecap="round" stroke-linejoin="round"></path>
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                          d="M4.76761 3.6809C4.20533 4.05908 3.74601 4.57557 3.43598 5.18404C3.18869 5.66937 3.09012 6.18608 3.0442 6.74818C2.99998 7.28937 2.99999 7.95373 3 8.7587L3 8.8V15.2L3 15.2413C3 15.4903 3 15.7259 3.0013 15.9486C2.99932 15.9874 2.9996 16.0263 3.00212 16.0651C3.00584 16.5135 3.01607 16.9076 3.0442 17.2518C3.09012 17.8139 3.18869 18.3306 3.43598 18.816C3.81947 19.5686 4.43139 20.1805 5.18404 20.564C5.66938 20.8113 6.18608 20.9099 6.74818 20.9558C7.28937 21 7.95372 21 8.75868 21H8.8H15.2H15.2413C16.0463 21 16.7106 21 17.2518 20.9558C17.8139 20.9099 18.3306 20.8113 18.816 20.564C19.4242 20.2541 19.9406 19.795 20.3187 19.233L18.8447 17.7589C18.8251 17.8159 18.8041 17.8646 18.782 17.908C18.5903 18.2843 18.2843 18.5903 17.908 18.782C17.7516 18.8617 17.5274 18.9266 17.089 18.9624C16.6389 18.9992 16.0566 19 15.2 19H8.8C7.94343 19 7.36113 18.9992 6.91104 18.9624C6.47263 18.9266 6.24842 18.8617 6.09202 18.782C5.7157 18.5903 5.40974 18.2843 5.21799 17.908C5.1383 17.7516 5.07338 17.5274 5.03756 17.089C5.02093 16.8855 5.01167 16.6551 5.0065 16.3845L9.79344 11.2076L13.0858 14.5L15.3358 16.75C15.7263 17.1405 16.3595 17.1405 16.75 16.75C16.9681 16.5319 17.0644 16.2381 17.0389 15.9531L10.3809 9.29506C9.69594 9.0851 8.92053 9.25105 8.37868 9.7929C8.36946 9.80212 8.36043 9.81151 8.35158 9.82108L5 13.4456V8.8C5 7.94342 5.00078 7.36113 5.03756 6.91104C5.07338 6.47262 5.1383 6.24842 5.21799 6.09202C5.40974 5.7157 5.7157 5.40974 6.09202 5.21799C6.13545 5.19586 6.1841 5.17487 6.24112 5.15533L4.79289 3.70711C4.78427 3.69849 4.77584 3.68975 4.76761 3.6809ZM15.2594 11.3452C16.0445 10.7229 17.1887 10.7745 17.9143 11.5L19 12.5857V8.8C19 7.94342 18.9992 7.36113 18.9625 6.91104C18.9266 6.47262 18.8617 6.24842 18.782 6.09202C18.5903 5.7157 18.2843 5.40973 17.908 5.21799C17.7516 5.1383 17.5274 5.07337 17.089 5.03755C16.6389 5.00078 16.0566 5 15.2 5H8.91421L6.94455 3.03034C7.44781 2.99998 8.04853 2.99999 8.75869 3H8.75871H8.8H15.2H15.2413H15.2413C16.0463 2.99999 16.7106 2.99998 17.2518 3.04419C17.8139 3.09012 18.3306 3.18868 18.816 3.43598C19.5686 3.81947 20.1805 4.43139 20.564 5.18404C20.8113 5.66937 20.9099 6.18608 20.9558 6.74818C21 7.28937 21 7.95372 21 8.75868V8.8V14.9992V15.0007V15.2V15.2413C21 15.9515 21 16.5522 20.9697 17.0555L15.2594 11.3452Z"
                                                          fill="#e00606"></path>
                                                </g>
                                            </svg>
                                        </button>
                                    </form>
                                    <form action="{{ route('product.show', $product->id) }}">
                                        <button
                                            class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
                                            aria-label="Edit" style="color: #ff8800;" type="submit">
                                            <svg class="w-6 h-6"
                                                 aria-hidden="true"
                                                 fill="none" viewBox="0 0 24 24"
                                                 xmlns="http://www.w3.org/2000/svg" stroke="#00ff62">
                                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                                   stroke-linejoin="round"></g>
                                                <g id="SVGRepo_iconCarrier">
                                                    <path
                                                        d="M17 4H17.2C18.9913 4 19.887 4 20.4435 4.5565C21 5.11299 21 6.00866 21 7.8V8M17 20H17.2C18.9913 20 19.887 20 20.4435 19.4435C21 18.887 21 17.9913 21 16.2V16M7 4H6.8C5.00866 4 4.11299 4 3.5565 4.5565C3 5.11299 3 6.00866 3 7.8V8M7 20H6.8C5.00866 20 4.11299 20 3.5565 19.4435C3 18.887 3 17.9913 3 16.2V16"
                                                        stroke="00ff62" stroke-width="2"
                                                        stroke-linecap="round"></path>
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                          d="M18.8149 12C18.8149 11.4637 18.6892 11.2462 18.4379 10.8112C17.5834 9.33247 15.6561 7 12 7C8.34395 7 6.41664 9.33247 5.56212 10.8112C5.31077 11.2462 5.18509 11.4637 5.18509 12C5.18509 12.5363 5.31077 12.7538 5.56212 13.1888C6.41664 14.6675 8.34395 17 12 17C15.6561 17 17.5834 14.6675 18.4379 13.1888C18.6892 12.7538 18.8149 12.5363 18.8149 12ZM12 15C13.6569 15 15 13.6569 15 12C15 10.3431 13.6569 9 12 9C10.3432 9 9.00001 10.3431 9.00001 12C9.00001 13.6569 10.3432 15 12 15Z"
                                                          fill="00ff62"></path>
                                                </g>
                                            </svg>
                                        </button>
                                    </form>
                                    <form action="{{ route('product.edit', $product->id) }}">
                                        <button
                                            class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
                                            aria-label="Edit" style="color: #ff8800;" type="submit">
                                            <svg
                                                class="w-5 h-5"
                                                aria-hidden="true"
                                                fill="currentColor"
                                                viewBox="0 0 20 20"
                                            >
                                                <path
                                                    d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"
                                                ></path>
                                            </svg>
                                        </button>
                                    </form>
                                    <form
                                        action="{{ route('product.destroy', $product->id) }}"
                                        method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button
                                            class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-red-600 rounded-lg dark:text-red-600 focus:outline-none focus:shadow-outline-gray"
                                            aria-label="Delete" type="submit"
                                        >
                                            <svg
                                                class="w-5 h-5"
                                                aria-hidden="true"
                                                fill="currentColor"
                                                viewBox="0 0 20 20"
                                            >
                                                <path
                                                    fill-rule="evenodd"
                                                    d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                                    clip-rule="evenodd"
                                                ></path>
                                            </svg>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>
        </div>
        <div style="margin: 10px 20px;">
            {{ $products->links() }}
        </div>
    </div>
</x-admin>
