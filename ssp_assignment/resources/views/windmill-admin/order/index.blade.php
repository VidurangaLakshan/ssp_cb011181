<x-admin>
    <div class="container grid px-6 mx-auto">
                <h2
                    class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200"
                >
                    Orders
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
                                <th class="px-4 py-3">Order #</th>
                                <th class="px-4 py-3">Customer</th>
                                <th class="px-4 py-3">Price</th>
                                <th class="px-4 py-3">Status</th>
                                <th class="px-4 py-3">Created Date</th>
                                <th class="px-4 py-3">Actions</th>
                            </tr>
                            </thead>
                            <tbody
                                class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800"
                            >

                            @foreach($orders as $order)
                                <tr class="text-gray-700 dark:text-gray-400">
                                    <td class="px-4 py-3">
                                        <div class="flex items-center text-sm">
                                            <div>
                                                <p class="font-semibold">#{{ $order->id }}</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-4 py-3">
                                        <div class="flex items-center text-sm">
                                            <div>
                                                <p class="font-semibold">{{ $order->user->name }}</p>
                                            </div>
                                        </div>
                                    </td>

                                    <td class="px-4 py-3 text-sm">
                                        Rs.{{ number_format($order->total, 2, '.', ',') }}
                                    </td>

                                    <td class="px-4 py-3 text-xs">
                                        @if ($order->status == 'Pending')
                                            <span
                                                class="px-2 py-1 font-semibold leading-tight text-red-700 bg-red-100 rounded-full dark:bg-red-700 dark:text-red-100">
                                              Pending
                                        </span>
                                        @else
                                            <span
                                                class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100">
                                            Delivered
                                        </span>
                                        @endif
                                    </td>

                                    <td class="px-4 py-3 text-sm">
                                        {{ $order->created_at->format('Y-m-d') }}
                                    </td>
                                    <td class="px-4 py-3">
                                        <div class="flex items-center space-x-4 text-sm">
                                            <form
                                                action="{{ route('order-view', $order->id) }}">
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
                                            <form
                                                action="{{ route('order.edit', $order->id) }}">
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
                                                action="{{ route('order.destroy', $order->id) }}"
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
{{--                    {{ $orders->links() }}--}}
                </div>
            </div>
</x-admin>
