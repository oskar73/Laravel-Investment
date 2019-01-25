<div class="card mt-4">
    <div class="card-body p-3">
        <img src="{{asset('modules/landing-pages/images/'.$blogImage)}}" alt="" class="img-fluid rounded
        " loading="lazy">
        <p class="text-primary pt-3">{{{$blogDate}}}</p>
        <a href="/landing-pages/blog" class="my-3 h5">{{$blogTitle}}</a>
        <div class="d-flex align-items-center my-3">
            <span>{{$blogAuther}}</span>
            <span class="ms-3 text-primary">Admin</span>
        </div>
        <a href="#" class="btn btn-primary">Read More</a>
    </div>
</div>
