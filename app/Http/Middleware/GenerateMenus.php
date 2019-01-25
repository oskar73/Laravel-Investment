<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Trait\Menu;

class GenerateMenus
{
    use Menu;
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        \Menu::make('HopeUIMenu', function ($menu) {
            // Home Static
            $this->staticMenu($menu, ['title' => 'Home', 'order' => 0]);

            // Dashboard
            $this->mainRoute($menu, [
                'icon' => '<svg class="icon-20" width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"> <path opacity="0.4" d="M16.0756 2H19.4616C20.8639 2 22.0001 3.14585 22.0001 4.55996V7.97452C22.0001 9.38864 20.8639 10.5345 19.4616 10.5345H16.0756C14.6734 10.5345 13.5371 9.38864 13.5371 7.97452V4.55996C13.5371 3.14585 14.6734 2 16.0756 2Z" fill="currentColor"></path> <path fill-rule="evenodd" clip-rule="evenodd" d="M4.53852 2H7.92449C9.32676 2 10.463 3.14585 10.463 4.55996V7.97452C10.463 9.38864 9.32676 10.5345 7.92449 10.5345H4.53852C3.13626 10.5345 2 9.38864 2 7.97452V4.55996C2 3.14585 3.13626 2 4.53852 2ZM4.53852 13.4655H7.92449C9.32676 13.4655 10.463 14.6114 10.463 16.0255V19.44C10.463 20.8532 9.32676 22 7.92449 22H4.53852C3.13626 22 2 20.8532 2 19.44V16.0255C2 14.6114 3.13626 13.4655 4.53852 13.4655ZM19.4615 13.4655H16.0755C14.6732 13.4655 13.537 14.6114 13.537 16.0255V19.44C13.537 20.8532 14.6732 22 16.0755 22H19.4615C20.8637 22 22 20.8532 22 19.44V16.0255C22 14.6114 20.8637 13.4655 19.4615 13.4655Z" fill="currentColor"></path> </svg>',
                'title' => 'Dashboard',
                'route' => 'dashboards',
                'active' => 'dashboards',
                'order' => 10
            ]);
            $this->mainRoute($menu, [
                'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="20" viewBox="0 0 24 24" fill="none"><path opacity="0.4" d="M2 4C2 2.89543 2.89543 2 4 2H9C10.1046 2 11 2.89543 11 4V20C11 21.1046 10.1046 22 9 22H4C2.89543 22 2 21.1046 2 20V4Z" fill="currentColor"></path><path d="M13 4C13 2.89543 13.8954 2 15 2H20C21.1046 2 22 2.89543 22 4V9C22 10.1046 21.1046 11 20 11H15C13.8954 11 13 10.1046 13 9V4Z" fill="currentColor"></path><path d="M13 15C13 13.8954 13.8954 13 15 13H20C21.1046 13 22 13.8954 22 15V20C22 21.1046 21.1046 22 20 22H15C13.8954 22 13 21.1046 13 20V15Z" fill="currentColor"></path></svg>',
                'title' => 'Alternate Dashboard',
                'route' => 'dashboard.alternate',
                'active' => 'alternate-dashboard',
                'order' => 10
            ]);

            // Menu_Style
            $menu_style = $this->parentMenu($menu, [
                'icon' => '<svg class="icon-20" width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path opacity="0.4" d="M10.0833 15.958H3.50777C2.67555 15.958 2 16.6217 2 17.4393C2 18.2559 2.67555 18.9207 3.50777 18.9207H10.0833C10.9155 18.9207 11.5911 18.2559 11.5911 17.4393C11.5911 16.6217 10.9155 15.958 10.0833 15.958Z" fill="currentColor"></path><path opacity="0.4" d="M22.0001 6.37867C22.0001 5.56214 21.3246 4.89844 20.4934 4.89844H13.9179C13.0857 4.89844 12.4102 5.56214 12.4102 6.37867C12.4102 7.1963 13.0857 7.86 13.9179 7.86H20.4934C21.3246 7.86 22.0001 7.1963 22.0001 6.37867Z" fill="currentColor"></path><path d="M8.87774 6.37856C8.87774 8.24523 7.33886 9.75821 5.43887 9.75821C3.53999 9.75821 2 8.24523 2 6.37856C2 4.51298 3.53999 3 5.43887 3C7.33886 3 8.87774 4.51298 8.87774 6.37856Z" fill="currentColor"></path><path d="M21.9998 17.3992C21.9998 19.2648 20.4609 20.7777 18.5609 20.7777C16.6621 20.7777 15.1221 19.2648 15.1221 17.3992C15.1221 15.5325 16.6621 14.0195 18.5609 14.0195C20.4609 14.0195 21.9998 15.5325 21.9998 17.3992Z" fill="currentColor"></path></svg>',
                'title' => 'Menu Style',
                'nickname' => 'menu_style',
                'order' => 10
            ]);

            // Submenu-Menu_Style - Child
            $this->childMain($menu_style, [
                'shortTitle' => 'H',
                'title' => 'Horizontal',
                'route' => 'menu-style.horizontal'
            ]);
            $this->childMain($menu_style, [
                'shortTitle' => 'DH',
                'title' => 'Dual Horizontal',
                'route' => 'menu-style.dual-horizontal'
            ]);
            $this->childMain($menu_style, [
                'shortTitle' => 'DC',
                'title' => 'Dual Compact',
                'route' => 'menu-style.dual-compact'
            ]);
            $this->childMain($menu_style, [
                'shortTitle' => 'BH',
                'title' => 'Boxed Horizontal',
                'route' => 'menu-style.boxed'
            ]);
            $this->childMain($menu_style, [
                'shortTitle' => 'BF',
                'title' => 'Boxed Fancy',
                'route' => 'menu-style.boxed-fancy'
            ]);

            // Design System
            $this->mainRoute($menu, [
                'icon' => '<svg width="20" class="icon-20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M21.9964 8.37513H17.7618C15.7911 8.37859 14.1947 9.93514 14.1911 11.8566C14.1884 13.7823 15.7867 15.3458 17.7618 15.3484H22V15.6543C22 19.0136 19.9636 21 16.5173 21H7.48356C4.03644 21 2 19.0136 2 15.6543V8.33786C2 4.97862 4.03644 3 7.48356 3H16.5138C19.96 3 21.9964 4.97862 21.9964 8.33786V8.37513ZM6.73956 8.36733H12.3796H12.3831H12.3902C12.8124 8.36559 13.1538 8.03019 13.152 7.61765C13.1502 7.20598 12.8053 6.87318 12.3831 6.87491H6.73956C6.32 6.87664 5.97956 7.20858 5.97778 7.61852C5.976 8.03019 6.31733 8.36559 6.73956 8.36733Z" fill="currentColor"></path><path opacity="0.4" d="M16.0374 12.2966C16.2465 13.2478 17.0805 13.917 18.0326 13.8996H21.2825C21.6787 13.8996 22 13.5715 22 13.166V10.6344C21.9991 10.2297 21.6787 9.90077 21.2825 9.8999H17.9561C16.8731 9.90338 15.9983 10.8024 16 11.9102C16 12.0398 16.0128 12.1695 16.0374 12.2966Z" fill="currentColor"></path><circle cx="18" cy="11.8999" r="1" fill="currentColor"></circle></svg>',
                'title' => 'Design System',
                'sub_icon' => '<span class="badge rounded-pill bg-success item-name">UI</span>',
                'route' => 'uisheet',
                'target' => '_blank',
                'order' => 10
            ]);

            // Divider Line
            $this->hrLine($menu, 1000);

            // PAGES Static
            $this->staticMenu($menu, ['title' => 'PAGES', 'order' => 1000]);

            // Special Pages
            $special_pages = $this->parentMenu($menu, [
                'icon' => '<svg width="20" class="icon-20" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path opacity="0.4" d="M16.191 2H7.81C4.77 2 3 3.78 3 6.83V17.16C3 20.26 4.77 22 7.81 22H16.191C19.28 22 21 20.26 21 17.16V6.83C21 3.78 19.28 2 16.191 2" fill="currentColor"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M8.07999 6.64999V6.65999C7.64899 6.65999 7.29999 7.00999 7.29999 7.43999C7.29999 7.86999 7.64899 8.21999 8.07999 8.21999H11.069C11.5 8.21999 11.85 7.86999 11.85 7.42899C11.85 6.99999 11.5 6.64999 11.069 6.64999H8.07999ZM15.92 12.74H8.07999C7.64899 12.74 7.29999 12.39 7.29999 11.96C7.29999 11.53 7.64899 11.179 8.07999 11.179H15.92C16.35 11.179 16.7 11.53 16.7 11.96C16.7 12.39 16.35 12.74 15.92 12.74ZM15.92 17.31H8.07999C7.77999 17.35 7.48999 17.2 7.32999 16.95C7.16999 16.69 7.16999 16.36 7.32999 16.11C7.48999 15.85 7.77999 15.71 8.07999 15.74H15.92C16.319 15.78 16.62 16.12 16.62 16.53C16.62 16.929 16.319 17.27 15.92 17.31Z" fill="currentColor"></path></svg>',
                'title' => 'Special Pages',
                'nickname' => 'special_pages',
                'order' => 1010
            ]);

            // Submenu-Special_pages - Child
            $this->childMain($special_pages, [
                'shortTitle' => 'B',
                'title' => 'Billing',
                'route' => 'special-pages.billing',
                'active' => 'special-pages/billing'
            ]);
            $this->childMain($special_pages, [
                'shortTitle' => 'C',
                'title' => 'Calendar',
                'route' => 'special-pages.calender',
                'active' => 'special-pages/calender'
            ]);
            $this->childMain($special_pages, [
                'shortTitle' => 'K',
                'title' => 'Kanban',
                'route' => 'special-pages.kanban',
                'active' => 'special-pages/kanban'
            ]);
            $this->childMain($special_pages, [
                'shortTitle' => 'P',
                'title' => 'Pricing',
                'route' => 'special-pages.pricing',
                'active' => 'special-pages/pricing'
            ]);
            $this->childMain($special_pages, [
                'shortTitle' => 'T',
                'title' => 'Timeline',
                'route' => 'special-pages.timeline',
                'active' => 'special-pages/timeline'
            ]);

            // Main Auth Skins
            $auth_menu = $this->parentMenu($menu, [
                'icon' => '<svg class="icon-20" width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path opacity="0.4" d="M12.0865 22C11.9627 22 11.8388 21.9716 11.7271 21.9137L8.12599 20.0496C7.10415 19.5201 6.30481 18.9259 5.68063 18.2336C4.31449 16.7195 3.5544 14.776 3.54232 12.7599L3.50004 6.12426C3.495 5.35842 3.98931 4.67103 4.72826 4.41215L11.3405 2.10679C11.7331 1.96656 12.1711 1.9646 12.5707 2.09992L19.2081 4.32684C19.9511 4.57493 20.4535 5.25742 20.4575 6.02228L20.4998 12.6628C20.5129 14.676 19.779 16.6274 18.434 18.1581C17.8168 18.8602 17.0245 19.4632 16.0128 20.0025L12.4439 21.9088C12.3331 21.9686 12.2103 21.999 12.0865 22Z" fill="currentColor"></path><path d="M11.3194 14.3209C11.1261 14.3219 10.9328 14.2523 10.7838 14.1091L8.86695 12.2656C8.57097 11.9793 8.56795 11.5145 8.86091 11.2262C9.15387 10.9369 9.63207 10.934 9.92906 11.2193L11.3083 12.5451L14.6758 9.22479C14.9698 8.93552 15.448 8.93258 15.744 9.21793C16.041 9.50426 16.044 9.97004 15.751 10.2574L11.8519 14.1022C11.7049 14.2474 11.5127 14.3199 11.3194 14.3209Z" fill="currentColor"></path></svg>',
                'title' => 'Auth Skins',
                'nickname' => 'auth',
                'order' => 1010
            ]);

            // Default Auth Parent
            $auth_default_menu = $this->parentMenu($auth_menu, [
                'icon' => '<svg class="icon-20" width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path opacity="0.4" d="M12.0865 22C11.9627 22 11.8388 21.9716 11.7271 21.9137L8.12599 20.0496C7.10415 19.5201 6.30481 18.9259 5.68063 18.2336C4.31449 16.7195 3.5544 14.776 3.54232 12.7599L3.50004 6.12426C3.495 5.35842 3.98931 4.67103 4.72826 4.41215L11.3405 2.10679C11.7331 1.96656 12.1711 1.9646 12.5707 2.09992L19.2081 4.32684C19.9511 4.57493 20.4535 5.25742 20.4575 6.02228L20.4998 12.6628C20.5129 14.676 19.779 16.6274 18.434 18.1581C17.8168 18.8602 17.0245 19.4632 16.0128 20.0025L12.4439 21.9088C12.3331 21.9686 12.2103 21.999 12.0865 22Z" fill="currentColor"></path><path d="M11.3194 14.3209C11.1261 14.3219 10.9328 14.2523 10.7838 14.1091L8.86695 12.2656C8.57097 11.9793 8.56795 11.5145 8.86091 11.2262C9.15387 10.9369 9.63207 10.934 9.92906 11.2193L11.3083 12.5451L14.6758 9.22479C14.9698 8.93552 15.448 8.93258 15.744 9.21793C16.041 9.50426 16.044 9.97004 15.751 10.2574L11.8519 14.1022C11.7049 14.2474 11.5127 14.3199 11.3194 14.3209Z" fill="currentColor"></path></svg>',
                'title' => 'Default',
                'order' => 1010,
                'nickname' => 'auth_default',
                'parent' => '#auth'
            ]);

            // Default Menu Auth
            $this->childMain($auth_default_menu, [
                'shortTitle' => 'L',
                'title' => 'Login',
                'route' => 'auth.login',
                'order' => 1010
            ]);
            $this->childMain($auth_default_menu, [
                'shortTitle' => 'R',
                'title' => 'Register',
                'route' => 'auth.register',
                'order' => 1010
            ]);
            $this->childMain($auth_default_menu, [
                'shortTitle' => 'M',
                'title' => 'Confirm Mail',
                'route' => 'auth.confirm-mail',
                'order' => 1010
            ]);
            $this->childMain($auth_default_menu, [
                'shortTitle' => 'L',
                'title' => 'Lock Screen',
                'route' => 'auth.lock-screen',
                'order' => 1010
            ]);
            $this->childMain($auth_default_menu, [
                'shortTitle' => 'P',
                'title' => 'Recover Password',
                'route' => 'auth.forgot-password',
                'order' => 1010
            ]);

            // Animated Auth Parent
            $auth_animated_menu = $this->parentMenu($auth_menu, [
                'icon' => '<svg class="icon-20" width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path opacity="0.4" d="M12.0865 22C11.9627 22 11.8388 21.9716 11.7271 21.9137L8.12599 20.0496C7.10415 19.5201 6.30481 18.9259 5.68063 18.2336C4.31449 16.7195 3.5544 14.776 3.54232 12.7599L3.50004 6.12426C3.495 5.35842 3.98931 4.67103 4.72826 4.41215L11.3405 2.10679C11.7331 1.96656 12.1711 1.9646 12.5707 2.09992L19.2081 4.32684C19.9511 4.57493 20.4535 5.25742 20.4575 6.02228L20.4998 12.6628C20.5129 14.676 19.779 16.6274 18.434 18.1581C17.8168 18.8602 17.0245 19.4632 16.0128 20.0025L12.4439 21.9088C12.3331 21.9686 12.2103 21.999 12.0865 22Z" fill="currentColor"></path><path d="M11.3194 14.3209C11.1261 14.3219 10.9328 14.2523 10.7838 14.1091L8.86695 12.2656C8.57097 11.9793 8.56795 11.5145 8.86091 11.2262C9.15387 10.9369 9.63207 10.934 9.92906 11.2193L11.3083 12.5451L14.6758 9.22479C14.9698 8.93552 15.448 8.93258 15.744 9.21793C16.041 9.50426 16.044 9.97004 15.751 10.2574L11.8519 14.1022C11.7049 14.2474 11.5127 14.3199 11.3194 14.3209Z" fill="currentColor"></path></svg>',
                'title' => 'Animated',
                'order' => 1010,
                'nickname' => 'auth_animated',
                'parent' => '#auth'
            ]);

            // Animated Menu Auth
            $this->childMain($auth_animated_menu, [
                'shortTitle' => 'L',
                'title' => 'Sign In',
                'route' => 'animated.signin',
                'order' => 1010
            ]);
            $this->childMain($auth_animated_menu, [
                'shortTitle' => 'R',
                'title' => 'Sign Up',
                'route' => 'animated.signup',
                'order' => 1010
            ]);
            $this->childMain($auth_animated_menu, [
                'shortTitle' => 'E',
                'title' => 'Email',
                'route' => 'animated.email',
                'order' => 1010
            ]);
            $this->childMain($auth_animated_menu, [
                'shortTitle' => 'L',
                'title' => 'Lock Screen',
                'route' => 'animated.lock-screen',
                'order' => 1010
            ]);
            $this->childMain($auth_animated_menu, [
                'shortTitle' => 'R',
                'title' => 'Reset Password',
                'route' => 'animated.reset-password',
                'order' => 1010
            ]);
            $this->childMain($auth_animated_menu, [
                'shortTitle' => 'T',
                'title' => 'Two factor',
                'route' => 'animated.two-factor',
                'order' => 1010
            ]);
            $this->childMain($auth_animated_menu, [
                'shortTitle' => 'R',
                'title' => 'Account Deactivate',
                'route' => 'animated.account-deactivate',
                'order' => 1010
            ]);

            // Popup Auth Parent
            $auth_popup_menu = $this->parentMenu($auth_menu, [
                'icon' => '<svg class="icon-20" width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path opacity="0.4" d="M12.0865 22C11.9627 22 11.8388 21.9716 11.7271 21.9137L8.12599 20.0496C7.10415 19.5201 6.30481 18.9259 5.68063 18.2336C4.31449 16.7195 3.5544 14.776 3.54232 12.7599L3.50004 6.12426C3.495 5.35842 3.98931 4.67103 4.72826 4.41215L11.3405 2.10679C11.7331 1.96656 12.1711 1.9646 12.5707 2.09992L19.2081 4.32684C19.9511 4.57493 20.4535 5.25742 20.4575 6.02228L20.4998 12.6628C20.5129 14.676 19.779 16.6274 18.434 18.1581C17.8168 18.8602 17.0245 19.4632 16.0128 20.0025L12.4439 21.9088C12.3331 21.9686 12.2103 21.999 12.0865 22Z" fill="currentColor"></path><path d="M11.3194 14.3209C11.1261 14.3219 10.9328 14.2523 10.7838 14.1091L8.86695 12.2656C8.57097 11.9793 8.56795 11.5145 8.86091 11.2262C9.15387 10.9369 9.63207 10.934 9.92906 11.2193L11.3083 12.5451L14.6758 9.22479C14.9698 8.93552 15.448 8.93258 15.744 9.21793C16.041 9.50426 16.044 9.97004 15.751 10.2574L11.8519 14.1022C11.7049 14.2474 11.5127 14.3199 11.3194 14.3209Z" fill="currentColor"></path></svg>',
                'title' => 'Popup',
                'order' => 1010,
                'nickname' => 'auth_popup',
                'parent' => '#auth'
            ]);

            // Popup Menu Auth
            $this->popupMenu($auth_popup_menu, [
                'shortTitle' => 'L',
                'title' => 'Sign In',
                'order' => 1010,
                'extra' => [
                    'toggle' => 'modal',
                    'target' => '#staticBackdrop'
                ]
            ]);
            $this->popupMenu($auth_popup_menu, [
                'shortTitle' => 'R',
                'title' => 'Sign Up',
                'order' => 1010,
                'extra' => [
                    'toggle' => 'modal',
                    'target' => '#staticBackdrop1'
                ]
            ]);

            // Simple Auth Parent
            $auth_simple_menu = $this->parentMenu($auth_menu, [
                'icon' => '<svg class="icon-20" width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path opacity="0.4" d="M12.0865 22C11.9627 22 11.8388 21.9716 11.7271 21.9137L8.12599 20.0496C7.10415 19.5201 6.30481 18.9259 5.68063 18.2336C4.31449 16.7195 3.5544 14.776 3.54232 12.7599L3.50004 6.12426C3.495 5.35842 3.98931 4.67103 4.72826 4.41215L11.3405 2.10679C11.7331 1.96656 12.1711 1.9646 12.5707 2.09992L19.2081 4.32684C19.9511 4.57493 20.4535 5.25742 20.4575 6.02228L20.4998 12.6628C20.5129 14.676 19.779 16.6274 18.434 18.1581C17.8168 18.8602 17.0245 19.4632 16.0128 20.0025L12.4439 21.9088C12.3331 21.9686 12.2103 21.999 12.0865 22Z" fill="currentColor"></path><path d="M11.3194 14.3209C11.1261 14.3219 10.9328 14.2523 10.7838 14.1091L8.86695 12.2656C8.57097 11.9793 8.56795 11.5145 8.86091 11.2262C9.15387 10.9369 9.63207 10.934 9.92906 11.2193L11.3083 12.5451L14.6758 9.22479C14.9698 8.93552 15.448 8.93258 15.744 9.21793C16.041 9.50426 16.044 9.97004 15.751 10.2574L11.8519 14.1022C11.7049 14.2474 11.5127 14.3199 11.3194 14.3209Z" fill="currentColor"></path></svg>',
                'title' => 'Simple',
                'order' => 1010,
                'nickname' => 'auth_simple',
                'parent' => '#auth'
            ]);

            // Simple Menu Auth
            $this->childMain($auth_simple_menu, [
                'shortTitle' => 'L',
                'title' => 'Sign In',
                'route' => 'simple.signin',
                'order' => 1010
            ]);
            $this->childMain($auth_simple_menu, [
                'shortTitle' => 'R',
                'title' => 'Sign Up',
                'route' => 'simple.signup',
                'order' => 1010
            ]);


            $this->mainRoute($menu, [
                'icon' => '<svg class="icon-20" width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M7.7688 8.71387H16.2312C18.5886 8.71387 20.5 10.5831 20.5 12.8885V17.8254C20.5 20.1308 18.5886 22 16.2312 22H7.7688C5.41136 22 3.5 20.1308 3.5 17.8254V12.8885C3.5 10.5831 5.41136 8.71387 7.7688 8.71387ZM11.9949 17.3295C12.4928 17.3295 12.8891 16.9419 12.8891 16.455V14.2489C12.8891 13.772 12.4928 13.3844 11.9949 13.3844C11.5072 13.3844 11.1109 13.772 11.1109 14.2489V16.455C11.1109 16.9419 11.5072 17.3295 11.9949 17.3295Z" fill="currentColor"></path><path opacity="0.4" d="M17.523 7.39595V8.86667C17.1673 8.7673 16.7913 8.71761 16.4052 8.71761H15.7447V7.39595C15.7447 5.37868 14.0681 3.73903 12.0053 3.73903C9.94257 3.73903 8.26594 5.36874 8.25578 7.37608V8.71761H7.60545C7.20916 8.71761 6.83319 8.7673 6.47754 8.87661V7.39595C6.4877 4.41476 8.95692 2 11.985 2C15.0537 2 17.523 4.41476 17.523 7.39595Z" fill="currentColor"></path></svg>',
                'title' => 'Admin',
                'route' => 'permission-role.list',
                'active' => 'permission-role',
                'order' => 1050
            ]);

            // Users
            $users = $this->parentMenu($menu, [
                'icon' => '<svg width="20" class="icon-20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M11.9488 14.54C8.49884 14.54 5.58789 15.1038 5.58789 17.2795C5.58789 19.4562 8.51765 20.0001 11.9488 20.0001C15.3988 20.0001 18.3098 19.4364 18.3098 17.2606C18.3098 15.084 15.38 14.54 11.9488 14.54Z" fill="currentColor"></path><path opacity="0.4" d="M11.949 12.467C14.2851 12.467 16.1583 10.5831 16.1583 8.23351C16.1583 5.88306 14.2851 4 11.949 4C9.61293 4 7.73975 5.88306 7.73975 8.23351C7.73975 10.5831 9.61293 12.467 11.949 12.467Z" fill="currentColor"></path><path opacity="0.4" d="M21.0881 9.21923C21.6925 6.84176 19.9205 4.70654 17.664 4.70654C17.4187 4.70654 17.1841 4.73356 16.9549 4.77949C16.9244 4.78669 16.8904 4.802 16.8725 4.82902C16.8519 4.86324 16.8671 4.90917 16.8895 4.93889C17.5673 5.89528 17.9568 7.0597 17.9568 8.30967C17.9568 9.50741 17.5996 10.6241 16.9728 11.5508C16.9083 11.6462 16.9656 11.775 17.0793 11.7948C17.2369 11.8227 17.3981 11.8371 17.5629 11.8416C19.2059 11.8849 20.6807 10.8213 21.0881 9.21923Z" fill="currentColor"></path><path d="M22.8094 14.817C22.5086 14.1722 21.7824 13.73 20.6783 13.513C20.1572 13.3851 18.747 13.205 17.4352 13.2293C17.4155 13.232 17.4048 13.2455 17.403 13.2545C17.4003 13.2671 17.4057 13.2887 17.4316 13.3022C18.0378 13.6039 20.3811 14.916 20.0865 17.6834C20.074 17.8032 20.1698 17.9068 20.2888 17.8888C20.8655 17.8059 22.3492 17.4853 22.8094 16.4866C23.0637 15.9589 23.0637 15.3456 22.8094 14.817Z" fill="currentColor"></path><path opacity="0.4" d="M7.04459 4.77973C6.81626 4.7329 6.58077 4.70679 6.33543 4.70679C4.07901 4.70679 2.30701 6.84201 2.9123 9.21947C3.31882 10.8216 4.79355 11.8851 6.43661 11.8419C6.60136 11.8374 6.76343 11.8221 6.92013 11.7951C7.03384 11.7753 7.09115 11.6465 7.02668 11.551C6.3999 10.6234 6.04263 9.50765 6.04263 8.30991C6.04263 7.05904 6.43303 5.89462 7.11085 4.93913C7.13234 4.90941 7.14845 4.86348 7.12696 4.82926C7.10906 4.80135 7.07593 4.78694 7.04459 4.77973Z" fill="currentColor"></path><path d="M3.32156 13.5127C2.21752 13.7297 1.49225 14.1719 1.19139 14.8167C0.936203 15.3453 0.936203 15.9586 1.19139 16.4872C1.65163 17.4851 3.13531 17.8066 3.71195 17.8885C3.83104 17.9065 3.92595 17.8038 3.91342 17.6832C3.61883 14.9167 5.9621 13.6046 6.56918 13.3029C6.59425 13.2885 6.59962 13.2677 6.59694 13.2542C6.59515 13.2452 6.5853 13.2317 6.5656 13.2299C5.25294 13.2047 3.84358 13.3848 3.32156 13.5127Z" fill="currentColor"></path></svg>',
                'title' => 'Users',
                'nickname' => 'users',
                'order' => 1010
            ]);

            // Submenu-users - Child
            $this->childMain($users, [
                'shortTitle' => 'U',
                'title' => 'User Profile',
                'route' => ['users.show', 1],
                'active' => 'users/1'
            ]);
            $this->childMain($users, [
                'shortTitle' => 'A',
                'title' => 'Add User',
                'route' => 'users.create',
                'active' => 'users/create'
            ]);
            $this->childMain($users, [
                'shortTitle' => 'B',
                'title' => 'User List',
                'route' => 'users.index',
                'active' => 'users'
            ]);

            // Utilities
            $utility = $this->parentMenu($menu, [
                'icon' => '<svg width="20" class="icon-20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path opacity="0.4" d="M11.9912 18.6215L5.49945 21.864C5.00921 22.1302 4.39768 21.9525 4.12348 21.4643C4.0434 21.3108 4.00106 21.1402 4 20.9668V13.7087C4 14.4283 4.40573 14.8725 5.47299 15.37L11.9912 18.6215Z" fill="currentColor"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M8.89526 2H15.0695C17.7773 2 19.9735 3.06605 20 5.79337V20.9668C19.9989 21.1374 19.9565 21.3051 19.8765 21.4554C19.7479 21.7007 19.5259 21.8827 19.2615 21.9598C18.997 22.0368 18.7128 22.0023 18.4741 21.8641L11.9912 18.6215L5.47299 15.3701C4.40573 14.8726 4 14.4284 4 13.7088V5.79337C4 3.06605 6.19625 2 8.89526 2ZM8.22492 9.62227H15.7486C16.1822 9.62227 16.5336 9.26828 16.5336 8.83162C16.5336 8.39495 16.1822 8.04096 15.7486 8.04096H8.22492C7.79137 8.04096 7.43991 8.39495 7.43991 8.83162C7.43991 9.26828 7.79137 9.62227 8.22492 9.62227Z" fill="currentColor"></path></svg>',
                'title' => 'Utilities',
                'nickname' => 'utility',
                'order' => 1010
            ]);

            // Submenu-Utilities - Child
            $this->childMain($utility, [
                'shortTitle' => '4',
                'title' => 'Error 404',
                'route' => 'errors.error404',
                'active' => 'errors/error404'
            ]);
            $this->childMain($utility, [
                'shortTitle' => '5',
                'title' => 'Error 500',
                'route' => 'errors.error500',
                'active' => 'errors/error500'
            ]);
            $this->childMain($utility, [
                'shortTitle' => 'M',
                'title' => 'Maintenance',
                'route' => 'errors.maintenance',
                'active' => 'errors/maintenance'
            ]);

            // Plugins
            $plugin = $this->parentMenu($menu, [
                'icon' => '<svg width="20" class="icon-20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path opacity="0.4" d="M12.0865 22C11.9627 22 11.8388 21.9716 11.7271 21.9137L8.12599 20.0496C7.10415 19.5201 6.30481 18.9259 5.68063 18.2336C4.31449 16.7195 3.5544 14.776 3.54232 12.7599L3.50004 6.12426C3.495 5.35842 3.98931 4.67103 4.72826 4.41215L11.3405 2.10679C11.7331 1.96656 12.1711 1.9646 12.5707 2.09992L19.2081 4.32684C19.9511 4.57493 20.4535 5.25742 20.4575 6.02228L20.4998 12.6628C20.5129 14.676 19.779 16.6274 18.434 18.1581C17.8168 18.8602 17.0245 19.4632 16.0128 20.0025L12.4439 21.9088C12.3331 21.9686 12.2103 21.999 12.0865 22Z" fill="currentColor"></path><path d="M11.3194 14.3209C11.1261 14.3219 10.9328 14.2523 10.7838 14.1091L8.86695 12.2656C8.57097 11.9793 8.56795 11.5145 8.86091 11.2262C9.15387 10.9369 9.63207 10.934 9.92906 11.2193L11.3083 12.5451L14.6758 9.22479C14.9698 8.93552 15.448 8.93258 15.744 9.21793C16.041 9.50426 16.044 9.97004 15.751 10.2574L11.8519 14.1022C11.7049 14.2474 11.5127 14.3199 11.3194 14.3209Z" fill="currentColor"></path></svg>',
                'title' => 'Plugins',
                'nickname' => 'plugin',
                'order' => 1010
            ]);

            // Submenu-Plugins - Child
            $this->childMain($plugin, [
                'shortTitle' => 'A',
                'title' => 'Apexcharts',
                'route' => 'plugins.apexcharts',
                'active' => 'plugins/apexcharts'
            ]);
            $this->childMain($plugin, [
                'shortTitle' => 'BH',
                'title' => 'Button Hover',
                'route' => 'plugins.button-hover',
                'active' => 'plugins/button-hover'
            ]);
            $this->childMain($plugin, [
                'shortTitle' => 'U',
                'title' => 'Tree View',
                'route' => 'plugins.tree-view',
                'active' => 'plugins/tree-view'
            ]);
            $this->childMain($plugin, [
                'shortTitle' => 'C',
                'title' => 'Choice JS',
                'route' => 'plugins.choise-js',
                'active' => 'plugins/choise-js'
            ]);
            $this->childMain($plugin, [
                'shortTitle' => 'F',
                'title' => 'Flatpickr',
                'route' => 'plugins.flatpickr',
                'active' => 'plugins/flatpickr'
            ]);
            $this->childMain($plugin, [
                'shortTitle' => 'F',
                'title' => 'Fslightbox',
                'route' => 'plugins.fslightbox',
                'active' => 'plugins/fslightbox'
            ]);
            $this->childMain($plugin, [
                'shortTitle' => 'G',
                'title' => 'Gallery Hover',
                'route' => 'plugins.gallery-hover',
                'active' => 'plugins/gallery-hover'
            ]);
            $this->childMain($plugin, [
                'shortTitle' => 'I',
                'title' => 'Image Croper',
                'route' => 'plugins.image-croper',
                'active' => 'plugins/image-croper'
            ]);
            $this->childMain($plugin, [
                'shortTitle' => 'L',
                'title' => 'Loader',
                'route' => 'plugins.loader',
                'active' => 'plugins/loader'
            ]);
            $this->childMain($plugin, [
                'shortTitle' => 'R',
                'title' => 'Rating',
                'route' => 'plugins.rating',
                'active' => 'plugins/rating'
            ]);
            $this->childMain($plugin, [
                'shortTitle' => 'S',
                'title' => 'Select2',
                'route' => 'plugins.select2',
                'active' => 'plugins/select2'
            ]);
            $this->childMain($plugin, [
                'shortTitle' => 'S',
                'title' => 'Sweetalert',
                'route' => 'plugins.sweet-alert',
                'active' => 'plugins/sweet-alert'
            ]);
            $this->childMain($plugin, [
                'shortTitle' => 'Q',
                'title' => 'Quill',
                'route' => 'plugins.quill-editor',
                'active' => 'plugins/quill-editor'
            ]);
            $this->childMain($plugin, [
                'shortTitle' => 'U',
                'title' => 'Uppy',
                'route' => 'plugins.uppy',
                'active' => 'plugins/uppy'
            ]);


            // Blank Page
            $this->mainRoute($menu, [
                'icon' => '<svg width="20" class="icon-20" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path opacity="0.4" d="M16.191 2H7.81C4.77 2 3 3.78 3 6.83V17.16C3 20.26 4.77 22 7.81 22H16.191C19.28 22 21 20.26 21 17.16V6.83C21 3.78 19.28 2 16.191 2" fill="currentColor"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M8.07999 6.64999V6.65999C7.64899 6.65999 7.29999 7.00999 7.29999 7.43999C7.29999 7.86999 7.64899 8.21999 8.07999 8.21999H11.069C11.5 8.21999 11.85 7.86999 11.85 7.42899C11.85 6.99999 11.5 6.64999 11.069 6.64999H8.07999ZM15.92 12.74H8.07999C7.64899 12.74 7.29999 12.39 7.29999 11.96C7.29999 11.53 7.64899 11.179 8.07999 11.179H15.92C16.35 11.179 16.7 11.53 16.7 11.96C16.7 12.39 16.35 12.74 15.92 12.74ZM15.92 17.31H8.07999C7.77999 17.35 7.48999 17.2 7.32999 16.95C7.16999 16.69 7.16999 16.36 7.32999 16.11C7.48999 15.85 7.77999 15.71 8.07999 15.74H15.92C16.319 15.78 16.62 16.12 16.62 16.53C16.62 16.929 16.319 17.27 15.92 17.31Z" fill="currentColor"></path></svg>',
                'title' => 'Blank Page',
                'nickname' => 'blank',
                'route' => 'pages.blank-page',
                'active' => 'blank-page',
                'order' => 1010
            ]);

            // Divider Line
            $this->hrLine($menu, 1060);

            //ELEMENT Static
            $this->staticMenu($menu, ['title' => 'ELEMENTS', 'order' => 1100]);

            // Components
            $this->mainRoute($menu, [
                'icon' => '<svg width="20" class="icon-20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path opacity="0.4" d="M2 11.0786C2.05 13.4166 2.19 17.4156 2.21 17.8566C2.281 18.7996 2.642 19.7526 3.204 20.4246C3.986 21.3676 4.949 21.7886 6.292 21.7886C8.148 21.7986 10.194 21.7986 12.181 21.7986C14.176 21.7986 16.112 21.7986 17.747 21.7886C19.071 21.7886 20.064 21.3566 20.836 20.4246C21.398 19.7526 21.759 18.7896 21.81 17.8566C21.83 17.4856 21.93 13.1446 21.99 11.0786H2Z" fill="currentColor"></path><path d="M11.2451 15.3843V16.6783C11.2451 17.0923 11.5811 17.4283 11.9951 17.4283C12.4091 17.4283 12.7451 17.0923 12.7451 16.6783V15.3843C12.7451 14.9703 12.4091 14.6343 11.9951 14.6343C11.5811 14.6343 11.2451 14.9703 11.2451 15.3843Z" fill="currentColor"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M10.211 14.5565C10.111 14.9195 9.762 15.1515 9.384 15.1015C6.833 14.7455 4.395 13.8405 2.337 12.4815C2.126 12.3435 2 12.1075 2 11.8555V8.38949C2 6.28949 3.712 4.58149 5.817 4.58149H7.784C7.972 3.12949 9.202 2.00049 10.704 2.00049H13.286C14.787 2.00049 16.018 3.12949 16.206 4.58149H18.183C20.282 4.58149 21.99 6.28949 21.99 8.38949V11.8555C21.99 12.1075 21.863 12.3425 21.654 12.4815C19.592 13.8465 17.144 14.7555 14.576 15.1105C14.541 15.1155 14.507 15.1175 14.473 15.1175C14.134 15.1175 13.831 14.8885 13.746 14.5525C13.544 13.7565 12.821 13.1995 11.99 13.1995C11.148 13.1995 10.433 13.7445 10.211 14.5565ZM13.286 3.50049H10.704C10.031 3.50049 9.469 3.96049 9.301 4.58149H14.688C14.52 3.96049 13.958 3.50049 13.286 3.50049Z" fill="currentColor"></path></svg>',
                'title' => 'Components',
                'nickname' => 'components',
                'route' => 'uisheet',
                'active' => '/',
                'order' => 1110
            ]);

            // Colors
            $this->mainRoute($menu, [
                'icon' => '<svg width="20" class="icon-20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path opacity="0.4" d="M13.7505 9.70303V7.68318C13.354 7.68318 13.0251 7.36377 13.0251 6.97859V4.57356C13.0251 4.2532 12.764 4.00049 12.4352 4.00049H5.7911C3.70213 4.00049 2 5.653 2 7.68318V10.1155C2 10.3043 2.07737 10.4828 2.21277 10.6143C2.34816 10.7449 2.53191 10.8201 2.72534 10.8201C3.46035 10.8201 4.02128 11.3274 4.02128 11.9944C4.02128 12.6905 3.45068 13.2448 2.73501 13.2533C2.33849 13.2533 2 13.5257 2 13.9203V16.3262C2 18.3555 3.70213 19.9995 5.78143 19.9995H12.4352C12.764 19.9995 13.0251 19.745 13.0251 19.4265V17.3963C13.0251 17.0027 13.354 16.6917 13.7505 16.6917V14.8701C13.354 14.8701 13.0251 14.5497 13.0251 14.1655V10.4076C13.0251 10.0224 13.354 9.70303 13.7505 9.70303Z" fill="currentColor"></path><path d="M19.9787 11.9948C19.9787 12.69 20.559 13.2443 21.265 13.2537C21.6615 13.2537 22 13.5262 22 13.9113V16.3258C22 18.3559 20.3075 20 18.2186 20H15.0658C14.7466 20 14.4758 19.7454 14.4758 19.426V17.3967C14.4758 17.0022 14.1567 16.6921 13.7505 16.6921V14.8705C14.1567 14.8705 14.4758 14.5502 14.4758 14.1659V10.4081C14.4758 10.022 14.1567 9.70348 13.7505 9.70348V7.6827C14.1567 7.6827 14.4758 7.36328 14.4758 6.9781V4.57401C14.4758 4.25366 14.7466 4 15.0658 4H18.2186C20.3075 4 22 5.64406 22 7.6733V10.0407C22 10.2286 21.9226 10.4081 21.7872 10.5387C21.6518 10.6702 21.4681 10.7453 21.2747 10.7453C20.559 10.7453 19.9787 11.31 19.9787 11.9948Z" fill="currentColor"></path></svg>',
                'title' => 'Colors',
                'nickname' => 'colors',
                'route' => 'plugins.ui-color',
                'active' => 'plugins/ui-color',
                'order' => 1110
            ]);

            // Widget
            $widget = $this->parentMenu($menu, [
                'icon' => '<svg width="20" class="icon-20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path opacity="0.4" d="M21.25 13.4764C20.429 13.4764 19.761 12.8145 19.761 12.001C19.761 11.1865 20.429 10.5246 21.25 10.5246C21.449 10.5246 21.64 10.4463 21.78 10.3076C21.921 10.1679 22 9.97864 22 9.78146L21.999 7.10415C21.999 4.84102 20.14 3 17.856 3H6.144C3.86 3 2.001 4.84102 2.001 7.10415L2 9.86766C2 10.0648 2.079 10.2541 2.22 10.3938C2.36 10.5325 2.551 10.6108 2.75 10.6108C3.599 10.6108 4.239 11.2083 4.239 12.001C4.239 12.8145 3.571 13.4764 2.75 13.4764C2.336 13.4764 2 13.8093 2 14.2195V16.8949C2 19.158 3.858 21 6.143 21H17.857C20.142 21 22 19.158 22 16.8949V14.2195C22 13.8093 21.664 13.4764 21.25 13.4764Z" fill="currentColor"></path><path d="M15.4303 11.5887L14.2513 12.7367L14.5303 14.3597C14.5783 14.6407 14.4653 14.9177 14.2343 15.0837C14.0053 15.2517 13.7063 15.2727 13.4543 15.1387L11.9993 14.3737L10.5413 15.1397C10.4333 15.1967 10.3153 15.2267 10.1983 15.2267C10.0453 15.2267 9.89434 15.1787 9.76434 15.0847C9.53434 14.9177 9.42134 14.6407 9.46934 14.3597L9.74734 12.7367L8.56834 11.5887C8.36434 11.3907 8.29334 11.0997 8.38134 10.8287C8.47034 10.5587 8.70034 10.3667 8.98134 10.3267L10.6073 10.0897L11.3363 8.61268C11.4633 8.35868 11.7173 8.20068 11.9993 8.20068H12.0013C12.2843 8.20168 12.5383 8.35968 12.6633 8.61368L13.3923 10.0897L15.0213 10.3277C15.2993 10.3667 15.5293 10.5587 15.6173 10.8287C15.7063 11.0997 15.6353 11.3907 15.4303 11.5887Z" fill="currentColor"></path></svg>',
                'title' => 'Widgets',
                'nickname' => 'widget',
                'order' => 1110
            ]);

            // Submenu-Widget - Child
            $this->childMain($widget, [
                'shortTitle' => 'W',
                'title' => 'Widget Basic',
                'route' => 'widget.widget-basic',
                'active' => 'widget/widget-basic'
            ]);
            $this->childMain($widget, [
                'shortTitle' => 'W',
                'title' => 'Widget Chart',
                'route' => 'widget.widget-chart',
                'active' => 'widget/widget-chart'
            ]);
            $this->childMain($widget, [
                'shortTitle' => 'W',
                'title' => 'Widget Card',
                'route' => 'widget.widget-card',
                'active' => 'widget/widget-card'
            ]);

            // Maps
            $map = $this->parentMenu($menu, [
                'icon' => '<svg width="20" class="icon-20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M8.53162 2.93677C10.7165 1.66727 13.402 1.68946 15.5664 2.99489C17.7095 4.32691 19.012 6.70418 18.9998 9.26144C18.95 11.8019 17.5533 14.19 15.8075 16.0361C14.7998 17.1064 13.6726 18.0528 12.4488 18.856C12.3228 18.9289 12.1848 18.9777 12.0415 19C11.9036 18.9941 11.7693 18.9534 11.6508 18.8814C9.78243 17.6746 8.14334 16.134 6.81233 14.334C5.69859 12.8314 5.06584 11.016 5 9.13442C4.99856 6.57225 6.34677 4.20627 8.53162 2.93677ZM9.79416 10.1948C10.1617 11.1008 11.0292 11.6918 11.9916 11.6918C12.6221 11.6964 13.2282 11.4438 13.6748 10.9905C14.1214 10.5371 14.3715 9.92064 14.3692 9.27838C14.3726 8.29804 13.7955 7.41231 12.9073 7.03477C12.0191 6.65723 10.995 6.86235 10.3133 7.55435C9.63159 8.24635 9.42664 9.28872 9.79416 10.1948Z" fill="currentColor"></path><ellipse opacity="0.4" cx="12" cy="21" rx="5" ry="1" fill="currentColor"></ellipse></svg>',
                'title' => 'Maps',
                'nickname' => 'map',
                'order' => 1110
            ]);

            // Submenu-Maps - Child
            $this->childMain($map, [
                'shortTitle' => 'G',
                'title' => 'Google',
                'route' => 'maps.google',
                'active' => 'maps/google'
            ]);

            $this->childMain($map, [
                'shortTitle' => 'V',
                'title' => 'Vector',
                'route' => 'maps.vector',
                'active' => 'maps/vector'
            ]);

            // Forms
            $form = $this->parentMenu($menu, [
                'icon' => '<svg width="20" class="icon-20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path opacity="0.4" d="M16.191 2H7.81C4.77 2 3 3.78 3 6.83V17.16C3 20.26 4.77 22 7.81 22H16.191C19.28 22 21 20.26 21 17.16V6.83C21 3.78 19.28 2 16.191 2Z" fill="currentColor"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M8.07996 6.6499V6.6599C7.64896 6.6599 7.29996 7.0099 7.29996 7.4399C7.29996 7.8699 7.64896 8.2199 8.07996 8.2199H11.069C11.5 8.2199 11.85 7.8699 11.85 7.4289C11.85 6.9999 11.5 6.6499 11.069 6.6499H8.07996ZM15.92 12.7399H8.07996C7.64896 12.7399 7.29996 12.3899 7.29996 11.9599C7.29996 11.5299 7.64896 11.1789 8.07996 11.1789H15.92C16.35 11.1789 16.7 11.5299 16.7 11.9599C16.7 12.3899 16.35 12.7399 15.92 12.7399ZM15.92 17.3099H8.07996C7.77996 17.3499 7.48996 17.1999 7.32996 16.9499C7.16996 16.6899 7.16996 16.3599 7.32996 16.1099C7.48996 15.8499 7.77996 15.7099 8.07996 15.7399H15.92C16.319 15.7799 16.62 16.1199 16.62 16.5299C16.62 16.9289 16.319 17.2699 15.92 17.3099Z" fill="currentColor"></path></svg>',
                'title' => 'Form',
                'nickname' => 'form',
                'order' => 1110
            ]);

            // Submenu-Forms - Child
            $this->childMain($form, [
                'shortTitle' => 'E',
                'title' => 'Element',
                'route' => 'forms.element',
                'active' => 'forms/element'
            ]);
            $this->childMain($form, [
                'shortTitle' => 'V',
                'title' => 'Wizard',
                'route' => 'forms.wizard',
                'active' => 'forms/wizard'
            ]);
            $this->childMain($form, [
                'shortTitle' => 'V',
                'title' => 'Validation',
                'route' => 'forms.validation',
                'active' => 'forms/validation'
            ]);

            // Table
            $table = $this->parentMenu($menu, [
                'icon' => '<svg class="icon-20" xmlns="http://www.w3.org/2000/svg" width="20" viewBox="0 0 24 24" fill="none"><path d="M2 5C2 4.44772 2.44772 4 3 4H8.66667H21C21.5523 4 22 4.44772 22 5V8H15.3333H8.66667H2V5Z" fill="currentColor" stroke="currentColor"></path><path d="M6 8H2V11M6 8V20M6 8H14M6 20H3C2.44772 20 2 19.5523 2 19V11M6 20H14M14 8H22V11M14 8V20M14 20H21C21.5523 20 22 19.5523 22 19V11M2 11H22M2 14H22M2 17H22M10 8V20M18 8V20" stroke="currentColor"></path></svg>',
                'title' => 'Table',
                'nickname' => 'table',
                'order' => 1110
            ]);

            // Submenu-Table - Child
            $this->childMain($table, [
                'shortTitle' => 'B',
                'title' => 'Bootstrap Table',
                'route' => 'table.bootstrap-table',
                'active' => 'table/bootstraptable'
            ]);
            $this->childMain($table, [
                'shortTitle' => 'D',
                'title' => 'DataTable',
                'route' => 'table.data-table',
                'active' => 'table/datatable'
            ]);
            $this->childMain($table, [
                'shortTitle' => 'BT',
                'title' => 'Bordered Table',
                'route' => 'table.border-table',
                'active' => 'table/bordertable'
            ]);
            $this->childMain($table, [
                'shortTitle' => 'F',
                'title' => 'Fancy Table',
                'route' => 'table.fancy-table',
                'active' => 'table/fancytable'
            ]);
            $this->childMain($table, [
                'shortTitle' => 'F',
                'title' => 'Fixed Table',
                'route' => 'table.fixed-table',
                'active' => 'table/fixedtable'
            ]);

            // Icons
            $icon = $this->parentMenu($menu, [
                'icon' => '<svg class="icon-20" xmlns="http://www.w3.org/2000/svg" width="20" viewBox="0 0 24 24" fill="currentColor"><path d="M8 10.5378C8 9.43327 8.89543 8.53784 10 8.53784H11.3333C12.4379 8.53784 13.3333 9.43327 13.3333 10.5378V19.8285C13.3333 20.9331 14.2288 21.8285 15.3333 21.8285H16C16 21.8285 12.7624 23.323 10.6667 22.9361C10.1372 22.8384 9.52234 22.5913 9.01654 22.3553C8.37357 22.0553 8 21.3927 8 20.6832V10.5378Z" fill="currentColor"></path><rect opacity="0.4" x="8" y="1" width="5" height="5" rx="2.5" fill="currentColor"></rect></svg>',
                'title' => 'Icons',
                'nickname' => 'icon',
                'li_class' => 'mb-4',
                'order' => 1110
            ]);

            // Submenu-Icons - Child
            $this->childMain($icon, [
                'shortTitle' => 'S',
                'title' => 'Solid',
                'route' => 'icons.solid',
                'active' => 'icons/solid'
            ]);
            $this->childMain($icon, [
                'shortTitle' => 'O',
                'title' => 'Outlined',
                'route' => 'icons.outline',
                'active' => 'icons/outline'
            ]);
            $this->childMain($icon, [
                'shortTitle' => 'D',
                'title' => 'Dual Tone',
                'route' => 'icons.dualtone',
                'active' => 'icons/dualtone'
            ]);

            // Access Permission Check
            $menu->filter(function ($item) {
                if ($item->data('permission')) {
                    if (auth()->check()) {
                        if (auth()->user()->hasRole('admin')) {
                            return true;
                        } elseif (auth()->user()->hasAnyPermission($item->data('permission'))) {
                            return true;
                        }
                    }

                    return false;
                } else {
                    return true;
                }
            });

            // Set Active Menu
            $menu->filter(function ($item) {
                if ($item->activematches) {
                    $activematches = (is_string($item->activematches)) ? [$item->activematches] : $item->activematches;
                    foreach ($activematches as $pattern) {
                        if (request()->is($pattern)) {
                            $item->active();
                            $item->link->active();
                            if ($item->hasParent()) {
                                $item->parent()->active();
                            }
                        }
                    }
                }

                return true;
            });

        })->sortBy('order');
        return $next($request);
    }
}
