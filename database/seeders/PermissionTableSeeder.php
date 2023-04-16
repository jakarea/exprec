<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        //Permissions
        $permissions = [
            'role-list',
            'role-create',
            'role-edit',
            'role-delete',
            'course-list',
            'course-create',
            'course-edit',
            'course-delete',
            'lesson-list',
            'lesson-create',
            'lesson-edit',
            'lesson-delete',
            'module-list',
            'module-create',
            'module-edit',
            'module-delete',
            'user-list',
            'user-create',
            'user-edit',
            'user-delete',
        ];
        
        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }
    }
}
