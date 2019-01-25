<?php

namespace App\Http\Middleware;

use App\Trait\HorizontalMenu;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class GenerateHorizontalMenus
{
    use HorizontalMenu;
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        \Menu::make('HopeUIHorizontalMenu', function ($menu) {

            // Home
            $home = $this->createHomeMenu($menu);

            // Submenu-Home - Child
            $this->childMain($home, [
                'title' => 'Dashboard',
                'route' => 'dashboards',
                'active' => 'dashboards',
                'order' => 10,
            ]);
            $this->childMain($home, [
                'title' => 'Alternate Dashboard',
                'route' => 'dashboard.alternate',
                'active' => 'alternate-dashboard',
                'order' => 10,
            ]);

            // Menu_style
            $menu_style = $this->parentMenu($home, [
                'title' => 'Menu Style',
                'nickname'  => 'menustyle',
                'order' => 10,
            ]);

            // Submenu-Menu_Style - Child
            $this->childMain($menu_style, [
                'title' =>  'Horizontal',
                'route' =>  'menu-style.horizontal',
            ]);
            $this->childMain($menu_style, [
                'title' => 'Dual Horizontal',
                'route' => 'menu-style.dual-horizontal'
            ]);
            $this->childMain($menu_style, [
                'title' => 'Dual Compact',
                'route' => 'menu-style.dual-compact'
            ]);
            $this->childMain($menu_style, [
                'title' => 'Boxed Horizontal',
                'route' => 'menu-style.boxed'
            ]);
            $this->childMain($menu_style, [
                'title' => 'Boxed Fancy',
                'route' => 'menu-style.boxed-fancy'
            ]);

            // Pages
            $page = $this->parentMenu($menu, [
                'icon' => '<svg class="icon-20" width="20" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path opacity="0.4" d="M16.191 2H7.81C4.77 2 3 3.78 3 6.83V17.16C3 20.26 4.77 22 7.81 22H16.191C19.28 22 21 20.26 21 17.16V6.83C21 3.78 19.28 2 16.191 2" fill="currentColor"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M8.07999 6.64999V6.65999C7.64899 6.65999 7.29999 7.00999 7.29999 7.43999C7.29999 7.86999 7.64899 8.21999 8.07999 8.21999H11.069C11.5 8.21999 11.85 7.86999 11.85 7.42899C11.85 6.99999 11.5 6.64999 11.069 6.64999H8.07999ZM15.92 12.74H8.07999C7.64899 12.74 7.29999 12.39 7.29999 11.96C7.29999 11.53 7.64899 11.179 8.07999 11.179H15.92C16.35 11.179 16.7 11.53 16.7 11.96C16.7 12.39 16.35 12.74 15.92 12.74ZM15.92 17.31H8.07999C7.77999 17.35 7.48999 17.2 7.32999 16.95C7.16999 16.69 7.16999 16.36 7.32999 16.11C7.48999 15.85 7.77999 15.71 8.07999 15.74H15.92C16.319 15.78 16.62 16.12 16.62 16.53C16.62 16.929 16.319 17.27 15.92 17.31Z" fill="currentColor"></path></svg>',
                'title' => 'Pages',
                'nickname' => 'page',
                'order' => 10
            ]);

            // Special Pages
            $special_pages = $this->parentMenu($page, [
                'title' => 'Special Pages',
                'nickname' => 'special_pages',
                'order' => 10
            ]);

            // Submenu-Special Pages - Child
            $this->childMain($special_pages, [
                'title' => 'Billing',
                'route' => 'special-pages.billing',
                'active' => 'special-pages/billing',
            ]);
            $this->childMain($special_pages, [
                'title' => 'Calendar',
                'route' => 'special-pages.calender',
                'active' => 'special-pages/calender',
            ]);
            $this->childMain($special_pages, [
                'title' => 'Kanban',
                'route' => 'special-pages.kanban',
                'active' => 'special-pages/kanban',
            ]);
            $this->childMain($special_pages, [
                'title' => 'Pricing',
                'route' => 'special-pages.pricing',
                'active' => 'special-pages/pricing',
            ]);
            $this->childMain($special_pages, [
                'title' => 'Timeline',
                'route' => 'special-pages.timeline',
                'active' => 'special-pages/timeline',
            ]);

            // Main Auth Skins
            $auth_menu = $this->parentMenu($page, [
                'title' => 'Auth Skins',
                'nickname' => 'auth',
                'order' => 1010
            ]);

            // Default Auth Parent
            $auth_default_menu = $this->parentMenu($auth_menu, [
                'title' => 'Default',
                'order' => 1010,
                'nickname' => 'auth_default',
            ]);

            // Default Menu Auth
            $this->childMain($auth_default_menu, [
                'title' => 'Sign In',
                'route' => 'auth.login',
            ]);
            $this->childMain($auth_default_menu, [
                'title' => 'Sign Up',
                'route' => 'auth.register',
            ]);
            $this->childMain($auth_default_menu, [
                'title' => 'Email Verified',
                'route' => 'auth.confirm-mail',
            ]);
            $this->childMain($auth_default_menu, [
                'title' => 'Reset Password',
                'route' => 'auth.forgot-password',
            ]);
            $this->childMain($auth_default_menu, [
                'title' => 'Lock Screen',
                'route' => 'auth.lock-screen',
            ]);

            // Animated Auth Parent
            $auth_animated_menu = $this->parentMenu($auth_menu, [
                'title' => 'Animated',
                'nickname' => 'auth_animated',
                'order' => 1010,
            ]);

            // Animated Menu Auth
            $this->childMain($auth_animated_menu, [
                'title' => 'Sign In',
                'route' => 'animated.signin',
            ]);
            $this->childMain($auth_animated_menu, [
                'title' => 'Sign Up',
                'route' => 'animated.signup',
            ]);
            $this->childMain($auth_animated_menu, [
                'title' => 'Email',
                'route' => 'animated.email',
            ]);
            $this->childMain($auth_animated_menu, [
                'title' => 'Lock Screen',
                'route' => 'animated.lock-screen',
            ]);
            $this->childMain($auth_animated_menu, [
                'title' => 'Reset Password',
                'route' => 'animated.reset-password',
            ]);
            $this->childMain($auth_animated_menu, [
                'title' => 'Two factor',
                'route' => 'animated.two-factor',
            ]);
            $this->childMain($auth_animated_menu, [
                'title' => 'Account Deactivate',
                'route' => 'animated.account-deactivate',
            ]);

            // Popup Auth Parent
            $auth_popup_menu = $this->parentMenu($auth_menu, [
                'title' => 'Popup',
                'nickname' => 'auth_popup',
                'parent' => '#auth',
                'order' => 1010,
            ]);

            // Popup Menu Auth
            $this->popupMenu($auth_popup_menu, [
                'title' => 'Login',
                'order' => 1010,
                'extra' => [
                    'toggle' => 'modal',
                    'target' => '#staticBackdrop'
                ]
            ]);
            $this->popupMenu($auth_popup_menu, [
                'title' => 'Register',
                'order' => 1010,
                'extra' => [
                    'toggle' => 'modal',
                    'target' => '#staticBackdrop1'
                ]
            ]);

            // Simple Auth Parent
            $auth_simple_menu = $this->parentMenu($auth_menu, [
                'title' => 'Simple',
                'nickname' => 'auth_simple',
                'parent' => '#auth',
                'order' => 1010,
            ]);

            // Simple Menu Auth
            $this->childMain($auth_simple_menu, [
                'title' => 'Login',
                'route' => 'simple.signin',
            ]);
            $this->childMain($auth_simple_menu, [
                'title' => 'Register',
                'route' => 'simple.signup',
            ]);


            // Users
            $users = $this->parentMenu($page, [
                'title' => 'Users',
                'nickname' => 'users',
                'order' => 1010
            ]);

            // Submenu-users - Child
            $this->childMain($users, [
                'title' => 'User Profile',
                'route' => ['users.show', 1],
                'active' => 'users/1'
            ]);
            $this->childMain($users, [
                'title' => 'Add User',
                'route' => 'users.create',
                'active' => 'users/create'
            ]);
            $this->childMain($users, [
                'title' => 'User List',
                'route' => 'users.index',
                'active' => 'users'
            ]);

            // Utilities
            $utility = $this->parentMenu($page, [
                'title' => 'Utilities',
                'nickname' => 'utility',
                'order' => 1010
            ]);

            // Submenu-Utilities - Child
            $this->childMain($utility, [
                'title' => 'Error 404',
                'route' => 'errors.error404',
                'active' => 'errors/error404'
            ]);
            $this->childMain($utility, [
                'title' => 'Error 500',
                'route' => 'errors.error500',
                'active' => 'errors/error500'
            ]);
            $this->childMain($utility, [
                'title' => 'Maintenance',
                'route' => 'errors.maintenance',
                'active' => 'errors/maintenance'
            ]);

             // Plugins
             $plugin = $this->parentMenu($page, [
                'title' => 'Plugins',
                'nickname' => 'plugin',
                'order' => 1010
            ]);

            // Submenu-Plugins - Child
            $this->childMain($plugin, [
                'title' => 'Apexcharts',
                'route' => 'plugins.apexcharts',
                'active' => 'plugins/apexcharts'
            ]);
            $this->childMain($plugin, [
                'title' => 'Button Hover',
                'route' => 'plugins.button-hover',
                'active' => 'plugins/button-hover'
            ]);
            $this->childMain($plugin, [
                'title' => 'Choice JS',
                'route' => 'plugins.choise-js',
                'active' => 'plugins/choise-js'
            ]);
            $this->childMain($plugin, [
                'title' => 'Flatpickr',
                'route' => 'plugins.flatpickr',
                'active' => 'plugins/flatpickr'
            ]);
            $this->childMain($plugin, [
                'title' => 'Fslightbox',
                'route' => 'plugins.fslightbox',
                'active' => 'plugins/fslightbox'
            ]);
            $this->childMain($plugin, [
                'title' => 'Gallery Hover',
                'route' => 'plugins.gallery-hover',
                'active' => 'plugins/gallery-hover'
            ]);
            $this->childMain($plugin, [
                'title' => 'Image Croper',
                'route' => 'plugins.image-croper',
                'active' => 'plugins/image-croper'
            ]);
            $this->childMain($plugin, [
                'title' => 'Loader',
                'route' => 'plugins.loader',
                'active' => 'plugins/loader'
            ]);
            $this->childMain($plugin, [
                'title' => 'Rating',
                'route' => 'plugins.rating',
                'active' => 'plugins/rating'
            ]);
            $this->childMain($plugin, [
                'title' => 'Select2',
                'route' => 'plugins.select2',
                'active' => 'plugins/select2'
            ]);
            $this->childMain($plugin, [
                'title' => 'Sweetalert',
                'route' => 'plugins.sweet-alert',
                'active' => 'plugins/sweet-alert'
            ]);
            $this->childMain($plugin, [
                'title' => 'Quill',
                'route' => 'plugins.quill-editor',
                'active' => 'plugins/quill-editor'
            ]);
            $this->childMain($plugin, [
                'title' => 'Uppy',
                'route' => 'plugins.uppy',
                'active' => 'plugins/uppy'
            ]);
            $this->childMain($plugin, [
                'title' => 'Tree View',
                'route' => 'plugins.tree-view',
                'active' => 'plugins/tree-view'
            ]);

            // Elements
            $element = $this->parentMenu($menu, [
                'icon' => '<svg class="icon-20" width="20" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path opacity="0.4" d="M11.9912 18.6215L5.49945 21.8641C5.00921 22.1302 4.39768 21.9525 4.12348 21.4643C4.0434 21.3108 4.00106 21.1402 4 20.9668V13.7088C4 14.4284 4.40573 14.8726 5.47299 15.3701L11.9912 18.6215Z" fill="currentColor"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M8.89526 2H15.0695C17.7773 2 19.9735 3.06605 20 5.79337V20.9668C19.9989 21.1374 19.9565 21.3051 19.8765 21.4554C19.7479 21.7007 19.5259 21.8827 19.2615 21.9598C18.997 22.0368 18.7128 22.0023 18.4741 21.8641L11.9912 18.6215L5.47299 15.3701C4.40573 14.8726 4 14.4284 4 13.7088V5.79337C4 3.06605 6.19625 2 8.89526 2ZM8.22492 9.62227H15.7486C16.1822 9.62227 16.5336 9.26828 16.5336 8.83162C16.5336 8.39495 16.1822 8.04096 15.7486 8.04096H8.22492C7.79137 8.04096 7.43991 8.39495 7.43991 8.83162C7.43991 9.26828 7.79137 9.62227 8.22492 9.62227Z" fill="currentColor"></path></svg>',
                'title' => 'Elements',
                'nickname' => 'element',
                'order' => 10
            ]);

            // Components
            $this->mainRoute($element, [
                'title' => 'Components',
                'nickname' => 'components',
                'route' => 'uisheet',
                'active' => '/',
                'order' => 1110
            ]);

            // Colors
            $this->mainRoute($element, [
                'title' => 'Colors',
                'nickname' => 'colors',
                'route' => 'plugins.ui-color',
                'active' => 'plugins/ui-color',
                'order' => 1110
            ]);

            // Widget
            $widget = $this->parentMenu($element, [
                'title' => 'Widget',
                'nickname' => 'widget',
                'order' => 1110
            ]);

            // Submenu-Widget - Child
            $this->childMain($widget, [
                'title' => 'Widget Basic',
                'route' => 'widget.widget-basic',
                'active' => 'widget/widget-basic'
            ]);
            $this->childMain($widget, [
                'title' => 'Widget Chart',
                'route' => 'widget.widget-chart',
                'active' => 'widget/widget-chart'
            ]);
            $this->childMain($widget, [
                'title' => 'Widget Card',
                'route' => 'widget.widget-card',
                'active' => 'widget/widget-card'
            ]);

            // Maps
            $map = $this->parentMenu($element, [
                'title' => 'Maps',
                'nickname' => 'map',
                'order' => 1110
            ]);

            // Submenu-Maps - Child
            $this->childMain($map, [
                'title' => 'Google',
                'route' => 'maps.google',
                'active' => 'maps/google'
            ]);

            // Forms
            $form = $this->parentMenu($element, [
                'title' => 'Form',
                'nickname' => 'form',
                'order' => 1110
            ]);

            // Submenu-Forms - Child
            $this->childMain($form, [
                'title' => 'Element',
                'route' => 'forms.element',
                'active' => 'forms/element'
            ]);
            $this->childMain($form, [
                'title' => 'Wizard',
                'route' => 'forms.wizard',
                'active' => 'forms/wizard'
            ]);
            $this->childMain($form, [
                'title' => 'Validation',
                'route' => 'forms.validation',
                'active' => 'forms/validation'
            ]);

            // Table
            $table = $this->parentMenu($element, [
                'title' => 'Table',
                'nickname' => 'table',
                'order' => 1110
            ]);

            // Submenu-Table - Child
            $this->childMain($table, [
                'title' => 'Bootstrap Table',
                'route' => 'table.bootstrap-table',
                'active' => 'table/bootstraptable'
            ]);
            $this->childMain($table, [
                'title' => 'DataTable',
                'route' => 'table.data-table',
                'active' => 'table/datatable'
            ]);
            $this->childMain($table, [
                'title' => 'Bordered Table',
                'route' => 'table.border-table',
                'active' => 'table/bordertable'
            ]);
            $this->childMain($table, [
                'title' => 'Fancy Table',
                'route' => 'table.fancy-table',
                'active' => 'table/fancytable'
            ]);
            $this->childMain($table, [
                'title' => 'Fixed Table',
                'route' => 'table.fixed-table',
                'active' => 'table/fixedtable'
            ]);

            // Icons
            $icon = $this->parentMenu($element, [
                'title' => 'Icons',
                'nickname' => 'icon',
                'order' => 1110
            ]);

            // Submenu-Icons - Child
            $this->childMain($icon, [
                'title' => 'Solid',
                'route' => 'icons.solid',
                'active' => 'icons/solid'
            ]);
            $this->childMain($icon, [
                'title' => 'Outlined',
                'route' => 'icons.outline',
                'active' => 'icons/outline'
            ]);
            $this->childMain($icon, [
                'title' => 'Dual Tone',
                'route' => 'icons.dualtone',
                'active' => 'icons/dualtone'
            ]);


        })->sortBy('order');

        return $next($request);
    }
}
