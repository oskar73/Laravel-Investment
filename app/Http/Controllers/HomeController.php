<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Spatie\Permission\Models\Role;

class HomeController extends Controller
{
    /*
     * Dashboard Pages Routs
     */
    public function index(Request $request): View
    {
        $assets = ['chart', 'animation'];
        return view('dashboards.dashboard', compact('assets'));
    }

    public function index1(Request $request): View
    {
        $assets = ['chart', 'animation'];
        return view('dashboards.alternate_dashboard', compact('assets'));
    }
    /*
     * Menu Style Routs
     */
    public function horizontal(Request $request): View
    {
        $assets = ['chart', 'animation'];
        return view('dashboards.horizontal',compact('assets'));
    }
    public function dualHorizontal(Request $request): View
    {
        $assets = ['chart', 'animation'];
        return view('dashboards.dual-horizontal',compact('assets'));
    }
    public function dualCompact(Request $request): View
    {
        $assets = ['chart', 'animation'];
        return view('dashboards.dual-compact',compact('assets'));
    }
    public function boxed(Request $request): View
    {
        $assets = ['chart', 'animation'];
        return view('dashboards.boxed',compact('assets'));
    }
    public function boxedFancy(Request $request): View
    {
        $assets = ['chart', 'animation'];
        return view('dashboards.boxed-fancy',compact('assets'));
    }
    public function boxedFixed(Request $request): View
    {
        $assets = ['chart', 'animation'];
        return view('dashboards.boxed-fixed',compact('assets'));
    }

    /*
     * Pages Routs
     */
    public function billing(Request $request): View
    {
        return view('special-pages.billing');
    }

    public function calender(Request $request): View
    {
        $assets = ['calender'];
        return view('special-pages.calender',compact('assets'));
    }

    public function kanban(Request $request): View
    {
        return view('special-pages.kanban');
    }

    public function pricing(Request $request): View
    {
        return view('special-pages.pricing');
    }

    public function timeline(Request $request): View
    {
        return view('special-pages.timeline');
    }


    /*
     * Widget Routs
     */
    public function widgetBasic(Request $request): View
    {
        return view('widget.widget-basic');
    }
    public function widgetChart(Request $request): View
    {
        $assets = ['chart'];
        return view('widget.widget-chart', compact('assets'));
    }
    public function widgetCard(Request $request): View
    {
        return view('widget.widget-card');
    }

    /*
     * Maps Routs
     */
    public function google(Request $request): View
    {
        return view('maps.google');
    }
    public function vector(Request $request): View
    {
        return view('maps.vector');
    }

    /*
     * Plugins Routs
     */
    public function apexcharts(Request $request): View
    {
        return view('plugins.apexcharts');
    }
    public function buttonHover(Request $request): View
    {
        return view('plugins.button-hover');
    }
    public function choiseJs(Request $request): View
    {
        return view('plugins.choise-js');
    }
    public function flatpickr(Request $request): View
    {
        return view('plugins.flatpickr');
    }
    public function fslightbox(Request $request): View
    {
        return view('plugins.fslightbox');
    }
    public function galleryHover(Request $request): View
    {
        return view('plugins.gallery-hover');
    }
    public function imageCroper(Request $request): View
    {
        return view('plugins.image-croper');
    }
    public function loader(Request $request): View
    {
        return view('plugins.loader');
    }
    public function quillEditor(Request $request): View
    {
        return view('plugins.quill-editor');
    }
    public function rating(Request $request): View
    {
        return view('plugins.rating');
    }
    public function select2(Request $request): View
    {
        return view('plugins.select2');
    }
    public function sweetAlert(Request $request): View
    {
        return view('plugins.sweet-alert');
    }
    public function uiColor(Request $request): View
    {
        return view('plugins.ui-color');
    }
    public function uppy(Request $request): View
    {
        return view('plugins.uppy');
    }
     public function treeView(Request $request): View
    {
        return view('plugins.tree-view');
    }

    /*
     * default Auth Routs
     */
    public function signin(Request $request): View
    {
        $roles = Role::where('status',1)->get();
        return view('auth.login',compact('roles'));
    }
    public function signup(Request $request): View
    {
        return view('auth.register');
    }
    public function confirmmail(Request $request): View
    {
        return view('auth.confirm-mail');
    }
    public function lockscreen(Request $request): View
    {
        return view('auth.lock-screen');
    }
    public function resetPassword(Request $request): View
    {
        return view('auth.forgot-password');
    }
    public function userPrivacySetting(Request $request): View
    {
        return view('auth.user-privacy-setting');
    }
    /*
     * animated Page Routs
     */

    public function animatedSignin(Request $request): View
    {
        return view('auth.pro.animated.signin');
    }
    public function animatedSignup(Request $request): View
    {
        return view('auth.pro.animated.signup');
    }
    public function animatedEmail(Request $request): View
    {
        return view('auth.pro.animated.email');
    }
    public function animatedLockScreen(Request $request): View
    {
        return view('auth.pro.animated.lockscreen');
    }
    public function animatedResetPassword(Request $request): View
    {
        return view('auth.pro.animated.resetpassword');
    }
    public function animatedTwoFactor(Request $request): View
    {
        return view('auth.pro.animated.twofactor');
    }
    public function animatedAccountDeactivate(Request $request): View
    {
        return view('auth.pro.animated.account-deactivate');
    }

       /*
     * Simple Page Routs
     */
    public function simpleSignin(Request $request): View
    {
        return view('auth.pro.simple.signin');
    }
    public function simpleSignup(Request $request): View
    {
        return view('auth.pro.simple.signup');
    }


    /*
     * Error Page Routs
     */

    public function error404(Request $request): View
    {
        return view('errors.error404');
    }

    public function error500(Request $request): View
    {
        return view('errors.error500');
    }
    public function maintenance(Request $request): View
    {
        return view('errors.maintenance');
    }

    /*
     * uisheet Page Routs
     */
    public function uisheet(Request $request): View
    {
        return view('uisheet');
    }

    /*
     * Form Page Routs
     */
    public function element(Request $request): View
    {
        return view('forms.element');
    }

    public function wizard(Request $request): View
    {
        return view('forms.wizard');
    }

    public function validation(Request $request): View
    {
        return view('forms.validation');
    }

     /*
     * Table Page Routs
     */
    public function bootstrapTable(Request $request): View
    {
        return view('table.bootstrap-table');
    }

    public function dataTable(Request $request): View
    {
        return view('table.data-table');
    }

    public function borderTable(Request $request): View
    {
        return view('table.border-table');
    }

    public function fancyTable(Request $request): View
    {
        return view('table.fancy-table');
    }
    public function fixedTable(Request $request): View
    {
        return view('table.fixed-table');
    }

    /*
     * Icons Page Routs
     */

    public function solid(Request $request): View
    {
        return view('icons.solid');
    }

    public function outline(Request $request): View
    {
        return view('icons.outline');
    }

    public function dualtone(Request $request): View
    {
        return view('icons.dualtone');
    }

    public function colored(Request $request): View
    {
        return view('icons.colored');
    }

    /*
     * Extra Page Routs
     */
    public function privacyPolicy(Request $request): View
    {
        return view('privacy-policy');
    }
    public function termsOfUse(Request $request): View
    {
        return view('terms-of-use');
    }
    public function blankPage(Request $request): View
    {
        return view('blankpage');
    }
}
