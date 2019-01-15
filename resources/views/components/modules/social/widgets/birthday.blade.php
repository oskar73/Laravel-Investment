@props(['birthdayImg','birthdayTitle','birthdayDate'])
<div class="card">
    <div class="card-body">
        <div class="d-block d-md-flex align-items-center justify-content-between text-center text-md-start">
            <div class="d-block d-md-flex align-items-center my-3 my-md-0 gap-3">
                <a href="#">
                    <img src="{{asset('modules/social-app/images/avatar')}}/{{$birthdayImg}}" class="img-fluid avatar-130" alt="profile-img" loading="lazy">
                </a>
                <div class="friend-info  mt-md-0 mt-3">
                    <h5 class="mb-0">{{$birthdayTitle}}</h5>
                    <p class="mb-0">{{$birthdayDate}}</p>
                </div>
            </div>
            <button class="btn btn-primary">Create Card</button>
        </div>
    </div>
</div>