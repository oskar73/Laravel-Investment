@props(['categoryimage','categoryname','postcount'])
<div class="card text-center">
<div class="card-header card-thumbnail">
        <img src="{{asset('modules/blog/images/')}}/{{$categoryimage}}" alt="post-category" class="img-fluid">
    </div>
    <div class="card-body card-thumbnail">
        <div class="d-flex flex-column">
            <a href="{{route('blog.details')}}" class="h5 mb-0 iq-product-detail mb-2">{{$categoryname}}</a>
            <span class="text-muted">{{$postcount}} Post</span>
        </div>
    </div>
</div>