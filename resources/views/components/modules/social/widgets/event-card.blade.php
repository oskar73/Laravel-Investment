@props(['classname','img','eventCardMonths','eventCardDate','eventCardDec','eventCardTitle','eventCardimg1','eventCardimg2','eventCardimg3','eventCardimg4','eventCardimg5'])
<div class="card rounded  {{$classname}}">
    <div class="event-images">
    <a href="#">
    <img src="{{asset('modules/social-app/images/profile-event')}}/{{$img}}" class="img-fluid" alt="Responsive image" loading="lazy">
    </a>
    </div>
    <div class="card-body">
        <div class="d-flex gap-3">
            <div class="date-of-event">
                <span>{{$eventCardMonths}}</span>
                <h5>{{$eventCardDate}}</h5>
            </div>
            <div class="events-detail">
                <h5><a href="{{route('social.eventdetail')}}">{{$eventCardTitle}}</a></h5>
                <p>{{$eventCardDec}}</p>
                <div class="event-member">
                    <div class="iq-media-group">
                    <a href="#" class="iq-media">
                    <img class="img-fluid avatar-40 rounded-circle" src="{{asset('modules/social-app/images/avatar')}}/{{$eventCardimg1}}" alt="img1" loading="lazy">
                    </a>
                    <a href="#" class="iq-media">
                    <img class="img-fluid avatar-40 rounded-circle" src="{{asset('modules/social-app/images/avatar')}}/{{$eventCardimg2}}" alt="img2" loading="lazy">
                    </a>
                    <a href="#" class="iq-media">
                    <img class="img-fluid avatar-40 rounded-circle" src="{{asset('modules/social-app/images/avatar')}}/{{$eventCardimg3}}" alt="img3" loading="lazy">
                    </a>
                    <a href="#" class="iq-media">
                    <img class="img-fluid avatar-40 rounded-circle" src="{{asset('modules/social-app/images/avatar')}}/{{$eventCardimg4}}" alt="img4" loading="lazy">
                    </a>
                    <a href="#" class="iq-media">
                    <img class="img-fluid avatar-40 rounded-circle" src="{{asset('modules/social-app/images/avatar')}}/{{$eventCardimg5}}" alt="img5" loading="lazy">
                    </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
