@props(['dir', 'title', 'isNavbar', 'isTour'])
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title data-setting="app_name" data-rightJoin=" Pro | Responsive Bootstrap 5 Admin Dashboard Template">
        {{ env('APP_NAME') }} | Responsive Bootstrap 5 Admin Dashboard Template</title>
    <meta name="description"
        content="Hope UI – free bootstrap 5 admin dashboard template comes with over 200+ elements finely crafted to speed up your development cycles. Production Ready Premium Dashboard UI Kit And Design System">
    <meta name="keywords"
        content="premium, admin, dashboard, template, bootstrap 5, clean ui, hope ui, admin dashboard,responsive dashboard, optimized dashboard,">
    <meta name="author" content="Iqonic Design">
    <meta name="DC.title" content="{{ env('APP_NAME') }} Pro| Responsive Bootstrap 5 Admin Dashboard Template">
    <!-- Style Link start -->
    @include('components.partials._head')
    <!-- Style Link end -->
</head>

<body class="">
    <!-- Loader Start -->
    <div id="loading">
        <x-partials._body_loader />
    </div>
    <!-- Loader End -->

    <!-- Sidebar Start-->
    @include('components.partials._body_sidebar')
    <!-- Sidebar End-->

    <!-- Wrapper Start-->
    <main class="main-content">
        <div class="position-relative {{ $isBanner ? 'iq-banner' : '' }} default">
            <!-- Header Start-->
            @include('components.partials.pro.header')
            <!-- Header End-->

            @if ($isBanner)
                <!-- Header Banner Start-->
                <x-partials.sub-header />
                <!-- Header Banner End-->
            @endif
        </div>

        <!-- Page Content Start-->
        <div class="content-inner pb-0 container-fluid" id="page_layout">
            {{ $slot }}
        </div>
        <!-- Page Content End-->

        <!-- Footer Start-->
        <x-partials._body_footer :isBuynow="true" />
        <!-- Footer End-->

        @if ($modalJs)
            <!-- Ajax Modal Html-->
            <x-widgets.modal-view />
        @endif
    </main>
    <!-- Wrapper End-->



    <!-- Live Customizer start -->
    <x-widgets.setting-offcanvas />
    <!-- Live Customizer end -->
    <a class="btn btn-secondary btn-dashboard" target="_blank" href="{{route('landing-pages.index')}}">Landing Pages</a>

    <x-modal-pop />

    <!-- Script Link start -->
    @include('components.partials._scripts')
    <!-- Script Link end -->

    <!-- Notification Script start -->
    <x-partials._app_toast />
    <!-- Notification Script end -->
    <!-- Script End -->

</body>

</html>
