<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    public function run(): void
    {
        $role = new Role();
        $role->name = "admin";
        $role->description = "Todos los permisos";
        $role->save();
    }
}
