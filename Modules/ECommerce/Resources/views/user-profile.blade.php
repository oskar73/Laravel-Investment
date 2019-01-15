<x-app-layout layout="e-commerce" :assets="$assets ?? []" title='User Profile' isSwiperSlider="true">
    <div class="row">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header">
                    <div class="header-title">
                        <h4 class="card-title">{{ __('e-commerce.your_acc') }}</h4>
                    </div>
                </div>
                <div class="card-body">
                    <div class="nav nav-tabs nav-iconly gap-5 mb-5" id="myTab" role="tablist">
                        <button class="nav-link active" id="order-tab" data-bs-toggle="tab" data-bs-target="#order"
                            type="button" role="tab" aria-controls="order" aria-selected="false">
                            <svg class="icon-40" width="40" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path opacity="0.4"
                                    d="M16.6203 22H7.3797C4.68923 22 2.5 19.8311 2.5 17.1646V11.8354C2.5 9.16894 4.68923 7 7.3797 7H16.6203C19.3108 7 21.5 9.16894 21.5 11.8354V17.1646C21.5 19.8311 19.3108 22 16.6203 22Z"
                                    fill="currentColor"></path>
                                <path
                                    d="M15.7551 10C15.344 10 15.0103 9.67634 15.0103 9.27754V6.35689C15.0103 4.75111 13.6635 3.44491 12.0089 3.44491C11.2472 3.44491 10.4477 3.7416 9.87861 4.28778C9.30854 4.83588 8.99272 5.56508 8.98974 6.34341V9.27754C8.98974 9.67634 8.65604 10 8.24487 10C7.8337 10 7.5 9.67634 7.5 9.27754V6.35689C7.50497 5.17303 7.97771 4.08067 8.82984 3.26285C9.68098 2.44311 10.7814 2.03179 12.0119 2C14.4849 2 16.5 3.95449 16.5 6.35689V9.27754C16.5 9.67634 16.1663 10 15.7551 10Z"
                                    fill="currentColor"></path>
                            </svg>
                            {{ __('e-commerce.your_order') }}
                        </button>
                        <button class="nav-link" id="adress-tab" data-bs-toggle="tab" data-bs-target="#adress"
                            type="button" role="tab" aria-controls="adress" aria-selected="false">
                            <svg class="icon-40" xmlns="http://www.w3.org/2000/svg" width="40" viewBox="0 0 40 40"
                                fill="currentColor">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M14.2194 4.89463C17.8608 2.7788 22.3367 2.81578 25.9439 4.9915C29.5157 7.21153 31.6866 11.1736 31.6664 15.4358C31.5832 19.6699 29.2555 23.65 26.3458 26.7268C24.6664 28.5107 22.7877 30.0881 20.748 31.4267C20.538 31.5482 20.3079 31.6295 20.0691 31.6667C19.8393 31.6569 19.6155 31.589 19.4179 31.4691C16.304 29.4576 13.5722 26.8901 11.3539 23.8899C9.49763 21.3856 8.44304 18.36 8.33331 15.224C8.3309 10.9538 10.5779 7.01046 14.2194 4.89463ZM16.3236 16.9913C16.9361 18.5014 18.3819 19.4864 19.986 19.4864C21.0368 19.494 22.047 19.0731 22.7913 18.3175C23.5357 17.5619 23.9524 16.5344 23.9487 15.464C23.9543 13.8301 22.9924 12.3539 21.5121 11.7246C20.0318 11.0954 18.325 11.4373 17.1888 12.5906C16.0526 13.7439 15.711 15.4812 16.3236 16.9913Z"
                                    fill="currentColor" />
                                <ellipse opacity="0.4" cx="20" cy="35" rx="8.33333" ry="1.66667"
                                    fill="currentColor" />
                            </svg>
                            {{ __('e-commerce.your_add') }}
                        </button>
                        <button class="nav-link" id="card-tab" data-bs-toggle="tab" data-bs-target="#card"
                            type="button" role="tab" aria-controls="card" aria-selected="true">
                            <svg class="icon-40" xmlns="http://www.w3.org/2000/svg" width="40" viewBox="0 0 40 40"
                                fill="currentColor">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M36.6607 13.9585H29.6029C26.3185 13.9643 23.6578 16.5586 23.6518 19.7609C23.6474 22.9705 26.3111 25.5763 29.6029 25.5807H36.6666V26.0906C36.6666 31.6893 33.2726 35 27.5289 35H12.4726C6.72739 35 3.33331 31.6893 3.33331 26.0906V13.8964C3.33331 8.2977 6.72739 5 12.4726 5H27.5229C33.2666 5 36.6607 8.2977 36.6607 13.8964V13.9585ZM11.2326 13.9455H20.6326H20.6385H20.6504C21.3541 13.9427 21.9229 13.3836 21.92 12.6961C21.917 12.01 21.3422 11.4553 20.6385 11.4582H11.2326C10.5333 11.4611 9.96591 12.0143 9.96294 12.6975C9.95998 13.3836 10.5289 13.9427 11.2326 13.9455Z"
                                    fill="currentColor" />
                                <path opacity="0.4"
                                    d="M26.729 20.4944C27.0775 22.0798 28.4674 23.1951 30.0543 23.1661H35.4708C36.1311 23.1661 36.6666 22.6193 36.6666 21.9434V17.7242C36.6652 17.0497 36.1311 16.5015 35.4708 16.5H29.9268C28.1217 16.5058 26.6638 18.0041 26.6666 19.8505C26.6666 20.0666 26.6879 20.2827 26.729 20.4944"
                                    fill="currentColor" />
                                <ellipse cx="30" cy="19.8333" rx="1.66667" ry="1.66667"
                                    fill="currentColor" />
                            </svg>
                            {{ __('e-commerce.your_cards') }}
                        </button>
                        <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile"
                            type="button" role="tab" aria-controls="profile" aria-selected="false">
                            <svg class="icon-40" xmlns="http://www.w3.org/2000/svg" width="40" viewBox="0 0 40 40"
                                fill="currentColor">
                                <path
                                    d="M19.9947 25.291C12.8063 25.291 6.66632 26.4243 6.66632 30.9577C6.66632 35.4927 12.768 36.666 19.9947 36.666C27.183 36.666 33.323 35.5343 33.323 30.9993C33.323 26.4643 27.223 25.291 19.9947 25.291"
                                    fill="currentColor" />
                                <path opacity="0.4"
                                    d="M19.9947 20.9728C24.8913 20.9728 28.8147 17.0478 28.8147 12.1528C28.8147 7.25782 24.8913 3.33282 19.9947 3.33282C15.0997 3.33282 11.1747 7.25782 11.1747 12.1528C11.1747 17.0478 15.0997 20.9728 19.9947 20.9728"
                                    fill="currentColor" />
                            </svg>
                            {{ __('e-commerce.profile') }}
                        </button>
                    </div>
                    <div class="tab-content iq-tab-fade-up">
                        <div class="tab-pane fade active show" id="order" role="tabpanel"
                            aria-labelledby="order-tab">
                            <div class="d-flex align-items-center justify-content-between flex-wrap">
                                <h5 class="mb-0 pb-3">3 {{ __('e-commerce.orders_placed') }}</h5>
                                <div class="dropdown text-end pb-3">
                                    <button class="dropdown btn btn-primary-subtle" id="dropdownMenuButton2"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        {{ __('e-commerce.last') }} 90 {{ __('e-commerce.days') }}
                                        <svg width="12" class="ms-2" viewBox="0 0 12 8" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M6 5.08579L10.2929 0.792893C10.6834 0.402369 11.3166 0.402369 11.7071 0.792893C12.0976 1.18342 12.0976 1.81658 11.7071 2.20711L6.70711 7.20711C6.31658 7.59763 5.68342 7.59763 5.29289 7.20711L0.292893 2.20711C-0.0976311 1.81658 -0.0976311 1.18342 0.292893 0.792893C0.683418 0.402369 1.31658 0.402369 1.70711 0.792893L6 5.08579Z"
                                                fill="currentColor" />
                                        </svg>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-soft-primary"
                                        aria-labelledby="dropdownMenuButton2">
                                        <li><a class="dropdown-item active"
                                                href="#">{{ __('e-commerce.last') }}Last 30
                                                {{ __('e-commerce.days') }}Days</a></li>
                                        <li><a class="dropdown-item" href="#">{{ __('e-commerce.last') }}Last
                                                90 {{ __('e-commerce.days') }}Days</a></li>
                                        <li><a class="dropdown-item" href="#">{{ __('e-commerce.last') }}Last
                                                180 {{ __('e-commerce.days') }}Days</a></li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li><a class="dropdown-item" href="#">{{ __('e-commerce.last') }}Last 1
                                                {{ __('e-commerce.year') }}</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card shadow-none border iq-product-order-placed">
                                <div class="card-header user-details-bg-color bg-light p-4">
                                    <div class="iq-order-content">
                                        <div
                                            class="iq-order-user-details d-flex justify-content-between align-items-center gap-4">
                                            <div>
                                                <p>{{ __('e-commerce.order_placed') }}</p>
                                                <h6 class="mb-0">12 Jan 2021</h6>
                                            </div>
                                            <div>
                                                <p>{{ __('e-commerce.total') }}</p>
                                                <h6 class="mb-0">$550.00</h6>
                                            </div>
                                            <div>
                                                <p>{{ __('e-commerce.ship_to') }}</p>
                                                <h6 class="mb-0 text-primary">Elon Musk</h6>
                                            </div>
                                        </div>
                                        <h6 class="mb-xl-0 mb-2 iq-order-id">{{ __('e-commerce.order_id:') }}
                                            <a href="#">#895-458895-125489</a>
                                        </h6>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="d-flex align-items-center justify-content-between flex-wrap">
                                        <div class="d-flex align-items-center">
                                            <img src="{{ asset('modules/e-commerce/images/app/01.png') }}"
                                                alt="user-profile"
                                                class="img-fluid rounded object-contain avatar-100 iq-product-bg p-3">
                                            <div class="ms-3">
                                                <a href="{{ route('e-commerce.product-detail') }}">
                                                    <h5 class="mb-3">Biker&apos;s Jacket</h5>
                                                </a>
                                                <h6 class="text-primary mb-0">
                                                    $45.99
                                                </h6>
                                            </div>
                                        </div>
                                        <div class="mt-3 mt-xl-0 mt-3 mt-md-0">
                                            <div class="dropdown text-end">
                                                <button class="dropdown btn btn-primary mb-3" id="buy-drop"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                    {{ __('e-commerce.buy_it_again') }}
                                                    <svg width="12" class="ms-2" viewBox="0 0 12 8"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M6 5.08579L10.2929 0.792893C10.6834 0.402369 11.3166 0.402369 11.7071 0.792893C12.0976 1.18342 12.0976 1.81658 11.7071 2.20711L6.70711 7.20711C6.31658 7.59763 5.68342 7.59763 5.29289 7.20711L0.292893 2.20711C-0.0976311 1.81658 -0.0976311 1.18342 0.292893 0.792893C0.683418 0.402369 1.31658 0.402369 1.70711 0.792893L6 5.08579Z"
                                                            fill="currentColor" />
                                                    </svg>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-soft-primary"
                                                    aria-labelledby="buy-drop">
                                                    <li><a class="dropdown-item active"
                                                            href="#">{{ __('e-commerce.buy_it_again') }}</a>
                                                    </li>
                                                    <li><a class="dropdown-item"
                                                            href="#">{{ __('e-commerce.replace') }}</a></li>
                                                    <li><a class="dropdown-item"
                                                            href="#">{{ __('e-commerce.view') }}</a></li>
                                                    <li>
                                                        <hr class="dropdown-divider">
                                                    </li>
                                                    <li><a class="dropdown-item"
                                                            href="#">{{ __('e-commerce.cancel_order') }}</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="text-center">
                                                <a
                                                    href="{{ route('e-commerce.order-process') }}">{{ __('e-commerce.invoice') }}</a>
                                                <span>|</span>
                                                <a
                                                    href="{{ route('e-commerce.order-process') }}">{{ __('e-commerce.write_a_review') }}</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card shadow-none border iq-product-order-placed">
                                <div class="card-header user-details-bg-color bg-light p-4">
                                    <div class="iq-order-content">
                                        <div
                                            class="iq-order-user-details d-flex justify-content-between align-items-center gap-4">
                                            <div>
                                                <p>{{ __('e-commerce.order_placed') }}</p>
                                                <h6 class="mb-0">01 Jan 2022</h6>
                                            </div>
                                            <div>
                                                <p>{{ __('e-commerce.total') }}</p>
                                                <h6 class="mb-0">$950.00</h6>
                                            </div>
                                            <div>
                                                <p>{{ __('e-commerce.ship_to') }}</p>
                                                <h6 class="mb-0 text-primary">Elon Musk</h6>
                                            </div>
                                        </div>
                                        <h6 class="mb-xl-0 mb-2 iq-order-id">{{ __('e-commerce.order_id:') }}
                                            <a href="#">#405-653265-0876343</a>
                                        </h6>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="d-flex align-items-center justify-content-between flex-wrap">
                                        <div class="d-flex align-items-center">
                                            <img src="{{ asset('modules/e-commerce/images/app/02.png') }}"
                                                alt="user-profile"
                                                class="img-fluid rounded object-contain avatar-100 iq-product-bg p-3">
                                            <div class="ms-3">
                                                <a href="{{ route('e-commerce.product-detail') }}">
                                                    <h5 class="mb-3">{{ __('e-commerce.sweater') }}</h5>
                                                </a>
                                                <h6 class="text-primary mb-0">
                                                    $26.00
                                                </h6>
                                            </div>
                                        </div>
                                        <div class="mt-3 mt-xl-0 mt-3 mt-md-0">
                                            <div class="dropdown text-end">
                                                <button class="dropdown btn btn-primary mb-3" id="buy-drop"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                    {{ __('e-commerce.buy_it_again') }}
                                                    <svg width="12" class="ms-2" viewBox="0 0 12 8"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M6 5.08579L10.2929 0.792893C10.6834 0.402369 11.3166 0.402369 11.7071 0.792893C12.0976 1.18342 12.0976 1.81658 11.7071 2.20711L6.70711 7.20711C6.31658 7.59763 5.68342 7.59763 5.29289 7.20711L0.292893 2.20711C-0.0976311 1.81658 -0.0976311 1.18342 0.292893 0.792893C0.683418 0.402369 1.31658 0.402369 1.70711 0.792893L6 5.08579Z"
                                                            fill="currentColor" />
                                                    </svg>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-soft-primary"
                                                    aria-labelledby="buy-drop">
                                                    <li><a class="dropdown-item active"
                                                            href="#">{{ __('e-commerce.buy_it_again') }}</a>
                                                    </li>
                                                    <li><a class="dropdown-item"
                                                            href="#">{{ __('e-commerce.replace') }}</a></li>
                                                    <li><a class="dropdown-item"
                                                            href="#">{{ __('e-commerce.view') }}</a></li>
                                                    <li>
                                                        <hr class="dropdown-divider">
                                                    </li>
                                                    <li><a class="dropdown-item"
                                                            href="#">{{ __('e-commerce.cancel_order') }}</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="text-center">
                                                <a
                                                    href="{{ route('e-commerce.order-process') }}">{{ __('e-commerce.invoice') }}</a>
                                                <span>|</span>
                                                <a
                                                    href="{{ route('e-commerce.order-process') }}">{{ __('e-commerce.write_a_review') }}</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 text-center">
                                <a href="javascript:void(0);"
                                    class="btn btn-primary">{{ __('e-commerce.load_more') }}</a>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="adress" role="tabpanel" aria-labelledby="adress-tab">
                            <div class="row">
                                <div class="col-12">
                                    <div class="border border-3 border-dashed p-2 mb-4">
                                        <div class="text-center">
                                            <a href="#"
                                                class="d-flex align-items-center justify-content-center gap-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20"
                                                    class="text-gray icon-20" viewBox="0 0 30 30" fill="none">
                                                    <path
                                                        d="M12.6035 27H17.3787V17.3787H27V12.6036H17.3787V3H12.6035V12.6036H3V17.3787H12.6035V27Z"
                                                        fill="currentColor"></path>
                                                </svg>
                                                <h6 class="mb-0">{{ __('e-commerce.add_address') }}</h6>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <x-modules.e-commerce.widgets.user-account-cards cardclass=""
                                    classcarddefault="bg-soft-secondary" addressmode="Default" username="Elon Musk"
                                    addresstype="Home" usercontact="(303) 555-0105" add_fivess=""
                                    useraddress="{{ __('e-commerce.add_five') }}" />
                                <x-modules.e-commerce.widgets.user-account-cards cardclass="border iq-user-address"
                                    classcarddefault="" addressmode="" username="Christopher Nolan"
                                    addresstype="Office" usercontact="(+994) 569-05210" add_fivess=""
                                    useraddress="{{ __('e-commerce.add_five') }}" />
                                <x-modules.e-commerce.widgets.user-account-cards cardclass="border iq-user-address"
                                    classcarddefault="" addressmode="" username="Christopher Nolan"
                                    addresstype="Home" usercontact="(+994) 569-05210" add_fivess=""
                                    useraddress="{{ __('e-commerce.add_five') }}" />
                                <x-modules.e-commerce.widgets.user-account-cards
                                    cardclass="border iq-user-address mb-0" classcarddefault="" addressmode=""
                                    username="Christopher Nolan" addresstype="Office" usercontact="(+994) 569-05210"
                                    add_fivess="" useraddress="{{ __('e-commerce.add_five') }}" />
                            </div>
                        </div>
                        <div class="tab-pane fade" id="card" role="tabpanel" aria-labelledby="card-tab">
                            <h4 class="mb-4">{{ __('e-commerce.your_payment_options') }}</h4>
                            <div class="border rounded">
                                <div class="card shadow-none mb-0">
                                    <div
                                        class="card-header border-bottom d-flex flex-wrap justify-content-between py-4 px-0 mx-4">
                                        <h5 class="mb-0">{{ __('e-commerce.your_default_payment_preference') }}
                                        </h5>
                                        <a href="#">{{ __('e-commerce.update_preference') }}</a>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-lg-2">
                                                <h6>{{ __('e-commerce.nm') }} </h6>
                                                <h6 class="mt-2">Elon Musk</h6>
                                            </div>
                                            <div class="col-lg-4">
                                                <h6>{{ __('e-commerce.add_three') }}</h6>
                                                <p class="mt-2 mb-0">{{ __('e-commerce.add_five') }} </p>
                                            </div>
                                            <div class="col-lg-4">
                                                <h6>{{ __('e-commerce.pay_meth') }}</h6>
                                                <p class="mt-2 mb-0">{{ __('e-commerce.bank_of_america_debit_card') }}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="border rounded mt-4">
                                <div class="card shadow-none mb-0">
                                    <div
                                        class="card-header border-bottom d-flex flex-wrap justify-content-between py-4 px-0 mx-4">
                                        <h5>{{ __('e-commerce.your_saved_debit') }} </h5>
                                        <a href="#" class="text-dark">{{ __('e-commerce.expires_on') }}</a>
                                    </div>
                                    <div class="card-body">
                                        <div class="credit-cards">
                                            <div class="accordion" id="accordionExample">
                                                <div class="accordion-item shadow-none border-0 mb-4">
                                                    <div class="accordion-header" id="headingOne">
                                                        <div class="accordion-button bg-body" role="button"
                                                            data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                                            aria-expanded="true" aria-controls="collapseOne">
                                                            <div class="d-flex flex-grow-1 align-items-center ">
                                                                <img src="{{ asset('modules/e-commerce/images/user-cards/01.png') }}"
                                                                    alt="image" class="img-fluid">
                                                                <h6 class="ms-3 card-details mb-0">
                                                                    {{ __('e-commerce.BOA_debit_card') }} 0654</h6>
                                                            </div>
                                                            <div>
                                                                <h6 class="mx-2 mb-0">03 / 2022</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div id="collapseOne" class="accordion-collapse collapse show"
                                                        aria-labelledby="headingOne"
                                                        data-bs-parent="#accordionExample">
                                                        <div class="accordion-body">
                                                            <div class="d-flex flex-column">
                                                                <h6 class="mb-2">Elon Musk</h6>
                                                                <p>{{ __('e-commerce.add_four') }} </p>
                                                                <a href="#">
                                                                    <small
                                                                        class="text-primary">{{ __('e-commerce.edit') }}
                                                                        | {{ __('e-commerce.remove') }}</small>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item shadow-none border-0 mb-4">
                                                    <div class="accordion-header" id="headingTwo">
                                                        <div class="accordion-button bg-body collapsed" role="button"
                                                            data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                                            aria-expanded="false" aria-controls="collapseTwo">
                                                            <div class="d-flex flex-grow-1 align-items-center">
                                                                <img src="{{ asset('modules/e-commerce/images/user-cards/01.png') }}"
                                                                    alt="image" class="img-fluid">
                                                                <h6 class="ms-3 card-details mb-0">
                                                                    {{ __('e-commerce.cb_credit_card') }} 6549</h6>
                                                            </div>
                                                            <div>
                                                                <h6 class="mx-2 mb-0">05 / 2026</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div id="collapseTwo" class="accordion-collapse collapse"
                                                        aria-labelledby="headingTwo"
                                                        data-bs-parent="#accordionExample">
                                                        <div class="accordion-body">
                                                            <div class="d-flex flex-column">
                                                                <h6 class="mb-2">Elon Musk</h6>
                                                                <p>{{ __('e-commerce.add_four') }} </p>
                                                                <a href="#">
                                                                    <small
                                                                        class="text-primary">{{ __('e-commerce.edit') }}
                                                                        | {{ __('e-commerce.remove') }}</small>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item shadow-none border-0 mb-4">
                                                    <div class="accordion-header" id="headingThree">
                                                        <div class="accordion-button bg-body collapsed" role="button"
                                                            data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                                            aria-expanded="false" aria-controls="collapseThree">
                                                            <div class="d-flex flex-grow-1 align-items-center">
                                                                <img src="{{ asset('modules/e-commerce/images/user-cards/02.png') }}"
                                                                    alt="image" class="img-fluid">
                                                                <h6 class="ms-3 card-details mb-0">
                                                                    {{ __('e-commerce.bb_debit_card') }} 7852</h6>
                                                            </div>
                                                            <div>
                                                                <h6 class="mx-2 mb-0">06 / 2030</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div id="collapseThree" class="accordion-collapse collapse"
                                                        aria-labelledby="headingThree"
                                                        data-bs-parent="#accordionExample">
                                                        <div class="accordion-body">
                                                            <div class="d-flex flex-column">
                                                                <h6 class="mb-2">Elon Musk</h6>
                                                                <p>{{ __('e-commerce.add_four') }} </p>
                                                                <a href="#">
                                                                    <small
                                                                        class="text-primary">{{ __('e-commerce.edit') }}
                                                                        | {{ __('e-commerce.remove') }}</small>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item shadow-none border-0">
                                                    <div class="accordion-header" id="headingFour">
                                                        <div class="accordion-button bg-body collapsed" role="button"
                                                            data-bs-toggle="collapse" data-bs-target="#collapseFour"
                                                            aria-expanded="false" aria-controls="collapseFour">
                                                            <div class="d-flex flex-grow-1 align-items-center">
                                                                <img src="{{ asset('modules/e-commerce/images/user-cards/01.png') }}"
                                                                    alt="image" class="img-fluid">
                                                                <h6 class="ms-3 card-details mb-0">
                                                                    {{ __('e-commerce.BOA_debit_card') }} 6555</h6>
                                                            </div>
                                                            <div>
                                                                <h6 class="text-danger mx-2 mb-0">
                                                                    {{ __('e-commerce.expired') }} 08/2021</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div id="collapseFour" class="accordion-collapse collapse"
                                                        aria-labelledby="headingFour"
                                                        data-bs-parent="#accordionExample">
                                                        <div class="accordion-body">
                                                            <div class="d-flex flex-column">
                                                                <h6 class="mb-2">Elon Musk</h6>
                                                                <p>{{ __('e-commerce.add_four') }} </p>
                                                                <a href="#">
                                                                    <small
                                                                        class="text-primary">{{ __('e-commerce.edit') }}
                                                                        | {{ __('e-commerce.remove') }}</small>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="border rounded mt-4">
                                <div class="card shadow-none mb-0">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div>
                                                <h5 class="mb-3">{{ __('e-commerce.add_a_new_payment_method') }}
                                                </h5>
                                                <h5 class="mb-1">{{ __('e-commerce.credit_or_debit_cards') }}</h5>
                                                <p>{{ __('e-commerce.we_accept_all_major_credit') }}</p>
                                            </div>
                                            <div>
                                                <img src="{{ asset('modules/e-commerce/images/user-cards/01.png') }}"
                                                    alt="user-profile" class="img-fluid mt-3 me-3">
                                                <img src="{{ asset('modules/e-commerce/images/user-cards/03.png') }}"
                                                    alt="user-profile" class="img-fluid mt-3 me-3">
                                                <img src="{{ asset('modules/e-commerce/images/user-cards/05.png') }}"
                                                    alt="user-profile" class="img-fluid mt-3 me-3">
                                                <img src="{{ asset('modules/e-commerce/images/user-cards/04.png') }}"
                                                    alt="user-profile" class="img-fluid mt-3 me-3">
                                                <img src="{{ asset('modules/e-commerce/images/user-cards/02.png') }}"
                                                    alt="user-profile" class="img-fluid mt-3 me-3">
                                            </div>
                                        </div>
                                        <button
                                            class="btn btn-primary mt-3">{{ __('e-commerce.add_a_credit') }}</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <div class="card border shadow-none">
                                <div class="card-header border-bottom py-4 px-0 mx-4">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <h4 class="mb-0">{{ __('e-commerce.prof_detail') }}</h4>
                                        <button class="btn btn-primary">
                                            <div class="d-block d-md-none" data-bs-toggle="tooltip"
                                                data-bs-placement="top" editle="                     r     e">
                                                <svg class="icon-24" width="24" viewBox="0 0 24 24"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path opacity="0.4"
                                                        d="M21.101 9.58786H19.8979V8.41162C19.8979 7.90945 19.4952 7.5 18.999 7.5C18.5038 7.5 18.1 7.90945 18.1 8.41162V9.58786H16.899C16.4027 9.58786 16 9.99731 16 10.4995C16 11.0016 16.4027 11.4111 16.899 11.4111H18.1V12.5884C18.1 13.0906 18.5038 13.5 18.999 13.5C19.4952 13.5 19.8979 13.0906 19.8979 12.5884V11.4111H21.101C21.5962 11.4111 22 11.0016 22 10.4995C22 9.99731 21.5962 9.58786 21.101 9.58786Z"
                                                        fill="currentColor"></path>
                                                    <path
                                                        d="M9.5 15.0156C5.45422 15.0156 2 15.6625 2 18.2467C2 20.83 5.4332 21.5001 9.5 21.5001C13.5448 21.5001 17 20.8533 17 18.269C17 15.6848 13.5668 15.0156 9.5 15.0156Z"
                                                        fill="currentColor"></path>
                                                    <path opacity="0.4"
                                                        d="M9.50023 12.5542C12.2548 12.5542 14.4629 10.3177 14.4629 7.52761C14.4629 4.73754 12.2548 2.5 9.50023 2.5C6.74566 2.5 4.5376 4.73754 4.5376 7.52761C4.5376 10.3177 6.74566 12.5542 9.50023 12.5542Z"
                                                        fill="currentColor"></path>
                                                </svg>
                                            </div>
                                            <div class="d-none d-md-block">
                                                {{ __('e-commerce.edit_prof') }}
                                            </div>
                                        </button>
                                    </div>
                                </div>
                                <div class="card-body p-0 pt-3">
                                    <div class="table-responsive">
                                        <table class="table table-borderless mb-0">
                                            <tbody>
                                                <tr>
                                                    <th>{{ __('e-commerce.full_Nm') }}</th>
                                                    <td>Elon Musk</td>
                                                </tr>
                                                <tr>
                                                    <th>{{ __('e-commerce.con_no') }}:</th>
                                                    <td>(303) 555-0105</td>
                                                </tr>
                                                <tr>
                                                    <th>{{ __('e-commerce.add_three') }}</th>
                                                    <td>{{ __('e-commerce.add_five') }}</td>
                                                </tr>
                                                <tr>
                                                    <th>{{ __('e-commerce.email_id') }}:</th>
                                                    <td>elon.musk@gmail.com</td>
                                                </tr>
                                                <tr>
                                                    <th>{{ __('e-commerce.password') }}</th>
                                                    <td>*************</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="card border shadow-none">
                                <div class="card-header border-bottom py-4 px-0 mx-4">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <h4 class="mb-0">{{ __('e-commerce.prof_detail') }}</h4>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <h6 class="mb-2">{{ __('e-commerce.avatar') }}</h6>
                                    <div class="d-flex align-items-center justify-content-center">
                                        <div class="position-relative">
                                            <img src="{{ asset('modules/e-commerce/images/user/06.png') }}"
                                                alt="user-profile"
                                                class="img-fluid edit-img border border-white border-4 rounded-circle">
                                            <div
                                                class="iq-icon-edit position-absolute btn btn-primary btn-sm rounded-circle p-1">
                                                <svg class="upload-button" width="20" viewBox="0 0 24 24">
                                                    <path fill="#ffffff"
                                                        d="M14.06,9L15,9.94L5.92,19H5V18.08L14.06,9M17.66,3C17.41,3 17.15,3.1 16.96,3.29L15.13,5.12L18.88,8.87L20.71,7.04C21.1,6.65 21.1,6 20.71,5.63L18.37,3.29C18.17,3.09 17.92,3 17.66,3M14.06,6.19L3,17.25V21H6.75L17.81,9.94L14.06,6.19Z" />
                                                </svg>
                                            </div>
                                            <div
                                                class="iq-icon-cancel position-absolute btn btn-primary btn-sm rounded-circle p-1">
                                                <svg width="20" viewBox="0 0 24 24" fill="none">
                                                    <path d="M17 7L7 17M7 7L17 17L7 7Z" stroke="white"
                                                        stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round"></path>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="text-center">{{ __('e-commerce.allowed_file') }}</p>
                                    <form class="mt-4">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label class="form-label"
                                                        for="firstname">{{ __('e-commerce.first_name') }}</label>
                                                    <input type="text" class="form-control" id="firstname"
                                                        placeholder=" ">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label class="form-label"
                                                        for="lastname">{{ __('e-commerce.last_name') }}</label>
                                                    <input type="text" class="form-control" id="lastname"
                                                        placeholder=" ">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label class="form-label"
                                                        for="contact">{{ __('e-commerce.con_no') }}</label>
                                                    <input type="text" class="form-control" id="contact"
                                                        placeholder=" ">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label class="form-label"
                                                        for="email">{{ __('e-commerce.email_id') }}</label>
                                                    <input type="text" class="form-control" id="email"
                                                        placeholder=" ">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label class="form-label"
                                                        for="house">{{ __('e-commerce.hname') }}</label>
                                                    <input type="text" class="form-control" id="house"
                                                        placeholder=" ">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label class="form-label"
                                                        for="landmark">{{ __('e-commerce.lmark') }}</label>
                                                    <input type="text" class="form-control" id="landmark"
                                                        placeholder=" ">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label class="form-label"
                                                        for="address">{{ __('e-commerce.street') }}</label>
                                                    <input type="text" class="form-control" id="address"
                                                        placeholder=" ">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label class="form-label"
                                                        for="city">{{ __('e-commerce.town') }}</label>
                                                    <input type="text" class="form-control" id="city"
                                                        placeholder=" ">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label class="form-label"
                                                        for="state">{{ __('e-commerce.state') }}</label>
                                                    <input type="text" class="form-control" id="state"
                                                        placeholder=" ">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label class="form-label"
                                                        for="code">{{ __('e-commerce.zip') }}</label>
                                                    <input type="text" class="form-control" id="code"
                                                        placeholder=" ">
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit"
                                            class="btn btn-primary">{{ __('e-commerce.save_changes') }}</button>
                                    </form>
                                </div>
                            </div>
                            <div class="card border border-dashed border-2 shadow-none mb-0 rounded border-primary">
                                <div class="card-header">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <h4 class="mb-0">{{ __('e-commerce.secure_your_acc') }}</h4>
                                        <button class="btn btn-primary">{{ __('e-commerce.enable') }}</button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="d-flex align-items-center gap-3">
                                        <div>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="32"
                                                viewBox="0 0 24 24" fill="none" class="text-success">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M11.9845 21.606C11.9845 21.606 19.6565 19.283 19.6565 12.879C19.6565 6.474 19.9345 5.974 19.3195 5.358C18.7035 4.742 12.9905 2.75 11.9845 2.75C10.9785 2.75 5.26551 4.742 4.65051 5.358C4.03451 5.974 4.31251 6.474 4.31251 12.879C4.31251 19.283 11.9845 21.606 11.9845 21.606Z"
                                                    stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path d="M9.38591 11.8746L11.2779 13.7696L15.1759 9.86963"
                                                    stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg>
                                        </div>
                                        <p class=" mb-0">{{ __('e-commerce.two_factor') }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card">
                <div class="card-header">
                    <h4 class="mb-0">{{ __('e-commerce.buy_it_again') }}</h4>
                </div>
                <div class="card-body">
                    <ul class="list-inline m-0 p-0">
                        <li class="d-flex align-items-center mb-4 flex-wrap justify-content-center">
                            <div class="mb-0 mb-xl-0 mb-md-0 mb-lg-4">
                                <img src="{{ asset('modules/e-commerce/images/product/04.png') }}"
                                    alt="user-profile"
                                    class="img-fluid rounded object-contain avatar-80 iq-product-bg">
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <a href="{{ route('e-commerce.product-detail') }}" class="h6 iq-product-detail">
                                    {{ __('e-commerce.biker’s_jacket') }}
                                </a>
                                <h5 class="text-primary mt-2 mb-0">$45.99</h5>
                                <small class="mb-0">{{ __('e-commerce.buy_on') }} Jan 2021</small>
                            </div>
                            <a class="btn btn-primary btn-icon btn-sm rounded-circle"
                                href="{{ route('e-commerce.order-process') }}" role="button">
                                <span class="btn-inner">
                                    <svg class="icon-32" width="32" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path opacity="0.4" fill-rule="evenodd" clip-rule="evenodd"
                                            d="M5.91064 20.5886C5.91064 19.7486 6.59064 19.0686 7.43064 19.0686C8.26064 19.0686 8.94064 19.7486 8.94064 20.5886C8.94064 21.4186 8.26064 22.0986 7.43064 22.0986C6.59064 22.0986 5.91064 21.4186 5.91064 20.5886ZM17.1606 20.5886C17.1606 19.7486 17.8406 19.0686 18.6806 19.0686C19.5106 19.0686 20.1906 19.7486 20.1906 20.5886C20.1906 21.4186 19.5106 22.0986 18.6806 22.0986C17.8406 22.0986 17.1606 21.4186 17.1606 20.5886Z"
                                            fill="currentColor"></path>
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M20.1907 6.34909C20.8007 6.34909 21.2007 6.55909 21.6007 7.01909C22.0007 7.47909 22.0707 8.13909 21.9807 8.73809L21.0307 15.2981C20.8507 16.5591 19.7707 17.4881 18.5007 17.4881H7.59074C6.26074 17.4881 5.16074 16.4681 5.05074 15.1491L4.13074 4.24809L2.62074 3.98809C2.22074 3.91809 1.94074 3.52809 2.01074 3.12809C2.08074 2.71809 2.47074 2.44809 2.88074 2.50809L5.26574 2.86809C5.60574 2.92909 5.85574 3.20809 5.88574 3.54809L6.07574 5.78809C6.10574 6.10909 6.36574 6.34909 6.68574 6.34909H20.1907ZM14.1307 11.5481H16.9007C17.3207 11.5481 17.6507 11.2081 17.6507 10.7981C17.6507 10.3781 17.3207 10.0481 16.9007 10.0481H14.1307C13.7107 10.0481 13.3807 10.3781 13.3807 10.7981C13.3807 11.2081 13.7107 11.5481 14.1307 11.5481Z"
                                            fill="currentColor"></path>
                                    </svg>
                                </span>
                            </a>
                        </li>
                        <li class="d-flex align-items-center mb-4 flex-wrap justify-content-center">
                            <div class="mb-0 mb-xl-0 mb-md-0 mb-lg-4">
                                <img src="{{ asset('modules/e-commerce/images/product/06.png') }}"
                                    alt="user-profile"
                                    class="img-fluid rounded object-contain avatar-80 iq-product-bg">
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <a href="{{ route('e-commerce.product-detail') }}" class="h6 iq-product-detail">
                                    {{ __('e-commerce.blue_side_bag') }}
                                </a>
                                <h5 class="text-primary mt-2  mb-0">$19.42</h5>
                                <small class="mb-0">{{ __('e-commerce.buy_on') }} Dec 2020</small>
                            </div>
                            <a class="btn btn-primary btn-icon btn-sm rounded-circle"
                                href="{{ route('e-commerce.order-process') }}" role="button">
                                <span class="btn-inner">
                                    <svg class="icon-32" width="32" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path opacity="0.4" fill-rule="evenodd" clip-rule="evenodd"
                                            d="M5.91064 20.5886C5.91064 19.7486 6.59064 19.0686 7.43064 19.0686C8.26064 19.0686 8.94064 19.7486 8.94064 20.5886C8.94064 21.4186 8.26064 22.0986 7.43064 22.0986C6.59064 22.0986 5.91064 21.4186 5.91064 20.5886ZM17.1606 20.5886C17.1606 19.7486 17.8406 19.0686 18.6806 19.0686C19.5106 19.0686 20.1906 19.7486 20.1906 20.5886C20.1906 21.4186 19.5106 22.0986 18.6806 22.0986C17.8406 22.0986 17.1606 21.4186 17.1606 20.5886Z"
                                            fill="currentColor"></path>
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M20.1907 6.34909C20.8007 6.34909 21.2007 6.55909 21.6007 7.01909C22.0007 7.47909 22.0707 8.13909 21.9807 8.73809L21.0307 15.2981C20.8507 16.5591 19.7707 17.4881 18.5007 17.4881H7.59074C6.26074 17.4881 5.16074 16.4681 5.05074 15.1491L4.13074 4.24809L2.62074 3.98809C2.22074 3.91809 1.94074 3.52809 2.01074 3.12809C2.08074 2.71809 2.47074 2.44809 2.88074 2.50809L5.26574 2.86809C5.60574 2.92909 5.85574 3.20809 5.88574 3.54809L6.07574 5.78809C6.10574 6.10909 6.36574 6.34909 6.68574 6.34909H20.1907ZM14.1307 11.5481H16.9007C17.3207 11.5481 17.6507 11.2081 17.6507 10.7981C17.6507 10.3781 17.3207 10.0481 16.9007 10.0481H14.1307C13.7107 10.0481 13.3807 10.3781 13.3807 10.7981C13.3807 11.2081 13.7107 11.5481 14.1307 11.5481Z"
                                            fill="currentColor"></path>
                                    </svg>
                                </span>
                            </a>
                        </li>
                        <li class="d-flex align-items-center mb-4 flex-wrap justify-content-center">
                            <div class="mb-0 mb-xl-0 mb-md-0 mb-lg-4">
                                <img src="{{ asset('modules/e-commerce/images/product/07.png') }}"
                                    alt="user-profile"
                                    class="img-fluid rounded object-contain avatar-80 iq-product-bg">
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <a href="{{ route('e-commerce.product-detail') }}" class="h6 iq-product-detail">
                                    {{ __('e-commerce.sweater') }}
                                </a>
                                <h5 class="text-primary mt-2  mb-0">$26.00</h5>
                                <small class="mb-0">{{ __('e-commerce.buy_on') }} Jan 2021</small>
                            </div>
                            <a class="btn btn-primary btn-icon btn-sm rounded-circle"
                                href="{{ route('e-commerce.order-process') }}" role="button">
                                <span class="btn-inner">
                                    <svg class="icon-32" width="32" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path opacity="0.4" fill-rule="evenodd" clip-rule="evenodd"
                                            d="M5.91064 20.5886C5.91064 19.7486 6.59064 19.0686 7.43064 19.0686C8.26064 19.0686 8.94064 19.7486 8.94064 20.5886C8.94064 21.4186 8.26064 22.0986 7.43064 22.0986C6.59064 22.0986 5.91064 21.4186 5.91064 20.5886ZM17.1606 20.5886C17.1606 19.7486 17.8406 19.0686 18.6806 19.0686C19.5106 19.0686 20.1906 19.7486 20.1906 20.5886C20.1906 21.4186 19.5106 22.0986 18.6806 22.0986C17.8406 22.0986 17.1606 21.4186 17.1606 20.5886Z"
                                            fill="currentColor"></path>
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M20.1907 6.34909C20.8007 6.34909 21.2007 6.55909 21.6007 7.01909C22.0007 7.47909 22.0707 8.13909 21.9807 8.73809L21.0307 15.2981C20.8507 16.5591 19.7707 17.4881 18.5007 17.4881H7.59074C6.26074 17.4881 5.16074 16.4681 5.05074 15.1491L4.13074 4.24809L2.62074 3.98809C2.22074 3.91809 1.94074 3.52809 2.01074 3.12809C2.08074 2.71809 2.47074 2.44809 2.88074 2.50809L5.26574 2.86809C5.60574 2.92909 5.85574 3.20809 5.88574 3.54809L6.07574 5.78809C6.10574 6.10909 6.36574 6.34909 6.68574 6.34909H20.1907ZM14.1307 11.5481H16.9007C17.3207 11.5481 17.6507 11.2081 17.6507 10.7981C17.6507 10.3781 17.3207 10.0481 16.9007 10.0481H14.1307C13.7107 10.0481 13.3807 10.3781 13.3807 10.7981C13.3807 11.2081 13.7107 11.5481 14.1307 11.5481Z"
                                            fill="currentColor"></path>
                                    </svg>
                                </span>
                            </a>
                        </li>
                        <li class="d-flex align-items-center flex-wrap justify-content-center">
                            <div class="mb-0 mb-xl-0 mb-md-0 mb-lg-4">
                                <img src="{{ asset('modules/e-commerce/images/product/02.png') }}"
                                    alt="user-profile"
                                    class="img-fluid rounded object-contain avatar-80 iq-product-bg">
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <a href="{{ route('e-commerce.product-detail') }}" class="h6 iq-product-detail">
                                    {{ __('e-commerce.shoe') }}
                                </a>
                                <h5 class="text-primary mt-2  mb-0">$19.99</h5>
                                <small class="mb-0">{{ __('e-commerce.buy_on') }} Jan 2021</small>
                            </div>
                            <a class="btn btn-primary btn-icon btn-sm rounded-circle"
                                href="{{ route('e-commerce.order-process') }}" role="button">
                                <span class="btn-inner">
                                    <svg class="icon-32" width="32" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path opacity="0.4" fill-rule="evenodd" clip-rule="evenodd"
                                            d="M5.91064 20.5886C5.91064 19.7486 6.59064 19.0686 7.43064 19.0686C8.26064 19.0686 8.94064 19.7486 8.94064 20.5886C8.94064 21.4186 8.26064 22.0986 7.43064 22.0986C6.59064 22.0986 5.91064 21.4186 5.91064 20.5886ZM17.1606 20.5886C17.1606 19.7486 17.8406 19.0686 18.6806 19.0686C19.5106 19.0686 20.1906 19.7486 20.1906 20.5886C20.1906 21.4186 19.5106 22.0986 18.6806 22.0986C17.8406 22.0986 17.1606 21.4186 17.1606 20.5886Z"
                                            fill="currentColor"></path>
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M20.1907 6.34909C20.8007 6.34909 21.2007 6.55909 21.6007 7.01909C22.0007 7.47909 22.0707 8.13909 21.9807 8.73809L21.0307 15.2981C20.8507 16.5591 19.7707 17.4881 18.5007 17.4881H7.59074C6.26074 17.4881 5.16074 16.4681 5.05074 15.1491L4.13074 4.24809L2.62074 3.98809C2.22074 3.91809 1.94074 3.52809 2.01074 3.12809C2.08074 2.71809 2.47074 2.44809 2.88074 2.50809L5.26574 2.86809C5.60574 2.92909 5.85574 3.20809 5.88574 3.54809L6.07574 5.78809C6.10574 6.10909 6.36574 6.34909 6.68574 6.34909H20.1907ZM14.1307 11.5481H16.9007C17.3207 11.5481 17.6507 11.2081 17.6507 10.7981C17.6507 10.3781 17.3207 10.0481 16.9007 10.0481H14.1307C13.7107 10.0481 13.3807 10.3781 13.3807 10.7981C13.3807 11.2081 13.7107 11.5481 14.1307 11.5481Z"
                                            fill="currentColor"></path>
                                    </svg>
                                </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="overflow-hidden" id="collection-slider">
                    <ul class="p-0 m-0 mb-2 swiper-wrapper list-inline">
                        <li class="swiper-slide card-slide">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex justify-content-center">
                                        <img src="{{ asset('modules/e-commerce/images/product/03.png') }}"
                                            class="img-fluid object-contain avatar-100" alt="product">
                                    </div>
                                    <div class="text-center">
                                        <h6 class="text-primary">
                                            {{ __('e-commerce.new_coll') }}
                                        </h6>
                                        <p class="small">{{ __('e-commerce.get_off_on') }} Headphones</p>
                                        <button class="btn btn-primary"
                                            type="submit">{{ __('e-commerce.view_now') }}</button>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="swiper-slide card-slide">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex justify-content-center">
                                        <img src="{{ asset('modules/e-commerce/images/product/01.png') }}"
                                            class="img-fluid object-contain avatar-100" alt="product">
                                    </div>
                                    <div class="text-center">
                                        <h6 class="text-primary">
                                            {{ __('e-commerce.new_coll') }}
                                        </h6>
                                        <p class="small">{{ __('e-commerce.get_off_on') }} Biker's Jacket</p>
                                        <button class="btn btn-primary"
                                            type="submit">{{ __('e-commerce.view_now') }}</button>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <x-modules.e-commerce.widgets.product-slider />
    </div>

</x-app-layout>
