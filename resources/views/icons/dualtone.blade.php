<x-app-layout :assets="$assets ?? []" :isBanner="true" title='Dual Tone Icons'>
    <script src="{{asset('js/dual-tone-icon-search-filter.js')}}" defer></script>
<div class="row">
    <div class="col-lg-12">
        <div class="card mb-4">
            <div class="card-header d-flex align-items-center justify-content-center">
                <h4 class="card-title mb-0 flex-grow-1">Double Tone
                    <small id="search-length">()</small>
                </h4>
                <div>
                    <input type="search" placeholder="search icon" id="search-value" class="form-control">
                </div>
            </div>
            <div class="card-body">
                <div class="icon-grid" id="search-output">
                </div>
            </div>
        </div>
    </div>
</div>
</x-app-layout>
