<x-app-layout layout="e-commerce" :assets="$assets ?? []" title='Vendor Dashboard' isDataTable='true'>
    <x-modules.e-commerce.widgets.subheader />
    <div class="row">
        <div class="col-lg-8 col-md-12">
            <div class="row">
                <div class="col-lg-6 col-xl-3 col-md-6">
                    <div class="card bg-primary">
                        <div id="admin-chart-06" class="admin-chart-06"></div>
                        <div class="card-body">
                            <p class="text-white">{{ __('e-commerce.tot_orders') }}</p>
                            <h4 class="text-white counter mb-0">$9,300</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-3 col-md-6">
                    <div class="card bg-info">
                        <div id="admin-chart-07" class="admin-chart-07"></div>
                        <div class="card-body">
                            <p class="text-white">{{ __('e-commerce.transit') }}</p>
                            <h4 class="text-white counter mb-0">$1,599</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-3 col-md-6">
                    <div class="card bg-primary">
                        <div id="admin-chart-08" class="admin-chart-08"></div>
                        <div class="card-body">
                            <p class="text-white">{{ __('e-commerce.ret_orders') }}</p>
                            <h4 class="text-white counter mb-0">$1,120</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-3 col-md-6">
                    <div class="card bg-info">
                        <div id="admin-chart-09" class="admin-chart-09"></div>
                        <div class="card-body">
                            <p class="text-white">{{ __('e-commerce.pend_orders') }}</p>
                            <h4 class="text-white counter mb-0">$2,921</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <div class="d-flex align-items-center justify-content-between flex-wrap">
                        <h4 class="mb-0">{{ __('e-commerce.tot_purch') }}</h4>
                        <div class="d-flex align-items-center">
                            <div class="dropdown">
                                <a href="#" class="text-gray dropdown-toggle" id="dropdownMenuButton22"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    {{ __('e-commerce.month') }}
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton22">
                                    <li><a class="dropdown-item" href="#">{{ __('e-commerce.year') }}</a></li>
                                    <li><a class="dropdown-item" href="#">{{ __('e-commerce.month') }}</a></li>
                                    <li><a class="dropdown-item" href="#">{{ __('e-commerce.week') }}</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div id="admin-chart-05" class="admin-chart-05"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="overflow-hidden card">
                        <div class="card-header">
                            <div class="header-title">
                                <h4 class="card-title">{{ __('e-commerce.top_prod') }}</h4>
                            </div>

                        </div>
                        <div class="px-0 card-body">
                            <div class="table-responsive">
                                <table class="table table-sm table-striped py-3" role="grid"
                                    data-table="eCommerce-admin">
                                    <thead>
                                        <tr class="">
                                            <th style="width: 10%">{{ __('e-commerce.rank') }}</th>
                                            <th>{{ __('e-commerce.prod') }}</th>
                                            <th>{{ __('e-commerce.seller') }}</th>
                                            <th>{{ __('e-commerce.sales') }}</th>
                                            <th>{{ __('e-commerce.rev') }}</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <strong>#148</strong>
                                            </td>
                                            <td>
                                                <h6>Winter Suit & Jacket</h6>
                                                <p class="mb-0">Cloths</p>
                                            </td>
                                            <td>
                                                FLK
                                            </td>
                                            <td>
                                                1548
                                            </td>
                                            <td>
                                                <strong>$14,437</strong>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>#179</strong>
                                            </td>
                                            <td>
                                                <h6>Lofer</h6>
                                                <p class="mb-0">Shoes</p>
                                            </td>

                                            <td>
                                                EBY
                                            </td>
                                            <td>
                                                752
                                            </td>
                                            <td>
                                                <strong>$8,015</strong>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>#118</strong>
                                            </td>
                                            <td>
                                                <h6>Danim Jeans</h6>
                                                <p class="mb-0">Pants</p>
                                            </td>
                                            <td>
                                                EMZ
                                            </td>
                                            <td>
                                                875
                                            </td>
                                            <td>
                                                <strong>$13,989</strong>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>#101</strong>
                                            </td>
                                            <td>
                                                <h6>Riban Sun Glasses</h6>
                                                <p class="mb-0">Glasses</p>
                                            </td>
                                            <td>
                                                GOL
                                            </td>
                                            <td>
                                                4,863
                                            </td>
                                            <td>
                                                <strong>$25,916</strong>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th title="Rank"></th>
                                            <th title="Product"></th>
                                            <th title="Seller"></th>
                                            <th title="Sales"></th>
                                            <th title="Revenue"></th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-12">
            <div class="row">
                <div class="col-lg-12 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="card credit-card-widget">
                                <div class="pb-4 border-0 card-header">
                                    <div class="p-4 border border-white rounded primary-gradient-card">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div>
                                                <h5 class="font-weight-bold">{{ __('e-commerce.visa') }}</h5>
                                                <P class="mb-0">{{ __('e-commerce.pre_acc') }}</P>
                                            </div>
                                            <div class="master-card-content">
                                                <svg class="master-card-1" width="60" height="60"
                                                    viewBox="0 0 24 24">
                                                    <path fill="#ffffff"
                                                        d="M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z" />
                                                </svg>
                                                <svg class="master-card-2" width="60" height="60"
                                                    viewBox="0 0 24 24">
                                                    <path fill="#ffffff"
                                                        d="M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z" />
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="my-4">
                                            <div class="card-number">
                                                <span class="fs-5 me-2">5789</span>
                                                <span class="fs-5 me-2">****</span>
                                                <span class="fs-5 me-2">****</span>
                                                <span class="fs-5">2847</span>
                                            </div>
                                        </div>
                                        <div class="mb-2 d-flex align-items-center justify-content-between">
                                            <p class="mb-0">{{ __('e-commerce.card_hold') }}</p>
                                            <p class="mb-0">{{ __('e-commerce.expire_date') }}</p>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between">
                                            <h6>Mike Smith</h6>
                                            <h6 class="ms-5">06/11</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center">
                                <a href="#"
                                    class="btn btn-primary-subtle border-primary border border-1 border-dashed"
                                    data-bs-toggle="modal" data-bs-target="#add-card-modal">Add Your Card</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <div class="header-title">
                                <h4 class="card-title">{{ __('e-commerce.categories') }}</h4>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="flex-wrap d-flex align-items-center justify-content-between">
                                <div id="admin-chart-04" class="col-md-7 col-lg-7"></div>
                                <div class="d-grid gap col-md-5 col-lg-5">
                                    <div class="d-flex align-items-start">
                                        <svg class="mt-2 text-primary" xmlns="http://www.w3.org/2000/svg"
                                            width="14" viewBox="0 0 24 24" fill="currentColor">
                                            <g>
                                                <circle cx="12" cy="12" r="8" fill="currentColor">
                                                </circle>
                                            </g>
                                        </svg>
                                        <div class="ms-2">
                                            <span class="mb-3">{{ __('e-commerce.electronic') }}</span>
                                            <h6 class="mb-0">44%</h6>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-start">
                                        <svg class="mt-2 text-info" xmlns="http://www.w3.org/2000/svg" width="14"
                                            viewBox="0 0 24 24" fill="currentColor">
                                            <g>
                                                <circle cx="12" cy="12" r="8" fill="currentColor">
                                                </circle>
                                            </g>
                                        </svg>
                                        <div class="ms-2">
                                            <span class="mb-3">{{ __('e-commerce.accessories') }}</span>
                                            <h6 class="mb-0">55%</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <div class="d-flex align-items-center">
                        <h4 class="mb-0 me-2">{{ __('e-commerce.tracking_id') }}</h4>
                        <h5 class="text-success mb-0">#4676658956</h5>
                    </div>
                    <svg class="icon-20 text-primary" width="20" id="dropdownMenuLink1" role="button" data-bs-toggle="dropdown" aria-expanded="false" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M19 8.5L12 15.5L5 8.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                     </svg>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink1">
                        <li><a class="dropdown-item" href="#">{{ __('e-commerce.delivery') }}</a></li>
                        <li><a class="dropdown-item" href="#">{{ __('e-commerce.shipping') }}</a></li>
                        <li><a class="dropdown-item" href="#">{{ __('e-commerce.pack_arr') }}</a></li>
                    </ul>
                </div>
                <div class="card-body">
                    <div class="text-center pb-3">
                        <small>{{ __('e-commerce.tue') }} 25 {{ __('e-commerce.nov') }}</small>
                    </div>
                    <div class="d-flex align-items-center mb-3">
                        <h6 class="mb-0 iq-tracking small">2:09 PM</h6>
                        <div class="border-start ps-3 ms-3">
                            <h6>{{ __('e-commerce.out_for_del') }}</h6>
                            <small>{{ __('e-commerce.thane') }}</small>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-3">
                        <h6 class="mb-0 iq-tracking small">6:01 AM</h6>
                        <div class="border-start ps-3 ms-3">
                            <h6>{{ __('e-commerce.pack_arr') }}</h6>
                            <small>{{ __('e-commerce.maha') }}</small>
                        </div>
                    </div>
                    <div class="text-center pb-3">
                        <small>{{ __('e-commerce.mon') }} 24 {{ __('e-commerce.nov') }}</small>
                    </div>
                    <div class="d-flex align-items-center mb-3">
                        <h6 class="mb-0 iq-tracking small">12:36 PM</h6>
                        <div class="border-start ps-3 ms-3">
                            <h6>{{ __('e-commerce.pack_arr') }}</h6>
                            <small>{{ __('e-commerce.kar') }}</small>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-3">
                        <h6 class="mb-0 iq-tracking small">11:51 AM</h6>
                        <div class="border-start ps-3 ms-3">
                            <h6>11:51 AM</h6>
                            <small>{{ __('e-commerce.kar') }}</small>
                        </div>
                    </div>
                    <div class="d-flex align-items-center">
                        <h6 class="mb-0 iq-tracking small">6:01 AM</h6>
                        <div class="border-start ps-3 ms-3">
                            <h6>{{ __('e-commerce.pack_arr') }}</h6>
                            <small>{{ __('e-commerce.maha') }}</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <x-modules.e-commerce.widgets.add-card-modal />
</x-app-layout>
