<?php

namespace Modules\Blog\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\View\View;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index(Request $request): View
    {
        return view('blog::index');
    }

    public function main(Request $request): View
    {
        return view('blog::blog-main');
    }

    public function category(Request $request): View
    {
        return view('blog::blog-category');
    }

    public function details(Request $request): View
    {
        return view('blog::blog-details');
    }

    public function grid(Request $request): View
    {
        return view('blog::blog-grid');
    }

    public function list(Request $request): View
    {
        return view('blog::blog-list');
    }

    public function trending(Request $request): View
    {
        return view('blog::blog-trending');
    }

    public function comments(Request $request): View
    {
        return view('blog::blog-comments');
    }
}
