<?php

namespace Modules\LandingPages\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class LandingPagesController extends Controller
{
    /**
     * Landing Page Routs
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        return view('landingpages::index');
    }
    public function blog(Request $request)
    {
        return view('landingpages::blog');
    }
    public function about(Request $request)
    {
        return view('landingpages::about');
    }
    public function blog_detail(Request $request)
    {
        return view('landingpages::blog-detail');
    }
    public function contact(Request $request)
    {
        return view('landingpages::contact-us');
    }
    public function ecommerce(Request $request)
    {
        return view('landingpages::ecommerce-landing-page');
    }
    public function faq(Request $request)
    {
        return view('landingpages::faq');
    }
    public function feature(Request $request)
    {
        return view('landingpages::feature');
    }
    public function pricing(Request $request)
    {
        return view('landingpages::pricing');
    }
    public function saas(Request $request)
    {
        return view('landingpages::saas-marketing-landing-page');
    }
    public function shop(Request $request)
    {
        return view('landingpages::shop');
    }
    public function shop_detail(Request $request)
    {
        return view('landingpages::shop-detail');
    }
    public function software(Request $request)
    {
        return view('landingpages::software-landing-page');
    }
    public function startup(Request $request)
    {
        return view('landingpages::startup-landing-page');
    }
}
