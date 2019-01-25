<x-guest-layout>
    <section class="login-content">
        <div class="row m-0 align-items-center bg-white vh-100">
            <div class="col-md-6 d-md-block d-none bg-primary p-0 mt-n1 vh-100 overflow-hidden">
                <img src="{{ asset('images/auth/02.png') }}" class="img-fluid gradient-main animated-scaleX"
                    alt="images">
            </div>
            <div class="col-md-6 p-0">
                <div class="card card-transparent auth-card shadow-none d-flex justify-content-center mb-0">
                    <div class="card-body">
                        <a href="{{route('dashboards')}}" class="navbar-brand d-flex align-items-center gap-2 mb-3">
                            <svg width="30" class="text-primary" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                               <rect x="-0.757324" y="19.2427" width="28" height="4" rx="2" transform="rotate(-45 -0.757324 19.2427)" fill="currentColor"/>
                               <rect x="7.72803" y="27.728" width="28" height="4" rx="2" transform="rotate(-45 7.72803 27.728)" fill="currentColor"/>
                               <rect x="10.5366" y="16.3945" width="16" height="4" rx="2" transform="rotate(45 10.5366 16.3945)" fill="currentColor"/>
                               <rect x="10.5562" y="-0.556152" width="28" height="4" rx="2" transform="rotate(45 10.5562 -0.556152)" fill="currentColor"/>
                            </svg>
                            <h4 class="logo-title d-none d-sm-block mb-0" data-setting="app_name">{{env('APP_NAME')}}</h4>
                         </a>
                        <h2 class="mb-2">Reset Password</h2>
                        <!-- Validation Errors -->
                        <x-auth-validation-errors class="mb-4" :errors="$errors" />

                        <form method="POST" action="{{ route('password.update') }}">
                            @csrf

                            <!-- Password Reset Token -->
                            <input type="hidden" name="token" value="{{ $request->route('token') }}">

                            <!-- Email Address -->
                            <div class="form-group">
                                <label for="email">{{__('Email')}}</label>

                                <input id="email" class="form-control" type="email" name="email" :value="old('email', $request->email)" required autofocus />
                            </div>

                            <!-- Password -->
                            <div class="form-group">
                                <label for="password">{{__('Password')}}</label>

                                <input id="password" class="form-control" type="password" name="password" required />
                            </div>

                            <!-- Confirm Password -->
                            <div class="form-group">
                                <label for="password_confirmation">{{__('Confirm Password')}}</label>

                                <input id="password_confirmation" class="form-control"
                                                    type="password"
                                                    name="password_confirmation" required />
                            </div>

                            <button class="btn btn-primary">
                                {{ __('Reset Password') }}
                            </button>
                        </form>
                    </div>
                </div>
                <div class="sign-bg sign-bg-right">
                    <svg width="280" height="230" viewBox="0 0 431 398" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g opacity="0.05">
                            <rect x="-157.085" y="193.773" width="543" height="77.5714" rx="38.7857"
                                transform="rotate(-45 -157.085 193.773)" fill="#3B8AFF" />
                            <rect x="7.46875" y="358.327" width="543" height="77.5714" rx="38.7857"
                                transform="rotate(-45 7.46875 358.327)" fill="#3B8AFF" />
                            <rect x="61.9355" y="138.545" width="310.286" height="77.5714" rx="38.7857"
                                transform="rotate(45 61.9355 138.545)" fill="#3B8AFF" />
                            <rect x="62.3154" y="-190.173" width="543" height="77.5714" rx="38.7857"
                                transform="rotate(45 62.3154 -190.173)" fill="#3B8AFF" />
                        </g>
                    </svg>
                </div>
            </div>
        </div>
    </section>
</x-guest-layout>
