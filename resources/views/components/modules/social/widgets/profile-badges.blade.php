@props(['profileBadgesimg','profileBadgesTitle','profileBadgesDec','profileBadgesSub'])
<div class="card profile-badges mb-0">
    <div class="card-body">
        <div class="iq-badges text-left">
            <div class="badges-icon">
                <img class="avatar-80 rounded" src="{{asset('modules/social-app/images/profile-badges')}}/{{$profileBadgesimg}}" alt="" loading="lazy" />
            </div>
            <h5 class="mb-2">{{$profileBadgesTitle}}</h5>
            <p>{{$profileBadgesDec}}</p>
            <span class="text-uppercase">{{$profileBadgesSub}}</span>
        </div>
    </div>
</div>