<x-guest-layout layout="simple">
<section class="iq-auth-page" style="background: url({{asset('images/dashboard/top-image.jpg')}}); background-size: cover;background-repeat: no-repeat;">
        <div class="row m-0 align-items-center justify-content-center vh-100 w-100">
            <div class="col-md-6 col-lg-5">
                <div class="card my-4">
                    <div class="card-body">
                        <div class="mb-3">
                            <h3 class="text-center">Sign Up</h3>
                            <p class="text-center">Create your Hope UI account</p>
                        </div>
                        <div class="row d-flex justify-content-between">
                            <div class="form-group col-6">
                                <label class="form-label" for="firstName">First Name</label>
                                <input type="email" class="form-control mb-0" id="firstName" placeholder="Enter First Name">
                            </div>
                            <div class="form-group col-6">
                                <label class="form-label" for="lastname">Last Name</label>
                                <input type="password" class="form-control mb-0" id="lastname" placeholder="Enter Last Name">
                            </div>
                        </div>
                        <div class="row d-flex justify-content-between">
                            <div class="form-group col-6">
                                <label class="form-label" for="Emailid">Email</label>
                                <input type="email" class="form-control mb-0" id="Emailid"  placeholder="Enter Email">
                            </div>
                            <div class="form-group col-6">
                                <label class="form-label" for="Phone_NO">Phone No.</label>
                                <input type="password" class="form-control mb-0" id="Phone_NO" placeholder="Enter Phone Number">
                            </div>
                        </div>
                        <div class="row d-flex justify-content-between">
                            <div class="form-group col-6">
                                <label class="form-label" for="firstPassword">Password</label>
                                <input type="email" class="form-control mb-0" id="firstPassword"  placeholder="Enter Password">
                            </div>
                            <div class="form-group col-6">
                                <label class="form-label" for="ConfirmPAssword">Confirm Password</label>
                                <input type="password" class="form-control mb-0" id="ConfirmPAssword" placeholder="Enter Confirm Password">
                            </div>
                        </div>
                        <div class="text-center pb-3">
                            <input type="checkbox" class="form-check-input" id="aggrement-hopeui">
                            <label class="form-check-label" for="aggrement-hopeui">I agree with the terms of use</label>
                        </div>
                        <div class="text-center pb-3">
                            <button type="button" class="btn btn-primary">Sign up</button>
                        </div>
                        <p class="text-center">Or sign in with other accounts?</p>
                        <div class="d-flex justify-content-center">
                            <ul class="list-group list-group-horizontal list-group-flush">
                                <li class="list-group-item border-0 pb-0">
                                    <a href="#"><img src="{{asset('images/brands/fb.svg')}}" alt="fb" loading="lazy"></a>
                                </li>
                                <li class="list-group-item border-0 pb-0">
                                    <a href="#"><img src="{{asset('images/brands/gm.svg')}}" alt="gm" loading="lazy"></a>
                                </li>
                                <li class="list-group-item border-0 pb-0">
                                    <a href="#"><img src="{{asset('images/brands/im.svg')}}" alt="im" loading="lazy"></a>
                                </li>
                                <li class="list-group-item border-0 pb-0">
                                    <a href="#"><img src="{{asset('images/brands/li.svg')}}" alt="li" loading="lazy"></a>
                                </li>
                            </ul>
                        </div>
                        <p class="text-center">Already have an Account<a href="{{route('animated.signin')}}" class="ms-2">Sign in</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-guest-layout>
