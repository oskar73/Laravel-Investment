@props(['className','id','username','userProfileImg','status','lastMessage','userMessage','unreadMessage'])
<li class="nav-item iq-chat-list {{$className  ?? ''}}">
    <a href="#user-content-{{$id}}" class="nav-link px-0 d-flex gap-3 {{$className  ?? ''}}" data-bs-toggle="tab" role="tab" aria-controls="user-content-{{$id}}" aria-selected="true">
        <div class="position-relative">
            <img src="{{asset('modules/chat/images')}}/{{$userProfileImg}}" alt="status-{{$id}}" class="avatar-50 rounded-pill" loading="lazy">
            <div class="iq-profile-badge {{$status ?? '' == 'online' ?  'bg-success' : 'bg-danger'}}  "></div>
        </div>
        <div class="d-flex align-items-center w-100 iq-userlist-data">
            <div class="d-flex flex-grow-1 flex-column">
                <div class="d-flex align-items-center gap-1">
                    <p class="mb-0 text-ellipsis short-1 flex-grow-1 iq-userlist-name">{{$username}}</p>
                    <small class="text-capitalize">{{$lastMessage  ?? ''}}</small>
                </div>
                <div class="d-flex align-items-center gap-2">
                    <small class="text-ellipsis short-1 flex-grow-1">{{$userMessage  ?? ''}}</small>
                    @if($unreadMessage  ?? '')
                        <span class="badge rounded-pill bg-warning">{{$unreadMessage  ?? ''}}</span>
                    @endif
                </div>
            </div>
        </div>
    </a>
</li>
