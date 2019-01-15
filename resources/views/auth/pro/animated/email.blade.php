<x-guest-layout layout="simple" isSidebar="false" isNavbar="false" isPageContainer="false">
<div class="iq-auth-page">
    @include('components.auth-effect')
        <div class="row align-items-center iq-auth-container  w-100">
            <div class="col-10 col-lg-4 offset-lg-7 offset-1">
                <div class="card">
                    <div class="card-body">
                        <h4 class="pb-3">Success!</h4>
                        <p>A email has been send to your email@domain.com. Please check for an email from company and click on the included link to reset your password.</p>
                        <button type="button" class="btn btn-primary">Back to home</button>
                    </div>
                </div>
            </div>
        </div>
</div>

</x-guest-layout>
