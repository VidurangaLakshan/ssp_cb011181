<x-app-layout>

    <div class="site__body">
        <div class="block-space block-space--layout--after-header"></div>
        <div class="block">
            <div class="container container--max--xl">
                <div class="row">
                    <div class="col-12 col-lg-3 d-flex">
                        <div class="account-nav flex-grow-1">
                            <h4 class="account-nav__title">Navigation</h4>
                            <ul class="account-nav__list">
                                <li class="account-nav__item"><a
                                        href="/account/dashboard">Dashboard</a></li>
                                <li class="account-nav__item"><a href="/account/garage">Garage</a></li>
                                <li class="account-nav__item"><a href="/user/profile">Edit Profile</a></li>
                                <li class="account-nav__item account-nav__item--active"><a href="/account/orders">Order
                                        History</a></li>
                                <li class="account-nav__item"><a href="/user/profile">Password</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-lg-9 mt-4 mt-lg-0">
                        <div class="card">
                            <div class="card-header">
                                <h5>Order History</h5>
                            </div>
                            <div class="card-divider"></div>
                            <div class="card-table">
                                <div class="table-responsive-sm">
                                    <table>
                                        <thead>
                                        <tr>
                                            <th>Order</th>
                                            <th>Date</th>
                                            <th>Status</th>
                                            <th>Total</th>
                                        </tr>
                                        </thead>
                                        <tbody>

                                        @php
                                            $orders = DB::table('orders')->where('user_id', auth()->user()->id)->where('payment_status', 'Paid')->get();

                                        @endphp
                                        @foreach($orders as $order)
                                            <tr>
                                                <td><a href="{{ route('order-view', $order->id) }}">#{{ $order->id }}</a></td>
                                                <td>{{ $order->created_at }}</td>
                                                <td>{{ $order->status }}</td>
                                                <td>Rs.{{ number_format($order->total, 2, '.', ',' )}}</td>
                                            </tr>
                                        @endforeach

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="card-divider"></div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="block-space block-space--layout--before-footer"></div>
    </div>

</x-app-layout>
