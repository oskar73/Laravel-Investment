@props(['img','friendListImg','friendListTitle','friendListSubTitle','friendListDec'])
<div class="card card-block card-stretch card-height">
    <div class="card-body profile-page p-0">
        <div class="profile-header-image">
            <div class="position-relative">
                <img src="{{asset('modules/social-app/images/friend-list')}}/{{$img}}" alt="profile-bg" class="rounded img-fluid w-100" loading="lazy">
            </div>
            <div class="profile-info p-4">
                <div class="user-detail">
                    <div class="d-flex flex-wrap justify-content-between align-items-start">
                        <div class="profile-detail d-flex gap-4">
                            <div class="profile-img">
                                <img src="{{asset('modules/social-app/images/avatar')}}/{{$friendListImg}}" alt="profile-img" class="avatar-130 img-fluid rounded-pill border" loading="lazy" />
                            </div>
                            <div class="user-data-block">
                                <h4>
                                    <a href="javascript:void(0)">{{$friendListTitle}}</a>
                                </h4>
                                <h6>{{$friendListSubTitle}}</h6>
                                <p>{{$friendListDec}}</p>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary mt-3 mt-md-0">Following</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
