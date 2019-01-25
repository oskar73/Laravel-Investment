@props(['imgChange','imageDate','imgName','imgLink','dropdot'])
<div class="card iq-file-manager card-thumbnail">
        <div class="position-relative iq-video-hover">
            <a data-fslightbox="html5-video" href="{{asset('images/pro/plugins/video-2.mp4')}}">
                <img src="{{asset('modules/file-manager/images')}}/{{$imgChange}}" class="img-fluid" alt="">
                <div class="iq-btn-video btn btn-white text-primary rounded-pill btn-icon position-absolute">
                    <span class="text-white">
                        <svg viewBox="0 0 44 44" fill="none" width="24" height="35" xmlns="http://www.w3.org/2000/svg">
                            <path
                            d="M15.8817 9.20912C14.5492 8.3891 12.8335 9.3478 12.8335 10.9124V33.0875C12.8335 34.6522 14.5492 35.6109 15.8817 34.7908L33.8989 23.7033C35.168 22.9223 35.168 21.0776 33.8989 20.2967L15.8817 9.20912Z"
                            fill="currentColor"></path>
                        </svg>
                    </span>
                </div>
            </a>
        </div>
        <div class="mt-3">
            <p class="small mb-2 text-muted">Created on {{$imageDate}}</p>
                <div class="d-flex align-items-center mb-2 text-primary gap-2">
                <svg class="icon-24" width="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path opacity="0.4" d="M21.3309 7.44251C20.9119 7.17855 20.3969 7.1552 19.9579 7.37855L18.4759 8.12677C17.9279 8.40291 17.5879 8.96129 17.5879 9.58261V15.4161C17.5879 16.0374 17.9279 16.5948 18.4759 16.873L19.9569 17.6202C20.1579 17.7237 20.3729 17.7735 20.5879 17.7735C20.8459 17.7735 21.1019 17.7004 21.3309 17.5572C21.7499 17.2943 21.9999 16.8384 21.9999 16.339V8.66179C21.9999 8.1623 21.7499 7.70646 21.3309 7.44251Z" fill="currentColor"></path>
                    <path d="M11.9051 20H6.11304C3.69102 20 2 18.3299 2 15.9391V9.06091C2 6.66904 3.69102 5 6.11304 5H11.9051C14.3271 5 16.0181 6.66904 16.0181 9.06091V15.9391C16.0181 18.3299 14.3271 20 11.9051 20Z" fill="currentColor"></path>
                </svg>
                <p class="mb-0 text-dark">Video-{{$imgName}}</p>
            </div>
                 <div class="d-flex justify-content-between align-items-center">
                <small class="text-muted">You opened <a href="javascript:void(0)">{{$imgLink}}</a></small>
                @if($dropdot ?? '' == 'true')
                <div class="dropdown">
                                <svg  height="20" viewBox="0 0 5 20" fill="none" xmlns="http://www.w3.org/2000/svg" role="button" id="product-view" data-bs-toggle="dropdown" aria-expanded="false">
                                <circle cx="2.5" cy="3" r="2.5" fill="currentcolor"/>
                                <circle cx="2.5" cy="10" r="2.5" fill="currentcolor"/>
                                <circle cx="2.5" cy="17" r="2.5" fill="currentcolor"/>
                                </svg>
                                <ul class="dropdown-menu" aria-labelledby="product-view">
                                <li><a class="dropdown-item delete-btn" href="#">Delete</a></li>
                                <li><a class="dropdown-item" href="#">Restore</a></li>
                                </ul>
                            </div>
                            @endif
            </div>
           </div>
</div>
