<?php

namespace Database\Seeders;

use App\Models\Member;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MemberSeeder extends Seeder
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
            '2',
        ];

        for ($i = 0; $i < count($name); $i++) {
            $user = Member::create([
                'name'              => $name[$i],
                'id_user'           => $id_user[$i],
            ]);
            $user->save();
        };
    }
}
