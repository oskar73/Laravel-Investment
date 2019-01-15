@props(['img','socialFriendprofileTitle','socialFriendprofileDec'])
<div class="border rounded">
    <div class="d-flex">
        <img src="{{asset('modules/social-app/images/avatar')}}/{{$img ?? ''}}" alt="profile-img" class="img-fluid avatar-120 rounded-0 rounded-start" loading="lazy">
        <div class="p-3 mb-0 w-100">
            <div class="d-flex align-items-center justify-content-between h-100">
                <div class="friend-info">
                    <h5>{{$socialFriendprofileTitle ?? ''}}</h5>
                    <p class="mb-0">{{$socialFriendprofileDec ?? ''}}</p>
                </div>
                <div class="dropdown">
                    <a href="javascript:void(0)" class="d-flex justify-content-center align-items-center  btn btn-secondary" data-bs-toggle="dropdown" aria-expanded="true" role="button">
                        <svg class="me-1 icon-18" width="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9.81214 17.6234C9.41137 17.6234 9.01059 17.4713 8.70464 17.1654L4.45892 12.9196C3.84703 12.3077 3.84703 11.3165 4.45892 10.7064C5.07082 10.0945 6.06024 10.0927 6.67214 10.7046L9.81214 13.8446L17.1979 6.45892C17.8098 5.84703 18.7992 5.84703 19.4111 6.45892C20.023 7.07082 20.023 8.06203 19.4111 8.67392L10.9196 17.1654C10.6137 17.4713 10.2129 17.6234 9.81214 17.6234" fill="currentColor"/>
                        </svg>
                        Friend
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="#">Get Notification</a>
                        <a class="dropdown-item" href="#">Close Friend</a>
                        <a class="dropdown-item" href="#">Unfollow</a>
                        <a class="dropdown-item" href="#">Unfriend</a>
                        <a class="dropdown-item" href="#">Block</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-header-toolbar d-flex align-items-center">
        </div>
    </div>
</div>
