<x-guest-layout layout="simple">
    <section class="iq-auth-page" style="background: url({{asset('images/dashboard/top-image.jpg')}}); background-size: cover;background-repeat: no-repeat;">
        <div class="row m-0 align-items-center justify-content-center vh-100 w-100">
            <div class="col-md-6 col-lg-5">
                <div class="card my-4">
                    <div class="card-body ">
                        <h3 class="text-center">Sign In</h3>
                        <p class="text-center">Sign in to stay connected</p>
                        <div class="form-group">
                            <label class="form-label" for="email-id">Email address</label>
                            <input type="email" class="form-control mb-0" id="email-id" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="password">Password</label>
                            <input type="password" class="form-control mb-0" id="password" placeholder="Enter password">
                        </div>
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <div class="form-check d-inline-block pt-1 mb-0">
                                <input type="checkbox" class="form-check-input" id="customCheck11">
                                <label class="form-check-label" for="customCheck11">Remember Me</label>
                            </div>
                                <a href="{{route('animated.reset-password')}}">Forget password</a>
                        </div>
                        <div class="text-center pb-3">
                            <button type="button" class="btn btn-primary">Sign in</button>
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
                        <p class="text-center">Don't have account?<a href="{{route('animated.signup')}}" class="ms-2"> Click here to sign up.</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-guest-layout>
