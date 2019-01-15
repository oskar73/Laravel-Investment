<x-app-layout layout="social" title="Group Detail">
    <div class="row">
        <div class="col-lg-12">
            <div class="d-flex align-items-center justify-content-between mb-3 flex-wrap gap-4">
                <div class="group-info d-flex align-items-center gap-3">
                    <div>
                        <img class="rounded-circle img-fluid avatar-100" src="{{asset('modules/social-app/images/social-profile/15.jpg')}}" alt="" loading="lazy" />
                    </div>
                    <div class="info">
                        <h4>Developer's...</h4>
                        <p class="mb-0 d-flex justify-content-center align-items-center">
                            <svg width="20" class="me-1" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M7.7688 8.71387H16.2312C18.5886 8.71387 20.5 10.5831 20.5 12.8885V17.8254C20.5 20.1308 18.5886 22 16.2312 22H7.7688C5.41136 22 3.5 20.1308 3.5 17.8254V12.8885C3.5 10.5831 5.41136 8.71387 7.7688 8.71387ZM11.9949 17.3295C12.4928 17.3295 12.8891 16.9419 12.8891 16.455V14.2489C12.8891 13.772 12.4928 13.3844 11.9949 13.3844C11.5072 13.3844 11.1109 13.772 11.1109 14.2489V16.455C11.1109 16.9419 11.5072 17.3295 11.9949 17.3295Z" fill="currentColor"></path>
                                <path opacity="0.4" d="M17.523 7.39595V8.86667C17.1673 8.7673 16.7913 8.71761 16.4052 8.71761H15.7447V7.39595C15.7447 5.37868 14.0681 3.73903 12.0053 3.73903C9.94257 3.73903 8.26594 5.36874 8.25578 7.37608V8.71761H7.60545C7.20916 8.71761 6.83319 8.7673 6.47754 8.87661V7.39595C6.4877 4.41476 8.95692 2 11.985 2C15.0537 2 17.523 4.41476 17.523 7.39595Z" fill="currentColor"></path>
                            </svg>Private Group. 323 members
                        </p>
                    </div>
                </div>
                <div class="group-member d-flex align-items-center gap-3">
                    <div class="iq-media-group ">
                        <a href="#" class="iq-media">
                            <img class="img-fluid avatar-40 rounded-circle" src="{{asset('modules/social-app/images/avatar/01.png')}}" alt="" loading="lazy"/>
                        </a>
                        <a href="#" class="iq-media">
                            <img class="img-fluid avatar-40 rounded-circle" src="{{asset('modules/social-app/images/avatar/02.png')}}" alt="" loading="lazy"/>
                        </a>
                        <a href="#" class="iq-media">
                            <img class="img-fluid avatar-40 rounded-circle" src="{{asset('modules/social-app/images/avatar/03.png')}}" alt="" loading="lazy"/>
                        </a>
                        <a href="#" class="iq-media">
                            <img class="img-fluid avatar-40 rounded-circle" src="{{asset('modules/social-app/images/avatar/04.png')}}" alt="" loading="lazy"/>
                        </a>
                        <a href="#" class="iq-media">
                            <img class="img-fluid avatar-40 rounded-circle" src="{{asset('modules/social-app/images/avatar/05.png')}}" alt="" loading="lazy"/>
                        </a>
                        <a href="#" class="iq-media">
                            <img class="img-fluid avatar-40 rounded-circle" src="{{asset('modules/social-app/images/avatar/06.png')}}" alt="" loading="lazy"/>
                        </a>
                        <a href="#" class="iq-media">
                            <img class="img-fluid avatar-40 rounded-circle" src="{{asset('modules/social-app/images/avatar/07.png')}}" alt="" loading="lazy"/>
                        </a>

                    </div>
                    <button type="submit" class="btn btn-primary d-flex align-items-center gap-2"><svg width="20" class="icon-20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path opacity="0.4" d="M16.6667 2H7.33333C3.92889 2 2 3.92889 2 7.33333V16.6667C2 20.0622 3.92 22 7.33333 22H16.6667C20.0711 22 22 20.0622 22 16.6667V7.33333C22 3.92889 20.0711 2 16.6667 2Z" fill="currentColor"></path>
                            <path d="M15.3205 12.7083H12.7495V15.257C12.7495 15.6673 12.4139 16 12 16C11.5861 16 11.2505 15.6673 11.2505 15.257V12.7083H8.67955C8.29342 12.6687 8 12.3461 8 11.9613C8 11.5765 8.29342 11.2539 8.67955 11.2143H11.2424V8.67365C11.2824 8.29088 11.6078 8 11.996 8C12.3842 8 12.7095 8.29088 12.7495 8.67365V11.2143H15.3205C15.7066 11.2539 16 11.5765 16 11.9613C16 12.3461 15.7066 12.6687 15.3205 12.7083Z" fill="currentColor"></path>
                        </svg>Invite</button>
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
                            <img class="img-fluid rounded-circle avatar-60 p-1 border border-2 border-primary border-dotted" src="{{asset('modules/social-app/images/avatar/01.png')}}" alt="" loading="lazy" />
                            <form class="w-100" data-bs-toggle="modal" data-bs-target="#post-modal" action="javascript:void(0);">
                                <input type="text" class="form-control border-0 shadow-none" placeholder="Write Something Here...">
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
            <x-modules.social.widgets.post-header id="01" userName="Joshua Martin" postStatus="Added New Post" postDuration="3 hrs" userprofile="avatar/01.png" />
                <div class="card-body">
                    <div class="user-post">
                        <a data-fslightbox="gallery" href="{{asset('modules/social-app/images/profile-event/02.png')}}">
                            <img src="{{asset('modules/social-app/images/profile-event/02.png')}}" class="img-fluid rounded w-100" alt="post-image" loading="lazy" >
                        </a>
                    </div>
                    <div class="comment-area pt-3">

                    <x-modules.social.widgets.like-share id="01" noLikes="120" noComments="02" noShare="15" />
                        <hr>
                        <ul class="list-inline mt-4 mb-0">
                            <li class="mb-0">
                                <x-modules.social.widgets.friend-comment id="10" userName="Larry Robbins" userComment="So True!!" commentDuration="2 Min Ago" userImage="avatar/10.png"/>
                            </li>
                        </ul>
                        <x-modules.social.widgets.comment-form-control placeholder="Enter Your Comment Here..."/>
                    </div>
                </div>
            </div>
            <div class="card">
            <x-modules.social.widgets.post-header id="02" userName="Pete Sariya" postStatus="Update his Status" postDuration="7 hrs" userprofile="avatar/03.png" />
                <div class="card-body">
                    <div class="user-post">
                        <a data-fslightbox="gallery" href="{{asset('modules/social-app/images/profile-event/03.png')}}">
                            <img src="{{asset('modules/social-app/images/profile-event/03.png')}}" class="img-fluid rounded w-100" alt="post-image" loading="lazy">
                        </a>
                    </div>
                    <div class="comment-area pt-3">
                        <x-modules.social.widgets.like-share id="01" noLikes="120" noComments="02" noShare="15" />
                        <hr>
                        <ul class="list-inline mt-4 mb-0">
                            <li class="mb-0">
                                <x-modules.social.widgets.friend-comment id="11" userName="Larry Robbins" userComment="So True!!" commentDuration="2 Min Ago" userImage="avatar/10.png"/>
                            </li>
                        </ul>
                        <x-modules.social.widgets.comment-form-control placeholder="Enter Your Comment Here..."/>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <div class="header-title">
                        <h4 class="card-title">Groups</h4>
                    </div>
                </div>
                <div class="card-body">
                    <ul class="list-inline p-0 m-0">
                        <li class="mb-3 pb-3 border-bottom">
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
                        </li>
                        <li class="mb-3 d-flex align-items-center gap-3">
                            <div class="avatar-40 rounded-circle bg-light text-center  d-flex align-items-center justify-content-center">
                                <svg class="icon-20" width="20" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path opacity="0.4" d="M16.191 2H7.81C4.77 2 3 3.78 3 6.83V17.16C3 20.26 4.77 22 7.81 22H16.191C19.28 22 21 20.26 21 17.16V6.83C21 3.78 19.28 2 16.191 2Z" fill="currentColor"></path>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M8.07999 6.64999V6.65999C7.64899 6.65999 7.29999 7.00999 7.29999 7.43999C7.29999 7.86999 7.64899 8.21999 8.07999 8.21999H11.069C11.5 8.21999 11.85 7.86999 11.85 7.42899C11.85 6.99999 11.5 6.64999 11.069 6.64999H8.07999ZM15.92 12.74H8.07999C7.64899 12.74 7.29999 12.39 7.29999 11.96C7.29999 11.53 7.64899 11.179 8.07999 11.179H15.92C16.35 11.179 16.7 11.53 16.7 11.96C16.7 12.39 16.35 12.74 15.92 12.74ZM15.92 17.31H8.07999C7.77999 17.35 7.48999 17.2 7.32999 16.95C7.16999 16.69 7.16999 16.36 7.32999 16.11C7.48999 15.85 7.77999 15.71 8.07999 15.74H15.92C16.319 15.78 16.62 16.12 16.62 16.53C16.62 16.929 16.319 17.27 15.92 17.31Z" fill="currentColor"></path>
                                </svg>
                            </div>
                            <h6 class="mb-0">Your Feed</h6>
                        </li>
                        <li class="mb-3 d-flex align-items-center gap-3">
                            <div class="avatar-40 rounded-circle bg-light text-center  d-flex align-items-center justify-content-center">
                                <svg class="icon-20" width="20" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path opacity="0.4" d="M22 12C22 17.523 17.523 22 12 22C6.477 22 2 17.523 2 12C2 6.478 6.477 2 12 2C17.523 2 22 6.478 22 12Z" fill="currentColor"></path>
                                <path d="M15.8597 8.70505L14.2397 13.8251C14.1797 14.0351 14.0097 14.2051 13.7997 14.2661L8.69972 15.8651C8.35972 15.9761 8.02972 15.6451 8.13972 15.3051L9.73972 10.1751C9.79972 9.96505 9.96972 9.80505 10.1797 9.73505L15.2997 8.13505C15.6497 8.02505 15.9697 8.35505 15.8597 8.70505Z" fill="currentColor"></path>
                                </svg>
                            </div>
                            <h6 class="mb-0">Discover</h6>
                        </li>
                        <li>
                            <button type="submit" class="btn btn-primary d-block w-100"><i class="ri-add-line pe-2"></i>Create New Group</button>
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
                        <li class="mb-3">
                            <p class="mb-0">Developer's Group...</p>
                        </li>
                        <li class="mb-3">
                        <div class="d-flex gap-3">
                            <div class="flex-shrink-0">
                                <svg class="icon-24" width="24" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M7.7688 8.71387H16.2312C18.5886 8.71387 20.5 10.5831 20.5 12.8885V17.8254C20.5 20.1308 18.5886 22 16.2312 22H7.7688C5.41136 22 3.5 20.1308 3.5 17.8254V12.8885C3.5 10.5831 5.41136 8.71387 7.7688 8.71387ZM11.9949 17.3295C12.4928 17.3295 12.8891 16.9419 12.8891 16.455V14.2489C12.8891 13.772 12.4928 13.3844 11.9949 13.3844C11.5072 13.3844 11.1109 13.772 11.1109 14.2489V16.455C11.1109 16.9419 11.5072 17.3295 11.9949 17.3295Z" fill="currentColor"></path>
                                    <path opacity="0.4" d="M17.523 7.39595V8.86667C17.1673 8.7673 16.7913 8.71761 16.4052 8.71761H15.7447V7.39595C15.7447 5.37868 14.0681 3.73903 12.0053 3.73903C9.94257 3.73903 8.26594 5.36874 8.25578 7.37608V8.71761H7.60545C7.20916 8.71761 6.83319 8.7673 6.47754 8.87661V7.39595C6.4877 4.41476 8.95692 2 11.985 2C15.0537 2 17.523 4.41476 17.523 7.39595Z" fill="currentColor"></path>
                                </svg>
                            </div>
                            <div class="flex-grow-1">
                                <h6>Private</h6>
                                <p class="mb-0">Success in slowing economic activity.</p>
                            </div>
                        </div>
                        </li>
                        <li class="mb-3">
                            <div class="d-flex gap-3">
                                <div class="flex-shrink-0">
                                <svg class="icon-24" width="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path opacity="0.4" fill-rule="evenodd" clip-rule="evenodd" d="M17.7366 6.04606C19.4439 7.36388 20.8976 9.29455 21.9415 11.7091C22.0195 11.8924 22.0195 12.1067 21.9415 12.2812C19.8537 17.1103 16.1366 20 12 20H11.9902C7.86341 20 4.14634 17.1103 2.05854 12.2812C1.98049 12.1067 1.98049 11.8924 2.05854 11.7091C4.14634 6.87903 7.86341 4 11.9902 4H12C14.0683 4 16.0293 4.71758 17.7366 6.04606ZM8.09756 12C8.09756 14.1333 9.8439 15.8691 12 15.8691C14.1463 15.8691 15.8927 14.1333 15.8927 12C15.8927 9.85697 14.1463 8.12121 12 8.12121C9.8439 8.12121 8.09756 9.85697 8.09756 12Z" fill="currentColor"></path>
                                    <path d="M14.4308 11.997C14.4308 13.3255 13.3381 14.4115 12.0015 14.4115C10.6552 14.4115 9.5625 13.3255 9.5625 11.997C9.5625 11.8321 9.58201 11.678 9.61128 11.5228H9.66006C10.743 11.5228 11.621 10.6695 11.6601 9.60184C11.7674 9.58342 11.8845 9.57275 12.0015 9.57275C13.3381 9.57275 14.4308 10.6588 14.4308 11.997Z" fill="currentColor"></path>
                                </svg>
                                </div>
                                <div class="flex-grow-1 ">
                                    <h6>Visible</h6>
                                    <p class="mb-0">Various versions have evolved over the years</p>
                                </div>
                            </div>
                        </li>
                        <li class="">
                            <div class="d-flex gap-3">
                                <div class="flex-shrink-0">
                                <svg class="icon-24" width="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9.34933 14.8577C5.38553 14.8577 2 15.47 2 17.9173C2 20.3665 5.364 20.9999 9.34933 20.9999C13.3131 20.9999 16.6987 20.3876 16.6987 17.9403C16.6987 15.4911 13.3347 14.8577 9.34933 14.8577Z" fill="currentColor"></path>
                                    <path opacity="0.4" d="M9.34935 12.5248C12.049 12.5248 14.2124 10.4062 14.2124 7.76241C14.2124 5.11865 12.049 3 9.34935 3C6.65072 3 4.48633 5.11865 4.48633 7.76241C4.48633 10.4062 6.65072 12.5248 9.34935 12.5248Z" fill="currentColor"></path>
                                    <path opacity="0.4" d="M16.1733 7.84873C16.1733 9.19505 15.7604 10.4513 15.0363 11.4948C14.961 11.6021 15.0275 11.7468 15.1586 11.7698C15.3406 11.7995 15.5275 11.8177 15.7183 11.8216C17.6165 11.8704 19.3201 10.6736 19.7907 8.87116C20.4884 6.19674 18.4414 3.79541 15.8338 3.79541C15.551 3.79541 15.2799 3.82416 15.0157 3.87686C14.9795 3.88453 14.9404 3.90177 14.9208 3.93244C14.8954 3.97172 14.914 4.02251 14.9394 4.05605C15.7232 5.13214 16.1733 6.44205 16.1733 7.84873Z" fill="currentColor"></path>
                                    <path d="M21.779 15.1693C21.4316 14.4439 20.593 13.9465 19.3171 13.7022C18.7153 13.5585 17.0852 13.3544 15.5695 13.3831C15.547 13.386 15.5343 13.4013 15.5324 13.4109C15.5294 13.4262 15.5363 13.4492 15.5656 13.4655C16.2662 13.8047 18.9737 15.2804 18.6332 18.3927C18.6185 18.5288 18.729 18.6438 18.867 18.6246C19.5333 18.5317 21.2476 18.1704 21.779 17.0474C22.0735 16.4533 22.0735 15.7634 21.779 15.1693Z" fill="currentColor"></path>
                                </svg>
                                </div>
                                <div class="flex-grow-1 ">
                                <h6>General group</h6>
                                <p class="mb-0">There are many variations of passages</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <x-modules.social.widgets.post-modal/>
    <x-modules.social.widgets.image-modal/>
    <x-share-offcanvas />
</x-app-layout>
