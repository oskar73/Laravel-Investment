
<x-app-layout :assets="$assets ?? []" :isBanner="true" title="Quill" isQuillEditor="true">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex flex-wrap align-items-center justify-content-between">
                        <div class="d-flex flex-wrap align-items-center">
                            <div class="d-flex flex-wrap align-items-center mb-3 mb-sm-0">
                                <h4 class="me-2 h4">Quill</h4>
                            </div>
                        </div>
                        <small>For more Information regarding quill Plugin refer
                            <a href="https://quilljs.com/">Documentation</a>
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
                        <p>Quill allows several ways to customize it to suit your needs. This section is dedicated to tweaking existing functionality.</p>
                    </div>
                </div>
                <div class="card-body">
                    <div id="editor" style="height:200px"></div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
