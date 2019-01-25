<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\AppSetting;

class AppSettingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        // saveLocal: 'sessionStorage', 'localStorage'
        AppSetting::create([
            'user_id' => 1,
            'type' => 'setting',
            'name' => 'layout_setting',
            'value' => '{
                "saveLocal": "sessionStorage",
                "storeKey": "huisetting",
                "setting": {
                    "app_name": { "value" : "Hope UI"},
                    "theme_scheme_direction": { "value": "ltr" },
                    "theme_scheme": { "value": "light" },
                    "theme_color": { "value": "theme-color-default" },
                    "theme_style_appearance": {"value": []},
                    "theme_transition": {"value": null},
                    "theme_font_size": {"value": "theme-fs-md"},
                    "page_layout": {"value" : "container-fluid"},
                    "header_navbar": {"value" : "default"},
                    "header_banner": {"value" : "default"},
                    "sidebar_color": {"value" : "sidebar-white"},
                    "sidebar_type" : {"value" : []},
                    "sidebar_menu_style": {"value" : "left-bordered"},
                    "card_color": {"value": "card-default"},
                    "footer": {"value" : "default"},
                    "body_font_family": {"value" : null},
                    "heading_font_family": {"value" : null}
                }
            }',
            'status' => 1,
            'is_global' => 1,
        ]);
    }
}
