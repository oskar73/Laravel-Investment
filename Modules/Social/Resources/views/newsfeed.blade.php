<x-app-layout layout="social" :assets="$assets ?? []" :isBanner="false" title="Newsfeed">
    @push('head')
        <link rel="stylesheet" href="{{ asset('modules/social-app/css/social-app.min.css') }}" />
        <!-- lib styles -->
        <link rel="stylesheet" href="{{ asset('vendor/zuck.js-master/dist/zuck.min.css') }}">

        <!-- lib skins -->
        <link rel="stylesheet" href="{{ asset('vendor/zuck.js-master/dist/skins/snapssenger.min.css') }}">
        <link rel="stylesheet" href="{{ asset('vendor/zuck.js-master/dist/skins/snapssenger.css') }}">
        <link rel="stylesheet" href="{{ asset('vendor/zuck.js-master/dist/skins/facesnap.css') }}">
    @endpush

    @push('scripts')
        <script src="{{ asset('vendor/zuck.js-master/dist/zuck.min.js') }}"></script>
        <script src="{{ asset('vendor/zuck.js-master/demo/script.js') }}"></script>
        <script src="{{ asset('js/plugins/zuck.js') }}"></script>
        <script src="{{ asset('vendor/sticky-sidebar/dist/sticky-sidebar.min.js') }}"></script>
    @endpush
    <div class="row">
        <div class="col-xl-3 col-lg-3">
            <div id="sidebar-left-social" class="iq-sidebar-left-social">
                <div class="sidebar__inner">
                    <div class="card">
                        <div class="card-header d-flex align-items-center justify-content-between pb-3">
                            <div class="header-title">
                                <h4 class="card-title">{{ __('social.activity') }}</h4>
                            </div>
                            <a class="text-body" href="javascript:void(0)">{{ __('social.see') }}</a>
                        </div>
                        <div class="card-body">
                            <h5 class="mb-3">{{ __('Stories About You') }}</h5>
                            <div class="d-flex align-items-center mb-4 gap-3">
                                <img src="{{ asset('modules/social-app/images/avatar/31.png') }}"
                                    class="img-fluid avatar-48 rounded-circle" alt="profile-image">
                                <div>
                                    <p class="mb-0">Mentions</p>
                                    <small>{{ __('social.stories_mention') }}</small>
                                </div>
                            </div>
                            <h5 class="mb-4">{{ __('social.new') }}</h5>
                            <div class="iq-social-user-details">
                                <x-modules.social.widgets.icon-widget userName="Sepid" userAvatar="avatar/01.png"
                                    userComment="Liked Your Photo" image="true" postImg="newsfeed/06.png" />
                                <x-modules.social.widgets.icon-widget userName="Rokni" userAvatar="avatar/09.png"
                                    userComment="Started Following You" addBtn="true" />
                                <x-modules.social.widgets.icon-widget userName="Arman" userAvatar="avatar/15.png"
                                    userComment="Liked Your Photo" image="true" postImg="newsfeed/05.png" />
                                <x-modules.social.widgets.icon-widget userName="Medra" userAvatar="avatar/23.png"
                                    userComment="Started Following You" addBtn="true" />
                                <x-modules.social.widgets.icon-widget userName="Afshin" userAvatar="avatar/26.png"
                                    userComment="Liked Your Photo" image="true" postImg="newsfeed/07.png" />
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header d-flex align-items-center justify-content-between">
                            <div class="header-title">
                                <h4 class="card-title">{{ __('social.explore') }}</h4>
                            </div>
                            <a class="text-body" href="javascript:void(0)">{{ __('social.see') }}</a>
                        </div>
                        <div class="card-body">
                            <div class="d-flex align-items-center justify-content-between flex-grow-1">
                                <div class="d-flex gap-3">
                                    <div class="btn btn-sm btn-primary-subtle">{{ __('social.website') }}</div>
                                    <div class="btn btn-sm btn-primary-subtle">{{ __('Product') }}</div>
                                </div>
                            </div>
                            <div class="iq-grid-explore d-grid mt-3">
                                <a class="iq-item-col-end rounded" data-fslightbox="gallery"
                                    href="{{ asset('modules/social-app/images/newsfeed/03.png') }}">
                                    <img src="{{ asset('modules/social-app/images/newsfeed/03.png') }}"
                                        class="img-fluid rounded" alt="profile-image" loading="lazy">
                                </a>
                                <a class="iq-item-row-end rounded" data-fslightbox="gallery"
                                    href="{{ asset('modules/social-app/images/newsfeed/11.png') }}">
                                    <img src="{{ asset('modules/social-app/images/newsfeed/08.png') }}"
                                        class="img-fluid rounded" alt="profile-image" loading="lazy">
                                </a>
                                <a class="iq-item-row-end rounded" data-fslightbox="gallery"
                                    href="{{ asset('modules/social-app/images/newsfeed/04.png') }}">
                                    <img src="{{ asset('modules/social-app/images/newsfeed/09.png') }}"
                                        class="img-fluid rounded" alt="profile-image" loading="lazy">
                                </a>
                                <a class="iq-item-row-end rounded" data-fslightbox="gallery"
                                    href="{{ asset('modules/social-app/images/newsfeed/09.png') }}">
                                    <img src="{{ asset('modules/social-app/images/newsfeed/10.png') }}"
                                        class="img-fluid rounded" alt="profile-image" loading="lazy">
                                </a>
                                <a class="iq-item-row-end rounded" data-fslightbox="gallery"
                                    href="{{ asset('modules/social-app/images/newsfeed/10.png') }}">
                                    <img src="{{ asset('modules/social-app/images/newsfeed/11.png') }}"
                                        class="img-fluid rounded" alt="profile-image" loading="lazy">
                                </a>
                                <a class="iq-item-col-end rounded" data-fslightbox="gallery"
                                    href="{{ asset('modules/social-app/images/newsfeed/02.png') }}">
                                    <img src="{{ asset('modules/social-app/images/newsfeed/02.png') }}"
                                        class="img-fluid rounded" alt="profile-image" loading="lazy">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-6 col-lg-6">
            <div class="card ">
                <div class="card-header d-flex justify-content-between">
                    <div class="header-title">
                        <h4 class="mb-0">{{ __('social.stories') }}</h4>
                    </div>
                </div>
                <div class="card-body">
                    <div id="stories" class="storiesWrapper d-flex justify-content-around"></div>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h4 class="mb-0">{{ __('social.create') }}</h4>
                </div>
                <div class="card-body">
                    <div class="border-bottom">
                        <div class="d-flex align-items-center mb-3 gap-3">
                            <img class="img-fluid rounded-circle avatar-60 p-1 border border-2 border-primary border-dotted"
                                src="{{ asset('modules/social-app/images/avatar/22.png') }}" alt=""
                                loading="lazy" />
                            <form class="w-100" data-bs-toggle="modal" data-bs-target="#post-modal"
                                action="javascript:void(0);">
                                <input type="text" class="form-control border-0 shadow-none"
                                    placeholder="Write Something Here...">
                            </form>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mt-3">
                        <div class="btn btn-sm btn-primary-subtle d-flex align-items-center gap-2">
                            <span>{{ __('social.photo') }}</span>
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
                        <div class="btn btn-sm btn-primary-subtle mx-3 d-flex align-items-center gap-2">
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
                    postStatus="Added New Post" postDuration="3 hrs" userprofile="avatar/22.png" />
                <div class="card-body">
                    <div class="user-post">
                        <img src="{{ asset('modules/social-app/images/app/01.png') }}" class="img-fluid rounded"
                            alt="post-image" data-bs-toggle="modal" data-bs-target="#image-modal" role="button"
                            loading="lazy">
                    </div>
                    <div class="comment-area pt-3">
                        <x-modules.social.widgets.like-share id="01" noLikes="120" noComments="02"
                            noShare="15" />
                        <hr>
                        <ul class="list-inline mt-4 mb-0">
                            <li class="mb-0">
                                <x-modules.social.widgets.friend-comment id="01" userName="Larry Robbins"
                                    userComment="So True!!" commentDuration="2 Min Ago" userImage="avatar/11.png" />
                            </li>
                        </ul>
                        <x-modules.social.widgets.comment-form-control placeholder="Enter Your Comment Here..." />
                    </div>
                </div>
            </div>
            <div class="card">
                <x-modules.social.widgets.post-header id="02" userName="Ella Martina"
                    postStatus="Updated Her Status" postDuration="5 hrs" userprofile="avatar/24.png" />
                <div class="card-body">
                    <p>“Essentials to happiness in this life are something to do, something to love, and something to
                        hope for.”</p>
                    <div class="comment-area pt-3">
                        <x-modules.social.widgets.like-share id="02" noLikes="15" noComments="20"
                            noShare="04" />
                        <hr>
                        <ul class="list-inline mt-4 mb-0">
                            <li class="mb-0">
                                <x-modules.social.widgets.friend-comment id="02" userName="Larry Robbins"
                                    userComment="So True!!" commentDuration="5 Min Ago" userImage="avatar/11.png" />
                            </li>
                        </ul>
                        <x-modules.social.widgets.comment-form-control placeholder="Enter Your Comment Here..." />
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-3">
            <div class="card">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <div class="header-title">
                        <h4 class="card-title">{{ __('social.message') }}</h4>
                    </div>
                    <span>
                        <svg class="icon-24" width="24" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M11.4925 2.78906H7.75349C4.67849 2.78906 2.75049 4.96606 2.75049 8.04806V16.3621C2.75049 19.4441 4.66949 21.6211 7.75349 21.6211H16.5775C19.6625 21.6211 21.5815 19.4441 21.5815 16.3621V12.3341"
                                stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round"></path>
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M8.82812 10.921L16.3011 3.44799C17.2321 2.51799 18.7411 2.51799 19.6721 3.44799L20.8891 4.66499C21.8201 5.59599 21.8201 7.10599 20.8891 8.03599L13.3801 15.545C12.9731 15.952 12.4211 16.181 11.8451 16.181H8.09912L8.19312 12.401C8.20712 11.845 8.43412 11.315 8.82812 10.921Z"
                                stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round"></path>
                            <path d="M15.1655 4.60254L19.7315 9.16854" stroke="currentColor" stroke-width="1.5"
                                stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </span>
                </div>
                <div class="card-body">
                    <div class="nav">
                        <div class="form-group input-group mb-0 search-input w-100">
                            <input type="text" class="form-control" placeholder="Search...">
                            <span class="input-group-text">
                                <svg class="icon-20" width="20" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="11.7669" cy="11.7666" r="8.98856" stroke="currentColor"
                                        stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></circle>
                                    <path d="M18.0186 18.4851L21.5426 22" stroke="currentColor" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                            </span>
                        </div>
                    </div>
                    <div class="iq-social-message-newsfeed mt-3">
                        <nav class="tab-bottom-bordered">
                            <div class="mb-0 nav nav-tabs flex-nowrap justify-content-between" id="nav-tab"
                                role="tablist">
                                <button class="nav-link active" id="pills-activeorders-tab1" data-bs-toggle="pill"
                                    data-bs-target="#pills-activeorders" role="tab"
                                    aria-controls="pills-activeorders" aria-selected="true">
                                    <span class="iq-socail-message-tab-text">
                                        Archive
                                    </span>
                                    <span class="iq-socail-message-tab-icon" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Primary">
                                        <svg class="icon-24" width="24" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M17.857 20.417C19.73 20.417 21.249 18.899 21.25 17.026V17.024V14.324C20.013 14.324 19.011 13.322 19.01 12.085C19.01 10.849 20.012 9.846 21.249 9.846H21.25V7.146C21.252 5.272 19.735 3.752 17.862 3.75H17.856H6.144C4.27 3.75 2.751 5.268 2.75 7.142V7.143V9.933C3.944 9.891 4.945 10.825 4.987 12.019C4.988 12.041 4.989 12.063 4.989 12.085C4.99 13.32 3.991 14.322 2.756 14.324H2.75V17.024C2.749 18.897 4.268 20.417 6.141 20.417H6.142H17.857Z"
                                                stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round"></path>
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M12.3711 9.06303L12.9871 10.31C13.0471 10.432 13.1631 10.517 13.2981 10.537L14.6751 10.738C15.0161 10.788 15.1511 11.206 14.9051 11.445L13.9091 12.415C13.8111 12.51 13.7671 12.647 13.7891 12.782L14.0241 14.152C14.0821 14.491 13.7271 14.749 13.4231 14.589L12.1921 13.942C12.0711 13.878 11.9271 13.878 11.8061 13.942L10.5761 14.589C10.2711 14.749 9.91609 14.491 9.97409 14.152L10.2091 12.782C10.2321 12.647 10.1871 12.51 10.0891 12.415L9.09409 11.445C8.84809 11.206 8.98309 10.788 9.32309 10.738L10.7001 10.537C10.8351 10.517 10.9521 10.432 11.0121 10.31L11.6271 9.06303C11.7791 8.75503 12.2191 8.75503 12.3711 9.06303Z"
                                                stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round"></path>
                                        </svg>
                                    </span>
                                </button>
                                <button class="nav-link" id="pills-cancelledorders-tab1" data-bs-toggle="pill"
                                    data-bs-target="#pills-cancelledorders" role="tab"
                                    aria-controls="pills-cancelledorders" aria-selected="false">
                                    <span class="iq-socail-message-tab-text">
                                        Recent
                                    </span>
                                    <span class="iq-socail-message-tab-icon" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="General">
                                        <svg class="icon-24" width="24" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M4.81409 20.4368H19.1971C20.7791 20.4368 21.7721 18.7267 20.9861 17.3527L13.8001 4.78775C13.0091 3.40475 11.0151 3.40375 10.2231 4.78675L3.02509 17.3518C2.23909 18.7258 3.23109 20.4368 4.81409 20.4368Z"
                                                stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round"></path>
                                            <path d="M12.0024 13.4147V10.3147" stroke="currentColor"
                                                stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                            </path>
                                            <path d="M11.995 16.5H12.005" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg>
                                    </span>
                                </button>
                                <button class="nav-link" id="pills-mytrades-tab1" data-bs-toggle="pill"
                                    data-bs-target="#pills-mytrades" role="tab" aria-controls="pills-mytrades"
                                    aria-selected="false">
                                    <span class="iq-socail-message-tab-text">
                                        {{ __('social.new') }}
                                    </span>
                                    <span class="iq-socail-message-tab-icon" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Requests">
                                        <svg class="icon-24" width="24" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M11.9846 21.606C11.9846 21.606 19.6566 19.283 19.6566 12.879C19.6566 6.474 19.9346 5.974 19.3196 5.358C18.7036 4.742 12.9906 2.75 11.9846 2.75C10.9786 2.75 5.26557 4.742 4.65057 5.358C4.03457 5.974 4.31257 6.474 4.31257 12.879C4.31257 19.283 11.9846 21.606 11.9846 21.606Z"
                                                stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round"></path>
                                            <path d="M9.38574 11.8746L11.2777 13.7696L15.1757 9.86963"
                                                stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round"></path>
                                        </svg>
                                    </span>
                                </button>
                            </div>
                        </nav>
                    </div>
                    <div class="tab-content iq-tab-fade-up" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-activeorders" role="tabpanel">
                            <div class="tabs-panel">
                                <ul class="list-unstyled mb-0">
                                    <li class="pt-3">
                                        <x-modules.social.widgets.icon-widget userName="Arman Rokni"
                                            userAvatar="avatar/11.png" userComment="Active 30m" />
                                    </li>
                                    <li class="pt-3">
                                        <x-modules.social.widgets.icon-widget userName="MD Alidoost"
                                            userAvatar="avatar/12.png" userComment="Active 30m" />
                                    </li>
                                    <li class="pt-3">
                                        <x-modules.social.widgets.icon-widget userName="Afshin Rotni"
                                            userAvatar="avatar/13.png" userComment="Active 30m" />
                                    </li>
                                    <li class="pt-3">
                                        <x-modules.social.widgets.icon-widget userName="Salman Shaha"
                                            userAvatar="avatar/14.png" userComment="Active 30m" />
                                    </li>
                                    <li class="pt-3">
                                        <x-modules.social.widgets.icon-widget userName="Vida Lakhani"
                                            userAvatar="avatar/09.png" userComment="Active 30m" />
                                    </li>
                                    <li class="pt-3">
                                        <x-modules.social.widgets.icon-widget userName="Goutham"
                                            userAvatar="avatar/10.png" userComment="Active 30m" />
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-cancelledorders" role="tabpanel">
                            <div class="tabs-panel">
                                <ul class="list-unstyled mb-0">
                                    <li class="pt-3">
                                        <x-modules.social.widgets.icon-widget userName="Arman Rokni"
                                            userAvatar="avatar/11.png" userComment="Active 30m" />
                                    </li>
                                    <li class="pt-3">
                                        <x-modules.social.widgets.icon-widget userName="MD Alidoost"
                                            userAvatar="avatar/12.png" userComment="Active 30m" />
                                    </li>
                                    <li class="pt-3">
                                        <x-modules.social.widgets.icon-widget userName="Afshin Rotni"
                                            userAvatar="avatar/13.png" userComment="Active 30m" />
                                    </li>
                                    <li class="pt-3">
                                        <x-modules.social.widgets.icon-widget userName="Salman Shaha"
                                            userAvatar="avatar/14.png" userComment="Active 30m" />
                                    </li>
                                    <li class="pt-3">
                                        <x-modules.social.widgets.icon-widget userName="Vida Lakhani"
                                            userAvatar="avatar/09.png" userComment="Active 30m" />
                                    </li>
                                    <li class="pt-3">
                                        <x-modules.social.widgets.icon-widget userName="Goutham"
                                            userAvatar="avatar/10.png" userComment="Active 30m" />
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-mytrades" role="tabpanel">
                            <div class="tabs-panel">
                                <ul class="list-unstyled mb-0">
                                    <li class="pt-3">
                                        <x-modules.social.widgets.icon-widget userName="Arman Rokni"
                                            userAvatar="avatar/11.png" userComment="Active 30m" />
                                    </li>
                                    <li class="pt-3">
                                        <x-modules.social.widgets.icon-widget userName="MD Alidoost"
                                            userAvatar="avatar/12.png" userComment="Active 30m" />
                                    </li>
                                    <li class="pt-3">
                                        <x-modules.social.widgets.icon-widget userName="Afshin Rotni"
                                            userAvatar="avatar/13.png" userComment="Active 30m" />
                                    </li>
                                    <li class="pt-3">
                                        <x-modules.social.widgets.icon-widget userName="Salman Shaha"
                                            userAvatar="avatar/14.png" userComment="Active 30m" />
                                    </li>
                                    <li class="pt-3">
                                        <x-modules.social.widgets.icon-widget userName="Vida Lakhani"
                                            userAvatar="avatar/09.png" userComment="Active 30m" />
                                    </li>
                                    <li class="pt-3">
                                        <x-modules.social.widgets.icon-widget userName="Goutham"
                                            userAvatar="avatar/10.png" userComment="Active 30m" />
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <div class="header-title">
                        <h4 class="card-title">{{ __('social.suggested') }}</h4>
                    </div>
                    <a class="text-body" href="javascript:void(0)">{{ __('social.see') }}</a>
                </div>
                <div class="card-body">
                    <div class="iq-social-user-details">
                        <x-modules.social.widgets.suggested-user userName="Vida Lakhani" userAvatar="avatar/09.png"
                            userComment="Suggested For you" />
                        <x-modules.social.widgets.suggested-user userName="Arman Rokni" userAvatar="avatar/11.png"
                            userComment="Suggested For you" />
                        <x-modules.social.widgets.suggested-user userName="Salman Shaha" userAvatar="avatar/14.png"
                            userComment="Followed By Mr. Ali" />
                        <x-modules.social.widgets.suggested-user userName="Afshin Rotni" userAvatar="avatar/13.png"
                            userComment="Followed By Afshint" />
                        <x-modules.social.widgets.suggested-user userName="MD Ali" userAvatar="avatar/12.png"
                            userComment="Followed By Vida" />
                    </div>
                </div>
            </div>
        </div>
    </div>

    <x-modules.social.widgets.post-modal />
    <x-modules.social.widgets.image-modal />
    <x-share-offcanvas />
</x-app-layout>
