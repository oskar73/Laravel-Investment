<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run(): void
    {
        $permissions = [
            [
                'name' => 'appointment',
                'title' => 'Appointment',
            ],
            [
                'name' => 'blog',
                'title' => 'Blog',
            ],
            [
                'name' => 'e-commerce',
                'title' => 'E-commerce',
            ],
            [
                'name' => 'file-manager',
                'title' => 'File Manager',
            ],
            [
                'name' => 'chat',
                'title' => 'Chat',
            ],
            [
                'name' => 'mail',
                'title' => 'Mail',
            ],
            [
                'name' => 'social',
                'title' => 'Social',
            ]
        ];

        foreach ($permissions as $value) {
            Permission::create($value);
        }
    }
}
