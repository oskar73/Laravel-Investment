<x-app-layout :assets="$assets ?? []" title='Tree View' :isBanner="true" isTreeView="True">


    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex flex-wrap align-items-center justify-content-between">
                        <div class="d-flex flex-wrap align-items-center">
                            <div class="d-flex flex-wrap align-items-center mb-3 mb-sm-0">
                                <h4 class="me-2 h4">Tree-View</h4>
                            </div>
                        </div>
                        <small>For more Information regarding jsTree Plugin refer
                            <a href="https://www.jstree.com/">Documentation</a>
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
                        <h4>Simple Treeview</h4>
                    </div>
                </div>
                <div class="card-body text-black">
                    <div id="frmt" class="demo" data-jstree='{"icon":"glyphicon glyphicon-leaf"}'></div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <div class="header-title">
                        <h4>Checkbox Treeview</h4>
                    </div>
                </div>
                <div class="card-body text-black">
                    <div id="frmtx" class="demo"></div>
                </div>
            </div>
        </div>
    </div>


</x-app-layout>
