@props(['classname','blogimage','masonrycard','blogdate','blogcontent','blogcontent1'])
<div class="card {{ $classname }}">
    <div class="card-header card-thumbnail">
        <img src="{{asset('modules/blog/images/')}}/{{$blogimage}}" alt="02" class="img-fluid w-100 rounded object-cover @if ($masonrycard == 'false') @endif ">
    </div>
    <div class="card-body card-thumbnail">
        <div>
            <small class="text-primary">
                    {{$blogdate}}
            </small>
            <a href="blog/blog-detail.html" class="iq-title">
            <h4 class="mt-2 mb-3 text-ellipsis short-2" title="{{$blogcontent}}" data-bs-toggle="tooltip">{{$blogcontent}}</h4>
            </a>
            <div class="d-flex gap-3">
                <a href="{{route('blog.details')}}" class="iq-blog-adventure">Travel</a><span> | </span>
                <a href="{{route('blog.details')}}" class="iq-blog-adventure text-primary">Jenny Wilson</a>
            </div>
            <p class="my-4 text-ellipsis short-2">{{$blogcontent1}}</p>
            <div>
                <a href="{{route('blog.details')}}"  role="button" class="btn btn-primary">Read More</a>
            </div>
        </div>
    </div>
</div>
