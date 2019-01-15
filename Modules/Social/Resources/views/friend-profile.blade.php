<x-app-layout layout="social" :assets="$assets ?? []" :isBanner="false" title="Friend profile" isFslightbox="true">
    <div class="row">
        <div class="col-lg-4">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <div class="header-title">
                        <h4 class="card-title">About</h4>
                    </div>
                </div>
                <div class="card-body">
                    <ul class="list-inline p-0 m-0">
                        <li class="mb-2 d-flex align-items-center gap-3">
                            <svg class="icon-24" width="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M11.9488 14.54C8.49884 14.54 5.58789 15.1038 5.58789 17.2795C5.58789 19.4562 8.51765 20.0001 11.9488 20.0001C15.3988 20.0001 18.3098 19.4364 18.3098 17.2606C18.3098 15.084 15.38 14.54 11.9488 14.54Z"
                                    fill="currentColor"></path>
                                <path opacity="0.4"
                                    d="M11.949 12.467C14.2851 12.467 16.1583 10.5831 16.1583 8.23351C16.1583 5.88306 14.2851 4 11.949 4C9.61293 4 7.73975 5.88306 7.73975 8.23351C7.73975 10.5831 9.61293 12.467 11.949 12.467Z"
                                    fill="currentColor"></path>
                                <path opacity="0.4"
                                    d="M21.0881 9.21923C21.6925 6.84176 19.9205 4.70654 17.664 4.70654C17.4187 4.70654 17.1841 4.73356 16.9549 4.77949C16.9244 4.78669 16.8904 4.802 16.8725 4.82902C16.8519 4.86324 16.8671 4.90917 16.8895 4.93889C17.5673 5.89528 17.9568 7.0597 17.9568 8.30967C17.9568 9.50741 17.5996 10.6241 16.9728 11.5508C16.9083 11.6462 16.9656 11.775 17.0793 11.7948C17.2369 11.8227 17.3981 11.8371 17.5629 11.8416C19.2059 11.8849 20.6807 10.8213 21.0881 9.21923Z"
                                    fill="currentColor"></path>
                                <path
                                    d="M22.8094 14.817C22.5086 14.1722 21.7824 13.73 20.6783 13.513C20.1572 13.3851 18.747 13.205 17.4352 13.2293C17.4155 13.232 17.4048 13.2455 17.403 13.2545C17.4003 13.2671 17.4057 13.2887 17.4316 13.3022C18.0378 13.6039 20.3811 14.916 20.0865 17.6834C20.074 17.8032 20.1698 17.9068 20.2888 17.8888C20.8655 17.8059 22.3492 17.4853 22.8094 16.4866C23.0637 15.9589 23.0637 15.3456 22.8094 14.817Z"
                                    fill="currentColor"></path>
                                <path opacity="0.4"
                                    d="M7.04459 4.77973C6.81626 4.7329 6.58077 4.70679 6.33543 4.70679C4.07901 4.70679 2.30701 6.84201 2.9123 9.21947C3.31882 10.8216 4.79355 11.8851 6.43661 11.8419C6.60136 11.8374 6.76343 11.8221 6.92013 11.7951C7.03384 11.7753 7.09115 11.6465 7.02668 11.551C6.3999 10.6234 6.04263 9.50765 6.04263 8.30991C6.04263 7.05904 6.43303 5.89462 7.11085 4.93913C7.13234 4.90941 7.14845 4.86348 7.12696 4.82926C7.10906 4.80135 7.07593 4.78694 7.04459 4.77973Z"
                                    fill="currentColor"></path>
                                <path
                                    d="M3.32156 13.5127C2.21752 13.7297 1.49225 14.1719 1.19139 14.8167C0.936203 15.3453 0.936203 15.9586 1.19139 16.4872C1.65163 17.4851 3.13531 17.8066 3.71195 17.8885C3.83104 17.9065 3.92595 17.8038 3.91342 17.6832C3.61883 14.9167 5.9621 13.6046 6.56918 13.3029C6.59425 13.2885 6.59962 13.2677 6.59694 13.2542C6.59515 13.2452 6.5853 13.2317 6.5656 13.2299C5.25294 13.2047 3.84358 13.3848 3.32156 13.5127Z"
                                    fill="currentColor"></path>
                            </svg>
                            <p class="mb-0">Web Developer</p>
                        </li>
                        <li class="mb-2 d-flex align-items-center gap-3">
                            <svg class="icon-24" width="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path opacity="0.4"
                                    d="M16.191 2H7.81C4.77 2 3 3.78 3 6.83V17.16C3 20.26 4.77 22 7.81 22H16.191C19.28 22 21 20.26 21 17.16V6.83C21 3.78 19.28 2 16.191 2Z"
                                    fill="currentColor"></path>
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M8.07996 6.6499V6.6599C7.64896 6.6599 7.29996 7.0099 7.29996 7.4399C7.29996 7.8699 7.64896 8.2199 8.07996 8.2199H11.069C11.5 8.2199 11.85 7.8699 11.85 7.4289C11.85 6.9999 11.5 6.6499 11.069 6.6499H8.07996ZM15.92 12.7399H8.07996C7.64896 12.7399 7.29996 12.3899 7.29996 11.9599C7.29996 11.5299 7.64896 11.1789 8.07996 11.1789H15.92C16.35 11.1789 16.7 11.5299 16.7 11.9599C16.7 12.3899 16.35 12.7399 15.92 12.7399ZM15.92 17.3099H8.07996C7.77996 17.3499 7.48996 17.1999 7.32996 16.9499C7.16996 16.6899 7.16996 16.3599 7.32996 16.1099C7.48996 15.8499 7.77996 15.7099 8.07996 15.7399H15.92C16.319 15.7799 16.62 16.1199 16.62 16.5299C16.62 16.9289 16.319 17.2699 15.92 17.3099Z"
                                    fill="currentColor"></path>
                            </svg>
                            <p class="mb-0">Success in slowing economic activity.</p>
                        </li>
                        <li class="mb-2 d-flex align-items-center gap-3">
                            <svg class="icon-24" width="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M8.53162 2.93677C10.7165 1.66727 13.402 1.68946 15.5664 2.99489C17.7095 4.32691 19.012 6.70418 18.9998 9.26144C18.95 11.8019 17.5533 14.19 15.8075 16.0361C14.7998 17.1064 13.6726 18.0528 12.4488 18.856C12.3228 18.9289 12.1848 18.9777 12.0415 19C11.9036 18.9941 11.7693 18.9534 11.6508 18.8814C9.78243 17.6746 8.14334 16.134 6.81233 14.334C5.69859 12.8314 5.06584 11.016 5 9.13442C4.99856 6.57225 6.34677 4.20627 8.53162 2.93677ZM9.79416 10.1948C10.1617 11.1008 11.0292 11.6918 11.9916 11.6918C12.6221 11.6964 13.2282 11.4438 13.6748 10.9905C14.1214 10.5371 14.3715 9.92064 14.3692 9.27838C14.3726 8.29804 13.7955 7.41231 12.9073 7.03477C12.0191 6.65723 10.995 6.86235 10.3133 7.55435C9.63159 8.24635 9.42664 9.28872 9.79416 10.1948Z"
                                    fill="currentColor"></path>
                                <ellipse opacity="0.4" cx="12" cy="21" rx="5" ry="1"
                                    fill="currentColor"></ellipse>
                            </svg>
                            <p class="mb-0">USA</p>
                        </li>
                        <li class="d-flex align-items-center gap-3">
                            <svg class="icon-24" width="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path opacity="0.4"
                                    d="M11.7761 21.8374C9.49311 20.4273 7.37081 18.7645 5.44807 16.8796C4.09069 15.5338 3.05404 13.8905 2.41735 12.0753C1.27971 8.53523 2.60399 4.48948 6.30129 3.2884C8.2528 2.67553 10.3752 3.05175 12.0072 4.29983C13.6398 3.05315 15.7616 2.67705 17.7132 3.2884C21.4105 4.48948 22.7436 8.53523 21.606 12.0753C20.9745 13.8888 19.944 15.5319 18.5931 16.8796C16.6686 18.7625 14.5465 20.4251 12.265 21.8374L12.0161 22L11.7761 21.8374Z"
                                    fill="currentColor"></path>
                                <path
                                    d="M12.0109 22.0001L11.776 21.8375C9.49013 20.4275 7.36487 18.7648 5.43902 16.8797C4.0752 15.5357 3.03238 13.8923 2.39052 12.0754C1.26177 8.53532 2.58605 4.48957 6.28335 3.28849C8.23486 2.67562 10.3853 3.05213 12.0109 4.31067V22.0001Z"
                                    fill="currentColor"></path>
                                <path
                                    d="M18.2304 9.99922C18.0296 9.98629 17.8425 9.8859 17.7131 9.72157C17.5836 9.55723 17.5232 9.3434 17.5459 9.13016C17.5677 8.4278 17.168 7.78851 16.5517 7.53977C16.1609 7.43309 15.9243 7.00987 16.022 6.59249C16.1148 6.18182 16.4993 5.92647 16.8858 6.0189C16.9346 6.027 16.9816 6.04468 17.0244 6.07105C18.2601 6.54658 19.0601 7.82641 18.9965 9.22576C18.9944 9.43785 18.9117 9.63998 18.7673 9.78581C18.6229 9.93164 18.4291 10.0087 18.2304 9.99922Z"
                                    fill="currentColor"></path>
                            </svg>
                            <p class="mb-0">Single</p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <div class="header-title">
                        <h4 class="card-title">Photos</h4>
                    </div>
                    <div class="card-header-toolbar d-flex align-items-center">
                        <p class="m-0"><a href="javascript:void(0)">Add Photo </a></p>
                    </div>
                </div>
                <div class="card-body">
                    <ul class="profile-img-gallary p-0 m-0 list-unstyled d-grid gap-card grid-cols-3">
                        <li class=""><a data-fslightbox="gallery"
                                href="{{ asset('modules/social-app/images/avatar/10.png') }}"><img
                                    src="{{ asset('modules/social-app/images/avatar/10.png') }}" alt="gallary-image"
                                    class="img-fluid rounded" loading="lazy"></a></li>
                        <li class=""><a data-fslightbox="gallery"
                                href="{{ asset('modules/social-app/images/avatar/11.png') }}"><img
                                    src="{{ asset('modules/social-app/images/avatar/11.png') }}" alt="gallary-image"
                                    class="img-fluid rounded" loading="lazy"></a></li>
                        <li class=""><a data-fslightbox="gallery"
                                href="{{ asset('modules/social-app/images/avatar/12.png') }}"><img
                                    src="{{ asset('modules/social-app/images/avatar/12.png') }}" alt="gallary-image"
                                    class="img-fluid rounded" loading="lazy"></a></li>
                        <li class=""><a data-fslightbox="gallery"
                                href="{{ asset('modules/social-app/images/avatar/13.png') }}"><img
                                    src="{{ asset('modules/social-app/images/avatar/13.png') }}" alt="gallary-image"
                                    class="img-fluid rounded" loading="lazy"></a></li>
                        <li class=""><a data-fslightbox="gallery"
                                href="{{ asset('modules/social-app/images/avatar/14.png') }}"><img
                                    src="{{ asset('modules/social-app/images/avatar/14.png') }}" alt="gallary-image"
                                    class="img-fluid rounded" loading="lazy"></a></li>
                        <li class=""><a data-fslightbox="gallery"
                                href="{{ asset('modules/social-app/images/avatar/15.png') }}"><img
                                    src="{{ asset('modules/social-app/images/avatar/15.png') }}" alt="gallary-image"
                                    class="img-fluid rounded" loading="lazy"></a></li>
                        <li class=""><a data-fslightbox="gallery"
                                href="{{ asset('modules/social-app/images/avatar/16.png') }}"><img
                                    src="{{ asset('modules/social-app/images/avatar/16.png') }}" alt="gallary-image"
                                    class="img-fluid rounded" loading="lazy"></a></li>
                        <li class=""><a data-fslightbox="gallery"
                                href="{{ asset('modules/social-app/images/avatar/17.png') }}"><img
                                    src="{{ asset('modules/social-app/images/avatar/17.png') }}" alt="gallary-image"
                                    class="img-fluid rounded" loading="lazy"></a></li>
                        <li class=""><a data-fslightbox="gallery"
                                href="{{ asset('modules/social-app/images/avatar/18.png') }}"><img
                                    src="{{ asset('modules/social-app/images/avatar/18.png') }}" alt="gallary-image"
                                    class="img-fluid rounded" loading="lazy"></a></li>
                    </ul>
                </div>
            </div>
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <div class="header-title">
                        <h4 class="card-title">Friends</h4>
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
                                <img src="{{ asset('modules/social-app/images/avatar/01.png') }}" alt="gallary-image"
                                    class="img-fluid rounded" loading="lazy" />
                            </a>
                            <h6 class="mt-2 text-center">Anna Rexia</h6>
                        </li>
                        <li class="">
                            <a data-fslightbox="gallery"
                                href="{{ asset('modules/social-app/images/avatar/02.png') }}">
                                <img src="{{ asset('modules/social-app/images/avatar/02.png') }}" alt="gallary-image"
                                    class="img-fluid rounded" loading="lazy" />
                            </a>
                            <h6 class="mt-2 text-center">Tara Zona</h6>
                        </li>
                        <li class="">
                            <a data-fslightbox="gallery"
                                href="{{ asset('modules/social-app/images/avatar/03.png') }}">
                                <img src="{{ asset('modules/social-app/images/avatar/03.png') }}" alt="gallary-image"
                                    class="img-fluid rounded" loading="lazy" />
                            </a>
                            <h6 class="mt-2 text-center">Polly Tech</h6>
                        </li>
                        <li class="">
                            <a data-fslightbox="gallery"
                                href="{{ asset('modules/social-app/images/avatar/04.png') }}">
                                <img src="{{ asset('modules/social-app/images/avatar/04.png') }}" alt="gallary-image"
                                    class="img-fluid rounded" loading="lazy" />
                            </a>
                            <h6 class="mt-2 text-center">Bill Emia</h6>
                        </li>
                        <li class="">
                            <a data-fslightbox="gallery"
                                href="{{ asset('modules/social-app/images/avatar/05.png') }}">
                                <img src="{{ asset('modules/social-app/images/avatar/05.png') }}" alt="gallary-image"
                                    class="img-fluid rounded" loading="lazy" />
                            </a>
                            <h6 class="mt-2 text-center">Moe Fugga</h6>
                        </li>
                        <li class="">
                            <a data-fslightbox="gallery"
                                href="{{ asset('modules/social-app/images/avatar/06.png') }}">
                                <img src="{{ asset('modules/social-app/images/avatar/06.png') }}" alt="gallary-image"
                                    class="img-fluid rounded" loading="lazy" />
                            </a>
                            <h6 class="mt-2 text-center">Hal Appeno </h6>
                        </li>
                        <li class="">
                            <a data-fslightbox="gallery"
                                href="{{ asset('modules/social-app/images/avatar/07.png') }}">
                                <img src="{{ asset('modules/social-app/images/avatar/07.png') }}" alt="gallary-image"
                                    class="img-fluid rounded" loading="lazy" />
                            </a>
                            <h6 class="mt-2 text-center">Zack Lee</h6>
                        </li>
                        <li class="">
                            <a data-fslightbox="gallery"
                                href="{{ asset('modules/social-app/images/avatar/08.png') }}">
                                <img src="{{ asset('modules/social-app/images/avatar/08.png') }}" alt="gallary-image"
                                    class="img-fluid rounded" loading="lazy" />
                            </a>
                            <h6 class="mt-2 text-center">Terry Aki</h6>
                        </li>
                        <li class="">
                            <a data-fslightbox="gallery"
                                href="{{ asset('modules/social-app/images/avatar/09.png') }}">
                                <img src="{{ asset('modules/social-app/images/avatar/09.png') }}" alt="gallary-image"
                                    class="img-fluid rounded" loading="lazy" />
                            </a>
                            <h6 class="mt-2 text-center">Greta Life</h6>
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
                        <div class="d-flex align-items-center mb-3">
                            <img class="img-fluid rounded-circle avatar-60 p-1 border border-2 border-primary border-dotted"
                                src="{{ asset('modules/social-app/images/avatar/01.png') }}" alt=""
                                loading="lazy" />
                            <form class="ms-3 w-100" data-bs-toggle="modal" data-bs-target="#post-modal"
                                action="javascript:void(0);">
                                <input type="text" class="form-control border-0 shadow-none"
                                    placeholder="Write Something Here...">
                            </form>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mt-3">
                        <div class="btn btn-sm btn-primary-subtle d-flex align-items-center gap-2">
                            <span>Photo</span>
                            <svg class="icon-16" width="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M21.9999 14.7024V16.0859C21.9999 16.3155 21.9899 16.5471 21.9699 16.7767C21.6893 19.9357 19.4949 22 16.3286 22H7.67126C6.06806 22 4.71535 21.4797 3.74341 20.5363C3.36265 20.1864 3.042 19.7753 2.7915 19.3041C3.12217 18.9021 3.49291 18.462 3.85363 18.0208C4.46485 17.289 5.05603 16.5661 5.42677 16.0959C5.97788 15.4142 7.43078 13.6196 9.44481 14.4617C9.85563 14.6322 10.2164 14.8728 10.547 15.0833C11.3586 15.6247 11.6993 15.7851 12.2705 15.4743C12.9017 15.1335 13.3125 14.4617 13.7434 13.76C13.9739 13.388 14.2043 13.0281 14.4548 12.6972C15.547 11.2736 17.2304 10.8926 18.6332 11.7348C19.3346 12.1559 19.9358 12.6872 20.4969 13.2276C20.6172 13.3479 20.7374 13.4592 20.8476 13.5695C20.9979 13.7198 21.4989 14.2211 21.9999 14.7024Z" fill="currentColor"></path>
                                <path opacity="0.4" d="M16.3387 2H7.67134C4.27455 2 2 4.37607 2 7.91411V16.086C2 17.3181 2.28056 18.4119 2.79158 19.3042C3.12224 18.9022 3.49299 18.4621 3.85371 18.0199C4.46493 17.2891 5.05611 16.5662 5.42685 16.096C5.97796 15.4143 7.43086 13.6197 9.44489 14.4618C9.85571 14.6323 10.2164 14.8729 10.5471 15.0834C11.3587 15.6248 11.6994 15.7852 12.2705 15.4734C12.9018 15.1336 13.3126 14.4618 13.7435 13.759C13.9739 13.3881 14.2044 13.0282 14.4549 12.6973C15.5471 11.2737 17.2305 10.8927 18.6333 11.7349C19.3347 12.1559 19.9359 12.6873 20.497 13.2277C20.6172 13.348 20.7375 13.4593 20.8477 13.5696C20.998 13.7189 21.499 14.2202 22 14.7025V7.91411C22 4.37607 19.7255 2 16.3387 2Z" fill="currentColor"></path>
                                <path d="M11.4543 8.79668C11.4543 10.2053 10.2809 11.3783 8.87313 11.3783C7.46632 11.3783 6.29297 10.2053 6.29297 8.79668C6.29297 7.38909 7.46632 6.21509 8.87313 6.21509C10.2809 6.21509 11.4543 7.38909 11.4543 8.79668Z" fill="currentColor"></path>
                            </svg>
                        </div>
                        <div class="btn btn-sm btn-primary-subtle mx-3 d-flex align-items-center gap-2">
                            <span>Tag Friend</span>
                            <svg class="icon-16" width="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M11.997 15.1746C7.684 15.1746 4 15.8546 4 18.5746C4 21.2956 7.661 21.9996 11.997 21.9996C16.31 21.9996 19.994 21.3206 19.994 18.5996C19.994 15.8786 16.334 15.1746 11.997 15.1746Z" fill="currentColor"></path>
                                <path opacity="0.4" d="M11.9971 12.5838C14.9351 12.5838 17.2891 10.2288 17.2891 7.29176C17.2891 4.35476 14.9351 1.99976 11.9971 1.99976C9.06008 1.99976 6.70508 4.35476 6.70508 7.29176C6.70508 10.2288 9.06008 12.5838 11.9971 12.5838Z" fill="currentColor"></path>
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
                        <x-modules.social.widgets.like-share id="01" noLikes="120" noComments="02"
                            noShare="15" />
                        <hr>
                        <ul class="list-inline mt-4 mb-0">
                            <li class="mb-0">
                                <x-modules.social.widgets.friend-comment id="01" userName="Larry Robbins"
                                    userComment="So True!!" commentDuration="2 Min Ago" userImage="avatar/10.png" />
                            </li>
                        </ul>
                        <x-modules.social.widgets.comment-form-control placeholder="Enter Your Comment Here..." />
                    </div>
                </div>
            </div>
            <div class="card">
                <x-modules.social.widgets.post-header id="02" userName="Ella Martina"
                    postStatus="Updated Her Status" postDuration="10 hrs" userprofile="avatar/04.png" />
                <div class="card-body">
                    <p class="text-dark">“Essentials to happiness in this life are something to do, something to love,
                        and something to hope for.”</p>
                    <div class="comment-area pt-3">
                        <x-modules.social.widgets.like-share id="02" noLikes="15" noComments="20"
                            noShare="04" />
                        <hr>
                        <ul class="list-inline mt-4 mb-0">
                            <li class="mb-0">
                                <x-modules.social.widgets.friend-comment id="02" userName="Larry Robbins"
                                    userComment="So True!!" commentDuration="5 Min Ago" userImage="avatar/10.png" />
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
