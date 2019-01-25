@props(['dir', 'isSidebar'])
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title data-setting="app_name" data-rightJoin=" Horizontal | Responsive Bootstrap 5 Admin Dashboard Template">
        {{ env('APP_NAME') }} Horizontal | Responsive Bootstrap 5 Admin Dashboard Template</title>
    <!-- Style Link start -->
    @include('components.partials._head')
    <!-- Style Link end -->
</head>

<body class="">
    <span class="screen-darken"></span>
    <!-- Loader start -->
    <div id="loading">
        <x-partials._body_loader />
    </div>
    <!-- Loader end -->

    <!-- Wrapper Start-->
    <main class="main-content">

        <!-- Header start -->
        @include('components.partials._body_header1')
        <!-- Header end -->

        <!-- Wrapper / Page Content Start -->
        <div class="conatiner-fluid content-inner pb-0">
            {{ $slot }}
        </div>
        <!-- Wrapper / Page Content end -->

        <!-- Footer Start-->
        <x-partials._body_footer :isBuynow="true"/>
        <!-- Footer End-->
    </main>
    <!-- Wrapper End-->

    <!-- Live Customizer start -->
    <x-widgets.setting-offcanvas />
    <!-- Live Customizer end -->
    <a class="btn btn-secondary btn-dashboard" href="{{route('landing-pages.index')}}">Landing Pages</a>
    <!-- Script Link Start -->
    @include('components.partials._scripts')
    <!-- Script Link end -->

    <!-- Toast Script Start -->
    <!-- Notification Script start -->
    <x-partials._app_toast />
    <!-- Notification Script end -->
    <!-- Toast Script end -->

</body>

</html>
