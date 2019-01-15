<x-app-layout layout="e-commerce" :assets="$assets ?? []" title='3D Product Detail' isSweetalert="true" isSwiperSlider="true">
    @push('head')
        <link rel="stylesheet" href="{{asset('vendor/three.js/dat.gui.css')}}">
    @endpush
    <div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-7 d-flex align-items-center justify-content-center">
                        <div class="product-3d" id="three-js-webgl" data-path="{{asset('vendor/3d/Shoes.gltf')}}">
                        </div>
                    </div>
                    <div class="col-lg-5 mt-4 mt-lg-0">
                        <div class="border-bottom">
                            <div class="d-flex flex-column align-content-between justify-items-center mb-3">
                                <div class="d-flex justify-content-between mb-2">
                                    <h2 class="mb-0">{{__('e-commerce.hope-ui')}}</h2>
                                    <div class="d-flex justify-content-end ">
                                        <button class="btn btn-primary-subtle btn-icon rounded-pill" href="javascript:void(0);" data-bs-toggle="offcanvas" data-bs-target="#share-btn" aria-controls="share-btn" role="button">
                                            <span class="btn-inner">
                                                <svg class="icon-24" xmlns="http://www.w3.org/2000/svg" width="24" viewBox="0 0 24 24" fill="none">
                                                    <path d="M5.50052 15C6.37518 14.9974 7.21675 14.6653 7.85752 14.07L14.1175 17.647C13.9078 18.4666 14.0002 19.3343 14.378 20.0913C14.7557 20.8483 15.3935 21.4439 16.1745 21.7692C16.9555 22.0944 17.8275 22.1274 18.6309 21.8623C19.4343 21.5971 20.1153 21.0515 20.5493 20.3252C20.9832 19.599 21.1411 18.7408 20.994 17.9076C20.8469 17.0745 20.4047 16.3222 19.7483 15.7885C19.0918 15.2548 18.2652 14.9753 17.4195 15.0013C16.5739 15.0273 15.7659 15.357 15.1435 15.93L8.88352 12.353C8.94952 12.103 8.98552 11.844 8.99152 11.585L15.1415 8.06996C15.7337 8.60874 16.4932 8.92747 17.2925 8.97268C18.0918 9.01789 18.8823 8.78684 19.5315 8.31828C20.1806 7.84972 20.6489 7.17217 20.8577 6.39929C21.0666 5.6264 21.0032 4.80522 20.6784 4.0735C20.3535 3.34178 19.7869 2.74404 19.0735 2.38056C18.3602 2.01708 17.5436 1.90998 16.7607 2.07723C15.9777 2.24447 15.2761 2.67588 14.7736 3.29909C14.271 3.92229 13.9981 4.69937 14.0005 5.49996C14.0045 5.78796 14.0435 6.07496 14.1175 6.35296L8.43352 9.59997C8.1039 9.09003 7.64729 8.67461 7.10854 8.39454C6.5698 8.11446 5.96746 7.97937 5.3607 8.00251C4.75395 8.02566 4.16365 8.20627 3.64781 8.52658C3.13197 8.84689 2.70834 9.29589 2.41853 9.82946C2.12872 10.363 1.98271 10.9628 1.99484 11.5699C2.00697 12.177 2.17683 12.7704 2.48772 13.292C2.79861 13.8136 3.23984 14.2453 3.76807 14.5447C4.29629 14.8442 4.89333 15.0011 5.50052 15Z" fill="currentColor"></path>
                                                </svg>
                                            </span>
                                        </button>
                                    </div>
                                </div>
                                <div class=" d-flex align-items-center w-100">
                                    <svg class="icon-24" width="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" >
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M13.1043 4.17701L14.9317 7.82776C15.1108 8.18616 15.4565 8.43467 15.8573 8.49218L19.9453 9.08062C20.9554 9.22644 21.3573 10.4505 20.6263 11.1519L17.6702 13.9924C17.3797 14.2718 17.2474 14.6733 17.3162 15.0676L18.0138 19.0778C18.1856 20.0698 17.1298 20.8267 16.227 20.3574L12.5732 18.4627C12.215 18.2768 11.786 18.2768 11.4268 18.4627L7.773 20.3574C6.87023 20.8267 5.81439 20.0698 5.98724 19.0778L6.68385 15.0676C6.75257 14.6733 6.62033 14.2718 6.32982 13.9924L3.37368 11.1519C2.64272 10.4505 3.04464 9.22644 4.05466 9.08062L8.14265 8.49218C8.54354 8.43467 8.89028 8.18616 9.06937 7.82776L10.8957 4.17701C11.3477 3.27433 12.6523 3.27433 13.1043 4.17701Z" fill="#FFD329"></path>
                                    </svg>
                                    <svg class="icon-24" width="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" >
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M13.1043 4.17701L14.9317 7.82776C15.1108 8.18616 15.4565 8.43467 15.8573 8.49218L19.9453 9.08062C20.9554 9.22644 21.3573 10.4505 20.6263 11.1519L17.6702 13.9924C17.3797 14.2718 17.2474 14.6733 17.3162 15.0676L18.0138 19.0778C18.1856 20.0698 17.1298 20.8267 16.227 20.3574L12.5732 18.4627C12.215 18.2768 11.786 18.2768 11.4268 18.4627L7.773 20.3574C6.87023 20.8267 5.81439 20.0698 5.98724 19.0778L6.68385 15.0676C6.75257 14.6733 6.62033 14.2718 6.32982 13.9924L3.37368 11.1519C2.64272 10.4505 3.04464 9.22644 4.05466 9.08062L8.14265 8.49218C8.54354 8.43467 8.89028 8.18616 9.06937 7.82776L10.8957 4.17701C11.3477 3.27433 12.6523 3.27433 13.1043 4.17701Z" fill="#FFD329"></path>
                                    </svg>
                                    <svg class="icon-24" width="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" >
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M13.1043 4.17701L14.9317 7.82776C15.1108 8.18616 15.4565 8.43467 15.8573 8.49218L19.9453 9.08062C20.9554 9.22644 21.3573 10.4505 20.6263 11.1519L17.6702 13.9924C17.3797 14.2718 17.2474 14.6733 17.3162 15.0676L18.0138 19.0778C18.1856 20.0698 17.1298 20.8267 16.227 20.3574L12.5732 18.4627C12.215 18.2768 11.786 18.2768 11.4268 18.4627L7.773 20.3574C6.87023 20.8267 5.81439 20.0698 5.98724 19.0778L6.68385 15.0676C6.75257 14.6733 6.62033 14.2718 6.32982 13.9924L3.37368 11.1519C2.64272 10.4505 3.04464 9.22644 4.05466 9.08062L8.14265 8.49218C8.54354 8.43467 8.89028 8.18616 9.06937 7.82776L10.8957 4.17701C11.3477 3.27433 12.6523 3.27433 13.1043 4.17701Z" fill="#FFD329"></path>
                                    </svg>
                                    <svg class="icon-24" width="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" >
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M13.1043 4.17701L14.9317 7.82776C15.1108 8.18616 15.4565 8.43467 15.8573 8.49218L19.9453 9.08062C20.9554 9.22644 21.3573 10.4505 20.6263 11.1519L17.6702 13.9924C17.3797 14.2718 17.2474 14.6733 17.3162 15.0676L18.0138 19.0778C18.1856 20.0698 17.1298 20.8267 16.227 20.3574L12.5732 18.4627C12.215 18.2768 11.786 18.2768 11.4268 18.4627L7.773 20.3574C6.87023 20.8267 5.81439 20.0698 5.98724 19.0778L6.68385 15.0676C6.75257 14.6733 6.62033 14.2718 6.32982 13.9924L3.37368 11.1519C2.64272 10.4505 3.04464 9.22644 4.05466 9.08062L8.14265 8.49218C8.54354 8.43467 8.89028 8.18616 9.06937 7.82776L10.8957 4.17701C11.3477 3.27433 12.6523 3.27433 13.1043 4.17701Z" fill="#FFD329"></path>
                                    </svg>
                                    <svg class="icon-24" width="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" >
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M13.1043 4.17701L14.9317 7.82776C15.1108 8.18616 15.4565 8.43467 15.8573 8.49218L19.9453 9.08062C20.9554 9.22644 21.3573 10.4505 20.6263 11.1519L17.6702 13.9924C17.3797 14.2718 17.2474 14.6733 17.3162 15.0676L18.0138 19.0778C18.1856 20.0698 17.1298 20.8267 16.227 20.3574L12.5732 18.4627C12.215 18.2768 11.786 18.2768 11.4268 18.4627L7.773 20.3574C6.87023 20.8267 5.81439 20.0698 5.98724 19.0778L6.68385 15.0676C6.75257 14.6733 6.62033 14.2718 6.32982 13.9924L3.37368 11.1519C2.64272 10.4505 3.04464 9.22644 4.05466 9.08062L8.14265 8.49218C8.54354 8.43467 8.89028 8.18616 9.06937 7.82776L10.8957 4.17701C11.3477 3.27433 12.6523 3.27433 13.1043 4.17701Z" fill="#FFD329"></path>
                                    </svg>
                                    <h6 class="ms-2 mb-0">4.5</h6>
                                </div>
                            </div>
                            <div class="d-flex my-4">
                                <h4 class="mb-0"> Price:</h4>
                                <h4 class="text-primary mb-0 ms-2">$99.00</h4>
                            </div>
                        </div>
                        <div class="border-bottom">
                            <p class="py-4 mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lacus eleifend ultrices vestibulum tempor augue bibendum dolor quam malesuada.consectetur adipiscing elit.</p>
                        </div>
                        <div class="d-flex flex-column py-4">
                            <div class="d-flex align-items-center mb-3">
                                <span class="text-dark">{{__('e-commerce.free_del')}}</span>
                                <span class="text-primary  ms-2">{{__('e-commerce.mon')}} Feb 28</span>
                            </div>
                            <div class="d-flex align-items-center mb-3">
                                <span class="text-dark">{{__('e-commerce.fastest_del')}}</span>
                                <span class="text-primary  ms-2">Today</span>
                            </div>
                        </div>
                        <div>
                        <div class="btn-group iq-qty-btn mb-3" data-qty="btn" role="group">
                            <button type="button" class="btn btn-sm btn-outline-light iq-quantity-minus">
                                <svg xmlns="http://www.w3.org/2000/svg" width="6" height="3" viewBox="0 0 6 3" fill="none">
                                    <path d="M5.22727 0.886364H0.136364V2.13636H5.22727V0.886364Z" fill="currentColor"></path>
                                </svg>
                            </button>
                            <input type="text" class="btn btn-sm btn-outline-light input-display" data-qty="input" pattern="^(0|[1-9][0-9]*)$" minlength="1" maxlength="2" value="1" title="Qty" readonly="">
                            <button type="button" class="btn btn-sm btn-outline-light iq-quantity-plus">
                                <svg xmlns="http://www.w3.org/2000/svg" width="9" height="8" viewBox="0 0 9 8" fill="none">
                                    <path d="M3.63636 7.70455H4.90909V4.59091H8.02273V3.31818H4.90909V0.204545H3.63636V3.31818H0.522727V4.59091H3.63636V7.70455Z" fill="currentColor"></path>
                                </svg>
                            </button>
                        </div>
                            </div>
                            <div class="d-flex py-4 flex-wrap gap-3">
                            <a href="{{route('e-commerce.order-process')}}" class="btn btn-warning d-flex gap-2 align-items-center">
                                <span class="btn-inner d-flex ">
                                    <svg class="icon-20" width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path opacity="0.4" d="M16.6203 22H7.3797C4.68923 22 2.5 19.8311 2.5 17.1646V11.8354C2.5 9.16894 4.68923 7 7.3797 7H16.6203C19.3108 7 21.5 9.16894 21.5 11.8354V17.1646C21.5 19.8311 19.3108 22 16.6203 22Z" fill="currentColor"></path>
                                        <path d="M15.7551 10C15.344 10 15.0103 9.67634 15.0103 9.27754V6.35689C15.0103 4.75111 13.6635 3.44491 12.0089 3.44491C11.2472 3.44491 10.4477 3.7416 9.87861 4.28778C9.30854 4.83588 8.99272 5.56508 8.98974 6.34341V9.27754C8.98974 9.67634 8.65604 10 8.24487 10C7.8337 10 7.5 9.67634 7.5 9.27754V6.35689C7.50497 5.17303 7.97771 4.08067 8.82984 3.26285C9.68098 2.44311 10.7814 2.03179 12.0119 2C14.4849 2 16.5 3.95449 16.5 6.35689V9.27754C16.5 9.67634 16.1663 10 15.7551 10Z" fill="currentColor"></path>
                                    </svg>
                                </span>
                                Buy Now
                            </a>
                            <button class="btn btn-primary d-flex gap-2 cart-btn align-items-center">
                                <span class="btn-inner d-flex">
                                    <svg class="icon-20" width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path opacity="0.4" fill-rule="evenodd" clip-rule="evenodd" d="M5.91064 20.5886C5.91064 19.7486 6.59064 19.0686 7.43064 19.0686C8.26064 19.0686 8.94064 19.7486 8.94064 20.5886C8.94064 21.4186 8.26064 22.0986 7.43064 22.0986C6.59064 22.0986 5.91064 21.4186 5.91064 20.5886ZM17.1606 20.5886C17.1606 19.7486 17.8406 19.0686 18.6806 19.0686C19.5106 19.0686 20.1906 19.7486 20.1906 20.5886C20.1906 21.4186 19.5106 22.0986 18.6806 22.0986C17.8406 22.0986 17.1606 21.4186 17.1606 20.5886Z" fill="currentColor"></path>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M20.1907 6.34909C20.8007 6.34909 21.2007 6.55909 21.6007 7.01909C22.0007 7.47909 22.0707 8.13909 21.9807 8.73809L21.0307 15.2981C20.8507 16.5591 19.7707 17.4881 18.5007 17.4881H7.59074C6.26074 17.4881 5.16074 16.4681 5.05074 15.1491L4.13074 4.24809L2.62074 3.98809C2.22074 3.91809 1.94074 3.52809 2.01074 3.12809C2.08074 2.71809 2.47074 2.44809 2.88074 2.50809L5.26574 2.86809C5.60574 2.92909 5.85574 3.20809 5.88574 3.54809L6.07574 5.78809C6.10574 6.10909 6.36574 6.34909 6.68574 6.34909H20.1907ZM14.1307 11.5481H16.9007C17.3207 11.5481 17.6507 11.2081 17.6507 10.7981C17.6507 10.3781 17.3207 10.0481 16.9007 10.0481H14.1307C13.7107 10.0481 13.3807 10.3781 13.3807 10.7981C13.3807 11.2081 13.7107 11.5481 14.1307 11.5481Z" fill="currentColor"></path>
                                    </svg>
                                </span>
                                Add to cart
                            </button>
                            <a href="#" class="btn btn-info d-flex gap-2 align-items-center wishlist-btn">
                                <span class="btn-inner d-flex ">
                                    <svg class="icon-20" width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path opacity="0.4" d="M11.7761 21.8374C9.49311 20.4273 7.37081 18.7645 5.44807 16.8796C4.09069 15.5338 3.05404 13.8905 2.41735 12.0753C1.27971 8.53523 2.60399 4.48948 6.30129 3.2884C8.2528 2.67553 10.3752 3.05175 12.0072 4.29983C13.6398 3.05315 15.7616 2.67705 17.7132 3.2884C21.4105 4.48948 22.7436 8.53523 21.606 12.0753C20.9745 13.8888 19.944 15.5319 18.5931 16.8796C16.6686 18.7625 14.5465 20.4251 12.265 21.8374L12.0161 22L11.7761 21.8374Z" fill="currentColor"></path>
                                        <path d="M12.0109 22.0001L11.776 21.8375C9.49013 20.4275 7.36487 18.7648 5.43902 16.8797C4.0752 15.5357 3.03238 13.8923 2.39052 12.0754C1.26177 8.53532 2.58605 4.48957 6.28335 3.28849C8.23486 2.67562 10.3853 3.05213 12.0109 4.31067V22.0001Z" fill="currentColor"></path>
                                        <path d="M18.2304 9.99922C18.0296 9.98629 17.8425 9.8859 17.7131 9.72157C17.5836 9.55723 17.5232 9.3434 17.5459 9.13016C17.5677 8.4278 17.168 7.78851 16.5517 7.53977C16.1609 7.43309 15.9243 7.00987 16.022 6.59249C16.1148 6.18182 16.4993 5.92647 16.8858 6.0189C16.9346 6.027 16.9816 6.04468 17.0244 6.07105C18.2601 6.54658 19.0601 7.82641 18.9965 9.22576C18.9944 9.43785 18.9117 9.63998 18.7673 9.78581C18.6229 9.93164 18.4291 10.0087 18.2304 9.99922Z" fill="currentColor"></path>
                                    </svg>
                                </span>
                                Wishlist
                            </a>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <nav class="tab-bottom-bordered">
                    <div class="mb-0 nav nav-tabs" id="nav-tab1" role="tablist">
                        <button class="nav-link active" id="nav-description-tab" data-bs-toggle="tab" data-bs-target="#nav-description" type="button" role="tab" aria-controls="nav-description" aria-selected="true">Description</button>
                        <button class="nav-link" id="nav-info-tab" data-bs-toggle="tab" data-bs-target="#nav-info" type="button" role="tab" aria-controls="nav-info" aria-selected="false">Info</button>
                        <button class="nav-link" id="nav-review-tab" data-bs-toggle="tab" data-bs-target="#nav-review" type="button" role="tab" aria-controls="nav-review" aria-selected="false">Reviews(2)</button>
                    </div>
                </nav>
                <div class="tab-content mt-4" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-description" role="tabpanel" aria-labelledby="nav-description-tab">
                        <div class="d-flex flex-column">
                            <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lacus eleifend ultrices vestibulum tempor augue bibendum dolor quam malesuad.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lacus eleifend ultrices vestibulum tempor augue bibendum dolor quam malesuad.</p>
                            <div class="row row-cols-2 row-cols-lg-5 py-3">
                                <div class="col">
                                    <img src="{{asset('modules/e-commerce/images/product-detail/10.png')}}" alt="product-details" class="img-fluid iq-product-img rounded-2 w-100 ">
                                </div>
                                <div class="col">
                                    <img src="{{asset('modules/e-commerce/images/product-detail/11.png')}}" alt="product-details" class="img-fluid iq-product-img rounded-2  w-100 ">
                                </div>
                                <div class="col">
                                    <img src="{{asset('modules/e-commerce/images/product-detail/12.png')}}" alt="product-details" class="img-fluid iq-product-img rounded-2 w-100  ">
                                </div>
                                <div class="col">
                                    <img src="{{asset('modules/e-commerce/images/product-detail/13.png')}}" alt="product-details" class="img-fluid iq-product-img rounded-2  w-100 ">
                                </div>
                                <div class="col">
                                    <img src="{{asset('modules/e-commerce/images/product-detail/14.png')}}" alt="product-details" class="img-fluid iq-product-img rounded-2  w-100  ">
                                </div>
                            </div>
                            <p class="mb-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lacus eleifend ultrices vestibulum tempor augue bibendum dolor quam malesuad.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lacus eleifend ultrices vestibulum tempor augue bibendum dolor quam malesuad.</p>
                            <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lacus eleifend ultrices vestibulum tempor augue bibendum dolor quam malesuad. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lacus eleifend ultrices vestibulum tempor augue bibendum dolor quam malesuad.</p>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-info" role="tabpanel" aria-labelledby="nav-info-tab">
                        <table class="table mb-0 table-bordered">
                            <tbody>
                                <tr>
                                    <th>
                                        Type
                                    </th>
                                    <td>
                                        Backpack
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        Ideal For
                                    </th>
                                    <td>
                                        Men & Women
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        Trolley Support
                                    </th>
                                    <td>
                                        No
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        Laptop Sleeve
                                    </th>
                                    <td>
                                        No
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        With Rain Cover
                                    </th>
                                    <td>
                                        No
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        Style Code
                                    </th>
                                    <td>
                                        Provogue_Day_002
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        Color Code
                                    </th>
                                    <td>
                                        Grey, Black
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        Material, Waterproof
                                    </th>
                                    <td>
                                        Material: Polyester, Waterproof: Yes
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        Number of Compartments
                                    </th>
                                    <td>
                                        2
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        Pattern
                                    </th>
                                    <td>
                                        Self Design
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="nav-review" role="tabpanel" aria-labelledby="nav-review-tab">
                        <h2 class="mb-0 border-bottom pb-3">Review</h2>
                        <div>
                            <div class="card shadow-none bg-transparent border">
                                <div class="card-body">
                                    <div class="d-flex flex-sm-nowrap flex-wrap">
                                        <div>
                                            <img class="img-fluid object-contain avatar-120 rounded" src="{{asset('modules/e-commerce/images/user/04.png')}}" alt="01">
                                        </div>
                                        <div class="ms-0 ms-sm-3">
                                            <div class="d-flex justify-content-between align-items-center my-2 my-lg-0">
                                                <h6 class="mb-0">Emma Jones</h6>
                                                <a class="text-dark " href="javascript:void(0)">Reply</a>
                                            </div>
                                            <small class="text-primary">March 01st 2021</small>
                                            <p class="mt-2 mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam ut eu morbi tincidunt erat egestas quisque ultrices ut. Vel elementum blandit et tellus sit tincidunt.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card shadow-none bg-transparent border">
                                <div class="card-body">
                                    <div class="d-flex flex-sm-nowrap flex-wrap">
                                        <div>
                                            <img class="img-fluid object-contain avatar-120 rounded" src="{{asset('modules/e-commerce/images/user/01.png')}}" alt="01">
                                        </div>
                                        <div class="ms-0 ms-sm-3">
                                            <div class="d-flex justify-content-between align-items-center my-2 my-lg-0">
                                                <h6 class="mb-0">Jackson Jones</h6>
                                                <a class="text-dark " href="javascript:void(0)">Reply</a>
                                            </div>
                                            <small class="text-primary">March 20th 2021</small>
                                            <p class="mt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam ut eu morbi tincidunt erat egestas quisque ultrices ut. Vel elementum blandit et tellus sit tincidunt.</p>
                                            <div class="d-flex mb-3">
                                                <a class="" href="javascript:void(0)">Reply To Jackson Jones</a>
                                                <a class="text-body ms-3" href="javascript:void(0)">Cancel Reply</a>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group ">
                                                    <input type="text" class="form-control"  placeholder=" Hi there, I love your blog ">
                                                </div>
                                            </div>
                                            <div class="d-flex">
                                                <button type="submit" class="btn btn-primary rounded">Get Started</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <p class="my-4">- There are no reviews yet</p>
                        <h4 class="mb-3">Be the first to Review</h4>
                        <form>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="full-name" class="form-label">First Name<span class="text-danger">*</span></label>
                                        <input type="text" class="form-control w-100" id="full-name" placeholder=" John">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="last-name" class="form-label">Email ID<span class="text-danger">*</span></label>
                                        <input type="text" class="form-control w-100" id="last-name" placeholder="XYZ@exampleemail.com ">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="message" class="form-label">Enter your Review<span class="text-danger">*</span></label>
                                        <textarea class="form-control" rows="5" id="message" aria-label="With textarea" spellcheck="false" placeholder="Lorem ipsum dolor sit amet, consectetur adipiscing elit"></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-12 d-flex justify-content-between">
                                    <div class="form-check mb-3">
                                        <input type="checkbox" class="form-check-input" id="customCheck1">
                                        <label class="form-check-label" for="customCheck1">Save my name, email, and website in this browser for the next time I comment.<span class="text-danger">*</span></label>
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-12 col-lg-12">
        <div class="row row-cols-1">
            <div class="d-flex py-4">
                <h4>{{__('e-commerce.similar_prod')}}</h4>
            </div>
            <div class="overflow-hidden position-relative ecommerce-slider slider-circle-btn" id="ecommerce-slider">
                <ul  class="p-0 m-0 mb-2 swiper-wrapper list-inline">
                    <li class="swiper-slide card-slide">
                        <div class="col">
                            <x-modules.e-commerce.widgets.product-card  slidercard="mb-0" productname="{{__('e-commerce.shoe')}}" statusdetails="" statuscolor="" productimage="product/06.png" productrating="3.5" productprice="$56.00"/>
                        </div>
                    </li>
                    <li class="swiper-slide card-slide">
                        <div class="col">
                            <x-modules.e-commerce.widgets.product-card  slidercard="mb-0" productname="{{__('e-commerce.pink_triusers')}}" statusdetails="Sold" statuscolor="warning" productimage="product/07.png" productrating="3.5" productprice="$65.00"/>
                        </div>
                    </li>
                    <li class="swiper-slide card-slide">
                        <div class="col">
                            <x-modules.e-commerce.widgets.product-card  slidercard="" productname="{{__('e-commerce.knit_shrug')}}" statusdetails="" statuscolor="" productimage="product/10.png" productrating="3.5" productprice="$56.00"/>
                        </div>
                    </li>
                    <li class="swiper-slide card-slide">
                        <div class="col">
                            <x-modules.e-commerce.widgets.product-card  slidercard="" productname="{{__('e-commerce.pink_hand')}}" statusdetails="" statuscolor="" productimage="product/11.png" productrating="3.5" productprice="$56.00"/>
                        </div>
                    </li>
                    <li class="swiper-slide card-slide">
                        <div class="col">
                            <x-modules.e-commerce.widgets.product-card  slidercard="" productname="{{__('e-commerce.biker’s_jacket')}}" statusdetails="New" statuscolor="primary" productimage="product/04.png" productrating="3.5" productprice="$65.00"/>
                        </div>
                    </li>
                    <li class="swiper-slide card-slide">
                        <div class="col">
                            <x-modules.e-commerce.widgets.product-card  slidercard="" productname="{{__('e-commerce.knit_shrug')}}" statusdetails="" statuscolor="" productimage="product/10.png" productrating="3.5" productprice="$56.00"/>
                        </div>
                    </li>
                    <li class="swiper-slide card-slide">
                        <div class="col">
                            <x-modules.e-commerce.widgets.product-card  slidercard="mb-0" productname="{{__('e-commerce.blue_hand')}}" statusdetails="" statuscolor="" productimage="product/06.png" productrating="3.5" productprice="$56.00"/>
                        </div>
                    </li>
                </ul>
                <div class="swiper-button swiper-button-next"></div>
                <div class="swiper-button swiper-button-prev"></div>
            </div>
        </div>
    </div>
</div>
<x-share-offcanvas />
@push('scripts')
<script src="{{asset('vendor/three.js/dat.gui.min.js')}}"></script>
<script src="{{asset('vendor/three.js/three.min.js')}}"></script>
<script src="{{asset('vendor/three.js/GLTFLoader.js')}}"></script>
<script src="{{asset('vendor/three.js/OrbitControl.js')}}"></script>
<script src="{{asset('vendor/three.js/DatGUI.min.js')}}"></script>
<script src="{{asset('vendor/three.js/RoomEnvironment.js')}}"></script>
<script src="{{asset('vendor/three.js/threejs-product.js')}}" type="module"></script>
@endpush
</x-app-layout>
