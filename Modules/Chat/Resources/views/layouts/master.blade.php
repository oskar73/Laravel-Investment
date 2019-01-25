<!doctype html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title data-setting="app_name" data-rightJoin=" Pro Chat | Responsive Bootstrap 5 Admin Dashboard Template">
        {{ env('APP_NAME') }} Pro Chat | Responsive Bootstrap 5 Admin Dashboard Template</title>
    <meta name="description"
        content="{{ env('APP_NAME') }} Pro is a revolutionary Bootstrap Admin Dashboard Template and UI Components Library. The Admin Dashboard Template and UI Component features 8 modules.">
    <meta name="keywords"
        content="premium, admin, dashboard, template, bootstrap 5, clean ui, hope ui, admin dashboard,responsive dashboard, optimized dashboard, Chat app">
    <meta name="author" content="Iqonic Design">
    <meta name="DC.title" content="{{ env('APP_NAME') }} Pro Chat | Responsive Bootstrap 5 Admin Dashboard Template">
    <!-- Style Link start -->
    @include('components.partials._head')
    <!-- Style Link end -->
    {{-- Laravel Mix - CSS File --}}
    <link rel="stylesheet" href="{{ asset('css/chat.css') }}">
</head>

<body class="iq-chat-theme">

    <!-- Loader Start -->
    <div id="loading">
        <x-partials._body_loader />
    </div>
    <!-- Loader End -->
    <!-- Sidebar Start -->
    @include('chat::partials.sidebar')
    <!-- Sidebar End-->

    <!-- Wrapper Start-->
    <main class="main-content">
        <!-- Page Content Start-->
        <div class="container-fluid content-inner p-0" id="page_layout">
            {{ $slot }}
        </div>
        <!-- Page Content End-->

    </main>
    <!-- Wrapper End-->

    <!-- Script Link start -->
    @include('components.partials._scripts')

    <!-- Script Link end -->

    <!-- Notification Script start -->
    <x-partials._app_toast />
    <!-- Notification Script end -->

    <!-- Modal Start-->
    <x-modules.chat.widgets.modal-calling />
    <x-modules.chat.widgets.modal-video />
    <x-modules.chat.widgets.modal-contact />
    <x-modules.chat.widgets.modal-group />
    <!-- Modal End-->
    {{-- Laravel Mix - JS File --}}
    <script src="{{ asset('js/chat.js') }}"></script>
</body>

</html>
