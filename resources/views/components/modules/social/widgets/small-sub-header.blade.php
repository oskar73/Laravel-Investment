<div class="card">
    <div class="card-body">
        <div class="d-flex justify-content-between align-items-center flex-wrap">
        <ul class="nav nav-pills mb-0" data-toggle="slider-tab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" href="#pills-timeline-tab" data-bs-toggle="tab" data-bs-target="#timeline" aria-selected="true" role="tab" >{{__('social.timeline')}}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#pills-about-tab" data-bs-toggle="tab" data-bs-target="#about" aria-selected="false" role="tab" >{{__('social.about')}}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex justify-content-center align-items-center" href="#pills-friends-tab" data-bs-toggle="tab" data-bs-target="#friends" aria-selected="false" role="tab">{{__('social.friends')}}  <span class="badge bg-success d-inline-block py-1 ms-2">100</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#pills-photos-tab" data-bs-toggle="tab" data-bs-target="#photos" aria-selected="false" role="tab">{{__('social.photos')}}</a>
                </li>
            </ul>
            
            <div class="d-flex flex-wrap flex-sm-nowrap gap-3">
                <div class="d-flex justify-content-between align-items-center gap-3 mb-3 mb-sm-0">
                    <button class="btn btn-icon btn-sm btn-primary rounded-pill">
                        <span class="btn-inner">
                            <svg class="icon-24" width="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path opacity="0.4" d="M16.6667 2H7.33333C3.92889 2 2 3.92889 2 7.33333V16.6667C2 20.0622 3.92 22 7.33333 22H16.6667C20.0711 22 22 20.0622 22 16.6667V7.33333C22 3.92889 20.0711 2 16.6667 2Z" fill="currentColor"></path>
                                <path d="M15.3205 12.7083H12.7495V15.257C12.7495 15.6673 12.4139 16 12 16C11.5861 16 11.2505 15.6673 11.2505 15.257V12.7083H8.67955C8.29342 12.6687 8 12.3461 8 11.9613C8 11.5765 8.29342 11.2539 8.67955 11.2143H11.2424V8.67365C11.2824 8.29088 11.6078 8 11.996 8C12.3842 8 12.7095 8.29088 12.7495 8.67365V11.2143H15.3205C15.7066 11.2539 16 11.5765 16 11.9613C16 12.3461 15.7066 12.6687 15.3205 12.7083Z" fill="currentColor"></path>
                            </svg>
                        </span>
                    </button>
                    <button class="btn btn-icon btn-sm btn-primary rounded-pill">
                        <span class="btn-inner">
                            <svg class="icon-24" width="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path opacity="0.4" d="M21.3309 7.44251C20.9119 7.17855 20.3969 7.1552 19.9579 7.37855L18.4759 8.12677C17.9279 8.40291 17.5879 8.96129 17.5879 9.58261V15.4161C17.5879 16.0374 17.9279 16.5948 18.4759 16.873L19.9569 17.6202C20.1579 17.7237 20.3729 17.7735 20.5879 17.7735C20.8459 17.7735 21.1019 17.7004 21.3309 17.5572C21.7499 17.2943 21.9999 16.8384 21.9999 16.339V8.66179C21.9999 8.1623 21.7499 7.70646 21.3309 7.44251Z" fill="currentColor"></path>
                                <path d="M11.9051 20H6.11304C3.69102 20 2 18.3299 2 15.9391V9.06091C2 6.66904 3.69102 5 6.11304 5H11.9051C14.3271 5 16.0181 6.66904 16.0181 9.06091V15.9391C16.0181 18.3299 14.3271 20 11.9051 20Z" fill="currentColor"></path>
                            </svg>
                        </span>
                    </button>
                    <span>
                        <img class="img-fluid rounded-circle avatar-30" src="{{asset('modules/social-app/images/avatar/01.png')}}" alt="user-img" loading="lazy" />
                    </span>
                </div>
                <div class="nav">
                <div class="form-group input-group mb-0 search-input w-100">
                        <input type="text" class="form-control" placeholder="Search...">
                        <span class="input-group-text">
                            <svg class="icon-20" width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="11.7669" cy="11.7666" r="8.98856" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></circle>
                            <path d="M18.0186 18.4851L21.5426 22" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>