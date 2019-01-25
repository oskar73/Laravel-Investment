<?php

namespace Modules\Mail\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\View\View;

class MailController extends Controller
{
    public function index(Request $request): View
    {
        return view('mail::index');
    }

    public function compose(Request $request): View
    {
        return view('mail::email-compose');
    }
}
