<x-app-layout layout="landing" :isHeader1=true>
    <div class="banner-one-app">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-6 inner-box">
                    <h1 class="text-secondary mb-4">Online Selling <br><span class="text-primary">Made Simple</span></h1>
                    <p class="mb-4">Start Your Online Journy In few clicks and showcase and sell your products. No
                        technical
                        knowledge needed.</p>
                    <a hrer="javascript" class="btn btn-primary mt-2">Try It For Free</a>
                </div>
                <div class="col-md-12 col-lg-6 banner-one-img">
                    <img src="{{ asset('images/landing-pages/images/home-2/banner-right.webp') }}" alt=""
                        class="img-fluid ">
                </div>
            </div>
        </div>
    </div>
    <div class="section-padding bg-secondary">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <img src="{{ asset('images/landing-pages/images/home-2/01.png') }}" alt=""
                        class="img-fluid ">
                </div>
                <div class="col-md-6 mt-4 mt-md-0">
                    <p class="mb-2 text-white text-uppercase">
                        about us
                    </p>
                    <h2 class="text-white mb-4">The Greatest Venture That You can have</h2>
                    <p class="mb-4 text-white">Start Your Online Journy In few clicks and showcase and sell your
                        products.
                        No technical knowledge needed.</p>
                    <a hrer="javascript" class="btn btn-primary mt-2">Try It For Free</a>
                </div>
            </div>
        </div>
    </div>
    <div class="section-card-padding bg-white">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-12 text-center">
                    <p class="mb-3 text-primary">
                        HOW IT WORKS
                    </p>
                    <h2 class="mb-4 text-secondary">Go Big <span class="text-primary">With Hope</span> </h2>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card workbox">
                        <div class="card-body">
                            <h5 class="mb-4">Sign Up/ Sign In</h5>
                            <p class="mb-0">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Diam et placerat tellus dui. A
                                tellus vitae est ullamcorper quisque nulla adipiscing. Turpis nunc et dignissim volutpat
                                pulvinar pellentesque quis sed. Dignissim lobortis nunc lectus nulla viverra at posuere
                                amet.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="mb-4">Introduce your Products</h5>
                            <p class="mb-0">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Diam et placerat tellus dui. A
                                tellus vitae est ullamcorper quisque nulla adipiscing. Turpis nunc et dignissim volutpat
                                pulvinar pellentesque quis sed. Dignissim lobortis nunc lectus nulla viverra at posuere
                                amet.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="mb-4">Start Selling!</h5>
                            <p class="mb-0">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Diam et placerat tellus dui. A
                                tellus vitae est ullamcorper quisque nulla adipiscing. Turpis nunc et dignissim volutpat
                                pulvinar pellentesque quis sed. Dignissim lobortis nunc lectus nulla viverra at posuere
                                amet.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section-padding page-bg">
        <div class="container">
            <div class="row align-items-center text-center row-cols-2 row-cols-sm-2 row-cols-md-2 row-cols-lg-4">
                <div class="col mb-lg-0 mb-4">
                    <x-landing-pages.widgets.counter couterVlue="3" counterTitle="Best Designer Award" />
                </div>
                <div class="col mb-lg-0 mb-4">
                    <x-landing-pages.widgets.counter couterVlue="50+" counterTitle="Loyal Clients" />
                </div>
                <div class="col">
                    <x-landing-pages.widgets.counter couterVlue="158+" counterTitle="Nominee Awards" />
                </div>
                <div class="col">
                    <x-landing-pages.widgets.counter couterVlue="92+" counterTitle="CSS Designs" />
                </div>
            </div>
        </div>
    </div>
    <div class="section-padding bg-white">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="card card-transparent auth-card  d-flex justify-content-center mb-0">
                        <div class="card-body">
                            <a href="{{ route('landing-pages.index') }}"
                                class="navbar-brand d-flex align-items-center">
                                <x-landing-pages.partials.logo color="true" />
                                <h5 class="logo-title ms-3">{{ env('APP_NAME') }}</h5>
                            </a>
                            <h4 class="mb-2 text-center">Sign Up</h4>
                            <p class="text-center">Create your {{ env('APP_NAME') }} account.</p>
                            <form>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="full-name" class="form-label">Full Name</label>
                                            <input type="text" class="form-control" id="full-name" placeholder=" ">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="last-name" class="form-label">Last Name</label>
                                            <input type="text" class="form-control" id="last-name" placeholder=" ">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="email" class="form-label">Email</label>
                                            <input type="email" class="form-control" id="email" placeholder=" ">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="phone" class="form-label">Phone No.</label>
                                            <input type="text" class="form-control" id="phone"
                                                placeholder=" ">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="password" class="form-label">Password</label>
                                            <input type="password" class="form-control" id="password"
                                                placeholder=" ">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="confirm-password" class="form-label">Confirm Password</label>
                                            <input type="text" class="form-control" id="confirm-password"
                                                placeholder=" ">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 d-flex justify-content-center">
                                        <div class="form-check mb-3">
                                            <input type="checkbox" class="form-check-input" id="customCheck1">
                                            <label class="form-check-label" for="customCheck1">I agree with the terms
                                                of
                                                use</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-center">
                                    <button type="submit" class="btn btn-primary">Sign Up</button>
                                </div>
                                <p class="text-center my-3">or sign in with other accounts?</p>
                                <div class="d-flex justify-content-center">
                                    <ul class="list-group list-group-horizontal list-group-flush">
                                        <li class="list-group-item border-0 pb-0">
                                            <a href="#"><img
                                                    src="{{ asset('images/landing-pages/images/brands/fb.svg') }}"
                                                    alt="fb"></a>
                                        </li>
                                        <li class="list-group-item border-0 pb-0">
                                            <a href="#"><img
                                                    src="{{ asset('images/landing-pages/images/brands/gm.svg') }}"
                                                    alt="gm"></a>
                                        </li>
                                        <li class="list-group-item border-0 pb-0">
                                            <a href="#"><img
                                                    src="{{ asset('images/landing-pages/images/brands/im.svg') }}"
                                                    alt="im"></a>
                                        </li>
                                        <li class="list-group-item border-0 pb-0">
                                            <a href="#"><img
                                                    src="{{ asset('images/landing-pages/images/brands/li.svg') }}"
                                                    alt="li"></a>
                                        </li>
                                    </ul>
                                </div>
                                <p class="mt-3 text-center">
                                    Already have an Account <a href="{{route('animated.signin')}}" class="text-underline">Sign In</a>
                                </p>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mt-4 mb-mt-0">
                    <h2 class="mb-4">Register Your Store <br>Online In <span class="text-primary">Few steps</span></h2>
                    <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Dolor, sociis amet lacus
                        scelerisque id integer magnis porta. Est in erat ut congue vitae amet donec. Id fringilla morbi
                        mi
                        turpis integer velit ac.</p>
                    <a href="#" class="btn btn-primary mt-2">Know More</a>
                </div>
            </div>
        </div>
    </div>
    <div class="section-padding page-bg">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12 text-center">
                    <p class="mb-3 text-primary text-uppercase">kickstarter</p>
                    <h2 class="mb-4 text-secondary">You Can Start <span class="text-primary">From Here</span></h2>
                </div>
                <div class="col-lg-4 col-md-4 mb-4 mb-md-0">
                    <img src="{{ asset('images/landing-pages/images/home-2/theme-slaint.webp') }}" alt=""
                        class="img-fluid mb-3">
                    <h5 class="mb-0 text-center">Slainte</h5>
                </div>
                <div class="col-lg-4 col-md-4 mb-4 mb-md-0">
                    <img src="{{ asset('images/landing-pages/images/home-2/theme-qreate.webp') }}" alt=""
                        class="img-fluid mb-3">
                    <h5 class="mb-0 text-center">Qreate</h5>
                </div>
                <div class="col-lg-4 col-md-4">
                    <img src="{{ asset('images/landing-pages/images/home-2/theme-ephoria.webp') }}" alt=""
                        class="img-fluid mb-3">
                    <h5 class="mb-0 text-center">Euphoria</h5>
                </div>
                <div class="col-lg-4 col-md-4 title-top">
                    <img src="{{ asset('images/landing-pages/images/home-2/theme-sound.webp') }}" alt=""
                        class="img-fluid mb-3">
                    <h5 class="mb-0 text-center">SoundNation</h5>
                </div>
                <div class="col-lg-4 col-md-4 title-top">
                    <img src="{{ asset('images/landing-pages/images/home-2/theme-allora.webp') }}" alt=""
                        class="img-fluid mb-3">
                    <h5 class="mb-0 text-center">Allora</h5>
                </div>
                <div class="col-lg-4 col-md-4 title-top">
                    <img src="{{ asset('images/landing-pages/images/home-2/theme-geritcht.webp') }}" alt=""
                        class="img-fluid mb-3">
                    <h5 class="mb-0 text-center">Gericht</h5>
                </div>
            </div>
        </div>
    </div>
    <div class="section-card-padding">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12 text-center">
                    <p class="mb-3 text-primary text-uppercase">Reviews</p>
                    <h2 class="mb-4 text-secondary">What our <span class="text-primary">Customer’s are saying</span></h2>
                </div>
                <div class="overflow-hidden slider-circle-btn" id="testimonial-one-slider">
                    <ul class="p-0 m-0 swiper-wrapper list-inline">
                        <li class="swiper-slide card-slide card overflow-hidden">
                            <x-landing-pages.widgets.testimonial-one testTitle="A true game changer."
                                testText="“Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vitae, eget condimentum
                        luctus nec nec tellus sem sed. Diam elementum tellus posuere ipsum tortor.”"
                                testUser="user-1.jpg" userTitle="Eleen Rogers" Id="01" />
                        </li>
                        <li class="swiper-slide card-slide card overflow-hidden">
                            <x-landing-pages.widgets.testimonial-one testTitle="Best you can Get"
                                testText="“Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vitae, eget condimentum
                        luctus nec nec tellus sem sed. Diam elementum tellus posuere ipsum tortor.”"
                                testUser="user-2.jpg" userTitle="Brooklyn Simmons" Id="02" />
                        </li>
                        <li class="swiper-slide card-slide card overflow-hidden">
                            <x-landing-pages.widgets.testimonial-one
                                testTitle="Perfect poduct for your
                        business"
                                testText="“Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vitae, eget
                        condimentum luctus nec nec tellus sem sed. Diam elementum tellus posuere ipsum tortor.”"
                                testUser="user-3.jpg" userTitle="Jenny Wilson" Id="03" />
                        </li>
                        <li class="swiper-slide card-slide card overflow-hidden">
                            <x-landing-pages.widgets.testimonial-one testTitle="A true game changer."
                                testText="“Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vitae, eget condimentum
                        luctus nec nec tellus sem sed. Diam elementum tellus posuere ipsum tortor.”"
                                testUser="user-1.jpg" userTitle="Eleen Rogers" Id="01" />
                        </li>
                        <li class="swiper-slide card-slide card overflow-hidden">
                            <x-landing-pages.widgets.testimonial-one testTitle="Best you can Get"
                                testText="“Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vitae, eget condimentum
                        luctus nec nec tellus sem sed. Diam elementum tellus posuere ipsum tortor.”"
                                testUser="user-2.jpg" userTitle="Brooklyn Simmons" Id="02" />
                        </li>
                        <li class="swiper-slide card-slide card overflow-hidden">
                            <x-landing-pages.widgets.testimonial-one
                                testTitle="Perfect poduct for your
                        business"
                                testText="“Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vitae, eget
                        condimentum luctus nec nec tellus sem sed. Diam elementum tellus posuere ipsum tortor.”"
                                testUser="user-3.jpg" userTitle="Jenny Wilson" Id="03" />
                        </li>
                    </ul>
                    <div class="swiper-button swiper-button-next"></div>
                    <div class="swiper-button swiper-button-prev"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="inner-box bg-secondary">
        <div class="container">
            <div class="row row-cols-2 row-cols-sm-2 row-cols-md-5 align-items-center ">
                <div class="col mb-4 mb-md-0 ">
                    <x-landing-pages.widgets.client clientImage="07.png" />
                </div>
                <div class="col mb-4 mb-md-0 ">
                    <x-landing-pages.widgets.client clientImage="08.png" />
                </div>
                <div class="col mb-4 mb-md-0 ">
                    <x-landing-pages.widgets.client clientImage="09.png" />
                </div>
                <div class="col mb-4 mb-md-0 ">
                    <x-landing-pages.widgets.client clientImage="10.png" />
                </div>
                <div class="col">
                    <x-landing-pages.widgets.client clientImage="11.png" />
                </div>
            </div>
        </div>
    </div>
    <div class="section-padding bg-white">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12 text-center">
                    <p class="mb-3 text-primary text-uppercase">Pricing</p>
                    <h2 class="mb-4 text-secondary">Our <span class="text-primary">Price Plans</span></h2>
                </div>
            </div>
            <div class="row iq-star-inserted row-cols-1 row-cols-md-3 row-cols-lg-3  text-center">
                <div class="col iq-star-inserted-1">
                    <div class="card my-5 page-bg">
                        <div class="card-body">
                            <h5 class="my-0 fw-normal mb-4">Enterprise</h5>
                            <h5 class="card-title pricing-card-title mb-3"><span class="text-primary">$29</span>/month
                            </h5>
                            <p class="mb-0 text-dark">Billed Yearly</p>
                            <p class="text-dark">$169.99 Billed Monthly</p>
                            <ul class="list-unstyled my-3 p-0">
                                <li>
                                    <p>30 users included</p>
                                </li>
                                <li>
                                    <p>15GB of storage</p>
                                </li>
                                <li>
                                    <p>Call and email support</p>
                                </li>
                                <li>
                                    <p class="text-decoration-line-through">Help center access</p>
                                </li>
                                <li>
                                    <p class="text-decoration-line-through">Help center access</p>
                                </li>
                                <li>
                                    <p class="text-decoration-line-through">Help center access</p>
                                </li>
                            </ul>
                            <button type="button" class="btn btn-light w-100">Get Started</button>
                        </div>
                    </div>
                </div>
                <div class="col iq-star-inserted-2">
                    <div class="card mb-0 shadow-lg bg-white">
                        <div class="card-body">
                            <h5 class="my-0 fw-normal mb-4">Pro</h5>
                            <h5 class="card-title pricing-card-title mb-3"><span class="text-primary">$15</span>/month
                            </h5>
                            <p class="mb-0 text-dark">Billed Yearly</p>
                            <p class=" text-dark">$169.99 Billed Monthly</p>
                            <ul class="list-unstyled my-3 p-0">
                                <li>
                                    <p class="mb-4">20 users included</p>
                                </li>
                                <li>
                                    <p class="mb-4">10 GB of storage</p>
                                </li>
                                <li>
                                    <p class="mb-4">Priority email support</p>
                                </li>
                                <li>
                                    <p class="mb-4">Help center access</p>
                                </li>
                                <li>
                                    <p class="mb-4">Help center access</p>
                                </li>
                                <li>
                                    <p class="mb-4">Help center access</p>
                                </li>
                            </ul>
                            <button type="button" class="btn btn-primary">Get Started</button>
                        </div>
                    </div>
                </div>
                <div class="col iq-star-inserted-3">
                    <div class="card my-5 page-bg">
                        <div class="card-body">
                            <h5 class="my-0 fw-normal mb-4">Premium</h5>
                            <h5 class="card-title pricing-card-title mb-3"><span class="text-primary">$49</span>/month
                            </h5>
                            <p class="mb-0 text-dark">Billed Yearly</p>
                            <p class=" text-dark">$169.99 Billed Monthly</p>
                            <ul class="list-unstyled my-3 p-0">
                                <li>
                                    <p>30 users included</p>
                                </li>
                                <li>
                                    <p>15GB of storage</p>
                                </li>
                                <li>
                                    <p>Call and email support</p>
                                </li>
                                <li>
                                    <p>Help center access</p>
                                </li>
                                <li>
                                    <p class="text-decoration-line-through">Help center access</p>
                                </li>
                                <li>
                                    <p class="text-decoration-line-through">Help center access</p>
                                </li>
                            </ul>
                            <button type="button" class="btn btn-light w-100">Get Started</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section-card-padding">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-12 text-center">
                    <p class="mb-3 text-uppercase text-primary">
                        Blog
                    </p>
                    <h2 class="text-secondary mb-4">All the <span class="text-primary">Support you Need</span></h2>
                </div>
                <div class="overflow-hidden slider-circle-btn" id="app-slider">
                    <ul class="p-0 m-0 swiper-wrapper list-inline">
                        <li class="swiper-slide card-slide card overflow-hidden">
                            <x-landing-pages.widgets.blog blogImage="home-2/02.png"
                                blogTitle="How to
                        Sell your products online easily"
                                blogText="Video" />
                        </li>
                        <li class="swiper-slide card-slide card overflow-hidden">
                            <x-landing-pages.widgets.blog blogImage="home-2/03.png"
                                blogTitle="Nike
                        sharing it’s online stratergies for everyone"
                                blogText="Video" />
                        </li>
                        <li class="swiper-slide card-slide card overflow-hidden">
                            <x-landing-pages.widgets.blog blogImage="home-2/04.png"
                                blogTitle="The
                        Expierience: Travel Tales From India and Abroad."
                                blogText="Video" />
                        </li>
                        <li class="swiper-slide card-slide card overflow-hidden">
                            <x-landing-pages.widgets.blog blogImage="home-2/02.png"
                                blogTitle="How to
                        Sell your products online easily"
                                blogText="Video" />
                        </li>
                        <li class="swiper-slide card-slide card overflow-hidden">
                            <x-landing-pages.widgets.blog blogImage="home-2/03.png"
                                blogTitle="Nike
                        sharing it’s online stratergies for everyone"
                                blogText="Video" />
                        </li>
                        <li class="swiper-slide card-slide card overflow-hidden">
                            <x-landing-pages.widgets.blog blogImage="home-2/04.png"
                                blogTitle="Generating the best online environment." blogText="Video" />
                        </li>
                    </ul>
                    <div class="swiper-button swiper-button-next"></div>
                    <div class="swiper-button swiper-button-prev"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="section-padding bg-white">
        <x-landing-pages.widgets.contact-detail />
    </div>
</x-app-layout>
