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
                            <li class="breadcrumb__item breadcrumb__item--current breadcrumb__item--last"
                                aria-current="page"><span class="breadcrumb__item-link">Cart</span></li>
                            <li class="breadcrumb__title-safe-area" role="presentation"></li>
                        </ol>
                    </nav>
                    <h1 class="block-header__title">Shopping Cart</h1>
                </div>
            </div>
        </div>


        @php
            $cart = \App\Models\Cart::where('user_id', auth()->user()->id)->where('is_paid', false)->first();

            if ($cart != null){
                $products = DB::table('cart_product')->where('cart_id', $cart->id)->get();
            } else {
                $products = null;
            }

        @endphp


        <div class="block">
            <div class="container">
                <div class="cart">
                    <div class="cart__table cart-table">
                        <table class="cart-table__table">
                            <thead class="cart-table__head">
                            <tr class="cart-table__row">
                                <th class="cart-table__column cart-table__column--image">Image</th>
                                <th class="cart-table__column cart-table__column--product">Product</th>
                                <th class="cart-table__column cart-table__column--price">Price</th>
                                <th class="cart-table__column cart-table__column--quantity">Quantity</th>
                                <th class="cart-table__column cart-table__column--total">Total</th>
                                <th class="cart-table__column cart-table__column--remove"></th>
                            </tr>
                            </thead>
                            <tbody class="cart-table__body">
                            @if ($products != null && $cart != null)
                                @foreach($products as $product)
                                    @php
                                        $productDetails = \App\Models\Product::where('id', $product->product_id)->first();
                                    @endphp
                                    <tr class="cart-table__row">
                                        <td class="cart-table__column cart-table__column--image">
                                            <div class="image image--type--product"><a
                                                    href="{{ route('product.show', $productDetails->id) }}"
                                                    class="image__body"><img
                                                        class="image__tag"
                                                        src="{{ asset($productDetails->image) }}" alt=""></a></div>
                                        </td>
                                        <td class="cart-table__column cart-table__column--product"><a
                                                href="{{ route('product.show', $productDetails->id) }}"
                                                class="cart-table__product-name">{{ $productDetails->name }}</a>
                                            <ul class="cart-table__options">

                                            </ul>
                                        </td>
                                        <td class="cart-table__column cart-table__column--price" data-title="Price">
                                            Rs.{{ number_format($productDetails->price, 2, '.', ',') }}
                                        </td>
                                        <td class="cart-table__column cart-table__column--quantity"
                                            data-title="Quantity">
                                            {{ $product->quantity }}

                                        </td>
                                        <td class="cart-table__column cart-table__column--total" data-title="Total">
                                            Rs.{{ number_format($product->price, 2, '.', ',') }}

                                        </td>
                                        <td class="cart-table__column cart-table__column--remove">
                                            <form action="{{ route('cart.remove', $productDetails->id) }}">
                                                <button type="submit"
                                                        class="cart-table__remove btn btn-sm btn-icon btn-muted">
                                                    <svg width="12"
                                                         height="12">
                                                        <path d="M10.8,10.8L10.8,10.8c-0.4,0.4-1,0.4-1.4,0L6,7.4l-3.4,3.4c-0.4,0.4-1,0.4-1.4,0l0,0c-0.4-0.4-0.4-1,0-1.4L4.6,6L1.2,2.6
	c-0.4-0.4-0.4-1,0-1.4l0,0c0.4-0.4,1-0.4,1.4,0L6,4.6l3.4-3.4c0.4-0.4,1-0.4,1.4,0l0,0c0.4,0.4,0.4,1,0,1.4L7.4,6l3.4,3.4
	C11.2,9.8,11.2,10.4,10.8,10.8z"/>
                                                    </svg>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            @endif

                            </tbody>
                            {{--                            @if ($products != null)--}}
                            {{--                                <tfoot class="cart-table__foot">--}}
                            {{--                                <tr>--}}
                            {{--                                    <td colspan="6">--}}
                            {{--                                        <div class="cart-table__actions">--}}
                            {{--                                            <form class="cart-table__coupon-form form-row">--}}
                            {{--                                                <div class="form-group mb-0 col flex-grow-1"></div>--}}
                            {{--                                                <div class="form-group mb-0 col-auto">--}}
                            {{--                                                </div>--}}
                            {{--                                            </form>--}}
                            {{--                                            <div class="cart-table__update-button"><a class="btn btn-sm btn-primary"--}}
                            {{--                                                                                      href="#">Update Cart</a></div>--}}
                            {{--                                        </div>--}}
                            {{--                                    </td>--}}
                            {{--                                </tr>--}}
                            {{--                                </tfoot>--}}
                            {{--                            @endif--}}
                        </table>
                    </div>
                    <div class="cart__totals">
                        <div class="card">
                            <div class="card-body card-body--padding--2">
                                <h3 class="card-title">Cart Total</h3>
                                <table class="cart__totals-table">
                                    <thead>
                                    <tr>
                                        <th>Subtotal</th>
                                        @if ($cart != null && $products != null)
                                            <td>Rs.{{ number_format($cart->sub_total, 2, '.', ',') }}</td>
                                        @else
                                            <td>Rs.0.00</td>
                                        @endif
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <th>Shipping</th>

                                            <td>Rs.0.00</td>

                                    </tr>
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <th>Total</th>
                                        @if ($cart != null && $products != null)

                                            <td>Rs.{{ number_format($cart->sub_total, 2, '.', ',') }}</td>
                                        @else
                                            <td>Rs.0.00</td>
                                        @endif
                                    </tr>
                                    </tfoot>
                                </table>
                                @if ($cart == null || $cart->item_count == 0)
                                    <button class="btn btn-primary btn-xl btn-block" disabled>Proceed to checkout
                                    </button>
                                @else
                                    <a class="btn btn-primary btn-xl btn-block" href="{{ route('checkout') }}">Proceed
                                        to
                                        checkout</a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="block-space block-space--layout--before-footer"></div>
    </div>

</x-app-layout>
