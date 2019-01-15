<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\AppSetting;

// Import laravel cache class
use Illuminate\Support\Facades\Cache;

class GuestLayout extends Component
{
    public $setting;

    public $layout, $assets, $title;

    public $isBanner, $isSidebar, $isNavbar, $isPageContainer;

    public $isTour, $isMasonry, $isFlatpickr, $isVectorMap, $isFslightbox, $isSweetalert, $isChoisejs, $isSelect2, $isFormWizard, $isQuillEditor, $isCircleProgress, $isNoUISlider, $isSignaturePad, $isUppy, $isSwiperSlider, $isCropperjs, $isBarRatting, $isPrism, $isBtnHover,$isTreeView;

    public $modalJs;

    public function __construct($layout = '', $title= false, $assets = [], $modalJs = false, $isBanner = false, $isSidebar = true, $isNavbar = true, $isPageContainer = true, $isTour = false, $isMasonry = false, $isFlatpickr = false, $isVectorMap = false, $isFslightbox = false, $isSweetalert = false, $isChoisejs = false, $isSelect2 = false, $isFormWizard = false, $isQuillEditor = false, $isCircleProgress = false, $isNoUISlider = false, $isSignaturePad = false, $isUppy = false, $isSwiperSlider = false, $isCropperjs = false, $isBarRatting = false, $isPrism = false, $isBtnHover = false, $isTreeView = false){
        // Setting Object
        // Cache::flush('layout_setting');
        Cache::remember('layout_setting', 600, function () {
            return AppSetting::active()->setting('layout_setting', true)->first();
        });
        $this->setting = Cache::get('layout_setting');

        // Layout Name
        $this->layout = $layout;

        /*
         * Props name
         */

        // General Props
        $this->assets           = $assets;
        $this->title            = $title;

        // Setting Offcanvas Props
        $this->isSidebar        = $isSidebar;
        $this->isNavbar         = $isNavbar;
        $this->isBanner         = $isBanner;
        $this->isPageContainer  = $isPageContainer;

        // Plugins Enable/Disable Props
        $this->isTour           = $isTour;
        $this->isSelect2        = $isSelect2;
        $this->isMasonry        = $isMasonry;
        $this->isFlatpickr      = $isFlatpickr;
        $this->isVectorMap      = $isVectorMap;
        $this->isFslightbox     = $isFslightbox;
        $this->isSweetalert     = $isSweetalert;
        $this->isChoisejs       = $isChoisejs;
        $this->isFormWizard     = $isFormWizard;
        $this->isQuillEditor    = $isQuillEditor;
        $this->isCircleProgress = $isCircleProgress;
        $this->isNoUISlider     = $isNoUISlider;
        $this->isSignaturePad   = $isSignaturePad;
        $this->isUppy           = $isUppy;
        $this->isSwiperSlider   = $isSwiperSlider;
        $this->isCropperjs      = $isCropperjs;
        $this->isBarRatting     = $isBarRatting;
        $this->isPrism          = $isPrism;
        $this->isBtnHover       = $isBtnHover;
        $this->isTreeView       = $isTreeView;

        // Custom Laravel Model Render Script Props
        $this->modalJs          = $modalJs;
    }
    /**
     * Get the view / contents that represents the component.
     *
     * @return \Illuminate\View\View
     */
    public function render()
    {
        return view('layouts.dashboard.guest');
    }
}
