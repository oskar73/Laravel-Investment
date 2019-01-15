<x-app-layout layout="e-commerce" :assets="$assets ?? []" title='Admin Dashboard' isDataTable='true'>
    <x-modules.e-commerce.widgets.subheader />
    <div class="row">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex align-items-center justify-content-between">
                        <h4 class="card-title">{{ __('e-commerce.rev') }}</h4>
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
                    <div id="admin-chart-01" class="admin-chart-01"></div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="row">
                <div class="col-6">
                    <div class="card">
                        <div class="card-body text-center">
                            <div class="m-auto d-inline-block p-4 bg-primary-subtle rounded-pill">
                                <svg class="icon-44" width="44" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path opacity="0.4"
                                        d="M2 11.0786C2.05 13.4166 2.19 17.4156 2.21 17.8566C2.281 18.7996 2.642 19.7526 3.204 20.4246C3.986 21.3676 4.949 21.7886 6.292 21.7886C8.148 21.7986 10.194 21.7986 12.181 21.7986C14.176 21.7986 16.112 21.7986 17.747 21.7886C19.071 21.7886 20.064 21.3566 20.836 20.4246C21.398 19.7526 21.759 18.7896 21.81 17.8566C21.83 17.4856 21.93 13.1446 21.99 11.0786H2Z"
                                        fill="currentColor"></path>
                                    <path
                                        d="M11.2451 15.3843V16.6783C11.2451 17.0923 11.5811 17.4283 11.9951 17.4283C12.4091 17.4283 12.7451 17.0923 12.7451 16.6783V15.3843C12.7451 14.9703 12.4091 14.6343 11.9951 14.6343C11.5811 14.6343 11.2451 14.9703 11.2451 15.3843Z"
                                        fill="currentColor"></path>
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M10.211 14.5565C10.111 14.9195 9.762 15.1515 9.384 15.1015C6.833 14.7455 4.395 13.8405 2.337 12.4815C2.126 12.3435 2 12.1075 2 11.8555V8.38949C2 6.28949 3.712 4.58149 5.817 4.58149H7.784C7.972 3.12949 9.202 2.00049 10.704 2.00049H13.286C14.787 2.00049 16.018 3.12949 16.206 4.58149H18.183C20.282 4.58149 21.99 6.28949 21.99 8.38949V11.8555C21.99 12.1075 21.863 12.3425 21.654 12.4815C19.592 13.8465 17.144 14.7555 14.576 15.1105C14.541 15.1155 14.507 15.1175 14.473 15.1175C14.134 15.1175 13.831 14.8885 13.746 14.5525C13.544 13.7565 12.821 13.1995 11.99 13.1995C11.148 13.1995 10.433 13.7445 10.211 14.5565ZM13.286 3.50049H10.704C10.031 3.50049 9.469 3.96049 9.301 4.58149H14.688C14.52 3.96049 13.958 3.50049 13.286 3.50049Z"
                                        fill="currentColor"></path>
                                </svg>
                            </div>
                            <h4 class="mt-4 mb-2 counter">$5254</h4>
                            <p class="mb-0">{{ __('e-commerce.total_earn') }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="card">
                        <div class="card-body text-center">
                            <div class="m-auto d-inline-block p-4 bg-primary-subtle rounded-pill">
                                <svg class="icon-44" height="44" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M21.9964 8.37513H17.7618C15.7911 8.37859 14.1947 9.93514 14.1911 11.8566C14.1884 13.7823 15.7867 15.3458 17.7618 15.3484H22V15.6543C22 19.0136 19.9636 21 16.5173 21H7.48356C4.03644 21 2 19.0136 2 15.6543V8.33786C2 4.97862 4.03644 3 7.48356 3H16.5138C19.96 3 21.9964 4.97862 21.9964 8.33786V8.37513ZM6.73956 8.36733H12.3796H12.3831H12.3902C12.8124 8.36559 13.1538 8.03019 13.152 7.61765C13.1502 7.20598 12.8053 6.87318 12.3831 6.87491H6.73956C6.32 6.87664 5.97956 7.20858 5.97778 7.61852C5.976 8.03019 6.31733 8.36559 6.73956 8.36733Z"
                                        fill="currentColor"></path>
                                    <path opacity="0.4"
                                        d="M16.0374 12.2966C16.2465 13.2478 17.0805 13.917 18.0326 13.8996H21.2825C21.6787 13.8996 22 13.5715 22 13.166V10.6344C21.9991 10.2297 21.6787 9.90077 21.2825 9.8999H17.9561C16.8731 9.90338 15.9983 10.8024 16 11.9102C16 12.0398 16.0128 12.1695 16.0374 12.2966Z"
                                        fill="currentColor"></path>
                                    <circle cx="18" cy="11.8999" r="1" fill="currentColor"></circle>
                                </svg>
                            </div>
                            <h4 class="mt-4 mb-2 counter">$4955</h4>
                            <p class="mb-0">{{ __('e-commerce.month_earn') }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="card">
                        <div class="card-body text-center">
                            <div class="m-auto d-inline-block p-4 bg-primary-subtle rounded-pill">
                                <svg class="icon-44" width="44" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path opacity="0.4"
                                        d="M18.8088 9.021C18.3573 9.021 17.7592 9.011 17.0146 9.011C15.1987 9.011 13.7055 7.508 13.7055 5.675V2.459C13.7055 2.206 13.5026 2 13.253 2H7.96363C5.49517 2 3.5 4.026 3.5 6.509V17.284C3.5 19.889 5.59022 22 8.16958 22H16.0453C18.5058 22 20.5 19.987 20.5 17.502V9.471C20.5 9.217 20.298 9.012 20.0465 9.013C19.6247 9.016 19.1168 9.021 18.8088 9.021Z"
                                        fill="currentColor"></path>
                                    <path opacity="0.4"
                                        d="M16.0842 2.56737C15.7852 2.25637 15.2632 2.47037 15.2632 2.90137V5.53837C15.2632 6.64437 16.1742 7.55437 17.2792 7.55437C17.9772 7.56237 18.9452 7.56437 19.7672 7.56237C20.1882 7.56137 20.4022 7.05837 20.1102 6.75437C19.0552 5.65737 17.1662 3.69137 16.0842 2.56737Z"
                                        fill="currentColor"></path>
                                    <path
                                        d="M15.1052 12.8838C14.8142 13.1728 14.3432 13.1748 14.0512 12.8818L12.4622 11.2848V16.1118C12.4622 16.5228 12.1282 16.8568 11.7172 16.8568C11.3062 16.8568 10.9732 16.5228 10.9732 16.1118V11.2848L9.38223 12.8818C9.09223 13.1748 8.62023 13.1728 8.32923 12.8838C8.03823 12.5948 8.03723 12.1228 8.32723 11.8308L11.1892 8.95582C11.1902 8.95482 11.1902 8.95482 11.1902 8.95482C11.2582 8.88682 11.3402 8.83182 11.4302 8.79482C11.5202 8.75682 11.6182 8.73682 11.7172 8.73682C11.8172 8.73682 11.9152 8.75682 12.0052 8.79482C12.0942 8.83182 12.1752 8.88682 12.2432 8.95382C12.2442 8.95482 12.2452 8.95482 12.2452 8.95582L15.1072 11.8308C15.3972 12.1228 15.3972 12.5948 15.1052 12.8838Z"
                                        fill="currentColor"></path>
                                </svg>
                            </div>
                            <h4 class="mt-4 mb-2 counter">$4,434</h4>
                            <p class="mb-0">{{ __('e-commerce.refund') }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="card">
                        <div class="card-body text-center">
                            <div class="m-auto d-inline-block p-4 bg-primary-subtle rounded-pill">
                                <svg class="icon-44" width="44" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M15.2428 4.73756C15.2428 6.95855 17.0459 8.75902 19.2702 8.75902C19.5151 8.75782 19.7594 8.73431 20 8.68878V16.6615C20 20.0156 18.0215 22 14.6624 22H7.34636C3.97851 22 2 20.0156 2 16.6615V9.3561C2 6.00195 3.97851 4 7.34636 4H15.3131C15.2659 4.243 15.2423 4.49001 15.2428 4.73756ZM13.15 14.8966L16.0078 11.2088V11.1912C16.2525 10.8625 16.1901 10.3989 15.8671 10.1463C15.7108 10.0257 15.5122 9.97345 15.3167 10.0016C15.1211 10.0297 14.9453 10.1358 14.8295 10.2956L12.4201 13.3951L9.6766 11.2351C9.51997 11.1131 9.32071 11.0592 9.12381 11.0856C8.92691 11.1121 8.74898 11.2166 8.63019 11.3756L5.67562 15.1863C5.57177 15.3158 5.51586 15.4771 5.51734 15.6429C5.5002 15.9781 5.71187 16.2826 6.03238 16.3838C6.35288 16.485 6.70138 16.3573 6.88031 16.0732L9.35125 12.8771L12.0948 15.0283C12.2508 15.1541 12.4514 15.2111 12.6504 15.1863C12.8494 15.1615 13.0297 15.0569 13.15 14.8966Z"
                                        fill="currentColor"></path>
                                    <circle opacity="0.4" cx="19.5" cy="4.5" r="2.5" fill="currentColor">
                                    </circle>
                                </svg>
                            </div>
                            <h4 class="mt-4 mb-2 counter">80%</h4>
                            <p class="mb-0">{{ __('e-commerce.margin') }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-8">
            <div class="row">
                <div class="col-md-6 col-lg-3">
                    <div class="card bg-primary">
                        <div id="admin-chart-02" class="admin-chart-02"></div>
                        <div class="card-body">
                            <p class="text-white">{{ __('e-commerce.weekly_sales') }}</p>
                            <h4 class="text-white counter mb-0">$14,434</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card bg-info">
                        <div id="admin-chart-03" class="admin-chart-03"></div>
                        <div class="card-body">
                            <p class="text-white">{{ __('e-commerce.total_sales') }}</p>
                            <h4 class="text-white counter mb-0">$44,434</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="text-center">
                                <div class="m-auto d-inline-block p-4 bg-primary-subtle rounded-pill">
                                    <svg class="icon-44" width="44" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path opacity="0.4"
                                            d="M16.6756 2H7.33333C3.92889 2 2 3.92889 2 7.33333V16.6667C2 20.0711 3.92889 22 7.33333 22H16.6756C20.08 22 22 20.0711 22 16.6667V7.33333C22 3.92889 20.08 2 16.6756 2Z"
                                            fill="currentColor"></path>
                                        <path
                                            d="M7.36866 9.3689C6.91533 9.3689 6.54199 9.74223 6.54199 10.2045V17.0756C6.54199 17.5289 6.91533 17.9022 7.36866 17.9022C7.83088 17.9022 8.20421 17.5289 8.20421 17.0756V10.2045C8.20421 9.74223 7.83088 9.3689 7.36866 9.3689Z"
                                            fill="currentColor"></path>
                                        <path
                                            d="M12.0352 6.08887C11.5818 6.08887 11.2085 6.4622 11.2085 6.92442V17.0755C11.2085 17.5289 11.5818 17.9022 12.0352 17.9022C12.4974 17.9022 12.8707 17.5289 12.8707 17.0755V6.92442C12.8707 6.4622 12.4974 6.08887 12.0352 6.08887Z"
                                            fill="currentColor"></path>
                                        <path
                                            d="M16.6398 12.9956C16.1775 12.9956 15.8042 13.3689 15.8042 13.8312V17.0756C15.8042 17.5289 16.1775 17.9023 16.6309 17.9023C17.0931 17.9023 17.4664 17.5289 17.4664 17.0756V13.8312C17.4664 13.3689 17.0931 12.9956 16.6398 12.9956Z"
                                            fill="currentColor"></path>
                                    </svg>
                                </div>
                            </div>
                            <div>
                                <p class="pt-3">{{ __('e-commerce.this_yr') }}</p>
                                <h4 class="mb-3 counter">$554,434</h4>
                                <p class="mb-0 text-danger pt-2">-10%</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="text-center">
                                <div class="m-auto d-inline-block p-4 bg-primary-subtle rounded-pill">
                                    <svg class="icon-44" width="44" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path opacity="0.4"
                                            d="M13.7505 9.70303V7.68318C13.354 7.68318 13.0251 7.36377 13.0251 6.97859V4.57356C13.0251 4.2532 12.764 4.00049 12.4352 4.00049H5.7911C3.70213 4.00049 2 5.653 2 7.68318V10.1155C2 10.3043 2.07737 10.4828 2.21277 10.6143C2.34816 10.7449 2.53191 10.8201 2.72534 10.8201C3.46035 10.8201 4.02128 11.3274 4.02128 11.9944C4.02128 12.6905 3.45068 13.2448 2.73501 13.2533C2.33849 13.2533 2 13.5257 2 13.9203V16.3262C2 18.3555 3.70213 19.9995 5.78143 19.9995H12.4352C12.764 19.9995 13.0251 19.745 13.0251 19.4265V17.3963C13.0251 17.0027 13.354 16.6917 13.7505 16.6917V14.8701C13.354 14.8701 13.0251 14.5497 13.0251 14.1655V10.4076C13.0251 10.0224 13.354 9.70303 13.7505 9.70303Z"
                                            fill="currentColor"></path>
                                        <path
                                            d="M19.9787 11.9948C19.9787 12.69 20.559 13.2443 21.265 13.2537C21.6615 13.2537 22 13.5262 22 13.9113V16.3258C22 18.3559 20.3075 20 18.2186 20H15.0658C14.7466 20 14.4758 19.7454 14.4758 19.426V17.3967C14.4758 17.0022 14.1567 16.6921 13.7505 16.6921V14.8705C14.1567 14.8705 14.4758 14.5502 14.4758 14.1659V10.4081C14.4758 10.022 14.1567 9.70348 13.7505 9.70348V7.6827C14.1567 7.6827 14.4758 7.36328 14.4758 6.9781V4.57401C14.4758 4.25366 14.7466 4 15.0658 4H18.2186C20.3075 4 22 5.64406 22 7.6733V10.0407C22 10.2286 21.9226 10.4081 21.7872 10.5387C21.6518 10.6702 21.4681 10.7453 21.2747 10.7453C20.559 10.7453 19.9787 11.31 19.9787 11.9948Z"
                                            fill="currentColor"></path>
                                    </svg>
                                </div>
                            </div>
                            <p class="pt-3">{{ __('e-commerce.today') }}</p>
                            <h4 class="mb-3 counter">$1,434</h4>
                            <p class="mb-0 text-success pt-2">+60%</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card circle-progress-widget">
                <div class="card-header">
                    <div class="header-title">
                        <h4 class="card-title">{{ __('e-commerce.cus_gender') }}</h4>
                    </div>
                </div>
                <div class="card-body">
                    <div class="flex-wrap d-flex align-items-center justify-content-between">
                        <div id="admin-chart-04" class="col-md-7 col-lg-7"></div>
                        <div class="d-grid gap col-md-5 col-lg-5">
                            <div class="d-flex align-items-start">
                                <svg class="mt-2 text-primary" xmlns="http://www.w3.org/2000/svg" width="14"
                                    viewBox="0 0 24 24" fill="currentColor">
                                    <g>
                                        <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                    </g>
                                </svg>
                                <div class="ms-2">
                                    <span class="mb-3">{{ __('e-commerce.male_cus') }}</span>
                                    <h6 class="mb-0">44%</h6>
                                </div>
                            </div>
                            <div class="d-flex align-items-start">
                                <svg class="mt-2 text-info" xmlns="http://www.w3.org/2000/svg" width="14"
                                    viewBox="0 0 24 24" fill="currentColor">
                                    <g>
                                        <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                    </g>
                                </svg>
                                <div class="ms-2">
                                    <span class="mb-3">{{ __('e-commerce.female_cus') }}</span>
                                    <h6 class="mb-0">55%</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12 col-lg-8">
            <div class="row">
                <div class="col-md-12">
                    <div class="overflow-hidden card">
                        <div class="flex-wrap card-header d-flex align-items-center justify-content-between flex-wrap">
                            <div class="header-title">
                                <h4 class="card-title">{{ __('e-commerce.top_sell') }}</h4>
                            </div>
                            <div class="d-flex align-items-center">
                                <div class="dropdown">
                                    <a href="#" class="text-gray dropdown-toggle" id="top-seller"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        {{ __('e-commerce.profiles') }}
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="top-seller">
                                        <li><a class="dropdown-item"
                                                href="#">{{ __('e-commerce.profiles') }}</a></li>
                                        <li><a class="dropdown-item"
                                                href="#">{{ __('e-commerce.country') }}</a></li>
                                        <li><a class="dropdown-item" href="#">{{ __('e-commerce.prod') }}</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="px-0 card-body">
                            <div class="table-responsive">
                                <table class="table table-sm table-striped py-3" role="grid"
                                    data-table="eCommerce-admin">
                                    <thead>
                                        <tr>
                                            <th style="width: 10%">Rank</th>
                                            <th>Profile</th>
                                            <th>Revenue</th>
                                            <th>Sales</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <strong>#148</strong>
                                            </td>
                                            <td>
                                                <h6>Elon Musk</h6>
                                                <p class="mb-0">@musk</p>
                                            </td>
                                            <td>
                                                <strong>$14,437</strong>
                                            </td>
                                            <td>
                                                1548
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>#179</strong>
                                            </td>
                                            <td>
                                                <h6>Marie Clark</h6>
                                                <p class="mb-0">@mclark</p>
                                            </td>
                                            <td>
                                                <strong>$8,015</strong>
                                            </td>
                                            <td>
                                                752
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>#118</strong>
                                            </td>
                                            <td>
                                                <h6>James Mason</h6>
                                                <p class="mb-0">@jamesM</p>
                                            </td>
                                            <td>
                                                <strong>$13,989</strong>
                                            </td>
                                            <td>
                                                875
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>#101</strong>
                                            </td>
                                            <td>
                                                <h6>Jacob Jones</h6>
                                                <p class="mb-0">@jones</p>
                                            </td>
                                            <td>
                                                <strong>$25,916</strong>
                                            </td>
                                            <td>
                                                4,863
                                            </td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th title="Rank"></th>
                                            <th title="Profile"></th>
                                            <th title="Revenue"></th>
                                            <th title="Sales"></th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h4 class="mb-0">{{ __('e-commerce.best_selling_prod') }}</h4>
                            <div class="dropdown">
                                <span role="button" id="dropdownMenuButton1" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    <svg width="5" height="20" viewBox="0 0 5 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="2.5" cy="3" r="2.5" fill="currentColor" />
                                        <circle cx="2.5" cy="10" r="2.5" fill="currentColor" />
                                        <circle cx="2.5" cy="17" r="2.5" fill="currentColor" />
                                    </svg>
                                </span>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                    <li><a class="dropdown-item" href="#">{{ __('e-commerce.wish') }}</a></li>
                                    <li><a class="dropdown-item" href="#">{{ __('e-commerce.advertise') }}</a>
                                    </li>
                                    <li><a class="dropdown-item"
                                            href="#">{{ __('e-commerce.notification_preference') }}</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="d-flex selling-card align-items-center gap-4">
                                <img src="{{ asset('modules/e-commerce/images/product/04.png') }}" alt="user-profile"
                                    class="img-fluid rounded bg-light w-50">
                                <div class="selling-details">
                                    <h5 class="mb-3 text-gray">{{ __('e-commerce.jacket') }}</h5>
                                    <h4 class="mb-3">$56.00</h4>
                                    <h6 class="text-success mb-0">
                                        <svg width="37" viewBox="0 0 37 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M1 23C1 23 3.43987 19.3978 4.96706 17.3799C6.87605 14.8575 9.33333 15.3843 13.5 17.0741C20.6355 19.968 16.9803 9.68336 24.3333 10.3062C34.3333 11.1531 28.5 1.84458 36 1"
                                                stroke="#1AA053" />
                                        </svg>
                                        5.76%
                                    </h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h4 class="mb-0">{{ __('e-commerce.most_viewed') }}</h4>
                            <div class="dropdown">
                                <span role="button" id="product-view" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    <svg width="5" height="20" viewBox="0 0 5 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="2.5" cy="3" r="2.5" fill="currentColor" />
                                        <circle cx="2.5" cy="10" r="2.5" fill="currentColor" />
                                        <circle cx="2.5" cy="17" r="2.5" fill="currentColor" />
                                    </svg>
                                </span>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                    <li><a class="dropdown-item" href="#">{{ __('e-commerce.wish') }}</a></li>
                                    <li><a class="dropdown-item" href="#">{{ __('e-commerce.advertise') }}</a>
                                    </li>
                                    <li><a class="dropdown-item"
                                            href="#">{{ __('e-commerce.notification_preference') }}</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="d-flex selling-card align-items-center gap-4">
                                <img src="{{ asset('modules/e-commerce/images/product/09.png') }}" alt="user-profile"
                                    class="img-fluid rounded bg-light w-50">
                                <div class="selling-details">
                                    <h5 class="mb-3 text-gray">{{ __('e-commerce.bag') }}</h5>
                                    <h4 class="mb-3">$56.00</h4>
                                    <h6 class="text-danger mb-0">
                                        <svg width="37" height="24" viewBox="0 0 37 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M36 23C36 23 33.5601 19.3978 32.0329 17.3799C30.124 14.8575 27.6667 15.3843 23.5 17.0741C16.3645 19.968 20.0197 9.68336 12.6667 10.3062C2.66667 11.1531 8.5 1.84458 1 1"
                                                stroke="#B34400" />
                                        </svg>
                                        3.76%
                                    </h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12  col-lg-4">
            <div class="card">
                <div class="card-header">
                    <div class="header-title">
                        <h4 class="card-title">{{ __('e-commerce.top_rated') }}</h4>
                    </div>
                </div>
                <div class="card-body d-flex flex-column">
                    <ul class="list-inline m-0 p-0">
                        <li class="d-flex mb-4 align-items-center">
                            <div>
                                <img src="{{ asset('modules/e-commerce/images/product/04.png') }}" alt="story-img"
                                    class="img-fluid rounded object-contain avatar-90 iq-product-bg">
                            </div>
                            <div class="ms-4">
                                <a href="{{ route('e-commerce.product-detail') }}">
                                    <h5 class="iq-product-detail">
                                        {{ __('e-commerce.biker’s_jacket') }}
                                    </h5>
                                </a>
                                <div class="d-flex align-items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="me-2 mb-0" height="19"
                                        viewBox="0 0 24 24" fill="none">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M13.1043 4.17701L14.9317 7.82776C15.1108 8.18616 15.4565 8.43467 15.8573 8.49218L19.9453 9.08062C20.9554 9.22644 21.3573 10.4505 20.6263 11.1519L17.6702 13.9924C17.3797 14.2718 17.2474 14.6733 17.3162 15.0676L18.0138 19.0778C18.1856 20.0698 17.1298 20.8267 16.227 20.3574L12.5732 18.4627C12.215 18.2768 11.786 18.2768 11.4268 18.4627L7.773 20.3574C6.87023 20.8267 5.81439 20.0698 5.98724 19.0778L6.68385 15.0676C6.75257 14.6733 6.62033 14.2718 6.32982 13.9924L3.37368 11.1519C2.64272 10.4505 3.04464 9.22644 4.05466 9.08062L8.14265 8.49218C8.54354 8.43467 8.89028 8.18616 9.06937 7.82776L10.8957 4.17701C11.3477 3.27433 12.6523 3.27433 13.1043 4.17701Z"
                                            fill="#FFD329"></path>
                                    </svg>
                                    <p class="mb-0">3.5</p>
                                </div>
                            </div>
                            <div class="ms-auto iq-arrow-btn">
                                <svg width="8" height="14" viewBox="0 0 8 14" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M5.2409 7L0.334735 1.99162C-0.111578 1.53601 -0.111578 0.797321 0.334735 0.341709C0.781049 -0.113902 1.50467 -0.113902 1.95098 0.341709L7.66527 6.17504C8.11158 6.63065 8.11158 7.36935 7.66527 7.82496L1.95098 13.6583C1.50467 14.1139 0.781049 14.1139 0.334735 13.6583C-0.111578 13.2027 -0.111578 12.464 0.334735 12.0084L5.2409 7Z"
                                        fill="#8A92A6" />
                                </svg>
                            </div>
                        </li>
                        <li class="d-flex mb-4 align-items-center">
                            <div>
                                <img src="{{ asset('modules/e-commerce/images/product/06.png') }}" alt="story-img"
                                    class="img-fluid rounded object-contain avatar-90 iq-product-bg">
                            </div>
                            <div class="ms-4">
                                <a href="{{ route('e-commerce.product-detail') }}">
                                    <h5 class="iq-product-detail">
                                        {{ __('e-commerce.blue_side_bag') }}
                                    </h5>
                                </a>
                                <div class="d-flex align-items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="me-2 mb-0 " height="19"
                                        viewBox="0 0 24 24" fill="none">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M13.1043 4.17701L14.9317 7.82776C15.1108 8.18616 15.4565 8.43467 15.8573 8.49218L19.9453 9.08062C20.9554 9.22644 21.3573 10.4505 20.6263 11.1519L17.6702 13.9924C17.3797 14.2718 17.2474 14.6733 17.3162 15.0676L18.0138 19.0778C18.1856 20.0698 17.1298 20.8267 16.227 20.3574L12.5732 18.4627C12.215 18.2768 11.786 18.2768 11.4268 18.4627L7.773 20.3574C6.87023 20.8267 5.81439 20.0698 5.98724 19.0778L6.68385 15.0676C6.75257 14.6733 6.62033 14.2718 6.32982 13.9924L3.37368 11.1519C2.64272 10.4505 3.04464 9.22644 4.05466 9.08062L8.14265 8.49218C8.54354 8.43467 8.89028 8.18616 9.06937 7.82776L10.8957 4.17701C11.3477 3.27433 12.6523 3.27433 13.1043 4.17701Z"
                                            fill="#FFD329"></path>
                                    </svg>
                                    <p class="mb-0">3.5</p>
                                </div>
                            </div>
                            <div class="ms-auto iq-arrow-btn">
                                <svg width="8" height="14" viewBox="0 0 8 14" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M5.2409 7L0.334735 1.99162C-0.111578 1.53601 -0.111578 0.797321 0.334735 0.341709C0.781049 -0.113902 1.50467 -0.113902 1.95098 0.341709L7.66527 6.17504C8.11158 6.63065 8.11158 7.36935 7.66527 7.82496L1.95098 13.6583C1.50467 14.1139 0.781049 14.1139 0.334735 13.6583C-0.111578 13.2027 -0.111578 12.464 0.334735 12.0084L5.2409 7Z"
                                        fill="#8A92A6" />
                                </svg>
                            </div>
                        </li>
                        <li class="d-flex mb-4 align-items-center">
                            <div>
                                <img src="{{ asset('modules/e-commerce/images/product/07.png') }}" alt="story-img"
                                    class="img-fluid rounded object-contain avatar-90 iq-product-bg">
                            </div>
                            <div class="ms-4">
                                <a href="{{ route('e-commerce.product-detail') }}">
                                    <h5 class="iq-product-detail">
                                        {{ __('e-commerce.sweater') }}
                                    </h5>
                                </a>
                                <div class="d-flex align-items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="me-2 mb-0" height="19"
                                        viewBox="0 0 24 24" fill="none">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M13.1043 4.17701L14.9317 7.82776C15.1108 8.18616 15.4565 8.43467 15.8573 8.49218L19.9453 9.08062C20.9554 9.22644 21.3573 10.4505 20.6263 11.1519L17.6702 13.9924C17.3797 14.2718 17.2474 14.6733 17.3162 15.0676L18.0138 19.0778C18.1856 20.0698 17.1298 20.8267 16.227 20.3574L12.5732 18.4627C12.215 18.2768 11.786 18.2768 11.4268 18.4627L7.773 20.3574C6.87023 20.8267 5.81439 20.0698 5.98724 19.0778L6.68385 15.0676C6.75257 14.6733 6.62033 14.2718 6.32982 13.9924L3.37368 11.1519C2.64272 10.4505 3.04464 9.22644 4.05466 9.08062L8.14265 8.49218C8.54354 8.43467 8.89028 8.18616 9.06937 7.82776L10.8957 4.17701C11.3477 3.27433 12.6523 3.27433 13.1043 4.17701Z"
                                            fill="#FFD329"></path>
                                    </svg>
                                    <p class="mb-0">3.5</p>
                                </div>
                            </div>
                            <div class="ms-auto iq-arrow-btn">
                                <svg width="8" height="14" viewBox="0 0 8 14" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M5.2409 7L0.334735 1.99162C-0.111578 1.53601 -0.111578 0.797321 0.334735 0.341709C0.781049 -0.113902 1.50467 -0.113902 1.95098 0.341709L7.66527 6.17504C8.11158 6.63065 8.11158 7.36935 7.66527 7.82496L1.95098 13.6583C1.50467 14.1139 0.781049 14.1139 0.334735 13.6583C-0.111578 13.2027 -0.111578 12.464 0.334735 12.0084L5.2409 7Z"
                                        fill="#8A92A6" />
                                </svg>
                            </div>
                        </li>
                        <li class="d-flex mb-4 align-items-center">
                            <div>
                                <img src="{{ asset('modules/e-commerce/images/product/02.png') }}" alt="story-img"
                                    class="img-fluid rounded object-contain avatar-90 iq-product-bg">
                            </div>
                            <div class="ms-4">
                                <a href="{{ route('e-commerce.product-detail') }}">
                                    <h5 class="iq-product-detail">
                                        {{ __('e-commerce.shoe') }}
                                    </h5>
                                </a>
                                <div class="d-flex align-items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="me-2 mb-0" height="19"
                                        viewBox="0 0 24 24" fill="none">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M13.1043 4.17701L14.9317 7.82776C15.1108 8.18616 15.4565 8.43467 15.8573 8.49218L19.9453 9.08062C20.9554 9.22644 21.3573 10.4505 20.6263 11.1519L17.6702 13.9924C17.3797 14.2718 17.2474 14.6733 17.3162 15.0676L18.0138 19.0778C18.1856 20.0698 17.1298 20.8267 16.227 20.3574L12.5732 18.4627C12.215 18.2768 11.786 18.2768 11.4268 18.4627L7.773 20.3574C6.87023 20.8267 5.81439 20.0698 5.98724 19.0778L6.68385 15.0676C6.75257 14.6733 6.62033 14.2718 6.32982 13.9924L3.37368 11.1519C2.64272 10.4505 3.04464 9.22644 4.05466 9.08062L8.14265 8.49218C8.54354 8.43467 8.89028 8.18616 9.06937 7.82776L10.8957 4.17701C11.3477 3.27433 12.6523 3.27433 13.1043 4.17701Z"
                                            fill="#FFD329"></path>
                                    </svg>
                                    <p class="mb-0">3.5</p>
                                </div>
                            </div>
                            <div class="ms-auto iq-arrow-btn">
                                <svg width="8" height="14" viewBox="0 0 8 14" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M5.2409 7L0.334735 1.99162C-0.111578 1.53601 -0.111578 0.797321 0.334735 0.341709C0.781049 -0.113902 1.50467 -0.113902 1.95098 0.341709L7.66527 6.17504C8.11158 6.63065 8.11158 7.36935 7.66527 7.82496L1.95098 13.6583C1.50467 14.1139 0.781049 14.1139 0.334735 13.6583C-0.111578 13.2027 -0.111578 12.464 0.334735 12.0084L5.2409 7Z"
                                        fill="#8A92A6" />
                                </svg>
                            </div>
                        </li>
                        <li class="d-flex mb-4 align-items-center">
                            <div>
                                <img src="{{ asset('modules/e-commerce/images/product/05.png') }}" alt="story-img"
                                    class="img-fluid rounded object-contain avatar-90 iq-product-bg">
                            </div>
                            <div class="ms-4">
                                <a href="{{ route('e-commerce.product-detail') }}">
                                    <h5 class="iq-product-detail">
                                        {{ __('e-commerce.shrug') }}
                                    </h5>
                                </a>
                                <div class="d-flex align-items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="me-2 mb-0" height="19"
                                        viewBox="0 0 24 24" fill="none">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M13.1043 4.17701L14.9317 7.82776C15.1108 8.18616 15.4565 8.43467 15.8573 8.49218L19.9453 9.08062C20.9554 9.22644 21.3573 10.4505 20.6263 11.1519L17.6702 13.9924C17.3797 14.2718 17.2474 14.6733 17.3162 15.0676L18.0138 19.0778C18.1856 20.0698 17.1298 20.8267 16.227 20.3574L12.5732 18.4627C12.215 18.2768 11.786 18.2768 11.4268 18.4627L7.773 20.3574C6.87023 20.8267 5.81439 20.0698 5.98724 19.0778L6.68385 15.0676C6.75257 14.6733 6.62033 14.2718 6.32982 13.9924L3.37368 11.1519C2.64272 10.4505 3.04464 9.22644 4.05466 9.08062L8.14265 8.49218C8.54354 8.43467 8.89028 8.18616 9.06937 7.82776L10.8957 4.17701C11.3477 3.27433 12.6523 3.27433 13.1043 4.17701Z"
                                            fill="#FFD329"></path>
                                    </svg>
                                    <p class="mb-0">3.5</p>
                                </div>
                            </div>
                            <div class="ms-auto iq-arrow-btn">
                                <svg width="8" height="14" viewBox="0 0 8 14" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M5.2409 7L0.334735 1.99162C-0.111578 1.53601 -0.111578 0.797321 0.334735 0.341709C0.781049 -0.113902 1.50467 -0.113902 1.95098 0.341709L7.66527 6.17504C8.11158 6.63065 8.11158 7.36935 7.66527 7.82496L1.95098 13.6583C1.50467 14.1139 0.781049 14.1139 0.334735 13.6583C-0.111578 13.2027 -0.111578 12.464 0.334735 12.0084L5.2409 7Z"
                                        fill="#8A92A6" />
                                </svg>
                            </div>
                        </li>
                        <li class="d-flex mb-4 align-items-center">
                            <div>
                                <img src="{{ asset('modules/e-commerce/images/product/10.png') }}" alt="story-img"
                                    class="img-fluid rounded object-contain avatar-90 iq-product-bg">
                            </div>
                            <div class="ms-4">
                                <a href="{{ route('e-commerce.product-detail') }}">
                                    <h5 class="iq-product-detail">
                                        {{ __('e-commerce.pink_bag') }}
                                    </h5>
                                </a>
                                <div class="d-flex align-items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="me-2 mb-0" height="19"
                                        viewBox="0 0 24 24" fill="none">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M13.1043 4.17701L14.9317 7.82776C15.1108 8.18616 15.4565 8.43467 15.8573 8.49218L19.9453 9.08062C20.9554 9.22644 21.3573 10.4505 20.6263 11.1519L17.6702 13.9924C17.3797 14.2718 17.2474 14.6733 17.3162 15.0676L18.0138 19.0778C18.1856 20.0698 17.1298 20.8267 16.227 20.3574L12.5732 18.4627C12.215 18.2768 11.786 18.2768 11.4268 18.4627L7.773 20.3574C6.87023 20.8267 5.81439 20.0698 5.98724 19.0778L6.68385 15.0676C6.75257 14.6733 6.62033 14.2718 6.32982 13.9924L3.37368 11.1519C2.64272 10.4505 3.04464 9.22644 4.05466 9.08062L8.14265 8.49218C8.54354 8.43467 8.89028 8.18616 9.06937 7.82776L10.8957 4.17701C11.3477 3.27433 12.6523 3.27433 13.1043 4.17701Z"
                                            fill="#FFD329"></path>
                                    </svg>
                                    <p class="mb-0">3.5</p>
                                </div>
                            </div>
                            <div class="ms-auto iq-arrow-btn">
                                <svg width="8" height="14" viewBox="0 0 8 14" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M5.2409 7L0.334735 1.99162C-0.111578 1.53601 -0.111578 0.797321 0.334735 0.341709C0.781049 -0.113902 1.50467 -0.113902 1.95098 0.341709L7.66527 6.17504C8.11158 6.63065 8.11158 7.36935 7.66527 7.82496L1.95098 13.6583C1.50467 14.1139 0.781049 14.1139 0.334735 13.6583C-0.111578 13.2027 -0.111578 12.464 0.334735 12.0084L5.2409 7Z"
                                        fill="#8A92A6" />
                                </svg>
                            </div>
                        </li>
                    </ul>
                    <a href="{{ route('e-commerce.categories-list') }}" class="btn btn-primary align-self-center">
                        <div class="d-flex align-items-center gap-2">
                            <span>{{ __('e-commerce.see_reviews') }}</span>
                            <svg class="icon-20" xmlns="http://www.w3.org/2000/svg" width="18" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 5l7 7-7 7"></path>
                            </svg>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
