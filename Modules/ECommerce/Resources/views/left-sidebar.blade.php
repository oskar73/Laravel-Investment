<x-app-layout layout="e-commerce" :assets="$assets ?? []">
    <div class="mt-4 mb-4">
        <div class="row">
            <div class="col-lg-3">
                <div class="">
                    <!-- Filter Component Start -->
                    <x-modules.e-commerce.widgets.filter />
                    <!-- Filter Component Start -->
                </div>
                <div class="overflow-hidden collection-slider">
                    <ul class="p-0 m-0 mb-2 swiper-wrapper list-inline">
                        <li class="swiper-slide card-slide">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex justify-content-center">
                                        <img src="{{asset('modules/e-commerce/images/product/03.png')}}" class="img-fluid object-contain avatar-100" alt="product">
                                    </div>
                                    <div class="text-center">
                                        <h6 class="text-primary">
                                            {{__('e-commerce.new_coll')}}
                                        </h6>
                                        <p class="small">{{__('e-commerce.get_off_on')}} Headphones</p>
                                        <button class="btn btn-primary" type="submit">{{__('e-commerce.view_now')}}</button>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="swiper-slide card-slide">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex justify-content-center">
                                        <img src="{{asset('modules/e-commerce/images/product/01.png')}}" class="img-fluid object-contain avatar-100" alt="product">
                                    </div>
                                    <div class="text-center">
                                        <h6 class="text-primary">
                                            {{__('e-commerce.new_coll')}}
                                        </h6>
                                        <p class="small">{{__('e-commerce.get_off_on')}} Biker's Jacket</p>
                                        <button class="btn btn-primary" type="submit">{{__('e-commerce.view_now')}}</button>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h4 class="mb-0">{{__('e-commerce.trend_items')}}</h4>
                    <ul class="nav nav-pills mb-0 iq-product-filter d-flex bg-transparent align-items-center" id="pills-tab" role="tablist">
                        <li class="nav-item dropdown d-xl-block">
                            <div class="search-input position-relative w-100 ">
                                <input type="search" class="form-control" placeholder="Search" id="header-search">
                                <span class="position-absolute iq-header-search-icon">
                                    <svg width="24" viewBox="0 0 24 24" class="text-primary" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <ellipse cx="10.5992" cy="10.6532" rx="8.59922" ry="8.65324" fill="currentColor"></ellipse>
                                    <path opacity="0.4" d="M20.6745 21.9553C20.3405 21.9445 20.0228 21.807 19.7853 21.5705L17.7488 19.1902C17.3122 18.7909 17.2765 18.1123 17.6688 17.6689C17.8524 17.4831 18.102 17.3787 18.3624 17.3787C18.6228 17.3787 18.8725 17.4831 19.0561 17.6689L21.6172 19.7181C21.9861 20.0957 22.0999 20.6563 21.9078 21.1492C21.7157 21.6422 21.2535 21.9754 20.7279 22L20.6745 21.9553Z" fill="currentColor"></path>
                                    </svg>
                                </span>
                            </div>
                        </li>
                        <li class="nav-item ms-2" role="presentation">
                            <button class="nav-link btn btn-sm btn-icon rounded-pill active" id="grid-view-tab" data-bs-toggle="pill" data-bs-target="#pills-grid-view" type="button" role="tab" aria-controls="pills-grid-view" aria-selected="true">
                                <span class="btn-inner">
                                    <svg class="icon-32" width="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path opacity="0.4" d="M16.0756 2H19.4616C20.8639 2 22.0001 3.14585 22.0001 4.55996V7.97452C22.0001 9.38864 20.8639 10.5345 19.4616 10.5345H16.0756C14.6734 10.5345 13.5371 9.38864 13.5371 7.97452V4.55996C13.5371 3.14585 14.6734 2 16.0756 2Z" fill="currentColor"></path>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M4.53852 2H7.92449C9.32676 2 10.463 3.14585 10.463 4.55996V7.97452C10.463 9.38864 9.32676 10.5345 7.92449 10.5345H4.53852C3.13626 10.5345 2 9.38864 2 7.97452V4.55996C2 3.14585 3.13626 2 4.53852 2ZM4.53852 13.4655H7.92449C9.32676 13.4655 10.463 14.6114 10.463 16.0255V19.44C10.463 20.8532 9.32676 22 7.92449 22H4.53852C3.13626 22 2 20.8532 2 19.44V16.0255C2 14.6114 3.13626 13.4655 4.53852 13.4655ZM19.4615 13.4655H16.0755C14.6732 13.4655 13.537 14.6114 13.537 16.0255V19.44C13.537 20.8532 14.6732 22 16.0755 22H19.4615C20.8637 22 22 20.8532 22 19.44V16.0255C22 14.6114 20.8637 13.4655 19.4615 13.4655Z" fill="currentColor"></path>
                                    </svg>
                                </span>
                            </button>
                        </li>
                        <li class="nav-item ms-2" role="presentation">
                            <button class="nav-link btn btn-sm btn-icon rounded-pill" id="list-view-tab" data-bs-toggle="pill" data-bs-target="#pills-list-view" type="button" role="tab" aria-controls="pills-list-view" aria-selected="false">
                                <span class="btn-inner">
                                    <svg class="icon-32" width="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path opacity="0.4" d="M10.0833 15.958H3.50777C2.67555 15.958 2 16.6217 2 17.4393C2 18.2559 2.67555 18.9207 3.50777 18.9207H10.0833C10.9155 18.9207 11.5911 18.2559 11.5911 17.4393C11.5911 16.6217 10.9155 15.958 10.0833 15.958Z" fill="currentColor"></path>
                                        <path opacity="0.4" d="M22.0001 6.37867C22.0001 5.56214 21.3246 4.89844 20.4934 4.89844H13.9179C13.0857 4.89844 12.4102 5.56214 12.4102 6.37867C12.4102 7.1963 13.0857 7.86 13.9179 7.86H20.4934C21.3246 7.86 22.0001 7.1963 22.0001 6.37867Z" fill="currentColor"></path>
                                        <path d="M8.87774 6.37856C8.87774 8.24523 7.33886 9.75821 5.43887 9.75821C3.53999 9.75821 2 8.24523 2 6.37856C2 4.51298 3.53999 3 5.43887 3C7.33886 3 8.87774 4.51298 8.87774 6.37856Z" fill="currentColor"></path>
                                        <path d="M21.9998 17.3992C21.9998 19.2648 20.4609 20.7777 18.5609 20.7777C16.6621 20.7777 15.1221 19.2648 15.1221 17.3992C15.1221 15.5325 16.6621 14.0195 18.5609 14.0195C20.4609 14.0195 21.9998 15.5325 21.9998 17.3992Z" fill="currentColor"></path>
                                    </svg>
                                </span>
                            </button>
                        </li>
                    </ul>
                </div>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-grid-view" role="tabpanel" aria-labelledby="grid-view-tab">
                        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3">
                            <div class="col">
                                <x-modules.e-commerce.widgets.product-card  slidercard="mb-0" productname="{{__('e-commerce.blue_hand')}}" statusdetails="" statuscolor="" productimage="product/06.png" productrating="3.5" productprice="$56.00"/>
                            </div>
                            <div class="col">
                                <x-modules.e-commerce.widgets.product-card  slidercard="mb-0" productname="{{__('e-commerce.sweater')}}" statusdetails="Sold" statuscolor="warning" productimage="product/07.png" productrating="3.5" productprice="$65.00"/>
                            </div>
                            <div class="col">
                                <x-modules.e-commerce.widgets.product-card  slidercard="" productname="{{__('e-commerce.knit_shrug')}}" statusdetails="" statuscolor="" productimage="product/10.png" productrating="3.5" productprice="$56.00"/>
                            </div>
                            <div class="col">
                                <x-modules.e-commerce.widgets.product-card  slidercard="" productname="{{__('e-commerce.leather_bags')}}" statusdetails="" statuscolor="" productimage="product/11.png" productrating="3.5" productprice="$56.00"/>
                            </div>
                            <div class="col">
                                <x-modules.e-commerce.widgets.product-card  slidercard="" productname="{{__('e-commerce.biker’s_jacket')}}" statusdetails="New" statuscolor="primary" productimage="product/04.png" productrating="3.5" productprice="$65.00"/>
                            </div>
                            <div class="col">
                                <x-modules.e-commerce.widgets.product-card  slidercard="" productname="{{__('e-commerce.knit_shrug')}}" statusdetails="" statuscolor="" productimage="product/10.png" productrating="3.5" productprice="$56.00"/>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-list-view" role="tabpanel" aria-labelledby="list-view-tab">
                        <div class="row row-cols-1">
                            <div class="col">
                                <x-modules.e-commerce.widgets.product-card-list-view productname="{{__('e-commerce.shoe')}}" productimage="product/02.png" productrating="3.5" productprice="$56.00" statuscolor="success" statusidentity="In Stock" deliverydate="Thu Jan 30" replacetime="10" />
                                <x-modules.e-commerce.widgets.product-card-list-view productname="{{__('e-commerce.biker’s_jacket')}}" productimage="product/04.png" productrating="4.5" productprice="$65.00" statuscolor="danger" statusidentity="Out of Stock" deliverydate="Thu Jan 25" replacetime="10" />
                                <x-modules.e-commerce.widgets.product-card-list-view productname="{{__('e-commerce.knit_shrug')}}" productimage="product/05.png" productrating="4.0" productprice="$65.00" statuscolor="warning" statusidentity="Limited" deliverydate="Thu Jan 31" replacetime="20" />
                                <x-modules.e-commerce.widgets.product-card-list-view productname="{{__('e-commerce.blue_hand')}}" productimage="product/06.png" productrating="4.5" productprice="$65.00" statuscolor="success" statusidentity="In Stock" deliverydate="Thu Jan 22" replacetime="15" />
                                <x-modules.e-commerce.widgets.product-card-list-view productname="{{__('e-coomerce.pink_triusers')}}" productimage="product/07.png" productrating="4.5" productprice="$65.00" statuscolor="success" statusidentity="In Stock" deliverydate="Thu Jan 25" replacetime="10" />
                                <x-modules.e-commerce.widgets.product-card-list-view productname="{{__('e-commerce.pink_hand')}}" productimage="product/10.png" productrating="3.0" productprice="$65.00" statuscolor="success" statusidentity="In Stock" deliverydate="Thu Jan 26" replacetime="05" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-between align-items-center">
                    <h4 class="mb-0">Offers</h4>
                    <a href="{{route('e-commerce.categories-list')}}" class="h6">View All</a>
                </div>
                <div class="mt-3">
                    <div class="iq-product-offers mb-4">
                        <div class="product-grid-item bg-soft-secondary mb-0 card">
                            <div class="card-body">
                                <div class="offer-card row">
                                    <div class="col-6 d-flex flex-column justify-content-center">
                                        <h4 class="pb-2">{{__('e-commerce.get_up_to')}} 40%</h4>
                                        <h6 class="pb-3">For The Holiday Session</h6>
                                        <a href="">{{__('e-commerce.show_now')}}</a>
                                    </div>
                                    <div class="col-6">
                                        <img src="{{asset('modules/e-commerce/images/offers/06.png')}}" alt="product-details" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-grid-item bg-soft-secondary mb-0 card">
                            <div class="card-body">
                                <div class="offer-card row">
                                    <div class="col-6 d-flex flex-column justify-content-center">
                                        <h4 class="pb-2">{{__('e-commerce.get_up_to')}} 30%</h4>
                                        <h6 class="pb-3">For The Holiday Session</h6>
                                        <a href="">{{__('e-commerce.show_now')}}</a>
                                    </div>
                                    <div class="col-6">
                                        <img src="{{asset('modules/e-commerce/images/offers/07.png')}}" alt="product-details" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-grid-item bg-soft-secondary mb-0 card">
                            <div class="card-body">
                                <div class="offer-card row">
                                    <div class="col-6 d-flex flex-column justify-content-center">
                                        <h4 class="pb-2">{{__('e-commerce.get_up_to')}} 10%</h4>
                                        <h6 class="pb-3">For The Holiday Session</h6>
                                        <a href="">{{__('e-commerce.show_now')}}</a>
                                    </div>
                                    <div class="col-6">
                                        <img src="{{asset('modules/e-commerce/images/offers/10.png')}}" alt="product-details" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-grid-item bg-soft-secondary mb-0 card">
                            <div class="card-body">
                                <div class="offer-card row">
                                    <div class="col-6 d-flex flex-column justify-content-center">
                                        <h4 class="pb-2">{{__('e-commerce.get_up_to')}} 25%</h4>
                                        <h6 class="pb-3">For The Holiday Session</h6>
                                        <a href="">{{__('e-commerce.show_now')}}</a>
                                    </div>
                                    <div class="col-6">
                                        <img src="{{asset('modules/e-commerce/images/offers/09.png')}}" alt="product-details" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <x-modules.e-commerce.widgets.product-slider />
        </div>
    </div>
</x-app-layout>
