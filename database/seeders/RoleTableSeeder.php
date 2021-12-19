<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = [
            ['id'=>'1','name'=>'Admin'],
            ['id'=>'2','name'=>'User'],
        ];
        Role::insert($role);
    }
}
