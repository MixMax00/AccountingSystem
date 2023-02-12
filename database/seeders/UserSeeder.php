<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::updateOrCreate([
            "role_id"  => Role::where('slug','superadmin')->first()->id,
            "name"     => "Super Admin",
            "email"    => "superadmin@gmail.com",
            "password" => Hash::make("@Lbhsc$123#"),
        ]);

        User::updateOrCreate([
            "role_id"  => Role::where('slug','admin')->first()->id,
            "name"     => "Admin",
            "email"    => "admin@gmail.com",
            "password" => Hash::make("12345678"),
        ]);
    }
}
