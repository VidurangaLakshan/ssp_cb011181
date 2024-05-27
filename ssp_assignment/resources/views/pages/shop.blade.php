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
                                aria-current="page"><span class="breadcrumb__item-link">Shop</span></li>
                            <li class="breadcrumb__title-safe-area" role="presentation"></li>
                        </ol>
                    </nav>
                    @if (url()->current() == 'http://127.0.0.1/shop')
                        <h1 class="block-header__title">All Products</h1>
                    @else
                        <h1 class="block-header__title">{{ $currentCategory }}</h1>
                    @endif
                </div>
            </div>
        </div>
        <div class="block-split block-split--has-sidebar">
            <div class="container">
                <div class="block-split__row row no-gutters">
                    <div class="block-split__item block-split__item-sidebar col-auto">
                        <div class="sidebar sidebar--offcanvas--mobile">
                            <div class="sidebar__backdrop"></div>
                            <div class="sidebar__body">
                                <div class="sidebar__header">
                                    <div class="sidebar__title">Filters</div>
                                    <button class="sidebar__close"
                                            type="button">
                                        <svg width="12" height="12">
                                            <path d="M10.8,10.8L10.8,10.8c-0.4,0.4-1,0.4-1.4,0L6,7.4l-3.4,3.4c-0.4,0.4-1,0.4-1.4,0l0,0c-0.4-0.4-0.4-1,0-1.4L4.6,6L1.2,2.6
	c-0.4-0.4-0.4-1,0-1.4l0,0c0.4-0.4,1-0.4,1.4,0L6,4.6l3.4-3.4c0.4-0.4,1-0.4,1.4,0l0,0c0.4,0.4,0.4,1,0,1.4L7.4,6l3.4,3.4
	C11.2,9.8,11.2,10.4,10.8,10.8z"/>
                                        </svg>
                                    </button>
                                </div>
                                <div class="sidebar__content">
                                    <div class="widget widget-filters widget-filters--offcanvas--mobile"
                                         data-collapse data-collapse-opened-class="filter--opened">
                                        <form action="/filter" method="GET">
                                            <div class="widget__header widget-filters__header">
                                                <h4>Filters</h4>
                                            </div>
                                            <div class="widget-filters__list">
                                                <div class="widget-filters__item">
                                                    <div class="filter filter--opened" data-collapse-item>
                                                        <button
                                                            type="button" class="filter__title"
                                                            data-collapse-trigger>Categories <span
                                                                class="filter__arrow"><svg width="12px"
                                                                                           height="7px">
																	<path
                                                                        d="M0.286,0.273 L0.286,0.273 C-0.070,0.629 -0.075,1.204 0.276,1.565 L5.516,6.993 L10.757,1.565 C11.108,1.204 11.103,0.629 10.747,0.273 L10.747,0.273 C10.385,-0.089 9.796,-0.086 9.437,0.279 L5.516,4.296 L1.596,0.279 C1.237,-0.086 0.648,-0.089 0.286,0.273 Z"/>
																</svg></span></button>
                                                        <div class="filter__body" data-collapse-content>
                                                            <div class="filter__container">
                                                                <div class="filter-categories">
                                                                    <ul class="filter-categories__list">

                                                                        @foreach ($categories as $category)

                                                                            <li
                                                                                class="filter-categories__item filter-categories__item--parent">
                                                                            <span
                                                                                class="filter-categories__arrow"></span><a
                                                                                    href="/shop/{{ $category->name }}">{{ $category->name }}</a>
                                                                                <div
                                                                                    class="filter-categories__counter">{{ $category->products()->where('status', '=', 'active')->count() }}
                                                                                </div>
                                                                            </li>

                                                                        @endforeach


                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="widget-filters__item">
                                                    <div class="filter filter--opened" data-collapse-item>
                                                        <button
                                                            type="button" class="filter__title"
                                                            data-collapse-trigger>Vehicle <span
                                                                class="filter__arrow"><svg width="12px"
                                                                                           height="7px">
																	<path
                                                                        d="M0.286,0.273 L0.286,0.273 C-0.070,0.629 -0.075,1.204 0.276,1.565 L5.516,6.993 L10.757,1.565 C11.108,1.204 11.103,0.629 10.747,0.273 L10.747,0.273 C10.385,-0.089 9.796,-0.086 9.437,0.279 L5.516,4.296 L1.596,0.279 C1.237,-0.086 0.648,-0.089 0.286,0.273 Z"/>
																</svg></span></button>
                                                        <div class="filter__body" data-collapse-content>
                                                            <div class="filter__container">
                                                                <div class="filter-vehicle">
                                                                    <ul class="filter-vehicle__list">
                                                                        <li class="filter-vehicle__item"><label
                                                                                class="filter-vehicle__item-label"><span
                                                                                    class="filter-list__input input-radio"><span
                                                                                        class="input-radio__body"><input
                                                                                            class="input-radio__input"
                                                                                            name="filter_vehicle"
                                                                                            value="all"
                                                                                            checked="checked"
                                                                                            type="radio"> <span
                                                                                            class="input-radio__circle"></span>
																					</span></span><span
                                                                                    class="filter-vehicle__item-title">All Parts </span>
                                                                                <span
                                                                                    class="filter-vehicle__item-counter">{{ \App\Models\Product::all()->count() }}</span></label>
                                                                        </li>

                                                                        @foreach ($garageVehicles as $garageVehicle)
                                                                            <li class="filter-vehicle__item"><label
                                                                                    class="filter-vehicle__item-label"><span
                                                                                        class="filter-list__input input-radio"><span
                                                                                            class="input-radio__body"><input
                                                                                                class="input-radio__input"
                                                                                                name="filter_vehicle"
                                                                                                value="{{ $garageVehicle->year }}_{{ $garageVehicle->brand }}_{{ $garageVehicle->model }}"
                                                                                                type="radio"
                                                                                                @php
                                                                                                    // split the filter_vehicle value to get the year, brand and model by '_' delimiter
                                                                                                @endphp
                                                                                                @if ($garageVehicle->year == $setvehicleYear && $garageVehicle->brand == $setvehicleBrand && $garageVehicle->model == $setvehicleModel) checked="checked" @endif
                                                                                            > <span
                                                                                                class="input-radio__circle"></span>
																					</span></span><span
                                                                                        class="filter-vehicle__item-title">{{ $garageVehicle->year }} {{ $garageVehicle->brand }} {{ $garageVehicle->model }}
																					</span>

                                                                                    @php

                                                                                        $supportedVehicles = \App\Models\SupportedVehicles::where('brand', $garageVehicle->brand)->where('model', $garageVehicle->model)->where('year', $garageVehicle->year)->get();

                                                                                    @endphp


                                                                                    <span
                                                                                        class="filter-vehicle__item-counter">{{ $supportedVehicles->count() }}</span></label>
                                                                            </li>
                                                                        @endforeach

                                                                    </ul>
                                                                    <div class="filter-vehicle__button">

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="widget-filters__actions d-flex">

                                                <button type="submit"
                                                        class="btn btn-primary btn-sm">Filter
                                                </button>

                                                <a value="Reset" href="{{ route('shop') }}"
                                                   class="btn btn-secondary btn-sm">Reset
                                                </a>


                                            </div>
                                        </form>
                                    </div>
                                    <div class="card widget widget-products d-none d-lg-block">
                                        <div class="widget__header">
                                            <h4>Latest Products</h4>
                                        </div>
                                        <div class="widget-products__list">

                                            @foreach($latestProducts as $latestProduct)

                                                <div class="widget-products__item">
                                                    <div class="widget-products__image image image--type--product"><a
                                                            href="{{ route('product.show', $latestProduct->id) }}"
                                                            class="image__body"><img
                                                                class="image__tag"
                                                                src="{{ asset($latestProduct->image) }}" alt=""></a>
                                                    </div>
                                                    <div class="widget-products__info">
                                                        <div class="widget-products__name"><a
                                                                href="{{ route('product.show', $latestProduct->id) }}">{{ $latestProduct->name }}</a>
                                                        </div>
                                                        <div class="widget-products__prices">
                                                            <div
                                                                class="widget-products__price widget-products__price--current">
                                                                Rs.{{ number_format($latestProduct->price, 2, '.', ',') }}
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            @endforeach

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="block-split__item block-split__item-content col-auto">
                        <div class="block">
                            <div class="products-view">
                                <div class="products-view__options view-options view-options--offcanvas--mobile">
                                    <div class="view-options__body">
                                        <button type="button"
                                                class="view-options__filters-button filters-button"><span
                                                class="filters-button__icon"><svg width="16" height="16">
														<path d="M7,14v-2h9v2H7z M14,7h2v2h-2V7z M12.5,6C12.8,6,13,6.2,13,6.5v3c0,0.3-0.2,0.5-0.5,0.5h-2
	C10.2,10,10,9.8,10,9.5v-3C10,6.2,10.2,6,10.5,6H12.5z M7,2h9v2H7V2z M5.5,5h-2C3.2,5,3,4.8,3,4.5v-3C3,1.2,3.2,1,3.5,1h2
	C5.8,1,6,1.2,6,1.5v3C6,4.8,5.8,5,5.5,5z M0,2h2v2H0V2z M9,9H0V7h9V9z M2,14H0v-2h2V14z M3.5,11h2C5.8,11,6,11.2,6,11.5v3
	C6,14.8,5.8,15,5.5,15h-2C3.2,15,3,14.8,3,14.5v-3C3,11.2,3.2,11,3.5,11z"/>
													</svg> </span><span class="filters-button__title">Filters</span>
                                            <span class="filters-button__counter">3</span></button>

                                        <div class="view-options__legend">Showing {{ $products->count() }} products
                                        </div>
                                        <div class="view-options__spring"></div>
                                    </div>

                                </div>


                                <div class="products-view__list products-list products-list--grid--4"
                                     data-layout="grid" data-with-features="false">
                                    <div class="products-list__content">


                                        @foreach($products as $product)

                                            <div class="products-list__item">
                                                <div class="product-card">
                                                    <div class="product-card__image">
                                                        <div class="image image--type--product"><a
                                                                href="{{ route('product.show', $product->id) }}"
                                                                class="image__body"><img
                                                                    class="image__tag"
                                                                    src="{{ asset($product->image) }}"
                                                                    alt=""></a></div>
                                                        <div
                                                            class="status-badge status-badge--style--success product-card__fit status-badge--has-icon status-badge--has-text">
                                                            <div class="status-badge__body">
                                                                <div class="status-badge__icon">
                                                                    <svg width="13"
                                                                         height="13">
                                                                        <path
                                                                            d="M12,4.4L5.5,11L1,6.5l1.4-1.4l3.1,3.1L10.6,3L12,4.4z"/>
                                                                    </svg>
                                                                </div>
                                                                <div class="status-badge__text">Part Fit for 2011 Ford
                                                                    Focus S
                                                                </div>
                                                                <div class="status-badge__tooltip" tabindex="0"
                                                                     data-toggle="tooltip"
                                                                     title="Part&#x20;Fit&#x20;for&#x20;2011&#x20;Ford&#x20;Focus&#x20;S">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-card__info">
                                                        <div class="product-card__name">
                                                            <div>
                                                                <a href="{{ route('product.show', $product->id) }}">{{ $product->name }}</a>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="product-card__footer">
                                                        <div class="product-card__prices">
                                                            <div
                                                                class="product-card__price product-card__price--current">
                                                                Rs.{{ number_format($product->price, 2, '.', ',') }}
                                                            </div>
                                                        </div>
                                                        <button class="product-card__addtocart-icon" type="button"
                                                                aria-label="Add to cart">
                                                            <svg width="20" height="20">
                                                                <circle cx="7" cy="17" r="2"/>
                                                                <circle cx="15" cy="17" r="2"/>
                                                                <path d="M20,4.4V5l-1.8,6.3c-0.1,0.4-0.5,0.7-1,0.7H6.7c-0.4,0-0.8-0.3-1-0.7L3.3,3.9C3.1,3.3,2.6,3,2.1,3H0.4C0.2,3,0,2.8,0,2.6
	V1.4C0,1.2,0.2,1,0.4,1h2.5c1,0,1.8,0.6,2.1,1.6L5.1,3l2.3,6.8c0,0.1,0.2,0.2,0.3,0.2h8.6c0.1,0,0.3-0.1,0.3-0.2l1.3-4.4
	C17.9,5.2,17.7,5,17.5,5H9.4C9.2,5,9,4.8,9,4.6V3.4C9,3.2,9.2,3,9.4,3h9.2C19.4,3,20,3.6,20,4.4z"/>
                                                            </svg>
                                                        </button>
                                                        <button class="product-card__addtocart-full"
                                                                type="button">Add to cart
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>

                                        @endforeach


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="block-space block-space--layout--before-footer"></div>
            </div>
        </div>
    </div>

</x-app-layout>
