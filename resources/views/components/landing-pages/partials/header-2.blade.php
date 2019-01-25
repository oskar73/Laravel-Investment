<nav class="nav navbar navbar-expand-xl navbar-light iq-navbar header-hover-menu">
    <div class="container-fluid navbar-inner">
        <div class="d-flex align-items-center justify-content-between w-100 landing-header">

            <a href="{{ route('landing-pages.index') }}" class="navbar-brand m-0">
                <!--Logo start-->
                <svg class="icon-30 text-primary" width="30" class="text-primary" viewBox="0 0 30 30" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <rect x="-0.757324" y="19.2427" width="28" height="4" rx="2"
                        transform="rotate(-45 -0.757324 19.2427)" fill="currentColor"></rect>
                    <rect x="7.72803" y="27.728" width="28" height="4" rx="2"
                        transform="rotate(-45 7.72803 27.728)" fill="currentColor"></rect>
                    <rect x="10.5366" y="16.3945" width="16" height="4" rx="2"
                        transform="rotate(45 10.5366 16.3945)" fill="currentColor"></rect>
                    <rect x="10.5562" y="-0.556152" width="28" height="4" rx="2"
                        transform="rotate(45 10.5562 -0.556152)" fill="currentColor"></rect>
                </svg>
                <!--logo End-->
                <h5 class="logo-title">Hope UI</h5>
            </a>
            <button data-trigger="navbar_main" class="d-xl-none btn btn-primary rounded-pill p-1 pt-0" type="button">
                <svg width="20px" class="icon-20" viewBox="0 0 24 24">
                    <path fill="currentColor"
                        d="M4,11V13H16L10.5,18.5L11.92,19.92L19.84,12L11.92,4.08L10.5,5.5L16,11H4Z"></path>
                </svg>
            </button>
            <!-- Horizontal Menu Start -->
            <nav id="navbar_main" class="mobile-offcanvas nav navbar navbar-expand-xl hover-nav horizontal-nav">
                <div class="container-fluid p-lg-0">
                    <div class="offcanvas-header px-0">
                        <div class="navbar-brand ms-3">
                            <x-landing-pages.partials.logo color="true" />
                            <h5 class="logo-title">{{ env('APP_NAME') }}</h5>
                        </div>
                        <button class="btn-close float-end px-3"></button>
                    </div>
                    <ul class="navbar-nav iq-nav-menu  list-unstyled" id="header-menu">
                        <li class="nav-item ">
                            <a class="nav-link menu-arrow justify-content-start active" data-bs-toggle="collapse"
                                href="#homeData" role="button" aria-expanded="false" aria-controls="homeData">
                                <span class="item-name">Home</span>
                            </a>
                            <ul class="iq-header-sub-menu list-unstyled collapse" id="homeData">
                                <li class="nav-item"><a class="nav-link {{ activeRoute(route('landing-pages.index')) }}"
                                        href="{{ route('landing-pages.index') }}">App Landing Page</a></li>
                                <li class="nav-item"><a
                                        class="nav-link {{ activeRoute(route('landing-pages.ecommerce')) }}"
                                        href="{{ route('landing-pages.ecommerce') }}">Ecommerce Landing Page</a></li>
                                <li class="nav-item"><a class="nav-link {{ activeRoute(route('landing-pages.saas')) }}"
                                        href="{{ route('landing-pages.saas') }}">Sass Landing Page</a></li>
                                <li class="nav-item"><a
                                        class="nav-link {{ activeRoute(route('landing-pages.software')) }}"
                                        href="{{ route('landing-pages.software') }}">Software Landing Page</a></li>
                                <li class="nav-item"><a
                                        class="nav-link {{ activeRoute(route('landing-pages.startup')) }}"
                                        href="{{ route('landing-pages.startup') }}">Startup Landing Page</a></li>
                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link {{ activeRoute(route('landing-pages.about')) }}"
                                href="{{ route('landing-pages.about') }}">About Us</a></li>
                        <li class="nav-item"><a class="nav-link {{ activeRoute(route('landing-pages.feature')) }}"
                                href="{{ route('landing-pages.feature') }}">Features</a></li>
                        <li class="nav-item"><a class="nav-link {{ activeRoute(route('landing-pages.pricing')) }}"
                                href="{{ route('landing-pages.pricing') }}">Pricing</a></li>
                        <li class="nav-item"><a class="nav-link {{ activeRoute(route('landing-pages.blog')) }}"
                                href="{{ route('landing-pages.blog') }}">Blog</a></li>
                        <li class="nav-item"><a class="nav-link {{ activeRoute(route('landing-pages.shop')) }}"
                                href="{{ route('landing-pages.shop') }}">Shop</a></li>
                        <li class="nav-item"><a class="nav-link {{ activeRoute(route('landing-pages.faq')) }}"
                                href="{{ route('landing-pages.faq') }}">Faq</a></li>
                        <li class="nav-item"><a class="nav-link {{ activeRoute(route('landing-pages.contact')) }}"
                                href="{{ route('landing-pages.contact') }}">Contact Us</a></li>
                    </ul>
                </div>
                <!-- container-fluid.// -->
            </nav>
            <!-- Sidebar Menu End -->
        </div>
    </div>
</nav>
