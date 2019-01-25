<div class="iq-message-body iq-other-user">
    <div class="chat-profile">
        <img src="{{asset('modules/chat/images')}}/{{$userImg}}" alt="chat-user" class="avatar-40 rounded-pill" loading="lazy">
    </div>
    <div class="iq-chat-text">
        <small class="iq-chating p-0">{{$username}}, {{$messageTime}}</small>
        <div class="d-flex align-items-center justify-content-start">
            <div class="iq-chating-content d-flex align-items-center {{$class}} ">
                <p class="mr-2 mb-0">{{$message  ?? ''}}</p>
                @if($groupImages ?? '' == true)
                    <div class="d-grid iq-group-image gap-3">
                        <a data-fslightbox="gallery" href="{{asset('modules/chat/images/01.png')}}">
                            <img src="{{asset('modules/chat/images/01.png')}}" class="avatar-130 rounded" alt="chat-user" loading="lazy">
                        </a>
                        <a data-fslightbox="gallery" href="{{asset('modules/chat/images/02.png')}}">
                            <img src="{{asset('modules/chat/images/02.png')}}" class="avatar-130 rounded" alt="chat-user" loading="lazy">
                        </a>
                        <a data-fslightbox="gallery" href="{{asset('modules/chat/images/03.png')}}">
                            <img src="{{asset('modules/chat/images/03.png')}}" class="avatar-130 rounded" alt="chat-user" loading="lazy">
                        </a>
                        <a data-fslightbox="gallery" href="{{asset('modules/chat/images/04.png')}}">
                            <img src="{{asset('modules/chat/images/04.png')}}" class="avatar-130 rounded" alt="chat-user" loading="lazy">
                        </a>
                    </div>
                @endif
                @if($singleImage ?? '' == true)
                <div class="">
                        <a data-fslightbox="gallery" href="{{asset('modules/chat/images/05.png')}}">
                            <img src="{{asset('modules/chat/images/05.png')}}" class="rounded iq-single-image" alt="chat-user" loading="lazy">
                        </a>
                    </div>
                @endif
                <span class="badge rounded-pill bg-warning">{{$unreadMessage ?? ''}}</span>
            </div>
        </div>
    </div>
</div>
