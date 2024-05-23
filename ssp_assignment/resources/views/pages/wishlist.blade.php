<x-app-layout>

    <div class="site__body">
        <div
            class="block-header block-header--has-breadcrumb block-header--has-title"
        >
            <div class="container">
                <div class="block-header__body">
                    <nav
                        class="breadcrumb block-header__breadcrumb"
                        aria-label="breadcrumb"
                    >
                        <ol class="breadcrumb__list">
                            <li
                                class="breadcrumb__spaceship-safe-area"
                                role="presentation"
                            ></li>
                            <li
                                class="breadcrumb__item breadcrumb__item--parent breadcrumb__item--first"
                            >
                                <a href="/" class="breadcrumb__item-link">Home</a>
                            </li>
                            <li class="breadcrumb__item breadcrumb__item--parent">
                                <a class="breadcrumb__item-link">Wishlist</a>
                            </li>

                            <li
                                class="breadcrumb__title-safe-area"
                                role="presentation"
                            ></li>
                        </ol>
                    </nav>
                    <h1 class="block-header__title">Wishlist</h1>
                </div>
            </div>
        </div>
        <div class="block">
            <div class="container container--max--xl">
                <div class="wishlist">
                    <table class="wishlist__table">
                        <thead class="wishlist__head">
                        <tr class="wishlist__row wishlist__row--head">
                            <th
                                class="wishlist__column wishlist__column--head wishlist__column--image"
                            >
                                Image
                            </th>
                            <th
                                class="wishlist__column wishlist__column--head wishlist__column--product"
                            >
                                Product
                            </th>
                            <th
                                class="wishlist__column wishlist__column--head wishlist__column--stock"
                            >
                                Stock status
                            </th>
                            <th
                                class="wishlist__column wishlist__column--head wishlist__column--price"
                            >
                                Price
                            </th>
                            <th
                                class="wishlist__column wishlist__column--head wishlist__column--button"
                            ></th>
                            <th
                                class="wishlist__column wishlist__column--head wishlist__column--remove"
                            ></th>
                        </tr>
                        </thead>
                        <tbody class="wishlist__body">

                        @foreach($wishlistItems as $wishlistItem)

                            <tr class="wishlist__row wishlist__row--body">
                                <td
                                    class="wishlist__column wishlist__column--body wishlist__column--image"
                                >
                                    <div class="image image--type--product">
                                        <a href="{{ route('product.show', $wishlistItem->product_id) }}"
                                           class="image__body">
                                            <img
                                                class="image__tag"
                                                src="{{ asset($wishlistItem->product->image) }}"
                                                alt=""
                                            />
                                        </a>
                                    </div>
                                </td>
                                <td
                                    class="wishlist__column wishlist__column--body wishlist__column--product"
                                >
                                    <div class="wishlist__product-name">
                                        <a href="{{ route('product.show', $wishlistItem->product_id) }}">{{ $wishlistItem->product->name }}</a>
                                    </div>
                                    <div class="wishlist__product-rating">

                                    </div>
                                </td>
                                <td
                                    class="wishlist__column wishlist__column--body wishlist__column--stock"
                                >
                                    <div
                                        class="status-badge status-badge--style--success status-badge--has-text"
                                    >
                                        @if ($wishlistItem->product->stock > 0)
                                            <div class="status-badge__body">
                                                <div class="status-badge__text">In Stock</div>
                                            </div>
                                        @else
                                            <div class="status-badge__body">
                                                <div class="status-badge__text"
                                                     style="color: #900000; background-color: #ffdfdf; border-radius: 30px">
                                                    Out of Stock
                                                </div>
                                            </div>
                                        @endif
                                    </div>
                                </td>
                                <td
                                    class="wishlist__column wishlist__column--body wishlist__column--price"
                                >
                                    Rs.{{ number_format($wishlistItem->product->price, 2, '.', ',') }}
                                </td>
                                <td
                                    class="wishlist__column wishlist__column--body wishlist__column--button"
                                >
                                </td>
                                <td
                                    class="wishlist__column wishlist__column--body wishlist__column--remove"
                                >
{{--                                    <livewire:remove-from-wishlist/>--}}
                                    @livewire('remove-from-wishlist', ['product' => $wishlistItem->product])
                                </td>
                            </tr>

                        @endforeach


                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="block-space block-space--layout--before-footer"></div>
    </div>


</x-app-layout>
