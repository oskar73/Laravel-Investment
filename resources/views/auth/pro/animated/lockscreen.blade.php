<x-guest-layout layout="simple">
<div class="iq-auth-page">
    @include('components.auth-effect')
    <div class="row align-items-center iq-auth-container w-100">
            <div class="col-10 col-lg-4 offset-lg-7 offset-1">
                <div class="card">
                    <div class="card-body">
                        <img src="{{asset('images/avatars/01.png')}}" alt="User-Profile" class="theme-color-default-img img-fluid avatar avatar-50 avatar-rounded" loading="lazy">
                    <h4 class="mt-4">Hi ! Austin Robertson</h4>
                    <p>Enter your password to acess the admin.</p>
                    <div class="form-group me-3">
                            <label class="form-label" for="lock-pass">Password</label>
                            <input type="email" class="form-control mb-0" id="lock-pass" placeholder="Enter Password">
                        </div>
                    <button type="button" class="btn btn-primary">Login</button>
                    </div>
                </div>
            </div>
        </div>
</div>
</x-guest-layout>