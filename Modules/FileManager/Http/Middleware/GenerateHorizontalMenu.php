<?php

namespace Modules\FileManager\Http\Middleware;

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
                'title' => 'File Manger',
                'route' => 'file-manager.index',
                'active' => 'filemanager',
                'order' => 60
            ]);
        });
        return $next($request);
    }
}
