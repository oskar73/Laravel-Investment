<?php
namespace App\Trait;

trait HorizontalMenu
{

    protected function staticMenu($menu, $data) {
        $menu->add('
                <span class="default-icon">'.$data['title'] ?? '-'.'</span>
                <span class="mini-icon">-</span>
            ',[
                'url' => '#',
                'class' => 'nav-item static-item',
            ])
            ->data([ 'order' => $data['order'] ?? 0 ])
            ->link->attr([
                'class' => 'nav-link static-item disabled'
            ]);
    }

    protected function mainRoute ($menu, $data) {
        $menuData = [];

        if(isset($data['route'])) {
            $menuData['route'] = $data['route'];
        } else if(isset($data['url'])) {
            $menuData['url'] = $data['url'] ?? '#';
        } else {
            $menuData['route'] = 'login';
        }

        $linkData = ['class' => 'nav-link'];

        if(isset($data['target']) && $data['target']) {
            $linkData['target'] = $data['target'];
        }

        $menuData['class'] = 'nav-item';

        $menu->add($this->createMenuTitle($data['title'] ?? ''), $menuData)
            ->data([
                'order' => $data['order'] ?? 0,
                'activematches' => $data['active'] ?? '',
                'permission' => $data['permission'] ?? [],
            ])
            ->prepend($this->createMenuIcon($data['icon'] ?? ''))
            ->append($this->createMenuIcon($data['sub_icon'] ?? ''))
            ->link->attr($linkData);
    }

    protected function parentMenu ($menu, $data) {
        $sub_menu = $menu->add($this->createMenuTitle($data['title'] ?? ''), ['class' => $data['li_class'] ?? 'nav-item'])
        ->nickname($data['nickname'])
        ->data([
            'order' => $data['order'] ?? 0,
            'activematches' => $data['active'] ?? '',
            'permission' => $data['permission'] ?? [],
        ])
        ->prepend($this->createMenuIcon($data['icon'] ?? null));

        $sub_menu->link->attr([
            'class' => $data['a_class'] ?? 'nav-link',
            'href' => '#'. $data['nickname'] ?? 'sidemenu',
            'data-bs-parent' => $data['parent'] ?? '#sidebar-menu'
        ]);
        $sub_menu->url('#'. $data['nickname'] ?? 'sidemenu');

        return $sub_menu;
    }

    protected function childMain ($menu, $data) {
        $menu->add($this->createMenuTitle($data['title']), [
                'route' => $data['route'],
                'class' => $data['li_class'] ?? 'nav-item',
            ])
            ->data([
                'order' => $data['order'] ?? 0,
                'activematches' => $data['active'] ?? '',
                'permission' => $data['permission'] ?? [],
            ])
            ->prepend($this->createMenuIcon($data['icon'] ?? null))
            ->link->attr(['class' => $data['a_class'] ?? 'nav-link']);
    }

    protected function popupMenu ($menu, $data) {
        $menu->add($this->createMenuTitle($data['title']), [
                'url' => 'javascript:void(0)',
                'class' => 'nav-item',
                'data-bs-toggle' => $data['extra']['toggle'],
                'data-bs-target' => $data['extra']['target']
            ])
            ->data([
                'order' => $data['order'] ?? 0,
                'activematches' => $data['active'] ?? '',
                'permission' => $data['permission'] ?? [],
            ])
            ->link->attr(['class' => 'nav-link']);
    }

    protected function createMenuTitle($title)
    {
        return "<span class='nav-text ms-2'>$title</span>";
    }

    protected function createMenuIcon($cutomeIcon = null)
    {
        $icon = '';

        if(isset($cutomeIcon)) {
            $icon = $cutomeIcon;
        }

        return $icon;
    }

    public function createHomeMenu($menu) {
        $huimenu = \Menu::get('HopeUIHorizontalMenu');
        if(\Menu::exists('HopeUIHorizontalMenu') && isset($huimenu)) {
            $home = \Menu::get('HopeUIHorizontalMenu')->home;
        } else {
            // Home
            $home = $this->parentMenu($menu, [
                'icon' => '<svg class="icon-20" width="20" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path d="M9.14373 20.7821V17.7152C9.14372 16.9381 9.77567 16.3067 10.5584 16.3018H13.4326C14.2189 16.3018 14.8563 16.9346 14.8563 17.7152V20.7732C14.8562 21.4473 15.404 21.9951 16.0829 22H18.0438C18.9596 22.0023 19.8388 21.6428 20.4872 21.0007C21.1356 20.3586 21.5 19.4868 21.5 18.5775V9.86585C21.5 9.13139 21.1721 8.43471 20.6046 7.9635L13.943 2.67427C12.7785 1.74912 11.1154 1.77901 9.98539 2.74538L3.46701 7.9635C2.87274 8.42082 2.51755 9.11956 2.5 9.86585V18.5686C2.5 20.4637 4.04738 22 5.95617 22H7.87229C8.19917 22.0023 8.51349 21.8751 8.74547 21.6464C8.97746 21.4178 9.10793 21.1067 9.10792 20.7821H9.14373Z" fill="currentColor"></path></svg>',
                'title' => 'Home',
                'nickname' => 'home',
                'order' => 10,
            ]);
        }

        return $home;
    }
}
