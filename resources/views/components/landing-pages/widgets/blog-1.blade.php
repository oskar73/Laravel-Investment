<div class="card">
    <div class="card-body p-3">
        <img src="{{asset('modules/landing-pages/images/' . $blogImage)}}" alt=""class="img-fluid rounded
        " loading="lazy">
        <div class="text-primary sub-title py-3">{{{$blogDate}}}</div>
        <a href="/landing-pages/blog-detail" class="my-3 h5">{{$blogTitle}}</a>
        <div class="d-flex align-items-center mt-3">
            <span>{{$blogAuther}}</span>
            <span class="ms-3 text-primary">Admin</span>
        </div>
            <p class="pt-3 mb-4 line-count-3">{{$blogDescription}}</p>
        <a href="/landing-pages/blog-detail" class="btn btn-primary">Read More</a>
    </div>
</div>
