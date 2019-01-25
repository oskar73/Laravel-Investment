<?php

namespace Modules\FileManager\Http\Controllers;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\View\View;

class FileManagerController extends Controller
{
    public function index(Request $request): View
    {
        return view('filemanager::index');
    }

    public function images(Request $request): View
    {
        return view('filemanager::image-folder');
    }

    public function videos(Request $request): View
    {
        return view('filemanager::video-folder');
    }

    public function documents(Request $request): View
    {
        return view('filemanager::document-folder');
    }

    public function allFiles(Request $request): View
    {
        return view('filemanager::all-files');
    }

    public function trash(Request $request): View
    {
        return view('filemanager::trash');
    }
}
