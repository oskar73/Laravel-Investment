@props(['blogimage','blogdate','blogheader','blogsmall1','blogsmall2','blogcontent'])
<div class="card">
    <div class="card-body card-thumbnail">
        <div class="d-flex align-items-center iq-incoming-blogs gap-3">
            <img src="{{asset('modules/blog/images/')}}/{{$blogimage}}" alt="02" class="img-fluid object-contain rounded">
            <div class="d-flex flex-column justify-content-center">
                <small class="text-primary">
                    {{$blogdate}}   
                </small>
                <a href="{{route('blog.details')}}" class="iq-title">
                    <h4 class="mt-2 mb-3 text-ellipsis short-2" data-bs-toggle="tooltip" data-bs-original-title="{{$blogheader}}">{{$blogheader}}</h4>
                </a>

                <div class="d-flex">
                    <a href="{{route('blog.details')}}" data-bs-toggle="tooltip" class="text-body para-ellipsis-1 fs-6" data-bs-original-title="{{$blogsmall1}}">{{$blogsmall1}}</a><span class="ms-2 me-2"> | </span>
                    <a href="{{route('blog.details')}}" data-bs-toggle="tooltip" class="text-mute para-ellipsis-1 fs-6" data-bs-original-title="{{$blogsmall2}}">{{$blogsmall2}}</a>
                </div>
                <p class="my-4 text-ellipsis short-1">{{$blogcontent}}</p>
                <div>
                    <a role="button" class="btn btn-primary" href="javascript:void(0)">Read More</a>
                </div>
            </div>
        </div>
    </div>
</div>
