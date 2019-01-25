<x-guest-layout layout="simple">
<div class="iq-auth-page">
    @include('components.auth-effect')
    <div class="row d-flex align-items-center iq-auth-container w-100">
            <div class="col-10 col-lg-4 offset-lg-7 offset-1">
                <div class="card">
                    <div class="card-body">
                        <h4>Account De-activate</h4>
                        <p>Enter your details to de-activate your account</p>
                        <div class="form-group me-3">
                            <label class="form-label" for="email01">Email</label>
                            <input type="email" class="form-control mb-0" id="email01" placeholder="Enter Email">
                        </div>
                        <div class="form-group me-3">
                            <label class="form-label" for="username01">Username</label>
                            <input type="email" class="form-control mb-0" id="username01" placeholder="Enter Username">
                        </div>
                        <button type="button" class="btn btn-primary">De-activate</button>
                    </div>
                </div>
            </div>
        </div>
</div>
</x-guest-layout>