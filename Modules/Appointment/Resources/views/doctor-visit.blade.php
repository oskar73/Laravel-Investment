<x-app-layout layout="appointment" :assets="$assets ?? []" title="doctor-visit" :isSignaturePad="true" :isFlatpickr="true" isSelect2="true">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body d-flex justify-content-between align-items-center flex-wrap">
                    <div class="card-title mb-0">
                        <h4 class="mb-0">Doctor visit</h4>
                    </div>
                    <div class="card-action mt-2 mt-sm-0">
                        <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="true" aria-controls="collapseExample">
                            Close
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-12" >
            <div class="card collapse show" id="collapseExample">
                <div class="card-body">
                    <div class="row align-items-end justify-content-between">
                        <div class="col-lg-8">
                            <div class="form-group">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control mb-3" id="name" aria-describedby="name">
                            </div>
                            <div class="form-group">
                                <label for="department" class="form-label">Department</label>
                                <select class="form-select" aria-label="Default select example" id="department">
                                    <option selected>select department</option>
                                    <option value="1">Anesthesiologists</option>
                                    <option value="2">Cardiologists</option>
                                    <option value="3">Dermatologists</option>
                                    <option value="4">Gastroenterologists</option>
                                    <option value="5">Hematologists</option>
                                    <option value="6">Internists</option>
                                    <option value="7">Medical Geneticists</option>
                                    <option value="8">Nephrologists</option>
                                    <option value="9">Neurologists</option>
                                    <option value="10">Ophthalmologists</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="time" class="form-label">In Time</label>
                                <input type="text" name="start" id="time" class="form-control time_flatpicker flatpickr-input active" placeholder="In Time" readonly="readonly">
                            </div>
                            <div class="form-group mb-0">
                                <label for="out" class="form-label">Out Time</label>
                                <input type="text" name="start" id="out" class="form-control time_flatpicker flatpickr-input active" placeholder="Out Time" readonly="readonly">
                            </div>
                        </div>
                        <div class="col-lg-4 mt-4 mt-lg-0">
                        <h5 class="text-center mb-4">Signature</h5>
                        <div class="text-center">
                        <canvas id="visitsignature" class="roundCorners" style="position: relative; margin: 0; padding: 0; max-width:100%"></canvas>
                        </div>
                        <div class="text-center mt-4">
                            <button type="button" class="btn btn-primary">Save</button>
                            <button type="button" class="btn btn-danger ms-3" id="clear-sign">Clear</button>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="card card-body px-0">
                <div class="table-responsive">
                    <table class="table-striped table table py-3" role="grid" data-toggle="doctor_visit"  >
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Department</th>
                                <th>In Time</th>
                                <th>Out Time</th>
                                <th>Status</th>
                                <th>signature</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><h6>Jhon Doe</h6></td>
                                <td>Anesthesiologists</td>
                                <td>--</td>
                                <td>--</td>
                                <td><div class="text-white  badge rounded-pill bg-danger">Doctor Out</div></td>
                                <td><img src="{{asset('modules/appointment/images/signature/01.svg')}}" class="avatar-50 sing-img" alt="sign"></td>
                            </tr>
                            <tr>
                                <td><h6>Marcelo Vieira </h6></td>
                                <td>Endocrinologists</td>
                                <td>08:00 AM</td>
                                <td>--</td>
                                <td><div class="text-white badge rounded-pill bg-success">Doctor In</div></td>
                                <td><img src="{{asset('modules/appointment/images/signature/02.svg')}}" class="avatar-50 sing-img" alt="sign"></td>
                            </tr>
                            <tr>
                                <td><h6>Anne Hathaway </h6></td>
                                <td>Gastroenterologists</td>
                                <td>02:00 PM</td>
                                <td>06:00 PM</td>
                                <td><div class="text-white badge rounded-pill bg-danger">Doctor Out</div></td>
                                <td><img src="{{asset('modules/appointment/images/signature/03.svg')}}" class="avatar-50 sing-img" alt="sign"></td>
                            </tr>
                            <tr>
                                <td><h6>Ella Mai</h6></td>
                                <td>Hematologists</td>
                                <td>04:00 PM</td>
                                <td>08:00 PM</td>
                                <td><div class="text-white badge rounded-pill bg-success">Doctor In</div></td>
                                <td><img src="{{asset('modules/appointment/images/signature/04.svg')}}" class="avatar-50 sing-img" alt="sign"></td>
                            </tr>
                            <tr>
                                <td><h6>Willow Smith</h6></td>
                                <td>Internists</td>
                                <td>08:00 AM</td>
                                <td>12:00 PM</td>
                                <td><div class="text-white badge rounded-pill bg-success">Doctor In</div></td>
                                <td><img src="{{asset('modules/appointment/images/signature/05.svg')}}" class="avatar-50 sing-img" alt="sign"></td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th title="Name"></th>
                                <th title="Department"></th>
                                <th title="In Time"></th>
                                <th title="Out Time"></th>
                                <th></th>
                                <th></th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
