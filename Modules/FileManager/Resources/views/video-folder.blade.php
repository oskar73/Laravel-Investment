<x-app-layout layout="filemanager" :assets="$assets ?? []" title="Video " isFslightbox="true" isUppy="true">
    <div class="border-bottom pb-3 d-flex align-items-center justify-content-between">
        <h5>Videos</h5>
        <button class="btn btn-primary " data-bs-toggle="modal" data-bs-target="#exampleModal"  type="submit">
            <span class="d-flex justify-content-center">
                <svg class="icon-22" width="22" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path opacity="0.4" d="M21.3309 7.44251C20.9119 7.17855 20.3969 7.1552 19.9579 7.37855L18.4759 8.12677C17.9279 8.40291 17.5879 8.96129 17.5879 9.58261V15.4161C17.5879 16.0374 17.9279 16.5948 18.4759 16.873L19.9569 17.6202C20.1579 17.7237 20.3729 17.7735 20.5879 17.7735C20.8459 17.7735 21.1019 17.7004 21.3309 17.5572C21.7499 17.2943 21.9999 16.8384 21.9999 16.339V8.66179C21.9999 8.1623 21.7499 7.70646 21.3309 7.44251Z" fill="currentColor"></path>
                    <path d="M11.9051 20H6.11304C3.69102 20 2 18.3299 2 15.9391V9.06091C2 6.66904 3.69102 5 6.11304 5H11.9051C14.3271 5 16.0181 6.66904 16.0181 9.06091V15.9391C16.0181 18.3299 14.3271 20 11.9051 20Z" fill="currentColor"></path>
                </svg>
                <span class="ms-3 mb-0"> Add Video</span>
            </span>
        </button>
    </div>

    <h4 class="py-3 mb-0">{{__('filemanager.recently_viewed')}}</h4>
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4">
        <div class="col">
            <x-modules.filemanager.video imageDate="Dec 13, 2020" imgName="1234725783.mp4" imgLink="just now" imgChange="8.png"/>
        </div>
        <div class="col">
            <x-modules.filemanager.video imageDate="Dec 13, 2020" imgName="25783.mkv" imgLink="2 day ago" imgChange="7.png"/>
        </div>
        <div class="col">
            <x-modules.filemanager.video imageDate="Dec 13, 2020" imgName="25783.mkv" imgLink="a month ago" imgChange="2.png"/>
        </div>
        <div class="col">
            <x-modules.filemanager.video imageDate="Dec 13, 2020" imgName="49895383.jpg" imgLink="a month ago" imgChange="1.png"/>
        </div>
        <div class="col">
            <x-modules.filemanager.video imageDate="Dec 13, 2020" imgName="25767483.mkv" imgLink="just now" imgChange="6.png"/>
        </div>
        <div class="col">
            <x-modules.filemanager.video imageDate="Dec 13, 2020" imgName="123472578.mp4" imgLink="2 day ago" imgChange="5.png"/>
        </div>
        <div class="col">
            <x-modules.filemanager.video imageDate="Dec 13, 2020" imgName="2598783.mkv" imgLink="a month ago" imgChange="4.png"/>
        </div>
        <div class="col">
            <x-modules.filemanager.video imageDate="Dec 13, 2020" imgName="Video-25783.mkv" imgLink="2 day ago" imgChange="8.png"/>
        </div>
    </div>
    <h3 class="my-3">{{__('filemanager.videos')}}</h3>
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4">
        <div class="col">
            <x-modules.filemanager.video imageDate="Dec 13, 2020" imgName="1234725783.mp4" imgLink="just now" imgChange="5.png"/>
        </div>
        <div class="col">
            <x-modules.filemanager.video imageDate="Dec 13, 2020" imgName="25783.mkv" imgLink="2 day ago" imgChange="6.png"/>
        </div>
        <div class="col">
            <x-modules.filemanager.video imageDate="Dec 13, 2020" imgName="25783.mkv" imgLink="a month ago" imgChange="7.png"/>
        </div>
        <div class="col">
            <x-modules.filemanager.video imageDate="Dec 13, 2020" imgName="25783.mkv" imgLink="2 day ago" imgChange="8.png"/>
        </div>
        <div class="col">
            <x-modules.filemanager.video imageDate="Dec 13, 2020" imgName="1234725783.mp4" imgLink="just now" imgChange="1.png"/>
        </div>
        <div class="col">
            <x-modules.filemanager.video imageDate="Dec 13, 2020" imgName="25783.mkv" imgLink="2 day ago" imgChange="2.png"/>
        </div>
        <div class="col">
            <x-modules.filemanager.video imageDate="Dec 13, 2020" imgName="25783.mkv" imgLink="a month ago" imgChange="8.png"/>
        </div>
        <div class="col">
            <x-modules.filemanager.video imageDate="Dec 13, 2020" imgName="25783.mkv" imgLink="2 day ago" imgChange="4.png"/>
        </div>
    </div>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body text-center">
                                <div id="drag-drop-area">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
