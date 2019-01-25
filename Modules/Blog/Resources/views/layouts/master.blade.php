@props(['dir'])
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title data-setting="app_name" data-rightJoin=" Pro Blog | Responsive Bootstrap 5 Admin Dashboard Template">
        {{ env('APP_NAME') }} Pro Blog | Responsive Bootstrap 5 Admin Dashboard Template</title>
    <meta name="description"
        content="{{ env('APP_NAME') }} Pro is a revolutionary Bootstrap Admin Dashboard Template and UI Components Library. The Admin Dashboard Template and UI Component features 8 modules.">
    <meta name="keywords"
        content="premium, admin, dashboard, template, bootstrap 5, clean ui, hope ui, admin dashboard,responsive dashboard, optimized dashboard, Blog app">
    <meta name="author" content="Iqonic Design">
    <meta name="DC.title" content="{{ env('APP_NAME') }} Pro Blog | Responsive Bootstrap 5 Admin Dashboard Template">


    <title>{{ env('APP_NAME') }} | Responsive Bootstrap 5 Admin Dashboard Template</title>
    <!-- Style Link start -->
    @include('components.partials._head')
    <!-- Style Link end -->
    {{-- Laravel Mix - CSS File --}}
    <link rel='stylesheet' href="{{asset('css/blog.css')}}" />
</head>

<body class="light theme-style-light theme-color-default null" data-aos-easing="ease" data-aos-duration="700"
    data-aos-delay="0">

    <!-- Loader Start -->
    <div id="loading">
        <x-partials._body_loader />
    </div>
    <!-- Loader End -->

    <a class="btn btn-secondary btn-dashboard" href="{{route('landing-pages.index')}}">Landing Pages</a>

    <!-- Sidebar Start -->
    @include('blog::partials.sidebar')
    <!-- Sidebar End -->

    <!-- Wrapper Start-->
    <main class="main-content">
        <div class="position-relative @if ($isBanner == 'true') iq-banner @endif">

            <!-- Header Start-->
            @include('components.partials.pro.header')
            <!-- Header End-->

            @if ($isBanner == 'true')
                <!-- Header Banner Start-->
                <x-partials.sub-header />
                <!-- Header Banner End-->
            @endif
        </div>

        <!-- Page Content Start-->
        <div class="content-inner pb-0 container-fluid" id="page_layout">
            {{ $slot }}
        </div>
    </div>
        <!-- Page Content End-->

        <!-- Footer Start-->

        <!-- Footer End-->
        <x-partials._body_footer :isBuynow="true" />
    </main>
    <!-- Wrapper End-->

    <!-- Live Customizer start -->
    <x-widgets.setting-offcanvas />
    <!-- Live Customizer end -->

    <!-- Script Link start -->
    @include('components.partials._scripts')
    <!-- Script Link end -->

    {{-- Laravel Mix - JS File --}}
    <script src="{{ asset('js/blog.js') }}"></script>

    <!-- Notification Script start -->
    <x-partials._app_toast />
    <!-- Notification Script end -->
</body>

</html>
