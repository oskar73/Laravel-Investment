<x-app-layout layout="landing" :isHeader1=true :isFooter1=false>
    <div class="inner-box bg-secondary">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <div class="mb-2 text-uppercase sub-title">
                        grow, with best
                    </div>
                    <h1 class="text-white mb-5 text-capitalize">Grow <br>Professionally <br> <span
                            class="text-primary">with
                            the Best</span> </h1>
                    <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Egestas nullam sit velit
                        nulla.
                        Sollicitudin sed tincidunt nulla sodales arcu a.</p>
                    <div class="d-flex align-items-center mb-lg-0 mb-4 pt-2">
                        <a href="#" class="btn btn-primary text-capitalize">try Free</a>
                        <a href="#" class="btn text-secondary bg-white ms-4 text-capitalize">start now</a>
                    </div>
                </div>
                <div class="col-lg-7">
                    <img src="{{ asset('modules/landing-pages/images/home-4/slider-banner.webp') }}" alt=""
                        class="img-fluid">
                </div>
            </div>
        </div>
    </div>
    <div class="section-padding bg-body">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-12">
                    <div class="mb-2 text-uppercase text-center text-primary sub-title">
                        Our trusted Partners
                    </div>
                    <h2 class=" text-capitalize mb-4 mb-lg-5 pb-4 pb-lg-5 text-center">Client <span
                            class="text-primary">
                            Solutions</span></h2>
                    <div class=" row">
                        <div class="col-xl-2 col-lg-4 col-md-4">
                            <div class="custom-icon custom-box mx-auto">
                                <img src="{{ asset('modules/landing-pages/images/home-1/12.webp') }}" alt=""
                                    class="img-fluid">
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-4 col-md-4 mt-5 mt-md-0">
                            <div class="custom-icon mx-auto ">
                                <img src="{{ asset('modules/landing-pages/images/home-1/07.webp') }}" alt=""
                                    class="img-fluid">
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-4 col-md-4 mt-5 mt-md-0">
                            <div class="custom-icon custom-box mx-auto">
                                <img src="{{ asset('modules/landing-pages/images/home-1/08.webp') }}" alt=""
                                    class="img-fluid">
                            </div>

                        </div>
                        <div class="col-xl-2 col-lg-4 col-md-4 mt-5 mt-xl-0">
                            <div class="custom-icon mx-auto">
                                <img src="{{ asset('modules/landing-pages/images/home-1/09.webp') }}" alt=""
                                    class="img-fluid">
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-4 col-md-4 mt-5 mt-xl-0">
                            <div class="custom-icon custom-box mx-auto">
                                <img src="{{ asset('modules/landing-pages/images/home-1/10.webp') }}" alt=""
                                    class="img-fluid">
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-4 col-md-4 mt-5 mt-xl-0">
                            <div class="custom-icon mx-auto">
                                <img src="{{ asset('modules/landing-pages/images/home-1/11.webp') }}" alt=""
                                    class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section-padding page-bg">
        <div class="container">
            <div class="row align-items-center mb-4 mb-lg-5">
                <div class="col-lg-6">
                    <div class="mb-2 text-uppercase text-primary sub-title">
                        about us
                    </div>
                    <h2 class=" text-capitalize mb-0">Get <span class="text-primary">Unique <br>Solutions</span> With
                        Us!
                    </h2>
                </div>
                <div class="col-lg-6">
                    <p class="mb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Elementum ac integer
                        semper sit
                        semper laoreet donec. Vitae turpis pretium placerat augue mauris, adipiscing. Risus pretium,
                        amet mi
                        fringilla gravida risus accumsan.</p>
                    <a href="#" class="btn btn-primary mt-4 mt-lg-5 mb-5 mb-lg-0">Know More</a>
                </div>
            </div>
            <div class="row align-items-center pt-4 pt-lg-5">
                <div class="col-md-8">
                    <img src="{{ asset('modules/landing-pages/images/home-4/banner-left.webp') }}" alt=""
                        class="img-fluid mb-4 mb-lg-0">
                </div>
                <div class="col-md-4">
                    <img src="{{ asset('modules/landing-pages/images/home-4/banner-right.webp') }}" alt=""
                        class="img-fluid ">
                </div>
            </div>
        </div>
    </div>
    <div class="section-padding ">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="mb-2 text-uppercase text-primary sub-title">
                        Build better &amp; Faster
                    </div>
                    <h2 class="text-secondary mb-5 text-capitalize">Make something<br>
                        <span class="text-primary">great </span> out of nothing
                    </h2>
                </div>
            </div>
            <div class="row align-items-center text-center row-cols-2 row-cols-sm-2 row-cols-md-2 row-cols-lg-4 mt-5">
                <div class="col mb-lg-0 mb-4 border-end">
                    <x-landing-pages.widgets.counter couterVlue="3" counterTitle="Best Designer Award" />
                </div>
                <div class="col mb-lg-0 mb-4 border-end">
                    <x-landing-pages.widgets.counter couterVlue="50+" counterTitle="Loyal Clients" />
                </div>
                <div class="col border-end">
                    <x-landing-pages.widgets.counter couterVlue="158+" counterTitle="Nominee Awards" />
                </div>
                <div class="col">
                    <x-landing-pages.widgets.counter couterVlue="92+" counterTitle="CSS Designs" />
                </div>
            </div>
        </div>
    </div>
    <div class="section-padding page-bg">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <div class="mb-3 text-uppercase text-primary  sub-title">
                        our services
                    </div>
                    <h2 class=" mb-5 text-secondary">Services <span class="text-primary">We Offer</span></h2>
                    <p class="mb-5">It is a long established fact that a reader will be distracted by the readable
                        content
                        of a page when looking at its layout. </p>
                    <a hrer="#" class="btn btn-primary mt-2 mb-5">Know More</a>
                    <img src="{{ asset('modules/landing-pages/images/home-4/service.webp') }}" alt=""
                        class="img-fluid mt-3">
                </div>
                <div class="col-lg-6">
                    <div class="row  row-cols-1 row-cols-lg-2 row-cols-md-2">
                        <div class="col">
                            <div class="card services-box-1 rounded-2">
                                <div class="card-body p-0">
                                    <h5 class="mb-4 text-primary">Branding</h5>
                                    <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                                    <a href="#">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card services-box-1 rounded-2">
                                <div class="card-body p-0">
                                    <h5 class="mb-4 text-primary">Design</h5>
                                    <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                                    <a href="#">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card services-box-1 rounded-2 mb-4 mb-lg-0">
                                <div class="card-body p-0">
                                    <h5 class="mb-4 text-primary">Development</h5>
                                    <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                                    <a href="#">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card services-box-1 rounded-2 mb-0">
                                <div class="card-body p-0">
                                    <h5 class="mb-4 text-primary">Marketing</h5>
                                    <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                                    <a href="#">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section-padding">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 mb-4 mb-md-0">
                    <div class="mb-2 text-uppercase text-primary sub-title">
                        Why choose us?
                    </div>
                    <h2 class=" mb-5">We Make <span class="text-primary">Your <br>Idea Come True</span></h2>
                    <p class="mb-5">Orci ipsum tempus amet libero turpis enim sed quis. Maecenas suspendisse ac
                        integer
                        orci, suspendisse nulla. Dignissim pretium enim neque facilisi faucibus magna lectus ipsum
                        feugiat.
                    </p>
                    <div class="row row-cols-1 row-cols-lg-2 ">
                        <div class="col mb-2">
                            <div class="d-flex align-items-center">
                                <svg class="me-2" xmlns="http://www.w3.org/2000/svg" width="20" height="21"
                                    viewBox="0 0 20 21" fill="none">
                                    <path
                                        d="M14.3402 0.499786H5.67024C2.28024 0.499786 0.000244141 2.87979 0.000244141 6.41979V14.5898C0.000244141 18.1198 2.28024 20.4998 5.67024 20.4998H14.3402C17.7302 20.4998 20.0002 18.1198 20.0002 14.5898V6.41979C20.0002 2.87979 17.7302 0.499786 14.3402 0.499786Z"
                                        fill="#3A57E8"></path>
                                    <path
                                        d="M8.81332 13.7479C8.58932 13.7479 8.36532 13.6629 8.19432 13.4919L5.82132 11.1189C5.47932 10.7769 5.47932 10.2229 5.82132 9.88187C6.16332 9.53987 6.71632 9.53887 7.05832 9.88087L8.81332 11.6359L12.9413 7.50787C13.2833 7.16587 13.8363 7.16587 14.1783 7.50787C14.5203 7.84987 14.5203 8.40387 14.1783 8.74587L9.43232 13.4919C9.26132 13.6629 9.03732 13.7479 8.81332 13.7479Z"
                                        fill="white"></path>
                                </svg>
                                Easy Communication
                            </div>
                        </div>
                        <div class="col mb-2">
                            <div class="d-flex align-items-center">
                                <svg class="me-2" xmlns="http://www.w3.org/2000/svg" width="20" height="21"
                                    viewBox="0 0 20 21" fill="none">
                                    <path
                                        d="M14.3402 0.499786H5.67024C2.28024 0.499786 0.000244141 2.87979 0.000244141 6.41979V14.5898C0.000244141 18.1198 2.28024 20.4998 5.67024 20.4998H14.3402C17.7302 20.4998 20.0002 18.1198 20.0002 14.5898V6.41979C20.0002 2.87979 17.7302 0.499786 14.3402 0.499786Z"
                                        fill="#3A57E8"></path>
                                    <path
                                        d="M8.81332 13.7479C8.58932 13.7479 8.36532 13.6629 8.19432 13.4919L5.82132 11.1189C5.47932 10.7769 5.47932 10.2229 5.82132 9.88187C6.16332 9.53987 6.71632 9.53887 7.05832 9.88087L8.81332 11.6359L12.9413 7.50787C13.2833 7.16587 13.8363 7.16587 14.1783 7.50787C14.5203 7.84987 14.5203 8.40387 14.1783 8.74587L9.43232 13.4919C9.26132 13.6629 9.03732 13.7479 8.81332 13.7479Z"
                                        fill="white"></path>
                                </svg>
                                Expert Advise
                            </div>
                        </div>
                        <div class="col mb-2">
                            <div class="d-flex align-items-center">
                                <svg class="me-2" xmlns="http://www.w3.org/2000/svg" width="20" height="21"
                                    viewBox="0 0 20 21" fill="none">
                                    <path
                                        d="M14.3402 0.499786H5.67024C2.28024 0.499786 0.000244141 2.87979 0.000244141 6.41979V14.5898C0.000244141 18.1198 2.28024 20.4998 5.67024 20.4998H14.3402C17.7302 20.4998 20.0002 18.1198 20.0002 14.5898V6.41979C20.0002 2.87979 17.7302 0.499786 14.3402 0.499786Z"
                                        fill="#3A57E8"></path>
                                    <path
                                        d="M8.81332 13.7479C8.58932 13.7479 8.36532 13.6629 8.19432 13.4919L5.82132 11.1189C5.47932 10.7769 5.47932 10.2229 5.82132 9.88187C6.16332 9.53987 6.71632 9.53887 7.05832 9.88087L8.81332 11.6359L12.9413 7.50787C13.2833 7.16587 13.8363 7.16587 14.1783 7.50787C14.5203 7.84987 14.5203 8.40387 14.1783 8.74587L9.43232 13.4919C9.26132 13.6629 9.03732 13.7479 8.81332 13.7479Z"
                                        fill="white"></path>
                                </svg>
                                Security Assured
                            </div>
                        </div>
                        <div class="col mb-2">
                            <div class="d-flex align-items-center">
                                <svg class="me-2" xmlns="http://www.w3.org/2000/svg" width="20" height="21"
                                    viewBox="0 0 20 21" fill="none">
                                    <path
                                        d="M14.3402 0.499786H5.67024C2.28024 0.499786 0.000244141 2.87979 0.000244141 6.41979V14.5898C0.000244141 18.1198 2.28024 20.4998 5.67024 20.4998H14.3402C17.7302 20.4998 20.0002 18.1198 20.0002 14.5898V6.41979C20.0002 2.87979 17.7302 0.499786 14.3402 0.499786Z"
                                        fill="#3A57E8"></path>
                                    <path
                                        d="M8.81332 13.7479C8.58932 13.7479 8.36532 13.6629 8.19432 13.4919L5.82132 11.1189C5.47932 10.7769 5.47932 10.2229 5.82132 9.88187C6.16332 9.53987 6.71632 9.53887 7.05832 9.88087L8.81332 11.6359L12.9413 7.50787C13.2833 7.16587 13.8363 7.16587 14.1783 7.50787C14.5203 7.84987 14.5203 8.40387 14.1783 8.74587L9.43232 13.4919C9.26132 13.6629 9.03732 13.7479 8.81332 13.7479Z"
                                        fill="white"></path>
                                </svg>
                                Pocket Friendly Prices
                            </div>
                        </div>
                    </div>
                    <a href="#" class="btn btn-primary mt-5">Know More</a>
                </div>
                <div class="col-md-6">
                    <img src="{{ asset('modules/landing-pages/images/home-4/Image-1.webp') }}" alt=""
                        class="img-fluid ">
                </div>
            </div>
        </div>
    </div>
    <div class="section-card-padding  bg-body">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-12 text-center">
                    <div class="mb-2 text-uppercase text-primary sub-title">
                        Our Projects
                    </div>
                    <h2 class="text-secondary mb-5 pb-5 text-capitalize">Some Of Our <span
                            class="text-primary">Selected
                            Projects</span></h2>
                </div>
                <div class="overflow-hidden slider-circle-btn app-slider swiper-container-initialized swiper-container-horizontal swiper-container-pointer-events"
                    id="app-slider">
                    <ul class="p-0 m-0  swiper-wrapper list-inline">
                        <li class="swiper-slide card-slide card overflow-hidden swiper-slide-active">
                            <img src="{{ asset('modules/landing-pages/images/home-4/01.webp') }}" alt="team-details"
                                class="img-fluid" loading="lazy">
                            <div class="card-body">
                                <h5 class="mb-3">Cubix</h5>
                                <p class="line-count-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    Vulputate aliquet
                                    egestas vestibulum nulla diam tortor aliquet facilisis. </p>
                                <a href="#">Read More</a>
                            </div>
                        </li>
                        <li class="swiper-slide card-slide card overflow-hidden swiper-slide-next">
                            <img src="{{ asset('modules/landing-pages/images/home-4/03.webp') }}" alt="team-details"
                                class="img-fluid" loading="lazy">
                            <div class="card-body">
                                <h5 class="mb-3">Radical Toast</h5>
                                <p class="line-count-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    Vulputate aliquet
                                    egestas vestibulum nulla diam tortor aliquet facilisis. </p>
                                <a href="#">Read More</a>
                            </div>
                        </li>
                        <li class="swiper-slide card-slide card overflow-hidden">
                            <img src="{{ asset('modules/landing-pages/images/home-4/08.webp') }}" alt="team-details"
                                class="img-fluid" loading="lazy">
                            <div class="card-body">
                                <h5 class="mb-3">Erbology</h5>
                                <p class="line-count-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    Vulputate aliquet
                                    egestas vestibulum nulla diam tortor aliquet facilisis. </p>
                                <a href="#">Read More</a>
                            </div>
                        </li>
                        <li class="swiper-slide card-slide card overflow-hidden">
                            <img src="{{ asset('modules/landing-pages/images/home-4/01.webp') }}" alt="team-details"
                                class="img-fluid" loading="lazy">
                            <div class="card-body">
                                <h5 class="mb-3">Cubix</h5>
                                <p class="line-count-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    Vulputate aliquet
                                    egestas vestibulum nulla diam tortor aliquet facilisis. </p>
                                <a href="#">Read More</a>
                            </div>
                        </li>
                        <li class="swiper-slide card-slide card overflow-hidden">
                            <img src="{{ asset('modules/landing-pages/images/home-4/03.webp') }}" alt="team-details"
                                class="img-fluid" loading="lazy">
                            <div class="card-body">
                                <h5 class="mb-3">Radical Toast</h5>
                                <p class="line-count-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    Vulputate aliquet
                                    egestas vestibulum nulla diam tortor aliquet facilisis. </p>
                                <a href="#">Read More</a>
                            </div>
                        </li>
                        <li class="swiper-slide card-slide card overflow-hidden">
                            <img src="{{ asset('modules/landing-pages/images/home-4/08.webp') }}" alt="team-details"
                                class="img-fluid" loading="lazy">
                            <div class="card-body">
                                <h5 class="mb-3">Erbology</h5>
                                <p class="line-count-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    Vulputate aliquet
                                    egestas vestibulum nulla diam tortor aliquet facilisis. </p>
                                <a href="#">Read More</a>
                            </div>
                        </li>
                    </ul>
                    <div class="swiper-button swiper-button-next" tabindex="0" role="button"
                        aria-label="Next slide" aria-controls="swiper-wrapper-10210e1110dfd602fab"
                        aria-disabled="false"></div>
                    <div class="swiper-button swiper-button-prev swiper-button-disabled" tabindex="-1"
                        role="button" aria-label="Previous slide" aria-controls="swiper-wrapper-10210e1110dfd602fab"
                        aria-disabled="true"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="section-card-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="mb-2 text-uppercase text-primary sub-title">
                        PRICE PLAN
                    </div>
                    <h2 class="text-secondary mb-4 mb-lg-5 pb-4 pb-lg-5">Some Of Our <span
                            class="text-primary">Selected
                            Projects</span>
                    </h2>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-lg-3 row-cols-md-3">
                <div class="col">
                    <div class="card pricing-card">
                        <div class="card-body">
                            <p class="mb-3 text-primary">
                                Basic
                            </p>
                            <div class="d-flex align-items-baseline  mb-3">
                                <h4 class="card-title pricing-card-title mb-0 text-primary">$25 </h4>
                                <h6 class="mb-0"> / month</h6>
                            </div>
                            <p class="border-bottom mb-0 pb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            </p>
                            <ul class="list-unstyled pt-4">
                                <li class="mb-2"><svg class="text-success me-2" width="10" height="7"
                                        viewBox="0 0 10 7" fill="none">
                                        <path
                                            d="M3.81344 6.87296C3.58944 6.87296 3.36544 6.78796 3.19444 6.61696L0.821441 4.24396C0.479441 3.90196 0.479441 3.34797 0.821441 3.00696C1.16344 2.66496 1.71644 2.66396 2.05844 3.00596L3.81344 4.76096L7.94144 0.632965C8.28344 0.290965 8.83644 0.290965 9.17844 0.632965C9.52044 0.974965 9.52044 1.52896 9.17844 1.87096L4.43244 6.61696C4.26144 6.78796 4.03744 6.87296 3.81344 6.87296Z"
                                            fill="currentColor"></path>
                                    </svg> 10 users included
                                </li>
                                <li class="mb-2"><svg class="text-success me-2" width="10" height="7"
                                        viewBox="0 0 10 7" fill="none">
                                        <path
                                            d="M3.81344 6.87296C3.58944 6.87296 3.36544 6.78796 3.19444 6.61696L0.821441 4.24396C0.479441 3.90196 0.479441 3.34797 0.821441 3.00696C1.16344 2.66496 1.71644 2.66396 2.05844 3.00596L3.81344 4.76096L7.94144 0.632965C8.28344 0.290965 8.83644 0.290965 9.17844 0.632965C9.52044 0.974965 9.52044 1.52896 9.17844 1.87096L4.43244 6.61696C4.26144 6.78796 4.03744 6.87296 3.81344 6.87296Z"
                                            fill="currentColor"></path>
                                    </svg> 2GB of storage
                                </li>
                                <li class="mb-2"><svg class="text-success me-2" width="10" height="7"
                                        viewBox="0 0 10 7" fill="none">
                                        <path
                                            d="M3.81344 6.87296C3.58944 6.87296 3.36544 6.78796 3.19444 6.61696L0.821441 4.24396C0.479441 3.90196 0.479441 3.34797 0.821441 3.00696C1.16344 2.66496 1.71644 2.66396 2.05844 3.00596L3.81344 4.76096L7.94144 0.632965C8.28344 0.290965 8.83644 0.290965 9.17844 0.632965C9.52044 0.974965 9.52044 1.52896 9.17844 1.87096L4.43244 6.61696C4.26144 6.78796 4.03744 6.87296 3.81344 6.87296Z"
                                            fill="currentColor"></path>
                                    </svg> Email support
                                </li>
                            </ul>
                            <a href="#" class="btn btn-primary w-100 mt-4">Get Started</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card pricing-card">
                        <div class="card-body">
                            <p class="mb-3">
                                Professional
                            </p>
                            <div class="d-flex  align-items-baseline  mb-3">
                                <h4 class="card-title pricing-card-title mb-0">$25 </h4>
                                <h6 class="mb-0"> / month</h6>
                            </div>
                            <p class="border-bottom pb-4 mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing
                                elit.</p>
                            <ul class="list-unstyled pt-4">
                                <li class="mb-2"><svg class="text-success me-2" width="10" height="7"
                                        viewBox="0 0 10 7" fill="none">
                                        <path
                                            d="M3.81344 6.87296C3.58944 6.87296 3.36544 6.78796 3.19444 6.61696L0.821441 4.24396C0.479441 3.90196 0.479441 3.34797 0.821441 3.00696C1.16344 2.66496 1.71644 2.66396 2.05844 3.00596L3.81344 4.76096L7.94144 0.632965C8.28344 0.290965 8.83644 0.290965 9.17844 0.632965C9.52044 0.974965 9.52044 1.52896 9.17844 1.87096L4.43244 6.61696C4.26144 6.78796 4.03744 6.87296 3.81344 6.87296Z"
                                            fill="currentColor"></path>
                                    </svg> 10 users included
                                </li>
                                <li class="mb-2"><svg class="text-success me-2" width="10" height="7"
                                        viewBox="0 0 10 7" fill="none">
                                        <path
                                            d="M3.81344 6.87296C3.58944 6.87296 3.36544 6.78796 3.19444 6.61696L0.821441 4.24396C0.479441 3.90196 0.479441 3.34797 0.821441 3.00696C1.16344 2.66496 1.71644 2.66396 2.05844 3.00596L3.81344 4.76096L7.94144 0.632965C8.28344 0.290965 8.83644 0.290965 9.17844 0.632965C9.52044 0.974965 9.52044 1.52896 9.17844 1.87096L4.43244 6.61696C4.26144 6.78796 4.03744 6.87296 3.81344 6.87296Z"
                                            fill="currentColor"></path>
                                    </svg> 2GB of storage
                                </li>
                                <li class="mb-2"><svg class="text-success me-2" width="10" height="7"
                                        viewBox="0 0 10 7" fill="none">
                                        <path
                                            d="M3.81344 6.87296C3.58944 6.87296 3.36544 6.78796 3.19444 6.61696L0.821441 4.24396C0.479441 3.90196 0.479441 3.34797 0.821441 3.00696C1.16344 2.66496 1.71644 2.66396 2.05844 3.00596L3.81344 4.76096L7.94144 0.632965C8.28344 0.290965 8.83644 0.290965 9.17844 0.632965C9.52044 0.974965 9.52044 1.52896 9.17844 1.87096L4.43244 6.61696C4.26144 6.78796 4.03744 6.87296 3.81344 6.87296Z"
                                            fill="currentColor"></path>
                                    </svg> Email support
                                </li>
                            </ul>
                            <a href="#" class="btn btn-primary w-100 mt-4">Get Started</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card pricing-card">
                        <div class="card-body">
                            <p class="mb-2 text-primary">
                                Startup
                            </p>
                            <div class="d-flex align-items-baseline  mb-3">
                                <h4 class="card-title pricing-card-title mb-0 text-primary">$99 </h4>
                                <h6 class="mb-0"> / month</h6>
                            </div>
                            <p class="border-bottom pb-4 mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            </p>
                            <ul class="list-unstyled pt-4">
                                <li class="mb-2"><svg class="text-success me-2" width="10" height="7"
                                        viewBox="0 0 10 7" fill="none">
                                        <path
                                            d="M3.81344 6.87296C3.58944 6.87296 3.36544 6.78796 3.19444 6.61696L0.821441 4.24396C0.479441 3.90196 0.479441 3.34797 0.821441 3.00696C1.16344 2.66496 1.71644 2.66396 2.05844 3.00596L3.81344 4.76096L7.94144 0.632965C8.28344 0.290965 8.83644 0.290965 9.17844 0.632965C9.52044 0.974965 9.52044 1.52896 9.17844 1.87096L4.43244 6.61696C4.26144 6.78796 4.03744 6.87296 3.81344 6.87296Z"
                                            fill="currentColor"></path>
                                    </svg> 10 users included
                                </li>
                                <li class="mb-2"><svg class="text-success me-2" width="10" height="7"
                                        viewBox="0 0 10 7" fill="none">
                                        <path
                                            d="M3.81344 6.87296C3.58944 6.87296 3.36544 6.78796 3.19444 6.61696L0.821441 4.24396C0.479441 3.90196 0.479441 3.34797 0.821441 3.00696C1.16344 2.66496 1.71644 2.66396 2.05844 3.00596L3.81344 4.76096L7.94144 0.632965C8.28344 0.290965 8.83644 0.290965 9.17844 0.632965C9.52044 0.974965 9.52044 1.52896 9.17844 1.87096L4.43244 6.61696C4.26144 6.78796 4.03744 6.87296 3.81344 6.87296Z"
                                            fill="currentColor"></path>
                                    </svg> 2GB of storage
                                </li>
                                <li class="mb-2"><svg class="text-success me-2" width="10" height="7"
                                        viewBox="0 0 10 7" fill="none">
                                        <path
                                            d="M3.81344 6.87296C3.58944 6.87296 3.36544 6.78796 3.19444 6.61696L0.821441 4.24396C0.479441 3.90196 0.479441 3.34797 0.821441 3.00696C1.16344 2.66496 1.71644 2.66396 2.05844 3.00596L3.81344 4.76096L7.94144 0.632965C8.28344 0.290965 8.83644 0.290965 9.17844 0.632965C9.52044 0.974965 9.52044 1.52896 9.17844 1.87096L4.43244 6.61696C4.26144 6.78796 4.03744 6.87296 3.81344 6.87296Z"
                                            fill="currentColor"></path>
                                    </svg> Email support
                                </li>
                            </ul>
                            <a href="#" class="btn btn-primary w-100 mt-4">Get Started</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section-card-padding page-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-9 ">
                    <div class="mb-2 text-uppercase text-primary sub-title">
                        Reviews
                    </div>
                    <h2 class="text-secondary mb-5 pb-5 text-capitalize">What Our <span
                            class="text-primary">Customer’s <br>
                            Are Saying </span> </h2>
                </div>
                <div class="col-md-3">

                </div>
                <div class="overflow-hidden slider-circle-btn swiper-container-initialized swiper-container-horizontal swiper-container-pointer-events"
                    id="testimonial-slider-two">
                    <ul class="p-0 m-0  swiper-wrapper list-inline">
                        <li class="swiper-slide card-slide card overflow-hidden swiper-slide-active">
                            <x-landing-pages.widgets.testimonial-two testImage="home-4/06.webp" Id="02"
                                testTitle="Eleen Rogers"
                                testText="“Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Vitae, eget condimentum luctus nec nec tellus sem sed. Diam elementum tellus.”" />
                        </li>
                        <li class="swiper-slide card-slide card overflow-hidden swiper-slide-next">
                            <x-landing-pages.widgets.testimonial-two testImage="home-4/07.webp" Id="01"
                                testTitle="Eleen Rogers"
                                testText="“Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Vitae, eget condimentum luctus nec nec tellus sem sed. Diam elementum tellus.”" />
                        </li>
                        <li class="swiper-slide card-slide card overflow-hidden">
                            <x-landing-pages.widgets.testimonial-two testImage="home-4/12.webp" Id="01"
                                testTitle="Eleen Rogers"
                                testText="“Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Vitae, eget condimentum luctus nec nec tellus sem sed. Diam elementum tellus.”" />
                        </li>
                        <li class="swiper-slide card-slide card overflow-hidden">
                            <x-landing-pages.widgets.testimonial-two testImage="home-4/06.webp" Id="01"
                                testTitle="Eleen Rogers"
                                testText="“Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Vitae, eget condimentum luctus nec nec tellus sem sed. Diam elementum tellus.”" />
                        </li>
                    </ul>
                    <div class="swiper-button swiper-button-next"></div>
                    <div class="swiper-button swiper-button-prev"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="section-card-padding">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-12 text-center">
                    <div class="mb-2 text-uppercase text-primary sub-title">
                        Blog
                    </div>
                    <h2 class="text-secondary mb-5 pb-5">All the <span class="text-primary">Support you Need</span>
                    </h2>
                </div>
                <div class="overflow-hidden slider-circle-btn app-slider swiper-container-initialized swiper-container-horizontal swiper-container-pointer-events"
                    id="app-slider">
                    <ul class="p-0 m-0 swiper-wrapper list-inline">
                        <li class="swiper-slide card-slide card overflow-hidden swiper-slide-active">
                            <x-landing-pages.widgets.blog blogImage="home-4/04.webp"
                                blogTitle="The
                        Expierience: Travel Tales From India and Abroad."
                                blogText="August 16,2023" Id="1" />
                        </li>
                        <li class="swiper-slide card-slide card overflow-hidden swiper-slide-next">
                            <x-landing-pages.widgets.blog blogImage="home-4/05.webp"
                                blogTitle="The
                        Expierience: Travel Tales From India and Abroad."
                                blogText="August 17,2023" Id="2" />
                        </li>
                        <li class="swiper-slide card-slide card overflow-hidden">
                            <x-landing-pages.widgets.blog blogImage="home-4/02.webp"
                                blogTitle="The
                        Expierience: Travel Tales From India and Abroad."
                                blogText="August 18,2023" Id="3" />
                        </li>
                        <li class="swiper-slide card-slide card overflow-hidden">
                            <x-landing-pages.widgets.blog blogImage="home-4/04.webp"
                                blogTitle="The
                        Expierience: Travel Tales From India and Abroad."
                                blogText="August 19,2023" Id="4" />
                        </li>
                        <li class="swiper-slide card-slide card overflow-hidden">
                            <x-landing-pages.widgets.blog blogImage="home-4/05.webp"
                                blogTitle="The
                        Expierience: Travel Tales From India and Abroad."
                                blogText="August 20,2023" Id="5" />
                        </li>
                        <li class="swiper-slide card-slide card overflow-hidden">
                            <x-landing-pages.widgets.blog blogImage="home-4/02.webp"
                                blogTitle="The
                        Expierience: Travel Tales From India and Abroad."
                                blogText="August 21,2023" Id="6" />
                        </li>
                    </ul>
                    <div class="swiper-button swiper-button-next"></div>
                    <div class="swiper-button swiper-button-prev"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="section-padding contact-banner">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-2 text-uppercase text-white sub-title">
                        Contact Us
                    </div>
                    <h2 class="text-white mb-5 pb-2">Have any query? <br> <span class="text-primary"> Get in
                            Touch.</span>
                    </h2>
                    <img src="{{ asset('modules/landing-pages/images/home-4/contact.webp') }}" alt=""
                        class="img-fluid" loading="lazy">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-5 mt-4 mt-lg-5 contact-box">
                    <div class="row">
                        <div class="form-group col-lg-6 col-md-6">
                            <label for="full-name" class="form-label text-white">Full Name</label>
                            <input type="text" class="form-control" id="full-name" placeholder="Full Name">
                        </div>
                        <div class="form-group col-lg-6 col-md-6">
                            <label for="last-name" class="form-label text-white">Last Name</label>
                            <input type="text" class="form-control" id="last-name" placeholder="Last Name">
                        </div>
                        <div class="form-group col-lg-12">
                            <label for="your-email" class="form-label text-white">Email Id</label>
                            <input type="text" class="form-control" id="your-email"
                                placeholder="You@company.com">
                        </div>
                        <div class="form-group col-lg-12">
                            <label for="phone-num" class="form-label text-white">Phone Number</label>
                            <input type="number" class="form-control" id="phone-num" placeholder="+1(555)000-0000">
                        </div>
                        <div class="form-group mb-4 col-lg-12">
                            <label class="form-label text-white">Message</label>
                            <textarea name="message" rows="10" class="form-control">    Leave Us a message...
                            </textarea>
                        </div>
                        <div class="form-group mb-4 col-lg-12">
                            <label class="form-label text-white">Services</label>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 mb-3">
                                    <input class="form-check-input" type="checkbox" value=""
                                        id="flexCheckDefault1">
                                    <label class="form-check-label text-white ms-2" for="flexCheckDefault1">
                                        Website Design
                                    </label>
                                </div>
                                <div class="col-lg-6 col-md-6 mb-3">
                                    <input class="form-check-input" type="checkbox" value=""
                                        id="flexCheckDefault2">
                                    <label class="form-check-label text-white ms-2" for="flexCheckDefault2">
                                        Content Creation
                                    </label>
                                </div>
                                <div class="col-lg-6 col-md-6 mb-3">
                                    <input class="form-check-input" type="checkbox" value=""
                                        id="flexCheckDefault3">
                                    <label class="form-check-label text-white ms-2" for="flexCheckDefault3">
                                        UX Design
                                    </label>
                                </div>
                                <div class="col-lg-6 col-md-6 mb-3">
                                    <input class="form-check-input" type="checkbox" value=""
                                        id="flexCheckDefault4">
                                    <label class="form-check-label ms-2 text-white" for="flexCheckDefault4">
                                        Strategy &amp; Consulting
                                    </label>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <input class="form-check-input " type="checkbox" value=""
                                        id="flexCheckDefault5">
                                    <label class="form-check-label ms-2 text-white" for="flexCheckDefault5">
                                        User Research
                                    </label>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <input class="form-check-input" type="checkbox" value=""
                                        id="flexCheckDefault6">
                                    <label class="form-check-label ms-2 text-white" for="flexCheckDefault6">
                                        Other
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <a href="#" class="btn btn-primary w-100">Submit</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
