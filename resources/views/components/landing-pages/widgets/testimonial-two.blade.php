
  <div class="row g-0">
    <div class="col-md-4 col-xl-3">
      <img src="{{asset('modules/landing-pages/images/' . $testImage)}}" alt="{{$id}}" class="img-fluid rounded-start">
    </div>
    <div class="col-md-8 col-xl-9">
      <div class="card-body">
        <h6 class="mb-2">{{$testTitle}}</h6>
        <x-landing-pages.widgets.rating-fill rating="4" fill="true"  />
        <p class="pt-2 mb-0">{{$testText}}</p>
      </div>
    </div>
  </div>
