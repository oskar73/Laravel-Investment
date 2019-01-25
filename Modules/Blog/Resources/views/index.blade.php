<x-app-layout layout="blog" :assets="$assets ?? []" :isBanner="false" :isSwiperSlider="true" title='Dashboard' isDataTable='true'>

    <div class="d-flex flex-wrap justify-content-between mb-4">
        <h3 class="mb-0">Analytics Overview</h3>
        <div class="dropdown">
            <a href="#" class="text-gray dropdown-toggle" id="dropdownMenuButton22" data-bs-toggle="dropdown" aria-expanded="false">Last 30 Days</a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton22">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6 col-xl-3 col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="text-center">
                        <h2 class="text-primary mb-3">862.2k</h2>
                        <p class="text-dark">Last 7 Days Follower Growth</p>
                        <small>
                            <span class="text-danger">10% </span>
                            <span class="text-dark">Decrease from last week</span>
                        </small>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-xl-3 col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="text-center">
                        <h2 class="text-primary mb-3">4.1M</h2>
                        <p class="text-dark">Last 30 Days Follower Growth</p>
                        <small>
                            <span class="text-danger">24% </span>
                            <span class="text-dark">Decrease from last week</span>
                        </small>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-xl-3 col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="text-center">
                        <h2 class="text-primary mb-3">143.7k</h2>
                        <p class="text-dark">Average Daily Growth</p>
                        <small>
                            <span class="text-success">10% </span>
                            <span class="text-dark">Change</span>
                        </small>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-xl-3 col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="text-center">
                        <h2 class="text-primary mb-3">4.2M</h2>
                        <p class="text-dark">Average Monthly Growth</p>
                        <small>
                            <span class="text-danger">10% </span>
                            <span class="text-dark">Change</span>
                        </small>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-8">
            <div class="card">
                <div class="flex-wrap card-header d-flex justify-content-between align-items-center">
                    <div class="header-title">
                        <h4 class="card-title">Followers</h4>
                    </div>
                    <ul class="nav nav-tabs nav-tunnel nav-slider mb-0" data-toggle="slider-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active d-flex align-items-center" data-bs-toggle="tab" data-chart="update" data-type="blog-chart-growth" data-bs-target="#blog-chart-growth" type="button" role="tab" aria-selected="true">
                                Growth
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link d-flex align-items-center" data-bs-toggle="tab" data-chart="update" data-type="blog-chart-fall" data-bs-target="#blog-chart-fall" type="button" role="tab" aria-selected="false">
                                Fall
                            </button>
                        </li>
                    </ul>
                </div>
                <div class="card-body">
                    <div id="growthChart"></div>
                </div>
            </div>
            <div class="card">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h4 class="mb-0 card-title">Users Traffic</h4>
                </div>
                <div class="card-body card-thumbnail px-0">
                    <div class="table-responsive">
                        <table class="table table-striped py-3" role="grid" data-toggle="blog_admin">
                        <thead class="bg-primary-subtle">
                                <tr class="text-dark">
                                    <th>User</th>
                                    <th>Email</th>
                                    <th>Contact no.</th>
                                    <th class="text-center">More Details</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <a href="javascript:void(0)">
                                                <div class="d-flex align-items-center gap-3">
                                                    <img class="img-fluid avatar-50 rounded-circle" src="{{asset('modules/blog/images/blog-avatar/06.png')}}" alt="profile" loading="lazy">
                                                    <div>
                                                        <span class="fw-bold">Oscar Phelps</span>
                                                        <p class="text-body mb-0">oscarp@example.com</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </td>
                                    <td class="text-center">USA</td>
                                    <td class="text-end fw-bold">13</td>
                                    <td class="text-end fw-bold">48</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <a href="javascript:void(0)">
                                                <div class="d-flex align-items-center gap-3">
                                                    <img class="img-fluid avatar-50 rounded-circle" src="{{asset('modules/blog/images/blog-avatar/02.png')}}" alt="profile">
                                                    <div>
                                                        <span class="fw-bold">Anne Hathaway</span>
                                                        <p class="text-body mb-0">anneh@example.com</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </td>
                                    <td class="text-center">UK</td>
                                    <td class="text-end fw-bold">19</td>
                                    <td class="text-end fw-bold">28</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <a href="javascript:void(0)">
                                                <div class="d-flex align-items-center gap-3">
                                                    <img class="img-fluid avatar-50 rounded-circle" src="{{asset('modules/blog/images/blog-avatar/03.png')}}" alt="profile">
                                                    <div>
                                                        <span class="fw-bold">Willow Smith</span>
                                                        <p class="text-body mb-0">willows@example.com</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </td>
                                    <td class="text-center">UK</td>
                                    <td class="text-end fw-bold">31</td>
                                    <td class="text-end fw-bold">25</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <a href="javascript:void(0)">
                                                <div class="d-flex align-items-center gap-3">
                                                    <img class="img-fluid avatar-50 rounded-circle" src="{{asset('modules/blog/images/blog-avatar/04.png')}}" alt="profile">
                                                    <div>
                                                        <span class="fw-bold">Jhon Doe</span>
                                                        <p class="text-body mb-0">jhondoe@example.com</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </td>
                                    <td class="text-center">India</td>
                                    <td class="text-end fw-bold">43</td>
                                    <td class="text-end fw-bold">65</td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th title="User">
                                        <input type="text" class="form-control form-control-sm" placeholder="User">
                                    </th>
                                    <th title="Email">
                                        <input type="text" class="form-control form-control-sm" placeholder="Email">
                                    </th>
                                    <th title="Contact-Number">
                                        <input type="text" class="form-control form-control-sm" placeholder="Contact-Number">
                                    </th>
                                    <th title="More Details">
                                        <input type="text" class="form-control form-control-sm" placeholder="More Details">
                                    </th>
                                </tr>
                                </tfoot>
                        </table>
                    </div>
                </div>
            </div>
            <div>
                <h3 class="mb-4">Trending Blogs</h3>
                <div class="overflow-hidden blog-analysis-slider position-relative slider-circle-btn trending-blogs">
                <ul class="p-0 m-0 swiper-wrapper list-inline">
                        <li class="swiper-slide card-slide">
                            <div>
                                <x-modules.blog.widgets.blog-card masonrycard="false" classname="" blogimage="app/01.png" blogdate="02 Dec 2021" blogcontent="The Expierience: Travel Tales From India and Abroad." blogcontent1="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Egestas dolor at feugiat in tempor maecenas placerat..."/>
                            </div>
                        </li>
                        <li class="swiper-slide card-slide">
                            <div>
                                <x-modules.blog.widgets.blog-card masonrycard="false" classname="" blogimage="app/02.png" blogdate="02 Dec 2021" blogcontent="The Ultimate Travel Guide: What To Do, See & Eat." blogcontent1="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Egestas dolor at feugiat in tempor maecenas placerat..."/>
                            </div>
                        </li>
                        <li class="swiper-slide card-slide">
                            <div>
                                <x-modules.blog.widgets.blog-card masonrycard="false" classname="" blogimage="app/01.png" blogdate="03 Aug 2021" blogcontent="The Expierience: The Travel From Tales From India and Abroad"  blogcontent1="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Egestas dolor at feugiat in tempor maecenas placerat..."/>
                            </div>
                        </li>
                        <li class="swiper-slide card-slide">
                            <div>
                                <x-modules.blog.widgets.blog-card masonrycard="false" classname="" blogimage="app/02.png" blogdate="02 Dec 2021" blogcontent="The Ultimate Travel Guide: What To Do, See & Eat."  blogcontent1="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Egestas dolor at feugiat in tempor maecenas placerat..."/>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card">
                <div class="card-header">
                    <h4 class="mb-0">New Visitors</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-7 col-xl-6 col-md-6">
                            <div id="blog-visitor"></div>
                        </div>
                        <div class="col-lg-5 col-xl-6 col-md-6 p-0 d-flex align-items-center justify-content-center flex-column">
                            <div class="d-flex align-items-center gap-3">
                                <h4 class="text-primary mb-0">1,293</h4>
                                <p class="mb-0">Daily</p>
                            </div>
                            <div class="d-flex align-items-center gap-3 my-4">
                                <h4 class="text-primary mb-0">10,237</h4>
                                <p class="mb-0">Monthly</p>
                            </div>
                            <div class="d-flex align-items-center gap-3">
                                <h4 class="text-primary mb-0">11,293</h4>
                                <p class="mb-0">Yearly</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Top Social Media Shared</h4>
                </div>
                <div class="card-body card-thumbnail d-flex flex-column gap-4">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="d-flex align-items-center gap-3">
                            <img class="img-fluid  avatar-50 rounded-circle" src="{{asset('modules/blog/images/blog-avatar/02.png')}}" alt="01">
                            <div>
                                <h6 class="mb-0">Facebook</h6>
                            </div>
                        </div>
                        <strong>89k</strong>
                    </div>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="d-flex align-items-center gap-3">
                            <img class="img-fluid  avatar-50 rounded-circle" src="{{asset('modules/blog/images/blog-avatar/03.png')}}" alt="01">
                            <div>
                                <h6 class="mb-0">Whatsapp</h6>
                            </div>
                        </div>
                        <strong>48k</strong>
                    </div>
                    <div class="d-flex justify-content-between align-items-center">
                    <div class="d-flex align-items-center gap-3">
                            <img class="img-fluid avatar-50 rounded-circle" src="{{asset('modules/blog/images/blog-avatar/04.png')}}" alt="01">
                            <div>
                                <h6 class="mb-0">UC Community</h6>
                            </div>
                        </div>
                        <strong>36k</strong>
                    </div>
                    <div class="d-flex justify-content-between align-items-center">
                    <div class="d-flex align-items-center gap-3">
                            <img class="img-fluid avatar-50 rounded-circle" src="{{asset('modules/blog/images/blog-avatar/05.png')}}" alt="01">
                            <div>
                                <h6 class="mb-0">Twitter</h6>
                            </div>
                        </div>
                        <strong>30k</strong>
                    </div>
                    <div class="d-flex justify-content-between align-items-center">
                    <div class="d-flex align-items-center gap-3">
                            <img class="img-fluid avatar-50 rounded-circle" src="{{asset('modules/blog/images/blog-avatar/05.png')}}" alt="01">
                            <div>
                                <h6 class="mb-0">Instagram</h6>
                            </div>
                        </div>
                        <strong>65k</strong>
                    </div>

                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h4 class="mb-0">Most Viewed Blogs</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12 col-xl-6 col-md-6">
                            <div id="blog-view-chart"></div>
                        </div>
                        <div class="col-lg-12 col-xl-6 col-md-6 p-0 d-flex align-items-center justify-content-center">
                            <div  >
                                <p>
                                    <svg width="8" class="me-2 text-primary" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="4" cy="4" r="4" fill="currentColor"/>
                                    </svg>
                                    Informative Blogs - 75%
                                </p>
                                <p>
                                    <svg width="8" class="me-2 text-info" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="4" cy="4" r="4" fill="currentColor"/>
                                    </svg>
                                    Food Blogs - 80%
                                </p>
                                <p>
                                    <svg width="8" class="me-2 text-warning" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="4" cy="4" r="4" fill="currentColor"/>
                                    </svg>
                                    Lifestyle Blogs - 85%
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <div class="d-flex align-items-center justify-content-between">
                        <h4 class="card-title">Devices</h4>
                        <div class="dropdown">
                            <svg width="20" id="dropdownMenuLink2" data-bs-toggle="dropdown" role="button" aria-expanded="false" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="3" cy="12" r="3" fill="currentColor"/>
                                <circle cx="12" cy="12" r="3" fill="currentColor"/>
                                <circle cx="21" cy="12" r="3" fill="currentColor"/>
                            </svg>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink2">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="card-body pt-0">
                    <div id="activity-chart"></div>
                    <div class="col-lg-12 p-0 d-flex align-items-center justify-content-center">
                        <div class="text-center d-flex justify-content-between">
                            <p class="mx-2">
                                <svg width="8" class="me-2 text-primary" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="4" cy="4" r="4" fill="currentColor"/>
                                </svg>
                                Mobile - 85%
                            </p>
                            <p class="mx-2">
                                <svg width="8" class="me-2 text-info" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="4" cy="4" r="4" fill="currentColor"/>
                                </svg>
                                Laptop - 50%
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>

