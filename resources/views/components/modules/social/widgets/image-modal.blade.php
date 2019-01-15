<div class="modal p-0" id="image-modal" tabindex="-1" aria-labelledby="image-modalLabel">
    <div class="modal-dialog modal-dialog-centered modal-fullscreen-sm-down modal-fullscreen-lx-down"
        style="max-width: 1400px;">
        <div class="modal-content">
            <div class="model-header relative">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                    style="position: absolute; right:0; z-index: 1; padding: 10px;"></button>
            </div>
            <div class="modal-body p-0">
                <div class="row">
                    <div class="col-sm-8">
                        <div class="card" style="height: 100%; width:100%">
                            <img src="{{ asset('modules/social-app/images/app/01.png') }}" class="img-fluid"
                                alt="post-image" style="width: 100%; height:100%">
                        </div>
                    </div>
                    <div class="col-sm-4 mt-4">
                        <div class="card">
                            <div class="card-header d-flex justify-content-between">
                                <div class="header-title">
                                    <div class="d-flex justify-content-center flex-wrap">
                                        <img class="img-fluid rounded-circle p-1 border border-2 border-primary border-dotted avatar-50"
                                            src="{{ asset('modules/social-app/images/avatar/01.png') }}" alt="">
                                        <div class="media-support-info">
                                            <div class="d-flex align-items-center">
                                                <h6 class="mb-0 me-2">Joshua Martin</h6>
                                                <small class ="text-dark">Added New Post</small>
                                            </div>
                                            <p class="mb-0 text-muted">3 hrs Ago</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="dropdown">
                                    <svg width="4" class="dropdown-toggle" id="dropdownMenuButton7"
                                        data-bs-toggle="dropdown" aria-expanded="false" role="button"
                                        viewBox="0 0 5 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="2.5" cy="3" r="2.5" fill="currentcolor"></circle>
                                        <circle cx="2.5" cy="14" r="2.5" fill="currentcolor"></circle>
                                        <circle cx="2.5" cy="25" r="2.5" fill="currentcolor"></circle>
                                    </svg>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton7">
                                        <a class="dropdown-item " href="javascript:void(0);">Action</a>
                                        <a class="dropdown-item " href="javascript:void(0);">Another
                                            action</a>
                                        <a class="dropdown-item " href="javascript:void(0);">Something
                                            else here</a>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="card-body">
                                <ul class="list-inline">
                                    <li class="mb-4">
                                        <div class="d-flex">
                                            <img src="{{ asset('modules/social-app/images/avatar/11.png') }}"
                                                alt="userimg" class="avatar-50 rounded-circle me-3 img-fluid">
                                            <div>
                                                <h6 class="mb-1">Larry Robbins</h6>
                                                <p class="mb-1">Great Picture Loved It.</p>
                                                <div class="d-flex flex-wrap align-items-center mb-1">
                                                    <a class="btn btn-sm bg-primary-subtle" href="#">Like</a>
                                                    <a class="btn btn-sm bg-primary-subtle mx-2" href="#">Reply</a>
                                                    <span> 5 Min Ago </span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <ul class="list-inline">
                                    <li class="mb-4">
                                        <div class="d-flex">
                                            <img src="{{ asset('modules/social-app/images/avatar/05.png') }}"
                                                alt="userimg" class="avatar-50 rounded-circle me-3 img-fluid">
                                            <div>
                                                <h6 class="mb-1">David Wiley</h6>
                                                <p class="mb-1">Wow nice place.</p>
                                                <div class="d-flex flex-wrap align-items-center mb-1">
                                                    <a class="btn btn-sm bg-primary-subtle" href="#">Like</a>
                                                    <a class="btn btn-sm bg-primary-subtle mx-2" href="#">Reply</a>
                                                    <span> 10 Min Ago </span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <ul class="list-inline">
                                    <li class="mb-4">
                                        <div class="d-flex">
                                            <img src="{{ asset('modules/social-app/images/avatar/09.png') }}"
                                                alt="userimg" class="avatar-50 rounded-circle me-3 img-fluid">
                                            <div>
                                                <h6 class="mb-1">Chaeyoung Park</h6>
                                                <p class="mb-1 ">Loved It.</p>
                                                <div class="d-flex flex-wrap align-items-center mb-1">
                                                    <a class="btn btn-sm bg-primary-subtle"
                                                        href="javascript:void(0)">Like</a>
                                                    <a class="btn btn-sm bg-primary-subtle mx-2"
                                                        href="javascript:void(0)">Reply</a>
                                                    <span> 25 Min Ago </span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="p-0 card-footer d flex justigy-content-end">
                                <form class="iq-social-comment-text position-relative d-flex align-items-center px-2"
                                    action="javascript:void(0);">
                                    <input type="text" class="form-control" placeholder="Add a comment...">
                                    <div class="iq-social-comment-attagement position-absolute d-flex">
                                        <a href="javascript:void(0);" class="me-3 text-body">
                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M14.7041 4.92433V11.0376C14.7041 13.3026 13.2866 14.9001 11.0216 14.9001H4.53413C2.26913 14.9001 0.859131 13.3026 0.859131 11.0376V4.92433C0.859131 2.65933 2.27663 1.06258 4.53413 1.06258H11.0216C13.2866 1.06258 14.7041 2.65933 14.7041 4.92433Z"
                                                    stroke="#8A92A6" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                </path>
                                                <path
                                                    d="M2.75757 11.3231L3.90357 10.1134C4.30182 9.69114 4.96557 9.67089 5.38857 10.0684C5.40132 10.0811 6.09132 10.7824 6.09132 10.7824C6.50757 11.2061 7.18782 11.2129 7.61157 10.7974C7.63932 10.7704 9.36207 8.68089 9.36207 8.68089C9.80607 8.14164 10.6033 8.06439 11.1433 8.50914C11.1793 8.53914 12.8068 10.2094 12.8068 10.2094"
                                                    stroke="#8A92A6" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                </path>
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M6.53102 5.84975C6.53102 6.5765 5.94227 7.16525 5.21552 7.16525C4.48877 7.16525 3.90002 6.5765 3.90002 5.84975C3.90002 5.123 4.48877 4.53425 5.21552 4.53425C5.94227 4.535 6.53102 5.123 6.53102 5.84975Z"
                                                    stroke="#8A92A6" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                </path>
                                            </svg>
                                        </a>
                                        <a href="javascript:void(0);" class="me-3 text-body">
                                            <svg width="16" height="14" viewBox="0 0 16 14" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M10.077 1.03848C10.8345 1.33998 11.0662 2.38998 11.376 2.72748C11.6857 3.06498 12.129 3.17973 12.3742 3.17973C13.6777 3.17973 14.7345 4.23648 14.7345 5.53923V9.88548C14.7345 11.633 13.317 13.0505 11.5695 13.0505H4.0245C2.27625 13.0505 0.859497 11.633 0.859497 9.88548V5.53923C0.859497 4.23648 1.91625 3.17973 3.21975 3.17973C3.46425 3.17973 3.9075 3.06498 4.218 2.72748C4.52775 2.38998 4.75875 1.33998 5.51625 1.03848C6.2745 0.73698 9.3195 0.73698 10.077 1.03848Z"
                                                    stroke="#8A92A6" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                </path>
                                                <path d="M11.9184 5.125H11.9251" stroke="#8A92A6" stroke-width="2"
                                                    stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M10.181 7.84601C10.181 6.52901 9.11373 5.46176 7.79673 5.46176C6.47973 5.46176 5.41248 6.52901 5.41248 7.84601C5.41248 9.16301 6.47973 10.2303 7.79673 10.2303C9.11373 10.2303 10.181 9.16301 10.181 7.84601Z"
                                                    stroke="#8A92A6" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                </path>
                                            </svg>
                                        </a>
                                        <a href="javascript:void(0);" class="text-body">
                                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M8.7966 6.24544V11.7402" stroke="#8A92A6" stroke-width="1.5"
                                                    stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path d="M11.5466 8.99284H6.04663" stroke="#8A92A6" stroke-width="1.5"
                                                    stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M12.3109 1.50001H5.28235C2.83235 1.50001 1.29663 3.23407 1.29663 5.68888V12.3111C1.29663 14.7659 2.8252 16.5 5.28235 16.5H12.3109C14.7681 16.5 16.2966 14.7659 16.2966 12.3111V5.68888C16.2966 3.23407 14.7681 1.50001 12.3109 1.50001Z"
                                                    stroke="#8A92A6" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                </path>
                                            </svg>
                                        </a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
