<x-app-layout layout="appointment" :assets="$assets ?? []" title='book appointment' :isChoisejs="true" :isFlatpickr="true">
    @push('head')
        <link rel="stylesheet" href="{{ asset('modules/appointment/css/appointment.min.css') }}" />
        <link rel='stylesheet' href="{{ asset('vendor/fullcalendar/core/main.css') }}" />
        <link rel='stylesheet' href="{{ asset('vendor/fullcalendar/daygrid/main.css') }}" />
        <link rel='stylesheet' href="{{ asset('vendor/fullcalendar/timegrid/main.css') }}" />
        <link rel='stylesheet' href="{{ asset('vendor/fullcalendar/list/main.css') }}" />
    @endpush
    <div class="row">
        <div class="col-12">
            <x-header-breadcrumb title="Book Appointment" role="Book Appointment">
                <a href="#" class="btn btn-primary" role="button">{{ __('appointment.back') }}</a>
                <button type="button" class="btn btn-primary ms-2 " data-bs-toggle="modal"
                    data-bs-target="#add-appointment">
                    <svg class="icon-20" width="20" height="20" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                    </svg>
                    <span>{{ __('appointment.book') }}</span>
                </button>
            </x-header-breadcrumb>
        </div>
        <div class="modal fade" id="add-appointment" data-bs-keyboard="true" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">{{ __('appointment.addappoint') }}</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form id="add-form" action="javascript:void(0)" method="post">
                            <div class="d-flex flex-column align-items-start">
                                <input type="hidden" name="id">
                                <input type="hidden" name="appointment_type">
                                <div class=" w-100" id="v-pills-tabContent">
                                    <div class="fade active show" id="-3">
                                        <div class="row g-3 align-items-center form-group">
                                            <div class="col-2">
                                                <label for="addtitle"
                                                    class="col-form-label">{{ __('appointment.title') }}</label>
                                            </div>
                                            <div class="col-10">
                                                <input type="text" id="addtitle" class="form-control"
                                                    aria-describedby="addtitle">
                                            </div>
                                        </div>
                                        <div class="row g-3 align-items-center form-group">
                                            <div class="col-2">
                                                <label for="nametitle" class="col-form-label">
                                                    <svg class="icon-24" width="24" viewBox="0 0 24 24"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M3.09265 9.40427H20.9166" stroke="currentColor"
                                                            stroke-width="1.5" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path d="M16.4421 13.3097H16.4514" stroke="currentColor"
                                                            stroke-width="1.5" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path d="M12.0046 13.3097H12.0139" stroke="currentColor"
                                                            stroke-width="1.5" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path d="M7.5579 13.3097H7.56717" stroke="currentColor"
                                                            stroke-width="1.5" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path d="M16.4421 17.1962H16.4514" stroke="currentColor"
                                                            stroke-width="1.5" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path d="M12.0046 17.1962H12.0139" stroke="currentColor"
                                                            stroke-width="1.5" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path d="M7.5579 17.1962H7.56717" stroke="currentColor"
                                                            stroke-width="1.5" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path d="M16.0437 2V5.29078" stroke="currentColor"
                                                            stroke-width="1.5" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path d="M7.96552 2V5.29078" stroke="currentColor"
                                                            stroke-width="1.5" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M16.2383 3.57922H7.77096C4.83427 3.57922 3 5.21516 3 8.22225V17.2719C3 20.3263 4.83427 22 7.77096 22H16.229C19.175 22 21 20.3546 21 17.3475V8.22225C21.0092 5.21516 19.1842 3.57922 16.2383 3.57922Z"
                                                            stroke="currentColor" stroke-width="1.5"
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>
                                                </label>
                                            </div>
                                            <div class="col-5">
                                                <input type="text" name="start_date" id="nametitle"
                                                    class="form-control date_flatpicker"
                                                    placeholder="Select Start Date ">
                                            </div>
                                            <div class="col-5">
                                                <input type="text" name="end_date"
                                                    class="form-control date_flatpicker"
                                                    placeholder="Select End Date ">
                                            </div>
                                        </div>
                                        <div class="row g-3 align-items-center form-group">
                                            <div class="col-2">
                                                <label class="col-form-label">
                                                    <svg width="24" height="24" viewBox="0 0 24 24"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M21.2498 12.0005C21.2498 17.1095 17.1088 21.2505 11.9998 21.2505C6.8908 21.2505 2.7498 17.1095 2.7498 12.0005C2.7498 6.89149 6.8908 2.75049 11.9998 2.75049C17.1088 2.75049 21.2498 6.89149 21.2498 12.0005Z"
                                                            stroke="currentColor" stroke-width="1.5"
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                        <path d="M15.4314 14.9429L11.6614 12.6939V7.84689"
                                                            stroke="currentColor" stroke-width="1.5"
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>
                                                </label>
                                            </div>
                                            <div class="col-10 d-flex align-items-center justify-content-center">
                                                <input type="text" name="start_time"
                                                    class="form-control time_flatpicker">
                                                <span class="mx-2">{{ __('appointment.to') }}</span>
                                                <input type="text" name="end_time"
                                                    class="form-control time_flatpicker">
                                            </div>
                                        </div>
                                        <div class="row g-3 align-items-center form-group">
                                            <div class="col-2">
                                                <label class="col-form-label">
                                                    <svg class="icon-24" width="24" viewBox="0 0 24 24"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M13.7474 20.4429H21" stroke="currentColor"
                                                            stroke-width="1.5" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M12.78 3.79479C13.5557 2.86779 14.95 2.73186 15.8962 3.49173C15.9485 3.53296 17.6295 4.83879 17.6295 4.83879C18.669 5.46719 18.992 6.80311 18.3494 7.82259C18.3153 7.87718 8.81195 19.7645 8.81195 19.7645C8.49578 20.1589 8.01583 20.3918 7.50291 20.3973L3.86353 20.443L3.04353 16.9723C2.92866 16.4843 3.04353 15.9718 3.3597 15.5773L12.78 3.79479Z"
                                                            stroke="currentColor" stroke-width="1.5"
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                        <path d="M11.0208 6.00092L16.4731 10.188" stroke="currentColor"
                                                            stroke-width="1.5" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </svg>
                                                </label>
                                            </div>
                                            <div class="col-10">
                                                <select name="service"
                                                    class="form-select choices-multiple-remove-button" multiple>
                                                    <option disabled>{{ __('appointment.selectservice') }}</option>
                                                    <option value="Anesthetics">{{ __('appointment.anesthetics') }}
                                                    </option>
                                                    <option value="Cardiology">{{ __('appointment.cardiology') }}
                                                    </option>
                                                    <option value="ENT">{{ __('appointment.ent') }}</option>
                                                    <option value="Gastroenterology">
                                                        {{ __('appointment.gastroenterology') }}</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row g-3 align-items-center form-group">
                                            <div class="col-2">
                                                <label class="col-form-label">
                                                    <svg class="icon-24" width="24" viewBox="0 0 24 24"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M11.4925 2.78906H7.75349C4.67849 2.78906 2.75049 4.96606 2.75049 8.04806V16.3621C2.75049 19.4441 4.66949 21.6211 7.75349 21.6211H16.5775C19.6625 21.6211 21.5815 19.4441 21.5815 16.3621V12.3341"
                                                            stroke="currentColor" stroke-width="1.5"
                                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M8.82812 10.921L16.3011 3.44799C17.2321 2.51799 18.7411 2.51799 19.6721 3.44799L20.8891 4.66499C21.8201 5.59599 21.8201 7.10599 20.8891 8.03599L13.3801 15.545C12.9731 15.952 12.4211 16.181 11.8451 16.181H8.09912L8.19312 12.401C8.20712 11.845 8.43412 11.315 8.82812 10.921Z"
                                                            stroke="currentColor" stroke-width="1.5"
                                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                                        <path d="M15.1655 4.60254L19.7315 9.16854"
                                                            stroke="currentColor" stroke-width="1.5"
                                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </svg>
                                                </label>
                                            </div>
                                            <div class="col-10">
                                                <textarea name="description" class="form-control" rows="3" placeholder="Description"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="d-flex align-items-center justify-content-center form-check">
                            <input type="checkbox" class="form-check-input m-0" id="addconfirm2" name="confirm"
                                value="Bike">
                            <label class="form-check-label ms-2"
                                for="addconfirm2">{{ __('appointment.confirm') }}</label>
                        </div>
                    </div>
                    <div class="modal-footer border-0">
                        <button type="button" class="btn btn-danger"
                            data-bs-dismiss="modal">{{ __('appointment.discard') }}</button>
                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal"
                            name="save">{{ __('appointment.save') }}</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="edit-appointment" data-bs-keyboard="true" tabindex="-1"
            aria-labelledby="edit-appointment" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">{{ __('appointment.editappoint') }}</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="javascript:void(0)" method="post">
                            <div class="d-flex flex-column align-items-start">
                                <input type="hidden" name="id">
                                <input type="hidden" name="appointment_type">
                                <div class=" w-100" id="app-pills-tabContent">
                                    <div class="fade active show" id="v-pills-home-3">
                                        <div class="row g-3 align-items-center form-group">
                                            <div class="col-2">
                                                <label for="title-drop-1"
                                                    class="col-form-label">{{ __('appointment.title') }}</label>
                                            </div>
                                            <div class="col-10">
                                                <input type="text" id="title-drop-1" class="form-control"
                                                    aria-describedby="title-drop-1">
                                            </div>
                                        </div>
                                        <div class="row g-3 align-items-center form-group">
                                            <div class="col-2">
                                                <label class="col-form-label">
                                                    <svg class="icon-24" width="24" viewBox="0 0 24 24"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M3.09265 9.40427H20.9166" stroke="currentColor"
                                                            stroke-width="1.5" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path d="M16.4421 13.3097H16.4514" stroke="currentColor"
                                                            stroke-width="1.5" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path d="M12.0046 13.3097H12.0139" stroke="currentColor"
                                                            stroke-width="1.5" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path d="M7.5579 13.3097H7.56717" stroke="currentColor"
                                                            stroke-width="1.5" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path d="M16.4421 17.1962H16.4514" stroke="currentColor"
                                                            stroke-width="1.5" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path d="M12.0046 17.1962H12.0139" stroke="currentColor"
                                                            stroke-width="1.5" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path d="M7.5579 17.1962H7.56717" stroke="currentColor"
                                                            stroke-width="1.5" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path d="M16.0437 2V5.29078" stroke="currentColor"
                                                            stroke-width="1.5" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path d="M7.96552 2V5.29078" stroke="currentColor"
                                                            stroke-width="1.5" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M16.2383 3.57922H7.77096C4.83427 3.57922 3 5.21516 3 8.22225V17.2719C3 20.3263 4.83427 22 7.77096 22H16.229C19.175 22 21 20.3546 21 17.3475V8.22225C21.0092 5.21516 19.1842 3.57922 16.2383 3.57922Z"
                                                            stroke="currentColor" stroke-width="1.5"
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>
                                                </label>
                                            </div>
                                            <div class="col-5">
                                                <input type="text" name="start_date"
                                                    class="form-control date_flatpicker"
                                                    placeholder="Select Start Date ">
                                            </div>
                                            <div class="col-5">
                                                <input type="text" name="end_date"
                                                    class="form-control date_flatpicker"
                                                    placeholder="Select End Date ">
                                            </div>
                                        </div>
                                        <div class="row g-3 align-items-center form-group">
                                            <div class="col-2">
                                                <label class="col-form-label">
                                                    <svg width="24" height="24" viewBox="0 0 24 24"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M21.2498 12.0005C21.2498 17.1095 17.1088 21.2505 11.9998 21.2505C6.8908 21.2505 2.7498 17.1095 2.7498 12.0005C2.7498 6.89149 6.8908 2.75049 11.9998 2.75049C17.1088 2.75049 21.2498 6.89149 21.2498 12.0005Z"
                                                            stroke="currentColor" stroke-width="1.5"
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                        <path d="M15.4314 14.9429L11.6614 12.6939V7.84689"
                                                            stroke="currentColor" stroke-width="1.5"
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>
                                                </label>
                                            </div>
                                            <div class="col-10 d-flex align-items-center justify-content-center">
                                                <input type="text" name="start_time"
                                                    class="form-control time_flatpicker">
                                                <span class="mx-2">To</span>
                                                <input type="text" name="end_time"
                                                    class="form-control time_flatpicker">
                                            </div>
                                        </div>
                                        <div class="row g-3 align-items-center form-group">
                                            <div class="col-2">
                                                <label class="col-form-label">
                                                    <svg class="icon-24" width="24" viewBox="0 0 24 24"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M13.7474 20.4429H21" stroke="currentColor"
                                                            stroke-width="1.5" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M12.78 3.79479C13.5557 2.86779 14.95 2.73186 15.8962 3.49173C15.9485 3.53296 17.6295 4.83879 17.6295 4.83879C18.669 5.46719 18.992 6.80311 18.3494 7.82259C18.3153 7.87718 8.81195 19.7645 8.81195 19.7645C8.49578 20.1589 8.01583 20.3918 7.50291 20.3973L3.86353 20.443L3.04353 16.9723C2.92866 16.4843 3.04353 15.9718 3.3597 15.5773L12.78 3.79479Z"
                                                            stroke="currentColor" stroke-width="1.5"
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                        <path d="M11.0208 6.00092L16.4731 10.188" stroke="currentColor"
                                                            stroke-width="1.5" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </svg>
                                                </label>
                                            </div>
                                            <div class="col-10">
                                                <select name="service"
                                                    class="form-select choices-multiple-remove-button" multiple>
                                                    <option disabled>{{ __('appointment.selectservice') }}</option>
                                                    <option value="Anesthetics">{{ __('appointment.anesthetics') }}
                                                    </option>
                                                    <option value="Cardiology">{{ __('appointment.cardiology') }}
                                                    </option>
                                                    <option value="ENT">{{ __('appointment.ent') }}</option>
                                                    <option value="Gastroenterology">
                                                        {{ __('appointment.gastroenterology') }}</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row g-3 align-items-center form-group">
                                            <div class="col-2">
                                                <label class="col-form-label">
                                                    <svg class="icon-24" width="24" viewBox="0 0 24 24"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M11.4925 2.78906H7.75349C4.67849 2.78906 2.75049 4.96606 2.75049 8.04806V16.3621C2.75049 19.4441 4.66949 21.6211 7.75349 21.6211H16.5775C19.6625 21.6211 21.5815 19.4441 21.5815 16.3621V12.3341"
                                                            stroke="currentColor" stroke-width="1.5"
                                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M8.82812 10.921L16.3011 3.44799C17.2321 2.51799 18.7411 2.51799 19.6721 3.44799L20.8891 4.66499C21.8201 5.59599 21.8201 7.10599 20.8891 8.03599L13.3801 15.545C12.9731 15.952 12.4211 16.181 11.8451 16.181H8.09912L8.19312 12.401C8.20712 11.845 8.43412 11.315 8.82812 10.921Z"
                                                            stroke="currentColor" stroke-width="1.5"
                                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                                        <path d="M15.1655 4.60254L19.7315 9.16854"
                                                            stroke="currentColor" stroke-width="1.5"
                                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </svg>
                                                </label>
                                            </div>
                                            <div class="col-10">
                                                <textarea name="description" class="form-control" rows="3" placeholder="Description"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="d-flex align-items-center justify-content-center">
                            <input type="checkbox" id="editconfirm" name="confirm" value="Bike">
                            <label for="editconfirm" class="ms-2">{{ __('appointment.confirm') }}</label>
                        </div>
                    </div>
                    <div class="modal-footer border-0">
                        <button type="button" class="btn btn-danger"
                            data-bs-dismiss="modal">{{ __('appointment.discard') }}</button>
                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal"
                            name="save">{{ __('appointment.save') }}</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-7 calendar-s">
            <div class="card">
                <div class="card-body" id="bookingcalendar"></div>
            </div>
        </div>
        <div class="col-lg-5">
            <div class="card">
                <div class="card-header">
                    <h4 class="mb-0">{{ __('appointment.available') }}</h4>
                </div>
                <div class="card-body">
                    <div class="d-flex pb-4">
                        <div>
                            <img class="img-fluid rounded"
                                src="{{ asset('modules/appointment/images/users/01.png') }}" alt="users img">
                        </div>
                        <div class="d-flex justify-content-between align-items-center flex-grow-1">
                            <div class="ms-3">
                                <h5 class="mb-0">Ross Geller</h5>
                                <span>{{ __('appointment.anesthetics') }}</span>
                            </div>
                            <div class="d-flex justify-content-between align-items-center gap-1">
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon-24" width="24" viewBox="0 0 24 24" fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M13.1043 4.17701L14.9317 7.82776C15.1108 8.18616 15.4565 8.43467 15.8573 8.49218L19.9453 9.08062C20.9554 9.22644 21.3573 10.4505 20.6263 11.1519L17.6702 13.9924C17.3797 14.2718 17.2474 14.6733 17.3162 15.0676L18.0138 19.0778C18.1856 20.0698 17.1298 20.8267 16.227 20.3574L12.5732 18.4627C12.215 18.2768 11.786 18.2768 11.4268 18.4627L7.773 20.3574C6.87023 20.8267 5.81439 20.0698 5.98724 19.0778L6.68385 15.0676C6.75257 14.6733 6.62033 14.2718 6.32982 13.9924L3.37368 11.1519C2.64272 10.4505 3.04464 9.22644 4.05466 9.08062L8.14265 8.49218C8.54354 8.43467 8.89028 8.18616 9.06937 7.82776L10.8957 4.17701C11.3477 3.27433 12.6523 3.27433 13.1043 4.17701Z" fill="#FFD329"></path>
                            </svg>
                                </div>
                                <div>
                                    <p class="text-primary mb-0">5.0</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex">
                        <div>
                            <img class="img-fluid rounded"
                                src="{{ asset('modules/appointment/images/users/02.png') }}" alt="users img">
                        </div>
                        <div class="d-flex justify-content-between align-items-center flex-grow-1">
                            <div class="ms-3">
                                <h5 class="mb-0">Ted Mosby</h5>
                                <span>{{ __('appointment.cardiology') }}</span>
                            </div>
                            <div class="d-flex justify-content-between align-items-center gap-1">
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon-24" width="24" viewBox="0 0 24 24" fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M13.1043 4.17701L14.9317 7.82776C15.1108 8.18616 15.4565 8.43467 15.8573 8.49218L19.9453 9.08062C20.9554 9.22644 21.3573 10.4505 20.6263 11.1519L17.6702 13.9924C17.3797 14.2718 17.2474 14.6733 17.3162 15.0676L18.0138 19.0778C18.1856 20.0698 17.1298 20.8267 16.227 20.3574L12.5732 18.4627C12.215 18.2768 11.786 18.2768 11.4268 18.4627L7.773 20.3574C6.87023 20.8267 5.81439 20.0698 5.98724 19.0778L6.68385 15.0676C6.75257 14.6733 6.62033 14.2718 6.32982 13.9924L3.37368 11.1519C2.64272 10.4505 3.04464 9.22644 4.05466 9.08062L8.14265 8.49218C8.54354 8.43467 8.89028 8.18616 9.06937 7.82776L10.8957 4.17701C11.3477 3.27433 12.6523 3.27433 13.1043 4.17701Z" fill="#FFD329"></path>
                            </svg>
                                </div>
                                <div>
                                    <p class="text-primary mb-0">4.5</p>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="card ">
                <div class="card-header">
                    <h4 class="mb-0">{{ __('appointment.map') }}</h4>
                </div>
                <div class="card-body">
                    <div style="width: 100%; overflow: hidden; height: 300px;">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d39797.07748547086!2d5.46683904751879!3d51.433965676849986!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c6d90575ca5e3d%3A0x55989f5f344b006!2sPrins+Hendrikstraat+5!5e0!3m2!1snl!2snl!4v1392716144537"
                            style="border:0; margin-top: -150px; height: 600px; width: 100%;">
                        </iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @push('scripts')
        <script src="{{ asset('js/plugins/bookappointment.js') }}"></script>
        <script src="{{ asset('vendor/fullcalendar/core/main.js') }}"></script>
        <script src="{{ asset('vendor/fullcalendar/daygrid/main.js') }}"></script>
        <script src="{{ asset('vendor/fullcalendar/timegrid/main.js') }}"></script>
        <script src="{{ asset('vendor/fullcalendar/list/main.js') }}"></script>
        <script src="{{ asset('vendor/fullcalendar/interaction/main.js') }}"></script>
        <script src="{{ asset('vendor/moment.min.js') }}"></script>
        <script src="{{ asset('js/plugins/calender.js') }}"></script>
    @endpush
</x-app-layout>
