@props(['groupimg','img','groupTitle','groupDec','groupPost','groupPostNumber','groupMember','groupMemberNumber','groupVisit','groupVisitNumber','groupAvatarimg','groupAvatarimg1','groupAvatarimg2','groupAvatarimg3','groupAvatarimg4','groupAvatarimg5','classname'])
<div class="card mb-0 group-card {{$classname}}">
    <div class="top-bg-image">
        <img src="{{asset('modules/social-app/images/profile-event')}}/{{$img}}" class="img-fluid w-100 rounded-0 rounded-top" alt="group-bg" loading="lazy" />
    </div>  
    <div class="card-body text-center">
        <div class="group-icon">
            <img src="{{asset('modules/social-app/images/group')}}/{{$groupimg}}" alt="profile-img" class="rounded-circle img-fluid avatar-120" loading="lazy">
        </div>
        <div class="group-info pt-3 pb-3">
            <h4><a href="{{route('social.groupdetail')}}">{{$groupTitle}}</a></h4>
            <p>{{$groupDec}}</p>
        </div>
        <div class="group-details d-inline-block pb-3">
            <ul class="d-flex align-items-center justify-content-between list-inline m-0 p-0 gap-3">
                <li>
                    <p class="mb-0">{{$groupPost}}</p>
                    <h6>{{$groupPostNumber}}</h6>
                </li>
                <li>
                    <p class="mb-0">{{$groupMember}}</p>
                    <h6>{{$groupMemberNumber}}</h6>
                </li>
                <li>
                    <p class="mb-0">{{$groupVisit}}</p>
                    <h6>{{$groupVisitNumber}}</h6>
                </li>
            </ul>
        </div>
        <div class="group-member mb-3">
            <div class="iq-media-group">
                <a href="#" class="iq-media">
                    <img class="img-fluid avatar-40 rounded-circle" src="{{asset('modules/social-app/images/avatar')}}/{{$groupAvatarimg}}" alt="img1" loading="lazy" />
                </a>
                <a href="#" class="iq-media">
                    <img class="img-fluid avatar-40 rounded-circle" src="{{asset('modules/social-app/images/avatar')}}/{{$groupAvatarimg1}}" alt="img2" loading="lazy" />
                </a>
                <a href="#" class="iq-media">
                    <img class="img-fluid avatar-40 rounded-circle" src="{{asset('modules/social-app/images/avatar')}}/{{$groupAvatarimg2}}" alt="img3" loading="lazy" />
                </a>
                <a href="#" class="iq-media">
                    <img class="img-fluid avatar-40 rounded-circle" src="{{asset('modules/social-app/images/avatar')}}/{{$groupAvatarimg3}}" alt="img4" loading="lazy" />
                </a>
                <a href="#" class="iq-media">
                    <img class="img-fluid avatar-40 rounded-circle" src="{{asset('modules/social-app/images/avatar')}}/{{$groupAvatarimg4}}" alt="img5" loading="lazy" />
                </a>
                <a href="#" class="iq-media">
                    <img class="img-fluid avatar-40 rounded-circle" src="{{asset('modules/social-app/images/avatar')}}/{{$groupAvatarimg5}}" alt="img6" loading="lazy" />
                </a>
            </div>
        </div>
        <a href="{{route('social.groupdetail')}}" class="btn btn-primary d-block w-100">Join</a>
    </div>
</div>
