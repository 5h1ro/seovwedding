<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $name = [
            'Nurhakiki',
        ];

        $id_user = [
            '1',
        ];

        for ($i = 0; $i < count($name); $i++) {
            $user = Admin::create([
                'name'              => $name[$i],
                'id_user'           => $id_user[$i],
            ]);
            $user->save();
        };
    }
}
