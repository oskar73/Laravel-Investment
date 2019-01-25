<x-app-layout :assets="$assets ?? []" title='Sweet Alert' :isBanner="true" isSweetalert="true">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex flex-wrap align-items-center justify-content-between">
                        <div class="d-flex flex-wrap align-items-center">
                            <div class="d-flex flex-wrap align-items-center mb-3 mb-sm-0">
                                <h4 class="me-2 h4">Sweet Alert</h4>
                            </div>
                        </div>
                        <small>For more Information regarding Sweet Alert Plugin refer
                            <a href="https://sweetalert2.github.io/">Documentation</a>
                        </small>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <div class="header-title">
                        <h4 class="card-title">A Basic Message</h4>
                        <p>A short communication sent from one person to another or the central theme or idea of a
                            communication.</p>
                    </div>
                </div>
                <div class="card-body text-center">
                    <button id="sweetalert-basic" class="btn btn-primary ">Try Me</button>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <div class="header-title">
                        <h4 class="card-title">Title with a Text</h4>
                        <p>Image title text is an attribute used to provide additional information about the image as well
                            as displayed as a tooltip. </p>
                    </div>
                </div>
                <div class="card-body text-center">
                    <button id="sweetalert-title" class="btn btn-primary ">Try Me</button>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <div class="header-title">
                        <h4 class="card-title">A modal with a title and a footer</h4>
                        <p>Modal-header class is used to define the style for the header of the modal and footer define the
                            style for the footer of the modal.</p>
                    </div>
                </div>
                <div class="card-body text-center">
                    <button id="sweetalert-modeltitle" class="btn btn-primary ">Try Me</button>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <div class="header-title">
                        <h4 class="card-title">Custom positioned dialog</h4>
                        <p>It set using the position property by providing custom X and Y coordinates also positioned inside
                            the target.</p>
                    </div>
                </div>
                <div class="card-body text-center">
                    <button id="sweetalert-customposition" class="btn btn-primary ">Try Me</button>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <div class="header-title">
                        <h4 class="card-title">A confirm dialog</h4>
                        <p>Confirm dialog with a function attached to the "Confirm"-button and specified message, along with
                            an OK and a Cancel button.</p>
                    </div>
                </div>
                <div class="card-body text-center">
                    <button id="sweetalert-customdialog" class="btn btn-primary ">Try Me</button>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <div class="header-title">
                        <h4 class="card-title">Message with a custom image</h4>
                        <p>Custom images do not include the data from any attached block volumes. For information about
                            backing up volumes.</p>
                    </div>
                </div>
                <div class="card-body text-center">
                    <button id="sweetalert-customimage" class="btn btn-primary ">Try Me</button>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <div class="header-title">
                        <h4 class="card-title">Message with custom</h4>
                        <p>A message with custom width, padding, background and animated Nyan Cat.</p>
                    </div>
                </div>
                <div class="card-body text-center">
                    <button id="sweetalert-widthpadding" class="btn btn-primary ">Try Me</button>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <div class="header-title">
                        <h4 class="card-title">ARIA labels</h4>
                        <p>ARIA labels to create accessible element descriptions. ... if a button has both text content and
                            an aria-label.</p>
                    </div>
                </div>
                <div class="card-body text-center">
                    <button id="sweetalert-Htmldescription" class="btn btn-primary ">Try Me</button>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <div class="header-title">
                        <h4 class="card-title">A dialog with three buttons</h4>
                        <p>There are three functions for adding Buttons to Android Dialog, setPositiveButton(int textId,
                            DialogInterface).</p>
                    </div>
                </div>
                <div class="card-body text-center">
                    <button id="sweetalert-dialog" class="btn btn-primary ">Try Me</button>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <div class="header-title">
                        <h4 class="card-title">AJAX request example</h4>
                        <p>The ajax() method in jQuery is used to perform an AJAX request or asynchronous HTTP request.</p>
                    </div>
                </div>
                <div class="card-body text-center">
                    <button id="sweetalert-ajaxreq" class="btn btn-primary ">Try Me</button>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
