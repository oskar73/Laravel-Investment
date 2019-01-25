<?php

namespace Modules\ECommerce\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\View\View;

class ECommerceController extends Controller
{
    public function index(Request $request): View
    {
        return view('ecommerce::index');
    }

    public function vendorDashboard(Request $request): View
    {
        return view('ecommerce::vendor-dashboard');
    }

    public function shopMain(Request $request): View
    {
        return view('ecommerce::shop-main');
    }

    public function orderProcess(Request $request): View
    {
        return view('ecommerce::order-process');
    }

    public function userProfile(Request $request): View
    {
        return view('ecommerce::user-profile');
    }

    public function userList(Request $request): View
    {
        return view('ecommerce::user-list');
    }

    public function billing(Request $request): View
    {
        return view('ecommerce::invoice');
    }

    public function products(Request $request): View
    {
        return view('ecommerce::products');
    }

    public function shopLeftFilter(Request $request): View
    {
        return view('ecommerce::shop-left-filter');
    }

    public function shopRightFilter(Request $request): View
    {
        return view('ecommerce::shop-right-filter');
    }

    public function leftSidebar(Request $request): View
    {
        return view('ecommerce::left-sidebar');
    }
    public function productDetail(Request $request): View
    {
        return view('ecommerce::product-detail');
    }

    public function productDetail360(Request $request): View
    {
        return view('ecommerce::product-detail-360');
    }

    public function productDetail3d(Request $request): View
    {
        return view('ecommerce::product-detail-3d');
    }

    public function categoriesList(Request $request): View
    {
        return view('ecommerce::categories-list');
    }

    public function wishlist(Request $request): View
    {
        return view('ecommerce::wishlist');
    }

}
