<!-- Library Bundle Script -->
<script src="{{ asset('js/core/libs.min.js') }}"></script>
@include('components.partials._scripts-plugins')
<!-- Lodash Utility -->
<script src="{{ asset('vendor/lodash/lodash.min.js') }}"></script>
<!-- Utilities Functions -->
<script src="{{ asset('js/iqonic-script/utility.min.js') }}"></script>
<!-- Settings Script -->
<script src="{{ asset('js/iqonic-script/setting.min.js') }}"></script>
<script src="{{ asset('js/setting-init.js') }}" defer></script>
<!-- External Library Bundle Script -->
<script src="{{ asset('js/core/external.min.js') }}"></script>
<!-- widgetchart JavaScript -->
<script src="{{ asset('js/charts/widgetcharts.js') }}" defer></script>
<!-- Dashboard Script -->
<script src="{{ asset('js/charts/dashboard.js') }}" defer></script>
<!--Alternate script -->
<script src="{{ asset('js/charts/alternate-dashboard.js') }}" defer></script>
<!-- Hopeui JavaScript -->
<script src="{{ asset('js/hope-ui.js') }}" defer></script>
<script src="{{ asset('js/hope-uipro.js') }}" defer></script>
@stack('scripts')
