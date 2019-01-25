<?php

namespace Modules\Appointment\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\View\View;

class AppointmentController extends Controller
{
    public function index(Request $request): View
    {
        return view('appointment::index');
    }

    public function bookAppointment(Request $request): View
    {
        return view('appointment::book-appointment');
    }

    public function doctorVisit(Request $request): View
    {
        return view('appointment::doctor-visit');
    }
}
