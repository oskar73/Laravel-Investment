<x-app-layout layout="social" :assets="$assets ?? []" :isBanner="true" title="Dashboard" active="dashboard">

    <div class="row">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center flex-wrap">
                        <h4 class="mb-0">{{__('social.profile_stats')}}</h4>
                        <div class="dropdown">
                            <a href="#" class="text-gray dropdown-toggle" id="profile-statistics" data-bs-toggle="dropdown" aria-expanded="false">
                            Everything
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="profile-statistics">
                                <li><a class="dropdown-item" href="#">Everything</a></li>
                                <li><a class="dropdown-item" href="#">Social</a></li>
                                <li><a class="dropdown-item" href="#">Live Streaming</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row row-cols-xl-4 row-cols-md-2 row-cols-1">
                        <div class="col">
                            <div class="card bg-body shadow-none mb-xl-0 ">
                                <div class="card-body">
                                    <div class="d-flex align-items-center gap-3 flex-wrap">
                                        <button type="button" class="btn btn-sm bg-white rounded-circle p-2">
                                            <img src="{{asset('modules/social-app/images/media/01.png')}}" alt="01" class="img-fluid avatar-30 object-contain">
                                        </button>

                                        <div>
                                            <small>{{__('social.followers')}}</small>
                                            <h4 class="mb-0">280k</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card bg-body shadow-none mb-xl-0">
                                <div class="card-body">
                                    <div class="d-flex align-items-center gap-3 flex-wrap">
                                        <button type="button" class="btn btn-sm bg-white rounded-circle p-2">
                                            <img src="{{asset('modules/social-app/images/media/02.png')}}" alt="01" class="img-fluid avatar-30 object-contain">
                                        </button>
                                        <div>
                                            <small>{{__('social.join')}}</small>
                                            <h4 class="mb-0">100k</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card bg-body shadow-none mb-md-0">
                                <div class="card-body">
                                    <div class="d-flex align-items-center gap-3 flex-wrap">
                                        <button type="button" class="btn btn-sm bg-white rounded-circle p-2">
                                            <img src="{{asset('modules/social-app/images/media/03.png')}}" alt="01" class="img-fluid avatar-30 object-contain">
                                        </button>
                                        <div>
                                            <small>{{__('social.subscribers')}}</small>
                                            <h4 class="mb-0">2.9M</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card bg-body shadow-none mb-0">
                                <div class="card-body">
                                    <div class="d-flex align-items-center gap-3 flex-wrap">

                                        <button type="button" class="btn btn-sm bg-white rounded-circle p-2">
                                            <img src="{{asset('modules/social-app/images/media/04.png')}}" alt="01" class="img-fluid avatar-30 object-contain">
                                        </button>
                                        <div>
                                            <small>{{__('social.like')}}</small>
                                            <h4 class="mb-0">210k</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center flex-wrap">
                        <h4 class="mb-0">Profile Reach</h4>
                        <div class="dropdown">
                            <a href="#" class="text-gray dropdown-toggle" id="profile-reach" data-bs-toggle="dropdown" aria-expanded="false">
                            Month
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="profile-reach">
                                <li><a class="dropdown-item" href="#">Everything</a></li>
                                <li><a class="dropdown-item" href="#">Social</a></li>
                                <li><a class="dropdown-item" href="#">Live Streaming</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="overall-chart" id="overall-chart"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="card card-block card-stretch card-height">
                        <div class="card-header">
                            <h4 class="mb-0">{{__('social.key')}}</h4>
                        </div>
                        <div class="card-body">
                            <div class="d-flex border-bottom pb-3 align-items-center iq-social-keyMetrics">
                                <h6 class="iq-key-metrics mb-0">{{__('social.clicks')}}</h6>
                                <div class="iq-drive-progress d-flex align-items-center">
                                    <span class="key-number">10k</span>
                                    <div class="shadow-none key-progress progress bg-primary-subtle w-50">
                                        <div class="progress-bar bg-primary" data-toggle="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <span class="ms-3">12k</span>
                                </div>
                            </div>
                            <div class="d-flex border-bottom py-3 align-items-center iq-social-keyMetrics">
                                <h6 class="iq-key-metrics mb-0">{{__('social.likes')}}</h6>
                                <div class="iq-drive-progress d-flex align-items-center">
                                    <span class="key-number">680</span>
                                    <div class="shadow-none key-progress progress bg-primary-subtle w-50">
                                        <div class="progress-bar bg-primary" data-toggle="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <span class="ms-3">520</span>
                                </div>
                            </div>
                            <div class="d-flex border-bottom py-3 align-items-center iq-social-keyMetrics">
                                <h6 class="iq-key-metrics mb-0">{{__('social.followers')}}</h6>
                                <div class="iq-drive-progress d-flex align-items-center">
                                    <span class="key-number">8k</span>
                                    <div class="shadow-none key-progress progress bg-primary-subtle w-50">
                                        <div class="progress-bar bg-primary" data-toggle="progress-bar" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <span class="ms-3">121k</span>
                                </div>
                            </div>
                            <div class="d-flex pt-3 align-items-center iq-social-keyMetrics">
                                <h6 class="iq-key-metrics mb-0">{{__('social.impressions')}}</h6>
                                <div class="iq-drive-progress d-flex align-items-center">
                                    <span class="key-number">369</span>
                                    <div class="shadow-none key-progress progress bg-primary-subtle w-50">
                                        <div class="progress-bar bg-primary" data-toggle="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <span class="ms-3">10k</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="row row-cols-1 row-cols-md-2">
                        <div class="col">
                            <div class="card card-block card-stretch card-height text-center">
                                <div class="card-header">
                                    <h2 class="card-title">20k</h2>
                                </div>
                                <div class="card-body px-0">
                                    <span>Enagaged Users</span>
                                    <div id="social-1"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card card-block card-stretch card-height text-center">
                                <div class="card-header">
                                    <h2 class="card-title">12.2k</h2>
                                </div>
                                <div class="card-body px-0">
                                    <span>Page Impression</span>
                                    <div id="social-2"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card">
                    <div class="card-header">
                        <div class="d-flex align-items-center">
                            <h4 class="me-3 mb-0">{{__('social.requests')}}</h4>
                            <div>
                                <span class="btn btn-sm btn-icon btn-primary-subtle text-primary rounded-pill">3</span>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="d-flex mb-3 pb-3 border-bottom gap-3">
                            <img src="{{asset('modules/social-app/images/avatar/12.png')}}" alt="01" class="img-fluid rounded-circle avatar-60">
                            <div>
                                <div class="d-flex align-items-center gap-2">
                                    <h5 class="mb-0">Wade Warren</h5>
                                    <small>{{__('social.wants')}}</small>
                                </div>
                                <div class="d-flex align-items-center mt-2 gap-2">
                                    <a href="#" class="small">{{__('social.accept')}}</a>
                                    <a href="#" class="text-body small">{{__('social.decline')}}</a>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex">
                        <img src="{{asset('modules/social-app/images/avatar/14.png')}}" alt="02" class="img-fluid rounded-circle avatar-60 me-3">
                            <div>
                                <div class="d-flex align-items-center">
                                    <h5 class="mb-0">Jenny Wilson</h5>
                                    <small class="ms-2">{{__('social.wants')}}</small>
                                </div>
                                <div class="d-flex align-items-center mt-2 gap-2">
                                    <a href="#" class="small">{{__('social.accept')}}</a>
                                    <a href="#" class="text-body small">{{__('social.decline')}}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">{{__('social.suggestions')}}</h4>
                </div>
                <div class="card-body">
                <div class="iq-social-user-details">
                    <x-modules.social.widgets.suggested-user userName="Cameron Williamson" userAvatar="avatar/13.png" userComment="@Naoerville"/>
                    <x-modules.social.widgets.suggested-user userName="Guy Hawkins" userAvatar="avatar/06.png" userComment="@hawkins"/>
                    <x-modules.social.widgets.suggested-user userName="Jacob Jones" userAvatar="avatar/27.png" userComment="@Austin"/>
                    <x-modules.social.widgets.suggested-user userName="Darlene Robertson" userAvatar="avatar/28.png" userComment="@Fairfiels"/>
                </div>
                    <div class="text-center mt-3">
                        <div class="btn btn-primary btn-sm">{{__('social.view')}}</div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body text-center">
                    <div class="iq-media-group-1">
                        <a href="#" class="iq-media-1">
                            <div class="icon">
                                <img src="{{asset('modules/social-app/images/avatar/10.png')}}" alt="01" class="img-fluid rounded-circle avatar-48">
                            </div>
                        </a>
                        <a href="#" class="iq-media-1">
                            <div class="icon">
                                <img src="{{asset('modules/social-app/images/avatar/25.png')}}" alt="01" class="img-fluid rounded-circle avatar-48">
                            </div>
                        </a>
                        <a href="#" class="iq-media-1">
                            <div class="icon">
                                <img src="{{asset('modules/social-app/images/avatar/06.png')}}" alt="01" class="img-fluid rounded-circle avatar-48">
                            </div>
                        </a>
                        <a href="#" class="iq-media-1">
                            <div class="icon">
                                <img src="{{asset('modules/social-app/images/avatar/27.png')}}" alt="01" class="img-fluid rounded-circle avatar-48">
                            </div>
                        </a>
                        <a href="#" class="iq-media-1">
                            <div class="icon">
                                <img src="{{asset('modules/social-app/images/avatar/15.png')}}" alt="01" class="img-fluid rounded-circle avatar-48">
                            </div>
                        </a>
                        <a href="#" class="iq-media-1">
                            <div class="icon">
                                <img src="{{asset('modules/social-app/images/avatar/19.png')}}" alt="01" class="img-fluid rounded-circle avatar-48">
                            </div>
                        </a>
                        <a href="#" class="iq-media-1">
                            <div class="icon">
                                <img src="{{asset('modules/social-app/images/avatar/05.png')}}" alt="01" class="img-fluid rounded-circle avatar-48">
                            </div>
                        </a>
                        <a href="#" class="iq-media-1">
                            <div class="icon">
                                <img src="{{asset('modules/social-app/images/avatar/01.png')}}" alt="01" class="img-fluid rounded-circle avatar-48">
                            </div>
                        </a>
                    </div>
                    <div class="d-flex justify-content-center align-items-center mt-4">
                        <h5>184.3k</h5>
                        <h6 class="ms-2">{{__('social.followers')}}</h6>
                    </div>
                    <span>{{__('social.active_now')}}</span>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
