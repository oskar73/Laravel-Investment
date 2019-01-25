<x-app-layout layout="blog" :assets="$assets ?? []" :isBanner="true" title='Blog Main'>

<div class="row">
        <div class="col-lg-8">
            <div class="overflow-hidden blog-data-slider slider-circle-btn position-relative">
                <ul class="p-0 m-0 mb-2 swiper-wrapper list-inline">
                    <li class="swiper-slide">
                    <div class="card iq-incoming-blogs">
                    <div class="card-body card-thumbnail">
                        <div class="row align-items-center">
                            <div class="col-md-9">
                                        <img src="{{asset('modules/blog/images/blog-dashboard/01.png')}}" alt="02" class="img-fluid me-0 mb-3 mb-md-0 iq-blog-img" loading="lazy">
                                    </div>
                                    <div class="col-md-3 ps-md-2">
                                <div class="d-flex flex-column justify-content-center">
                                     <small class="text-primary">
                                                14 Dec 2021
                                            </small>
                                            <a href="{{route('blog.details')}}" class="iq-title">
                                                <h4 class="mt-2 mb-3 text-ellipsis short-2" title="Summer Cocktails and Mocktails" data-bs-toggle="tooltip">Summer Cocktails and Mocktails</h4>
                                            </a>
                                            <div class="d-flex mb-3 gap-2">
                                                <a href="{{route('blog.details')}}" title="Food" data-bs-toggle="tooltip" class="iq-blog-adventure text-ellipsis short-1">Food</a><span> | </span>
                                                <a href="{{route('blog.details')}}" title="Simmons" data-bs-toggle="tooltip" class="iq-blog-adventure text-ellipsis short-1 text-primary">Simmons</a>
                                            </div>
                                            <div>
                                                <button type="button" class="btn btn-primary">Read More</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>                    </li>
                    <li class="swiper-slide">
                        <div class="card iq-incoming-blogs">
                            <div class="card-body card-thumbnail">
                                <div class="row align-items-center">
                                    <div class="col-md-9">
                                        <img src="{{asset('modules/blog/images/blog-dashboard/13.png')}}" alt="02" class="img-fluid me-0 mb-3 mb-md-0 iq-blog-img" loading="lazy">
                                    </div>
                                    <div class="col-md-3 ps-md-2">
                                        <div class="d-flex flex-column justify-content-center">
                                            <small class="text-primary">
                                                20 Dec 2021
                                            </small>
                                            <a href="{{route('blog.details')}}" class="iq-title">
                                                <h4 class="mt-2 mb-3 text-ellipsis short-2" title="Curious About Vegan Skincare?" data-bs-toggle="tooltip">Curious About Vegan Skincare?</h4>
                                            </a>
                                            <div class="d-flex mb-3 gap-2">
                                                <a href="{{route('blog.details')}}" title="Lifestyle" data-bs-toggle="tooltip" class="iq-blog-adventure text-ellipsis short-1">Lifestyle</a><span> | </span>
                                                <a href="{{route('blog.details')}}" title="Jenny Wilson" data-bs-toggle="tooltip" class="iq-blog-adventure text-ellipsis short-1 text-primary">Jenny Wilson</a>
                                            </div>
                                            <div>
                                                <button type="button" class="btn btn-primary">Read More</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>                    </li>
                    <li class="swiper-slide">
                        <div class="card iq-incoming-blogs">
                            <div class="card-body card-thumbnail">
                                <div class="row align-items-center">
                                    <div class="col-md-9">
                                        <img src="{{asset('modules/blog/images/blog-dashboard/14.png')}}" alt="02" class="img-fluid me-0 mb-3 mb-md-0 iq-blog-img" loading="lazy">
                                    </div>
                                    <div class="col-md-3 ps-md-2">
                                        <div class="d-flex flex-column justify-content-center">
                                            <small class="text-primary">
                                                22 Dec 2021
                                            </small>
                                            <a href="{{route('blog.details')}}" class="iq-title">
                                                <h4 class="mt-2 mb-3 text-ellipsis short-2" title="Foods for a Healthy System" data-bs-toggle="tooltip">Foods for a Healthy System</h4>
                                            </a>
                                            <div class="d-flex mb-3 gap-2">
                                                <a href="{{route('blog.details')}}" title="Health" data-bs-toggle="tooltip" class="iq-blog-adventure text-ellipsis short-1">Health</a><span> | </span>
                                                <a href="{{route('blog.details')}}" title="Jane cooper" data-bs-toggle="tooltip" class="iq-blog-adventure text-ellipsis short-1 text-primary">Jane cooper</a>
                                            </div>
                                            <div>
                                                <button type="button" class="btn btn-primary">Read More</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="swiper-button swiper-button-next"></div>
                <div class="swiper-button swiper-button-prev"></div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Author of the Week</h4>
                </div>
                <div class="card-body card-thumbnail">
                    <div class="d-flex align-items-center">
                        <img class="img-fluid rounded-circle avatar-130" src="{{asset('modules/blog/images/blog-avatar/01.png')}}" alt="user-img" loading="lazy" />
                        <div class="ms-3">
                            <h6 class="mb-3">Loren Banks</h6>
                            <div class="d-flex justify-content-start align-items-center gap-2">
                                <span class="text-primary">Travel </span>
                                <span> | </span>
                                <span class="d-flex  align-items-center gap-2">
                                    <svg class="icon-18" width="18" viewBox="0 0 18 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M10.1043 0.677006L11.9317 4.32776C12.1108 4.68616 12.4565 4.93467 12.8573 4.99218L16.9453 5.58062C17.9554 5.72644 18.3573 6.95054 17.6263 7.65194L14.6702 10.4924C14.3797 10.7718 14.2474 11.1733 14.3162 11.5676L15.0138 15.5778C15.1856 16.5698 14.1298 17.3267 13.227 16.8574L9.57321 14.9627C9.21502 14.7768 8.78602 14.7768 8.42679 14.9627L4.773 16.8574C3.87023 17.3267 2.81439 16.5698 2.98724 15.5778L3.68385 11.5676C3.75257 11.1733 3.62033 10.7718 3.32982 10.4924L0.37368 7.65194C-0.357285 6.95054 0.0446417 5.72644 1.05466 5.58062L5.14265 4.99218C5.54354 4.93467 5.89028 4.68616 6.06937 4.32776L7.89574 0.677006C8.34765 -0.225669 9.65235 -0.225669 10.1043 0.677006Z" fill="#FFD329"/>
                                    </svg> <span>4.2</span>
                                </span>
                            </div>
                            <p class="my-4">Elit vitae neque velit mattis elementum egestas non, Sem eget.</p>
                            <div class="d-flex gap-3">
                                <a href="javascript:void(0)">
                                    <svg class="icon-24" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M23.9998 12C23.9998 5.37234 18.6273 0 12.0007 0C5.37201 0 0 5.37218 0 12C0 18.6268 5.37217 24 12.0007 24C18.6275 24 23.9998 18.6268 23.9998 12Z" fill="#3D83D9"></path>
                                        <path d="M9.06396 9.07227H6.28613V17.011H9.06396V9.07227Z" fill="white"></path>
                                        <path d="M7.67514 5.10254C6.80501 5.10254 6.12388 5.90215 6.32007 6.80286C6.43403 7.32607 6.86083 7.74668 7.38588 7.85212C8.28124 8.03193 9.06397 7.35414 9.06397 6.49153C9.06397 5.72568 8.44333 5.10254 7.67514 5.10254Z" fill="white"></path>
                                        <path d="M18.1938 11.511C18.0069 10.0148 17.2585 9.07227 15.2358 9.07227C13.8002 9.07227 13.2293 9.29619 12.9001 9.92284V9.07227H10.6514V17.011H12.9656V12.8554C12.9656 11.818 13.1622 11.0344 14.4449 11.0344C15.7092 11.0344 15.8108 11.9988 15.8108 12.9228V17.0112H18.1939C18.1938 17.0112 18.2379 11.8608 18.1938 11.511Z" fill="white"></path>
                                    </svg>
                                </a>
                                <a href="javascript:void(0)">
                                    <svg class="icon-24" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M24.0002 11.9992C24.0002 5.37225 18.6279 0 12 0C5.37242 0 0 5.37225 0 11.9992C0 18.6262 5.37242 24 12 24C18.6281 24 24.0002 18.6262 24.0002 11.9992Z" fill="#395196"></path>
                                        <path d="M13.0575 9.15703V8.02035C13.0575 7.46672 13.427 7.33737 13.6857 7.33737C13.9452 7.33737 15.2811 7.33737 15.2811 7.33737V4.90325L13.0846 4.89355C10.6466 4.89355 10.093 6.71004 10.093 7.87296V9.15703H8.68359V12.0004H10.1052C10.1052 15.2223 10.1052 19.1073 10.1052 19.1073H12.9477C12.9477 19.1073 12.9477 15.1827 12.9477 12.0004H15.0575L15.317 9.15703H13.0575V9.15703Z" fill="white"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-8">
            <div>
                <div class="d-flex justify-content-between mb-4">
                    <h3 class="mb-0">Trending Blogs</h3>
                    <a  href="{{route('blog.details')}}" class="text-body">View All</a>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="card ">
                            <div class="card-header card-thumbnail">
                                <img src="{{asset('modules/blog/images/blog-dashboard/07.png')}}" alt="02" class="img-fluid w-100 rounded object-cover " loading="lazy">
                            </div>
                            <div class="card-body card-thumbnail">
                                <div>
                                    <small class="text-primary">
                                        02 Dec 2021
                                    </small>
                                    <a href="{{route('blog.details')}}" class="iq-title">
                                        <h4 class="mt-2 mb-3 text-ellipsis short-2" title="The Expierience: If more of us valued food and cheer and song above hoarded gold." data-bs-toggle="tooltip">The Expierience: If more of us valued food and cheer and song above hoarded gold.</h4>
                                    </a>
                                    <div class="d-flex gap-3">
                                        <a href="{{route('blog.details')}}" class="iq-blog-adventure">Travel</a><span > | </span>
                                        <a href="{{route('blog.details')}}" class="iq-blog-adventure text-primary">Jenny Wilson</a>
                                    </div>
                                    <p class="my-4 text-ellipsis short-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Egestas dolor at feugiat in tempor maecenas placerat...</p>
                                    <div>
                                        <a href="{{route('blog.details')}}"  role="button" class="btn btn-primary">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="card ">
                            <div class="card-header card-thumbnail">
                                <img src="{{asset('modules/blog/images/blog-dashboard/05.png')}}" alt="02" class="img-fluid w-100 rounded object-cover " loading="lazy">
                            </div>
                            <div class="card-body card-thumbnail">
                                <div>
                                    <small class="text-primary">
                                        02 Dec 2021
                                    </small>
                                    <a href="{{route('blog.details')}}" class="iq-title">
                                        <h4 class="mt-2 mb-3 text-ellipsis short-2" title="The Ultimate Travel Guide: What To Do, See &amp; Eat." data-bs-toggle="tooltip">The Ultimate Travel Guide: What To Do, See &amp; Eat.</h4>
                                    </a>
                                    <div class="d-flex gap-3">
                                        <a href="{{route('blog.details')}}" class="iq-blog-adventure">Travel</a><span > | </span>
                                        <a href="{{route('blog.details')}}" class="iq-blog-adventure text-primary">Jenny Wilson</a>
                                    </div>
                                    <p class="my-4 text-ellipsis short-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Egestas dolor at feugiat in tempor maecenas placerat...</p>
                                    <div>
                                        <a href="{{route('blog.details')}}"  role="button" class="btn btn-primary">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="card ">
                            <div class="card-header card-thumbnail">
                                <img src="{{asset('modules/blog/images/blog-dashboard/06.png')}}" alt="02" class="img-fluid w-100 rounded object-cover " loading="lazy">
                            </div>
                            <div class="card-body card-thumbnail">
                                <div>
                                    <small class="text-primary">
                                        03 Aug 2021
                                    </small>
                                    <a href="{{route('blog.details')}}" class="iq-title">
                                        <h4 class="mt-2 mb-3 text-ellipsis short-2" title="WIT AND DELIGHT: The Advice From A Twenty Something" data-bs-toggle="tooltip">WIT AND DELIGHT: The Advice From A Twenty Something</h4>
                                    </a>
                                    <div class="d-flex gap-3">
                                        <a href="{{route('blog.details')}}" class="iq-blog-adventure">Travel</a><span > | </span>
                                        <a href="{{route('blog.details')}}" class="iq-blog-adventure text-primary">Jenny Wilson</a>
                                    </div>
                                    <p class="my-4 text-ellipsis short-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Egestas dolor at feugiat in tempor maecenas placerat...</p>
                                    <div>
                                        <a href="{{route('blog.details')}}"  role="button" class="btn btn-primary">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="card ">
                            <div class="card-header card-thumbnail">
                                <img src="{{asset('modules/blog/images/blog-dashboard/07.png')}}" alt="02" class="img-fluid w-100 rounded object-cover " loading="lazy">
                            </div>
                            <div class="card-body card-thumbnail">
                                <div>
                                    <small class="text-primary">
                                        02 Dec 2021
                                    </small>
                                    <a href="{{route('blog.details')}}" class="iq-title">
                                        <h4 class="mt-2 mb-3 text-ellipsis short-2" title="The Foreign and Domestic Culinary Adventures: An Art" data-bs-toggle="tooltip">The Foreign and Domestic Culinary Adventures: An Art</h4>
                                    </a>
                                    <div class="d-flex gap-3">
                                        <a href="{{route('blog.details')}}" class="iq-blog-adventure">Travel</a><span > | </span>
                                        <a href="{{route('blog.details')}}" class="iq-blog-adventure text-primary">Jenny Wilson</a>
                                    </div>
                                    <p class="my-4 text-ellipsis short-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Egestas dolor at feugiat in tempor maecenas placerat...</p>
                                    <div>
                                        <a href="{{route('blog.details')}}"  role="button" class="btn btn-primary">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div>
                <div class="d-flex justify-content-between mb-4">
                    <h3 class="mb-0">Top Categories</h3>
                    <a href="{{route('blog.details')}}" class="text-body">View All</a>
                </div>
                <div class="row row-cols-1 row-cols-md-2">
                    <div class="col">
                        <div class="card">
                            <div class="card-body card-thumbnail">
                                <img src="{{asset('modules/blog/images/blog-dashboard/09.png')}}" class="img-fluid object-cover iq-top-categories" alt="Top-Categories" loading="lazy">
                                <div class="text-center">
                                    <h5 class="text-ellipsis short-1">Food</h5>
                                    <small>6542 Post</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <div class="card-body card-thumbnail">
                                <img src="{{asset('modules/blog/images/blog-dashboard/10.png')}}" class="img-fluid object-cover iq-top-categories" alt="01" loading="lazy">
                                <div class="text-center">
                                    <h5 class="text-ellipsis short-1">Travel</h5>
                                    <small>3545 Post</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <div class="card-body card-thumbnail">
                                <img src="{{asset('modules/blog/images/blog-dashboard/11.png')}}" class="img-fluid object-cover iq-top-categories" alt="01" loading="lazy">
                                <div class="text-center">
                                    <h5 class="text-ellipsis short-1">Workspace</h5>
                                    <small>1565 Post</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <div class="card-body card-thumbnail">
                                <img src="{{asset('modules/blog/images/blog-dashboard/12.png')}}" class="img-fluid object-cover iq-top-categories" alt="01" loading="lazy">
                                <div class="text-center">
                                    <h5 class="text-ellipsis short-1">Photography</h5>
                                    <small>8985 Post</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Suggested Writers For You</h4>
                </div>
                <div class="card-body d-flex flex-column gap-4">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="d-flex align-items-center gap-3">
                            <img class="img-fluid avatar-50 rounded-circle" src="{{asset('modules/blog/images/blog-avatar/02.png')}}" alt="01" loading="lazy" />
                            <div>
                                <h6>Jane Cooper</h6>
                                <small class="text-ellipsis short-1">Lorem ipsum dolor consectetur sit amet.</small>
                            </div>
                        </div>
                        <div class="d-flex gap-2">
                            <svg class="icon-18" width="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M10.1043 1.17701L11.9317 4.82776C12.1108 5.18616 12.4565 5.43467 12.8573 5.49218L16.9453 6.08062C17.9554 6.22644 18.3573 7.45054 17.6263 8.15194L14.6702 10.9924C14.3797 11.2718 14.2474 11.6733 14.3162 12.0676L15.0138 16.0778C15.1856 17.0698 14.1298 17.8267 13.227 17.3574L9.57321 15.4627C9.21502 15.2768 8.78602 15.2768 8.42679 15.4627L4.773 17.3574C3.87023 17.8267 2.81439 17.0698 2.98724 16.0778L3.68385 12.0676C3.75257 11.6733 3.62033 11.2718 3.32982 10.9924L0.37368 8.15194C-0.357285 7.45054 0.0446417 6.22644 1.05466 6.08062L5.14265 5.49218C5.54354 5.43467 5.89028 5.18616 6.06937 4.82776L7.89574 1.17701C8.34765 0.274331 9.65235 0.274331 10.1043 1.17701Z" fill="#FFD329"/>
                            </svg> 2.5
                        </div>
                    </div>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="d-flex align-items-center gap-3">
                            <img class="img-fluid avatar-50 rounded-circle" src="{{asset('modules/blog/images/blog-avatar/03.png')}}" alt="01" loading="lazy" />
                            <div>
                                <h6>Wade Warren</h6>
                                <small class="text-ellipsis short-1">Lorem ipsum dolor consectetur sit amet.</small>
                            </div>
                        </div>
                        <div class="d-flex gap-2">
                            <svg class="icon-18" width="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M10.1043 1.17701L11.9317 4.82776C12.1108 5.18616 12.4565 5.43467 12.8573 5.49218L16.9453 6.08062C17.9554 6.22644 18.3573 7.45054 17.6263 8.15194L14.6702 10.9924C14.3797 11.2718 14.2474 11.6733 14.3162 12.0676L15.0138 16.0778C15.1856 17.0698 14.1298 17.8267 13.227 17.3574L9.57321 15.4627C9.21502 15.2768 8.78602 15.2768 8.42679 15.4627L4.773 17.3574C3.87023 17.8267 2.81439 17.0698 2.98724 16.0778L3.68385 12.0676C3.75257 11.6733 3.62033 11.2718 3.32982 10.9924L0.37368 8.15194C-0.357285 7.45054 0.0446417 6.22644 1.05466 6.08062L5.14265 5.49218C5.54354 5.43467 5.89028 5.18616 6.06937 4.82776L7.89574 1.17701C8.34765 0.274331 9.65235 0.274331 10.1043 1.17701Z" fill="#FFD329"/>
                            </svg> 5.0
                        </div>
                    </div>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="d-flex align-items-center gap-3">
                            <img class="img-fluid avatar-50 rounded-circle" src="{{asset('modules/blog/images/blog-avatar/04.png')}}" alt="01" loading="lazy" />
                            <div>
                                <h6>Jacob Jones</h6>
                                <small class="text-ellipsis short-1">Lorem ipsum dolor consectetur sit amet.</small>
                            </div>
                        </div>
                        <div class="d-flex gap-2">
                            <svg class="icon-18" width="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M10.1043 1.17701L11.9317 4.82776C12.1108 5.18616 12.4565 5.43467 12.8573 5.49218L16.9453 6.08062C17.9554 6.22644 18.3573 7.45054 17.6263 8.15194L14.6702 10.9924C14.3797 11.2718 14.2474 11.6733 14.3162 12.0676L15.0138 16.0778C15.1856 17.0698 14.1298 17.8267 13.227 17.3574L9.57321 15.4627C9.21502 15.2768 8.78602 15.2768 8.42679 15.4627L4.773 17.3574C3.87023 17.8267 2.81439 17.0698 2.98724 16.0778L3.68385 12.0676C3.75257 11.6733 3.62033 11.2718 3.32982 10.9924L0.37368 8.15194C-0.357285 7.45054 0.0446417 6.22644 1.05466 6.08062L5.14265 5.49218C5.54354 5.43467 5.89028 5.18616 6.06937 4.82776L7.89574 1.17701C8.34765 0.274331 9.65235 0.274331 10.1043 1.17701Z" fill="#FFD329"/>
                            </svg> 3.5
                        </div>
                    </div>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="d-flex align-items-center gap-3">
                            <img class="img-fluid avatar-50 rounded-circle" src="{{asset('modules/blog/images/blog-avatar/05.png')}}" alt="01" loading="lazy" />
                            <div>
                                <h6>Cody Fisher</h6>
                                <small class="text-ellipsis short-1">Lorem ipsum dolor consectetur sit amet.</small>
                            </div>
                        </div>
                        <div class="d-flex gap-2">
                            <svg class="icon-18" width="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M10.1043 1.17701L11.9317 4.82776C12.1108 5.18616 12.4565 5.43467 12.8573 5.49218L16.9453 6.08062C17.9554 6.22644 18.3573 7.45054 17.6263 8.15194L14.6702 10.9924C14.3797 11.2718 14.2474 11.6733 14.3162 12.0676L15.0138 16.0778C15.1856 17.0698 14.1298 17.8267 13.227 17.3574L9.57321 15.4627C9.21502 15.2768 8.78602 15.2768 8.42679 15.4627L4.773 17.3574C3.87023 17.8267 2.81439 17.0698 2.98724 16.0778L3.68385 12.0676C3.75257 11.6733 3.62033 11.2718 3.32982 10.9924L0.37368 8.15194C-0.357285 7.45054 0.0446417 6.22644 1.05466 6.08062L5.14265 5.49218C5.54354 5.43467 5.89028 5.18616 6.06937 4.82776L7.89574 1.17701C8.34765 0.274331 9.65235 0.274331 10.1043 1.17701Z" fill="#FFD329"/>
                            </svg> 4.8
                        </div>
                    </div>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="d-flex align-items-center gap-3">
                            <img class="img-fluid avatar-50 rounded-circle" src="{{asset('modules/blog/images/blog-avatar/06.png')}}" alt="01" loading="lazy" />
                            <div>
                                <h6>Dianne Russell</h6>
                                <small class="text-ellipsis short-1">Lorem ipsum dolor consectetur sit amet.</small>
                            </div>
                        </div>
                        <div class="d-flex gap-2">
                            <svg class="icon-18" width="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M10.1043 1.17701L11.9317 4.82776C12.1108 5.18616 12.4565 5.43467 12.8573 5.49218L16.9453 6.08062C17.9554 6.22644 18.3573 7.45054 17.6263 8.15194L14.6702 10.9924C14.3797 11.2718 14.2474 11.6733 14.3162 12.0676L15.0138 16.0778C15.1856 17.0698 14.1298 17.8267 13.227 17.3574L9.57321 15.4627C9.21502 15.2768 8.78602 15.2768 8.42679 15.4627L4.773 17.3574C3.87023 17.8267 2.81439 17.0698 2.98724 16.0778L3.68385 12.0676C3.75257 11.6733 3.62033 11.2718 3.32982 10.9924L0.37368 8.15194C-0.357285 7.45054 0.0446417 6.22644 1.05466 6.08062L5.14265 5.49218C5.54354 5.43467 5.89028 5.18616 6.06937 4.82776L7.89574 1.17701C8.34765 0.274331 9.65235 0.274331 10.1043 1.17701Z" fill="#FFD329"/>
                            </svg> 2.4
                        </div>
                    </div>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="d-flex align-items-center gap-3">
                            <img class="img-fluid avatar-50 rounded-circle" src="{{asset('modules/blog/images/blog-avatar/04.png')}}" alt="01" loading="lazy" />
                            <div>
                                <h6>Jacob Jones</h6>
                                <small class="text-ellipsis short-1">Lorem ipsum dolor consectetur sit amet.</small>
                            </div>
                        </div>
                        <div class="d-flex gap-2">
                            <svg class="icon-18" width="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M10.1043 1.17701L11.9317 4.82776C12.1108 5.18616 12.4565 5.43467 12.8573 5.49218L16.9453 6.08062C17.9554 6.22644 18.3573 7.45054 17.6263 8.15194L14.6702 10.9924C14.3797 11.2718 14.2474 11.6733 14.3162 12.0676L15.0138 16.0778C15.1856 17.0698 14.1298 17.8267 13.227 17.3574L9.57321 15.4627C9.21502 15.2768 8.78602 15.2768 8.42679 15.4627L4.773 17.3574C3.87023 17.8267 2.81439 17.0698 2.98724 16.0778L3.68385 12.0676C3.75257 11.6733 3.62033 11.2718 3.32982 10.9924L0.37368 8.15194C-0.357285 7.45054 0.0446417 6.22644 1.05466 6.08062L5.14265 5.49218C5.54354 5.43467 5.89028 5.18616 6.06937 4.82776L7.89574 1.17701C8.34765 0.274331 9.65235 0.274331 10.1043 1.17701Z" fill="#FFD329"/>
                            </svg> 3.5
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row row-cols-1">
        <div class="d-flex pb-4 align-items-center justify-content-between">
            <h4 class="mb-0">Upcoming Blogs</h4>
            <a href="{{route('blog.details')}}" class="text-body">View All</a>
        </div>
        <div class="overflow-hidden upcoming-blog-slider position-relative slider-circle-btn">
            <ul class="p-0 m-0 mb-4 swiper-wrapper list-inline">
                <li class="swiper-slide card-slide">
                    <div class="card mb-0">
                        <div class="card-body card-thumbnail">
                            <div class="d-flex align-items-center iq-upcoming-blogs gap-3">
                                <img src="{{asset('modules/blog/images/blog-dashboard/02.png')}}" alt="02" class="img-fluid object-cover rounded" loading="lazy">
                                <div class="d-flex flex-column justify-content-center">
                                    <small class="text-primary">
                                        14 Dec 2021
                                    </small>
                                    <a href="../blog/blog-detail.html" class="iq-title">
                                        <h4 class="mt-2 mb-3 text-ellipsis short-1" title="How to Make Green Bean" data-bs-toggle="tooltip">How to Make Green Bean</h4>
                                    </a>
                                    <div class="d-flex mb-4 gap-2">
                                        <a href="{{route('blog.details')}}" title="Food" data-bs-toggle="tooltip" class="iq-blog-adventure text-ellipsis short-1">Food</a><span> | </span>
                                        <a href="{{route('blog.details')}}" title="Simmons" data-bs-toggle="tooltip" class="iq-blog-adventure text-ellipsis short-1 text-primary">Simmons</a>
                                    </div>
                                    <div>
                                        <button type="button" class="btn btn-primary">Notify Me</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>                <li class="swiper-slide card-slide">
                    <div class="card mb-0">
                        <div class="card-body card-thumbnail">
                            <div class="d-flex align-items-center iq-upcoming-blogs gap-3">
                                <img src="{{asset('modules/blog/images/blog-dashboard/03.png')}}" alt="02" class="img-fluid object-cover rounded" loading="lazy">
                                <div class="d-flex flex-column justify-content-center">
                                    <small class="text-primary">
                                        20 Dec 2021
                                    </small>
                                    <a href="../blog/blog-detail.html" class="iq-title">
                                        <h4 class="mt-2 mb-3 text-ellipsis short-1" title="Curious About Vegan Skincare?" data-bs-toggle="tooltip">Curious About Vegan Skincare?</h4>
                                    </a>
                                    <div class="d-flex mb-4 gap-2">
                                        <a href="{{route('blog.details')}}" title="Lifestyle" data-bs-toggle="tooltip" class="iq-blog-adventure text-ellipsis short-1">Lifestyle</a><span> | </span>
                                        <a href="{{route('blog.details')}}" title="Jenny Wilson" data-bs-toggle="tooltip" class="iq-blog-adventure text-ellipsis short-1 text-primary">Jenny Wilson</a>
                                    </div>
                                    <div>
                                        <button type="button" class="btn btn-primary">Notify Me</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>                <li class="swiper-slide card-slide">
                    <div class="card mb-0">
                        <div class="card-body card-thumbnail">
                            <div class="d-flex align-items-center iq-upcoming-blogs gap-3">
                                <img src="{{asset('modules/blog/images/blog-dashboard/04.png')}}" alt="02" class="img-fluid object-cover rounded" loading="lazy">
                                <div class="d-flex flex-column justify-content-center">
                                    <small class="text-primary">
                                        20 Dec 2021
                                    </small>
                                    <a href="../blog/blog-detail.html" class="iq-title">
                                        <h4 class="mt-2 mb-3 text-ellipsis short-1" title="Foods for a Healthy System" data-bs-toggle="tooltip">Foods for a Healthy System</h4>
                                    </a>
                                    <div class="d-flex mb-4 gap-2">
                                        <a href="{{route('blog.details')}}" title="Health" data-bs-toggle="tooltip" class="iq-blog-adventure text-ellipsis short-1">Health</a><span> | </span>
                                        <a href="{{route('blog.details')}}" title="Jane cooper" data-bs-toggle="tooltip" class="iq-blog-adventure text-ellipsis short-1 text-primary">Jane cooper</a>
                                    </div>
                                    <div>
                                        <button type="button" class="btn btn-primary">Notify Me</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="swiper-slide card-slide">
                    <div class="card mb-0">
                        <div class="card-body card-thumbnail">
                            <div class="d-flex align-items-center iq-upcoming-blogs gap-3">
                                <img src="{{asset('modules/blog/images/blog-dashboard/02.png')}}" alt="02" class="img-fluid object-cover rounded" loading="lazy">
                                <div class="d-flex flex-column justify-content-center">
                                    <small class="text-primary">
                                        14 Dec 2021
                                    </small>
                                    <a href="../blog/blog-detail.html" class="iq-title">
                                        <h4 class="mt-2 mb-3 text-ellipsis short-1" title="How to Make Green Bean" data-bs-toggle="tooltip">How to Make Green Bean</h4>
                                    </a>
                                    <div class="d-flex mb-4 gap-2">
                                        <a href="{{route('blog.details')}}" title="Food" data-bs-toggle="tooltip" class="iq-blog-adventure text-ellipsis short-1">Food</a><span> | </span>
                                        <a href="{{route('blog.details')}}" title="Simmons" data-bs-toggle="tooltip" class="iq-blog-adventure text-ellipsis short-1 text-primary">Simmons</a>
                                    </div>
                                    <div>
                                        <button type="button" class="btn btn-primary">Notify Me</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>                <li class="swiper-slide card-slide">
                    <div class="card mb-0">
                        <div class="card-body card-thumbnail">
                            <div class="d-flex align-items-center iq-upcoming-blogs gap-3">
                                <img src="{{asset('modules/blog/images/blog-dashboard/03.png')}}" alt="02" class="img-fluid object-cover rounded" loading="lazy">
                                <div class="d-flex flex-column justify-content-center">
                                    <small class="text-primary">
                                        20 Dec 2021
                                    </small>
                                    <a href="{{route('blog.details')}}" class="iq-title">
                                        <h4 class="mt-2 mb-3 text-ellipsis short-1" title="Curious About Vegan Skincare?" data-bs-toggle="tooltip">Curious About Vegan Skincare?</h4>
                                    </a>
                                    <div class="d-flex mb-4 gap-2">
                                        <a href="{{route('blog.details')}}" title="Lifestyle" data-bs-toggle="tooltip" class="iq-blog-adventure text-ellipsis short-1">Lifestyle</a><span> | </span>
                                        <a href="{{route('blog.details')}}" title="Jenny Wilson" data-bs-toggle="tooltip" class="iq-blog-adventure text-ellipsis short-1 text-primary">Jenny Wilson</a>
                                    </div>
                                    <div>
                                        <button type="button" class="btn btn-primary">Notify Me</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>            </ul>
            <div class="swiper-button swiper-button-next"></div>
            <div class="swiper-button swiper-button-prev"></div>
        </div>
    </div>
</div>

</x-app-layout>
