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
                                <li class="account-nav__item account-nav__item--active"><a
                                        href="/account/dashboard">Dashboard</a></li>
                                <li class="account-nav__item"><a href="/account/garage">Garage</a></li>
                                <li class="account-nav__item"><a href="/user/profile">Edit Profile</a></li>
                                <li class="account-nav__item"><a href="/account/orders">Order History</a></li>
                                <li class="account-nav__item"><a href="/account/order/details">Order Details</a>
                                </li>
                                <li class="account-nav__item"><a href="/user/profile">Password</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-lg-9 mt-4 mt-lg-0">
                        <div class="dashboard">
                            <div class="dashboard__profile card profile-card" style="width: 100%; background-image: url('/images/account-image.jpeg')">
                                <div class="card-body profile-card__body">
                                    <div class="profile-card__name" style="color: white;">{{ auth()->user()->name }}</div>
                                    <div class="profile-card__email" style="color: white;">{{ auth()->user()->email }}</div>
                                    <div class="profile-card__edit"><a href="/user/profile"
                                                                       class="btn btn-secondary btn-sm">Edit Profile</a>
                                    </div>
                                </div>
                            </div>

                            <div class="dashboard__orders card">
                                <div class="card-header">
                                    <h5>Recent Orders</h5>
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
                                            <tr>
                                                <td><a href="account-order-details.html">#8132</a></td>
                                                <td>02 April, 2019</td>
                                                <td>Pending</td>
                                                <td>$2,719.00 for 5 item(s)</td>
                                            </tr>
                                            <tr>
                                                <td><a href="account-order-details.html">#7592</a></td>
                                                <td>28 March, 2019</td>
                                                <td>Pending</td>
                                                <td>$374.00 for 3 item(s)</td>
                                            </tr>
                                            <tr>
                                                <td><a href="account-order-details.html">#7192</a></td>
                                                <td>15 March, 2019</td>
                                                <td>Shipped</td>
                                                <td>$791.00 for 4 item(s)</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="block-space block-space--layout--before-footer"></div>
    </div>

</x-app-layout>
