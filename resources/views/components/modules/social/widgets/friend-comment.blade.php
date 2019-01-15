@props(['userImage','userName','userComment','id','commentDuration'])
<div class="d-flex gap-3">
    <img src="{{asset('modules/social-app/images')}}/{{$userImage}}" alt="userimg" class="avatar-50 rounded-circle img-fluid" loading="lazy">
    <div class="w-100">
        <h6 class="mb-1">{{$userName}}</h6>
        <p class="mb-1">{{$userComment}}</p>
        <div class="d-flex flex-wrap align-items-center gap-3">
            <a href="javascript:void(0)">Like</a>
            <a href="#reply-{{$id}}" data-bs-toggle="collapse" aria-expanded="false" aria-controls="reply-{{$id}}">Reply</a>
            <span> {{$commentDuration}} </span>
        </div>
        <div class="collapse" id="reply-{{$id}}">
        <x-modules.social.widgets.comment-form-control placeholder="Enter Your Reply..."/>
        </div>
    </div>
</div>
