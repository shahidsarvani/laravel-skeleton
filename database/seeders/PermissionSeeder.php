<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $permissions = [
            [
                'name' => 'add-role'
            ],
            [
                'name' => 'edit-role'
            ],
            [
                'name' => 'view-role'
            ],
            [
                'name' => 'delete-role'
            ],
            [
                'name' => 'add-permission'
            ],
            [
                'name' => 'edit-permission'
            ],
            [
                'name' => 'view-permission'
            ],
            [
                'name' => 'delete-permission'
            ],
        ];
        foreach($permissions as $item) {
            Permission::create($item);
        }
    }
}
