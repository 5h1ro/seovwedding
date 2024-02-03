<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        $name = [
            'Admin',
            'Member',
        ];

        for ($i = 0; $i < count($name); $i++) {
            $user = Role::create([
                'name'          => $name[$i],
            ]);
            $user->save();
        };
    }
}
