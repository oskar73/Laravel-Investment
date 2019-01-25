@props(['senderName','id','stars'])
<div class="email-app-details">
    <div class="card mb-0">
        <div class="card-body">
            <div class="d-flex justify-content-between align-items-center">
                <div class="d-flex justify-content-between">
                    <div class="email-remove submit me-2 text-primary">
                        <svg class="icon-24" xmlns="http://www.w3.org/2000/svg" width="24" viewBox="0 0 24 24" fill="none">
                            <path d="M4.25 12.2743L19.25 12.2743" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M10.2998 18.2987L4.2498 12.2747L10.2998 6.24969" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <div class="me-2">
                            @if($stars == 'false')
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" class="mx-2" viewBox="0 0 24 24" fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M13.1043 4.17701L14.9317 7.82776C15.1108 8.18616 15.4565 8.43467 15.8573 8.49218L19.9453 9.08062C20.9554 9.22644 21.3573 10.4505 20.6263 11.1519L17.6702 13.9924C17.3797 14.2718 17.2474 14.6733 17.3162 15.0676L18.0138 19.0778C18.1856 20.0698 17.1298 20.8267 16.227 20.3574L12.5732 18.4627C12.215 18.2768 11.786 18.2768 11.4268 18.4627L7.773 20.3574C6.87023 20.8267 5.81439 20.0698 5.98724 19.0778L6.68385 15.0676C6.75257 14.6733 6.62033 14.2718 6.32982 13.9924L3.37368 11.1519C2.64272 10.4505 3.04464 9.22644 4.05466 9.08062L8.14265 8.49218C8.54354 8.43467 8.89028 8.18616 9.06937 7.82776L10.8957 4.17701C11.3477 3.27433 12.6523 3.27433 13.1043 4.17701Z" fill="#FFD329"></path>
                            </svg>
                            @else
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" class="mx-2" viewBox="0 0 20 20" fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M11.1043 2.17701L12.9317 5.82776C13.1108 6.18616 13.4565 6.43467 13.8573 6.49218L17.9453 7.08062C18.9554 7.22644 19.3573 8.45055 18.6263 9.15194L15.6702 11.9924C15.3797 12.2718 15.2474 12.6733 15.3162 13.0676L16.0138 17.0778C16.1856 18.0698 15.1298 18.8267 14.227 18.3574L10.5732 16.4627C10.215 16.2768 9.78602 16.2768 9.42679 16.4627L5.773 18.3574C4.87023 18.8267 3.81439 18.0698 3.98724 17.0778L4.68385 13.0676C4.75257 12.6733 4.62033 12.2718 4.32982 11.9924L1.37368 9.15194C0.642715 8.45055 1.04464 7.22644 2.05466 7.08062L6.14265 6.49218C6.54354 6.43467 6.89028 6.18616 7.06937 5.82776L8.89574 2.17701C9.34765 1.27433 10.6523 1.27433 11.1043 2.17701Z" stroke="#8A92A6" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            @endif
                    </div>
                    <div class="text-primary">
                        <svg class="icon-24" xmlns="http://www.w3.org/2000/svg" width="24" viewBox="0 0 24 24" fill="none">
                            <path opacity="0.4" d="M19.6433 9.48844C19.6433 9.55644 19.1103 16.2972 18.8059 19.1341C18.6153 20.875 17.493 21.931 15.8095 21.961C14.516 21.99 13.2497 22 12.0039 22C10.6812 22 9.38772 21.99 8.13215 21.961C6.50507 21.922 5.38177 20.845 5.20088 19.1341C4.88772 16.2872 4.36448 9.55644 4.35476 9.48844C4.34503 9.28345 4.41117 9.08846 4.54538 8.93046C4.67765 8.78447 4.86827 8.69647 5.06861 8.69647H18.9392C19.1385 8.69647 19.3194 8.78447 19.4624 8.93046C19.5956 9.08846 19.6627 9.28345 19.6433 9.48844Z" fill="currentColor"/>
                            <path d="M21 5.97686C21 5.56588 20.6761 5.24389 20.2871 5.24389H17.3714C16.7781 5.24389 16.2627 4.8219 16.1304 4.22692L15.967 3.49795C15.7385 2.61698 14.9498 2 14.0647 2H9.93624C9.0415 2 8.26054 2.61698 8.02323 3.54595L7.87054 4.22792C7.7373 4.8219 7.22185 5.24389 6.62957 5.24389H3.71385C3.32386 5.24389 3 5.56588 3 5.97686V6.35685C3 6.75783 3.32386 7.08982 3.71385 7.08982H20.2871C20.6761 7.08982 21 6.75783 21 6.35685V5.97686Z" fill="currentColor"/>
                        </svg>
                    </div>
                </div>
                <div class="d-flex align-items-center">
                    <span class="iq-header-page">Page 1 to 50</span>
                    <div class="btn-group btn-group-toggle btn-group-sm ms-3 btn-group-edges">
                        <a class="btn btn-icon btn-primary" href="javascript:void(0)">
                            <svg class="icon-24" xmlns="http://www.w3.org/2000/svg" width="24" viewBox="0 0 24 24" fill="none">
                                <path d="M15.5 19L8.5 12L15.5 5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </a>
                        <a class="btn btn-icon btn-primary" href="javascript:void(0)">
                            <svg class="icon-24" xmlns="http://www.w3.org/2000/svg" width="24" viewBox="0 0 24 24" fill="none">
                                <path d="M8.5 5L15.5 12L8.5 19" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-between mt-3 flex-wrap">
                <div>
                    <h6>Confirmation Mail for {{$senderName ?? ''}}</h6>
                </div>
                <div class="text-end text-primary">1 hr ago</div>
            </div>
             <div class="d-flex justify-content-start mt-4">
                <div>
                    <button type="button" class="btn btn-soft-secondary btn-icon rounded-circle avatar-50 d-flex align-items-center justify-content-center">
                        <span>
                            <svg class="icon-24" xmlns="http://www.w3.org/2000/svg" width="24" viewBox="0 0 24 24" fill="none">
                                <path d="M11.949 14.5399C8.49903 14.5399 5.58807 15.1037 5.58807 17.2794C5.58807 19.4561 8.51783 20 11.949 20C15.399 20 18.31 19.4362 18.31 17.2605C18.31 15.0839 15.3802 14.5399 11.949 14.5399Z" fill="currentColor"/>
                                <path opacity="0.4" d="M11.949 12.467C14.2851 12.467 16.1583 10.5831 16.1583 8.23351C16.1583 5.88306 14.2851 4 11.949 4C9.61293 4 7.73975 5.88306 7.73975 8.23351C7.73975 10.5831 9.61293 12.467 11.949 12.467Z" fill="currentColor"/>
                                <path opacity="0.4" d="M21.0879 9.21926C21.6923 6.84179 19.9203 4.70657 17.6639 4.70657C17.4186 4.70657 17.184 4.73359 16.9548 4.77952C16.9243 4.78672 16.8903 4.80203 16.8724 4.82905C16.8518 4.86327 16.867 4.9092 16.8894 4.93892C17.5672 5.89531 17.9567 7.05973 17.9567 8.3097C17.9567 9.50744 17.5995 10.6241 16.9727 11.5508C16.9082 11.6463 16.9655 11.775 17.0792 11.7949C17.2368 11.8228 17.398 11.8372 17.5627 11.8417C19.2058 11.8849 20.6805 10.8213 21.0879 9.21926Z" fill="currentColor"/>
                                <path d="M22.8093 14.8169C22.5084 14.1721 21.7823 13.73 20.6782 13.5129C20.1571 13.385 18.7468 13.2049 17.4351 13.2292C17.4154 13.2319 17.4046 13.2455 17.4028 13.2545C17.4002 13.2671 17.4055 13.2887 17.4315 13.3022C18.0377 13.6039 20.381 14.916 20.0864 17.6834C20.0738 17.8032 20.1696 17.9067 20.2887 17.8887C20.8654 17.8059 22.349 17.4853 22.8093 16.4866C23.0636 15.9588 23.0636 15.3456 22.8093 14.8169Z" fill="currentColor"/>
                                <path opacity="0.4" d="M7.04483 4.77979C6.8165 4.73296 6.58101 4.70685 6.33567 4.70685C4.07926 4.70685 2.30726 6.84207 2.91255 9.21953C3.31906 10.8216 4.79379 11.8852 6.43685 11.842C6.60161 11.8375 6.76368 11.8221 6.92037 11.7951C7.03409 11.7753 7.09139 11.6465 7.02692 11.5511C6.40014 10.6235 6.04288 9.50771 6.04288 8.30997C6.04288 7.0591 6.43327 5.89468 7.11109 4.93919C7.13258 4.90947 7.1487 4.86354 7.12721 4.82932C7.1093 4.80141 7.07617 4.787 7.04483 4.77979Z" fill="currentColor"/>
                                <path d="M3.32156 13.5127C2.21752 13.7297 1.49225 14.1719 1.19139 14.8167C0.936203 15.3453 0.936203 15.9586 1.19139 16.4872C1.65163 17.485 3.13531 17.8065 3.71195 17.8885C3.83104 17.9065 3.92595 17.8038 3.91342 17.6831C3.61883 14.9166 5.9621 13.6045 6.56918 13.3028C6.59425 13.2884 6.59962 13.2677 6.59694 13.2542C6.59515 13.2452 6.5853 13.2317 6.5656 13.2299C5.25294 13.2047 3.84358 13.3848 3.32156 13.5127Z" fill="currentColor"/>
                            </svg>
                        </span>
                    </button>
                </div>
                <div class="ms-2">
                    <span>{{$senderName ?? ''}}<code class="m-0 iq-word-wrap"> &#x3C;{{$senderName ?? ''}}.123@gmail.com&#x3E;&#x3C;/{{$senderName}}.123&#x3E;</code></span><br>
                    <div class="dropdown">
                        <span role="button" id="dropdownMenuLink-{{$id}}" data-bs-toggle="dropdown" aria-expanded="false">
                            to me
                            <svg xmlns="http://www.w3.org/2000/svg" width="10" viewBox="0 0 10 6" fill="none">
                                <path d="M9 1L5 5L1 1" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </span>
                        <table class="dropdown-menu p-3" aria-labelledby="dropdownMenuLink-{{$id}}">
                            <tr>
                                <th>from:</th>
                                <td class="iq-word-wrap">&#x3C;{{$senderName ?? ''}}.123@gmail.com&#x3E;</td>
                            </tr>
                            <tr>
                                <th>reply-to:</th>
                                <td>{{$$senderName ?? ''}}</td>
                            </tr>
                            <tr>
                                <th>to:</th>
                                <td> &#x3C;michael.123@gmail.com&#x3E;</td>
                            </tr>
                            <tr>
                                <th>subject:</th>
                                <td>Confirmation Mail for {{$$senderName ?? ''}}</td>
                            </tr>
                            <tr>
                                <th>mailed by:</th>
                                <td>michael.mitc@example.com</td>
                            </tr>
                            <tr>
                                <th>signed-by:</th>
                                <td class="iq-word-wrap">{{$$senderName ?? ''}}.123@gmail.com</td>
                            </tr>
                            <tr>
                                <th >security:</th>
                                <td>Standard encryption (TLS)</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <div>
                <p class="my-4">Hello Micheal,</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla egestas eu lacus, libero. Non mollis nunc commodo cursus urna pharetra aliquam. Est mi diam sed ac ut id. Metus gravida enim porta molestie sagittis condimentum interdum risus. Turpis porta erat mauris urna sit dapibus. Auctor nibh sit magna netus vulputate enim vulputate. Purus, tortor lobortis eget fermentum.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla egestas eu lacus, libero. Non mollis nunc commodo cursus urna pharetra aliquam. Est mi diam sed ac ut id. Metus gravida enim molestie sagittis condimentum interdum risus. </p>
                <p class="mt-4 mb-0">Best regards,</p>
                <p class="text-primary mb-4">Manager</p>
            </div>
            <hr>
            <div class="d-flex justify-content-start my-4">
                <svg  class="icon-24" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <g>
                        <path d="M19.6001 10.7094L11.3277 18.698C9.73797 20.2332 7.20692 20.189 5.67172 18.5993C4.13653 17.0095 4.18071 14.4785 5.77045 12.9433L14.7622 4.26006C15.2391 3.79948 15.8795 3.54722 16.5425 3.55879C17.2054 3.57036 17.8366 3.84481 18.2972 4.32177C18.7578 4.79872 19.01 5.4391 18.9985 6.10204C18.9869 6.76498 18.7124 7.39617 18.2355 7.85676L10.6824 15.1507C10.2868 15.5327 9.65048 15.5216 9.26842 15.126C8.88636 14.7304 8.89746 14.0941 9.2931 13.712L16.1268 7.11274L15.0848 6.03373L8.25111 12.633C7.77416 13.0936 7.49971 13.7248 7.48814 14.3877C7.47657 15.0506 7.72882 15.691 8.18941 16.168C8.65 16.6449 9.28119 16.9194 9.94413 16.931C10.6071 16.9425 11.2475 16.6903 11.7244 16.2297L19.2775 8.93577C20.8672 7.40058 20.9114 4.86952 19.3762 3.27978C17.841 1.69004 15.3099 1.64586 13.7202 3.18105L4.72846 11.8643C2.54167 13.976 2.48095 17.4545 4.59271 19.6413C6.70447 21.8281 10.1829 21.8888 12.3697 19.777L20.6421 11.7884L19.6001 10.7094Z" fill="#7A7B91"/>
                    </g>
                    <defs>
                        <clipPath>
                            <rect width="24" height="24" fill="white"/>
                        </clipPath>
                    </defs>
                </svg>
                <p class="text-primary m-0 ms-2">4 files attached</p>
            </div>
            <div class="row">
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                    <div class="bg-soft-secondary rounded mb-4">
                        <div class="d-flex align-items-center p-4">
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="64" viewBox="0 0 64 64" fill="none">
                                    <path d="M49.4133 24L34.6667 9.25334C34.292 8.87816 33.7836 8.66714 33.2533 8.66667H21.3333C19.3884 8.66667 17.5231 9.43929 16.1479 10.8146C14.7726 12.1898 14 14.0551 14 16V48C14 49.9449 14.7726 51.8102 16.1479 53.1854C17.5231 54.5607 19.3884 55.3333 21.3333 55.3333H42.6667C44.6116 55.3333 46.4768 54.5607 47.8521 53.1854C49.2274 51.8102 50 49.9449 50 48V25.3333C49.979 24.8309 49.7695 24.3549 49.4133 24ZM35.3333 14.005L44.6617 23.3333H35.3333V14.005ZM42.6667 52.8217H21.3333C20.4493 52.8217 18.4856 51.2297 17.8605 50.6046C17.2353 49.9795 16.5116 48.884 16.5116 48V16C16.5116 15.1159 17.2353 13.2763 17.8605 12.6511C18.4856 12.026 20.4493 11.1783 21.3333 11.1783H32.8217V23.845C32.8286 24.3732 33.1148 24.9287 33.4884 25.3023C33.862 25.6759 34.2934 25.8381 34.8217 25.845H47.4884V48C47.4884 48.884 46.7647 50.7237 46.1395 51.3488C45.5144 51.9739 43.5507 52.8217 42.6667 52.8217Z" fill="white"/>
                                    <path d="M35.9729 39.6C34.3332 38.571 33.0992 37.0073 32.4796 35.1733C33.0537 33.4576 33.2271 31.6331 32.9862 29.84C32.9093 29.3882 32.689 28.9733 32.3579 28.6565C32.0268 28.3397 31.6025 28.138 31.1478 28.0811C30.6931 28.0243 30.2321 28.1154 29.8332 28.3409C29.4343 28.5664 29.1186 28.9144 28.9329 29.3333C28.6293 31.4891 28.8582 33.6864 29.5996 35.7333C28.5868 38.0993 27.4565 40.4133 26.2129 42.6666C24.3196 43.7333 21.7329 45.3333 21.3329 47.1733C21.0129 48.6666 23.8129 52.5066 28.5862 44.1866C30.7087 43.3987 32.8827 42.7572 35.0929 42.2666C36.7267 43.2008 38.5492 43.7566 40.4262 43.8933C40.8572 43.9045 41.2819 43.788 41.6469 43.5585C42.0119 43.329 42.3009 42.9968 42.4775 42.6035C42.6542 42.2102 42.7107 41.7735 42.6399 41.3483C42.5691 40.923 42.3742 40.5281 42.0796 40.2133C40.9596 39.0666 37.6262 39.3866 35.9729 39.6ZM23.2262 47.6C23.9735 46.3211 24.9605 45.1984 26.1329 44.2933C24.3196 47.1733 23.2262 47.68 23.2262 47.6266V47.6ZM31.0129 29.44C31.7062 29.44 31.6529 32.5066 31.1729 33.3333C30.8113 32.0757 30.7565 30.7498 31.0129 29.4666V29.44ZM28.6929 42.4533C29.5964 40.8049 30.3806 39.0938 31.0396 37.3333C31.746 38.6479 32.7285 39.7941 33.9196 40.6933C32.1304 41.1415 30.382 41.7391 28.6929 42.48V42.4533ZM41.2262 41.9733C41.2262 41.9733 40.7462 42.56 37.6796 41.2266C41.0129 41.0133 41.5729 41.7866 41.2262 42V41.9733Z" fill="#F91D0A" fill-opacity="0.7"/>
                                </svg>
                            </div>
                            <div class="w-100">
                                <div class="d-flex">
                                    <svg class="icon-24" width="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M15.7161 16.2234H8.49609" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M15.7161 12.0369H8.49609" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M11.2521 7.86011H8.49707" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M15.909 2.74976C15.909 2.74976 8.23198 2.75376 8.21998 2.75376C5.45998 2.77076 3.75098 4.58676 3.75098 7.35676V16.5528C3.75098 19.3368 5.47298 21.1598 8.25698 21.1598C8.25698 21.1598 15.933 21.1568 15.946 21.1568C18.706 21.1398 20.416 19.3228 20.416 16.5528V7.35676C20.416 4.57276 18.693 2.74976 15.909 2.74976Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                    <span class="ms-2">Doc-5213.pdf</span>
                                </div>
                                <div class="d-flex justify-content-between align-items-center mt-2">
                                    <span class="text-primary">2 mb</span>
                                    <svg  class="icon-24" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <path d="M12.1222 15.4361L12.1222 3.39508" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M15.0382 12.5084L12.1222 15.4364L9.20621 12.5084" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M16.755 8.12799H17.688C19.723 8.12799 21.372 9.77699 21.372 11.813V16.697C21.372 18.727 19.727 20.372 17.697 20.372L6.55701 20.372C4.52201 20.372 2.87201 18.722 2.87201 16.687V11.802C2.87201 9.77299 4.51801 8.12799 6.54701 8.12799L7.48901 8.12799" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                    <div class="bg-soft-secondary rounded mb-4">
                        <div class="d-flex align-items-center p-4">
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="64" viewBox="0 0 64 64" fill="none">
                                    <path d="M49.4133 24L34.6667 9.25334C34.292 8.87816 33.7836 8.66714 33.2533 8.66667H21.3333C19.3884 8.66667 17.5231 9.43929 16.1479 10.8146C14.7726 12.1898 14 14.0551 14 16V48C14 49.9449 14.7726 51.8102 16.1479 53.1854C17.5231 54.5607 19.3884 55.3333 21.3333 55.3333H42.6667C44.6116 55.3333 46.4768 54.5607 47.8521 53.1854C49.2274 51.8102 50 49.9449 50 48V25.3333C49.979 24.8309 49.7695 24.3549 49.4133 24ZM35.3333 14.005L44.6617 23.3333H35.3333V14.005ZM42.6667 52.8217H21.3333C20.4493 52.8217 18.4856 51.2297 17.8605 50.6046C17.2353 49.9795 16.5116 48.884 16.5116 48V16C16.5116 15.1159 17.2353 13.2763 17.8605 12.6511C18.4856 12.026 20.4493 11.1783 21.3333 11.1783H32.8217V23.845C32.8286 24.3732 33.1148 24.9287 33.4884 25.3023C33.862 25.6759 34.2934 25.8381 34.8217 25.845H47.4884V48C47.4884 48.884 46.7647 50.7237 46.1395 51.3488C45.5144 51.9739 43.5507 52.8217 42.6667 52.8217Z" fill="white"/>
                                    <path d="M35.9729 39.6C34.3332 38.571 33.0992 37.0073 32.4796 35.1733C33.0537 33.4576 33.2271 31.6331 32.9862 29.84C32.9093 29.3882 32.689 28.9733 32.3579 28.6565C32.0268 28.3397 31.6025 28.138 31.1478 28.0811C30.6931 28.0243 30.2321 28.1154 29.8332 28.3409C29.4343 28.5664 29.1186 28.9144 28.9329 29.3333C28.6293 31.4891 28.8582 33.6864 29.5996 35.7333C28.5868 38.0993 27.4565 40.4133 26.2129 42.6666C24.3196 43.7333 21.7329 45.3333 21.3329 47.1733C21.0129 48.6666 23.8129 52.5066 28.5862 44.1866C30.7087 43.3987 32.8827 42.7572 35.0929 42.2666C36.7267 43.2008 38.5492 43.7566 40.4262 43.8933C40.8572 43.9045 41.2819 43.788 41.6469 43.5585C42.0119 43.329 42.3009 42.9968 42.4775 42.6035C42.6542 42.2102 42.7107 41.7735 42.6399 41.3483C42.5691 40.923 42.3742 40.5281 42.0796 40.2133C40.9596 39.0666 37.6262 39.3866 35.9729 39.6ZM23.2262 47.6C23.9735 46.3211 24.9605 45.1984 26.1329 44.2933C24.3196 47.1733 23.2262 47.68 23.2262 47.6266V47.6ZM31.0129 29.44C31.7062 29.44 31.6529 32.5066 31.1729 33.3333C30.8113 32.0757 30.7565 30.7498 31.0129 29.4666V29.44ZM28.6929 42.4533C29.5964 40.8049 30.3806 39.0938 31.0396 37.3333C31.746 38.6479 32.7285 39.7941 33.9196 40.6933C32.1304 41.1415 30.382 41.7391 28.6929 42.48V42.4533ZM41.2262 41.9733C41.2262 41.9733 40.7462 42.56 37.6796 41.2266C41.0129 41.0133 41.5729 41.7866 41.2262 42V41.9733Z" fill="#F91D0A" fill-opacity="0.7"/>
                                </svg>
                            </div>
                            <div class="w-100">
                                <div class="d-flex">
                                    <svg class="icon-24" width="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M15.7161 16.2234H8.49609" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M15.7161 12.0369H8.49609" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M11.2521 7.86011H8.49707" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M15.909 2.74976C15.909 2.74976 8.23198 2.75376 8.21998 2.75376C5.45998 2.77076 3.75098 4.58676 3.75098 7.35676V16.5528C3.75098 19.3368 5.47298 21.1598 8.25698 21.1598C8.25698 21.1598 15.933 21.1568 15.946 21.1568C18.706 21.1398 20.416 19.3228 20.416 16.5528V7.35676C20.416 4.57276 18.693 2.74976 15.909 2.74976Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                    <span class="ms-2">Doc-3148.pdf</span>
                                </div>
                                <div class="d-flex justify-content-between align-items-center mt-2">
                                    <span class="text-primary">2 mb</span>
                                    <svg  class="icon-24" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <path d="M12.1222 15.4361L12.1222 3.39508" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M15.0382 12.5084L12.1222 15.4364L9.20621 12.5084" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M16.755 8.12799H17.688C19.723 8.12799 21.372 9.77699 21.372 11.813V16.697C21.372 18.727 19.727 20.372 17.697 20.372L6.55701 20.372C4.52201 20.372 2.87201 18.722 2.87201 16.687V11.802C2.87201 9.77299 4.51801 8.12799 6.54701 8.12799L7.48901 8.12799" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                    <div class="bg-soft-secondary rounded mb-4">
                        <div class="d-flex align-items-center p-4">
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="64" viewBox="0 0 64 64" fill="none">
                                    <path d="M49.4133 24L34.6667 9.25334C34.292 8.87816 33.7836 8.66714 33.2533 8.66667H21.3333C19.3884 8.66667 17.5231 9.43929 16.1479 10.8146C14.7726 12.1898 14 14.0551 14 16V48C14 49.9449 14.7726 51.8102 16.1479 53.1854C17.5231 54.5607 19.3884 55.3333 21.3333 55.3333H42.6667C44.6116 55.3333 46.4768 54.5607 47.8521 53.1854C49.2274 51.8102 50 49.9449 50 48V25.3333C49.979 24.8309 49.7695 24.3549 49.4133 24ZM35.3333 14.005L44.6617 23.3333H35.3333V14.005ZM42.6667 52.8217H21.3333C20.4493 52.8217 18.4856 51.2297 17.8605 50.6046C17.2353 49.9795 16.5116 48.884 16.5116 48V16C16.5116 15.1159 17.2353 13.2763 17.8605 12.6511C18.4856 12.026 20.4493 11.1783 21.3333 11.1783H32.8217V23.845C32.8286 24.3732 33.1148 24.9287 33.4884 25.3023C33.862 25.6759 34.2934 25.8381 34.8217 25.845H47.4884V48C47.4884 48.884 46.7647 50.7237 46.1395 51.3488C45.5144 51.9739 43.5507 52.8217 42.6667 52.8217Z" fill="white"/>
                                    <path d="M35.9729 39.6C34.3332 38.571 33.0992 37.0073 32.4796 35.1733C33.0537 33.4576 33.2271 31.6331 32.9862 29.84C32.9093 29.3882 32.689 28.9733 32.3579 28.6565C32.0268 28.3397 31.6025 28.138 31.1478 28.0811C30.6931 28.0243 30.2321 28.1154 29.8332 28.3409C29.4343 28.5664 29.1186 28.9144 28.9329 29.3333C28.6293 31.4891 28.8582 33.6864 29.5996 35.7333C28.5868 38.0993 27.4565 40.4133 26.2129 42.6666C24.3196 43.7333 21.7329 45.3333 21.3329 47.1733C21.0129 48.6666 23.8129 52.5066 28.5862 44.1866C30.7087 43.3987 32.8827 42.7572 35.0929 42.2666C36.7267 43.2008 38.5492 43.7566 40.4262 43.8933C40.8572 43.9045 41.2819 43.788 41.6469 43.5585C42.0119 43.329 42.3009 42.9968 42.4775 42.6035C42.6542 42.2102 42.7107 41.7735 42.6399 41.3483C42.5691 40.923 42.3742 40.5281 42.0796 40.2133C40.9596 39.0666 37.6262 39.3866 35.9729 39.6ZM23.2262 47.6C23.9735 46.3211 24.9605 45.1984 26.1329 44.2933C24.3196 47.1733 23.2262 47.68 23.2262 47.6266V47.6ZM31.0129 29.44C31.7062 29.44 31.6529 32.5066 31.1729 33.3333C30.8113 32.0757 30.7565 30.7498 31.0129 29.4666V29.44ZM28.6929 42.4533C29.5964 40.8049 30.3806 39.0938 31.0396 37.3333C31.746 38.6479 32.7285 39.7941 33.9196 40.6933C32.1304 41.1415 30.382 41.7391 28.6929 42.48V42.4533ZM41.2262 41.9733C41.2262 41.9733 40.7462 42.56 37.6796 41.2266C41.0129 41.0133 41.5729 41.7866 41.2262 42V41.9733Z" fill="#F91D0A" fill-opacity="0.7"/>
                                </svg>
                            </div>
                            <div class="w-100">
                                <div class="d-flex">
                                    <svg class="icon-24" width="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M15.7161 16.2234H8.49609" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M15.7161 12.0369H8.49609" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M11.2521 7.86011H8.49707" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M15.909 2.74976C15.909 2.74976 8.23198 2.75376 8.21998 2.75376C5.45998 2.77076 3.75098 4.58676 3.75098 7.35676V16.5528C3.75098 19.3368 5.47298 21.1598 8.25698 21.1598C8.25698 21.1598 15.933 21.1568 15.946 21.1568C18.706 21.1398 20.416 19.3228 20.416 16.5528V7.35676C20.416 4.57276 18.693 2.74976 15.909 2.74976Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                    <span class="ms-2">Doc-1234.pdf</span>
                                </div>
                                <div class="d-flex justify-content-between align-items-center mt-2">
                                    <span class="text-primary">2 mb</span>
                                    <svg  class="icon-24" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <path d="M12.1222 15.4361L12.1222 3.39508" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M15.0382 12.5084L12.1222 15.4364L9.20621 12.5084" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M16.755 8.12799H17.688C19.723 8.12799 21.372 9.77699 21.372 11.813V16.697C21.372 18.727 19.727 20.372 17.697 20.372L6.55701 20.372C4.52201 20.372 2.87201 18.722 2.87201 16.687V11.802C2.87201 9.77299 4.51801 8.12799 6.54701 8.12799L7.48901 8.12799" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                    <div class="bg-soft-secondary rounded mb-4">
                        <div class="d-flex align-items-center p-4">
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="64" viewBox="0 0 64 64" fill="none">
                                    <path d="M49.4133 24L34.6667 9.25334C34.292 8.87816 33.7836 8.66714 33.2533 8.66667H21.3333C19.3884 8.66667 17.5231 9.43929 16.1479 10.8146C14.7726 12.1898 14 14.0551 14 16V48C14 49.9449 14.7726 51.8102 16.1479 53.1854C17.5231 54.5607 19.3884 55.3333 21.3333 55.3333H42.6667C44.6116 55.3333 46.4768 54.5607 47.8521 53.1854C49.2274 51.8102 50 49.9449 50 48V25.3333C49.979 24.8309 49.7695 24.3549 49.4133 24ZM35.3333 14.005L44.6617 23.3333H35.3333V14.005ZM42.6667 52.8217H21.3333C20.4493 52.8217 18.4856 51.2297 17.8605 50.6046C17.2353 49.9795 16.5116 48.884 16.5116 48V16C16.5116 15.1159 17.2353 13.2763 17.8605 12.6511C18.4856 12.026 20.4493 11.1783 21.3333 11.1783H32.8217V23.845C32.8286 24.3732 33.1148 24.9287 33.4884 25.3023C33.862 25.6759 34.2934 25.8381 34.8217 25.845H47.4884V48C47.4884 48.884 46.7647 50.7237 46.1395 51.3488C45.5144 51.9739 43.5507 52.8217 42.6667 52.8217Z" fill="white"/>
                                    <path d="M35.9729 39.6C34.3332 38.571 33.0992 37.0073 32.4796 35.1733C33.0537 33.4576 33.2271 31.6331 32.9862 29.84C32.9093 29.3882 32.689 28.9733 32.3579 28.6565C32.0268 28.3397 31.6025 28.138 31.1478 28.0811C30.6931 28.0243 30.2321 28.1154 29.8332 28.3409C29.4343 28.5664 29.1186 28.9144 28.9329 29.3333C28.6293 31.4891 28.8582 33.6864 29.5996 35.7333C28.5868 38.0993 27.4565 40.4133 26.2129 42.6666C24.3196 43.7333 21.7329 45.3333 21.3329 47.1733C21.0129 48.6666 23.8129 52.5066 28.5862 44.1866C30.7087 43.3987 32.8827 42.7572 35.0929 42.2666C36.7267 43.2008 38.5492 43.7566 40.4262 43.8933C40.8572 43.9045 41.2819 43.788 41.6469 43.5585C42.0119 43.329 42.3009 42.9968 42.4775 42.6035C42.6542 42.2102 42.7107 41.7735 42.6399 41.3483C42.5691 40.923 42.3742 40.5281 42.0796 40.2133C40.9596 39.0666 37.6262 39.3866 35.9729 39.6ZM23.2262 47.6C23.9735 46.3211 24.9605 45.1984 26.1329 44.2933C24.3196 47.1733 23.2262 47.68 23.2262 47.6266V47.6ZM31.0129 29.44C31.7062 29.44 31.6529 32.5066 31.1729 33.3333C30.8113 32.0757 30.7565 30.7498 31.0129 29.4666V29.44ZM28.6929 42.4533C29.5964 40.8049 30.3806 39.0938 31.0396 37.3333C31.746 38.6479 32.7285 39.7941 33.9196 40.6933C32.1304 41.1415 30.382 41.7391 28.6929 42.48V42.4533ZM41.2262 41.9733C41.2262 41.9733 40.7462 42.56 37.6796 41.2266C41.0129 41.0133 41.5729 41.7866 41.2262 42V41.9733Z" fill="#F91D0A" fill-opacity="0.7"/>
                                </svg>
                            </div>
                            <div class="w-100">
                                <div class="d-flex">
                                    <svg class="icon-24" width="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M15.7161 16.2234H8.49609" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M15.7161 12.0369H8.49609" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M11.2521 7.86011H8.49707" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M15.909 2.74976C15.909 2.74976 8.23198 2.75376 8.21998 2.75376C5.45998 2.77076 3.75098 4.58676 3.75098 7.35676V16.5528C3.75098 19.3368 5.47298 21.1598 8.25698 21.1598C8.25698 21.1598 15.933 21.1568 15.946 21.1568C18.706 21.1398 20.416 19.3228 20.416 16.5528V7.35676C20.416 4.57276 18.693 2.74976 15.909 2.74976Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                    <span class="ms-2">Doc-3241.pdf</span>
                                </div>
                                <div class="d-flex justify-content-between align-items-center mt-2">
                                    <span class="text-primary">2 mb</span>
                                    <svg  class="icon-24" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <path d="M12.1222 15.4361L12.1222 3.39508" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M15.0382 12.5084L12.1222 15.4364L9.20621 12.5084" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M16.755 8.12799H17.688C19.723 8.12799 21.372 9.77699 21.372 11.813V16.697C21.372 18.727 19.727 20.372 17.697 20.372L6.55701 20.372C4.52201 20.372 2.87201 18.722 2.87201 16.687V11.802C2.87201 9.77299 4.51801 8.12799 6.54701 8.12799L7.48901 8.12799" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 mb-4">
                    <img class="img-fluid w-100 rounded-1" src="{{asset('modules/mail/images/01.png')}}" alt="email-img" loading="lazy">
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 mb-4">
                    <img class="img-fluid w-100 rounded-1" src="{{asset('modules/mail/images/02.png')}}" alt="email-img" loading="lazy">
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 mb-4">
                    <img class="img-fluid w-100 rounded-1" src="{{asset('modules/mail/images/03.png')}}" alt="email-img" loading="lazy">
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                    <img class="img-fluid w-100 rounded-1" src="{{asset('modules/mail/images/01.png')}}" alt="email-img" loading="lazy">
                </div>
            </div>
            <div class="mt-3 mt-sm-0">
                <button type="button" class="btn btn-primary btn-md me-2">
                    <svg  class="icon-24" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path d="M9.35028 4.34498L2.14451 11.6129C2.06531 11.6927 2.06754 11.8222 2.14945 11.8993L9.35522 18.6827C9.48285 18.8028 9.69231 18.7123 9.69231 18.537V14.3448H13.7949C17.795 14.3448 21.2577 18.3928 22.229 19.6392C22.2948 19.7236 22.433 19.6659 22.4101 19.5613C21.9529 17.4746 19.6729 8.65517 13.7949 8.65517H9.69231V4.48579C9.69231 4.30719 9.47602 4.21815 9.35028 4.34498Z" stroke="white"/>
                    </svg>
                    Reply
                </button>
                <button type="button" class="btn btn-primary btn-md">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                        <path d="M13.8325 6.17463L8.10904 11.9592L1.59944 7.88767C0.66675 7.30414 0.860765 5.88744 1.91572 5.57893L17.3712 1.05277C18.3373 0.769629 19.2326 1.67283 18.9456 2.642L14.3731 18.0868C14.0598 19.1432 12.6512 19.332 12.0732 18.3953L8.10601 11.9602" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    Forward
                </button>
            </div>
        </div>
    </div>
</div>
