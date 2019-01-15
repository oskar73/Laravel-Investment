<x-app-layout :assets="$assets ?? []" title='Uppy' :isBanner="true" isUppy="true">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex flex-wrap align-items-center justify-content-between">
                        <div class="d-flex flex-wrap align-items-center">
                            <div class="d-flex flex-wrap align-items-center mb-3 mb-sm-0">
                              <h4 class="me-2 h4">Uppy</h4>
                            </div>
                        </div>
                        <small>For more Information regarding Uppy Plugin refer
                            <a href="https://uppy.io/">Documentation</a>
                        </small>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <div class="header-title">
                        <h4 class="card-title">Introduction</h4>
                        <p>Uppy is a sleek and modular file uploader. It fetches files from local disk, Google Drive, Instagram, remote urls, cameras etc, and then uploads them to the final destination. It’s fast, has a comprehensible API and lets you worry about more important problems than building a file uploader.</p>
                    </div>
                </div>
                <div class="card-body text-center">
                    <div id="drag-drop-area">
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
