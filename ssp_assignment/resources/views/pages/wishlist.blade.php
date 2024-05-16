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
                                <a href="index.html" class="breadcrumb__item-link">Home</a>
                            </li>
                            <li class="breadcrumb__item breadcrumb__item--parent">
                                <a href="#" class="breadcrumb__item-link">Breadcrumb</a>
                            </li>
                            <li
                                class="breadcrumb__item breadcrumb__item--current breadcrumb__item--last"
                                aria-current="page"
                            >
                                <span class="breadcrumb__item-link">Current Page</span>
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
                        <tr class="wishlist__row wishlist__row--body">
                            <td
                                class="wishlist__column wishlist__column--body wishlist__column--image"
                            >
                                <div class="image image--type--product">
                                    <a href="product-full.html" class="image__body"
                                    ><img
                                            class="image__tag"
                                            src="images/products/product-1-160x160.jpg"
                                            alt=""
                                        /></a>
                                </div>
                            </td>
                            <td
                                class="wishlist__column wishlist__column--body wishlist__column--product"
                            >
                                <div class="wishlist__product-name">
                                    <a href="#">Brandix Spark Plug Kit ASR-400</a>
                                </div>
                                <div class="wishlist__product-rating">
                                    <div class="wishlist__product-rating-stars">
                                        <div class="rating">
                                            <div class="rating__body">
                                                <div
                                                    class="rating__star rating__star--active"
                                                ></div>
                                                <div
                                                    class="rating__star rating__star--active"
                                                ></div>
                                                <div
                                                    class="rating__star rating__star--active"
                                                ></div>
                                                <div
                                                    class="rating__star rating__star--active"
                                                ></div>
                                                <div class="rating__star"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="wishlist__product-rating-title">
                                        3 reviews
                                    </div>
                                </div>
                            </td>
                            <td
                                class="wishlist__column wishlist__column--body wishlist__column--stock"
                            >
                                <div
                                    class="status-badge status-badge--style--success status-badge--has-text"
                                >
                                    <div class="status-badge__body">
                                        <div class="status-badge__text">In Stock</div>
                                    </div>
                                </div>
                            </td>
                            <td
                                class="wishlist__column wishlist__column--body wishlist__column--price"
                            >
                                $19.00
                            </td>
                            <td
                                class="wishlist__column wishlist__column--body wishlist__column--button"
                            >
                                <button type="button" class="btn btn-sm btn-primary">
                                    Add to cart
                                </button>
                            </td>
                            <td
                                class="wishlist__column wishlist__column--body wishlist__column--remove"
                            >
                                <livewire:remove-from-wishlist />
                            </td>
                        </tr>
                        <tr class="wishlist__row wishlist__row--body">
                            <td
                                class="wishlist__column wishlist__column--body wishlist__column--image"
                            >
                                <div class="image image--type--product">
                                    <a href="product-full.html" class="image__body"
                                    ><img
                                            class="image__tag"
                                            src="images/products/product-2-160x160.jpg"
                                            alt=""
                                        /></a>
                                </div>
                            </td>
                            <td
                                class="wishlist__column wishlist__column--body wishlist__column--product"
                            >
                                <div class="wishlist__product-name">
                                    <a href="#">Brandix Brake Kit BDX-750Z370-S</a>
                                </div>
                                <div class="wishlist__product-rating">
                                    <div class="wishlist__product-rating-stars">
                                        <div class="rating">
                                            <div class="rating__body">
                                                <div
                                                    class="rating__star rating__star--active"
                                                ></div>
                                                <div
                                                    class="rating__star rating__star--active"
                                                ></div>
                                                <div
                                                    class="rating__star rating__star--active"
                                                ></div>
                                                <div
                                                    class="rating__star rating__star--active"
                                                ></div>
                                                <div
                                                    class="rating__star rating__star--active"
                                                ></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="wishlist__product-rating-title">
                                        22 reviews
                                    </div>
                                </div>
                            </td>
                            <td
                                class="wishlist__column wishlist__column--body wishlist__column--stock"
                            >
                                <div
                                    class="status-badge status-badge--style--success status-badge--has-text"
                                >
                                    <div class="status-badge__body">
                                        <div class="status-badge__text">In Stock</div>
                                    </div>
                                </div>
                            </td>
                            <td
                                class="wishlist__column wishlist__column--body wishlist__column--price"
                            >
                                $224.00
                            </td>
                            <td
                                class="wishlist__column wishlist__column--body wishlist__column--button"
                            >
                                <button type="button" class="btn btn-sm btn-primary">
                                    Add to cart
                                </button>
                            </td>
                            <td
                                class="wishlist__column wishlist__column--body wishlist__column--remove"
                            >
                                <livewire:remove-from-wishlist />
                            </td>
                        </tr>
                        <tr class="wishlist__row wishlist__row--body">
                            <td
                                class="wishlist__column wishlist__column--body wishlist__column--image"
                            >
                                <div class="image image--type--product">
                                    <a href="product-full.html" class="image__body"
                                    ><img
                                            class="image__tag"
                                            src="images/products/product-3-160x160.jpg"
                                            alt=""
                                        /></a>
                                </div>
                            </td>
                            <td
                                class="wishlist__column wishlist__column--body wishlist__column--product"
                            >
                                <div class="wishlist__product-name">
                                    <a href="#">Left Headlight Of Brandix Z54</a>
                                </div>
                                <div class="wishlist__product-rating">
                                    <div class="wishlist__product-rating-stars">
                                        <div class="rating">
                                            <div class="rating__body">
                                                <div
                                                    class="rating__star rating__star--active"
                                                ></div>
                                                <div
                                                    class="rating__star rating__star--active"
                                                ></div>
                                                <div
                                                    class="rating__star rating__star--active"
                                                ></div>
                                                <div class="rating__star"></div>
                                                <div class="rating__star"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="wishlist__product-rating-title">
                                        14 reviews
                                    </div>
                                </div>
                            </td>
                            <td
                                class="wishlist__column wishlist__column--body wishlist__column--stock"
                            >
                                <div
                                    class="status-badge status-badge--style--success status-badge--has-text"
                                >
                                    <div class="status-badge__body">
                                        <div class="status-badge__text">In Stock</div>
                                    </div>
                                </div>
                            </td>
                            <td
                                class="wishlist__column wishlist__column--body wishlist__column--price"
                            >
                                $349.00
                            </td>
                            <td
                                class="wishlist__column wishlist__column--body wishlist__column--button"
                            >
                                <button type="button" class="btn btn-sm btn-primary">
                                    Add to cart
                                </button>
                            </td>
                            <td
                                class="wishlist__column wishlist__column--body wishlist__column--remove"
                            >
                                <livewire:remove-from-wishlist />
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="block-space block-space--layout--before-footer"></div>
    </div>


</x-app-layout>
