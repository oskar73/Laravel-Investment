<x-app-layout :assets="$assets ?? []" title='FS lightbox' :isBanner="true" isFslightbox="true">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex flex-wrap align-items-center justify-content-between">
                        <div class="d-flex flex-wrap align-items-center">
                            <div class="d-flex flex-wrap align-items-center mb-3 mb-sm-0">
                                <h4 class="me-2 h4">fslightbox</h4>
                            </div>
                        </div>
                        <small>For more Information regarding fslightbox Plugin refer
                            <a href="https://fslightbox.com/">Documentation</a>
                        </small>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <div class="header-title">
                        <h4 class="card-title">Gallery</h4>
                    </div>
                </div>
                <div class="card-body text-center">
                    <div class="d-grid gap-card grid-cols-3 iq-fslightbox-img">
                        <a data-fslightbox="gallery" href="{{asset('images/pro/plugins/img6.jpeg')}}">
                            <img src="{{asset('images/pro/plugins/img6.jpeg')}}" class="img-fluid bg-primary-subtle rounded"
                                alt="profile-image">
                        </a>
                        <a data-fslightbox="gallery" href="{{asset('images/pro/plugins/img1.jpeg')}}">
                            <img src="{{asset('images/pro/plugins/img1.jpeg')}}" class="img-fluid bg-primary-subtle rounded"
                                alt="profile-image">
                        </a>
                        <a data-fslightbox="gallery" href="{{asset('/images/pro/plugins/img2.jpg')}}">
                            <img src="{{asset('/images/pro/plugins/img2.jpg')}}" class="img-fluid bg-primary-subtle rounded"
                                alt="profile-image">
                        </a>
                        <a data-fslightbox="gallery" href="{{asset('images/pro/plugins/img3.jpeg')}}">
                            <img src="{{asset('images/pro/plugins/img3.jpeg')}}" class="img-fluid bg-primary-subtle rounded"
                                alt="profile-image">
                        </a>
                        <a data-fslightbox="gallery" href="{{asset('images/pro/plugins/img4.jpeg')}}">
                            <img src="{{asset('images/pro/plugins/img4.jpeg')}}" class="img-fluid bg-primary-subtle rounded"
                                alt="profile-image">
                        </a>
                        <a data-fslightbox="gallery" href="{{asset('images/pro/plugins/img5.jpeg')}}">
                            <img src="{{asset('images/pro/plugins/img5.jpeg')}}" class="img-fluid bg-primary-subtle rounded"
                                alt="profile-image">
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <div class="header-title">
                        <h4 class="card-title">HTML5 Videos</h4>

                    </div>
                </div>
                <div class="card-body text-center">
                    <div class="d-grid gap-card grid-cols-3 iq-fslightbox-img">
                        <a data-fslightbox="html5-video" data-video-poster="{{asset('/images/pro/plugins/img7.jpg')}}"
                            href="{{asset('images/pro/plugins/video-1')}}.mp4">
                            <img src="{{asset('images/pro/plugins/img7.jpg')}}" class="img-fluid bg-primary-subtle rounded"
                                alt="Milk Bottle Beside a Tree">
                        </a>
                        <a data-fslightbox="html5-video" data-video-poster="{{asset('/images/pro/plugins/img8.jpg')}}"
                            href="{{asset('images/pro/plugins/video-2')}}.mp4">
                            <img src="{{asset('/images/pro/plugins/img8.jpg')}}" class="img-fluid bg-primary-subtle rounded"
                                alt="Close-Up of Plant With Green Leaves">
                        </a>
                        <a data-fslightbox="html5-video" data-video-poster="{{asset('/images/pro/plugins/img9.jpg')}}"
                            href="{{asset('images/pro/plugins/video-3')}}.mp4">
                            <img src="{{asset('images/pro/plugins/img9.jpg')}}" class="img-fluid bg-primary-subtle rounded"
                                alt="Seagulls Flying Against Blue Sky" style="height: 100%;">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <div class="header-title">
                        <h4 class="card-title">Youtube Videos</h4>
                    </div>
                </div>
                <div class="card-body text-center">
                    <div class="d-grid gap-card grid-cols-3 iq-fslightbox-img">
                        <a data-fslightbox="gallery" href="https://www.youtube.com/watch?v=3nQNiWdeH2Q">
                            <img class="img-fluid bg-primary-subtle rounded" src="{{asset('images/pro/plugins/img10.jpg')}}"
                                alt="Heroes Tonight - Fullscreen Lightbox">
                        </a>
                        <a data-fslightbox="gallery" href="https://www.youtube.com/watch?v=TW9d8vYrVFQ">
                            <img class="img-fluid bg-primary-subtle rounded" src="{{asset('images/pro/plugins/img11.jpg')}}"
                                alt="Sky High - Fullscreen Lightbox">
                        </a>
                        <a data-fslightbox="gallery" href="https://www.youtube.com/watch?v=zyXmsVwZqX4">
                            <img class="img-fluid bg-primary-subtle rounded" src="{{asset('images/pro/plugins/img12.jpg')}}"
                                alt="Why we lose - Fullscreen Lightbox">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
