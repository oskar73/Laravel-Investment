<nav class="nav navbar navbar-expand-xl navbar-light iq-navbar header-hover-menu">
    <div class="container-fluid navbar-inner">
        <div class="d-flex align-items-center justify-content-between w-100 landing-header">
        <x-landing-pages.partials.horizontal-nav />
            <a href="{{ route('landing-pages.index') }}" class="navbar-brand m-0 d-xl-flex d-none">
                <!--Logo start-->
                <x-landing-pages.partials.logo color="true" />
                <!--logo End-->
                <h5 class="logo-title">Hope UI</h5>
            </a>
            <div class="d-flex align-items-center d-xl-none">
                <a class="d-xl-none btn btn-primary rounded-pill p-1 pt-0" href="#navbar_main" data-bs-toggle="offcanvas"
                    data-target="#navbar_main" data-active="true" aria-controls="navbar_main">
                    <svg width="20px" class="icon-20" viewBox="0 0 24 24">
                        <path fill="currentColor"
                            d="M4,11V13H16L10.5,18.5L11.92,19.92L19.84,12L11.92,4.08L10.5,5.5L16,11H4Z"></path>
                    </svg>
                    </button>

                    <a href="{{ route('landing-pages.index') }}" class="navbar-brand ms-3  d-xl-none">
                        <!--Logo start-->
                        <x-landing-pages.partials.logo color="true" />
                        <!--logo End-->
                        <h5 class="logo-title">Hope UI</h5>
                    </a>
            </div>
            <ul class="d-block d-xl-none list-unstyled m-0">
                <li class="nav-item dropdown iq-responsive-menu ">
                    <div class="btn btn-sm bg-body" id="navbarDropdown-search-11" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <svg class="icon-20" width="20" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <circle cx="11.7669" cy="11.7666" r="8.98856" stroke="currentColor" stroke-width="1.5"
                                stroke-linecap="round" stroke-linejoin="round"></circle>
                            <path d="M18.0186 18.4851L21.5426 22" stroke="currentColor" stroke-width="1.5"
                                stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </div>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown-search-11"
                        style="width: 18rem;">
                        <li class="px-3 py-0">
                            <div class="form-group input-group mb-0">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-text">
                                    <svg class="icon-20" width="20" height="20" viewBox="0 0 24 24"
                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="11.7669" cy="11.7666" r="8.98856" stroke="currentColor"
                                            stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                        </circle>
                                        <path d="M18.0186 18.4851L21.5426 22" stroke="currentColor" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                </span>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
            <ul class=" navbar-nav  align-items-center navbar-list d-none d-xl-flex">
                <li class="nav-item"><a class="nav-link {{ activeRoute(route('landing-pages.blog')) }}"
                        href="{{ route('landing-pages.blog') }}"> Blog </a></li>
                <li class="nav-item"><a class="nav-link {{ Route::currentRouteName() == 'landing-pages.shop' || Route::currentRouteName() == 'landing-pages.shop-detail' ? 'active' : '' }}" href="{{ route('landing-pages.shop') }}">Shop</a>
                </li>
                <li class="nav-item"><a class="nav-link {{ activeRoute(route('landing-pages.faq')) }}"
                        href="{{ route('landing-pages.faq') }}"> Faq </a></li>
                <li class="nav-item"><a class="nav-link {{ activeRoute(route('landing-pages.contact')) }}"
                        href="{{ route('landing-pages.contact') }}"> Contact Us </a></li>
            </ul>
        </div>
    </div>
</nav>
