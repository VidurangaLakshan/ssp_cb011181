<x-app-layout>

    <div class="site__body">
        <div class="block-header block-header--has-breadcrumb block-header--has-title">
            <div class="container">
                <div class="block-header__body">
                    <nav class="breadcrumb block-header__breadcrumb" aria-label="breadcrumb">
                        <ol class="breadcrumb__list">
                            <li class="breadcrumb__spaceship-safe-area" role="presentation"></li>
                            <li class="breadcrumb__item breadcrumb__item--parent breadcrumb__item--first"><a
                                    href="/" class="breadcrumb__item-link">Home</a></li>
                            <li class="breadcrumb__item breadcrumb__item--parent"><a href="/cart"
                                                                                     class="breadcrumb__item-link">Cart</a>
                            </li>
                            <li class="breadcrumb__item breadcrumb__item--current breadcrumb__item--last"
                                aria-current="page"><span class="breadcrumb__item-link">Checkout</span></li>
                            <li class="breadcrumb__title-safe-area" role="presentation"></li>
                        </ol>
                    </nav>
                    <h1 class="block-header__title">Checkout</h1>
                </div>
            </div>
        </div>
        <div class="checkout block">
            <div class="container container--max--xl">
                <form action="{{ route('order.store') }}" method="POST">
                    @csrf

                    <div class="row">
                        <div class="col-12 col-lg-6 col-xl-7">
                            <div class="card mb-lg-0">
                                <div class="card-body card-body--padding--2">
                                    <h3 class="card-title">Billing / Shipping Address</h3>
                                    <div class="form-row">
                                        <div class="form-group col-md-6"><label for="shipping_first_name">First
                                                Name</label> <input type="text" class="form-control"
                                                                    id="shipping_first_name" name="shipping_first_name" placeholder="First Name" required>
                                        </div>
                                        <div class="form-group col-md-6"><label for="checkout-last-name">Last
                                                Name</label> <input type="text" class="form-control"
                                                                    id="shipping_last_name" name="shipping_last_name" placeholder="Last Name" required>
                                        </div>
                                    </div>

                                    <div class="form-group"><label for="checkout-street-address">Street Address</label>
                                        <input type="text" class="form-control" id="shipping_address" name="shipping_address"
                                               placeholder="Street Address" required></div>
                                    <div class="form-group"><label for="checkout-city">Town / City</label> <input
                                            type="text" class="form-control" id="shipping_city" name="shipping_city" required></div>
                                    <div class="form-group"><label for="checkout-postcode">Postcode / ZIP</label> <input
                                            type="text" class="form-control" id="shipping_post_code" name="shipping_post_code" required></div>

                                    <div class="form-group"><label for="checkout-phone">Phone</label>
                                        <input type="text" class="form-control" id="shipping_mobile" name="shipping_mobile"
                                               placeholder="Phone" required></div>

                                </div>

                            </div>
                        </div>

                        @php
                            $cart = \App\Models\Cart::where('user_id', auth()->user()->id)->where('is_paid', false)->first();
                            $products = DB::table('cart_product')->where('cart_id', $cart->id)->get();
                        @endphp


                        <div class="col-12 col-lg-6 col-xl-5 mt-4 mt-lg-0">
                            <div class="card mb-0">
                                <div class="card-body card-body--padding--2">
                                    <h3 class="card-title">Your Order</h3>
                                    <table class="checkout__totals">
                                        <thead class="checkout__totals-header">
                                        <tr>
                                            <th>Product</th>
                                            <th>Total</th>
                                        </tr>
                                        </thead>
                                        <tbody class="checkout__totals-products">

                                        @foreach($products as $product)
                                            @php
                                                $productDetails = \App\Models\Product::find($product->product_id);
                                            @endphp

                                            <tr>
                                                <td>{{ $productDetails->name }}</td>
                                                <td>Rs.{{ number_format($productDetails->price, 2, '.', ',') }}</td>
                                            </tr>
                                        @endforeach

                                        </tbody>
                                        <tbody class="checkout__totals-subtotals">
                                        <tr>
                                            <th>Subtotal</th>
                                            <td>Rs.{{ number_format($cart->sub_total, 2, '.', ',') }}</td>
                                        </tr>
                                        <tr>
                                            <th>Shipping</th>
                                            <td>Rs.0.00</td>
                                        </tr>
                                        </tbody>
                                        <tfoot class="checkout__totals-footer">
                                        <tr>
                                            <th>Total</th>
                                            <td>Rs.{{ number_format($cart->sub_total, 2, '.', ',') }}</td>
                                        </tr>
                                        </tfoot>
                                    </table>
                                    <div class="checkout__payment-methods payment-methods">
                                        <ul class="payment-methods__list">
                                            <li class="payment-methods__item"><label
                                                    class="payment-methods__item-header"><span
                                                        class="payment-methods__item-radio input-radio"><span
                                                            class="input-radio__body"><input class="input-radio__input"
                                                                                             name="checkout_payment_method"
                                                                                             type="radio" checked> <span
                                                                class="input-radio__circle"></span> </span></span><span
                                                        class="payment-methods__item-title">Stripe</span></label>
                                                <div>
                                                    <div class="payment-methods__item-details">Pay via
                                                        Stripe; you can pay with your credit card if you don’t have a
                                                        Stripe account.
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-xl btn-block">Place Order</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="block-space block-space--layout--before-footer"></div>
    </div>

</x-app-layout>
