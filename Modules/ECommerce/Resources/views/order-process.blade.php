<x-app-layout layout="e-commerce" :assets="$assets ?? []" title='Order Process' isSweetalert="true">
    <div class="row">
        <ul class="text-center iq-product-tracker mb-0 py-4" id="progressbar">
            <li class="active iq-tracker-position-0" id="iq-tracker-position-1">{{__('e-commerce.cart')}}</li>
            <li class="iq-tracker-position-0" id="iq-tracker-position-2">{{__('e-commerce.checkout')}}</li>
            <li class="iq-tracker-position-0" id="iq-tracker-position-3">{{__('e-commerce.payment')}}</li>
        </ul>
        <div id="cart" class="iq-product-tracker-card show b-0">
            <div class="row">
            <div class="col-lg-8">
                    <div class="card">
                        <div class="card-header">
                            <h4>My Cart</h4>
                        </div>
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table table-responsive mb-0">
                                    <tbody>
                                        <tr data-item="list">
                                            <td scope="row">
                                                <div class="d-flex align-items-center gap-4">
                                                    <img src="{{asset('modules/e-commerce/images/cart/01.png')}}" alt="image" class="img-fluid object-contain avatar-100 iq-product-bg p-3" loading="lazy">
                                                    <div>
                                                        <h5 class="mb-3">{{__('e-commerce.biker’s_jacket')}}</h5>
                                                        <p class="mb-1">{{__('e-commerce.colour')}} Red & Black</p>
                                                        <p class="mb-1">{{__('e-commerce.size')}} L</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="btn-group iq-qty-btn" data-qty="btn" role="group">
                                                    <button type="button" class="btn btn-sm btn-outline-light iq-quantity-minus">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="6" height="3" viewBox="0 0 6 3" fill="none">
                                                            <path d="M5.22727 0.886364H0.136364V2.13636H5.22727V0.886364Z" fill="currentColor"></path>
                                                        </svg>
                                                    </button>
                                                    <input type="text" class="btn btn-sm btn-outline-light input-display" data-qty="input" pattern="^(0|[1-9][0-9]*)$" minlength="1" maxlength="2" value="2" title="Qty" readonly>
                                                    <button type="button" class="btn btn-sm btn-outline-light iq-quantity-plus">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="9" height="8" viewBox="0 0 9 8" fill="none">
                                                            <path d="M3.63636 7.70455H4.90909V4.59091H8.02273V3.31818H4.90909V0.204545H3.63636V3.31818H0.522727V4.59091H3.63636V7.70455Z" fill="currentColor"></path>
                                                        </svg>
                                                    </button>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex gap-3">
                                                    <p class="text-decoration-line-through mb-0">$80.00</p>
                                                    <a href="#" class="text-decoration-none">$56.00</a>
                                                </div>
                                            </td>
                                            <td>
                                                <button class="btn btn-icon btn-danger btn-sm delete-btn">
                                                    <span class="btn-inner">
                                                        <svg class="icon-32" width="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path opacity="0.4" d="M19.643 9.48851C19.643 9.5565 19.11 16.2973 18.8056 19.1342C18.615 20.8751 17.4927 21.9311 15.8092 21.9611C14.5157 21.9901 13.2494 22.0001 12.0036 22.0001C10.6809 22.0001 9.38741 21.9901 8.13185 21.9611C6.50477 21.9221 5.38147 20.8451 5.20057 19.1342C4.88741 16.2873 4.36418 9.5565 4.35445 9.48851C4.34473 9.28351 4.41086 9.08852 4.54507 8.93053C4.67734 8.78453 4.86796 8.69653 5.06831 8.69653H18.9388C19.1382 8.69653 19.3191 8.78453 19.4621 8.93053C19.5953 9.08852 19.6624 9.28351 19.643 9.48851Z" fill="currentColor"></path>
                                                            <path d="M21 5.97686C21 5.56588 20.6761 5.24389 20.2871 5.24389H17.3714C16.7781 5.24389 16.2627 4.8219 16.1304 4.22692L15.967 3.49795C15.7385 2.61698 14.9498 2 14.0647 2H9.93624C9.0415 2 8.26054 2.61698 8.02323 3.54595L7.87054 4.22792C7.7373 4.8219 7.22185 5.24389 6.62957 5.24389H3.71385C3.32386 5.24389 3 5.56588 3 5.97686V6.35685C3 6.75783 3.32386 7.08982 3.71385 7.08982H20.2871C20.6761 7.08982 21 6.75783 21 6.35685V5.97686Z" fill="currentColor"></path>
                                                        </svg>
                                                    </span>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr data-item="list">
                                            <td scope="row">
                                                <div class="d-flex align-items-center gap-4">
                                                    <img src="{{asset('modules/e-commerce/images/cart/02.png')}}" alt="image" class="img-fluid object-contain avatar-100 iq-product-bg p-3" loading="lazy">
                                                    <div>
                                                        <h5 class="mb-3">{{__('e-commerce.sweater')}}</h5>
                                                        <p class="mb-1">{{__('e-commerce.colour')}} Pink</p>
                                                        <p class="mb-1">{{__('e-commerce.size')}} M</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="btn-group iq-qty-btn" data-qty="btn" role="group">
                                                    <button type="button" class="btn btn-sm btn-outline-light iq-quantity-minus">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="6" height="3" viewBox="0 0 6 3" fill="none">
                                                            <path d="M5.22727 0.886364H0.136364V2.13636H5.22727V0.886364Z" fill="currentColor"></path>
                                                        </svg>
                                                    </button>
                                                    <input type="text" class="btn btn-sm btn-outline-light input-display" data-qty="input" pattern="^(0|[1-9][0-9]*)$" minlength="1" maxlength="2" value="2" title="Qty" readonly>
                                                    <button type="button" class="btn btn-sm btn-outline-light iq-quantity-plus">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="9" height="8" viewBox="0 0 9 8" fill="none">
                                                            <path d="M3.63636 7.70455H4.90909V4.59091H8.02273V3.31818H4.90909V0.204545H3.63636V3.31818H0.522727V4.59091H3.63636V7.70455Z" fill="currentColor"></path>
                                                        </svg>
                                                    </button>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex gap-3">
                                                    <p class="text-decoration-line-through mb-0">$70.00</p>
                                                    <a href="#" class="text-decoration-none">$56.00</a>
                                                </div>
                                            </td>
                                            <td>
                                                <button class="btn btn-icon btn-danger btn-sm delete-btn">
                                                    <span class="btn-inner">
                                                        <svg class="icon-32" width="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path opacity="0.4" d="M19.643 9.48851C19.643 9.5565 19.11 16.2973 18.8056 19.1342C18.615 20.8751 17.4927 21.9311 15.8092 21.9611C14.5157 21.9901 13.2494 22.0001 12.0036 22.0001C10.6809 22.0001 9.38741 21.9901 8.13185 21.9611C6.50477 21.9221 5.38147 20.8451 5.20057 19.1342C4.88741 16.2873 4.36418 9.5565 4.35445 9.48851C4.34473 9.28351 4.41086 9.08852 4.54507 8.93053C4.67734 8.78453 4.86796 8.69653 5.06831 8.69653H18.9388C19.1382 8.69653 19.3191 8.78453 19.4621 8.93053C19.5953 9.08852 19.6624 9.28351 19.643 9.48851Z" fill="currentColor"></path>
                                                            <path d="M21 5.97686C21 5.56588 20.6761 5.24389 20.2871 5.24389H17.3714C16.7781 5.24389 16.2627 4.8219 16.1304 4.22692L15.967 3.49795C15.7385 2.61698 14.9498 2 14.0647 2H9.93624C9.0415 2 8.26054 2.61698 8.02323 3.54595L7.87054 4.22792C7.7373 4.8219 7.22185 5.24389 6.62957 5.24389H3.71385C3.32386 5.24389 3 5.56588 3 5.97686V6.35685C3 6.75783 3.32386 7.08982 3.71385 7.08982H20.2871C20.6761 7.08982 21 6.75783 21 6.35685V5.97686Z" fill="currentColor"></path>
                                                        </svg>
                                                    </span>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr data-item="list">
                                            <td scope="row">
                                                <div class="d-flex align-items-center gap-4">
                                                    <img src="{{asset('modules/e-commerce/images/cart/03.png')}}" alt="image" class="img-fluid object-contain avatar-100 iq-product-bg p-3" loading="lazy">
                                                    <div>
                                                        <h5 class="mb-3">{{__('e-commerce.beat')}}</h5>
                                                        <p class="mb-1">{{__('e-commerce.colour')}} Green</p>
                                                        <p class="mb-1">{{__('e-commerce.size')}} M</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="btn-group iq-qty-btn" data-qty="btn" role="group">
                                                    <button type="button" class="btn btn-sm btn-outline-light iq-quantity-minus">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="6" height="3" viewBox="0 0 6 3" fill="none">
                                                            <path d="M5.22727 0.886364H0.136364V2.13636H5.22727V0.886364Z" fill="currentColor"></path>
                                                        </svg>
                                                    </button>
                                                    <input type="text" class="btn btn-sm btn-outline-light input-display" data-qty="input" pattern="^(0|[1-9][0-9]*)$" minlength="1" maxlength="2" value="2" title="Qty" readonly>
                                                    <button type="button" class="btn btn-sm btn-outline-light iq-quantity-plus">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="9" height="8" viewBox="0 0 9 8" fill="none">
                                                            <path d="M3.63636 7.70455H4.90909V4.59091H8.02273V3.31818H4.90909V0.204545H3.63636V3.31818H0.522727V4.59091H3.63636V7.70455Z" fill="currentColor"></path>
                                                        </svg>
                                                    </button>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex">
                                                    <a href="#" class="text-decoration-none">$56.00</a>
                                                </div>
                                            </td>
                                            <td>
                                                <button class="btn btn-icon btn-danger btn-sm delete-btn">
                                                    <span class="btn-inner">
                                                        <svg class="icon-32" width="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path opacity="0.4" d="M19.643 9.48851C19.643 9.5565 19.11 16.2973 18.8056 19.1342C18.615 20.8751 17.4927 21.9311 15.8092 21.9611C14.5157 21.9901 13.2494 22.0001 12.0036 22.0001C10.6809 22.0001 9.38741 21.9901 8.13185 21.9611C6.50477 21.9221 5.38147 20.8451 5.20057 19.1342C4.88741 16.2873 4.36418 9.5565 4.35445 9.48851C4.34473 9.28351 4.41086 9.08852 4.54507 8.93053C4.67734 8.78453 4.86796 8.69653 5.06831 8.69653H18.9388C19.1382 8.69653 19.3191 8.78453 19.4621 8.93053C19.5953 9.08852 19.6624 9.28351 19.643 9.48851Z" fill="currentColor"></path>
                                                            <path d="M21 5.97686C21 5.56588 20.6761 5.24389 20.2871 5.24389H17.3714C16.7781 5.24389 16.2627 4.8219 16.1304 4.22692L15.967 3.49795C15.7385 2.61698 14.9498 2 14.0647 2H9.93624C9.0415 2 8.26054 2.61698 8.02323 3.54595L7.87054 4.22792C7.7373 4.8219 7.22185 5.24389 6.62957 5.24389H3.71385C3.32386 5.24389 3 5.56588 3 5.97686V6.35685C3 6.75783 3.32386 7.08982 3.71385 7.08982H20.2871C20.6761 7.08982 21 6.75783 21 6.35685V5.97686Z" fill="currentColor"></path>
                                                        </svg>
                                                    </span>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr data-item="list">
                                            <td scope="row">
                                                <div class="d-flex align-items-center gap-4">
                                                    <img src="{{asset('modules/e-commerce/images/product/02.png')}}" alt="image" class="img-fluid object-contain avatar-100 iq-product-bg p-3" loading="lazy">
                                                    <div>
                                                        <h5 class="mb-3">{{__('e-commerce.shoes')}}</h5>
                                                        <p class="mb-1">{{__('e-commerce.colour')}} Yellow</p>
                                                        <p class="mb-1">{{__('e-commerce.size')}} 8</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="btn-group iq-qty-btn" data-qty="btn" role="group">
                                                    <button type="button" class="btn btn-sm btn-outline-light iq-quantity-minus">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="6" height="3" viewBox="0 0 6 3" fill="none">
                                                            <path d="M5.22727 0.886364H0.136364V2.13636H5.22727V0.886364Z" fill="currentColor"></path>
                                                        </svg>
                                                    </button>
                                                    <input type="text" class="btn btn-sm btn-outline-light input-display" data-qty="input" pattern="^(0|[1-9][0-9]*)$" minlength="1" maxlength="2" value="2" title="Qty" readonly>
                                                    <button type="button" class="btn btn-sm btn-outline-light iq-quantity-plus">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="9" height="8" viewBox="0 0 9 8" fill="none">
                                                            <path d="M3.63636 7.70455H4.90909V4.59091H8.02273V3.31818H4.90909V0.204545H3.63636V3.31818H0.522727V4.59091H3.63636V7.70455Z" fill="currentColor"></path>
                                                        </svg>
                                                    </button>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex">
                                                    <a href="#" class="text-decoration-none">$56.00</a>
                                                </div>
                                            </td>
                                            <td>
                                                <button class="btn btn-icon btn-danger btn-sm delete-btn">
                                                    <span class="btn-inner">
                                                        <svg class="icon-32" width="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path opacity="0.4" d="M19.643 9.48851C19.643 9.5565 19.11 16.2973 18.8056 19.1342C18.615 20.8751 17.4927 21.9311 15.8092 21.9611C14.5157 21.9901 13.2494 22.0001 12.0036 22.0001C10.6809 22.0001 9.38741 21.9901 8.13185 21.9611C6.50477 21.9221 5.38147 20.8451 5.20057 19.1342C4.88741 16.2873 4.36418 9.5565 4.35445 9.48851C4.34473 9.28351 4.41086 9.08852 4.54507 8.93053C4.67734 8.78453 4.86796 8.69653 5.06831 8.69653H18.9388C19.1382 8.69653 19.3191 8.78453 19.4621 8.93053C19.5953 9.08852 19.6624 9.28351 19.643 9.48851Z" fill="currentColor"></path>
                                                            <path d="M21 5.97686C21 5.56588 20.6761 5.24389 20.2871 5.24389H17.3714C16.7781 5.24389 16.2627 4.8219 16.1304 4.22692L15.967 3.49795C15.7385 2.61698 14.9498 2 14.0647 2H9.93624C9.0415 2 8.26054 2.61698 8.02323 3.54595L7.87054 4.22792C7.7373 4.8219 7.22185 5.24389 6.62957 5.24389H3.71385C3.32386 5.24389 3 5.56588 3 5.97686V6.35685C3 6.75783 3.32386 7.08982 3.71385 7.08982H20.2871C20.6761 7.08982 21 6.75783 21 6.35685V5.97686Z" fill="currentColor"></path>
                                                        </svg>
                                                    </span>
                                                </button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="mb-0">{{__('e-commerce.order_sum')}}</h4>
                        </div>
                        <div class="card-body">
                            <div class="border-bottom">
                                <div class="d-flex justify-content-between mb-4">
                                    <h6 class="mb-0">{{__('e-commerce.order_id')}}</h6>
                                    <h6 class="mb-0">{{__('e-commerce.asw')}}</h6>
                                </div>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="Coupon Code" aria-label="Coupon Code" aria-describedby="CouponCode">
                                    <button class="btn btn-primary" type="button" id="CouponCode">{{__('e-commerce.apply')}}</button>
                                </div>
                            </div>
                            <div class="border-bottom mt-4">
                                <div class="d-flex justify-content-between mb-4">
                                    <h6>{{__('e-commerce.subtotal')}}</h6>
                                    <h6 class="text-primary">$206.00</h6>
                                </div>
                                <div class="d-flex justify-content-between mb-4">
                                    <h6>{{__('e-commerce.discount')}}</h6>
                                    <h6 class="text-success">-$38.00</h6>
                                </div>
                                <div class="d-flex justify-content-between mb-4">
                                    <h6>{{__('e-commerce.shipping')}}</h6>
                                    <h6 class="text-success">{{__('e-commerce.free')}}</h6>
                                </div>
                            </div>
                            <div class="mt-4">
                                <div class="d-flex justify-content-between mb-4">
                                    <h6 class="mb-0">{{__('e-commerce.order_total')}}</h6>
                                    <h5 class="text-primary mb-0">$168.00</h5>
                                </div>
                                <div class="alert border-primary rounded border-1 mb-4">
                                    <div class="d-flex justify-content-between align-items-center ">
                                        <h6 class="text-primary mb-0">{{__('e-commerce.total_savings')}}</h6>
                                        <h6 class="text-primary mb-0"><b>$38.00</b></h6>
                                    </div>
                                </div>
                                <div class="alert border-primary rounded border-1 mb-4">
                                    <div class="d-flex justify-content-between align-items-center ">
                                        <h6 class="text-primary mb-0">{{__('e-commerce.expected_date')}}</h6>
                                        <h6 class="text-primary mb-0">12 Feb 2020</h6>
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <a id="place-order" href="#payment" class="btn btn-primary d-block mt-3 w-100">{{__('e-commerce.checkout')}}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="checkout" class="iq-product-tracker-card b-0">
            <div class="row">
                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="mb-0">{{__('e-commerce.most_rec')}}</h4>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="mt-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="address" id="address21" checked>
                                            <label class="form-check-label mb-0" for="address21">
                                               <span class="h6 mb-0">{{__('e-commerce.bill_add')}}</span>
                                            </label>
                                        </div>
                                        <p class="mb-0">Elon Musk</p>
                                        <p class="mb-0">{{__('e-commerce.address_two')}}  </p>
                                        <div class="mt-2">
                                            <a href="#">{{__('e-commerce.edit')}}</a>
                                            <span>
                                                |
                                            </span>
                                            <a href="#">{{__('e-commerce.remove')}} </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="mt-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="address" id="address001">
                                            <label class="form-check-label" for="address001">
                                                 <span class="h6 mb-0">{{__('e-commerce.ship_add')}}</span>
                                            </label>
                                        </div>
                                        <p class="mb-0">Elon Musk</p>
                                        <p class="mb-0">{{__('e-commerce.address_two')}}  </p>
                                        <div class="mt-2">
                                            <a href="#">{{__('e-commerce.edit')}}</a>
                                            <span>
                                                |
                                            </span>
                                            <a href="#">{{__('e-commerce.remove')}} </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="mt-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="address" id="address002">
                                            <label class="form-check-label" for="address002">
                                                 <span class="h6 mb-0">{{__('e-commerce.off_add')}}</span>
                                            </label>
                                        </div>
                                        <p class="mb-0">Elon Musk</p>
                                        <p class="mb-0">{{__('e-commerce.address_two')}}  </p>
                                        <div class="mt-2">
                                            <a href="#">{{__('e-commerce.edit')}}</a>
                                            <span>
                                                |
                                            </span>
                                            <a href="#">{{__('e-commerce.remove')}} </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h4 class="mb-0">{{__('e-commerce.add_new')}}</h4>
                        </div>
                        <div class="card-body">
                            <form>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-label" for="fName">{{__('e-commerce.first_name')}}</label>
                                            <input type="text" class="form-control" id="fName" placeholder=" ">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-label" for="LName">{{__('e-commerce.last_name')}}</label>
                                            <input type="text" class="form-control" id="LName" placeholder=" ">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-label" for="Cno">{{__('e-commerce.con_no')}}</label>
                                            <input type="email" class="form-control" id="Cno" placeholder=" ">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-label" for="email">{{__('e-commerce.email_id')}}</label>
                                            <input type="text" class="form-control" id="email" placeholder=" ">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-label" for="HName">{{__('e-commerce.hname')}}</label>
                                            <input type="password" class="form-control" id="HName" placeholder=" ">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-label" for="Lmark">{{__('e-commerce.lmark')}}</label>
                                            <input type="text" class="form-control" id="Lmark" placeholder=" ">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-label" for="Street">{{__('e-commerce.street')}}</label>
                                            <input type="text" class="form-control" id="Street" placeholder=" ">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-label" for="Town">{{__('e-commerce.town')}}</label>
                                            <input type="text" class="form-control" id="Town" placeholder=" ">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-label" for="State">{{__('e-commerce.state')}}</label>
                                            <input type="text" class="form-control" id="State" placeholder=" ">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-label" for="Zip">{{__('e-commerce.zip')}}</label>
                                            <input type="text" class="form-control" id="Zip" placeholder=" ">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group mb-0">
                                            <label class="form-label" for="Comment">{{__('e-commerce.comment')}}</label>
                                            <textarea class="form-control" rows="4" id="Comment"  placeholder=""></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 d-flex my-4">
                                        <div class="form-check">
                                            <input type="checkbox" id="Daddress" class="form-check-input">
                                            <label class="form-check-label" for="Daddress">{{__('e-commerce.make_this')}}</label>
                                        </div>
                                    </div>
                                    <div class="d-flex">
                                        <button type="submit" class="btn btn-primary">{{__('e-commerce.submit')}}</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="mb-0">{{__('e-commerce.pay_sum')}}</h4>
                        </div>
                        <div class="card-body">
                            <div class="border-bottom">
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <div class="d-flex align-items-center">
                                        <svg width="20" class="text-primary" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M10 0.75C15.108 0.75 19.25 4.891 19.25 10C19.25 15.108 15.108 19.25 10 19.25C4.891 19.25 0.75 15.108 0.75 10C0.75 4.891 4.891 0.75 10 0.75Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M9.99512 6.20312V10.6221" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M9.995 13.7969H10.005" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                        <h6 class="mb-0 ms-2">
                                        {{__('e-commerce.new_user')}}
                                        </h6>
                                    </div>
                                    <div class="d-flex">
                                        <button type="submit" class="btn btn-primary">{{__('e-commerce.submit')}}</button>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between mb-3">
                                    <h6 class="mb-0">{{__('e-commerce.order_id')}}</h6>
                                    <h6 class="mb-0">{{__('e-commerce.asw')}}</h6>
                                </div>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" id="last-name" placeholder="Coupon Code">
                                    <button type="submit" class="btn btn-primary">{{__('e-commerce.apply')}}</button>
                                </div>
                            </div>
                            <div class="border-bottom mt-4">
                                <div class="d-flex justify-content-between mb-4">
                                    <h6 class="mb-0">{{__('e-commerce.subtotal')}}</h6>
                                    <h6 class="mb-0 text-primary">$206.00</h6>
                                </div>
                                <div class="d-flex justify-content-between mb-4">
                                    <h6 class="mb-0">{{__('e-commerce.discount')}}</h6>
                                    <h6 class="mb-0 text-success">-$38.00</h6>
                                </div>
                                <div class="d-flex justify-content-between mb-4">
                                    <h6 class="mb-0">{{__('e-commerce.shipping')}}</h6>
                                    <h6 class="mb-0 text-primary">{{__('e-commerce.free')}}</h6>
                                </div>
                            </div>
                            <div class="mt-4">
                                <div class="d-flex justify-content-between mb-4">
                                    <h6 class="mb-0">{{__('e-commerce.order_total')}}</h6>
                                    <h6 class="mb-0 text-primary">$168.00</h6>
                                </div>
                                <div class="alert border-primary rounded border-1 mb-4">
                                    <div class="d-flex justify-content-between align-items-center ">
                                        <h6 class="mb-0 text-primary">{{__('e-commerce.total_savings')}}</h6>
                                        <h6 class="mb-0 text-primary">$38.00</h6>
                                    </div>
                                </div>
                                <div class="alert border-primary rounded border-1 mb-4">
                                    <div class="d-flex justify-content-between align-items-center ">
                                        <h6 class="mb-0 text-primary">{{__('e-commerce.expected_date')}}</h6>
                                        <h6 class="mb-0 text-primary">12 Feb 2020</h6>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between flex-wrap">
                                    <a id="backbutton" href="#checkout" class="btn btn-primary-subtle d-block back justify-content-between">{{__('e-commerce.back')}}</a>
                                    <a id="deliver-address" href="#payment" class="btn btn-primary d-block">{{__('e-commerce.place_order')}}</a>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h4 class="mb-0">{{__('e-commerce.del_method')}}</h4>
                        </div>
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="form-check d-flex align-items-center">
                                    <input class="form-check-input" id="StandardD" type="radio" name="delivery001">
                                    <label class="form-check-label d-flex flex-column ms-3" for="StandardD">
                                         <span class="h6">{{__('e-commerce.std_delivery')}}</span>
                                        <span>{{__('e-commerce.del')}}</span>
                                    </label>
                                </div>
                                <h6 class="text-primary mb-0">{{__('e-commerce.free')}}</h6>
                            </div>
                            <div class="d-flex justify-content-between align-items-center mt-4">
                                <div class="form-check d-flex align-items-center">
                                    <input class="form-check-input" id="ExpressD" type="radio" name="delivery001">
                                    <label class="form-check-label d-flex flex-column ms-3" for="ExpressD">
                                         <span class="h6">{{__('e-commerce.express')}}</span>
                                        <span>{{__('e-commerce.fast_del')}}</span>
                                    </label>
                                </div>
                                <h6 class="text-primary mb-0">$10</h6>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h4 class="mb-0">{{__('e-commerce.add_sev')}}</h4>
                        </div>
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="form-check">
                                    <input class="form-check-input" id="productCare" type="checkbox" name="delivery002">
                                    <label class="form-check-label" for="productCare">
                                        <span class="h6">{{__('e-commerce.handle')}}</span>
                                        <span>{{__('e-commerce.protection_provided')}}</span>
                                    </label>
                                </div>
                                <h6 class="text-primary mb-0">$12</h6>
                            </div>
                            <div class="d-flex justify-content-between align-items-center mt-3">
                                <div class="form-check">
                                    <input class="form-check-input" id="productGift" type="checkbox" name="delivery002">
                                    <label class="form-check-label" for="productGift">
                                         <span class="h6">{{__('e-commerce.gift_wrap')}}</span>
                                        <span>{{__('e-commerce.gift_prod')}}</span>
                                    </label>
                                </div>
                                <h6 class="text-primary mb-0">$15</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="payment" class="iq-product-tracker-card b-0">
            <div class="row">
                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="mb-0">{{__('e-commerce.pay_opts')}}</h4>
                        </div>
                        <div class="card-body">
                            <div class="d-flex justify-content-between flex-wrap">
                                <div class="d-flex mt-3">
                                    <img class="img-fluid" src="{{asset('modules/e-commerce/images/user-cards/02')}}.png" alt="01">
                                    <h6 class="mb-0 ms-3">{{__('e-commerce.barclays')}}</h6>
                                </div>
                                <h6 class="mb-0 mt-3">Elon Musk</h6>
                                <h6 class="mb-0 mt-3">06 / 2030</h6>
                            </div>
                            <form class="mt-4">
                                <div class="d-flex align-items-center">
                                    <div class="mb-4">
                                        <label class="form-label">
                                             <span class="h6">{{__('e-commerce.enter_cvv')}}</span></label>
                                        <input type="text" class="form-control" required="" placeholder="XXX">
                                    </div>
                                    <button type="submit" class="btn btn-primary mt-2 ms-3">{{__('e-commerce.continue')}}</button>
                                </div>
                            </form>
                            <hr>
                            <div class="card-lists">
                                <div class="form-group mt-4">
                                    <div class="form-check mb-4">
                                        <input type="radio" id="credit" name="customRadio" class="form-check-input" checked>
                                        <label class="custom-control-label" for="credit">
                                            <span class="h6">{{__('e-commerce.credit')}}</span>
                                        </label>
                                    </div>
                                    <div class="form-check mb-4">
                                        <input type="radio" id="netbaking" name="customRadio" class="form-check-input">
                                        <label class="custom-control-label" for="netbaking">
                                            <span class="h6"> {{__('e-commerce.net_banking')}}</span>
                                        </label>
                                    </div>
                                    <div class="form-check mb-4">
                                        <input type="radio" id="emi" name="customRadio" class="form-check-input">
                                        <label class="custom-control-label" for="emi">
                                            <span class="h6">{{__('e-commerce.emi_one')}}</span>
                                        </label>
                                    </div>
                                    <div class="form-check mb-4">
                                        <input type="radio" id="cod" name="customRadio" class="form-check-input">
                                        <label class="custom-control-label" for="cod">
                                            <span class="h6">{{__('e-commerce.cash')}}</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="d-flex flex-wrap">
                                <button type="submit" class="btn btn-primary mt-2">{{__('e-commerce.add_card')}}</button>
                                <a class="btn btn-primary mt-2 ms-2" href="#" role="button">{{__('e-commerce.cancel')}}</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="mb-0">{{__('e-commerce.billing_details')}}</h4>
                        </div>
                        <div class="card-body">
                            <div class="d-flex justify-content-between mb-4">
                                <h6 class="mb-0">{{__('e-commerce.order_id')}}</h6>
                                <h6 class="mb-0">{{__('e-commerce.asw')}}</h6>
                            </div>
                            <div class="alert bg-body border-primary rounded border-1">
                                <div class="d-flex justify-content-between align-items-center ">
                                    <h6 class="text-primary mb-0">{{__('e-commerce.expected_date')}}</h6>
                                    <h6 class="text-primary mb-0">12 Feb 2020</h6>
                                </div>
                            </div>
                            <hr>
                            <div class="mt-4">
                                <div class="d-flex justify-content-between mb-4">
                                    <h6 class="mb-0">{{__('e-commerce.subtotal')}}</h6>
                                    <h6 class="mb-0 text-primary">$206.00</h6>
                                </div>
                                <div class="d-flex justify-content-between mb-4">
                                    <h6 class="mb-0">{{__('e-commerce.discount')}}</h6>
                                    <h6 class="mb-0 text-success">-$38.00</h6>
                                </div>
                                <div class="d-flex justify-content-between mb-4">
                                    <h6 class="mb-0">{{__('e-commerce.shipping')}}</h6>
                                    <h6 class="mb-0 text-primary">{{__('e-commerce.free')}}</h6>
                                </div>
                            </div>
                            <hr>
                            <div class="d-flex justify-content-between mt-4">
                                <h6 class="mb-0">{{__('e-commerce.amount_payable')}}</h6>
                                <h6 class="mb-0 text-primary">$168.00</h6>
                            </div>
                        </div>
                        <div class="card-footer">
                            <a href="{{route('e-commerce.billing')}}" class="btn btn-primary w-100">Finish Payment</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
