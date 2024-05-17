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
                                                                                     class="breadcrumb__item-link">Cart</a></li>
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
                <div class="row">
                    <div class="col-12 col-lg-6 col-xl-7">
                        <div class="card mb-lg-0">
                            <div class="card-body card-body--padding--2">
                                <h3 class="card-title">Billing / Shipping Address</h3>
                                <div class="form-row">
                                    <div class="form-group col-md-6"><label for="checkout-first-name">First
                                            Name</label> <input type="text" class="form-control"
                                                                id="checkout-first-name" placeholder="First Name"></div>
                                    <div class="form-group col-md-6"><label for="checkout-last-name">Last
                                            Name</label> <input type="text" class="form-control"
                                                                id="checkout-last-name" placeholder="Last Name"></div>
                                </div>

                                <div class="form-group"><label for="checkout-street-address">Street Address</label>
                                    <input type="text" class="form-control" id="checkout-street-address"
                                           placeholder="Street Address"></div>
                                 <div class="form-group"><label for="checkout-city">Town / City</label> <input
                                        type="text" class="form-control" id="checkout-city"></div>
                                <div class="form-group"><label for="checkout-postcode">Postcode / ZIP</label> <input
                                        type="text" class="form-control" id="checkout-postcode"></div>
                                <div class="form-row">
                                    <div class="form-group col-md-6"><label for="checkout-email">Email
                                            address</label> <input type="email" class="form-control"
                                                                   id="checkout-email" placeholder="Email address"></div>
                                    <div class="form-group col-md-6"><label for="checkout-phone">Phone</label>
                                        <input type="text" class="form-control" id="checkout-phone"
                                               placeholder="Phone"></div>
                                </div>

                            </div>

                        </div>
                    </div>
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
                                    <tr>
                                        <td>Glossy Gray 19" Aluminium Wheel AR-19 × 2</td>
                                        <td>Rs.1398.00</td>
                                    </tr>
                                    <tr>
                                        <td>Brandix Brake Kit BDX-750Z370-S × 1</td>
                                        <td>Rs.849.00</td>
                                    </tr>
                                    <tr>
                                        <td>Twin Exhaust Pipe From Brandix Z54 × 3</td>
                                        <td>Rs.3630.00</td>
                                    </tr>
                                    </tbody>
                                    <tbody class="checkout__totals-subtotals">
                                    <tr>
                                        <th>Subtotal</th>
                                        <td>Rs.5877.00</td>
                                    </tr>
                                    <tr>
                                        <th>Shipping</th>
                                        <td>Rs.2000.00</td>
                                    </tr>
                                    </tbody>
                                    <tfoot class="checkout__totals-footer">
                                    <tr>
                                        <th>Total</th>
                                        <td>Rs.5882.00</td>
                                    </tr>
                                    </tfoot>
                                </table>
                                <div class="checkout__payment-methods payment-methods">
                                    <ul class="payment-methods__list">
                                        <li class="payment-methods__item"><label
                                                class="payment-methods__item-header"><span
                                                    class="payment-methods__item-radio input-radio"><span
                                                        class="input-radio__body"><input class="input-radio__input"
                                                                                         name="checkout_payment_method" type="radio" checked> <span
                                                            class="input-radio__circle"></span> </span></span><span
                                                    class="payment-methods__item-title">Stripe</span></label>
                                            <div >
                                                <div class="payment-methods__item-details">Pay via
                                                    Stripe; you can pay with your credit card if you don’t have a
                                                    Stripe account.</div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <button type="submit" class="btn btn-primary btn-xl btn-block">Place Order</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="block-space block-space--layout--before-footer"></div>
    </div>

</x-app-layout>
