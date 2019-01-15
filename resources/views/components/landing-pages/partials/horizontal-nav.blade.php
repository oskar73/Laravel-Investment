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
            <li class="nav-item active">
                <a class="nav-link menu-arrow justify-content-start " data-bs-toggle="collapse" href="#homeData"
                    role="button" aria-expanded="false" aria-controls="homeData" data-bs-target="#homeData">
                    <span class="item-name">Home</span>
                    <svg fill="none" xmlns="http://www.w3.org/2000/svg" class="icon-18" width="18" height="18"
                        viewBox="0 0 24 24">
                        <path d="M19 8.5L12 15.5L5 8.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                            stroke-linejoin="round"></path>
                    </svg>
                </a>
                <ul class="iq-header-sub-menu list-unstyled collapse" id="homeData">
                    <li class="nav-item"><a class="nav-link {{ activeRoute(route('landing-pages.index')) }}"
                            href="{{ route('landing-pages.index') }}">App Landing Page</a></li>

                    <li class="nav-item"><a class="nav-link {{ activeRoute(route('landing-pages.saas')) }}"
                            href="{{ route('landing-pages.saas') }}">Sass Landing Page</a></li>
                    <li class="nav-item"><a class="nav-link {{ activeRoute(route('landing-pages.software')) }}"
                            href="{{ route('landing-pages.software') }}">Software Landing Page</a></li>
                    <li class="nav-item"><a class="nav-link {{ activeRoute(route('landing-pages.startup')) }}"
                            href="{{ route('landing-pages.startup') }}">Startup Landing Page</a></li>
                </ul>
            </li>
            <li class="nav-item"><a class="nav-link {{ activeRoute(route('landing-pages.about')) }}"
                    href="{{ route('landing-pages.about') }}">About Us</a></li>
            <li class="nav-item"><a class="nav-link {{ activeRoute(route('landing-pages.feature')) }}"
                    href="{{ route('landing-pages.feature') }}">Features</a></li>
            <li class="nav-item"><a class="nav-link {{ activeRoute(route('landing-pages.pricing')) }}"
                    href="{{ route('landing-pages.pricing') }}">Pricing</a></li>
            <li class="nav-item d-xl-none"><a class="nav-link {{ activeRoute(route('landing-pages.blog')) }}"
                    href="{{ route('landing-pages.blog') }}">Blog</a></li>
            <li class="nav-item d-xl-none"><a class="nav-link {{ activeRoute(route('landing-pages.shop')) }}"
                    href="{{ route('landing-pages.shop') }}">Shop</a></li>
            <li class="nav-item d-xl-none"><a class="nav-link {{ activeRoute(route('landing-pages.faq')) }}"
                    href="{{ route('landing-pages.faq') }}">Faq</a></li>
            <li class="nav-item d-xl-none"><a class="nav-link {{ activeRoute(route('landing-pages.contact')) }}"
                    href="{{ route('landing-pages.contact') }}">Contact Us</a></li>
        </ul>
    </div> <!-- container-fluid.// -->
</nav>
<!-- Sidebar Menu End -->
