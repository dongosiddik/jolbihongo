<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role=Role::create([
            'name' => 'Admin'
        ]);
        $role=Role::create([
            'name' => 'User'
        ]);
    }
}
