<x-app-layout layout="landing" :isHeader1=true>
    <x-landing-pages.widgets.sub-header subTitle="Shop" subBreadcrume="Shop" />
    <div class="inner-box">
        <div class="container">
            <div class="row row-cols-1">
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <div class="row row row-cols-lg-2 row-cols-md-1">
                                <img src="{{ asset('modules/landing-pages/images/shop/01.webp') }}" alt="01"
                                    class="img-fluid iq-product-img hover-media" loading="lazy">
                                <div class="mt-5 mt-lg-0">
                                    <h2 class="mb-4">Album</h2>
                                    <h6 class="text-primary border-bottom pb-3 mb-0">$15.00</h6>
                                    <p class="border-bottom py-3 mb-3">Lorem ipsum dolor sit amet, consectetur
                                        adipiscing elit. Lacus eleifend ultrices vestibulum tempor augue bibendum dolor
                                        quam malesuada.consectetur adipiscing elit.</p>
                                    <p class="mb-1"><span class="text-primary">SKU</span> : Woo-Album</p>
                                    <p><span class="text-primary pb-5">Category</span> : Music</p>
                                    <div class="mt-4">
                                        <div class="btn-group iq-qty-btn" data-qty="btn" role="group">
                                            <button type="button"
                                                class="btn btn-sm btn-outline-light iq-quantity-minus">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="6" height="3"
                                                    viewBox="0 0 6 3" fill="none">
                                                    <path d="M5.22727 0.886364H0.136364V2.13636H5.22727V0.886364Z"
                                                        fill="currentColor"></path>
                                                </svg>
                                            </button>
                                            <input type="text" class="btn btn-sm btn-outline-light input-display"
                                                data-qty="input" pattern="^(0|[1-9][0-9]*)$" minlength="1"
                                                maxlength="2" value="2" title="Qty" readonly>
                                            <button type="button"
                                                class="btn btn-sm btn-outline-light iq-quantity-plus">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="9" height="8"
                                                    viewBox="0 0 9 8" fill="none">
                                                    <path
                                                        d="M3.63636 7.70455H4.90909V4.59091H8.02273V3.31818H4.90909V0.204545H3.63636V3.31818H0.522727V4.59091H3.63636V7.70455Z"
                                                        fill="currentColor"></path>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="d-flex py-4 flex-wrap gap-4">
                                        <a href="#" class="btn btn-warning d-flex align-items-center gap-2">
                                            <span class="btn-inner d-flex ">
                                                <svg class="icon-20" width="20" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path opacity="0.4"
                                                        d="M16.6203 22H7.3797C4.68923 22 2.5 19.8311 2.5 17.1646V11.8354C2.5 9.16894 4.68923 7 7.3797 7H16.6203C19.3108 7 21.5 9.16894 21.5 11.8354V17.1646C21.5 19.8311 19.3108 22 16.6203 22Z"
                                                        fill="currentColor"></path>
                                                    <path
                                                        d="M15.7551 10C15.344 10 15.0103 9.67634 15.0103 9.27754V6.35689C15.0103 4.75111 13.6635 3.44491 12.0089 3.44491C11.2472 3.44491 10.4477 3.7416 9.87861 4.28778C9.30854 4.83588 8.99272 5.56508 8.98974 6.34341V9.27754C8.98974 9.67634 8.65604 10 8.24487 10C7.8337 10 7.5 9.67634 7.5 9.27754V6.35689C7.50497 5.17303 7.97771 4.08067 8.82984 3.26285C9.68098 2.44311 10.7814 2.03179 12.0119 2C14.4849 2 16.5 3.95449 16.5 6.35689V9.27754C16.5 9.67634 16.1663 10 15.7551 10Z"
                                                        fill="currentColor"></path>
                                                </svg>
                                            </span>
                                            Buy Now
                                        </a>
                                        <button class="btn btn-primary d-flex align-items-center cart-btn  gap-2">
                                            <span class="btn-inner d-flex">
                                                <svg class="icon-20" width="20" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path opacity="0.4" fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M5.91064 20.5886C5.91064 19.7486 6.59064 19.0686 7.43064 19.0686C8.26064 19.0686 8.94064 19.7486 8.94064 20.5886C8.94064 21.4186 8.26064 22.0986 7.43064 22.0986C6.59064 22.0986 5.91064 21.4186 5.91064 20.5886ZM17.1606 20.5886C17.1606 19.7486 17.8406 19.0686 18.6806 19.0686C19.5106 19.0686 20.1906 19.7486 20.1906 20.5886C20.1906 21.4186 19.5106 22.0986 18.6806 22.0986C17.8406 22.0986 17.1606 21.4186 17.1606 20.5886Z"
                                                        fill="currentColor"></path>
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M20.1907 6.34909C20.8007 6.34909 21.2007 6.55909 21.6007 7.01909C22.0007 7.47909 22.0707 8.13909 21.9807 8.73809L21.0307 15.2981C20.8507 16.5591 19.7707 17.4881 18.5007 17.4881H7.59074C6.26074 17.4881 5.16074 16.4681 5.05074 15.1491L4.13074 4.24809L2.62074 3.98809C2.22074 3.91809 1.94074 3.52809 2.01074 3.12809C2.08074 2.71809 2.47074 2.44809 2.88074 2.50809L5.26574 2.86809C5.60574 2.92909 5.85574 3.20809 5.88574 3.54809L6.07574 5.78809C6.10574 6.10909 6.36574 6.34909 6.68574 6.34909H20.1907ZM14.1307 11.5481H16.9007C17.3207 11.5481 17.6507 11.2081 17.6507 10.7981C17.6507 10.3781 17.3207 10.0481 16.9007 10.0481H14.1307C13.7107 10.0481 13.3807 10.3781 13.3807 10.7981C13.3807 11.2081 13.7107 11.5481 14.1307 11.5481Z"
                                                        fill="currentColor"></path>
                                                </svg>
                                            </span>
                                            Add to cart
                                        </button>
                                        <a href="#" class="btn btn-info d-flex align-items-center gap-2">
                                            <span class="btn-inner d-flex">
                                                <svg class="icon-20" width="20" viewBox="0 0 24 24" fill="none"
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
                                            </span>
                                            Wishlist
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row row-cols-1 mb-5">
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <nav class="tab-bottom-bordered">
                                <div class="mb-0 nav nav-tabs" id="nav-tab1" role="tablist">
                                    <button class="nav-link active" id="nav-description-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-review" type="button" role="tab"
                                        aria-controls="nav-review" aria-selected="true">Description</button>

                                    <button class="nav-link" id="nav-review-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-review" type="button" role="tab"
                                        aria-controls="nav-review" aria-selected="false" tabindex="-1">Info</button>
                                </div>
                            </nav>
                            <div class="tab-content mt-4" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="nav-description" role="tabpanel"
                                    aria-labelledby="nav-description-tab">
                                    <div class="d-flex flex-column">
                                        <h4 class="mb-4">Description</h4>
                                        <p class="mb-0">Lorem Ipsum Dolor Sit Amet, Consectetur Adipiscing Elit.
                                            Vestibulum Sagittis Orci Ac Odio Dictum Tincidunt. Donec Ut Metus Leo. Class
                                            Aptent Taciti Sociosqu Ad Litora Torquent Per Conubia Nostra, Per Inceptos
                                            Himenaeos. Sed Luctus, Dui Eu Sagittis Sodales, Nulla Nibh Sagittis Augue,
                                            Vel Porttitor Diam Enim Non Metus. Vestibulum Aliquam Augue Neque. Phasellus
                                            Tincidunt Odio Eget Ullamcorper Efficitur. Cras Placerat Ut Turpis
                                            Pellentesque Vulputate. Nam Sed Consequat Tortor. Curabitur Finibus Sapien
                                            Dolor. Ut Eleifend Tellus Nec Erat Pulvinar Dignissim. Nam Non Arcu Purus.
                                            Vivamus Et Massa Massa.</p>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="nav-review" role="tabpanel"
                                    aria-labelledby="nav-review-tab">
                                    <h4>Review</h4>
                                    <p class="my-3">There are no reviews yet</p>
                                    <h4 class="mb-3">Be the first to Review</h4>
                                    <p>Your Email Address Will Not Be Published. Required Fields Are Marked *</p>
                                    <p>Your rating *</p>
                                    <div class="mb-3">
                                        <svg class="icon-20" xmlns="http://www.w3.org/2000/svg" width="20"
                                            viewBox="0 0 24 24" fill="none">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M13.1043 4.17701L14.9317 7.82776C15.1108 8.18616 15.4565 8.43467 15.8573 8.49218L19.9453 9.08062C20.9554 9.22644 21.3573 10.4505 20.6263 11.1519L17.6702 13.9924C17.3797 14.2718 17.2474 14.6733 17.3162 15.0676L18.0138 19.0778C18.1856 20.0698 17.1298 20.8267 16.227 20.3574L12.5732 18.4627C12.215 18.2768 11.786 18.2768 11.4268 18.4627L7.773 20.3574C6.87023 20.8267 5.81439 20.0698 5.98724 19.0778L6.68385 15.0676C6.75257 14.6733 6.62033 14.2718 6.32982 13.9924L3.37368 11.1519C2.64272 10.4505 3.04464 9.22644 4.05466 9.08062L8.14265 8.49218C8.54354 8.43467 8.89028 8.18616 9.06937 7.82776L10.8957 4.17701C11.3477 3.27433 12.6523 3.27433 13.1043 4.17701Z"
                                                stroke="#FFD329" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                        <svg class="icon-20" xmlns="http://www.w3.org/2000/svg" width="20"
                                            viewBox="0 0 24 24" fill="none">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M13.1043 4.17701L14.9317 7.82776C15.1108 8.18616 15.4565 8.43467 15.8573 8.49218L19.9453 9.08062C20.9554 9.22644 21.3573 10.4505 20.6263 11.1519L17.6702 13.9924C17.3797 14.2718 17.2474 14.6733 17.3162 15.0676L18.0138 19.0778C18.1856 20.0698 17.1298 20.8267 16.227 20.3574L12.5732 18.4627C12.215 18.2768 11.786 18.2768 11.4268 18.4627L7.773 20.3574C6.87023 20.8267 5.81439 20.0698 5.98724 19.0778L6.68385 15.0676C6.75257 14.6733 6.62033 14.2718 6.32982 13.9924L3.37368 11.1519C2.64272 10.4505 3.04464 9.22644 4.05466 9.08062L8.14265 8.49218C8.54354 8.43467 8.89028 8.18616 9.06937 7.82776L10.8957 4.17701C11.3477 3.27433 12.6523 3.27433 13.1043 4.17701Z"
                                                stroke="#FFD329" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                        <svg class="icon-20" xmlns="http://www.w3.org/2000/svg" width="20"
                                            viewBox="0 0 24 24" fill="none">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M13.1043 4.17701L14.9317 7.82776C15.1108 8.18616 15.4565 8.43467 15.8573 8.49218L19.9453 9.08062C20.9554 9.22644 21.3573 10.4505 20.6263 11.1519L17.6702 13.9924C17.3797 14.2718 17.2474 14.6733 17.3162 15.0676L18.0138 19.0778C18.1856 20.0698 17.1298 20.8267 16.227 20.3574L12.5732 18.4627C12.215 18.2768 11.786 18.2768 11.4268 18.4627L7.773 20.3574C6.87023 20.8267 5.81439 20.0698 5.98724 19.0778L6.68385 15.0676C6.75257 14.6733 6.62033 14.2718 6.32982 13.9924L3.37368 11.1519C2.64272 10.4505 3.04464 9.22644 4.05466 9.08062L8.14265 8.49218C8.54354 8.43467 8.89028 8.18616 9.06937 7.82776L10.8957 4.17701C11.3477 3.27433 12.6523 3.27433 13.1043 4.17701Z"
                                                stroke="#FFD329" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                        <svg class="icon-20" xmlns="http://www.w3.org/2000/svg" width="20"
                                            viewBox="0 0 24 24" fill="none">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M13.1043 4.17701L14.9317 7.82776C15.1108 8.18616 15.4565 8.43467 15.8573 8.49218L19.9453 9.08062C20.9554 9.22644 21.3573 10.4505 20.6263 11.1519L17.6702 13.9924C17.3797 14.2718 17.2474 14.6733 17.3162 15.0676L18.0138 19.0778C18.1856 20.0698 17.1298 20.8267 16.227 20.3574L12.5732 18.4627C12.215 18.2768 11.786 18.2768 11.4268 18.4627L7.773 20.3574C6.87023 20.8267 5.81439 20.0698 5.98724 19.0778L6.68385 15.0676C6.75257 14.6733 6.62033 14.2718 6.32982 13.9924L3.37368 11.1519C2.64272 10.4505 3.04464 9.22644 4.05466 9.08062L8.14265 8.49218C8.54354 8.43467 8.89028 8.18616 9.06937 7.82776L10.8957 4.17701C11.3477 3.27433 12.6523 3.27433 13.1043 4.17701Z"
                                                stroke="#FFD329" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                        <svg class="icon-20" xmlns="http://www.w3.org/2000/svg" width="20"
                                            viewBox="0 0 24 24" fill="none">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M13.1043 4.17701L14.9317 7.82776C15.1108 8.18616 15.4565 8.43467 15.8573 8.49218L19.9453 9.08062C20.9554 9.22644 21.3573 10.4505 20.6263 11.1519L17.6702 13.9924C17.3797 14.2718 17.2474 14.6733 17.3162 15.0676L18.0138 19.0778C18.1856 20.0698 17.1298 20.8267 16.227 20.3574L12.5732 18.4627C12.215 18.2768 11.786 18.2768 11.4268 18.4627L7.773 20.3574C6.87023 20.8267 5.81439 20.0698 5.98724 19.0778L6.68385 15.0676C6.75257 14.6733 6.62033 14.2718 6.32982 13.9924L3.37368 11.1519C2.64272 10.4505 3.04464 9.22644 4.05466 9.08062L8.14265 8.49218C8.54354 8.43467 8.89028 8.18616 9.06937 7.82776L10.8957 4.17701C11.3477 3.27433 12.6523 3.27433 13.1043 4.17701Z"
                                                stroke="#FFD329" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </div>
                                    <form>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="full-name" class="form-label">First Name<span
                                                            class="text-danger">*</span></label>
                                                    <input type="text" class="form-control w-100" id="full-name"
                                                        placeholder=" John">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="last-name" class="form-label">Email ID<span
                                                            class="text-danger">*</span></label>
                                                    <input type="text" class="form-control w-100" id="last-name"
                                                        placeholder="XYZ@exampleemail.com ">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label for="message" class="form-label">Enter your Review<span
                                                            class="text-danger">*</span></label>
                                                    <textarea class="form-control" rows="5" id="message" aria-label="With textarea" spellcheck="false"
                                                        placeholder="Lorem ipsum dolor sit amet, consectetur adipiscing elit"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 d-flex justify-content-between">
                                                <div class="form-check mb-3">
                                                    <input type="checkbox" class="form-check-input"
                                                        id="customCheck1">
                                                    <label class="form-check-label" for="customCheck1">Save my name,
                                                        email, and website in this browser for the next time I
                                                        comment.<span class="text-danger">*</span></label>
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
            </div>
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4">
                <div class="col">
                    <x-landing-pages.widgets.shop-card productname="Casual Shoes" productImage="shop/01.jpg"
                        productrating="0" productprice="$15.00" />
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
