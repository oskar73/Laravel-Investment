<!-- Google Font Api KEY-->
<meta name="google_font_api" content="{{ env('GOOGLEAPI_KEY') }}">
<!-- Config Options -->
<meta name="setting_options" content="{{ $setting->value ?? '' }}">
<!-- Favicon -->
<link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}">

<!-- Library / Plugin Css Build -->
<link rel="stylesheet" href="{{ asset('css/libs.min.css') }}">

@if ($isFlatpickr ?? '')
    <!-- Flatpickr Styles -->
    <link rel="stylesheet" href="{{ asset('vendor/flatpickr/dist/flatpickr.min.css') }}">
@endif

@if ($isTour ?? '')
    <!-- Tour JS -->
    <link rel="stylesheet" href="{{ asset('vendor/sheperd/dist/css/sheperd.css') }}">
@endif

@if ($isChoisejs ?? '')
    <!-- Choisejs css -->
    <link rel="stylesheet" href="{{ asset('vendor/choiceJS/style/choices.min.css') }}">
@endif

@if ($isQuillEditor ?? '')
    <!-- Quill Editor css -->
    <link rel="stylesheet" href="{{ asset('vendor/quill/quill.snow.css') }}">
@endif

@if ($isCropperjs ?? '')
    <!-- Cropper JS -->
    <link rel='stylesheet' href="{{ asset('vendor/cropper/dist/cropper.min.css') }}">
@endif

@if ($isVectorMap ?? '')
    <!-- Vector map css -->
    <link rel="stylesheet" href="{{ asset('vendor/leaflet/leaflet.css') }}">
@endif

@if ($isSweetalert ?? '')
    <!-- Sweetlaert2 css -->
    <link rel="stylesheet" href="{{ asset('vendor/sweetalert2/dist/sweetalert2.min.css') }}">
@endif

@if ($isBtnHover ?? '')
    <!-- btn hover css -->
    <link rel="stylesheet" href="{{ asset('vendor/button-hover/css/hover-min.css') }}">
@endif

@if ($isQuillEditor ?? '')
    <!-- Quill Editor css -->
    <link rel="stylesheet" href="{{ asset('vendor/quill/quill.snow.css') }}">
@endif

@if ($isNoUISlider ?? '')
    <!-- NoUI Slider css -->
    <link rel="stylesheet" href="{{ asset('vendor/noUiSilder/style/nouislider.min.css') }}">
@endif


@if ($isSwiperSlider ?? '')
    <!-- SwiperSlider css -->
    <link rel="stylesheet" href="{{ asset('vendor/swiperSlider/swiper-bundle.min.css') }}">
@endif

@if (in_array('calender', $assets ?? []))
    <!-- Fullcalender CSS -->
    <link rel='stylesheet' href="{{ asset('vendor/fullcalendar/core/main.css') }}" />
    <link rel='stylesheet' href="{{ asset('vendor/fullcalendar/daygrid/main.css') }}" />
    <link rel='stylesheet' href="{{ asset('vendor/fullcalendar/timegrid/main.css') }}" />
    <link rel='stylesheet' href="{{ asset('vendor/fullcalendar/list/main.css') }}" />
@endif

@if ($isUppy ?? '')
    <!-- Uppy Css -->
    <link rel="stylesheet" href="{{ asset('vendor/uppy/uppy.min.css') }}">
@endif
@if ($isTreeView ?? '')
    <!-- Jstree Css -->
    <link rel="stylesheet" href="{{ asset('vendor/jstree/style.css') }}">
@endif

<!-- Hope Ui Design System Css -->
<link rel="stylesheet" href="{{ asset('css/hope-ui.css?v=1.1.0') }}">
<link rel="stylesheet" href="{{ asset('css/pro.css?v=1.1.0') }}">

<!-- Custom Css -->
<link rel="stylesheet" href="{{ asset('css/custom.css?v=1.1.0') }}">

<!-- Customizer Css -->
<link rel="stylesheet" href="{{ asset('css/customizer.css?v=1.1.0') }}">

<!-- RTL Css -->
<link rel="stylesheet" href="{{ asset('css/rtl.css?v=1.1.0') }}">

@stack('head')
<!-- Google Font -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
