<x-app-layout layout="social" title="Event Detail">
    <div class="row">
        <div class="col-lg-12">
            <div class="d-flex align-items-center justify-content-center justify-content-md-between mb-3 gap-4 flex-wrap">
                <div class="group-info d-flex align-items-center gap-3">
                    <div>
                        <img class="rounded-circle img-fluid avatar-100"
                            src="{{ asset('modules/social-app/images/social-profile/15.jpg') }}" alt=""
                            loading="lazy" />
                    </div>
                    <div class="info">
                        <h4>Birthday Celebration</h4>
                        <p class="mb-0 d-flex justify-content-center align-items-center">
                            <svg width="20" class="me-1" viewBox="0 0 24 24" fill="currentColor"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M7.7688 8.71387H16.2312C18.5886 8.71387 20.5 10.5831 20.5 12.8885V17.8254C20.5 20.1308 18.5886 22 16.2312 22H7.7688C5.41136 22 3.5 20.1308 3.5 17.8254V12.8885C3.5 10.5831 5.41136 8.71387 7.7688 8.71387ZM11.9949 17.3295C12.4928 17.3295 12.8891 16.9419 12.8891 16.455V14.2489C12.8891 13.772 12.4928 13.3844 11.9949 13.3844C11.5072 13.3844 11.1109 13.772 11.1109 14.2489V16.455C11.1109 16.9419 11.5072 17.3295 11.9949 17.3295Z"
                                    fill="currentColor"></path>
                                <path opacity="0.4"
                                    d="M17.523 7.39595V8.86667C17.1673 8.7673 16.7913 8.71761 16.4052 8.71761H15.7447V7.39595C15.7447 5.37868 14.0681 3.73903 12.0053 3.73903C9.94257 3.73903 8.26594 5.36874 8.25578 7.37608V8.71761H7.60545C7.20916 8.71761 6.83319 8.7673 6.47754 8.87661V7.39595C6.4877 4.41476 8.95692 2 11.985 2C15.0537 2 17.523 4.41476 17.523 7.39595Z"
                                    fill="currentColor"></path>
                            </svg>
                            Private Group. 323 members
                        </p>
                    </div>
                </div>
                <div class="group-member d-flex align-items-center gap-3">
                    <div class="iq-media-group">
                        <a href="#" class="iq-media">
                            <img class="img-fluid avatar-40 rounded-circle"
                                src="{{ asset('modules/social-app/images/avatar/02.png') }}" alt=""
                                loading="lazy" />
                        </a>
                        <a href="#" class="iq-media">
                            <img class="img-fluid avatar-40 rounded-circle"
                                src="{{ asset('modules/social-app/images/avatar/03.png') }}" alt=""
                                loading="lazy" />
                        </a>
                        <a href="#" class="iq-media">
                            <img class="img-fluid avatar-40 rounded-circle"
                                src="{{ asset('modules/social-app/images/avatar/04.png') }}" alt=""
                                loading="lazy" />
                        </a>
                        <a href="#" class="iq-media">
                            <img class="img-fluid avatar-40 rounded-circle"
                                src="{{ asset('modules/social-app/images/avatar/05.png') }}" alt=""
                                loading="lazy" />
                        </a>
                        <a href="#" class="iq-media">
                            <img class="img-fluid avatar-40 rounded-circle"
                                src="{{ asset('modules/social-app/images/avatar/06.png') }}" alt=""
                                loading="lazy" />
                        </a>
                        <a href="#" class="iq-media">
                            <img class="img-fluid avatar-40 rounded-circle"
                                src="{{ asset('modules/social-app/images/avatar/07.png') }}" alt=""
                                loading="lazy" />
                        </a>
                        <a href="#" class="iq-media">
                            <img class="img-fluid avatar-40 rounded-circle" src="{{ asset('images/user/11.jpg') }}"
                                alt="" loading="lazy" />
                        </a>

                    </div>
                    <button type="submit" class="btn btn-primary d-flex align-items-center gap-2 ">
                        <svg width="20" class="icon-20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path opacity="0.4" d="M16.6667 2H7.33333C3.92889 2 2 3.92889 2 7.33333V16.6667C2 20.0622 3.92 22 7.33333 22H16.6667C20.0711 22 22 20.0622 22 16.6667V7.33333C22 3.92889 20.0711 2 16.6667 2Z" fill="currentColor"></path>
                            <path d="M15.3205 12.7083H12.7495V15.257C12.7495 15.6673 12.4139 16 12 16C11.5861 16 11.2505 15.6673 11.2505 15.257V12.7083H8.67955C8.29342 12.6687 8 12.3461 8 11.9613C8 11.5765 8.29342 11.2539 8.67955 11.2143H11.2424V8.67365C11.2824 8.29088 11.6078 8 11.996 8C12.3842 8 12.7095 8.29088 12.7495 8.67365V11.2143H15.3205C15.7066 11.2539 16 11.5765 16 11.9613C16 12.3461 15.7066 12.6687 15.3205 12.7083Z" fill="currentColor"></path>
                        </svg>
                        Invite
                    </button>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <div class="header-title">
                        <h4 class="card-title">Events</h4>
                    </div>
                    <div class="card-post-toolbar">
                        <div class="dropdown">
                            <svg width="18" class="dropdown-toggle icon-18" data-bs-toggle="dropdown"
                                aria-expanded="false" role="button" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 24 24" fill="currentcolor">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M10 20.6788C10 21.9595 11.0378 23 12.3113 23C13.5868 23 14.6265 21.9595 14.6265 20.6788C14.6265 19.3981 13.5868 18.3576 12.3113 18.3576C11.0378 18.3576 10 19.3981 10 20.6788ZM10 12.0005C10 13.2812 11.0378 14.3217 12.3113 14.3217C13.5868 14.3217 14.6265 13.2812 14.6265 12.0005C14.6265 10.7198 13.5868 9.67929 12.3113 9.67929C11.0378 9.67929 10 10.7198 10 12.0005ZM12.3113 5.64239C11.0378 5.64239 10 4.60192 10 3.3212C10 2.04047 11.0378 1 12.3113 1C13.5868 1 14.6265 2.04047 14.6265 3.3212C14.6265 4.60192 13.5868 5.64239 12.3113 5.64239Z"
                                    fill="#8A92A6" />
                            </svg>
                            <div class="dropdown-menu m-0 p-0">
                                <a class="dropdown-item p-3" href="#">
                                    <div class="d-flex align-items-top gap-3">
                                        <div class="icon">
                                            <svg class="icon-20" width="20" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M19.7695 11.6453C19.039 10.7923 18.7071 10.0531 18.7071 8.79716V8.37013C18.7071 6.73354 18.3304 5.67907 17.5115 4.62459C16.2493 2.98699 14.1244 2 12.0442 2H11.9558C9.91935 2 7.86106 2.94167 6.577 4.5128C5.71333 5.58842 5.29293 6.68822 5.29293 8.37013V8.79716C5.29293 10.0531 4.98284 10.7923 4.23049 11.6453C3.67691 12.2738 3.5 13.0815 3.5 13.9557C3.5 14.8309 3.78723 15.6598 4.36367 16.3336C5.11602 17.1413 6.17846 17.6569 7.26375 17.7466C8.83505 17.9258 10.4063 17.9933 12.0005 17.9933C13.5937 17.9933 15.165 17.8805 16.7372 17.7466C17.8215 17.6569 18.884 17.1413 19.6363 16.3336C20.2118 15.6598 20.5 14.8309 20.5 13.9557C20.5 13.0815 20.3231 12.2738 19.7695 11.6453Z"
                                                    fill="currentColor"></path>
                                                <path opacity="0.4"
                                                    d="M14.0088 19.2283C13.5088 19.1215 10.4627 19.1215 9.96275 19.2283C9.53539 19.327 9.07324 19.5566 9.07324 20.0602C9.09809 20.5406 9.37935 20.9646 9.76895 21.2335L9.76795 21.2345C10.2718 21.6273 10.8632 21.877 11.4824 21.9667C11.8123 22.012 12.1482 22.01 12.4901 21.9667C13.1083 21.877 13.6997 21.6273 14.2036 21.2345L14.2026 21.2335C14.5922 20.9646 14.8734 20.5406 14.8983 20.0602C14.8983 19.5566 14.4361 19.327 14.0088 19.2283Z"
                                                    fill="currentColor"></path>
                                            </svg>
                                        </div>
                                        <div class="data">
                                            <h6>Notifications</h6>
                                            <p class="mb-0">Turn on notifications<br> for this post</p>
                                        </div>
                                    </div>
                                </a>
                                <a class="dropdown-item p-3" href="#">
                                    <div class="d-flex align-items-top gap-3">
                                        <div class="icon">
                                            <svg class="icon-20" xmlns="http://www.w3.org/2000/svg" width="20"
                                                viewBox="0 0 24 24" fill="none">
                                                <path
                                                    d="M4 3C4 1.89543 4.89543 1 6 1H13.0801C13.664 1 14.2187 1.25513 14.5986 1.69841L19.5185 7.43822C19.8292 7.80071 20 8.26239 20 8.73981V21C20 22.1046 19.1046 23 18 23H6C4.89543 23 4 22.1046 4 21V3Z"
                                                    fill="currentColor" fill-opacity="0.4"></path>
                                                <path
                                                    d="M13.0801 1H6C4.89543 1 4 1.89543 4 3V21C4 22.1046 4.89543 23 6 23H18C19.1046 23 20 22.1046 20 21V8.73981M13.0801 1C13.664 1 14.2187 1.25513 14.5986 1.69841L19.5185 7.43822C19.8292 7.80071 20 8.26239 20 8.73981M13.0801 1V5.73981C13.0801 7.39666 14.4232 8.73981 16.0801 8.73981H20"
                                                    stroke="currentColor"></path>
                                                <path d="M9.15961 13.1986L9.15957 13.1986L9.15961 13.1986Z"
                                                    fill="currentColor" fill-opacity="0.4" stroke="currentColor"
                                                    stroke-linecap="round"></path>
                                                <line x1="12.975" y1="12.6181" x2="11.2497" y2="18.6566"
                                                    stroke="currentColor" stroke-linecap="round"></line>
                                                <path
                                                    d="M15.1037 17.8012C15.1037 17.8012 15.1037 17.8013 15.1036 17.8014L15.1037 17.8013L15.1037 17.8012Z"
                                                    fill="currentColor" fill-opacity="0.4" stroke="currentColor"
                                                    stroke-linecap="round"></path>
                                            </svg>
                                        </div>
                                        <div class="data">
                                            <h6>Pins</h6>
                                            <p class="mb-0">Pin your favourite groups<br> for quick access.</p>
                                        </div>
                                    </div>
                                </a>
                                <a class="dropdown-item p-3" href="#">
                                    <div class="d-flex align-items-top gap-3">
                                        <div class="icon">
                                            <svg class="icon-20" width="20" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path opacity="0.4"
                                                    d="M19.9927 18.9534H14.2984C13.7429 18.9534 13.291 19.4124 13.291 19.9767C13.291 20.5422 13.7429 21.0001 14.2984 21.0001H19.9927C20.5483 21.0001 21.0001 20.5422 21.0001 19.9767C21.0001 19.4124 20.5483 18.9534 19.9927 18.9534Z"
                                                    fill="currentColor"></path>
                                                <path
                                                    d="M10.309 6.90385L15.7049 11.2639C15.835 11.3682 15.8573 11.5596 15.7557 11.6929L9.35874 20.0282C8.95662 20.5431 8.36402 20.8344 7.72908 20.8452L4.23696 20.8882C4.05071 20.8903 3.88775 20.7613 3.84542 20.5764L3.05175 17.1258C2.91419 16.4915 3.05175 15.8358 3.45388 15.3306L9.88256 6.95545C9.98627 6.82108 10.1778 6.79743 10.309 6.90385Z"
                                                    fill="currentColor"></path>
                                                <path opacity="0.4"
                                                    d="M18.1208 8.66544L17.0806 9.96401C16.9758 10.0962 16.7874 10.1177 16.6573 10.0124C15.3927 8.98901 12.1545 6.36285 11.2561 5.63509C11.1249 5.52759 11.1069 5.33625 11.2127 5.20295L12.2159 3.95706C13.126 2.78534 14.7133 2.67784 15.9938 3.69906L17.4647 4.87078C18.0679 5.34377 18.47 5.96726 18.6076 6.62299C18.7663 7.3443 18.597 8.0527 18.1208 8.66544Z"
                                                    fill="currentColor"></path>
                                            </svg>
                                        </div>
                                        <div class="data">
                                            <h6>Following</h6>
                                            <p class="mb-0">Follow or unfollow groups <br>to control in News Feed.
                                            </p>
                                        </div>
                                    </div>
                                </a>
                                <a class="dropdown-item p-3" href="#">
                                    <div class="d-flex align-items-top gap-3">
                                        <div class="icon">
                                            <svg class="icon-20" width="20" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path opacity="0.4"
                                                    d="M16.34 1.99976H7.67C4.28 1.99976 2 4.37976 2 7.91976V16.0898C2 19.6198 4.28 21.9998 7.67 21.9998H16.34C19.73 21.9998 22 19.6198 22 16.0898V7.91976C22 4.37976 19.73 1.99976 16.34 1.99976Z"
                                                    fill="currentColor"></path>
                                                <path
                                                    d="M15.0158 13.7703L13.2368 11.9923L15.0148 10.2143C15.3568 9.87326 15.3568 9.31826 15.0148 8.97726C14.6728 8.63326 14.1198 8.63426 13.7778 8.97626L11.9988 10.7543L10.2198 8.97426C9.87782 8.63226 9.32382 8.63426 8.98182 8.97426C8.64082 9.31626 8.64082 9.87126 8.98182 10.2123L10.7618 11.9923L8.98582 13.7673C8.64382 14.1093 8.64382 14.6643 8.98582 15.0043C9.15682 15.1763 9.37982 15.2613 9.60382 15.2613C9.82882 15.2613 10.0518 15.1763 10.2228 15.0053L11.9988 13.2293L13.7788 15.0083C13.9498 15.1793 14.1728 15.2643 14.3968 15.2643C14.6208 15.2643 14.8448 15.1783 15.0158 15.0083C15.3578 14.6663 15.3578 14.1123 15.0158 13.7703Z"
                                                    fill="currentColor"></path>
                                            </svg>
                                        </div>
                                        <div class="data">
                                            <h6>Membership</h6>
                                            <p class="mb-0">Leave groups that no<br> longer interest you.</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <ul class="list-inline p-0 m-0">
                        <li class="mb-3 pb-md-3 border-bottom members-list nav">
                            <div class="form-group input-group search-input mb-0 w-100">
                                <input type="text" class="form-control " placeholder="Type here..">
                                <span class="input-group-text">
                                    <svg class="icon-20" width="20" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="11.7669" cy="11.7666" r="8.98856" stroke="currentColor"
                                            stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                        </circle>
                                        <path d="M18.0186 18.4851L21.5426 22" stroke="currentColor" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                </span>
                            </div>
                        </li>
                        <li class="mb-3 d-flex align-items-center gap-2">
                            <svg class="icon-32 text-dark" width="32" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M12.7 11.7488H3.75" stroke="currentColor" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round"></path>
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M12.7002 16.7498L20.6372 11.7488L12.7002 6.74776V16.7498Z" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round" fill="currentColor"></path>
                            </svg>
                            <h6 class="mb-0">Birthday Celibration</h6>
                        </li>
                        <li class="mb-3 d-flex align-items-center gap-2">
                            <svg class="icon-32 text-dark" width="32" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M12.7 11.7488H3.75" stroke="currentColor" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round"></path>
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M12.7002 16.7498L20.6372 11.7488L12.7002 6.74776V16.7498Z" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round" fill="currentColor"></path>
                            </svg>
                            <h6 class="mb-0">New Year Celibration</h6>
                        </li>
                        <li class="mb-3 d-flex align-items-center gap-2">
                            <svg class="icon-32 text-dark" width="32" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M12.7 11.7488H3.75" stroke="currentColor" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round"></path>
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M12.7002 16.7498L20.6372 11.7488L12.7002 6.74776V16.7498Z" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round" fill="currentColor"></path>
                            </svg>
                            <h6 class="mb-0">Atlanta Retail Show</h6>
                        </li>
                        <li class="mb-3 d-flex align-items-center gap-2">
                            <svg class="icon-32 text-dark" width="32" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M12.7 11.7488H3.75" stroke="currentColor" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round"></path>
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M12.7002 16.7498L20.6372 11.7488L12.7002 6.74776V16.7498Z" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round" fill="currentColor"></path>
                            </svg>
                            <h6 class="mb-0">Holi Celibration</h6>
                        </li>
                        <li class="mb-3 d-flex align-items-center gap-2">
                            <svg class="icon-32 text-dark" width="32" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M12.7 11.7488H3.75" stroke="currentColor" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round"></path>
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M12.7002 16.7498L20.6372 11.7488L12.7002 6.74776V16.7498Z" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round" fill="currentColor"></path>
                            </svg>
                            <h6 class="mb-0">Republic Day</h6>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <div class="header-title">
                        <h4 class="card-title">About</h4>
                    </div>
                </div>
                <div class="card-body">
                    <ul class="list-inline p-0 m-0">
                        <li class="mb-3 d-flex align-items-center gap-3">
                            <div
                                class="avatar-40 rounded-circle bg-light text-center  d-flex align-items-center justify-content-center">
                                <svg class="icon-22" width="22" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M8.53162 2.93677C10.7165 1.66727 13.402 1.68946 15.5664 2.99489C17.7095 4.32691 19.012 6.70418 18.9998 9.26144C18.95 11.8019 17.5533 14.19 15.8075 16.0361C14.7998 17.1064 13.6726 18.0528 12.4488 18.856C12.3228 18.9289 12.1848 18.9777 12.0415 19C11.9036 18.9941 11.7693 18.9534 11.6508 18.8814C9.78243 17.6746 8.14334 16.134 6.81233 14.334C5.69859 12.8314 5.06584 11.016 5 9.13442C4.99856 6.57225 6.34677 4.20627 8.53162 2.93677ZM9.79416 10.1948C10.1617 11.1008 11.0292 11.6918 11.9916 11.6918C12.6221 11.6964 13.2282 11.4438 13.6748 10.9905C14.1214 10.5371 14.3715 9.92064 14.3692 9.27838C14.3726 8.29804 13.7955 7.41231 12.9073 7.03477C12.0191 6.65723 10.995 6.86235 10.3133 7.55435C9.63159 8.24635 9.42664 9.28872 9.79416 10.1948Z"
                                        fill="currentColor"></path>
                                    <ellipse opacity="0.4" cx="12" cy="21" rx="5"
                                        ry="1" fill="currentColor"></ellipse>
                                </svg>
                            </div>
                            <h6 class="mb-0">Reserving a location for an event</h6>
                        </li>
                        <li class="mb-3 d-flex align-items-center gap-3">
                            <div
                                class="avatar-40 rounded-circle bg-light text-center d-flex align-items-center justify-content-center">
                                <svg width="20" viewBox="0 0 24 24" fill="currentColor"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <rect opacity="0.4" x="3" y="6" width="14.1143" height="11.9429" rx="0.5"
                                        fill="currentColor" />
                                    <circle cx="6.79998" cy="17.4" r="2.71429" fill="currentColor" />
                                    <circle cx="16.5714" cy="17.4" r="2.71429" fill="currentColor" />
                                    <path opacity="0.4"
                                        d="M19.5384 9.8H17.6143C17.3381 9.8 17.1143 10.0239 17.1143 10.3V17.4429C17.1143 17.719 17.3381 17.9429 17.6143 17.9429H21.5C21.7761 17.9429 22 17.719 22 17.4429V13.7328C22 13.6458 21.9773 13.5603 21.9341 13.4847L19.9725 10.0519C19.8835 9.89615 19.7178 9.8 19.5384 9.8Z"
                                        fill="currentColor" />
                                    <path
                                        d="M18 12.5V11.5C18 11.2239 18.2239 11 18.5 11H19.25C19.4074 11 19.5556 11.0741 19.65 11.2L20.4 12.2C20.6472 12.5296 20.412 13 20 13H18.5C18.2239 13 18 12.7761 18 12.5Z"
                                        fill="currentColor" />
                                </svg>
                            </div>
                            <h6 class="mb-0">Coordinating Outside vandors</h6>
                        </li>
                        <li class="mb-3 d-flex align-items-center gap-3">
                            <div
                                class="avatar-40 rounded-circle bg-light text-center d-flex align-items-center justify-content-center">
                                <svg width="20" viewBox="0 0 24 24" fill="currentColor"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path opacity="0.4"
                                        d="M4.19332 8.15385C3.86157 6.96352 4.03587 5.17261 4.13727 4.38965C4.15832 4.22715 4.35439 4.16564 4.46862 4.28312L11 11C11 11 10.3194 13 8.27733 13C6.91602 12.3077 4.86167 10.552 4.19332 8.15385Z"
                                        fill="currentColor" />
                                    <path opacity="0.4"
                                        d="M15 5.5C12 8.50001 13.5 11 13.5 11C13.5 11 15.5 12.7056 19 10.5C21.5526 8.89146 21.445 5.94496 20.5 5C19.477 3.977 16.2748 4.22526 15 5.5Z"
                                        fill="currentColor" />
                                    <line x1="13.5099" y1="11.0603" x2="4.0603" y2="20.0278"
                                        stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                                    <line x1="0.75" y1="-0.75" x2="13.7773" y2="-0.75"
                                        transform="matrix(0.72537 0.688359 0.688359 -0.72537 10 10)"
                                        stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                                </svg>
                            </div>
                            <h6 class="mb-0">Managing Staff</h6>
                        </li>
                        <li class="mb-3 d-flex align-items-center gap-3">
                            <div
                                class="avatar-40 rounded-circle bg-light text-center  d-flex align-items-center justify-content-center">
                                <svg class="icon-22" width="22" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M9.14373 20.7821V17.7152C9.14372 16.9381 9.77567 16.3067 10.5584 16.3018H13.4326C14.2189 16.3018 14.8563 16.9346 14.8563 17.7152V20.7732C14.8562 21.4473 15.404 21.9951 16.0829 22H18.0438C18.9596 22.0023 19.8388 21.6428 20.4872 21.0007C21.1356 20.3586 21.5 19.4868 21.5 18.5775V9.86585C21.5 9.13139 21.1721 8.43471 20.6046 7.9635L13.943 2.67427C12.7785 1.74912 11.1154 1.77901 9.98539 2.74538L3.46701 7.9635C2.87274 8.42082 2.51755 9.11956 2.5 9.86585V18.5686C2.5 20.4637 4.04738 22 5.95617 22H7.87229C8.19917 22.0023 8.51349 21.8751 8.74547 21.6464C8.97746 21.4178 9.10793 21.1067 9.10792 20.7821H9.14373Z"
                                        fill="currentColor"></path>
                                </svg>
                            </div>
                            <h6 class="mb-0">Selecting an overall event theme</h6>
                        </li>
                        <li class="mb-3 d-flex align-items-center gap-3">
                            <div
                                class="avatar-40 rounded-circle bg-light text-center d-flex align-items-center justify-content-center">
                                <svg width="22" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path opacity="0.4"
                                        d="M4.58058 4.24805C4.68595 9.86783 4.58058 21.1074 4.58058 21.1074H16.6983V4.13996C16.6983 2.562 16.3497 2.00008 14.8017 2.00002C12.2727 1.99993 7.63636 2.00018 6.3719 2.00014C5.10744 2.00009 4.58058 2.43421 4.58058 4.24805Z"
                                        fill="currentColor" />
                                    <path
                                        d="M20 21.1074H10.8678V13.1866C10.8678 12.0291 11.4298 10.9917 13.1157 10.9917H18.1736C19.2976 10.9917 20 12.0291 20 13.0664V21.1074Z"
                                        fill="currentColor" />
                                    <path
                                        d="M14.8017 9.08965C14.8017 7.7401 14.7391 7.61984 13.3967 7.61984C12.0544 7.61984 11.9918 7.8791 11.9918 9.08965C11.9918 10.3002 12.4132 10.5594 13.3967 10.5594C14.3802 10.5594 14.8017 10.4392 14.8017 9.08965Z"
                                        fill="currentColor" />
                                    <path
                                        d="M9.1818 4.59377C9.1818 3.24422 9.11919 3.12396 7.77685 3.12396C6.4345 3.12396 6.37189 3.38322 6.37189 4.59377C6.37189 5.80431 6.79337 6.06357 7.77685 6.06357C8.76032 6.06357 9.1818 5.94331 9.1818 4.59377Z"
                                        fill="currentColor" />
                                    <path
                                        d="M9.1818 9.08965C9.1818 7.7401 9.11919 7.61984 7.77685 7.61984C6.4345 7.61984 6.37189 7.8791 6.37189 9.08965C6.37189 10.3002 6.79337 10.5594 7.77685 10.5594C8.76032 10.5594 9.1818 10.4392 9.1818 9.08965Z"
                                        fill="currentColor" />
                                    <path
                                        d="M14.8017 4.59377C14.8017 3.24422 14.7391 3.12396 13.3967 3.12396C12.0544 3.12396 11.9918 3.38322 11.9918 4.59377C11.9918 5.80431 12.4132 6.06357 13.3967 6.06357C14.3802 6.06357 14.8017 5.94331 14.8017 4.59377Z"
                                        fill="currentColor" />
                                    <path
                                        d="M9.74379 21.1075V14.4748C9.74379 13.3938 9.57519 13.2397 8.05784 13.2397C6.54048 13.2397 6.37189 13.5843 6.37189 14.4748V21.1075H9.74379Z"
                                        fill="currentColor" />
                                </svg>
                            </div>
                            <h6 class="mb-0">Negotating hotel contracts</h6>
                        </li>
                        <li class="mb-3 d-flex align-items-center gap-3">
                            <div
                                class="avatar-40 rounded-circle bg-light text-center d-flex align-items-center justify-content-center">
                                <svg width="22" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path opacity="0.4"
                                        d="M2.00018 11.0785C2.05018 13.4165 2.19018 17.4155 2.21018 17.8565C2.28118 18.7995 2.64218 19.7525 3.20418 20.4245C3.98618 21.3675 4.94918 21.7885 6.29218 21.7885C8.14818 21.7985 10.1942 21.7985 12.1812 21.7985C14.1762 21.7985 16.1122 21.7985 17.7472 21.7885C19.0712 21.7885 20.0642 21.3565 20.8362 20.4245C21.3982 19.7525 21.7592 18.7895 21.8102 17.8565C21.8302 17.4855 21.9302 13.1445 21.9902 11.0785H2.00018Z"
                                        fill="currentColor" />
                                    <path
                                        d="M11.2454 15.3842V16.6782C11.2454 17.0922 11.5814 17.4282 11.9954 17.4282C12.4094 17.4282 12.7454 17.0922 12.7454 16.6782V15.3842C12.7454 14.9702 12.4094 14.6342 11.9954 14.6342C11.5814 14.6342 11.2454 14.9702 11.2454 15.3842"
                                        fill="currentColor" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M10.2113 14.5564C10.1113 14.9194 9.7623 15.1514 9.38431 15.1014C6.8333 14.7454 4.39531 13.8404 2.33731 12.4814C2.12631 12.3434 2.00031 12.1074 2.00031 11.8554V8.3894C2.00031 6.2894 3.71231 4.5814 5.81731 4.5814H7.78431C7.97231 3.1294 9.20231 2.0004 10.7043 2.0004H13.2863C14.7873 2.0004 16.0183 3.1294 16.2063 4.5814H18.1833C20.2823 4.5814 21.9903 6.2894 21.9903 8.3894V11.8554C21.9903 12.1074 21.8633 12.3424 21.6543 12.4814C19.5923 13.8464 17.1443 14.7554 14.5763 15.1104C14.5413 15.1154 14.5073 15.1174 14.4733 15.1174C14.1343 15.1174 13.8313 14.8884 13.7463 14.5524C13.5443 13.7564 12.8213 13.1994 11.9903 13.1994C11.1483 13.1994 10.4333 13.7444 10.2113 14.5564ZM13.2863 3.5004H10.7043C10.0313 3.5004 9.46931 3.9604 9.30131 4.5814H14.6883C14.5203 3.9604 13.9583 3.5004 13.2863 3.5004Z"
                                        fill="currentColor" />
                                </svg>
                            </div>
                            <h6 class="mb-0">hiring a caterer</h6>
                        </li>
                        <li class="mb-3 d-flex align-items-center gap-3">
                            <div
                                class="avatar-40 rounded-circle bg-light text-center  d-flex align-items-center justify-content-center">
                                <svg width="22" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path opacity="0.4"
                                        d="M4 4.2C4 4.08954 4.08954 4 4.2 4H19.8C19.9105 4 20 4.08954 20 4.2V16H4V4.2Z"
                                        fill="currentColor" />
                                    <path
                                        d="M4 16H20V19.8C20 19.9105 19.9105 20 19.8 20H4.2C4.08954 20 4 19.9105 4 19.8V16Z"
                                        fill="currentColor" />
                                    <path
                                        d="M16 12.6035V9.53334C16 9.42289 16.0895 9.33334 16.2 9.33334H18.4667C18.5771 9.33334 18.6667 9.42289 18.6667 9.53334V12.7273C18.6667 12.9201 18.4207 13.0013 18.306 12.8464L17.3644 11.5753C17.2793 11.4604 17.1046 11.4694 17.0317 11.5924L16.3721 12.7055C16.2684 12.8805 16 12.807 16 12.6035Z"
                                        fill="currentColor" />
                                    <rect x="5.33331" y="6.66666" width="9.33333" height="1.33333" rx="0.2"
                                        fill="currentColor" />
                                    <rect x="5.33331" y="9.33334" width="5.33333" height="1.33333" rx="0.2"
                                        fill="currentColor" />
                                    <rect x="5.33331" y="12" width="8" height="1.33333" rx="0.2"
                                        fill="currentColor" />
                                </svg>
                            </div>
                            <h6 class="mb-0">Developing invitations</h6>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header">
                    <h4 class="mb-0">Create A Post</h4>
                </div>
                <div class="card-body">
                    <div class="border-bottom">
                        <div class="d-flex align-items-center mb-3 gap-3">
                            <img class="img-fluid rounded-circle avatar-60 p-1 border border-2 border-primary border-dotted"
                                src="{{ asset('modules/social-app/images/avatar/01.png') }}" alt=""
                                loading="lazy" />
                            <form class="w-100" data-bs-toggle="modal" data-bs-target="#post-modal"
                                action="javascript:void(0);">
                                <input type="text" class="form-control border-0 shadow-none"
                                    placeholder="Write Something Here...">
                            </form>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mt-3">
                        <div class="btn btn-sm btn-primary-subtle  d-flex align-items-center gap-2">
                            <span>Photo</span>
                            <svg class="icon-16" width="16" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M21.9999 14.7024V16.0859C21.9999 16.3155 21.9899 16.5471 21.9699 16.7767C21.6893 19.9357 19.4949 22 16.3286 22H7.67126C6.06806 22 4.71535 21.4797 3.74341 20.5363C3.36265 20.1864 3.042 19.7753 2.7915 19.3041C3.12217 18.9021 3.49291 18.462 3.85363 18.0208C4.46485 17.289 5.05603 16.5661 5.42677 16.0959C5.97788 15.4142 7.43078 13.6196 9.44481 14.4617C9.85563 14.6322 10.2164 14.8728 10.547 15.0833C11.3586 15.6247 11.6993 15.7851 12.2705 15.4743C12.9017 15.1335 13.3125 14.4617 13.7434 13.76C13.9739 13.388 14.2043 13.0281 14.4548 12.6972C15.547 11.2736 17.2304 10.8926 18.6332 11.7348C19.3346 12.1559 19.9358 12.6872 20.4969 13.2276C20.6172 13.3479 20.7374 13.4592 20.8476 13.5695C20.9979 13.7198 21.4989 14.2211 21.9999 14.7024Z"
                                    fill="currentColor"></path>
                                <path opacity="0.4"
                                    d="M16.3387 2H7.67134C4.27455 2 2 4.37607 2 7.91411V16.086C2 17.3181 2.28056 18.4119 2.79158 19.3042C3.12224 18.9022 3.49299 18.4621 3.85371 18.0199C4.46493 17.2891 5.05611 16.5662 5.42685 16.096C5.97796 15.4143 7.43086 13.6197 9.44489 14.4618C9.85571 14.6323 10.2164 14.8729 10.5471 15.0834C11.3587 15.6248 11.6994 15.7852 12.2705 15.4734C12.9018 15.1336 13.3126 14.4618 13.7435 13.759C13.9739 13.3881 14.2044 13.0282 14.4549 12.6973C15.5471 11.2737 17.2305 10.8927 18.6333 11.7349C19.3347 12.1559 19.9359 12.6873 20.497 13.2277C20.6172 13.348 20.7375 13.4593 20.8477 13.5696C20.998 13.7189 21.499 14.2202 22 14.7025V7.91411C22 4.37607 19.7255 2 16.3387 2Z"
                                    fill="currentColor"></path>
                                <path
                                    d="M11.4543 8.79668C11.4543 10.2053 10.2809 11.3783 8.87313 11.3783C7.46632 11.3783 6.29297 10.2053 6.29297 8.79668C6.29297 7.38909 7.46632 6.21509 8.87313 6.21509C10.2809 6.21509 11.4543 7.38909 11.4543 8.79668Z"
                                    fill="currentColor"></path>
                            </svg>
                        </div>
                        <div class="btn btn-sm btn-primary-subtle  mx-3 d-flex align-items-center  gap-2">
                            <span>Tag Friend</span>
                            <svg class="icon-16" width="16" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M11.997 15.1746C7.684 15.1746 4 15.8546 4 18.5746C4 21.2956 7.661 21.9996 11.997 21.9996C16.31 21.9996 19.994 21.3206 19.994 18.5996C19.994 15.8786 16.334 15.1746 11.997 15.1746Z"
                                    fill="currentColor"></path>
                                <path opacity="0.4"
                                    d="M11.9971 12.5838C14.9351 12.5838 17.2891 10.2288 17.2891 7.29176C17.2891 4.35476 14.9351 1.99976 11.9971 1.99976C9.06008 1.99976 6.70508 4.35476 6.70508 7.29176C6.70508 10.2288 9.06008 12.5838 11.9971 12.5838Z"
                                    fill="currentColor"></path>
                            </svg>
                        </div>
                        <div class="btn btn-sm btn-primary-subtle">More ...</div>
                    </div>
                </div>
            </div>
            <div class="card">
                <x-modules.social.widgets.post-header id="01" userName="Joshua Martin"
                    postStatus="Added New Post" postDuration="3 hrs" userprofile="avatar/01.png" />
                <div class="card-body">
                    <div class="user-post">
                        <a data-fslightbox="gallery"
                            href="{{ asset('modules/social-app/images/profile-event/02.png') }}">
                            <img src="{{ asset('modules/social-app/images/profile-event/02.png') }}"
                                class="img-fluid rounded w-100" alt="post-image" loading="lazy">
                        </a>
                    </div>
                    <div class="comment-area pt-3">
                        <x-modules.social.widgets.like-share id="01" noLikes="120" noComments="02"
                            noShare="15" />
                        <hr>
                        <ul class="list-inline mt-4 mb-0">
                            <li class="mb-0">
                                <x-modules.social.widgets.friend-comment id="10" userName="Larry Robbins"
                                    userComment="So True!!" commentDuration="2 Min Ago" userImage="avatar/10.png" />
                            </li>
                        </ul>
                        <x-modules.social.widgets.comment-form-control placeholder="Enter Your Comment Here..." />
                    </div>
                </div>

            </div>
            <div class="card">
                <x-modules.social.widgets.post-header id="02" userName="Pete Sariya"
                    postStatus="Update his Status" postDuration="7 hrs" userprofile="avatar/03.png" />
                <div class="card-body">
                    <div class="user-post">
                        <a data-fslightbox="gallery"
                            href="{{ asset('modules/social-app/images/profile-event/03.png') }}">
                            <img src="{{ asset('modules/social-app/images/profile-event/03.png') }}"
                                class="img-fluid rounded w-100" alt="post-image" loading="lazy">
                        </a>
                    </div>
                    <div class="comment-area pt-3">
                        <x-modules.social.widgets.like-share id="01" noLikes="120" noComments="02"
                            noShare="15" />
                        <hr>
                        <ul class="list-inline mt-4 mb-0">
                            <li class="mb-0">
                                <x-modules.social.widgets.friend-comment id="11" userName="Larry Robbins"
                                    userComment="So True!!" commentDuration="2 Min Ago" userImage="avatar/10.png" />
                            </li>
                        </ul>
                        <x-modules.social.widgets.comment-form-control placeholder="Enter Your Comment Here..." />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <x-modules.social.widgets.post-modal />
    <x-modules.social.widgets.image-modal />
    <x-share-offcanvas />
</x-app-layout>
