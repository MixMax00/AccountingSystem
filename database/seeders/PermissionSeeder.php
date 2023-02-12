<?php

namespace Database\Seeders;

use App\Models\Module;
use App\Models\Permission;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $moduleAppDashboard = Module::updateOrCreate([
            "name" => "Admin Dashboard",
            "slug" => "admin.Dashboard"
        ]);

        Permission::updateOrCreate([
            "module_id" => $moduleAppDashboard->id,
            "name"      => "Access Dashboard",
            "slug"      => "app.dashboard"
        ]);

        $moduleAppRole = Module::updateOrCreate([
            "name" => "Role Management",
            "slug" => "role.Management"
        ]);

        Permission::updateOrCreate([
            "module_id" => $moduleAppRole->id,
            "name"      => "Access Role",
            "slug"      => "app.roles.index"
        ]);

        Permission::updateOrCreate([
            "module_id" => $moduleAppRole->id,
            "name"      => "Create Role",
            "slug"      => "app.roles.create"
        ]);

        Permission::updateOrCreate([
            "module_id" => $moduleAppRole->id,
            "name"      => "Edit Role",
            "slug"      => "app.roles.update"
        ]);

        Permission::updateOrCreate([
            "module_id" => $moduleAppRole->id,
            "name"      => "Delete Role",
            "slug"      => "app.roles.delete"
        ]);
    }
}
