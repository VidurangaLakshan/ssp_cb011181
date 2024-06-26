<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'AutoMate') }}</title>

    <title>AutoMate</title>


    <link rel="icon" type="image/png" href="/images/favicon.png"><!-- fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500,500i,700,700i"><!-- css -->
    <link rel="stylesheet" href="/vendor/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="/vendor/owl-carousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="/vendor/photoswipe/photoswipe.css">
    <link rel="stylesheet" href="/vendor/photoswipe/default-skin/default-skin.css">
    <link rel="stylesheet" href="/vendor/select2/css/select2.min.css">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/style.header-spaceship-variant-one.css" media="(min-width: 1200px)">
    <link rel="stylesheet" href="/css/style.mobile-header-variant-one.css" media="(max-width: 1199px)">
    <!-- font - fontawesome -->
    <link rel="stylesheet" href="/vendor/fontawesome/css/all.min.css">
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-97489509-8"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag("js", new Date());
        gtag("config", "UA-97489509-8");
    </script>


    <!-- Scripts -->
    {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}

    <!-- Styles -->
    @livewireStyles
</head>

<body>


{{-- @livewire('navigation-menu') --}}


<div class="site">


    <!-- site__mobile-header -->
    <header class="site__mobile-header">
        <div class="mobile-header">
            <div class="container">
                <div class="mobile-header__body">
                    <button class="mobile-header__menu-button" type="button">
                        <svg
                                width="18px" height="14px">
                            <path
                                    d="M-0,8L-0,6L18,6L18,8L-0,8ZM-0,-0L18,-0L18,2L-0,2L-0,-0ZM14,14L-0,14L-0,12L14,12L14,14Z"/>
                        </svg>
                    </button>

                    <a class="mobile-header__logo" href="#"><!-- mobile-logo -->

                        <img src="/images/logo.png" height="40">

                        <!-- <svg
    width="130" height="20">
    <path class="mobile-header__logo-part-one" d="M40,19.9c-0.3,0-0.7,0.1-1,0.1h-4.5c-0.8,0-1.5-0.7-1.5-1.5v-17C33,0.7,33.7,0,34.5,0H39c0.3,0,0.7,0,1,0.1
c4.5,0.5,8,4.3,8,8.9v2C48,15.6,44.5,19.5,40,19.9z M44,9.5C44,6.7,41.8,4,39,4h-0.8C37.5,4,37,4.5,37,5.2v9.6
c0,0.7,0.5,1.2,1.2,1.2H39c2.8,0,5-2.7,5-5.5V9.5z M29.5,20h-11c-0.8,0-1.5-0.7-1.5-1.5v-17C17,0.7,17.7,0,18.5,0h11
C30.3,0,31,0.7,31,1.5v1C31,3.3,30.3,4,29.5,4H21v4h6.5C28.3,8,29,8.7,29,9.5v1c0,0.8-0.7,1.5-1.5,1.5H21v4h8.5
c0.8,0,1.5,0.7,1.5,1.5v1C31,19.3,30.3,20,29.5,20z M14.8,17.8c0.6,1-0.1,2.3-1.3,2.3h-2L8,14H4v4.5C4,19.3,3.3,20,2.5,20h-1
C0.7,20,0,19.3,0,18.5v-17C0,0.7,0.7,0,1.5,0H8c0.3,0,0.7,0,1,0.1c3.4,0.5,6,3.4,6,6.9c0,2.4-1.2,4.5-3.1,5.8L14.8,17.8z M9,4.2
C8.7,4.1,8.3,4,8,4H5C4.4,4,4,4.4,4,5v4c0,0.6,0.4,1,1,1h3c0.3,0,0.7-0.1,1-0.2c0.3-0.1,0.7-0.3,0.9-0.5C10.6,8.8,11,7.9,11,7
C11,5.7,10.2,4.6,9,4.2z"></path>
    <path class="mobile-header__logo-part-two" d="M128.6,6h-1c-0.5,0-0.9-0.3-1.2-0.7c-0.2-0.3-0.4-0.6-0.8-0.8c-0.5-0.3-1.4-0.5-2.1-0.5c-1.5,0-2.8,0.9-2.8,2
c0,0.7,0.5,1.3,1.2,1.6c0.8,0.4,1.1,1.3,0.7,2.1l-0.4,0.9c-0.4,0.7-1.2,1-1.8,0.6c-0.6-0.3-1.2-0.7-1.6-1.2c-1-1.1-1.7-2.5-1.7-4
c0-3.3,2.9-6,6.5-6c2.8,0,5.5,1.7,6.4,4C130.3,4.9,129.6,6,128.6,6z M113.5,4H109v14.5c0,0.8-0.7,1.5-1.5,1.5h-1
c-0.8,0-1.5-0.7-1.5-1.5V4h-4.5C99.7,4,99,3.3,99,2.5v-1c0-0.8,0.7-1.5,1.5-1.5h13c0.8,0,1.5,0.7,1.5,1.5v1C115,3.3,114.3,4,113.5,4
z M97.8,17.8c0.6,1-0.1,2.3-1.3,2.3h-2L91,14h-4v4.5c0,0.8-0.7,1.5-1.5,1.5h-1c-0.8,0-1.5-0.7-1.5-1.5v-17C83,0.7,83.7,0,84.5,0H91
c0.3,0,0.7,0,1,0.1c3.4,0.5,6,3.4,6,6.9c0,2.4-1.2,4.5-3.1,5.8L97.8,17.8z M92,4.2C91.7,4.1,91.3,4,91,4h-3c-0.6,0-1,0.4-1,1v4
c0,0.6,0.4,1,1,1h3c0.3,0,0.7-0.1,1-0.2c0.3-0.1,0.7-0.3,0.9-0.5C93.6,8.8,94,7.9,94,7C94,5.7,93.2,4.6,92,4.2z M79.5,20h-1.1
c-0.6,0-1.2-0.4-1.4-1l-1.5-4h-6.1L68,19c-0.2,0.6-0.8,1-1.4,1h-1.1c-1,0-1.8-1-1.4-2l6.2-17c0.2-0.6,0.8-1,1.4-1h1.6
c0.6,0,1.2,0.4,1.4,1l6.2,17C81.3,19,80.5,20,79.5,20z M72.5,6.6L70.9,11h3.2L72.5,6.6z M58,14h-4v4.5c0,0.8-0.7,1.5-1.5,1.5h-1
c-0.8,0-1.5-0.7-1.5-1.5v-17C50,0.7,50.7,0,51.5,0H58c3.9,0,7,3.1,7,7S61.9,14,58,14z M61,7c0-1.3-0.8-2.4-2-2.8
C58.7,4.1,58.3,4,58,4h-3c-0.5,0-1,0.4-1,1v4c0,0.6,0.5,1,1,1h3c0.3,0,0.7-0.1,1-0.2c0.3-0.1,0.7-0.3,0.9-0.5C60.6,8.8,61,7.9,61,7z
M118.4,14h1c0.5,0,0.9,0.3,1.2,0.7c0.2,0.3,0.4,0.6,0.8,0.8c0.5,0.3,1.4,0.5,2.1,0.5c1.5,0,2.8-0.9,2.8-2c0-0.7-0.5-1.3-1.2-1.6
c-0.8-0.4-1.1-1.3-0.7-2.1l0.4-0.9c0.4-0.7,1.2-1,1.8-0.6c0.6,0.3,1.2,0.7,1.6,1.2c1,1.1,1.7,2.5,1.7,4c0,3.3-2.9,6-6.5,6
c-2.8,0-5.5-1.7-6.4-4C116.7,15.1,117.4,14,118.4,14z"></path>
   </svg> -->
                        <!-- mobile-logo / end --></a>

                    <div class="mobile-header__search mobile-search">
                        <form class="mobile-search__body" action="/shop" method="GET">
                            <input type="text" name="search" class="mobile-search__input"
                                                                 placeholder="Enter keyword or part number">
                            <button type="button"
                                    class="mobile-search__vehicle-picker" aria-label="Select Vehicle">
                                <svg
                                        width="20" height="20">
                                    <path d="M6.6,2c2,0,4.8,0,6.8,0c1,0,2.9,0.8,3.6,2.2C17.7,5.7,17.9,7,18.4,7C20,7,20,8,20,8v1h-1v7.5c0,0.8-0.7,1.5-1.5,1.5h-1
 c-0.8,0-1.5-0.7-1.5-1.5V16H5v0.5C5,17.3,4.3,18,3.5,18h-1C1.7,18,1,17.3,1,16.5V16V9H0V8c0,0,0.1-1,1.6-1C2.1,7,2.3,5.7,3,4.2
 C3.7,2.8,5.6,2,6.6,2z M13.3,4H6.7c-0.8,0-1.4,0-2,0.7c-0.5,0.6-0.8,1.5-1,2C3.6,7.1,3.5,7.9,3.7,8C4.5,8.4,6.1,9,10,9
 c4,0,5.4-0.6,6.3-1c0.2-0.1,0.2-0.8,0-1.2c-0.2-0.4-0.5-1.5-1-2C14.7,4,14.1,4,13.3,4z M4,10c-0.4-0.3-1.5-0.5-2,0
 c-0.4,0.4-0.4,1.6,0,2c0.5,0.5,4,0.4,4,0C6,11.2,4.5,10.3,4,10z M14,12c0,0.4,3.5,0.5,4,0c0.4-0.4,0.4-1.6,0-2c-0.5-0.5-1.3-0.3-2,0
 C15.5,10.2,14,11.3,14,12z"/>
                                </svg>
                                <span class="mobile-search__vehicle-picker-label">Vehicle</span></button>
                            <button type="submit" class="mobile-search__button mobile-search__button--search">
                                <svg
                                        width="20" height="20">
                                    <path d="M19.2,17.8c0,0-0.2,0.5-0.5,0.8c-0.4,0.4-0.9,0.6-0.9,0.6s-0.9,0.7-2.8-1.6c-1.1-1.4-2.2-2.8-3.1-3.9C10.9,14.5,9.5,15,8,15
 c-3.9,0-7-3.1-7-7s3.1-7,7-7s7,3.1,7,7c0,1.5-0.5,2.9-1.3,4c1.1,0.8,2.5,2,4,3.1C20,16.8,19.2,17.8,19.2,17.8z M8,3C5.2,3,3,5.2,3,8
 c0,2.8,2.2,5,5,5c2.8,0,5-2.2,5-5C13,5.2,10.8,3,8,3z"/>
                                </svg>
                            </button>
                            <button type="button"
                                    class="mobile-search__button mobile-search__button--close">
                                <svg width="20"
                                     height="20">
                                    <path d="M16.7,16.7L16.7,16.7c-0.4,0.4-1,0.4-1.4,0L10,11.4l-5.3,5.3c-0.4,0.4-1,0.4-1.4,0l0,0c-0.4-0.4-0.4-1,0-1.4L8.6,10L3.3,4.7
 c-0.4-0.4-0.4-1,0-1.4l0,0c0.4-0.4,1-0.4,1.4,0L10,8.6l5.3-5.3c0.4-0.4,1-0.4,1.4,0l0,0c0.4,0.4,0.4,1,0,1.4L11.4,10l5.3,5.3
 C17.1,15.7,17.1,16.3,16.7,16.7z"/>
                                </svg>
                            </button>
                            <div class="mobile-search__field"></div>
                        </form>
                    </div>
                    <div class="mobile-header__indicators">
                        <div class="mobile-indicator mobile-indicator--search d-md-none">
                            <button type="button"
                                    class="mobile-indicator__button"><span class="mobile-indicator__icon"><svg
                                            width="20" height="20">
                                            <path d="M19.2,17.8c0,0-0.2,0.5-0.5,0.8c-0.4,0.4-0.9,0.6-0.9,0.6s-0.9,0.7-2.8-1.6c-1.1-1.4-2.2-2.8-3.1-3.9C10.9,14.5,9.5,15,8,15
 c-3.9,0-7-3.1-7-7s3.1-7,7-7s7,3.1,7,7c0,1.5-0.5,2.9-1.3,4c1.1,0.8,2.5,2,4,3.1C20,16.8,19.2,17.8,19.2,17.8z M8,3C5.2,3,3,5.2,3,8
 c0,2.8,2.2,5,5,5c2.8,0,5-2.2,5-5C13,5.2,10.8,3,8,3z"/>
                                        </svg></span></button>
                        </div>
                        <div class="mobile-indicator d-none d-md-block"><a href="#"
                                                                           class="mobile-indicator__button"><span
                                        class="mobile-indicator__icon"><svg
                                            width="20" height="20">
                                            <path d="M20,20h-2c0-4.4-3.6-8-8-8s-8,3.6-8,8H0c0-4.2,2.6-7.8,6.3-9.3C4.9,9.6,4,7.9,4,6c0-3.3,2.7-6,6-6s6,2.7,6,6
 c0,1.9-0.9,3.6-2.3,4.7C17.4,12.2,20,15.8,20,20z M14,6c0-2.2-1.8-4-4-4S6,3.8,6,6s1.8,4,4,4S14,8.2,14,6z"/>
                                        </svg></span></a></div>
                        <div class="mobile-indicator d-none d-md-block"><a href="#"
                                                                           class="mobile-indicator__button"><span
                                        class="mobile-indicator__icon"><svg
                                            width="20" height="20">
                                            <path d="M14,3c2.2,0,4,1.8,4,4c0,4-5.2,10-8,10S2,11,2,7c0-2.2,1.8-4,4-4c1,0,1.9,0.4,2.7,1L10,5.2L11.3,4C12.1,3.4,13,3,14,3 M14,1
 c-1.5,0-2.9,0.6-4,1.5C8.9,1.6,7.5,1,6,1C2.7,1,0,3.7,0,7c0,5,6,12,10,12s10-7,10-12C20,3.7,17.3,1,14,1L14,1z"/>
                                        </svg></span></a></div>
                        <div class="mobile-indicator"><a href="/cart" class="mobile-indicator__button"><span
                                        class="mobile-indicator__icon"><svg width="20" height="20">
                                            <circle cx="7" cy="17" r="2"/>
                                            <circle cx="15" cy="17" r="2"/>
                                            <path d="M20,4.4V5l-1.8,6.3c-0.1,0.4-0.5,0.7-1,0.7H6.7c-0.4,0-0.8-0.3-1-0.7L3.3,3.9C3.1,3.3,2.6,3,2.1,3H0.4C0.2,3,0,2.8,0,2.6
 V1.4C0,1.2,0.2,1,0.4,1h2.5c1,0,1.8,0.6,2.1,1.6L5.1,3l2.3,6.8c0,0.1,0.2,0.2,0.3,0.2h8.6c0.1,0,0.3-0.1,0.3-0.2l1.3-4.4
 C17.9,5.2,17.7,5,17.5,5H9.4C9.2,5,9,4.8,9,4.6V3.4C9,3.2,9.2,3,9.4,3h9.2C19.4,3,20,3.6,20,4.4z"/>
                                        </svg> </span></a></div>
                    </div>
                </div>
            </div>
        </div>
    </header><!-- site__mobile-header / end -->


    <!-- site__header -->
    <header class="site__header">
        <div class="header">
            <div class="header__megamenu-area megamenu-area"></div>
            <div class="header__topbar-start-bg"></div>
            <div class="header__topbar-start">
                <div class="topbar topbar--spaceship-start">
                    <div class="topbar__item-text d-none d-xxl-flex">Call Us: (+94) 76-720-8259</div>
                    <div class="topbar__item-text"><a class="topbar__link" href="#">About Us</a></div>
                    <div class="topbar__item-text"><a class="topbar__link" href="#">Track Order</a></div>
                </div>
            </div>
            <div class="header__topbar-end-bg"></div>
            <div class="header__topbar-end">
                <div class="topbar topbar--spaceship-end">
                    <div class="topbar__item-text"><a class="topbar__link" href="#">Track Order</a></div>
                    <div class="topbar__item-text"><a class="topbar__link" href="#">About Us</a></div>
                    <div class="topbar__item-text d-none d-xxl-flex">Call Us: (+94) 76-720-8259</div>
                </div>
            </div>
            <div class="header__navbar">
                <div class="header__navbar-menu" style="width: 80%">
                    <div class="main-menu">
                        <ul class="main-menu__list" style="justify-content: space-evenly">
                            <li
                                    class="main-menu__item">
                                <a href="/" class="main-menu__link">Home</a>
                            </li>

                            <li
                                    class="main-menu__item">
                                <a href="/shop" class="main-menu__link">Shop
                                </a>
                            </li>

                            <li class="main-menu__item">
                                @guest
                                    <a href="{{ route('login') }}" class="main-menu__link">Account</a>
                                @else
                                    <a href="/account/dashboard" class="main-menu__link">Account</a>
                                @endguest
                            </li>
                        </ul>
                    </div>
                </div>
            </div>


            <div class="header__logo"><a href="/" class="logo">
                    <div class="logo__slogan" style="text-align: center;">Auto parts for Cars, trucks and
                        motorcycles
                    </div>
                    <div class="logo__image" style="text-align: center;">

                        <img src="/images/logo2.png" height="30">

                        <!-- logo -->
                        <!-- <svg width="168" height="26"> -->
                        <!-- <path class="logo__part-primary" d="M50,26h-5c-1.1,0-2-0.9-2-2V2c0-1.1,0.9-2,2-2h5c6.6,0,12,5.4,12,12v2C62,20.6,56.6,26,50,26z M57,12
c0-3.9-3.1-7-7-7h-0.8C48.5,5,48,5.5,48,6.2v13.6c0,0.7,0.5,1.2,1.2,1.2H50c3.9,0,7-3.1,7-7V12z M38.5,26h-13h-2
c-0.8,0-1.5-0.7-1.5-1.5v-2v-9v-2v-8v-2C22,0.7,22.7,0,23.5,0h2h13C39.3,0,40,0.7,40,1.5v2C40,4.3,39.3,5,38.5,5H27v5h9.5
c0.8,0,1.5,0.7,1.5,1.5v2c0,0.8-0.7,1.5-1.5,1.5H27v6h11.5c0.8,0,1.5,0.7,1.5,1.5v2C40,25.3,39.3,26,38.5,26z M18.8,23.8
c0.6,1-0.1,2.3-1.3,2.3h-2.3c-0.5,0-1-0.3-1.3-0.8L9.7,18H5v6.5C5,25.3,4.3,26,3.5,26h-2C0.7,26,0,25.3,0,24.5v-23
C0,0.7,0.7,0,1.5,0H10c5,0,9,4,9,9c0,3.2-1.7,6.1-4.3,7.7L18.8,23.8z M10,5H6C5.5,5,5,5.4,5,6v6c0,0.6,0.4,1,1,1h4c2.2,0,4-1.8,4-4
S12.2,5,10,5z"></path>
    <path class="logo__part-secondary" d="M166.5,8h-2.3c-0.6,0-1.1-0.4-1.4-1c-0.5-1.2-2-2-3.8-2c-2.2,0-4,1.3-4,3c0,0.9,0.6,1.8,1.5,2.3
c0.2,0.1,0.5,0.3,0.7,0.4c0.9,0.3,1.2,1.3,0.7,2.1l-1,1.7c-0.4,0.7-1.2,0.9-1.9,0.6c-1.2-0.5-2.3-1.3-3.1-2.2c-1.2-1.4-2-3.1-2-5
c0-4.4,4-8,9-8c4.3,0,8,2.6,8.9,6.2C168.2,7.1,167.4,8,166.5,8z M151.5,18h2.3c0.6,0,1.1,0.4,1.4,1c0.5,1.2,2,2,3.8,2
c2.2,0,4-1.3,4-3c0-0.9-0.6-1.8-1.5-2.3c-0.2-0.1-0.5-0.3-0.7-0.4c-0.9-0.3-1.2-1.3-0.7-2.1l1-1.7c0.4-0.6,1.2-0.9,1.9-0.6
c1.2,0.5,2.3,1.3,3.1,2.2c1.2,1.4,2,3.1,2,5c0,4.4-4,8-9,8c-4.3,0-8-2.6-8.9-6.2C149.8,18.9,150.6,18,151.5,18z M146.5,5H140v19.5
c0,0.8-0.7,1.5-1.5,1.5h-2c-0.8,0-1.5-0.7-1.5-1.5V5h-6.5c-0.8,0-1.5-0.7-1.5-1.5v-2c0-0.8,0.7-1.5,1.5-1.5h18
c0.8,0,1.5,0.7,1.5,1.5v2C148,4.3,147.3,5,146.5,5z M125.8,23.8c0.6,1-0.2,2.3-1.3,2.3h-2.3c-0.5,0-1-0.3-1.3-0.8l-4.2-7.3H112v6.5
c0,0.8-0.7,1.5-1.5,1.5h-2c-0.8,0-1.5-0.7-1.5-1.5v-23c0-0.8,0.7-1.5,1.5-1.5h8.5c5,0,9,4,9,9c0,3.2-1.7,6.1-4.3,7.7L125.8,23.8z
M117,5h-4c-0.5,0-1,0.4-1,1v6c0,0.6,0.4,1,1,1h4c2.2,0,4-1.8,4-4S119.2,5,117,5z M103.8,26h-2.3c-0.7,0-1.4-0.4-1.6-1.1l-2.4-6.7
c0-0.1-0.1-0.1-0.2-0.1h-7.5c-0.1,0-0.2,0.1-0.2,0.1l-2.4,6.7c-0.2,0.7-0.9,1.1-1.6,1.1h-2.3c-0.8,0-1.4-0.8-1.1-1.6l8.3-23.3
C90.7,0.4,91.3,0,92,0H95c0.7,0,1.4,0.4,1.6,1.1l8.3,23.3C105.2,25.2,104.6,26,103.8,26z M95.5,12.7l-1.8-4.9
c-0.1-0.2-0.3-0.2-0.4,0l-1.8,4.9c0,0.1,0.1,0.3,0.2,0.3h3.5C95.4,13,95.5,12.9,95.5,12.7z M83.9,10.2c0,0.2-0.1,0.4-0.1,0.6
c0,0.2-0.1,0.4-0.1,0.6c-0.1,0.5-0.3,1.1-0.6,1.6c-0.1,0.1-0.1,0.3-0.2,0.4c-0.1,0.1-0.1,0.2-0.2,0.4c-0.2,0.4-0.5,0.7-0.8,1.1
c-0.1,0.1-0.2,0.2-0.3,0.3c-0.1,0.1-0.2,0.2-0.3,0.3c-0.5,0.5-1.1,0.9-1.7,1.3c-1.4,0.8-3,1.3-4.7,1.3h-5v6.5c0,0.8-0.7,1.5-1.5,1.5
h-2c-0.8,0-1.5-0.7-1.5-1.5v-23C65,0.7,65.7,0,66.5,0H75c1.7,0,3.3,0.5,4.7,1.3c0.6,0.4,1.2,0.8,1.7,1.3c0.1,0.1,0.2,0.2,0.3,0.3
c0.1,0.1,0.2,0.2,0.3,0.3c0.3,0.3,0.5,0.7,0.8,1.1c0.1,0.1,0.1,0.2,0.2,0.3C83,4.8,83.1,5,83.1,5.1c0.2,0.5,0.4,1,0.6,1.6
c0,0.2,0.1,0.4,0.1,0.6c0,0.2,0.1,0.4,0.1,0.6C83.9,8,84,8.2,84,8.4c0,0.2,0,0.4,0,0.6s0,0.4,0,0.6C84,9.8,83.9,10,83.9,10.2z M75,5
h-4c-0.6,0-1,0.4-1,1v6c0,0.6,0.4,1,1,1h4c2.2,0,4-1.8,4-4S77.2,5,75,5z"></path> -->
                        </svg>
                        <!-- logo / end -->
                    </div>
                </a></div>
            <div class="header__search">
                <div class="search">
                    <form class="search__body">
                        <div class="search__shadow"></div>
                        <input class="search__input" type="text"
                               placeholder="Enter Keyword or Part Name">
                        <a
                                class="search__button search__button--start" href="{{ route('account-garage') }}">
                            <span
                                    class="search__button-icon">
                                <svg width="20" height="20">
                                        <path d="M6.6,2c2,0,4.8,0,6.8,0c1,0,2.9,0.8,3.6,2.2C17.7,5.7,17.9,7,18.4,7C20,7,20,8,20,8v1h-1v7.5c0,0.8-0.7,1.5-1.5,1.5h-1
 c-0.8,0-1.5-0.7-1.5-1.5V16H5v0.5C5,17.3,4.3,18,3.5,18h-1C1.7,18,1,17.3,1,16.5V16V9H0V8c0,0,0.1-1,1.6-1C2.1,7,2.3,5.7,3,4.2
 C3.7,2.8,5.6,2,6.6,2z M13.3,4H6.7c-0.8,0-1.4,0-2,0.7c-0.5,0.6-0.8,1.5-1,2C3.6,7.1,3.5,7.9,3.7,8C4.5,8.4,6.1,9,10,9
 c4,0,5.4-0.6,6.3-1c0.2-0.1,0.2-0.8,0-1.2c-0.2-0.4-0.5-1.5-1-2C14.7,4,14.1,4,13.3,4z M4,10c-0.4-0.3-1.5-0.5-2,0
 c-0.4,0.4-0.4,1.6,0,2c0.5,0.5,4,0.4,4,0C6,11.2,4.5,10.3,4,10z M14,12c0,0.4,3.5,0.5,4,0c0.4-0.4,0.4-1.6,0-2c-0.5-0.5-1.3-0.3-2,0
 C15.5,10.2,14,11.3,14,12z"/>
                                    </svg>
                            </span>
                            <span class="search__button-title">Select Vehicle</span>
                        </a>
                        <button class="search__button search__button--end" type="submit"><span
                                    class="search__button-icon"><svg width="20" height="20">
                                        <path d="M19.2,17.8c0,0-0.2,0.5-0.5,0.8c-0.4,0.4-0.9,0.6-0.9,0.6s-0.9,0.7-2.8-1.6c-1.1-1.4-2.2-2.8-3.1-3.9C10.9,14.5,9.5,15,8,15
 c-3.9,0-7-3.1-7-7s3.1-7,7-7s7,3.1,7,7c0,1.5-0.5,2.9-1.3,4c1.1,0.8,2.5,2,4,3.1C20,16.8,19.2,17.8,19.2,17.8z M8,3C5.2,3,3,5.2,3,8
 c0,2.8,2.2,5,5,5c2.8,0,5-2.2,5-5C13,5.2,10.8,3,8,3z"/>
                                    </svg></span></button>
                        <div class="search__box"></div>
                        <div class="search__decor">
                            <div class="search__decor-start"></div>
                            <div class="search__decor-end"></div>
                        </div>

                    </form>

                    <script>
                        // Select the form and the input box
                        let form = document.querySelector('.search__body');
                        let inputBox = document.querySelector('.search__input');

                        // Add an event listener to the input box
                        inputBox.addEventListener('input', function () {
                            // Get the value of the input box
                            let inputValue = inputBox.value;

                            // Update the 'action' attribute of the form
                            form.action = "/shop/search/" + inputValue;
                        });
                    </script>

                </div>
            </div>


            @php
                $wishlistItemCount = \App\Models\Wishlist::where('user_id', Auth::id())->count();
            @endphp


            <div class="header__indicators">

                @auth
                    <div class="indicator">
                        <a href="{{ route('wishlist.index') }}" class="indicator__button">
                        <span
                                class="indicator__icon">
                            <svg width="32" height="32">
                                    <path d="M23,4c3.9,0,7,3.1,7,7c0,6.3-11.4,15.9-14,16.9C13.4,26.9,2,17.3,2,11c0-3.9,3.1-7,7-7c2.1,0,4.1,1,5.4,2.6l1.6,2l1.6-2
 C18.9,5,20.9,4,23,4 M23,2c-2.8,0-5.4,1.3-7,3.4C14.4,3.3,11.8,2,9,2c-5,0-9,4-9,9c0,8,14,19,16,19s16-11,16-19C32,6,28,2,23,2L23,2
 z"/>
                                </svg>
                    <span class="indicator__counter">{{ $wishlistItemCount }}</span>

                        </span>
                        </a>
                    </div>
                @else
                    <div class="indicator">
                        <a href="{{ route('login') }}" class="indicator__button">
                        <span
                                class="indicator__icon">
                            <svg width="32" height="32">
                                    <path d="M23,4c3.9,0,7,3.1,7,7c0,6.3-11.4,15.9-14,16.9C13.4,26.9,2,17.3,2,11c0-3.9,3.1-7,7-7c2.1,0,4.1,1,5.4,2.6l1.6,2l1.6-2
 C18.9,5,20.9,4,23,4 M23,2c-2.8,0-5.4,1.3-7,3.4C14.4,3.3,11.8,2,9,2c-5,0-9,4-9,9c0,8,14,19,16,19s16-11,16-19C32,6,28,2,23,2L23,2
 z"/>
                                </svg>
                        </span>
                        </a>
                    </div>
                @endauth


                <div class="indicator indicator--trigger--click">


                    {{--                    @if (Route::has('login'))--}}

                    {{--                            <a href="{{ url('/dashboard') }}" --}}{{-- class="indicator__button" --}}{{-- >--}}
                    {{--                                <span class="indicator__icon">--}}
                    {{--                                    <svg width="32" height="32">--}}
                    {{--                                        <path--}}
                    {{--                                            d="M16,18C9.4,18,4,23.4,4,30H2c0-6.2,4-11.5,9.6-13.3C9.4,15.3,8,12.8,8,10c0-4.4,3.6-8,8-8s8,3.6,8,8c0,2.8-1.5,5.3-3.6,6.7C26,18.5,30,23.8,30,30h-2C28,23.4,22.6,18,16,18z M22,10c0-3.3-2.7-6-6-6s-6,2.7-6,6s2.7,6,6,6S22,13.3,22,10z"/>--}}
                    {{--                                    </svg>--}}
                    {{--                                </span>--}}
                    {{--                                <span class="indicator__title">Hello, </span>--}}
                    {{--                                <span class="indicator__value">{{ Auth::user()->name }}</span>--}}
                    {{--                            </a>--}}

                    {{--                        @else--}}

                    @guest
                        <a href="{{ route('login') }}">
                            <span class="indicator__icon">
                                <svg width="32" height="32">
                                    <path
                                            d="M16,18C9.4,18,4,23.4,4,30H2c0-6.2,4-11.5,9.6-13.3C9.4,15.3,8,12.8,8,10c0-4.4,3.6-8,8-8s8,3.6,8,8c0,2.8-1.5,5.3-3.6,6.7C26,18.5,30,23.8,30,30h-2C28,23.4,22.6,18,16,18z M22,10c0-3.3-2.7-6-6-6s-6,2.7-6,6s2.7,6,6,6S22,13.3,22,10z"/>
                                </svg>
                            </span>
                            <span class="indicator__title">Hello, Log In</span>
                            <span class="indicator__value">My Account</span>
                        </a>
                    @else
                        <a href="{{ route('login') }}" class="indicator__button">
                            <span class="indicator__icon">
                                <svg width="32" height="32">
                                    <path
                                            d="M16,18C9.4,18,4,23.4,4,30H2c0-6.2,4-11.5,9.6-13.3C9.4,15.3,8,12.8,8,10c0-4.4,3.6-8,8-8s8,3.6,8,8c0,2.8-1.5,5.3-3.6,6.7C26,18.5,30,23.8,30,30h-2C28,23.4,22.6,18,16,18z M22,10c0-3.3-2.7-6-6-6s-6,2.7-6,6s2.7,6,6,6S22,13.3,22,10z"/>
                                </svg>
                            </span>
                            <span class="indicator__title">Welcome Back,</span>
                            <span class="indicator__value" style="color: #e52727;">{{ auth()->user()->name }}</span>
                        </a>

                        <div class="indicator__content">
                            <div class="account-menu">
                                <div class="account-menu__divider"></div>
                                <div class="account-menu__user-info" style="text-align: center; margin: 10px 0;">
                                    <div class="account-menu__user-name">{{ auth()->user()->name }}</div>
                                    <div class="account-menu__user-email">{{ auth()->user()->email }}</div>
                                </div>
                                <div class="account-menu__divider"></div>
                                <ul class="account-menu__links">
                                    @if (auth()->user()->role->value == 1)
                                        <li><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                                    @else
                                        <li><a href="/account/dashboard">Dashboard</a></li>
                                    @endif
                                    <li><a href="/account/garage">Garage</a></li>
                                    <li><a href="/account/orders">Order History</a></li>
                                </ul>
                                <div class="account-menu__divider"></div>
                                <ul class="account-menu__links">
                                    <form method="POST" action="{{ route('logout') }}" x-data>
                                        @csrf

                                        <a href="{{ route('logout') }}"
                                           @click.prevent="$root.submit();">
                                            {{ __('Log Out') }}
                                        </a>
                                    </form>
                                </ul>
                            </div>
                        </div>

                    @endguest


                </div>




                @auth
                        @php
                            $cart = \App\Models\Cart::where('user_id', auth()->user()->id)->where('is_paid', false)->first();

        //                    $productsInCart = DB::table('cart_product')->where('cart_id', $cart->id)->get();

                        @endphp

                    @if (\App\Models\Cart::where('user_id', auth()->user()->id)->where('is_paid', false)->first() != null)
                        <div class="indicator indicator--trigger--click">
                            <a href="#"
                               class="indicator__button"><span
                                        class="indicator__icon"><svg width="32"
                                                                     height="32">
                                    <circle cx="10.5" cy="27.5" r="2.5"/>
                                    <circle cx="23.5" cy="27.5" r="2.5"/>
                                    <path d="M26.4,21H11.2C10,21,9,20.2,8.8,19.1L5.4,4.8C5.3,4.3,4.9,4,4.4,4H1C0.4,4,0,3.6,0,3s0.4-1,1-1h3.4C5.8,2,7,3,7.3,4.3
 l3.4,14.3c0.1,0.2,0.3,0.4,0.5,0.4h15.2c0.2,0,0.4-0.1,0.5-0.4l3.1-10c0.1-0.2,0-0.4-0.1-0.4C29.8,8.1,29.7,8,29.5,8H14
 c-0.6,0-1-0.4-1-1s0.4-1,1-1h15.5c0.8,0,1.5,0.4,2,1c0.5,0.6,0.6,1.5,0.4,2.2l-3.1,10C28.5,20.3,27.5,21,26.4,21z"/>
                                </svg>
                            <span
                                    class="indicator__counter">{{ \App\Models\Cart::where('user_id', auth()->user()->id)->where('is_paid', false)->first()->item_count }}</span>
                        </span>
                                <span
                                        class="indicator__title">Shopping Cart</span> <span
                                        class="indicator__value">Rs.{{ number_format(\App\Models\Cart::where('user_id', auth()->user()->id)->where('is_paid', false)->first()->sub_total, 2, '.', ',') }}</span>
                            </a>

                            @php
                                $cart = \App\Models\Cart::where('user_id', auth()->user()->id)->where('is_paid', false)->first();

                                if ($cart != null){
                                $productsInCart = DB::table('cart_product')->where('cart_id', $cart->id)->get();
                                }
                            @endphp


                            <div class="indicator__content">
                                <div class="dropcart">
                                    <ul class="dropcart__list">

                                        @foreach($productsInCart as $singleCartItem)

                                            @php

                                                $product = \App\Models\Product::where('id', $singleCartItem->product_id)->first();

                                                $productDetails = DB::table('cart_product')->where('product_id', $product->id)->where('cart_id', $cart->id)->first();

                                            @endphp

                                            <li class="dropcart__item">
                                                <div class="dropcart__item-image image image--type--product"><a
                                                            class="image__body"
                                                            href="{{ route('product.show', $product->id) }}"><img
                                                                class="image__tag"
                                                                src="{{ asset($product->image) }}"
                                                                alt=""></a>
                                                </div>
                                                <div class="dropcart__item-info">
                                                    <div class="dropcart__item-name"><a
                                                                href="{{ route('product.show', $product->id) }}">{{ $product->name }}</a>
                                                    </div>
                                                    <ul class="dropcart__item-features">
                                                    </ul>
                                                    <div class="dropcart__item-meta">
                                                        <div
                                                                class="dropcart__item-quantity">{{ $productDetails->quantity }}</div>
                                                        <div class="dropcart__item-price">
                                                            Rs.{{ number_format($productDetails->price, 2, '.', ',') }}</div>
                                                    </div>
                                                </div>
                                                {{--                                                    <form action="{{ route('cart.remove', $product->id) }}">--}}
                                                {{--                                                        <button type="submit" class="dropcart__item-remove">--}}
                                                {{--                                                            <svg--}}
                                                {{--                                                                width="10" height="10">--}}
                                                {{--                                                                <path d="M8.8,8.8L8.8,8.8c-0.4,0.4-1,0.4-1.4,0L5,6.4L2.6,8.8c-0.4,0.4-1,0.4-1.4,0l0,0c-0.4-0.4-0.4-1,0-1.4L3.6,5L1.2,2.6--}}
                                                {{-- c-0.4-0.4-0.4-1,0-1.4l0,0c0.4-0.4,1-0.4,1.4,0L5,3.6l2.4-2.4c0.4-0.4,1-0.4,1.4,0l0,0c0.4,0.4,0.4,1,0,1.4L6.4,5l2.4,2.4--}}
                                                {{-- C9.2,7.8,9.2,8.4,8.8,8.8z"/>--}}
                                                {{--                                                            </svg>--}}
                                                {{--                                                        </button>--}}
                                                {{--                                                    </form>--}}
                                            </li>
                                            <li class="dropcart__divider" role="presentation"></li>
                                        @endforeach

                                    </ul>



                                    <div class="dropcart__totals">
                                        <table>
                                            <tr>
                                                <th>Subtotal</th>
                                                <td>Rs.{{ number_format($cart->sub_total, 2, '.', ',') }}</td>
                                            </tr>
                                            <tr>
                                                <th>Shipping</th>
                                                <td>Rs.0.00</td>
                                            </tr>
                                            <tr>
                                                <th>Total</th>
                                                <td>Rs.{{ number_format($cart->sub_total, 2, '.', ',') }}</td>
                                            </tr>
                                        </table>
                                    </div>
                                    <div class="dropcart__actions"><a href="/cart" class="btn btn-secondary">View
                                            Cart</a>
                                        @if ($cart != null && $cart->item_count > 0)
                                            <a href="/checkout" class="btn btn-primary">Checkout</a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    @else
                        <div class="indicator indicator--trigger--click">
                            <a href="#"
                               class="indicator__button"><span
                                        class="indicator__icon"><svg width="32"
                                                                     height="32">
                                    <circle cx="10.5" cy="27.5" r="2.5"/>
                                    <circle cx="23.5" cy="27.5" r="2.5"/>
                                    <path d="M26.4,21H11.2C10,21,9,20.2,8.8,19.1L5.4,4.8C5.3,4.3,4.9,4,4.4,4H1C0.4,4,0,3.6,0,3s0.4-1,1-1h3.4C5.8,2,7,3,7.3,4.3
 l3.4,14.3c0.1,0.2,0.3,0.4,0.5,0.4h15.2c0.2,0,0.4-0.1,0.5-0.4l3.1-10c0.1-0.2,0-0.4-0.1-0.4C29.8,8.1,29.7,8,29.5,8H14
 c-0.6,0-1-0.4-1-1s0.4-1,1-1h15.5c0.8,0,1.5,0.4,2,1c0.5,0.6,0.6,1.5,0.4,2.2l-3.1,10C28.5,20.3,27.5,21,26.4,21z"/>
                                </svg>
                            <span
                                    class="indicator__counter">0</span>
                        </span>
                                <span
                                        class="indicator__title">Shopping Cart</span> <span
                                        class="indicator__value">Rs.0.00</span>
                            </a>


                            <div class="indicator__content">
                                <div class="dropcart">
                                    <div class="dropcart__totals">
                                        <table>
                                            <tr>
                                                <th>Subtotal</th>
                                                <td>Rs.0.00</td>
                                            </tr>
                                            <tr>
                                                <th>Shipping</th>
                                                <td>Rs.0.00</td>
                                            </tr>
                                            <tr>
                                                <th>Total</th>
                                                <td>Rs.0.00</td>
                                            </tr>
                                        </table>
                                    </div>
                                    <div class="dropcart__actions"><a href="/cart" class="btn btn-secondary">View
                                            Cart</a>
                                </div>
                            </div>
                        </div>
                    @endif
                @else
                    <div class="indicator indicator">
                        <a href="{{ route('login') }}"
                           class="indicator__button"><span
                                    class="indicator__icon"><svg width="32"
                                                                 height="32">
                                    <circle cx="10.5" cy="27.5" r="2.5"/>
                                    <circle cx="23.5" cy="27.5" r="2.5"/>
                                    <path d="M26.4,21H11.2C10,21,9,20.2,8.8,19.1L5.4,4.8C5.3,4.3,4.9,4,4.4,4H1C0.4,4,0,3.6,0,3s0.4-1,1-1h3.4C5.8,2,7,3,7.3,4.3
 l3.4,14.3c0.1,0.2,0.3,0.4,0.5,0.4h15.2c0.2,0,0.4-0.1,0.5-0.4l3.1-10c0.1-0.2,0-0.4-0.1-0.4C29.8,8.1,29.7,8,29.5,8H14
 c-0.6,0-1-0.4-1-1s0.4-1,1-1h15.5c0.8,0,1.5,0.4,2,1c0.5,0.6,0.6,1.5,0.4,2.2l-3.1,10C28.5,20.3,27.5,21,26.4,21z"/>
                                </svg> <span class="indicator__counter">0</span> </span><span
                                    class="indicator__title">Shopping Cart</span> <span
                                    class="indicator__value">Rs.0.00</span>
                        </a>
                    </div>
                @endauth
            </div>
        </div>
    </header><!-- site__header / end -->


    {{ $slot }}




















    <!-- mobile-menu -->
    <div class="mobile-menu">
        <div class="mobile-menu__backdrop"></div>
        <div class="mobile-menu__body">
            <button class="mobile-menu__close" type="button">
                <svg width="12"
                     height="12">
                    <path d="M10.8,10.8L10.8,10.8c-0.4,0.4-1,0.4-1.4,0L6,7.4l-3.4,3.4c-0.4,0.4-1,0.4-1.4,0l0,0c-0.4-0.4-0.4-1,0-1.4L4.6,6L1.2,2.6
 c-0.4-0.4-0.4-1,0-1.4l0,0c0.4-0.4,1-0.4,1.4,0L6,4.6l3.4-3.4c0.4-0.4,1-0.4,1.4,0l0,0c0.4,0.4,0.4,1,0,1.4L7.4,6l3.4,3.4
 C11.2,9.8,11.2,10.4,10.8,10.8z"/>
                </svg>
            </button>
            <div class="mobile-menu__panel">
                <div class="mobile-menu__panel-header">
                    <div class="mobile-menu__panel-title">Menu</div>
                </div>
                <div class="mobile-menu__panel-body">

                    <div class="mobile-menu__divider"></div>
                    <div class="mobile-menu__indicators"><a class="mobile-menu__indicator"
                                                            href="/wishlist"><span
                                    class="mobile-menu__indicator-icon"><svg width="20"
                                                                             height="20">
                                    <path d="M14,3c2.2,0,4,1.8,4,4c0,4-5.2,10-8,10S2,11,2,7c0-2.2,1.8-4,4-4c1,0,1.9,0.4,2.7,1L10,5.2L11.3,4C12.1,3.4,13,3,14,3 M14,1
 c-1.5,0-2.9,0.6-4,1.5C8.9,1.6,7.5,1,6,1C2.7,1,0,3.7,0,7c0,5,6,12,10,12s10-7,10-12C20,3.7,17.3,1,14,1L14,1z"/>
                                </svg> </span><span class="mobile-menu__indicator-title">Wishlist</span> </a><a
                                class="mobile-menu__indicator" href="{{ route('account-dashboard') }}"><span
                                    class="mobile-menu__indicator-icon"><svg width="20" height="20">
                                    <path d="M20,20h-2c0-4.4-3.6-8-8-8s-8,3.6-8,8H0c0-4.2,2.6-7.8,6.3-9.3C4.9,9.6,4,7.9,4,6c0-3.3,2.7-6,6-6s6,2.7,6,6
 c0,1.9-0.9,3.6-2.3,4.7C17.4,12.2,20,15.8,20,20z M14,6c0-2.2-1.8-4-4-4S6,3.8,6,6s1.8,4,4,4S14,8.2,14,6z"/>
                                </svg> </span><span class="mobile-menu__indicator-title">Account</span> </a><a
                                class="mobile-menu__indicator" href="/cart"><span
                                    class="mobile-menu__indicator-icon"><svg width="20" height="20">
                                    <circle cx="7" cy="17" r="2"/>
                                    <circle cx="15" cy="17" r="2"/>
                                    <path d="M20,4.4V5l-1.8,6.3c-0.1,0.4-0.5,0.7-1,0.7H6.7c-0.4,0-0.8-0.3-1-0.7L3.3,3.9C3.1,3.3,2.6,3,2.1,3H0.4C0.2,3,0,2.8,0,2.6
 V1.4C0,1.2,0.2,1,0.4,1h2.5c1,0,1.8,0.6,2.1,1.6L5.1,3l2.3,6.8c0,0.1,0.2,0.2,0.3,0.2h8.6c0.1,0,0.3-0.1,0.3-0.2l1.3-4.4
 C17.9,5.2,17.7,5,17.5,5H9.4C9.2,5,9,4.8,9,4.6V3.4C9,3.2,9.2,3,9.4,3h9.2C19.4,3,20,3.6,20,4.4z"/>
                                </svg>  </span><span
                                    class="mobile-menu__indicator-title">Cart</span> </a><a
                                class="mobile-menu__indicator" href="{{ route('account-garage') }}"><span
                                    class="mobile-menu__indicator-icon"><svg width="20" height="20">
                                    <path d="M6.6,2c2,0,4.8,0,6.8,0c1,0,2.9,0.8,3.6,2.2C17.7,5.7,17.9,7,18.4,7C20,7,20,8,20,8v1h-1v7.5c0,0.8-0.7,1.5-1.5,1.5h-1
 c-0.8,0-1.5-0.7-1.5-1.5V16H5v0.5C5,17.3,4.3,18,3.5,18h-1C1.7,18,1,17.3,1,16.5V16V9H0V8c0,0,0.1-1,1.6-1C2.1,7,2.3,5.7,3,4.2
 C3.7,2.8,5.6,2,6.6,2z M13.3,4H6.7c-0.8,0-1.4,0-2,0.7c-0.5,0.6-0.8,1.5-1,2C3.6,7.1,3.5,7.9,3.7,8C4.5,8.4,6.1,9,10,9
 c4,0,5.4-0.6,6.3-1c0.2-0.1,0.2-0.8,0-1.2c-0.2-0.4-0.5-1.5-1-2C14.7,4,14.1,4,13.3,4z M4,10c-0.4-0.3-1.5-0.5-2,0
 c-0.4,0.4-0.4,1.6,0,2c0.5,0.5,4,0.4,4,0C6,11.2,4.5,10.3,4,10z M14,12c0,0.4,3.5,0.5,4,0c0.4-0.4,0.4-1.6,0-2c-0.5-0.5-1.3-0.3-2,0
 C15.5,10.2,14,11.3,14,12z"/>
                                </svg> </span><span class="mobile-menu__indicator-title">Garage</span></a></div>
                    <div class="mobile-menu__divider"></div>
                    <ul class="mobile-menu__links">
                        <li data-mobile-menu-item><a href="/" class="" data-mobile-menu-trigger>Home
                            </a>
                        </li>
                        <li data-mobile-menu-item><a href="/shop" class="" data-mobile-menu-trigger>Shop
                            </a>
                        </li>
                        <li data-mobile-menu-item><a href="{{ route('account-dashboard') }}" class=""
                                                     data-mobile-menu-trigger>Account
                            </a>
                        </li>
                    </ul>
                    <div class="mobile-menu__spring"></div>
                    <div class="mobile-menu__divider"></div>
                    <a class="mobile-menu__contacts" href="#">
                        <div class="mobile-menu__contacts-subtitle">Free call 24/7</div>
                        <div class="mobile-menu__contacts-title">076 720 8259</div>
                    </a>
                </div>
            </div>
        </div>
    </div><!-- mobile-menu / end -->


    <!-- site__footer -->
    <footer class="site__footer">
        <div class="site-footer">
            <div class="decor site-footer__decor decor--type--bottom">
                <div class="decor__body">
                    <div class="decor__start"></div>
                    <div class="decor__end"></div>
                    <div class="decor__center"></div>
                </div>
            </div>
            <div class="site-footer__widgets">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-xl-4">
                            <div class="site-footer__widget footer-contacts">
                                <h5 class="footer-contacts__title">Contact Us</h5>
                                <div class="footer-contacts__text">Our support team is delighted to help you in
                                    solving any issues that you have regarding your purchases or navigating this
                                    website.
                                </div>
                                <address class="footer-contacts__contacts">
                                    <dl>
                                        <dt>Phone Number</dt>
                                        <dd>(+94) 76-720-8259</dd>
                                    </dl>
                                    <dl>
                                        <dt>Email Address</dt>
                                        <dd>support@automate.com</dd>
                                    </dl>
                                    <dl>
                                        <dt>Our Location</dt>
                                        <dd>230/4, Horana Road, Piliyandala 10300 Sri Lanka</dd>
                                    </dl>
                                    <dl>
                                        <dt>Working Hours</dt>
                                        <dd>Mon-Fri (Sat & Sun), Throughout Day & Night</dd>
                                    </dl>
                                </address>
                            </div>
                        </div>
                        <div class="col-6 col-md-3 col-xl-2">
                            <div class="site-footer__widget footer-links">
                                <h5 class="footer-links__title">Information</h5>
                                <ul class="footer-links__list">
                                    <li class="footer-links__item"><a class="footer-links__link">About
                                            Us</a></li>
                                    <li class="footer-links__item"><a class="footer-links__link">Delivery
                                            Information</a></li>
                                    <li class="footer-links__item"><a class="footer-links__link">Privacy
                                            Policy</a></li>
                                    <li class="footer-links__item"><a class="footer-links__link">Brands</a>
                                    </li>
                                    <li class="footer-links__item"><a class="footer-links__link">Contact
                                            Us</a></li>
                                    <li class="footer-links__item"><a class="footer-links__link">Returns</a>
                                    </li>
                                    <li class="footer-links__item"><a class="footer-links__link">Site
                                            Map</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-6 col-md-3 col-xl-2">
                            <div class="site-footer__widget footer-links">
                                <h5 class="footer-links__title">My Account</h5>
                                <ul class="footer-links__list">
                                    <li class="footer-links__item"><a class="footer-links__link">Store
                                            Location</a></li>
                                    <li class="footer-links__item"><a class="footer-links__link">Order
                                            History</a></li>
                                    <li class="footer-links__item"><a class="footer-links__link">Wish
                                            List</a></li>
                                    <li class="footer-links__item">
                                        <a class="footer-links__link">Newsletter</a>
                                    </li>
                                    <li class="footer-links__item"><a class="footer-links__link">Specials</a>
                                    </li>
                                    <li class="footer-links__item"><a class="footer-links__link">Gift
                                            Cards</a></li>
                                    <li class="footer-links__item"><a class="footer-links__link">Affiliates</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-xl-4">
                            <div class="site-footer__widget footer-newsletter">
                                <h5 class="footer-newsletter__title">Newsletter</h5>
                                <div class="footer-newsletter__text">Enter your email address below to subscribe
                                    to
                                    our newsletter and keep up to date with discounts and special offers.
                                </div>
                                <form action="#" class="footer-newsletter__form"><label class="sr-only"
                                                                                        for="footer-newsletter-address">Email
                                        Address</label> <input
                                            type="text" class="footer-newsletter__form-input"
                                            id="footer-newsletter-address" placeholder="Email Address...">
                                    <button
                                            class="footer-newsletter__form-button">Subscribe
                                    </button>
                                </form>
                                <div class="footer-newsletter__text footer-newsletter__text--social">Follow us on
                                    social networks
                                </div>
                                <div class="footer-newsletter__social-links social-links">
                                    <ul class="social-links__list">
                                        <li class="social-links__item social-links__item--facebook"><a
                                                    target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                        <li class="social-links__item social-links__item--twitter"><a
                                                    target="_blank"><i class="fab fa-twitter"></i></a></li>
                                        <li class="social-links__item social-links__item--youtube"><a
                                                    target="_blank"><i class="fab fa-youtube"></i></a></li>
                                        <li class="social-links__item social-links__item--instagram"><a
                                                    target="_blank"><i class="fab fa-instagram"></i></a></li>
                                        <li class="social-links__item social-links__item--rss"><a
                                                    target="_blank"><i class="fas fa-rss"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="site-footer__bottom">
                <div class="container">
                    <div class="site-footer__bottom-row">
                        <div class="site-footer__copyright"><!-- copyright -->©️ Automate | All Rights Reserved |
                            Designed by Viduranga Lakshan<!-- copyright / end --></div>
                        <div class="site-footer__payments"><img src="/images/payments.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer><!-- site__footer / end -->


    <!-- quickview-modal -->
    <div id="quickview-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true"></div>
    <!-- quickview-modal / end -->


    <!-- add-vehicle-modal -->
    <div id="add-vehicle-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="vehicle-picker-modal modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <button type="button" class="vehicle-picker-modal__close">
                    <svg
                            width="12" height="12">
                        <path d="M10.8,10.8L10.8,10.8c-0.4,0.4-1,0.4-1.4,0L6,7.4l-3.4,3.4c-0.4,0.4-1,0.4-1.4,0l0,0c-0.4-0.4-0.4-1,0-1.4L4.6,6L1.2,2.6
 c-0.4-0.4-0.4-1,0-1.4l0,0c0.4-0.4,1-0.4,1.4,0L6,4.6l3.4-3.4c0.4-0.4,1-0.4,1.4,0l0,0c0.4,0.4,0.4,1,0,1.4L7.4,6l3.4,3.4
 C11.2,9.8,11.2,10.4,10.8,10.8z"/>
                    </svg>
                </button>
                <div class="vehicle-picker-modal__panel vehicle-picker-modal__panel--active">
                    <div class="vehicle-picker-modal__title card-title">Add A Vehicle</div>
                    <div class="vehicle-form vehicle-form--layout--modal">
                        <div class="vehicle-form__item vehicle-form__item--select"><select
                                    class="form-control form-control-select2" aria-label="Year">
                                <option value="none">Select Year</option>
                                <option>2010</option>
                                <option>2011</option>
                                <option>2012</option>
                                <option>2013</option>
                                <option>2014</option>
                                <option>2015</option>
                                <option>2016</option>
                                <option>2017</option>
                                <option>2018</option>
                                <option>2019</option>
                                <option>2020</option>
                            </select></div>
                        <div class="vehicle-form__item vehicle-form__item--select"><select
                                    class="form-control form-control-select2" aria-label="Brand" disabled="disabled">
                                <option value="none">Select Brand</option>
                                <option>Audi</option>
                                <option>BMW</option>
                                <option>Ferrari</option>
                                <option>Ford</option>
                                <option>KIA</option>
                                <option>Nissan</option>
                                <option>Tesla</option>
                                <option>Toyota</option>
                            </select></div>
                        <div class="vehicle-form__item vehicle-form__item--select"><select
                                    class="form-control form-control-select2" aria-label="Model" disabled="disabled">
                                <option value="none">Select Model</option>
                                <option>Explorer</option>
                                <option>Focus S</option>
                                <option>Fusion SE</option>
                                <option>Mustang</option>
                            </select></div>
                        <div class="vehicle-form__item vehicle-form__item--select"><select
                                    class="form-control form-control-select2" aria-label="Engine" disabled="disabled">
                                <option value="none">Select Engine</option>
                                <option>Gas 1.6L 125 hp AT/L4</option>
                                <option>Diesel 2.5L 200 hp AT/L5</option>
                                <option>Diesel 3.0L 250 hp MT/L5</option>
                            </select></div>
                        <div class="vehicle-form__divider">Or</div>
                        <div class="vehicle-form__item"><input type="text" class="form-control"
                                                               placeholder="Enter VIN number" aria-label="VIN number">
                        </div>
                    </div>
                    <div class="vehicle-picker-modal__actions">
                        <button type="button"
                                class="btn btn-sm btn-secondary vehicle-picker-modal__close-button">Cancel
                        </button>
                        <button type="button" class="btn btn-sm btn-primary">Add A Vehicle</button>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- add-vehicle-modal / end -->


    <!-- vehicle-picker-modal -->
    <div id="vehicle-picker-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="vehicle-picker-modal modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <button type="button" class="vehicle-picker-modal__close">
                    <svg
                            width="12" height="12">
                        <path d="M10.8,10.8L10.8,10.8c-0.4,0.4-1,0.4-1.4,0L6,7.4l-3.4,3.4c-0.4,0.4-1,0.4-1.4,0l0,0c-0.4-0.4-0.4-1,0-1.4L4.6,6L1.2,2.6
 c-0.4-0.4-0.4-1,0-1.4l0,0c0.4-0.4,1-0.4,1.4,0L6,4.6l3.4-3.4c0.4-0.4,1-0.4,1.4,0l0,0c0.4,0.4,0.4,1,0,1.4L7.4,6l3.4,3.4
 C11.2,9.8,11.2,10.4,10.8,10.8z"/>
                    </svg>
                </button>
                <div class="vehicle-picker-modal__panel vehicle-picker-modal__panel--active" data-panel="list">
                    <div class="vehicle-picker-modal__title card-title">Select Vehicle</div>
                    <div class="vehicle-picker-modal__text">Select a vehicle to find exact fit parts</div>
                    <div class="vehicles-list">
                        <div class="vehicles-list__body"><label class="vehicles-list__item"><span
                                        class="vehicles-list__item-radio input-radio"><span
                                            class="input-radio__body"><input class="input-radio__input"
                                                                             name="header-vehicle" type="radio"> <span
                                                class="input-radio__circle"></span> </span></span><span
                                        class="vehicles-list__item-info"><span class="vehicles-list__item-name">2011
                                        Ford
                                        Focus S</span> <span class="vehicles-list__item-details">Engine 2.0L 1742DA L4
                                        FI Turbo</span> </span>
                                <button type="button"
                                        class="vehicles-list__item-remove">
                                    <svg width="16" height="16">
                                        <path
                                                d="M2,4V2h3V1h6v1h3v2H2z M13,13c0,1.1-0.9,2-2,2H5c-1.1,0-2-0.9-2-2V5h10V13z"/>
                                    </svg>
                                </button>
                            </label> <label class="vehicles-list__item"><span
                                        class="vehicles-list__item-radio input-radio"><span
                                            class="input-radio__body"><input class="input-radio__input"
                                                                             name="header-vehicle" type="radio"> <span
                                                class="input-radio__circle"></span> </span></span><span
                                        class="vehicles-list__item-info"><span class="vehicles-list__item-name">2019
                                        Audi Q7
                                        Premium</span> <span class="vehicles-list__item-details">Engine 3.0L 5626CC L6
                                        QK</span> </span>
                                <button type="button"
                                        class="vehicles-list__item-remove">
                                    <svg width="16" height="16">
                                        <path
                                                d="M2,4V2h3V1h6v1h3v2H2z M13,13c0,1.1-0.9,2-2,2H5c-1.1,0-2-0.9-2-2V5h10V13z"/>
                                    </svg>
                                </button>
                            </label></div>
                    </div>
                    <div class="vehicle-picker-modal__actions">
                        <button type="button"
                                class="btn btn-sm btn-secondary vehicle-picker-modal__close-button">Cancel
                        </button>
                        <button type="button" class="btn btn-sm btn-primary" data-to-panel="form">Add A
                            Vehicle
                        </button>
                    </div>
                </div>
                <div class="vehicle-picker-modal__panel" data-panel="form">
                    <div class="vehicle-picker-modal__title card-title">Add A Vehicle</div>
                    <div class="vehicle-form vehicle-form--layout--modal">
                        <div class="vehicle-form__item vehicle-form__item--select"><select
                                    class="form-control form-control-select2" aria-label="Year">
                                <option value="none">Select Year</option>
                                <option>2010</option>
                                <option>2011</option>
                                <option>2012</option>
                                <option>2013</option>
                                <option>2014</option>
                                <option>2015</option>
                                <option>2016</option>
                                <option>2017</option>
                                <option>2018</option>
                                <option>2019</option>
                                <option>2020</option>
                            </select></div>
                        <div class="vehicle-form__item vehicle-form__item--select"><select
                                    class="form-control form-control-select2" aria-label="Brand" disabled="disabled">
                                <option value="none">Select Brand</option>
                                <option>Audi</option>
                                <option>BMW</option>
                                <option>Ferrari</option>
                                <option>Ford</option>
                                <option>KIA</option>
                                <option>Nissan</option>
                                <option>Tesla</option>
                                <option>Toyota</option>
                            </select></div>
                        <div class="vehicle-form__item vehicle-form__item--select"><select
                                    class="form-control form-control-select2" aria-label="Model" disabled="disabled">
                                <option value="none">Select Model</option>
                                <option>Explorer</option>
                                <option>Focus S</option>
                                <option>Fusion SE</option>
                                <option>Mustang</option>
                            </select></div>
                        <div class="vehicle-form__item vehicle-form__item--select"><select
                                    class="form-control form-control-select2" aria-label="Engine" disabled="disabled">
                                <option value="none">Select Engine</option>
                                <option>Gas 1.6L 125 hp AT/L4</option>
                                <option>Diesel 2.5L 200 hp AT/L5</option>
                                <option>Diesel 3.0L 250 hp MT/L5</option>
                            </select></div>
                        <div class="vehicle-form__divider">Or</div>
                        <div class="vehicle-form__item"><input type="text" class="form-control"
                                                               placeholder="Enter VIN number" aria-label="VIN number">
                        </div>
                    </div>
                    <div class="vehicle-picker-modal__actions">
                        <button type="button"
                                class="btn btn-sm btn-secondary" data-to-panel="list">Back to list
                        </button>
                        <button
                                type="button" class="btn btn-sm btn-primary">Add A Vehicle
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- vehicle-picker-modal / end -->


    <!-- photoswipe -->
    <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="pswp__bg"></div>
        <div class="pswp__scroll-wrap">
            <div class="pswp__container">
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
            </div>
            <div class="pswp__ui pswp__ui--hidden">
                <div class="pswp__top-bar">
                    <div class="pswp__counter"></div>
                    <button class="pswp__button pswp__button--close"
                            title="Close (Esc)"></button>
                    <!--<button class="pswp__button pswp__button&#45;&#45;share" title="Share"></button>-->
                    <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>
                    <button
                            class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>
                    <div class="pswp__preloader">
                        <div class="pswp__preloader__icn">
                            <div class="pswp__preloader__cut">
                                <div class="pswp__preloader__donut"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                    <div class="pswp__share-tooltip"></div>
                </div>
                <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button>
                <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)"></button>
                <div class="pswp__caption">
                    <div class="pswp__caption__center"></div>
                </div>
            </div>
        </div>
    </div><!-- photoswipe / end -->


</div>


<!-- scripts -->
<script src="/vendor/jquery/jquery.min.js"></script>
<script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="/vendor/owl-carousel/owl.carousel.min.js"></script>
<script src="/vendor/nouislider/nouislider.min.js"></script>
<script src="/vendor/photoswipe/photoswipe.min.js"></script>
<script src="/vendor/photoswipe/photoswipe-ui-default.min.js"></script>
<script src="/vendor/select2/js/select2.min.js"></script>
<script src="/js/number.js"></script>
<script src="/js/main.js"></script>


@stack('modals')
@livewireScripts
</body>

</html>
