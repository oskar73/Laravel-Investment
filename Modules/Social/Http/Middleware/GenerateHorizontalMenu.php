<?php

namespace Modules\Social\Http\Middleware;

use App\Trait\HorizontalMenu;
use Closure;
use Illuminate\Http\Request;

class GenerateHorizontalMenu
{
    use HorizontalMenu;
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        \Menu::make('HopeUIHorizontalMenu', function ($menu) {
            // Home
            $home = $this->createHomeMenu($menu);

            // Submenu-Home - Child
            $this->childMain($home, [
                'icon' => '',
                'title' => 'Social App',
                'route' => 'social.index',
                'active' => 'mail',
                'order' => 20,
            ]);
        });

        return $next($request);
    }
}
