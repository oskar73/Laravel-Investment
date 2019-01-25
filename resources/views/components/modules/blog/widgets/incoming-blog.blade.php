@props(['blogimage','blogdate','blogheader','blogsdata1','blogsdata2','blogcontent'])

<div class="card iq-incoming-blogs">
    <div class="card-body">
        <div class="row align-items-center">
            <div class="col-md-9">
                <img src="{{asset('modules/blog/images/')}}/{{$blogimage}}" alt="02" class="img-fluid me-0 mb-3 mb-md-0 iq-blog-img">
            </div>
            <div class="col-md-3 ps-md-2">
                <div class="d-flex flex-column justify-content-center">
                    <small>
                        <a href="{{route('blog.details')}}" class="iq-title">
                        {{$blogdate}}
                        </a>
                    </small>
                    <h4 class="mt-2 mb-3 para-ellipsis-2" title="{{$blogheader}}" data-bs-toggle="tooltip">{{$blogheader}}</h4>
                    <div class="d-flex mb-3">
                        <a href="{{route('blog.details')}}" title="{{$blogsdata1}}" data-bs-toggle="tooltip" class="iq-blog-adventure text-ellipsis short-1">{{$blogsdata1}}</a><span> | </span>
                        <a href="{{route('blog.details')}}" title="{{$blogsdata2}}" data-bs-toggle="tooltip" class="iq-blog-adventure text-ellipsis short-1 text-primary">{{$blogsdata2}}</a>
                    </div>
                    <p class="my-4 text-ellipsis short-1">{{$blogcontent}}</p>
                    <div>
                        <button type="button" class="btn btn-primary">Read More</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
