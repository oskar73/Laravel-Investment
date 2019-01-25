@props(['cardclass','classcarddefault','addressmode','username','addresstype','useraddress','usercontact'])
<div class="col-12">
    <div class="card {{ $cardclass }}">
        @if ($addressmode)
            <div class="card-header {{$classcarddefault}} user-details-bg-color px-3 py-2">
                <h6 class="text-muted mb-0">{{$addressmode}}</h6>
            </div>
        @endif
        <div class="card-body">
            <div class="d-flex justify-content-between flex-wrap">
                <div class="d-flex flex-column">
                <h6 class="mb-2 d-flex align-items-center">{{$username}}
                    @if ($addresstype)
                        <span class="badge bg-primary ms-2">{{$addresstype}}</span>
                    @endif
                </h6>
                <p class="mb-2">{{$useraddress}}</p>
                <h6>Contact: <span class="text-muted">{{$usercontact}}</span> </h6>
                </div>
                <div class="small mt-2 mt-xl-0 mt-lg-0 mt-md-0">
                <a href="#">Edit</a>
                <span>|</span>
                <a href="#">Remove</a>
                </div>
            </div>
        </div>
    </div>
</div>