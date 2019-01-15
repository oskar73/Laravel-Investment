@if (isset($isTour) && $isTour)
    <!-- Tour plugin Start -->
    <script src="{{ asset('vendor/sheperd/dist/js/sheperd.min.js') }}"></script>
    <script src="{{ asset('js/plugins/tour.js') }}" defer></script>
@endif

@if (isset($isMasonry) && $isMasonry)
    <!-- Masonry plugin Start -->
    <script src="{{ asset('vendor/masonry/masonry.pkgd.min.js') }}"></script>
@endif

@if (isset($isFlatpickr) && $isFlatpickr)
    <!-- Flatpickr Script -->
    <script src="{{ asset('vendor/flatpickr/dist/flatpickr.min.js') }}"></script>
    <script src="{{ asset('js/plugins/flatpickr.js') }}" defer></script>
@endif

<script src="{{ asset('js/plugins/slider-tabs.js') }}"></script>

@if (isset($isFslightbox) && $isFslightbox)
    <!-- fslightbox JavaScript -->
    <script src="{{ asset('js/plugins/fslightbox.js') }}" defer></script>
@endif

@if (isset($isSweetalert) && $isSweetalert)
    <!-- Sweet-alert Script -->
    <script src="{{ asset('vendor/sweetalert2/dist/sweetalert2.min.js') }}" async></script>
    <script src="{{ asset('js/plugins/sweet-alert.js') }}" defer></script>
@endif

@if (isset($isChoisejs) && $isChoisejs)
    <!-- Choisejs Script -->
    <script src="{{ asset('vendor/choiceJS/script/choices.min.js') }}"></script>
    <script src="{{ asset('js/plugins/choice.js') }}"></script>
@endif

@if (isset($isSelect2) && $isSelect2)
    <!-- Select2 Script -->
    <script src="{{ asset('vendor/select2/dist/js/select2.min.js') }}" defer></script>
    <script src="{{ asset('js/plugins/select2.js') }}" defer></script>
@endif

@if (isset($isFormWizard) && $isFormWizard)
    <!-- Form Wizard Script -->
    <script src="{{ asset('js/plugins/form-wizard.js') }}" defer></script>
@endif

@if (isset($isQuillEditor) && $isQuillEditor)
    <!-- Quill Editor Script -->
    <script src="{{ asset('vendor/quill/quill.min.js') }}"></script>
    <script src="{{ asset('js/plugins/quill.js') }}" defer></script>
@endif

@if (isset($isCircleProgress) &&  $isCircleProgress)
    <!-- Circle-Progress Script -->
    <script src="{{ asset('js/plugins/circle-progress.js') }}"></script>
    <script src="{{ asset('js/plugins/custom-circle-progress.js') }}" defer></script>
@endif

@if (isset($isNoUISlider) && $isNoUISlider)
    <!-- NoUI Slider Script -->
    <script src="{{ asset('vendor/noUiSilder/script/nouislider.min.js') }}"></script>
@endif

@if (isset($isSignaturePad) && $isSignaturePad)
    <!-- SignaturePad Script -->
    <script src="{{ asset('vendor/signature_pad/dist/signature_pad.umd.js') }}"></script>
    <script src="{{ asset('js/plugins/signaturepad.js') }}" defer></script>
@endif

@if (isset($isUppy) && $isUppy)
    <!-- Uppy Script -->
    <script src="{{ asset('vendor/uppy/uppy.min.js') }}"></script>
    <script src="{{ asset('js/plugins/uppy.js') }}" defer></script>
@endif

@if (isset($isCropperjs) && $isCropperjs)
    <script src="{{ asset('vendor/cropper/dist/cropper.min.js') }}"></script>
    <script src="{{ asset('js/plugins/image-croper.js') }}" defer></script>
@endif

@if (isset($isBarRatting) && $isBarRatting)
    <script src="{{ asset('js/plugins/rating.js') }}" defer></script>
    <script src="{{ asset('vendor/jquery-bar-rating/dist/jquery-barrating.min.js') }}" async></script>
@endif

@if (isset($isVectorMap) && $isVectorMap)
    <!-- MapChart JavaScript -->
    <script src="{{ asset('vendor/leaflet/leaflet.js') }} "></script>
    <script src="{{ asset('js/charts/vectore-chart.js') }}" defer></script>
@endif

@if (in_array('calender', $assets ?? []))
    <!-- Fullcalender Javascript -->
    <script src="{{ asset('vendor/fullcalendar/core/main.js') }}" async></script>
    <script src="{{ asset('vendor/fullcalendar/daygrid/main.js') }}" async></script>
    <script src="{{ asset('vendor/fullcalendar/timegrid/main.js') }}" async></script>
    <script src="{{ asset('vendor/fullcalendar/list/main.js') }}" async></script>
    <script src="{{ asset('vendor/fullcalendar/interaction/main.js') }}" async></script>
    <script src="{{ asset('vendor/moment.min.js') }}" async></script>
    <script src="{{ asset('js/plugins/calender.js') }}" defer></script>
@endif

@if (isset($isPrism) && $isPrism)
    <!-- Ajax Modal JavaScript -->
    <script src="{{ asset('js/plugins/prism.mini.js') }}"></script>
@endif

@if (isset($modalJs) && $modalJs)
    <!-- Ajax Modal JavaScript -->
    <script src="{{ asset('laravel-js/modal-view.js') }}" defer></script>
@endif

@if (isset($isSwiperSlider) && $isSwiperSlider)
    <!-- SwiperSlider Javascript -->
    <script src="{{ asset('/vendor/swiperSlider/swiper-bundle.min.js') }}"></script>
@endif

@if (isset($isTreeView) && $isTreeView)
    <!--Tree view javascript-->
    <script src="{{ asset('js/plugins/jstree.js') }}" defer></script>
    <script src="{{ asset('/vendor/jstree/jstree.js') }}"></script>
@endif
