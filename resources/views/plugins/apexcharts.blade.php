
<x-app-layout :assets="$assets ?? []" title='Apexcharts' :isBanner="true">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex flex-wrap align-items-center justify-content-between">
                        <div class="d-flex flex-wrap align-items-center">
                            <div class="d-flex flex-wrap align-items-center mb-3 mb-sm-0">
                              <h4 class="me-2 h4">Apexcharts</h4>
                            </div>
                        </div>
                        <small>For more Information regarding Apexcharts Plugin refer
                            <a href="https://apexcharts.com/">Documentation</a>
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
                      <h4> Bar Chart</h4>
                    </div>
                </div>
                <div class="card-body text-center">
                     <div id="bar_apexcharts"></div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <div class="header-title">
                        <h4>Line Chart</h4>
                    </div>
                </div>
                <div class="card-body text-center">
                    <div id="line_apexcharts"></div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <div class="header-title">
                        <h4>Timeline Chart</h4>
                    </div>
                </div>
                <div class="card-body text-center">
                    <div id="timeline_apexcharts"></div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <div class="header-title">
                     <h4>Pie Chart</h4>
                    </div>
                </div>
                <div class="card-body text-center">
                    <div id="pie_apexcharts"></div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <div class="header-title">
                        <h4> Scatter</h4>
                    </div>
                </div>
                <div class="card-body text-center">
                    <div id="Scatter_apexcharts"></div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <div class="header-title">
                        <h4>Radar Chart</h4>
                    </div>
                </div>
                <div class="card-body text-center">
                    <div id="radar_apexcharts"></div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <div class="header-title">
                        <h4> Polar Area Charts</h4>
                    </div>
                </div>
                <div class="card-body text-center">
                    <div id="Polar_apexcharts"></div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <div class="header-title">
                        <h4>Mixed</h4>
                    </div>
                </div>
                <div class="card-body text-center">
                    <div id="Mixed_apexcharts"></div>
                </div>
            </div>
        </div>
    </div>

@push('scripts')
<script src="{{asset('js/plugins/apexcharts.js')}}"></script>
@endpush
</x-app-layout>
