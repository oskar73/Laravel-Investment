<div class=" position-relative">
    <div class="shape">
    </div>
    <div class="card-body position-relative">
        <h6 class="mb-3 mt-4">{{$testTitle}}</h6>
        <p class="mb-3 line-count-3">{{$testText}}</p>
        <div class="border-bottom"></div>
        <div class="d-flex align-items-center mt-3">
            <img src="{{asset('modules/landing-pages/images/home-2/' . $testUser) }}" alt="{{$id}}" class="img-fluid  rounded-pill">
            <div class="ms-3">
                <p class="mb-2">{{$userTitle}}</p>
                <div class="d-flex align-items-center">
                    <x-landing-pages.widgets.rating-fill rating="4" fill="true" />
                </div>
            </div>
        </div>
    </div>
</div>
