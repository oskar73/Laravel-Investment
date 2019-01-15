<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="landing-pages theme-fs-md">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta name="description"
        content="{{ env('APP_NAME') }} Pro is a revolutionary Bootstrap Admin Dashboard Template and UI Components Library. The Admin Dashboard Template and UI Component features 8 modules.">
    <meta name="keywords"
        content="premium, admin, dashboard, template, bootstrap 5, clean ui, hope ui, admin dashboard,responsive dashboard, optimized dashboard, File-Manager app">
    <meta name="author" content="Iqonic Design">
    <meta name="DC.title"
        content="{{ env('APP_NAME') }} Pro Landing-Pages 21 | Responsive Bootstrap 5 Admin Dashboard Template">
    <title>{{ env('APP_NAME') }} | Responsive Bootstrap 5 Admin Dashboard Template</title>
    <!-- Style Link start -->
    @include('components.partials._head')
    <!-- Style Link end -->
    {{-- Laravel Mix - CSS File --}}
    <link rel="stylesheet" href="{{ asset('css/landingpages.css') }}" />
</head>

<body class="body-bg landing-pages light theme-default theme-with-animation card-default theme-color-default">
    <div id="loading">
        <x-partials._body_loader />
    </div>
    <main class="main-content">
        <div class="position-relative">
            @if ($isHeader1)
                @include('landingpages::components.partials.header-1')
            @else
                @include('landingpages::components.partials.header-2')
            @endif
        </div>
        {{ $slot }}
    </main>
    <div id="back-to-top" style="display: none;">
        <a class="p-0 btn btn-primary btn-sm position-fixed top" id="top" href="#top">
            <svg class="icon-30" width="30" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M5 15.5L12 8.5L19 15.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                    stroke-linejoin="round"></path>
            </svg>
        </a>
    </div>
    <a class="btn btn-primary  btn-landing z-3" href="{{ route('dashboards') }}"> Dashboard Demo </a>
    @if ($isFooter1)
        @include('landingpages::components.partials.footer')
    @else
        @include('landingpages::components.partials.footer-one')
    @endif

    <!-- Script Link start -->
    @include('components.partials._scripts')
    <!-- Script Link end -->

    {{-- Laravel Mix - JS File --}}
    <script src="{{ asset('js/landingpages.js') }}"></script>
    @include('landingpages::components.partials.scripts')
</body>

</html>
