<x-app-layout layout="landing" :isHeader1=true >
    <div class="inner-box bg-body">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                <div class="text-primary text-uppercase mb-2 sub-title">
                    Problem-solving Product
                </div>
                <h1 class="text-secondary mb-4 mb-lg-0 text-capitalize">We Build Products to <span class="text-primary">Solve Problems</span> </h1>
                </div>
                <div class="col-lg-6">
                <p class="mb-4 mb-lg-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ipsum vel sed in ac
                    aliquam nisl sed. Non arcu quam aliquet amet, donec enim. </p>
                <div class="d-flex align-items-center pt-2">
                    <a href="https://hopeui.iqonic.design/" class="btn btn-primary">Try It For Free</a>
                    <a href="https://iqonic.design/product/templates/hope-ui-pro-unlimited/" class="btn btn-secondary ms-4">Buy Pro</a>
                </div>
            </div>
                <div class="col-lg-12 inner-box pb-0">
                    <img src="{{ asset('modules/landing-pages/images/home-5/top-banner.webp') }}" alt=""
                        class="img-fluid">
                </div>
            </div>
        </div>
    </div>
    <div class="section-padding">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-5">
                <div class="mb-2 text-uppercase text-primary sub-title">
                    about us
                </div>
                <h2 class="mb-4 mb-lg-5 text-capitalize">What are <span class="text-primary">we</span></h2>
                <p class="mb-4 mb-lg-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Elementum ac integer
                    semper sit semper laoreet donec. Vitae turpis pretium placerat augue mauris, adipiscing. Risus
                    pretium, amet mi fringilla gravida risus accumsan.</p>
                    <div class="d-flex align-items-center mb-4 mb-lg-5">
                    <div>
                        <h5 class="text-primary mb-2 fw-bold">100%</h5>
                        <p class="mb-0">Satisfaction</p>
                    </div>
                    <div class="ms-4">
                        <h5 class="text-primary mb-2 fw-bold">15k</h5>
                        <p class="mb-0">Downloads</p>
                    </div>
                    <div class="ms-4">
                        <h5 class="text-primary mb-2 fw-bold">24/7</h5>
                        <p class="mb-0">Support</p>
                    </div>
                </div>
                    <a hrer="#" class="btn btn-primary mt-2">Get Started</a>
                </div>
                <div class="col-md-7 mt-4 mt-lg-0">
                    <img src="{{ asset('modules/landing-pages/images/home-5/about-5.webp') }}" alt=""
                        class="img-fluid ">
                </div>
            </div>
        </div>
    </div>
    <div class="section-card-padding bg-body">
        <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="mb-2 text-uppercase text-primary sub-title">
                    Features
                </div>
                <h2 class="mb-4 mb-lg-5 pb-4 pb-lg-5">Features Provided <span class="text-primary">For You </span></h2>
            </div>
        </div>
            {{-- <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 text-center"> --}}
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3">
                <x-landing-pages.widgets.feature-section />
            </div>
        </div>
    </div>
    <div class="section-padding bg-secondary">
        <div class="container">
            <div class="row align-items-center">
            <div class="col-md-12 text-center">
                <div class="mb-2 text-white text-uppercase sub-title">
                    Download now
                </div>
                <h2 class="mb-4 mb-lg-5 text-white text-capitalize">Fast, easy, and <span class="text-primary">Affordable</span> </h2>
                <p class="mb-4 mb-lg-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Amet at diam vivamus
                    sodales<br> magna suspendisse. Mi volutpat vel convallis sed risus egestas.</p>
                <div class="d-flex align-items-center justify-content-center pt-2">
                    <a href="https://hopeui.iqonic.design/" class="btn btn-primary">Try It For Free</a>
                    <a href="https://iqonic.design/product/templates/hope-ui-pro-unlimited/" class="btn btn-white custom-btn ms-2">Buy Pro</a>
                </div>
            </div>
            </div>
        </div>
    </div>
    <div class="section-card-padding bg-body">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12 text-center">
                <div class="mb-2 text-primary text-uppercase sub-title">Pricing</div>
                <h2 class="mb-4 mb-lg-5 pb-4 pb-lg-5 text-capitalize">Our <span class="text-primary">Price Plans</span>
                </h2>
            </div>
        </div>
        <div class="row  row-cols-1 row-cols-md-2 row-cols-lg-4">
            <div class="col">
                <div class="card text-center">
                    <div class="card-header bg-primary-subtle pb-4">
                        <h6 class="mb-3">Free</h6>
                        <div class="mb-3">
                            <h4 class="mb-0">$0</h4>
                            <h6 class="mb-0">/Month</h6>
                        </div>
                        <a href="#" class="btn btn-primary">Get Started</a>
                    </div>
                    <div class="card-body">
                        <p>10 users included</p>
                        <p>2GB of storage</p>
                        <p>Email support</p>
                        <p>Help center access</p>
                        <p class="mb-0">Help center access</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card text-center">
                    <div class="card-header bg-primary-subtle pb-4">
                        <h6 class="mb-3">Pro</h6>
                        <div class="mb-3">
                            <h4 class="mb-0">$199</h4>
                            <h6 class="mb-0">/Month</h6>
                        </div>
                        <a href="#" class="btn btn-primary">Get Started</a>
                    </div>
                    <div class="card-body">
                        <p>10 users included</p>
                        <p>10GB of storage</p>
                        <p>Priority Email support</p>
                        <p>Help center access</p>
                        <p class=" mb-0">Help center access</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card text-center">
                    <div class="card-header bg-primary pb-4 pricing-card-header">
                        <h6 class="mb-3 text-white">Enterprise</h6>
                        <div class="mb-3">
                            <h4 class="mb-0 text-white">$399</h4>
                            <h6 class="mb-0 text-white">/Month</h6>
                        </div>
                        <a href="#" class="btn custom-btn btn-outline-light">Get Started</a>
                    </div>
                    <div class="card-body">
                        <p>30 users included</p>
                        <p>15GB of storage</p>
                        <p>Help center access</p>
                        <p>Call and email support</p>
                        <p class="mb-0">Help center access</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card text-center">
                    <div class="card-header bg-primary-subtle pb-4">
                        <h6 class="mb-3">Premium</h6>
                        <div class="mb-3">
                            <h4 class="mb-0">$599</h4>
                            <h6 class="mb-0">/Month</h6>
                        </div>
                        <a href="#" class="btn btn-primary">Get Started</a>
                    </div>
                    <div class="card-body">
                        <p>50 users included</p>
                        <p>60GB of storage</p>
                        <p>24 x 7 call support</p>
                        <p>Help center access</p>
                        <p class="mb-0">Help center access</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <div class="section-padding">
    <div class="container">
            <div class="row align-items-center">
                <div class="col-md-12 text-center">
                    <div class="mb-2 sub-title text-uppercase text-primary">
                    team
                    </div>
                <h2 class="text-secondary mb-lg-5 mb-4 pb-4 pb-lg-5">Expert <span class="text-primary">Teams</span></h2>
            </div>
                <div class="col-md-6 col-lg-3 col-sm-2">
                    <div class="card team-image">
                        <x-landing-pages.widgets.team teamImage="team1.webp" teamTitle="Darlene Robertson"
                            teamText="Founder" />
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 col-sm-2">
                    <div class="card team-image">
                        <x-landing-pages.widgets.team teamImage="team2.webp" teamTitle="Floyd Miles "
                            teamText="UI designer" />
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 col-sm-2">
                    <div class="card team-image">
                        <x-landing-pages.widgets.team teamImage="team-3.webp" teamTitle="Arlene McCoy "
                            teamText="Researcher" />
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 col-sm-2">
                    <div class="card team-image">
                        <x-landing-pages.widgets.team teamImage="team-4.webp" teamTitle="Darlene Robertson"
                            teamText="Founder" />
                    </div>
            </div>
       </div>
    </div>
</div>
    <div class="section-padding bg-body">
        <div class="container">
            <div class="row align-items-center">
            <div class="col-lg-12 text-center">
                <div class="mb-2 text-primary text-uppercase sub-title">Reviews</div>
                <h2 class="mb-4 mb-lg-5 pb-4 pb-lg-5 text-secondary text-capitalize">What our <span class="text-primary">Customer’s are saying</span></h2>
            </div>
                <div class="overflow-hidden slider-circle-btn" id="testimonial-one-slider">
                    <ul class="p-0 m-0 swiper-wrapper list-inline">
                        <li class="swiper-slide card-slide card overflow-hidden">
                            <x-landing-pages.widgets.testimonial-one testTitle="A true game changer."
                                testText="“Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vitae, eget condimentum
                        luctus nec nec tellus sem sed. Diam elementum tellus posuere ipsum tortor.”"
                                testUser="user-1.webp" userTitle="Eleen Rogers" Id="01" />
                        </li>
                        <li class="swiper-slide card-slide card overflow-hidden">
                            <x-landing-pages.widgets.testimonial-one testTitle="Best you can Get"
                                testText="“Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vitae, eget condimentum
                        luctus nec nec tellus sem sed. Diam elementum tellus posuere ipsum tortor.”"
                                testUser="user-2.webp" userTitle="Brooklyn Simmons" Id="02" />
                        </li>
                        <li class="swiper-slide card-slide card overflow-hidden">
                            <x-landing-pages.widgets.testimonial-one
                                testTitle="Perfect poduct for your
                        business"
                                testText="“Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vitae, eget
                        condimentum luctus nec nec tellus sem sed. Diam elementum tellus posuere ipsum tortor.”"
                                testUser="user-3.webp" userTitle="Jenny Wilson" Id="03" />
                        </li>
                        <li class="swiper-slide card-slide card overflow-hidden">
                            <x-landing-pages.widgets.testimonial-one testTitle="A true game changer."
                                testText="“Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vitae, eget condimentum
                        luctus nec nec tellus sem sed. Diam elementum tellus posuere ipsum tortor.”"
                                testUser="user-1.webp" userTitle="Eleen Rogers" Id="01" />
                        </li>
                        <li class="swiper-slide card-slide card overflow-hidden">
                            <x-landing-pages.widgets.testimonial-one testTitle="Best you can Get"
                                testText="“Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vitae, eget condimentum
                        luctus nec nec tellus sem sed. Diam elementum tellus posuere ipsum tortor.”"
                                testUser="user-2.webp" userTitle="Brooklyn Simmons" Id="02" />
                        </li>
                        <li class="swiper-slide card-slide card overflow-hidden">
                            <x-landing-pages.widgets.testimonial-one
                                testTitle="Perfect poduct for your
                        business"
                                testText="“Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vitae, eget
                        condimentum luctus nec nec tellus sem sed. Diam elementum tellus posuere ipsum tortor.”"
                                testUser="user-3.webp" userTitle="Jenny Wilson" Id="03" />
                        </li>
                    </ul>
                    <div class="swiper-button swiper-button-next"></div>
                    <div class="swiper-button swiper-button-prev"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="section-padding bg-secondary">
        <div class="container client-list">
        <ul class="p-0 m-0 d-flex align-items-center gap-3  client-mrquee list-unstyled">
            <li class="highway-car ">
            <x-landing-pages.widgets.client clientImage="12.webp" />
            </li>
            <li class="highway-car ">
            <x-landing-pages.widgets.client clientImage="07.webp" />
            </li>
            <li class="highway-car ">
            <x-landing-pages.widgets.client clientImage="10.webp" />
            </li>
            <li class="highway-car ">
            <x-landing-pages.widgets.client clientImage="11.webp" />
            </li>
            <li class="highway-car ">
            <x-landing-pages.widgets.client clientImage="12.webp" />
            </li>
            <li class="highway-car ">
            <x-landing-pages.widgets.client clientImage="07.webp" />
            </li>
            <li class="highway-car ">
            <x-landing-pages.widgets.client clientImage="08.webp" />
            </li>
            <li class="highway-car ">
            <x-landing-pages.widgets.client clientImage="09.webp" />
            </li>
            <li class="highway-car ">
            <x-landing-pages.widgets.client clientImage="10.webp" />
            </li>
            <li class="highway-car ">
            <x-landing-pages.widgets.client clientImage="11.webp" />
            </li>
            <li class="highway-car ">
            <x-landing-pages.widgets.client clientImage="12.webp" />
            </li>
            <li class="highway-car ">
            <x-landing-pages.widgets.client clientImage="07.webp" />
            </li>
            <li class="highway-car ">
            <x-landing-pages.widgets.client clientImage="08.webp" />
            </li>
            <li class="highway-car ">
            <x-landing-pages.widgets.client clientImage="09.webp" />
            </li>
            <li class="highway-car ">
            <x-landing-pages.widgets.client clientImage="12.webp" />
            </li>
            <li class="highway-car ">
            <x-landing-pages.widgets.client clientImage="07.webp" />
            </li>
                <li class="highway-car ">
                <x-landing-pages.widgets.client clientImage="08.webp" />
            </li>
            <li class="highway-car ">
            <x-landing-pages.widgets.client clientImage="09.webp" />
            </li>
            <li class="highway-car ">
            <x-landing-pages.widgets.client clientImage="10.webp" />
            </li>
            <li class="highway-car ">
            <x-landing-pages.widgets.client clientImage="11.webp" />
            </li>
            <li class="highway-car ">
            <x-landing-pages.widgets.client clientImage="12.webp" />
            </li>
            <li class="highway-car ">
            <x-landing-pages.widgets.client clientImage="07.webp" />
            </li>
        </ul>
        </div>
    </div>
   <div class="section-card-padding bg-body">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-12 text-center">
                <div class="mb-2 text-uppercase text-primary sub-title">
                    Blog
                </div>
                <h2 class="text-secondary mb-4 mb-lg-5  pb-4 pb-lg-5">All the <span class="text-primary">Support you
                        Need</span></h2>
            </div>
            <div class="overflow-hidden slider-circle-btn app-slider">
                <ul class="p-0 m-0 swiper-wrapper list-inline">
                    <li class="swiper-slide card-slide card overflow-hidden ">
                        <x-landing-pages.widgets.blog blogImage="home-1/04.webp"
                            blogTitle="The Cheapest Destinations Of All Time, A List Of Beauty And Budget."
                            blogText="August 16,2023 " />
                    </li>
                    <li class="swiper-slide card-slide card overflow-hidden ">
                        <x-landing-pages.widgets.blog blogImage="home-1/05.webp" blogTitle="Technology that unwinds your potential."
                            blogText="August 17,2023" />
                    </li>
                    <li class="swiper-slide card card-slide card overflow-hidden">
                        <x-landing-pages.widgets.blog blogImage="home-1/06.webp" blogTitle="Generating the best online environment."
                            blogText="August 18,2023" />
                    </li>
                    <li class="swiper-slide card card-slide card overflow-hidden">
                        <x-landing-pages.widgets.blog blogImage="home-1/04.webp"
                            blogTitle="The Cheapest Destinations Of All Time, A List Of Beauty And Budget." blogText="August 19,2023" />
                    </li>
                    <li class="swiper-slide card card-slide card overflow-hidden">
                        <x-landing-pages.widgets.blog blogImage="home-1/05.webp" blogTitle="Technology that unwinds your potential."
                            blogText="August 20,2023" />
                    </li>
                    <li class="swiper-slide card card-slide card overflow-hidden">
                        <x-landing-pages.widgets.blog blogImage="home-1/06.webp" blogTitle="Generating the best online environment."
                            blogText="August 21,2023" />
                    </li>
                </ul>
                <div class="swiper-button swiper-button-next"></div>
                <div class="swiper-button swiper-button-prev"></div>
            </div>
        </div>
    </div>
</div>
    <div class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-xl-5">
                <div class="mb-2 text-uppercase text-primary sub-title">
                    faq
                </div>
                <h2 class="text-secondary mb-4 mb-lg-5">Foremost Common <span class="text-primary">Questions</span></h2>
                <p class="mb-0 mt-2">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit
                    officia consequat duis enim velit mollit. Exercitation veniam consequat.</p>
            </div>
            <div class="col-lg-7 col-xl-7 mt-4 mt-lg-0">
                 <div class="accordion custom-accordion faq" id="accordionExample">
                    <div class="accordion-item mb-4 pb-2 border-bottom rounded-0">
                        <div class="accordion-header" id="headingOne">
                            <button class="accordion-button px-0 h5 pt-0 mb-0" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                How does SAASworld make money?
                            </button>
                        </div>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body px-0">
                                <p class="mb-0">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet
                                    sint. Velit officia consequat duis enim velit mollit. Exercitation veniam consequat.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item mb-4 pb-2 border-bottom rounded-0">
                        <div class="accordion-header" id="headingTwo">
                            <button class="accordion-button px-0 h5 mb-0 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                What projects can be done on SAASworld?
                            </button>
                        </div>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body px-0">
                                <p class="mb-0">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet
                                    sint. Velit officia consequat duis enim velit mollit. Exercitation veniam consequat.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item mb-4 pb-2 border-bottom rounded-0">
                        <div class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed h5 px-0 mb-0" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                What is the Top Rated program?
                            </button>
                        </div>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                            <div class="accordion-body px-0">
                                <p class="mb-0">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet
                                    sint. Velit officia consequat duis enim velit mollit. Exercitation veniam consequat.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item mb-4 pb-2 border-bottom rounded-0">
                        <div class="accordion-header" id="headingFour">
                            <button class="accordion-button collapsed h5 px-0 mb-0" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                What’s the difference between finding clients online locally?
                            </button>
                        </div>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                            <div class="accordion-body px-0">
                                <p class="mb-0">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet
                                    sint. Velit officia consequat duis enim velit mollit. Exercitation veniam consequat.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <div class="accordion-header" id="headingFive">
                            <button class="accordion-button collapsed h5 px-0 mb-0" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                Can I sell scripts, etc. written by others?
                            </button>
                        </div>
                        <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                            <div class="accordion-body px-0">
                                <p class="mb-0">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet
                                    sint. Velit officia consequat duis enim velit mollit. Exercitation veniam consequat.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</x-app-layout>
