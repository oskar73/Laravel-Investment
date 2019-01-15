<!-- Sidebar Menu Start -->
<ul class="navbar-nav iq-main-menu" id="sidebar">
    @include(config('laravel-menu.views.bootstrap-items'), [
        'items' => Menu::get('HopeUIMenu')->blog->children(),
    ])
</ul>
<!-- Sidebar Menu End -->
