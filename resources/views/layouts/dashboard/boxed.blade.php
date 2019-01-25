@props(['dir', 'isSidebar'])
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title data-setting="app_name" data-rightJoin="Boxed | Responsive Bootstrap 5 Admin Dashboard Template">
        {{ env('APP_NAME') }} Boxed | Responsive Bootstrap 5 Admin Dashboard Template</title>
    <!-- Style Link start -->
    @include('components.partials._head')
    <!-- Style Link end -->
</head>

<body class="boxed">

    <div class="boxed-inner">

        <!-- Loader Start -->
        <div id="loading">
            <x-partials._body_loader />
        </div>
        <!-- Loader End -->

        <!-- Wrapper Start-->
        <main class="main-content">

            <!-- Header Start-->
            @include('components.partials._body_header2')
            <!-- Header End-->

            <!-- Page Content Start-->
            <div class="conatiner-fluid content-inner pb-0">
                {{ $slot }}
            </div>
            <!-- Page Content End-->

            <!-- Footer Start-->
            <x-partials._body_footer :isBuynow="true"/>
            <!-- Footer End-->
        </main>
        <!-- Wrapper End-->

    </div>

    <!-- Live Customizer start -->
    <x-widgets.setting-offcanvas />
    <!-- Live Customizer end -->
    <a class="btn btn-secondary btn-dashboard" href="{{route('landing-pages.index')}}">Landing Pages</a>
    <!-- Script Link start -->
    @include('components.partials._scripts')
    <!-- Script Link end -->

    <!-- Notification Script start -->
    <x-partials._app_toast />
    <!-- Notification Script end -->

</body>

</html>
