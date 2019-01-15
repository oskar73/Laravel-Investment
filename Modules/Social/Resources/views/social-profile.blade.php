<x-app-layout layout="social" :asset="$asset ?? []" :subheader="true" title="Social Profile">
    <x-modules.social.widgets.small-sub-header />
    <div class="tab-content iq-tab-fade-up">
        <div class="tab-pane fade show active" id="timeline" role="tabpanel">

            <div class="row">
                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="mb-0">{{ __('Create a Post') }}</h4>
                        </div>
                        <div class="card-body">
                            <div class="border-bottom">
                                <div class="d-flex align-items-center mb-3">
                                    <img class="img-fluid rounded-circle avatar-60 p-1 border border-2 border-primary border-dotted"
                                        src="{{ asset('modules/social-app/images/avatar/22.png') }}" alt="">
                                    <form class="ms-3 w-100" data-bs-toggle="modal" data-bs-target="#post-modal"
                                        action="javascript:void();">
                                        <input type="text" class="form-control border-0 shadow-none"
                                            placeholder="Write Something Here...">
                                    </form>
                                </div>
                            </div>
                            <div class="d-flex align-items-center mt-3 text-dark">
                                <div class="btn btn-sm btn-primary-subtle gap-2 d-flex align-items-center">
                                    <span>Photo</span>
                                    <svg class="icon-20" width="20" viewBox="0 0 24 24" fill="none"
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
                                <div class="btn btn-sm btn-primary-subtle mx-3 gap-2 d-flex align-items-center">
                                    <span class>Tag Friend</span>
                                    <svg class="icon-20" width="20" viewBox="0 0 24 24" fill="none"
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
                                <img src="{{ asset('modules/social-app/images/app/01.png') }}"
                                    class="img-fluid rounded w-100" alt="post-image" data-bs-toggle="modal"
                                    data-bs-target="#image-modal" role="button" loading="lazy" />
                            </div>
                            <div class="comment-area pt-3">
                                <x-modules.social.widgets.like-share id="01" noLikes="45" noComments="12"
                                    noShare="30" />
                                <hr>
                                <ul class="list-inline mt-4">
                                    <li class="mb-0">
                                        <x-modules.social.widgets.friend-comment id="01" userName="Larry Robbins"
                                            userComment="So True!!" commentDuration="2 Min Ago"
                                            userImage="avatar/11.png" />
                                    </li>
                                </ul>
                                <x-modules.social.widgets.comment-form-control
                                    placeholder="Enter Your Comment Here..." />
                            </div>
                        </div>
                    </div>
                    <div class="mb-4">
                        <div class="hero-image position-relative rounded">
                            <div class="h-100">
                                <div class="row align-items-center h-100">
                                    <div class="col-lg-12">
                                        <h2 class="mb-3 text-gray-dark">Complement your<br> flawless beauty.</h2>
                                        <p class="mb-3 text-gray">Lorem ipsum dolor sit amet, consectetur adipiscing</p>
                                        <button type="button" class="btn btn-primary">Shop Now</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <x-modules.social.widgets.post-header id="02" userName="Ella Martina"
                            postStatus="Updated Her Status" postDuration="5 hrs" userprofile="avatar/22.png" />
                        <div class="card-body">
                            <p>Purchased New Home Decors For My New Home :)</p>
                            <div class="iq-grid-container">
                                <div class="item-img-1">
                                    <a data-fslightbox="social"
                                        href="{{ asset('modules/social-app/images/social-profile/10.png') }}">
                                        <img src="{{ asset('modules/social-app/images/social-profile/10.png') }}"
                                            class="img-fluid h-100 object-cover  rounded" alt="grid-1" />
                                    </a>
                                </div>
                                <div class="item-img-2">
                                    <a class="d-flex justify-content-center" data-fslightbox="social"
                                        href="{{ asset('modules/social-app/images/social-profile/11.png') }}">
                                        <img class="img-fluid h-100 object-cover rounded"
                                            src="{{ asset('modules/social-app/images/social-profile/11.png') }}"
                                            alt="grid-2" loading="lazy" />
                                    </a>
                                </div>
                                <a class="d-flex justify-content-center" data-fslightbox="social"
                                    href="{{ asset('modules/social-app/images/social-profile/12.png') }}">
                                    <img class="img-fluid h-100 object-cover rounded"
                                        src="{{ asset('modules/social-app/images/social-profile/12.png') }}"
                                        alt="grid-3" loading="lazy" />
                                </a>
                                <a class="d-flex justify-content-center" data-fslightbox="social"
                                    href="{{ asset('modules/social-app/images/social-profile/13.png') }}">
                                    <img class="img-fluid h-100 object-cover rounded"
                                        src="{{ asset('modules/social-app/images/social-profile/13.png') }}"
                                        alt="grid-4" loading="lazy" />
                                </a>
                            </div>
                            <div class="comment-area pt-3">
                                <x-modules.social.widgets.like-share id="02" noLikes="53" noComments="41"
                                    noShare="52" />
                                <hr>
                                <ul class="list-inline mt-4">
                                    <li class="mb-0">
                                        <x-modules.social.widgets.friend-comment id="02"
                                            userName="Larry Robbins" userComment="So True!!"
                                            commentDuration="2 Min Ago" userImage="avatar/11.png" />
                                    </li>
                                </ul>
                                <x-modules.social.widgets.comment-form-control
                                    placeholder="Enter Your Comment Here..." />

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center gap-3">
                                <span class="badge bg-info py-2">
                                    <svg class="icon-24" width="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M13.1043 4.17701L14.9317 7.82776C15.1108 8.18616 15.4565 8.43467 15.8573 8.49218L19.9453 9.08062C20.9554 9.22644 21.3573 10.4505 20.6263 11.1519L17.6702 13.9924C17.3797 14.2718 17.2474 14.6733 17.3162 15.0676L18.0138 19.0778C18.1856 20.0698 17.1298 20.8267 16.227 20.3574L12.5732 18.4627C12.215 18.2768 11.786 18.2768 11.4268 18.4627L7.773 20.3574C6.87023 20.8267 5.81439 20.0698 5.98724 19.0778L6.68385 15.0676C6.75257 14.6733 6.62033 14.2718 6.32982 13.9924L3.37368 11.1519C2.64272 10.4505 3.04464 9.22644 4.05466 9.08062L8.14265 8.49218C8.54354 8.43467 8.89028 8.18616 9.06937 7.82776L10.8957 4.17701C11.3477 3.27433 12.6523 3.27433 13.1043 4.17701Z"
                                            stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round"></path>
                                    </svg>
                                </span>
                                <h5 class="mb-0">{{ __('social.new_item') }}</h5>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header d-flex align-items-center justify-content-between">
                            <div class="header-title">
                                <h4 class="card-title">{{ __('social.photos') }}</h4>
                            </div>
                            <div class="card-header-toolbar d-flex align-items-center">
                                <p class="m-0"><a href="javascript:void(0)">Add New </a></p>
                            </div>
                        </div>
                        <div class="card-body">
                            <ul class="profile-img-gallary p-0 m-0 list-unstyled d-grid gap-card grid-cols-3">
                                <li class=""><a data-fslightbox="gallery"
                                        href="{{ asset('modules/social-app/images/avatar/10.png') }}"><img
                                            src="{{ asset('modules/social-app/images/avatar/10.png') }}"
                                            alt="gallary-image" class="img-fluid rounded" loading="lazy"></a></li>
                                <li class=""><a data-fslightbox="gallery"
                                        href="{{ asset('modules/social-app/images/avatar/11.png') }}"><img
                                            src="{{ asset('modules/social-app/images/avatar/11.png') }}"
                                            alt="gallary-image" class="img-fluid rounded" loading="lazy"></a></li>
                                <li class=""><a data-fslightbox="gallery"
                                        href="{{ asset('modules/social-app/images/avatar/12.png') }}"><img
                                            src="{{ asset('modules/social-app/images/avatar/12.png') }}"
                                            alt="gallary-image" class="img-fluid rounded" loading="lazy"></a></li>
                                <li class=""><a data-fslightbox="gallery"
                                        href="{{ asset('modules/social-app/images/avatar/13.png') }}"><img
                                            src="{{ asset('modules/social-app/images/avatar/13.png') }}"
                                            alt="gallary-image" class="img-fluid rounded" loading="lazy"></a></li>
                                <li class=""><a data-fslightbox="gallery"
                                        href="{{ asset('modules/social-app/images/avatar/14.png') }}"><img
                                            src="{{ asset('modules/social-app/images/avatar/14.png') }}"
                                            alt="gallary-image" class="img-fluid rounded" loading="lazy"></a></li>
                                <li class=""><a data-fslightbox="gallery"
                                        href="{{ asset('modules/social-app/images/avatar/15.png') }}"><img
                                            src="{{ asset('modules/social-app/images/avatar/15.png') }}"
                                            alt="gallary-image" class="img-fluid rounded" loading="lazy"></a></li>
                                <li class=""><a data-fslightbox="gallery"
                                        href="{{ asset('modules/social-app/images/avatar/16.png') }}"><img
                                            src="{{ asset('modules/social-app/images/avatar/16.png') }}"
                                            alt="gallary-image" class="img-fluid rounded" loading="lazy"></a></li>
                                <li class=""><a data-fslightbox="gallery"
                                        href="{{ asset('modules/social-app/images/avatar/17.png') }}"><img
                                            src="{{ asset('modules/social-app/images/avatar/17.png') }}"
                                            alt="gallary-image" class="img-fluid rounded" loading="lazy"></a></li>
                                <li class=""><a data-fslightbox="gallery"
                                        href="{{ asset('modules/social-app/images/avatar/18.png') }}"><img
                                            src="{{ asset('modules/social-app/images/avatar/18.png') }}"
                                            alt="gallary-image" class="img-fluid rounded" loading="lazy"></a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header d-flex align-items-center justify-content-between">
                            <div class="header-title">
                                <h4 class="card-title">{{ __('social.friends') }}</h4>
                            </div>
                            <div class="card-header-toolbar d-flex align-items-center">
                                <p class="m-0"><a href="javascript:void(0)">Add New </a></p>
                            </div>
                        </div>
                        <div class="card-body">
                            <ul class="profile-img-gallary p-0 m-0 list-unstyled d-grid gap-card grid-cols-3">
                                <li class="">
                                    <a data-fslightbox="gallery"
                                        href="{{ asset('modules/social-app/images/avatar/01.png') }}">
                                        <img src="{{ asset('modules/social-app/images/avatar/01.png') }}"
                                            alt="gallary-image" class="img-fluid rounded" loading="lazy" />
                                    </a>
                                    <h6 class="mt-2 text-center">Anna Rexia</h6>
                                </li>
                                <li class="">
                                    <a data-fslightbox="gallery"
                                        href="{{ asset('modules/social-app/images/avatar/02.png') }}">
                                        <img src="{{ asset('modules/social-app/images/avatar/02.png') }}"
                                            alt="gallary-image" class="img-fluid rounded" loading="lazy" />
                                    </a>
                                    <h6 class="mt-2 text-center">Tara Zona</h6>
                                </li>
                                <li class="">
                                    <a data-fslightbox="gallery"
                                        href="{{ asset('modules/social-app/images/avatar/03.png') }}">
                                        <img src="{{ asset('modules/social-app/images/avatar/03.png') }}"
                                            alt="gallary-image" class="img-fluid rounded" loading="lazy" />
                                    </a>
                                    <h6 class="mt-2 text-center">Polly Tech</h6>
                                </li>
                                <li class="">
                                    <a data-fslightbox="gallery"
                                        href="{{ asset('modules/social-app/images/avatar/04.png') }}">
                                        <img src="{{ asset('modules/social-app/images/avatar/04.png') }}"
                                            alt="gallary-image" class="img-fluid rounded" loading="lazy" />
                                    </a>
                                    <h6 class="mt-2 text-center">Bill Emia</h6>
                                </li>
                                <li class="">
                                    <a data-fslightbox="gallery"
                                        href="{{ asset('modules/social-app/images/avatar/05.png') }}">
                                        <img src="{{ asset('modules/social-app/images/avatar/05.png') }}"
                                            alt="gallary-image" class="img-fluid rounded" loading="lazy" />
                                    </a>
                                    <h6 class="mt-2 text-center">Moe Fugga</h6>
                                </li>
                                <li class="">
                                    <a data-fslightbox="gallery"
                                        href="{{ asset('modules/social-app/images/avatar/06.png') }}">
                                        <img src="{{ asset('modules/social-app/images/avatar/06.png') }}"
                                            alt="gallary-image" class="img-fluid rounded" loading="lazy" />
                                    </a>
                                    <h6 class="mt-2 text-center">Hal Appeno </h6>
                                </li>
                                <li class="">
                                    <a data-fslightbox="gallery"
                                        href="{{ asset('modules/social-app/images/avatar/07.png') }}">
                                        <img src="{{ asset('modules/social-app/images/avatar/07.png') }}"
                                            alt="gallary-image" class="img-fluid rounded" loading="lazy" />
                                    </a>
                                    <h6 class="mt-2 text-center">Zack Lee</h6>
                                </li>
                                <li class="">
                                    <a data-fslightbox="gallery"
                                        href="{{ asset('modules/social-app/images/avatar/08.png') }}">
                                        <img src="{{ asset('modules/social-app/images/avatar/08.png') }}"
                                            alt="gallary-image" class="img-fluid rounded" loading="lazy" />
                                    </a>
                                    <h6 class="mt-2 text-center">Terry Aki</h6>
                                </li>
                                <li class="">
                                    <a data-fslightbox="gallery"
                                        href="{{ asset('modules/social-app/images/avatar/09.png') }}">
                                        <img src="{{ asset('modules/social-app/images/avatar/09.png') }}"
                                            alt="gallary-image" class="img-fluid rounded" loading="lazy" />
                                    </a>
                                    <h6 class="mt-2 text-center">Greta Life</h6>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header d-flex align-items-center justify-content-between">
                            <div class="header-title">
                                <h4 class="card-title">{{ __('social.live_events') }}</h4>
                            </div>
                            <a class="text-body" href="javascript:void(0)">{{ __('social.view') }}</a>
                        </div>
                        <div class="card-body">
                            <img src="{{ asset('modules/social-app/images/social-profile/14.png') }}" alt="userimg"
                                class="img-fluid w-100">
                            <div class="d-flex justify-content-between align-items-center my-3">
                                <h6 class="mb-0">{{ __('social.music') }}</h6>
                                <div class="btn btn-sm text-dark ">
                                    Sep 23
                                </div>
                            </div>
                            <div class="d-flex align-items-center justify-content-between mb-3">
                                <span class="d-flex align-items-center gap-2">
                                    <svg class="icon-20" width="18" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M14.5 10.5005C14.5 9.11924 13.3808 8 12.0005 8C10.6192 8 9.5 9.11924 9.5 10.5005C9.5 11.8808 10.6192 13 12.0005 13C13.3808 13 14.5 11.8808 14.5 10.5005Z"
                                            stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round"></path>
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M11.9995 21C10.801 21 4.5 15.8984 4.5 10.5633C4.5 6.38664 7.8571 3 11.9995 3C16.1419 3 19.5 6.38664 19.5 10.5633C19.5 15.8984 13.198 21 11.9995 21Z"
                                            stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round"></path>
                                    </svg>
                                    <span class="d-none d-sm-block">1901 Thornridge</span>
                                </span>
                                <p class="mb-0">5 KM</p>
                            </div>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="iq-media-group iq-media-group-1">
                                    <a href="javascript:void(0)" class="iq-media-1">
                                        <div class="icon">
                                            <img class="img-fluid rounded-circle avatar-40"
                                                src="{{ asset('modules/social-app/images/avatar/25.png') }}"
                                                alt="">
                                        </div>
                                    </a>
                                    <a href="javascript:void(0)" class="iq-media-1">
                                        <div class="icon">
                                            <img class="img-fluid rounded-circle avatar-40"
                                                src="{{ asset('modules/social-app/images/avatar/27.png') }}"
                                                alt="">
                                        </div>
                                    </a>
                                    <a href="javascript:void(0)" class="iq-media-1">
                                        <div class="icon rounded-circle bg-primary text-white avatar-40">+ 25</div>
                                    </a>
                                </div>
                                <h6 class="mb-0">25 joined</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="about" role="tabpanel">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="nav flex-column nav-pills nav-iconly gap-3">
                                        <a class="nav-link active" href="#v-pills-basicinfo-tab"
                                            data-bs-toggle="pill" data-bs-target="#v-pills-basicinfo-tab"
                                            role="button">Contact and Basic Info</a>
                                        <a class="nav-link" href="#v-pills-family-tab" data-bs-toggle="pill"
                                            data-bs-target="#v-pills-family" role="button">Family and
                                            Relationship</a>
                                        <a class="nav-link" href="#v-pills-work-tab" data-bs-toggle="pill"
                                            data-bs-target="#v-pills-work-tab" role="button">Work and Education</a>
                                        <a class="nav-link" href="#v-pills-lived-tab" data-bs-toggle="pill"
                                            data-bs-target="#v-pills-lived-tab" role="button">Places You've Lived</a>
                                        <a class="nav-link" href="#v-pills-details-tab" data-bs-toggle="pill"
                                            data-bs-target="#v-pills-details-tab" role="button">Details About You</a>
                                    </div>
                                </div>
                                <div class="col-md-10">
                                    <div class="tab-content iq-tab-fade-up">
                                        <div class="tab-pane fade active show" id="v-pills-basicinfo-tab"
                                            role="tabpanel" aria-labelledby="v-pills-basicinfo-tab">
                                            <div class="mb-3">
                                                <div class="border-bottom pb-3 mb-3">
                                                    <h3 class="mb-0">Contact Information</h3>
                                                </div>
                                                <div class="row">
                                                    <div class="col-3">
                                                        <h6>Email</h6>
                                                    </div>
                                                    <div class="col-9">
                                                        <p class="mb-0">Bnijohn@gmail.com</p>
                                                    </div>
                                                    <div class="col-3">
                                                        <h6>Mobile</h6>
                                                    </div>
                                                    <div class="col-9">
                                                        <p class="mb-0">(001) 4544 565 456</p>
                                                    </div>
                                                    <div class="col-3">
                                                        <h6>Address</h6>
                                                    </div>
                                                    <div class="col-9">
                                                        <p class="mb-0">United States of America</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <div class="border-bottom pb-3 mb-3">
                                                    <h4 class="mb-0">Websites and Social Links</h4>
                                                </div>
                                                <div class="row">
                                                    <div class="col-3">
                                                        <h6>Website</h6>
                                                    </div>
                                                    <div class="col-9">
                                                        <p class="mb-0">www.bootstrap.com</p>
                                                    </div>
                                                    <div class="col-3">
                                                        <h6>Social Link</h6>
                                                    </div>
                                                    <div class="col-9">
                                                        <p class="mb-0">www.bootstrap.com</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mb-0">
                                                <div class="border-bottom pb-3 mb-3">
                                                    <h4 class="mb-0">Basic Information</h4>
                                                </div>
                                                <div class="row">
                                                    <div class="col-3">
                                                        <h6>Birth Date</h6>
                                                    </div>
                                                    <div class="col-9">
                                                        <p class="mb-0">24 January</p>
                                                    </div>
                                                    <div class="col-3">
                                                        <h6>Birth Year</h6>
                                                    </div>
                                                    <div class="col-9">
                                                        <p class="mb-0">1994</p>
                                                    </div>
                                                    <div class="col-3">
                                                        <h6>Gender</h6>
                                                    </div>
                                                    <div class="col-9">
                                                        <p class="mb-0">Female</p>
                                                    </div>
                                                    <div class="col-3">
                                                        <h6>interested in</h6>
                                                    </div>
                                                    <div class="col-9">
                                                        <p class="mb-0">Designing</p>
                                                    </div>
                                                    <div class="col-3">
                                                        <h6>language</h6>
                                                    </div>
                                                    <div class="col-9">
                                                        <p class="mb-0">English, French</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="v-pills-family" role="tabpanel">
                                            <div class="border-bottom mb-3 pb-3">
                                                <h3 class="mb-0">Relationship</h3>
                                            </div>
                                            <div class="d-flex align-items-center gap-2 mb-4">
                                                <a href="javascript:void(0)" class="d-flex">
                                                    <svg class="icon-20" width="20" viewBox="0 0 24 24"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M12.0001 8.32739V15.6537" stroke="currentColor"
                                                            stroke-width="1.5" stroke-linecap="round"
                                                            stroke-linejoin="round"></path>
                                                        <path d="M15.6668 11.9904H8.3335" stroke="currentColor"
                                                            stroke-width="1.5" stroke-linecap="round"
                                                            stroke-linejoin="round"></path>
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M16.6857 2H7.31429C4.04762 2 2 4.31208 2 7.58516V16.4148C2 19.6879 4.0381 22 7.31429 22H16.6857C19.9619 22 22 19.6879 22 16.4148V7.58516C22 4.31208 19.9619 2 16.6857 2Z"
                                                            stroke="currentColor" stroke-width="1.5"
                                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </svg>
                                                </a>
                                                <h6 class="mb-0 text-primary">Add Your Relationship Status</h6>
                                            </div>
                                            <div class="border-bottom mb-3 pb-3">
                                                <h4 class="mb-0">Family Members</h4>
                                            </div>
                                            <ul class="suggestions-lists m-0 p-0">
                                                <li class="d-flex align-items-center gap-2 mb-4">
                                                    <a href="javascript:void(0)" class="d-flex">
                                                        <svg class="icon-20" width="20" viewBox="0 0 24 24"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M12.0001 8.32739V15.6537" stroke="currentColor"
                                                                stroke-width="1.5" stroke-linecap="round"
                                                                stroke-linejoin="round"></path>
                                                            <path d="M15.6668 11.9904H8.3335" stroke="currentColor"
                                                                stroke-width="1.5" stroke-linecap="round"
                                                                stroke-linejoin="round"></path>
                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                d="M16.6857 2H7.31429C4.04762 2 2 4.31208 2 7.58516V16.4148C2 19.6879 4.0381 22 7.31429 22H16.6857C19.9619 22 22 19.6879 22 16.4148V7.58516C22 4.31208 19.9619 2 16.6857 2Z"
                                                                stroke="currentColor" stroke-width="1.5"
                                                                stroke-linecap="round" stroke-linejoin="round"></path>
                                                        </svg>
                                                    </a>
                                                    <h6 class="mb-0 text-primary">Add Family Members</h6>
                                                </li>
                                                <li
                                                    class="d-flex align-items-center justify-content-between gap-3 mb-4">
                                                    <img src="{{ asset('modules/social-app/images/avatar/01.png') }}"
                                                        alt="story-img" class="rounded-circle avatar-48"
                                                        loading="lazy" />
                                                    <div class="d-flex justify-content-between w-100">
                                                        <div>
                                                            <h6>Paul Molive</h6>
                                                            <p class="mb-0">Brother</p>
                                                        </div>
                                                        <a class="d-flex align-items-start gap-2 mb-4"
                                                            href="javascript:void(0);">
                                                            <svg class="icon-22" width="22" viewBox="0 0 24 24"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
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
                                                            Edit
                                                        </a>
                                                    </div>
                                                </li>
                                                <li
                                                    class="d-flex align-items-center justify-content-between gap-3 mb-4">
                                                    <img src="{{ asset('modules/social-app/images/avatar/02.png') }}"
                                                        alt="story-img" class="rounded-circle avatar-48"
                                                        loading="lazy" />
                                                    <div class="d-flex justify-content-between w-100">
                                                        <div>
                                                            <h6>Anna Mull</h6>
                                                            <p class="mb-0">Sister</p>
                                                        </div>
                                                        <a class="d-flex align-items-start gap-2"
                                                            href="javascript:void(0);">
                                                            <svg class="icon-22" width="22" viewBox="0 0 24 24"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
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
                                                            Edit
                                                        </a>
                                                    </div>
                                                </li>
                                                <li class="d-flex align-items-center justify-content-between gap-3">
                                                    <img src="{{ asset('modules/social-app/images/avatar/03.png') }}"
                                                        alt="story-img" class="rounded-circle avatar-48"
                                                        loading="lazy" />
                                                    <div class="d-flex justify-content-between w-100">
                                                        <div>
                                                            <h6>Paige Turner</h6>
                                                            <p class="mb-0">Cousin</p>
                                                        </div>
                                                        <a class="d-flex align-items-start gap-2"
                                                            href="javascript:void(0);">
                                                            <svg class="icon-22" width="22" viewBox="0 0 24 24"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
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
                                                            Edit
                                                        </a>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="tab-pane fade" id="v-pills-work-tab" role="tabpanel"
                                            aria-labelledby="v-pills-work-tab">
                                            <div class="border-bottom mb-3 pb-3">
                                                <h3 class="mb-0">Work</h3>
                                            </div>
                                            <ul class="suggestions-lists m-0 p-0">
                                                <li class="d-flex align-items-center gap-2 mb-4">
                                                    <a href="javascript:void(0)" class="d-flex">
                                                        <svg class="icon-20" width="20" viewBox="0 0 24 24"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M12.0001 8.32739V15.6537" stroke="currentColor"
                                                                stroke-width="1.5" stroke-linecap="round"
                                                                stroke-linejoin="round"></path>
                                                            <path d="M15.6668 11.9904H8.3335" stroke="currentColor"
                                                                stroke-width="1.5" stroke-linecap="round"
                                                                stroke-linejoin="round"></path>
                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                d="M16.6857 2H7.31429C4.04762 2 2 4.31208 2 7.58516V16.4148C2 19.6879 4.0381 22 7.31429 22H16.6857C19.9619 22 22 19.6879 22 16.4148V7.58516C22 4.31208 19.9619 2 16.6857 2Z"
                                                                stroke="currentColor" stroke-width="1.5"
                                                                stroke-linecap="round" stroke-linejoin="round"></path>
                                                        </svg>
                                                    </a>
                                                    <h6 class="mb-0 text-primary">Add Work Place</h6>
                                                </li>
                                                <li
                                                    class="d-flex align-items-center justify-content-between gap-3 mb-4">
                                                    <img src="{{ asset('modules/social-app/images/avatar/04.png') }}"
                                                        alt="story-img" class="rounded-circle avatar-48"
                                                        loading="lazy" />
                                                    <div class="d-flex justify-content-between w-100">
                                                        <div>
                                                            <h6>Themeforest</h6>
                                                            <p class="mb-0">Web Designer</p>
                                                        </div>
                                                        <a class="d-flex align-items-start gap-2 mb-4"
                                                            href="javascript:void(0);">
                                                            <svg class="icon-22" width="22" viewBox="0 0 24 24"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
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
                                                            Edit
                                                        </a>
                                                    </div>
                                                </li>
                                                <li
                                                    class="d-flex align-items-center justify-content-between gap-3 mb-4">
                                                    <img src="{{ asset('modules/social-app/images/avatar/05.png') }}"
                                                        alt="story-img" class="rounded-circle avatar-48"
                                                        loading="lazy" />
                                                    <div class="d-flex justify-content-between w-100">
                                                        <div>
                                                            <h6>iqonicdesign</h6>
                                                            <p class="mb-0">Software Developer</p>
                                                        </div>
                                                        <a class="d-flex align-items-start gap-2"
                                                            href="javascript:void(0);">
                                                            <svg class="icon-22" width="22" viewBox="0 0 24 24"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
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
                                                            Edit
                                                        </a>
                                                    </div>
                                                </li>
                                                <li
                                                    class="d-flex align-items-center justify-content-between gap-3 mb-4">
                                                    <img src="{{ asset('modules/social-app/images/avatar/06.png') }}"
                                                        alt="story-img" class="rounded-circle avatar-48"
                                                        loading="lazy" />
                                                    <div class="d-flex justify-content-between w-100">
                                                        <div>
                                                            <h6>W3school</h6>
                                                            <p class="mb-0">Designer</p>
                                                        </div>
                                                        <a class="d-flex align-items-start gap-2"
                                                            href="javascript:void(0);">
                                                            <svg class="icon-22" width="22" viewBox="0 0 24 24"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
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
                                                            Edit
                                                        </a>
                                                    </div>
                                                </li>
                                            </ul>
                                            <div class="border-bottom mb-3 pb-3">
                                                <h4 class="mb-0">Professional Skills</h4>
                                            </div>
                                            <div class="d-flex align-items-center gap-2 mb-4">
                                                <a href="javascript:void(0)" class="d-flex">
                                                    <svg class="icon-20" width="20" viewBox="0 0 24 24"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M12.0001 8.32739V15.6537" stroke="currentColor"
                                                            stroke-width="1.5" stroke-linecap="round"
                                                            stroke-linejoin="round"></path>
                                                        <path d="M15.6668 11.9904H8.3335" stroke="currentColor"
                                                            stroke-width="1.5" stroke-linecap="round"
                                                            stroke-linejoin="round"></path>
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M16.6857 2H7.31429C4.04762 2 2 4.31208 2 7.58516V16.4148C2 19.6879 4.0381 22 7.31429 22H16.6857C19.9619 22 22 19.6879 22 16.4148V7.58516C22 4.31208 19.9619 2 16.6857 2Z"
                                                            stroke="currentColor" stroke-width="1.5"
                                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </svg>
                                                </a>
                                                <h6 class="mb-0 text-primary">Add Professional Skills</h6>
                                            </div>

                                            <div class="border-bottom mb-3 pb-3">
                                                <h4 class="mb-0">College</h4>
                                            </div>
                                            <ul class="suggestions-lists m-0 p-0">
                                                <li class="d-flex align-items-center gap-2 mb-4">
                                                    <a href="javascript:void(0)" class="d-flex">
                                                        <svg class="icon-20" width="20" viewBox="0 0 24 24"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M12.0001 8.32739V15.6537" stroke="currentColor"
                                                                stroke-width="1.5" stroke-linecap="round"
                                                                stroke-linejoin="round"></path>
                                                            <path d="M15.6668 11.9904H8.3335" stroke="currentColor"
                                                                stroke-width="1.5" stroke-linecap="round"
                                                                stroke-linejoin="round"></path>
                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                d="M16.6857 2H7.31429C4.04762 2 2 4.31208 2 7.58516V16.4148C2 19.6879 4.0381 22 7.31429 22H16.6857C19.9619 22 22 19.6879 22 16.4148V7.58516C22 4.31208 19.9619 2 16.6857 2Z"
                                                                stroke="currentColor" stroke-width="1.5"
                                                                stroke-linecap="round" stroke-linejoin="round"></path>
                                                        </svg>
                                                    </a>
                                                    <h6 class="mb-0 text-primary">Add College</h6>
                                                </li>
                                                <li class="d-flex align-items-center justify-content-between gap-3">
                                                    <img src="{{ asset('modules/social-app/images/avatar/07.png') }}"
                                                        alt="story-img" class="rounded-circle avatar-48"
                                                        loading="lazy" />
                                                    <div class="d-flex justify-content-between w-100">
                                                        <div>
                                                            <h6>London School of Brick and Balls</h6>
                                                            <p class="mb-0">Greenwich, United Kingdom</p>
                                                        </div>
                                                        <a class="d-flex align-items-start gap-2"
                                                            href="javascript:void(0);">
                                                            <svg class="icon-22" width="22" viewBox="0 0 24 24"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
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
                                                            Edit
                                                        </a>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="tab-pane fade" id="v-pills-lived-tab" role="tabpanel"
                                            aria-labelledby="v-pills-lived-tab">
                                            <div class="border-bottom mb-3 pb-3">
                                                <h3 class="mb-0">Current City and Hometown</h3>
                                            </div>
                                            <ul class="suggestions-lists m-0 p-0">
                                                <li
                                                    class="d-flex align-items-center justify-content-between gap-3 mb-4">
                                                    <img src="{{ asset('modules/social-app/images/avatar/01.png') }}"
                                                        alt="story-img" class="rounded-circle avatar-48"
                                                        loading="lazy" />
                                                    <div class="d-flex justify-content-between w-100">
                                                        <div>
                                                            <h6>Birmingham</h6>
                                                            <p class="mb-0">Liverpool</p>
                                                        </div>
                                                        <a class="d-flex align-items-start gap-2 mb-4"
                                                            href="javascript:void(0);">
                                                            <svg class="icon-22" width="22" viewBox="0 0 24 24"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
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
                                                            Edit
                                                        </a>
                                                    </div>
                                                </li>
                                                <li
                                                    class="d-flex align-items-center justify-content-between gap-3 mb-4">
                                                    <img src="{{ asset('modules/social-app/images/avatar/02.png') }}"
                                                        alt="story-img" class="rounded-circle avatar-48"
                                                        loading="lazy" />
                                                    <div class="d-flex justify-content-between w-100">
                                                        <div>
                                                            <h6>Manchester</h6>
                                                            <p class="mb-0">Newcastle</p>
                                                        </div>
                                                        <a class="d-flex align-items-start gap-2"
                                                            href="javascript:void(0);">
                                                            <svg class="icon-22" width="22" viewBox="0 0 24 24"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
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
                                                            Edit
                                                        </a>
                                                    </div>
                                                </li>
                                            </ul>
                                            <div class="border-bottom mb-3 pb-3">
                                                <h4 class="mb-0">Other Places Lived</h4>
                                            </div>
                                            <div class="d-flex align-items-center gap-2 mb-4">
                                                <a href="javascript:void(0)" class="d-flex">
                                                    <svg class="icon-20" width="20" viewBox="0 0 24 24"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M12.0001 8.32739V15.6537" stroke="currentColor"
                                                            stroke-width="1.5" stroke-linecap="round"
                                                            stroke-linejoin="round"></path>
                                                        <path d="M15.6668 11.9904H8.3335" stroke="currentColor"
                                                            stroke-width="1.5" stroke-linecap="round"
                                                            stroke-linejoin="round"></path>
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M16.6857 2H7.31429C4.04762 2 2 4.31208 2 7.58516V16.4148C2 19.6879 4.0381 22 7.31429 22H16.6857C19.9619 22 22 19.6879 22 16.4148V7.58516C22 4.31208 19.9619 2 16.6857 2Z"
                                                            stroke="currentColor" stroke-width="1.5"
                                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </svg>
                                                </a>
                                                <h6 class="mb-0 text-primary">Add Place</h6>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="v-pills-details-tab" role="tabpanel"
                                            aria-labelledby="v-pills-details-tab">
                                            <div class="border-bottom mb-3 pb-3">
                                                <h3 class="mb-0">About You</h3>
                                            </div>
                                            <p class="mb-3">Hi, I’m Bni, I’m 26 and I work as a Web Designer for the
                                                iqonicdesign.</p>
                                            <div class="border-bottom mb-3 pb-3">
                                                <h4 class="mb-0">Other Name</h4>
                                            </div>
                                            <p class="mb-3">Bini Rock</p>
                                            <div class="border-bottom mb-3 pb-3">
                                                <h4 class="mb-0">Favorite Quotes</h4>
                                            </div>
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                industry. Lorem Ipsum has been the industry's standard dummy text ever
                                                since the 1500s</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="friends" role="tabpanel">
            <div class="card">
                <div class="card-body">
                    <h4>Friends</h4>
                    <div class="friend-list-tab mt-2">
                        <ul class="nav nav-pills">
                            <li class="nav-item">
                                <a class="nav-link active" data-bs-toggle="pill" href="#pill-all-friends"
                                    data-bs-target="#all-friends">All Friends</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="pill" href="#pill-recently-add"
                                    data-bs-target="#recently-add">Recently Added</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="pill" href="#pill-closefriends"
                                    data-bs-target="#closefriends"> Close friends</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="pill" href="#pill-home"
                                    data-bs-target="#home-town"> Home/Town</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="pill" href="#pill-following"
                                    data-bs-target="#following">Following</a>
                            </li>
                        </ul>
                        <div class="tab-content iq-tab-fade-up">
                            <div class="tab-pane fade active show" id="all-friends" role="tabpanel">
                                <div class="card-body p-0">
                                    <div class="row">
                                        <div class="col-md-6 col-lg-6 my-3">
                                            <x-modules.social.widgets.social-profile-friends img="01.png"
                                                socialFriendprofileTitle="Petey Cruiser"
                                                socialFriendprofileDec="15  friends" />
                                        </div>
                                        <div class="col-md-6 col-lg-6 my-3">
                                            <x-modules.social.widgets.social-profile-friends img="02.png"
                                                socialFriendprofileTitle="Anna Sthesia"
                                                socialFriendprofileDec="50  friends" />
                                        </div>
                                        <div class="col-md-6 col-lg-6 mb-3">
                                            <x-modules.social.widgets.social-profile-friends img="03.png"
                                                socialFriendprofileTitle="Paul Molive"
                                                socialFriendprofileDec="10  friends" />
                                        </div>
                                        <div class="col-md-6 col-lg-6 mb-3">
                                            <x-modules.social.widgets.social-profile-friends img="04.png"
                                                socialFriendprofileTitle="Gail Forcewind"
                                                socialFriendprofileDec="20  friends" />
                                        </div>
                                        <div class="col-md-6 col-lg-6 mb-3">
                                            <x-modules.social.widgets.social-profile-friends img="05.png"
                                                socialFriendprofileTitle="Paige Turner"
                                                socialFriendprofileDec="12  friends" />
                                        </div>
                                        <div class="col-md-6 col-lg-6 mb-3">
                                            <x-modules.social.widgets.social-profile-friends img="06.png"
                                                socialFriendprofileTitle="b Frapples"
                                                socialFriendprofileDec="06  friends" />
                                        </div>
                                        <div class="col-md-6 col-lg-6 mb-3">
                                            <x-modules.social.widgets.social-profile-friends img="07.png"
                                                socialFriendprofileTitle="Walter Melon"
                                                socialFriendprofileDec="30  friends" />
                                        </div>
                                        <div class="col-md-6 col-lg-6 mb-3">
                                            <x-modules.social.widgets.social-profile-friends img="08.png"
                                                socialFriendprofileTitle="Barb Ackue"
                                                socialFriendprofileDec="14  friends" />
                                        </div>
                                        <div class="col-md-6 col-lg-6 mb-3">
                                            <x-modules.social.widgets.social-profile-friends img="09.png"
                                                socialFriendprofileTitle="Buck Kinnear"
                                                socialFriendprofileDec="16  friends" />
                                        </div>
                                        <div class="col-md-6 col-lg-6 mb-3">
                                            <x-modules.social.widgets.social-profile-friends img="10.png"
                                                socialFriendprofileTitle="Ira Membrit"
                                                socialFriendprofileDec="22  friends" />
                                        </div>
                                        <div class="col-md-6 col-lg-6 mb-3">
                                            <x-modules.social.widgets.social-profile-friends img="11.png"
                                                socialFriendprofileTitle="Shonda Leer"
                                                socialFriendprofileDec="10  friends" />
                                        </div>
                                        <div class="col-md-6 col-lg-6 mb-3">
                                            <x-modules.social.widgets.social-profile-friends img="12.png"
                                                socialFriendprofileTitle="ock Lee"
                                                socialFriendprofileDec="18  friends" />
                                        </div>
                                        <div class="col-md-6 col-lg-6 mb-3">
                                            <x-modules.social.widgets.social-profile-friends img="13.png"
                                                socialFriendprofileTitle="Maya Didas"
                                                socialFriendprofileDec="40  friends" />
                                        </div>
                                        <div class="col-md-6 col-lg-6 mb-3">
                                            <x-modules.social.widgets.social-profile-friends img="14.png"
                                                socialFriendprofileTitle="Rick O'Shea"
                                                socialFriendprofileDec="50  friends" />
                                        </div>
                                        <div class="col-md-6 col-lg-6 mb-3">
                                            <x-modules.social.widgets.social-profile-friends img="15.png"
                                                socialFriendprofileTitle="Pete Sariya"
                                                socialFriendprofileDec="5  friends" />
                                        </div>
                                        <div class="col-md-6 col-lg-6 mb-3">
                                            <x-modules.social.widgets.social-profile-friends img="16.png"
                                                socialFriendprofileTitle="Monty Carlo"
                                                socialFriendprofileDec="2  friends" />
                                        </div>
                                        <div class="col-md-6 col-lg-6 mb-3">
                                            <x-modules.social.widgets.social-profile-friends img="17.png"
                                                socialFriendprofileTitle="Sal Monella"
                                                socialFriendprofileDec="0  friends" />
                                        </div>
                                        <div class="col-md-6 col-lg-6 mb-3">
                                            <x-modules.social.widgets.social-profile-friends img="18.png"
                                                socialFriendprofileTitle="Sue Vaneer"
                                                socialFriendprofileDec="25  friends" />
                                        </div>
                                        <div class="col-md-6 col-lg-6 mb-3">
                                            <x-modules.social.widgets.social-profile-friends img="19.png"
                                                socialFriendprofileTitle="Cliff Hanger"
                                                socialFriendprofileDec="18  friends" />
                                        </div>
                                        <div class="col-md-6 col-lg-6 mb-3">
                                            <x-modules.social.widgets.social-profile-friends img="20.png"
                                                socialFriendprofileTitle="Barb Dwyer"
                                                socialFriendprofileDec="23  friends" />
                                        </div>
                                        <div class="col-md-6 col-lg-6 mb-3">
                                            <x-modules.social.widgets.social-profile-friends img="21.png"
                                                socialFriendprofileTitle="Terry Aki"
                                                socialFriendprofileDec="8  friends" />
                                        </div>
                                        <div class="col-md-6 col-lg-6 mb-3">
                                            <x-modules.social.widgets.social-profile-friends img="22.png"
                                                socialFriendprofileTitle="Cory Ander"
                                                socialFriendprofileDec="7  friends" />
                                        </div>
                                        <div class="col-md-6 col-lg-6 mb-3">
                                            <x-modules.social.widgets.social-profile-friends img="23.png"
                                                socialFriendprofileTitle="Robin Banks"
                                                socialFriendprofileDec="14  friends" />
                                        </div>
                                        <div class="col-md-6 col-lg-6 mb-3">
                                            <x-modules.social.widgets.social-profile-friends img="24.png"
                                                socialFriendprofileTitle="Jimmy Changa"
                                                socialFriendprofileDec="10  friends" />
                                        </div>
                                        <div class="col-md-6 col-lg-6 mb-3">
                                            <x-modules.social.widgets.social-profile-friends img="25.png"
                                                socialFriendprofileTitle="Barry Wine"
                                                socialFriendprofileDec="18  friends" />
                                        </div>
                                        <div class="col-md-6 col-lg-6 mb-3">
                                            <x-modules.social.widgets.social-profile-friends img="26.png"
                                                socialFriendprofileTitle="Poppa Cherry"
                                                socialFriendprofileDec="16  friends" />
                                        </div>
                                        <div class="col-md-6 col-lg-6 mb-3">
                                            <x-modules.social.widgets.social-profile-friends img="27.png"
                                                socialFriendprofileTitle="Zack Lee"
                                                socialFriendprofileDec="33  friends" />
                                        </div>
                                        <div class="col-md-6 col-lg-6 mb-3">
                                            <x-modules.social.widgets.social-profile-friends img="28.png"
                                                socialFriendprofileTitle="Don Stairs"
                                                socialFriendprofileDec="15  friends" />
                                        </div>
                                        <div class="col-md-6 col-lg-6 mb-3">
                                            <x-modules.social.widgets.social-profile-friends img="13.png"
                                                socialFriendprofileTitle="Peter Pants"
                                                socialFriendprofileDec="12  friends" />
                                        </div>
                                        <div class="col-md-6 col-lg-6 mb-3">
                                            <x-modules.social.widgets.social-profile-friends img="23.png"
                                                socialFriendprofileTitle="Hal Appeno"
                                                socialFriendprofileDec="13  friends" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="recently-add" role="tabpanel">
                                <div class="card-body p-0">
                                    <div class="row">
                                        <div class="col-md-6 col-lg-6 my-3">
                                            <x-modules.social.widgets.social-profile-friends img="07.png"
                                                socialFriendprofileTitle="Otto Matic"
                                                socialFriendprofileDec="4  friends" />
                                        </div>
                                        <div class="col-md-6 col-lg-6 my-3">
                                            <x-modules.social.widgets.social-profile-friends img="08.png"
                                                socialFriendprofileTitle="Moe Fugga"
                                                socialFriendprofileDec="16  friends" />
                                        </div>
                                        <div class="col-md-6 col-lg-6 mb-3">
                                            <x-modules.social.widgets.social-profile-friends img="09.png"
                                                socialFriendprofileTitle="Tom Foolery"
                                                socialFriendprofileDec="14  friends" />
                                        </div>
                                        <div class="col-md-6 col-lg-6 mb-3">
                                            <x-modules.social.widgets.social-profile-friends img="10.png"
                                                socialFriendprofileTitle="Bud Wiser"
                                                socialFriendprofileDec="16  friends" />
                                        </div>
                                        <div class="col-md-6 col-lg-6 mb-3">
                                            <x-modules.social.widgets.social-profile-friends img="15.png"
                                                socialFriendprofileTitle="Polly Tech"
                                                socialFriendprofileDec="10  friends" />
                                        </div>
                                        <div class="col-md-6 col-lg-6 mb-3">
                                            <x-modules.social.widgets.social-profile-friends img="16.png"
                                                socialFriendprofileTitle="Holly Graham"
                                                socialFriendprofileDec="8  friends" />
                                        </div>
                                        <div class="col-md-6 col-lg-6 mb-3">
                                            <x-modules.social.widgets.social-profile-friends img="17.png"
                                                socialFriendprofileTitle="Tara Zona"
                                                socialFriendprofileDec="5  friends" />
                                        </div>
                                        <div class="col-md-6 col-lg-6 mb-3">
                                            <x-modules.social.widgets.social-profile-friends img="07.png"
                                                socialFriendprofileTitle="Barry Cade"
                                                socialFriendprofileDec="20  friends" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="closefriends" role="tabpanel">
                                <div class="card-body p-0">
                                    <div class="row">
                                        <div class="col-md-6 col-lg-6 my-3">
                                            <x-modules.social.widgets.social-profile-friends img="19.png"
                                                socialFriendprofileTitle="Bud Wiser"
                                                socialFriendprofileDec="32  friends" />
                                        </div>
                                        <div class="col-md-6 col-lg-6 my-3">
                                            <x-modules.social.widgets.social-profile-friends img="05.png"
                                                socialFriendprofileTitle="Otto Matic"
                                                socialFriendprofileDec="9  friends" />
                                        </div>
                                        <div class="col-md-6 col-lg-6 mb-3">
                                            <x-modules.social.widgets.social-profile-friends img="06.png"
                                                socialFriendprofileTitle="Peter Pants"
                                                socialFriendprofileDec="2  friends" />
                                        </div>
                                        <div class="col-md-6 col-lg-6 mb-3">
                                            <x-modules.social.widgets.social-profile-friends img="07.png"
                                                socialFriendprofileTitle="Zack Lee"
                                                socialFriendprofileDec="15  friends" />
                                        </div>
                                        <div class="col-md-6 col-lg-6 mb-3">
                                            <x-modules.social.widgets.social-profile-friends img="08.png"
                                                socialFriendprofileTitle="Barry Wine"
                                                socialFriendprofileDec="36  friends" />

                                        </div>
                                        <div class="col-md-6 col-lg-6 mb-3">
                                            <x-modules.social.widgets.social-profile-friends img="09.png"
                                                socialFriendprofileTitle="Robin Banks"
                                                socialFriendprofileDec="22  friends" />
                                        </div>
                                        <div class="col-md-6 col-lg-6 mb-3">
                                            <x-modules.social.widgets.social-profile-friends img="10.png"
                                                socialFriendprofileTitle="Cory Ander"
                                                socialFriendprofileDec="10  friends" />
                                        </div>
                                        <div class="col-md-6 col-lg-6 mb-3">
                                            <x-modules.social.widgets.social-profile-friends img="15.png"
                                                socialFriendprofileTitle="Moe Fugga"
                                                socialFriendprofileDec="12  friends" />
                                        </div>
                                        <div class="col-md-6 col-lg-6 mb-3">
                                            <x-modules.social.widgets.social-profile-friends img="16.png"
                                                socialFriendprofileTitle="Polly Tec"
                                                socialFriendprofileDec="30  friends" />
                                        </div>
                                        <div class="col-md-6 col-lg-6 mb-3">
                                            <x-modules.social.widgets.social-profile-friends img="17.png"
                                                socialFriendprofileTitle="Hal Appeno"
                                                socialFriendprofileDec="25  friends" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="home-town" role="tabpanel">
                                <div class="card-body p-0">
                                    <div class="row">
                                        <div class="col-md-6 col-lg-6 my-3">
                                            <x-modules.social.widgets.social-profile-friends img="18.png"
                                                socialFriendprofileTitle="Paul Molive"
                                                socialFriendprofileDec="14  friends" />
                                        </div>
                                        <div class="col-md-6 col-lg-6 my-3">
                                            <x-modules.social.widgets.social-profile-friends img="19.png"
                                                socialFriendprofileTitle="Paige Turner"
                                                socialFriendprofileDec="8  friends" />
                                        </div>
                                        <div class="col-md-6 col-lg-6 mb-3">
                                            <x-modules.social.widgets.social-profile-friends img="05.png"
                                                socialFriendprofileTitle="Barb Ackue"
                                                socialFriendprofileDec="23  friends" />
                                        </div>
                                        <div class="col-md-6 col-lg-6 mb-3">
                                            <x-modules.social.widgets.social-profile-friends img="06.png"
                                                socialFriendprofileTitle="Ira Membrit"
                                                socialFriendprofileDec="16  friends" />
                                        </div>
                                        <div class="col-md-6 col-lg-6 mb-3">
                                            <x-modules.social.widgets.social-profile-friends img="07.png"
                                                socialFriendprofileTitle="Maya Didas"
                                                socialFriendprofileDec="12  friends" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="following" role="tabpanel">
                                <div class="card-body p-0">
                                    <div class="row">
                                        <div class="col-md-6 col-lg-6 my-3">
                                            <x-modules.social.widgets.social-profile-friends img="05.png"
                                                socialFriendprofileTitle="Maya Didas"
                                                socialFriendprofileDec="20  friends" />
                                        </div>
                                        <div class="col-md-6 col-lg-6 my-3">
                                            <x-modules.social.widgets.social-profile-friends img="06.png"
                                                socialFriendprofileTitle="Monty Carlo"
                                                socialFriendprofileDec="3  friends" />
                                        </div>
                                        <div class="col-md-6 col-lg-6 mb-3">
                                            <x-modules.social.widgets.social-profile-friends img="07.png"
                                                socialFriendprofileTitle="Cliff Hanger"
                                                socialFriendprofileDec="20  friends" />
                                        </div>
                                        <div class="col-md-6 col-lg-6 mb-3">
                                            <x-modules.social.widgets.social-profile-friends img="08.png"
                                                socialFriendprofileTitle="b Ackue"
                                                socialFriendprofileDec="12  friends" />
                                        </div>
                                        <div class="col-md-6 col-lg-6 mb-3">
                                            <x-modules.social.widgets.social-profile-friends img="09.png"
                                                socialFriendprofileTitle="Bob Frapples"
                                                socialFriendprofileDec="12  friends" />
                                        </div>
                                        <div class="col-md-6 col-lg-6 mb-3">
                                            <x-modules.social.widgets.social-profile-friends img="10.png"
                                                socialFriendprofileTitle="Anna Mull"
                                                socialFriendprofileDec="6  friends" />
                                        </div>
                                        <div class="col-md-6 col-lg-6 mb-3">
                                            <x-modules.social.widgets.social-profile-friends img="15.png"
                                                socialFriendprofileTitle="ry Wine"
                                                socialFriendprofileDec="15  friends" />
                                        </div>
                                        <div class="col-md-6 col-lg-6 mb-3">
                                            <x-modules.social.widgets.social-profile-friends img="16.png"
                                                socialFriendprofileTitle="Don Stairs"
                                                socialFriendprofileDec="12  friends" />
                                        </div>
                                        <div class="col-md-6 col-lg-6 mb-3">
                                            <x-modules.social.widgets.social-profile-friends img="17.png"
                                                socialFriendprofileTitle="Peter Pants"
                                                socialFriendprofileDec="8  friends" />
                                        </div>
                                        <div class="col-md-6 col-lg-6 mb-3">
                                            <x-modules.social.widgets.social-profile-friends img="18.png"
                                                socialFriendprofileTitle="Polly Tech"
                                                socialFriendprofileDec="18  friends" />
                                        </div>
                                        <div class="col-md-6 col-lg-6 mb-3">
                                            <x-modules.social.widgets.social-profile-friends img="19.png"
                                                socialFriendprofileTitle="Tara Zona"
                                                socialFriendprofileDec="30  friends" />
                                        </div>
                                        <div class="col-md-6 col-lg-6 mb-3">
                                            <x-modules.social.widgets.social-profile-friends img="05.png"
                                                socialFriendprofileTitle="Arty Ficial"
                                                socialFriendprofileDec="15  friends" />
                                        </div>
                                        <div class="col-md-6 col-lg-6 mb-3">
                                            <x-modules.social.widgets.social-profile-friends img="06.png"
                                                socialFriendprofileTitle="Bill Emia"
                                                socialFriendprofileDec="25  friends" />
                                        </div>
                                        <div class="col-md-6 col-lg-6 mb-3">
                                            <x-modules.social.widgets.social-profile-friends img="07.png"
                                                socialFriendprofileTitle="Bill Yerds"
                                                socialFriendprofileDec="9  friends" />
                                        </div>
                                        <div class="col-md-6 col-lg-6 mb-3">
                                            <x-modules.social.widgets.social-profile-friends img="08.png"
                                                socialFriendprofileTitle="Matt Innae"
                                                socialFriendprofileDec="19  friends" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="photos" role="tabpanel">
            <div class="card">
                <div class="card-body">
                    <h4>Photos</h4>
                    <div class="friend-list-tab mt-2">
                        <ul class="nav nav-tabs mb-0">
                            <li class="nav-item">
                                <a class="nav-link active" data-bs-toggle="pill" href="#pill-photosofyou"
                                    data-bs-target="#photosofyou">Photos of You</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="pill" href="#pill-your-photos"
                                    data-bs-target="#your-photos">Your Photos</a>
                            </li>
                        </ul>
                        <div class="tab-content iq-tab-fade-up">
                            <div class="tab-pane fade active show" id="photosofyou" role="tabpanel">
                                <div class="card-body p-0">
                                    <div class="d-grid gap-2 d-grid-template-1fr-13 my-3">
                                        <x-modules.social.widgets.profile-images profileImagesimg="01.png"
                                            fslightboximg="01.png" profileImagesDetail1="60"
                                            profileImagesDetail2="30" profileImagesDetail3="10" />
                                        <x-modules.social.widgets.profile-images profileImagesimg="02.png"
                                            fslightboximg="02.png" profileImagesDetail1="60"
                                            profileImagesDetail2="30" profileImagesDetail3="10" />
                                        <x-modules.social.widgets.profile-images profileImagesimg="03.png"
                                            fslightboximg="03.png" profileImagesDetail1="60"
                                            profileImagesDetail2="30" profileImagesDetail3="10" />
                                        <x-modules.social.widgets.profile-images profileImagesimg="04.png"
                                            fslightboximg="04.png" profileImagesDetail1="60"
                                            profileImagesDetail2="30" profileImagesDetail3="10" />
                                        <x-modules.social.widgets.profile-images profileImagesimg="05.png"
                                            fslightboximg="05.png" profileImagesDetail1="60"
                                            profileImagesDetail2="30" profileImagesDetail3="10" />
                                        <x-modules.social.widgets.profile-images profileImagesimg="06.png"
                                            fslightboximg="06.png" profileImagesDetail1="60"
                                            profileImagesDetail2="30" profileImagesDetail3="10" />
                                        <x-modules.social.widgets.profile-images profileImagesimg="07.png"
                                            fslightboximg="07.png" profileImagesDetail1="60"
                                            profileImagesDetail2="30" profileImagesDetail3="10" />
                                        <x-modules.social.widgets.profile-images profileImagesimg="08.png"
                                            fslightboximg="08.png" profileImagesDetail1="60"
                                            profileImagesDetail2="30" profileImagesDetail3="10" />
                                        <x-modules.social.widgets.profile-images profileImagesimg="09.png"
                                            fslightboximg="09.png" profileImagesDetail1="60"
                                            profileImagesDetail2="30" profileImagesDetail3="10" />
                                        <x-modules.social.widgets.profile-images profileImagesimg="10.png"
                                            fslightboximg="10.png" profileImagesDetail1="60"
                                            profileImagesDetail2="30" profileImagesDetail3="10" />
                                        <x-modules.social.widgets.profile-images profileImagesimg="11.png"
                                            fslightboximg="11.png" profileImagesDetail1="60"
                                            profileImagesDetail2="30" profileImagesDetail3="10" />
                                        <x-modules.social.widgets.profile-images profileImagesimg="12.png"
                                            fslightboximg="12.png" profileImagesDetail1="60"
                                            profileImagesDetail2="30" profileImagesDetail3="10" />
                                        <x-modules.social.widgets.profile-images profileImagesimg="13.png"
                                            fslightboximg="13.png" profileImagesDetail1="60"
                                            profileImagesDetail2="30" profileImagesDetail3="10" />
                                        <x-modules.social.widgets.profile-images profileImagesimg="14.png"
                                            fslightboximg="14.png" profileImagesDetail1="60"
                                            profileImagesDetail2="30" profileImagesDetail3="10" />
                                        <x-modules.social.widgets.profile-images profileImagesimg="15.png"
                                            fslightboximg="15.png" profileImagesDetail1="60"
                                            profileImagesDetail2="30" profileImagesDetail3="10" />
                                        <x-modules.social.widgets.profile-images profileImagesimg="06.png"
                                            fslightboximg="06.png" profileImagesDetail1="60"
                                            profileImagesDetail2="30" profileImagesDetail3="10" />
                                        <x-modules.social.widgets.profile-images profileImagesimg="07.png"
                                            fslightboximg="07.png" profileImagesDetail1="60"
                                            profileImagesDetail2="30" profileImagesDetail3="10" />
                                        <x-modules.social.widgets.profile-images profileImagesimg="08.png"
                                            fslightboximg="08.png" profileImagesDetail1="60"
                                            profileImagesDetail2="30" profileImagesDetail3="10" />
                                        <x-modules.social.widgets.profile-images profileImagesimg="09.png"
                                            fslightboximg="09.png" profileImagesDetail1="60"
                                            profileImagesDetail2="30" profileImagesDetail3="10" />
                                        <x-modules.social.widgets.profile-images profileImagesimg="10.png"
                                            fslightboximg="10.png" profileImagesDetail1="60"
                                            profileImagesDetail2="30" profileImagesDetail3="10" />
                                        <x-modules.social.widgets.profile-images profileImagesimg="01.png"
                                            fslightboximg="01.png" profileImagesDetail1="60"
                                            profileImagesDetail2="30" profileImagesDetail3="10" />
                                        <x-modules.social.widgets.profile-images profileImagesimg="02.png"
                                            fslightboximg="02.png" profileImagesDetail1="60"
                                            profileImagesDetail2="30" profileImagesDetail3="10" />
                                        <x-modules.social.widgets.profile-images profileImagesimg="03.png"
                                            fslightboximg="03.png" profileImagesDetail1="60"
                                            profileImagesDetail2="30" profileImagesDetail3="10" />
                                        <x-modules.social.widgets.profile-images profileImagesimg="04.png"
                                            fslightboximg="04.png" profileImagesDetail1="60"
                                            profileImagesDetail2="30" profileImagesDetail3="10" />
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="your-photos" role="tabpanel">
                                <div class="card-body p-0">
                                    <div class="d-grid gap-2 d-grid-template-1fr-13 my-3">
                                        <x-modules.social.widgets.profile-images profileImagesimg="01.png"
                                            fslightboximg="01.png" profileImagesDetail1="60"
                                            profileImagesDetail2="30" profileImagesDetail3="10" />
                                        <x-modules.social.widgets.profile-images profileImagesimg="02.png"
                                            fslightboximg="02.png" profileImagesDetail1="60"
                                            profileImagesDetail2="30" profileImagesDetail3="10" />
                                        <x-modules.social.widgets.profile-images profileImagesimg="03.png"
                                            fslightboximg="03.png" profileImagesDetail1="60"
                                            profileImagesDetail2="30" profileImagesDetail3="10" />
                                        <x-modules.social.widgets.profile-images profileImagesimg="04.png"
                                            fslightboximg="04.png" profileImagesDetail1="60"
                                            profileImagesDetail2="30" profileImagesDetail3="10" />
                                        <x-modules.social.widgets.profile-images profileImagesimg="05.png"
                                            fslightboximg="05.png" profileImagesDetail1="60"
                                            profileImagesDetail2="30" profileImagesDetail3="10" />
                                        <x-modules.social.widgets.profile-images profileImagesimg="06.png"
                                            fslightboximg="06.png" profileImagesDetail1="60"
                                            profileImagesDetail2="30" profileImagesDetail3="10" />
                                        <x-modules.social.widgets.profile-images profileImagesimg="07.png"
                                            fslightboximg="07.png" profileImagesDetail1="60"
                                            profileImagesDetail2="30" profileImagesDetail3="10" />
                                        <x-modules.social.widgets.profile-images profileImagesimg="08.png"
                                            fslightboximg="08.png" profileImagesDetail1="60"
                                            profileImagesDetail2="30" profileImagesDetail3="10" />
                                        <x-modules.social.widgets.profile-images profileImagesimg="09.png"
                                            fslightboximg="09.png" profileImagesDetail1="60"
                                            profileImagesDetail2="30" profileImagesDetail3="10" />
                                        <x-modules.social.widgets.profile-images profileImagesimg="10.png"
                                            fslightboximg="10.png" profileImagesDetail1="60"
                                            profileImagesDetail2="30" profileImagesDetail3="10" />
                                        <x-modules.social.widgets.profile-images profileImagesimg="11.png"
                                            fslightboximg="11.png" profileImagesDetail1="60"
                                            profileImagesDetail2="30" profileImagesDetail3="10" />
                                        <x-modules.social.widgets.profile-images profileImagesimg="12.png"
                                            fslightboximg="12.png" profileImagesDetail1="60"
                                            profileImagesDetail2="30" profileImagesDetail3="10" />
                                        <x-modules.social.widgets.profile-images profileImagesimg="13.png"
                                            fslightboximg="13.png" profileImagesDetail1="60"
                                            profileImagesDetail2="30" profileImagesDetail3="10" />
                                        <x-modules.social.widgets.profile-images profileImagesimg="14.png"
                                            fslightboximg="14.png" profileImagesDetail1="60"
                                            profileImagesDetail2="30" profileImagesDetail3="10" />
                                        <x-modules.social.widgets.profile-images profileImagesimg="15.png"
                                            fslightboximg="15.png" profileImagesDetail1="60"
                                            profileImagesDetail2="30" profileImagesDetail3="10" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <x-modules.social.widgets.post-modal />
    <x-modules.social.widgets.image-modal />
    <x-share-offcanvas />
</x-app-layout>
