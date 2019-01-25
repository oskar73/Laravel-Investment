@props(['blogimage','blogdate','blogheader','blogsdata1','blogsdata2','blogcontent'])

<li class="swiper-slide card-slide">
    <div class="card mb-0">
        <div class="card-body card-thumbnail">
            <div class="d-flex align-items-center iq-upcoming-blogs gap-3">
                <img src="{{asset('modules/blog/images/')}}/{{$blogimage}}" alt="02" class="img-fluid object-cover rounded">
                <div class="d-flex flex-column justify-content-center">
                    <small class="text-primary">
                        <a href="{{route('blog.details')}}" class="iq-title">
                            {{$blogdate}}
                            <h4 class="mt-2 mb-3 text-ellipsis short-1" title="{{$blogheader}}" data-bs-toggle="tooltip">{{$blogheader}}</h4>
                        </a>
                    </small>
                    <div class="d-flex mb-4 gap-2">
                        <a href="{{route('blog.details')}}" title="{{$blogsdata1}}" data-bs-toggle="tooltip" class="iq-blog-adventure text-ellipsis short-1">{{$blogsdata1}}</a><span> | </span>
                        <a href="{{route('blog.details')}}" title="{{$blogsdata2}}" data-bs-toggle="tooltip" class="iq-blog-adventure text-ellipsis short-1 text-primary">{{$blogsdata2}}</a>
                    </div>
                    <div>
                        <button type="button" class="btn btn-primary">Notify Me</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</li>
