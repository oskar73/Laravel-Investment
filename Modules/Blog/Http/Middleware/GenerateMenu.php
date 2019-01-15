<?php

namespace Modules\Blog\Http\Middleware;

use App\Trait\Menu;
use Closure;
use Illuminate\Http\Request;

class GenerateMenu
{
    use Menu;
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {

        \Menu::make('HopeUIMenu', function ($menu) use($request) {

            // Main Menu -> Blog
            $moduleMenu = $this->parentMenu($menu, [
                'icon' => '<svg width="20" class="icon-20" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path opacity="0.4" d="M16.191 2H7.81C4.77 2 3 3.78 3 6.83V17.16C3 20.26 4.77 22 7.81 22H16.191C19.28 22 21 20.26 21 17.16V6.83C21 3.78 19.28 2 16.191 2" fill="currentColor"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M8.07999 6.64999V6.65999C7.64899 6.65999 7.29999 7.00999 7.29999 7.43999C7.29999 7.86999 7.64899 8.21999 8.07999 8.21999H11.069C11.5 8.21999 11.85 7.86999 11.85 7.42899C11.85 6.99999 11.5 6.64999 11.069 6.64999H8.07999ZM15.92 12.74H8.07999C7.64899 12.74 7.29999 12.39 7.29999 11.96C7.29999 11.53 7.64899 11.179 8.07999 11.179H15.92C16.35 11.179 16.7 11.53 16.7 11.96C16.7 12.39 16.35 12.74 15.92 12.74ZM15.92 17.31H8.07999C7.77999 17.35 7.48999 17.2 7.32999 16.95C7.16999 16.69 7.16999 16.36 7.32999 16.11C7.48999 15.85 7.77999 15.71 8.07999 15.74H15.92C16.319 15.78 16.62 16.12 16.62 16.53C16.62 16.929 16.319 17.27 15.92 17.31Z" fill="currentColor"></path></svg>',
                'title' => 'Blog',
                'nickname' => 'blog',
                'order' => 325
            ]);

            /* Start If Condition */
            if(str_contains($request->path(), 'blog')) {
                // Static Blog
                $this->staticMenu($moduleMenu, ['title' => 'BLOG', 'order' => 405]);

                // Static Sidebar End
                $this->staticMenu($moduleMenu, ['title' => 'OTHER', 'order' => 420]);

                $this->mainRoute($moduleMenu, [
                    'icon' => '<svg class="icon-20" width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path opacity="0.4" d="M2 6.447C2 3.996 4.03024 2 6.52453 2H11.4856C13.9748 2 16 3.99 16 6.437V17.553C16 20.005 13.9698 22 11.4744 22H6.51537C4.02515 22 2 20.01 2 17.563V16.623V6.447Z" fill="currentColor"></path><path d="M21.7787 11.4548L18.9329 8.5458C18.6388 8.2458 18.1655 8.2458 17.8723 8.5478C17.5802 8.8498 17.5811 9.3368 17.8743 9.6368L19.4335 11.2298H17.9386H9.54826C9.13434 11.2298 8.79834 11.5748 8.79834 11.9998C8.79834 12.4258 9.13434 12.7698 9.54826 12.7698H19.4335L17.8743 14.3628C17.5811 14.6628 17.5802 15.1498 17.8723 15.4518C18.0194 15.6028 18.2113 15.6788 18.4041 15.6788C18.595 15.6788 18.7868 15.6028 18.9329 15.4538L21.7787 12.5458C21.9199 12.4008 21.9998 12.2048 21.9998 11.9998C21.9998 11.7958 21.9199 11.5998 21.7787 11.4548Z" fill="currentColor"></path></svg>',
                    'title' => 'Sign Out',
                    'route' => 'login',
                    'order' => 420
                ]);

                $this->mainRoute($moduleMenu, [
                    'icon' => '<svg class="icon-20" width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path opacity="0.4" d="M22 11.9998C22 17.5238 17.523 21.9998 12 21.9998C6.477 21.9998 2 17.5238 2 11.9998C2 6.47776 6.477 1.99976 12 1.99976C17.523 1.99976 22 6.47776 22 11.9998Z" fill="currentColor"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M12.8701 12.6307C12.8701 13.1127 12.4771 13.5057 11.9951 13.5057C11.5131 13.5057 11.1201 13.1127 11.1201 12.6307V8.21069C11.1201 7.72869 11.5131 7.33569 11.9951 7.33569C12.4771 7.33569 12.8701 7.72869 12.8701 8.21069V12.6307ZM11.1251 15.8035C11.1251 15.3215 11.5161 14.9285 11.9951 14.9285C12.4881 14.9285 12.8801 15.3215 12.8801 15.8035C12.8801 16.2855 12.4881 16.6785 12.0051 16.6785C11.5201 16.6785 11.1251 16.2855 11.1251 15.8035Z" fill="currentColor"></path></svg>',
                    'title' => 'Help',
                    'url' => 'javascript:void(0)',
                    'order' => 420
                ]);
            }
            /* Close If Condition */
                // Static Blog
                $this->mainRoute($moduleMenu, [
                    'icon' => '<svg width="20" class="icon-20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path opacity="0.4" d="M16.0756 2H19.4616C20.8639 2 22.0001 3.14585 22.0001 4.55996V7.97452C22.0001 9.38864 20.8639 10.5345 19.4616 10.5345H16.0756C14.6734 10.5345 13.5371 9.38864 13.5371 7.97452V4.55996C13.5371 3.14585 14.6734 2 16.0756 2Z" fill="currentColor"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M4.53852 2H7.92449C9.32676 2 10.463 3.14585 10.463 4.55996V7.97452C10.463 9.38864 9.32676 10.5345 7.92449 10.5345H4.53852C3.13626 10.5345 2 9.38864 2 7.97452V4.55996C2 3.14585 3.13626 2 4.53852 2ZM4.53852 13.4655H7.92449C9.32676 13.4655 10.463 14.6114 10.463 16.0255V19.44C10.463 20.8532 9.32676 22 7.92449 22H4.53852C3.13626 22 2 20.8532 2 19.44V16.0255C2 14.6114 3.13626 13.4655 4.53852 13.4655ZM19.4615 13.4655H16.0755C14.6732 13.4655 13.537 14.6114 13.537 16.0255V19.44C13.537 20.8532 14.6732 22 16.0755 22H19.4615C20.8637 22 22 20.8532 22 19.44V16.0255C22 14.6114 20.8637 13.4655 19.4615 13.4655Z" fill="currentColor"></path></svg>',
                    'title' => 'Dashboard',
                    'route' => 'blog.index',
                    'active' => 'blog',
                    'order' => 405
                ]);

                $this->mainRoute($moduleMenu, [
                    'icon' => '<svg class="icon-20" width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path opacity="0.4" d="M18.8088 9.021C18.3573 9.021 17.7592 9.011 17.0146 9.011C15.1987 9.011 13.7055 7.508 13.7055 5.675V2.459C13.7055 2.206 13.5036 2 13.253 2H7.96363C5.49517 2 3.5 4.026 3.5 6.509V17.284C3.5 19.889 5.59022 22 8.16958 22H16.0463C18.5058 22 20.5 19.987 20.5 17.502V9.471C20.5 9.217 20.299 9.012 20.0475 9.013C19.6247 9.016 19.1177 9.021 18.8088 9.021Z" fill="currentColor"></path>
                    <path opacity="0.4" d="M16.0842 2.56737C15.7852 2.25637 15.2632 2.47037 15.2632 2.90137V5.53837C15.2632 6.64437 16.1742 7.55437 17.2802 7.55437C17.9772 7.56237 18.9452 7.56437 19.7672 7.56237C20.1882 7.56137 20.4022 7.05837 20.1102 6.75437C19.0552 5.65737 17.1662 3.69137 16.0842 2.56737Z" fill="currentColor"></path>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M8.97398 11.3877H12.359C12.77 11.3877 13.104 11.0547 13.104 10.6437C13.104 10.2327 12.77 9.89868 12.359 9.89868H8.97398C8.56298 9.89868 8.22998 10.2327 8.22998 10.6437C8.22998 11.0547 8.56298 11.3877 8.97398 11.3877ZM8.97408 16.3819H14.4181C14.8291 16.3819 15.1631 16.0489 15.1631 15.6379C15.1631 15.2269 14.8291 14.8929 14.4181 14.8929H8.97408C8.56308 14.8929 8.23008 15.2269 8.23008 15.6379C8.23008 16.0489 8.56308 16.3819 8.97408 16.3819Z" fill="currentColor"></path>
                    </svg>',
                    'title' => 'Comments List',
                    'route' => 'blog.comments',
                    'active' => 'blog/blog-comments',
                    'order' => 410
                ]);
                $this->mainRoute($moduleMenu, [
                    'icon' => '<svg width="20" class="icon-20" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path opacity="0.4" fill-rule="evenodd" clip-rule="evenodd" d="M5.91061 20.5885C5.91061 19.7485 6.59061 19.0685 7.43061 19.0685C8.26061 19.0685 8.94061 19.7485 8.94061 20.5885C8.94061 21.4185 8.26061 22.0985 7.43061 22.0985C6.59061 22.0985 5.91061 21.4185 5.91061 20.5885ZM17.1606 20.5885C17.1606 19.7485 17.8406 19.0685 18.6806 19.0685C19.5106 19.0685 20.1906 19.7485 20.1906 20.5885C20.1906 21.4185 19.5106 22.0985 18.6806 22.0985C17.8406 22.0985 17.1606 21.4185 17.1606 20.5885Z" fill="currentColor"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M20.1908 6.34899C20.8008 6.34899 21.2008 6.55899 21.6008 7.01899C22.0008 7.47899 22.0708 8.13899 21.9808 8.73799L21.0308 15.298C20.8508 16.559 19.7708 17.488 18.5008 17.488H7.5908C6.2608 17.488 5.1608 16.468 5.0508 15.149L4.1308 4.24799L2.6208 3.98799C2.2208 3.91799 1.9408 3.52799 2.0108 3.12799C2.0808 2.71799 2.4708 2.44799 2.8808 2.50799L5.2658 2.86799C5.6058 2.92899 5.8558 3.20799 5.8858 3.54799L6.0758 5.78799C6.1058 6.10899 6.3658 6.34899 6.6858 6.34899H20.1908ZM14.1308 11.548H16.9008C17.3208 11.548 17.6508 11.208 17.6508 10.798C17.6508 10.378 17.3208 10.048 16.9008 10.048H14.1308C13.7108 10.048 13.3808 10.378 13.3808 10.798C13.3808 11.208 13.7108 11.548 14.1308 11.548Z" fill="currentColor"></path></svg>',
                    'title' => 'Blog Category',
                    'route' => 'blog.category',
                    'active' => 'blog/blog-category',
                    'order' => 410
                ]);

                // Blog
                $blog = $this->parentMenu($moduleMenu, [
                    'icon' => '<svg width="20" class="icon-20" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path opacity="0.4" d="M16.191 2H7.81C4.77 2 3 3.78 3 6.83V17.16C3 20.26 4.77 22 7.81 22H16.191C19.28 22 21 20.26 21 17.16V6.83C21 3.78 19.28 2 16.191 2" fill="currentColor"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M8.07999 6.64999V6.65999C7.64899 6.65999 7.29999 7.00999 7.29999 7.43999C7.29999 7.86999 7.64899 8.21999 8.07999 8.21999H11.069C11.5 8.21999 11.85 7.86999 11.85 7.42899C11.85 6.99999 11.5 6.64999 11.069 6.64999H8.07999ZM15.92 12.74H8.07999C7.64899 12.74 7.29999 12.39 7.29999 11.96C7.29999 11.53 7.64899 11.179 8.07999 11.179H15.92C16.35 11.179 16.7 11.53 16.7 11.96C16.7 12.39 16.35 12.74 15.92 12.74ZM15.92 17.31H8.07999C7.77999 17.35 7.48999 17.2 7.32999 16.95C7.16999 16.69 7.16999 16.36 7.32999 16.11C7.48999 15.85 7.77999 15.71 8.07999 15.74H15.92C16.319 15.78 16.62 16.12 16.62 16.53C16.62 16.929 16.319 17.27 15.92 17.31Z" fill="currentColor"></path></svg>',
                    'title' => 'Blog',
                    'nickname' => 'bloger',
                    'parent' => '#blog',
                    'order' => 405
                ]);

                // Submenu-Blog - Child
                $this->childMain($blog, [
                    'shortTitle' => 'M',
                    'title' => 'Blog Main',
                    'route' => 'blog.main',
                    'active' => 'blog/blog-main'
                ]);
                $this->childMain($blog, [
                    'shortTitle' => 'D',
                    'title' => 'Blog Details',
                    'route' => 'blog.details',
                    'active' => 'blog/blog-details'
                ]);
                $this->childMain($blog, [
                    'shortTitle' => 'G',
                    'title' => 'Blog Grid',
                    'route' => 'blog.grid',
                    'active' => 'blog/blog-grid'
                ]);
                $this->childMain($blog, [
                    'shortTitle' => 'L',
                    'title' => 'Blog List',
                    'route' => 'blog.list',
                    'active' => 'blog/blog-list'
                ]);
                $this->childMain($blog, [
                    'shortTitle' => 'T',
                    'title' => 'Blog Trending',
                    'route' => 'blog.trending',
                    'active' => 'blog/blog-trending'
                ]);

        })->sortBy('order');

        return $next($request);
    }
}
