@props(['friendrequestimg','friendrequesttitle','friendrequestdec','friendrequest','newfriendrequest' ,'classname'])
    <li class="d-flex align-items-center gap-3 justify-content-between {{ $classname }} flex-column flex-md-row">
    <div class="user-img img-fluid flex-shrink-0">
    <img src="{{asset('modules/social-app/images/avatar')}}/{{$friendrequestimg}}" alt="story-img" class="rounded-circle avatar-48">
    </div>
    <div class="d-flex align-items-center justify-content-between w-100 flex-column flex-md-row">
    <div class="text-center">
    <h6>{{$friendrequesttitle ?? ''}}</h6>
    <p class="mb-0">{{$friendrequestdec}}</p>
    </div>
    <div class="d-flex align-items-center mt-2 mt-md-0">
    @if($friendrequest ?? '' == 'true')
    <div class="d-flex align-items-center gap-3">
            <a href="javascript:void(0)" class="btn btn-primary rounded confirm-btn">Confirm</a>
            <a href="#" class="btn btn-secondary rounded delete-btn">Delete Request</a>
        </div>
    @endif
    @if($newfriendrequest ?? '' == 'true')
        <div class="d-flex align-items-center mt-2 mt-md-0 gap-3">
            <a href="javascript:void(0)" class="btn btn-primary rounded">
                <svg class="icon-18" width="18" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path opacity="0.4" d="M21.101 9.58786H19.8979V8.41162C19.8979 7.90945 19.4952 7.5 18.999 7.5C18.5038 7.5 18.1 7.90945 18.1 8.41162V9.58786H16.899C16.4027 9.58786 16 9.99731 16 10.4995C16 11.0016 16.4027 11.4111 16.899 11.4111H18.1V12.5884C18.1 13.0906 18.5038 13.5 18.999 13.5C19.4952 13.5 19.8979 13.0906 19.8979 12.5884V11.4111H21.101C21.5962 11.4111 22 11.0016 22 10.4995C22 9.99731 21.5962 9.58786 21.101 9.58786Z" fill="currentColor"></path>
                    <path d="M9.5 15.0156C5.45422 15.0156 2 15.6625 2 18.2467C2 20.83 5.4332 21.5001 9.5 21.5001C13.5448 21.5001 17 20.8533 17 18.269C17 15.6848 13.5668 15.0156 9.5 15.0156Z" fill="currentColor"></path>
                    <path opacity="0.4" d="M9.50023 12.5542C12.2548 12.5542 14.4629 10.3177 14.4629 7.52761C14.4629 4.73754 12.2548 2.5 9.50023 2.5C6.74566 2.5 4.5376 4.73754 4.5376 7.52761C4.5376 10.3177 6.74566 12.5542 9.50023 12.5542Z" fill="currentColor"></path>
                    </svg> Add Friend</a>
            <a href="javascript:void(0)" class="btn btn-secondary rounded delete-btn">Remove</a>
        </div>
    @endif
    </div>
</li>
