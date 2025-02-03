<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class RolePermissonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $ownerRole = Role::create([
            "name" => "owner",
        ]);
        $buyerRole = Role::create([
            "name" => "buyer",
        ]);

        $user = User::create([
            "name" => "Budi Ardiansyah",
            "email" => "budi.owner@gmail.com",
            "password" => Hash::make("123123123")
        ]);

        $user->assignRole($ownerRole);
    }
}
