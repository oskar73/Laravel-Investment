@props([
    'navClass',
])
<nav id="navbar_main" class="mobile-offcanvas  hover-nav horizontal-nav mx-md-auto  navbar navbar-expand-xl navbar-light">
    <div class="container-fluid">
        <div class="offcanvas-header">
            <div class="navbar-brand ms-0 d-flex">

                <!--Logo start-->
                <div class="logo-main">
                    <div class="logo-normal">
                        <svg class="text-primary icon-30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="-0.757324" y="19.2427" width="28" height="4" rx="2" transform="rotate(-45 -0.757324 19.2427)" fill="currentColor"></rect>
                            <rect x="7.72803" y="27.728" width="28" height="4" rx="2" transform="rotate(-45 7.72803 27.728)" fill="currentColor"></rect>
                            <rect x="10.5366" y="16.3945" width="16" height="4" rx="2" transform="rotate(45 10.5366 16.3945)" fill="currentColor"></rect>
                            <rect x="10.5562" y="-0.556152" width="28" height="4" rx="2" transform="rotate(45 10.5562 -0.556152)" fill="currentColor"></rect>
                        </svg>
                    </div>
                    <div class="logo-mini">
                        <svg class="text-primary icon-30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="-0.757324" y="19.2427" width="28" height="4" rx="2" transform="rotate(-45 -0.757324 19.2427)" fill="currentColor"></rect>
                            <rect x="7.72803" y="27.728" width="28" height="4" rx="2" transform="rotate(-45 7.72803 27.728)" fill="currentColor"></rect>
                            <rect x="10.5366" y="16.3945" width="16" height="4" rx="2" transform="rotate(45 10.5366 16.3945)" fill="currentColor"></rect>
                            <rect x="10.5562" y="-0.556152" width="28" height="4" rx="2" transform="rotate(45 10.5562 -0.556152)" fill="currentColor"></rect>
                        </svg>
                    </div>
                </div>
                <!--logo End-->
                <h4 class="logo-title ms-3">{{ env('APP_NAME') }}</h4>
             </div>
            <button class="btn-close float-end"></button>
        </div>
        <ul class="list-unstyled {{ $navClass }}">
            <li class="nav-item"><a class="nav-link {{ activeRoute(route('menu-style.horizontal')) }}"
                    href="{{ route('menu-style.horizontal') }}"> Horizontal </a></li>
            <li class="nav-item"><a class="nav-link {{ activeRoute(route('menu-style.dual-horizontal')) }}"
                    href="{{ route('menu-style.dual-horizontal') }}"> Dual Horizontal </a></li>
            <li class="nav-item"><a class="nav-link {{ activeRoute(route('menu-style.dual-compact')) }}"
                    href="{{ route('menu-style.dual-compact') }}"><span class="item-name">Dual Compact</span></a></li>
            <li class="nav-item"><a class="nav-link {{ activeRoute(route('menu-style.boxed')) }}"
                    href="{{ route('menu-style.boxed') }}"> Boxed Horizontal </a></li>
            <li class="nav-item"><a class="nav-link {{ activeRoute(route('menu-style.boxed-fancy')) }}"
                    href="{{ route('menu-style.boxed-fancy') }}"> Boxed Fancy</a></li>
        </ul>
    </div> <!-- container-fluid.// -->
</nav>
