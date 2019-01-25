@props(['imgChange','imageDate','imgName','imgLink','dropdot'])
<div class="card iq-file-manager">
    <div class="card-body card-thumbnail">
        <a data-fslightbox="gallery" href="{{asset('modules/file-manager/images')}}/{{$imgChange}}">
            <img src="{{asset('modules/file-manager/images')}}/{{$imgChange}}" class="img-fluid" alt="">
        </a>
        <div class="mt-2">
            <p class="small mb-2">Created on {{$imageDate}}</p>
            <div class="d-flex align-items-center mb-2 text-primary gap-2">
                <svg class="icon-24" width="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path opacity="0.4" d="M16.3328 22H7.66618C4.2769 22 2 19.6229 2 16.0843V7.91672C2 4.37811 4.2769 2 7.66618 2H16.3338C19.7231 2 22 4.37811 22 7.91672V16.0843C22 19.6229 19.7231 22 16.3328 22Z" fill="currentColor"></path>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M11.2451 8.67496C11.2451 10.045 10.1301 11.16 8.7601 11.16C7.3891 11.16 6.2751 10.045 6.2751 8.67496C6.2751 7.30496 7.3891 6.18896 8.7601 6.18896C10.1301 6.18896 11.2451 7.30496 11.2451 8.67496ZM19.4005 14.0876C19.6335 14.3136 19.8005 14.5716 19.9105 14.8466C20.2435 15.6786 20.0705 16.6786 19.7145 17.5026C19.2925 18.4836 18.4845 19.2246 17.4665 19.5486C17.0145 19.6936 16.5405 19.7556 16.0675 19.7556H7.6865C6.8525 19.7556 6.1145 19.5616 5.5095 19.1976C5.1305 18.9696 5.0635 18.4446 5.3445 18.1026C5.8145 17.5326 6.2785 16.9606 6.7465 16.3836C7.6385 15.2796 8.2395 14.9596 8.9075 15.2406C9.1785 15.3566 9.4505 15.5316 9.7305 15.7156C10.4765 16.2096 11.5135 16.8876 12.8795 16.1516C13.8132 15.641 14.3552 14.7673 14.827 14.0069L14.8365 13.9916C14.8682 13.9407 14.8997 13.8898 14.9311 13.8391C15.0915 13.5799 15.2495 13.3246 15.4285 13.0896C15.6505 12.7986 16.4745 11.8886 17.5395 12.5366C18.2185 12.9446 18.7895 13.4966 19.4005 14.0876Z" fill="currentColor"></path>
                </svg>
                <p class="mb-0 text-dark">Gallery-{{$imgName}}.jpg</p>
            </div>
        </div>
        <div class="d-flex justify-content-between align-items-center">
            <small>You opened <a href="javascript:void(0)">{{$imgLink}}</a></small>
            @if($dropdot ?? '' == 'true')
            <div class="dropdown">
                <svg  height="20" viewBox="0 0 5 20" fill="none" xmlns="http://www.w3.org/2000/svg" role="button" id="product-view" data-bs-toggle="dropdown" aria-expanded="false">
                    <circle cx="2.5" cy="3" r="2.5" fill="currentcolor"/>
                    <circle cx="2.5" cy="10" r="2.5" fill="currentcolor"/>
                    <circle cx="2.5" cy="17" r="2.5" fill="currentcolor"/>
                    </svg>
                    <ul class="dropdown-menu" aria-labelledby="product-view">
                    <li><a class="dropdown-item delete-btn" href="#">Delete</a></li>
                    <li><a class="dropdown-item" href="#">Restore</a></li>
                    </ul>
                                </div>
                                @endif
    </div>
</div>
</div>
