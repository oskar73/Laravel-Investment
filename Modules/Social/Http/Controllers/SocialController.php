<?php

namespace Modules\Social\Http\Controllers;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\View\View;

class SocialController extends Controller
{
    public function index(Request $request): View
    {
        return view('social::index');
    }

    public function newsfeed(Request $request): View
    {
        return view('social::newsfeed');
    }

    public function friendList(Request $request): View
    {
        return view('social::friend-list');
    }

    public function friendRequest(Request $request): View
    {
        return view('social::friend-request');
    }

    public function friendProfile(Request $request): View
    {
        return view('social::friend-profile');
    }

    public function profileBadges(Request $request): View
    {
        return view('social::profile-badges');
    }

    public function profileImages(Request $request): View
    {
        return view('social::profile-images');
    }

    public function profileVideo(Request $request): View
    {
        return view('social::profile-video');
    }

    public function birthday(Request $request): View
    {
        return view('social::birthday');
    }

    public function notification(Request $request): View
    {
        return view('social::notification');
    }

    public function accountSetting(Request $request): View
    {
        return view('social::account-setting');
    }

    public function profileEvent(Request $request): View
    {
        return view('social::event-list');
    }

    public function eventDetail(Request $request): View
    {
        return view('social::event-detail');
    }

    public function group(Request $request): View
    {
        return view('social::group');
    }

    public function groupDetail(Request $request): View
    {
        return view('social::group-detail');
    }

    public function socialProfile(Request $request): View
    {
        return view('social::social-profile');
    }
}
