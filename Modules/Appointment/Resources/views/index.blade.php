<x-app-layout layout="appointment" :assets="$assets ?? []" title="Appointment" :isFlatpickr="true">
    <div class="row">
        <div class="col-lg-8">
            <h3 class="mb-4">{{ __('appointment.overview') }}</h3>
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4">
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center gap-3">
                                <div class="bg-primary-subtle p-2 rounded">
                                    <svg class="icon-32" width="32" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path opacity="0.4"
                                            d="M16.191 2H7.81C4.77 2 3 3.78 3 6.83V17.16C3 20.26 4.77 22 7.81 22H16.191C19.28 22 21 20.26 21 17.16V6.83C21 3.78 19.28 2 16.191 2Z"
                                            fill="currentColor"></path>
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M8.07996 6.6499V6.6599C7.64896 6.6599 7.29996 7.0099 7.29996 7.4399C7.29996 7.8699 7.64896 8.2199 8.07996 8.2199H11.069C11.5 8.2199 11.85 7.8699 11.85 7.4289C11.85 6.9999 11.5 6.6499 11.069 6.6499H8.07996ZM15.92 12.7399H8.07996C7.64896 12.7399 7.29996 12.3899 7.29996 11.9599C7.29996 11.5299 7.64896 11.1789 8.07996 11.1789H15.92C16.35 11.1789 16.7 11.5299 16.7 11.9599C16.7 12.3899 16.35 12.7399 15.92 12.7399ZM15.92 17.3099H8.07996C7.77996 17.3499 7.48996 17.1999 7.32996 16.9499C7.16996 16.6899 7.16996 16.3599 7.32996 16.1099C7.48996 15.8499 7.77996 15.7099 8.07996 15.7399H15.92C16.319 15.7799 16.62 16.1199 16.62 16.5299C16.62 16.9289 16.319 17.2699 15.92 17.3099Z"
                                            fill="currentColor"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="counter">1206</h4>
                                    <span class="text-dark">{{ __('appointment.all') }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex  align-items-center gap-3">
                                <div class="bg-primary-subtle p-2 rounded">
                                    <svg class="icon-32" width="32" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M9.34933 14.8577C5.38553 14.8577 2 15.47 2 17.9173C2 20.3665 5.364 20.9999 9.34933 20.9999C13.3131 20.9999 16.6987 20.3876 16.6987 17.9403C16.6987 15.4911 13.3347 14.8577 9.34933 14.8577Z"
                                            fill="currentColor"></path>
                                        <path opacity="0.4"
                                            d="M9.34935 12.5248C12.049 12.5248 14.2124 10.4062 14.2124 7.76241C14.2124 5.11865 12.049 3 9.34935 3C6.65072 3 4.48633 5.11865 4.48633 7.76241C4.48633 10.4062 6.65072 12.5248 9.34935 12.5248Z"
                                            fill="currentColor"></path>
                                        <path opacity="0.4"
                                            d="M16.1733 7.84873C16.1733 9.19505 15.7604 10.4513 15.0363 11.4948C14.961 11.6021 15.0275 11.7468 15.1586 11.7698C15.3406 11.7995 15.5275 11.8177 15.7183 11.8216C17.6165 11.8704 19.3201 10.6736 19.7907 8.87116C20.4884 6.19674 18.4414 3.79541 15.8338 3.79541C15.551 3.79541 15.2799 3.82416 15.0157 3.87686C14.9795 3.88453 14.9404 3.90177 14.9208 3.93244C14.8954 3.97172 14.914 4.02251 14.9394 4.05605C15.7232 5.13214 16.1733 6.44205 16.1733 7.84873Z"
                                            fill="currentColor"></path>
                                        <path
                                            d="M21.779 15.1693C21.4316 14.4439 20.593 13.9465 19.3171 13.7022C18.7153 13.5585 17.0852 13.3544 15.5695 13.3831C15.547 13.386 15.5343 13.4013 15.5324 13.4109C15.5294 13.4262 15.5363 13.4492 15.5656 13.4655C16.2662 13.8047 18.9737 15.2804 18.6332 18.3927C18.6185 18.5288 18.729 18.6438 18.867 18.6246C19.5333 18.5317 21.2476 18.1704 21.779 17.0474C22.0735 16.4533 22.0735 15.7634 21.779 15.1693Z"
                                            fill="currentColor"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="counter">2455</h4>
                                    <span class="text-dark">{{ __('appointment.new') }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex  align-items-center gap-3">
                                <div class="bg-success-subtle p-2 rounded">
                                    <svg class="icon-32" width="32" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M3 16.8701V9.25708H21V16.9311C21 20.0701 19.0241 22.0001 15.8628 22.0001H8.12733C4.99561 22.0001 3 20.0301 3 16.8701ZM7.95938 14.4101C7.50494 14.4311 7.12953 14.0701 7.10977 13.6111C7.10977 13.1511 7.46542 12.7711 7.91987 12.7501C8.36443 12.7501 8.72997 13.1011 8.73985 13.5501C8.7596 14.0111 8.40395 14.3911 7.95938 14.4101ZM12.0198 14.4101C11.5653 14.4311 11.1899 14.0701 11.1701 13.6111C11.1701 13.1511 11.5258 12.7711 11.9802 12.7501C12.4248 12.7501 12.7903 13.1011 12.8002 13.5501C12.82 14.0111 12.4643 14.3911 12.0198 14.4101ZM16.0505 18.0901C15.596 18.0801 15.2305 17.7001 15.2305 17.2401C15.2206 16.7801 15.5862 16.4011 16.0406 16.3911H16.0505C16.5148 16.3911 16.8902 16.7711 16.8902 17.2401C16.8902 17.7101 16.5148 18.0901 16.0505 18.0901ZM11.1701 17.2401C11.1899 17.7001 11.5653 18.0611 12.0198 18.0401C12.4643 18.0211 12.82 17.6411 12.8002 17.1811C12.7903 16.7311 12.4248 16.3801 11.9802 16.3801C11.5258 16.4011 11.1701 16.7801 11.1701 17.2401ZM7.09989 17.2401C7.11965 17.7001 7.49506 18.0611 7.94951 18.0401C8.39407 18.0211 8.74973 17.6411 8.72997 17.1811C8.72009 16.7311 8.35456 16.3801 7.90999 16.3801C7.45554 16.4011 7.09989 16.7801 7.09989 17.2401ZM15.2404 13.6011C15.2404 13.1411 15.596 12.7711 16.0505 12.7611C16.4951 12.7611 16.8507 13.1201 16.8705 13.5611C16.8804 14.0211 16.5247 14.4011 16.0801 14.4101C15.6257 14.4201 15.2503 14.0701 15.2404 13.6111V13.6011Z"
                                            fill="currentColor"></path>
                                        <path opacity="0.4"
                                            d="M3.00293 9.25699C3.01577 8.66999 3.06517 7.50499 3.15803 7.12999C3.63224 5.02099 5.24256 3.68099 7.54442 3.48999H16.4555C18.7376 3.69099 20.3677 5.03999 20.8419 7.12999C20.9338 7.49499 20.9832 8.66899 20.996 9.25699H3.00293Z"
                                            fill="currentColor"></path>
                                        <path
                                            d="M8.30465 6.59C8.73934 6.59 9.06535 6.261 9.06535 5.82V2.771C9.06535 2.33 8.73934 2 8.30465 2C7.86996 2 7.54395 2.33 7.54395 2.771V5.82C7.54395 6.261 7.86996 6.59 8.30465 6.59Z"
                                            fill="currentColor"></path>
                                        <path
                                            d="M15.6953 6.59C16.1201 6.59 16.456 6.261 16.456 5.82V2.771C16.456 2.33 16.1201 2 15.6953 2C15.2606 2 14.9346 2.33 14.9346 2.771V5.82C14.9346 6.261 15.2606 6.59 15.6953 6.59Z"
                                            fill="currentColor"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h4>12/4</h4>
                                    <span class="text-dark">{{ __('appointment.today') }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex  align-items-center gap-3">
                                <div class="bg-danger-subtle p-2 rounded">
                                    <svg class="icon-32" width="32" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path opacity="0.4"
                                            d="M19.3371 5.91772L21.7407 3.50518C21.9082 3.33698 22.0001 3.11407 22.0001 2.87798C22.0001 2.64189 21.9082 2.41898 21.7407 2.25078C21.4065 1.91641 20.8261 1.91641 20.4919 2.25078L18.0884 4.66434L15.6839 2.25078C15.3498 1.91641 14.7693 1.91641 14.4352 2.25078C14.2686 2.41898 14.1768 2.64189 14.1768 2.87798C14.1768 3.11407 14.2686 3.33698 14.4352 3.50518L16.8387 5.91772L14.4352 8.33027C14.2686 8.49847 14.1768 8.72138 14.1768 8.95747C14.1768 9.19356 14.2686 9.41647 14.4352 9.58467C14.7693 9.91904 15.3498 9.91904 15.6839 9.58467L18.0884 7.17111L20.4919 9.58467C20.6595 9.75186 20.8806 9.84406 21.1168 9.84406C21.353 9.84406 21.5741 9.75186 21.7407 9.58467C21.9082 9.41647 22.0001 9.19356 22.0001 8.95747C22.0001 8.72138 21.9082 8.49847 21.7407 8.33027L19.3371 5.91772Z"
                                            fill="currentColor"></path>
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M11.0317 12.9724C15.0208 16.9604 15.9258 12.3467 18.4656 14.8848C20.9143 17.3328 22.3216 17.8232 19.2192 20.9247C18.8306 21.237 16.3616 24.9943 7.6846 16.3197C-0.993478 7.644 2.76158 5.17244 3.07397 4.78395C6.18387 1.67385 6.66586 3.08938 9.11449 5.53733C11.6544 8.0765 7.04266 8.98441 11.0317 12.9724Z"
                                            fill="currentColor"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="counter">1200</h4>
                                    <span class="text-dark">{{ __('appointment.cancel') }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="flex-wrap card-header d-flex justify-content-between align-items-center">
                    <div class="header-title">
                        <h4 class="card-title">{{ __('appointment.appointments') }}</h4>
                    </div>
                    <div class="d-flex align-items-center align-self-center mt-2 mt-sm-0">
                        <div class="d-flex align-items-center text-primary">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" viewBox="0 0 24 24"
                                fill="currentColor">
                                <g>
                                    <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                </g>
                            </svg>
                            <div class="ms-2">
                                <span class="text-gray">{{ __('appointment.booked') }}</span>
                            </div>
                        </div>
                        <div class="d-flex align-items-center ms-3 text-info">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" viewBox="0 0 24 24"
                                fill="currentColor">
                                <g>
                                    <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                </g>
                            </svg>
                            <div class="ms-2">
                                <span class="text-gray">{{ __('appointment.cancelled') }}</span>
                            </div>
                        </div>
                    </div>
                    <div class="dropdown">
                        <a href="#" class="text-gray dropdown-toggle" id="dropdownMenuButton22"
                            data-bs-toggle="dropdown" aria-expanded="false">This year</a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton22"
                            >
                            <li><a class="dropdown-item" href="#">This Week</a></li>
                            <li><a class="dropdown-item" href="#">This Month</a></li>
                            <li><a class="dropdown-item" href="#">This Year</a></li>
                        </ul>
                    </div>
                </div>
                <div class="card-body">
                    <div id="appointment-line-chart"></div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card">
                <div class="card-header">
                    <div class="header-title">
                        <h4 class=" card-title">{{ __('appointment.date') }}</h4>
                    </div>
                </div>
                <div class="course-picker">
                    <input type="hidden" name="inline" class="d-none inline_flatpickr">
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <div class="header-title">
                        <h4 class=" card-title">{{ __('appointment.appointbook') }}</h4>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row align-items-center just">
                        <div class="col-md-7 col-sm-12  mb-lg-0 mb-3">
                            <div id="appointment-booking"></div>
                        </div>
                        <div class="col-md-5 col-sm-12">
                            <div class="d-flex flex-column">
                                <div class="d-flex align-items-center gap-2">
                                    <svg width="12" class="text-primary" viewBox="0 0 13 14" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="6.5" cy="7" r="6.5" fill="currentColor" />
                                    </svg>
                                    <div>
                                        <h6 class="mb-0">{{ __('appointment.dentist') }}</h6>
                                        <span>80%</span>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center mt-3 gap-2">
                                    <svg width="12" class="text-info" viewBox="0 0 13 14" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="6.5" cy="7" r="6.5" fill="currentColor" />
                                    </svg>
                                    <div>
                                        <h6 class="mb-0">{{ __('appointment.surgeon') }}</h6>
                                        <span>80%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-8 col-md-6 col-sm-12">
            <div class="card">
                <div class="flex-wrap card-header d-flex justify-content-between">
                    <div class="header-title">
                        <h4>Doctors</h4>
                    </div>
                </div>
                <div class="px-0 card-body">
                    <div class="table-responsive">
                        <table class="table table-striped py-3" role="grid" data-toggle="appointment_admin">
                            <thead class="bg-primary-subtle ">
                                <tr class="text-dark">
                                    <th class="sorting_asc">User</th>
                                    <th class="sorting_asc">Email</th>
                                    <th class="sorting_asc">Contact no.</th>
                                    <th class="text-center">More Details</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img class="rounded img-fluid avatar-40 me-3"
                                                src="{{ asset('modules/appointment/images/avatars/02.png') }}"
                                                alt="profile">
                                            <h6 class="mb-0">Jonathan Bradley</h6>
                                        </div>
                                    </td>
                                    <td>
                                        kenzi.lawson@example.com
                                    </td>
                                    <td class="">(319) 555-0115</td>
                                    <td class="text-center">
                                        <a class="btn btn-link" href="javascript:void(0)">View</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img class="rounded img-fluid avatar-40 me-3"
                                                src="{{ asset('modules/appointment/images/avatars/03.png') }}"
                                                alt="profile">
                                            <h6 class="mb-0">Logan Wolfe</h6>
                                        </div>
                                    </td>
                                    <td>
                                        georgia.young@example.com
                                    </td>
                                    <td class="">
                                        (603) 555-0123
                                    </td>
                                    <td class="text-center">
                                        <a class="btn btn-link" href="javascript:void(0)">View</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img class="rounded img-fluid avatar-40 me-3"
                                                src="{{ asset('modules/appointment/images/avatars/04.png') }}"
                                                alt="profile">
                                            <h6 class="mb-0">Elnora obrien</h6>
                                        </div>
                                    </td>
                                    <td>
                                        sara.cruz@example.com
                                    </td>
                                    <td class="">(270) 555-0117</td>
                                    <td class="text-center">
                                        <a class="btn btn-link" href="javascript:void(0)">View</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img class="rounded img-fluid avatar-40 me-3"
                                                src="{{ asset('modules/appointment/images/avatars/05.png') }}"
                                                alt="profile">
                                            <h6 class="mb-0">Katherine Romero</h6>
                                        </div>
                                    </td>
                                    <td>
                                        felicia.reid@example.com
                                    </td>
                                    <td class="">(629) 555-0129</td>
                                    <td class="text-center">
                                        <a class="btn btn-link" href="javascript:void(0)">View</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img class="rounded img-fluid avatar-40 me-3"
                                                src="{{ asset('modules/appointment/images/avatars/01.png') }}"
                                                alt="profile">
                                            <h6 class="mb-0">Oscar Phelps</h6>
                                        </div>
                                    </td>
                                    <td>
                                        alma.lawson@example.com
                                    </td>
                                    <td class="">(307) 555-0133</td>
                                    <td class="text-center">
                                        <a class="btn btn-link" href="javascript:void(0)">View</a>
                                    </td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th title="User"></th>
                                    <th title="Email"></th>
                                    <th title="Contact-Number"></th>
                                    <th title="More Details"></th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="card">
                <div class="flex-wrap card-header d-flex justify-content-between">
                    <div class="header-title">
                        <h4>{{ __('appointment.upappoints') }}</h4>
                        <p class="mb-0">
                            <svg class ="me-2" width="24" height="24" viewBox="0 0 24 24">
                                <path fill="#17904b"
                                    d="M13,20H11V8L5.5,13.5L4.08,12.08L12,4.16L19.92,12.08L18.5,13.5L13,8V20Z" />
                            </svg>
                            16% this month
                        </p>
                    </div>
                </div>
                <div class="card-body">
                    <div class="d-flex profile-media align-items-top">
                        <div class="mt-1 profile-dots-pills border-primary"></div>
                        <div class="ms-4">
                            <h6 class="mb-1 ">Cameron Williamson - <span
                                    class="text-primary">{{ __('appointment.dentist') }}</span></h6>
                            <span class="mb-0">11 Jul 8:10 PM</span>
                        </div>
                    </div>
                    <div class="d-flex profile-media align-items-top">
                        <div class="mt-1 profile-dots-pills border-primary"></div>
                        <div class="ms-4">
                            <h6 class="mb-1 ">Brooklyn Simmons - <span
                                    class="text-primary">{{ __('appointment.orthopedic') }}</span></h6>
                            <span class="mb-0">11 Jul 11 PM</span>
                        </div>
                    </div>

                    <div class="d-flex profile-media align-items-top">
                        <div class="mt-1 profile-dots-pills border-primary"></div>
                        <div class="ms-4">
                            <h6 class="mb-1 ">Leslie Alexander - <span
                                    class="text-primary">{{ __('appointment.neurology') }}</span></h6>
                            <span class="mb-0">11 Jul 1:21 AM</span>
                        </div>
                    </div>
                    <div class="d-flex profile-media align-items-top">
                        <div class="mt-1 profile-dots-pills border-primary"></div>
                        <div class="ms-4">
                            <h6 class="mb-1 ">Robbin Doe - <span
                                    class="text-primary">{{ __('appointment.ent') }}</span></h6>
                            <span class="mb-0">11 Jul 4:30 AM</span>
                        </div>
                    </div>
                    <div class="mb-1 d-flex profile-media align-items-top">
                        <div class="mt-1 profile-dots-pills border-primary"></div>
                        <div class="ms-4">
                            <h6 class="mb-1 ">Jane Cooper - <span
                                    class="text-primary">{{ __('appointment.cardiologist') }}</span></h6>
                            <span class="mb-0">11 Jul 4:50 AM</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
