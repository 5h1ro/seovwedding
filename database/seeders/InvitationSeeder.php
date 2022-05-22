<?php

namespace Database\Seeders;

use App\Models\Invitation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InvitationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = Invitation::create([
            'name_couple'       => 'Shiro & Yuuki',
            'id_member'         => 1,
            'nickname_man'      => 'Shiro',
            'fullname_man'      => 'Shiro Tamadoki S.Kom',
            'father_man'        => 'Drs. Sutrisno S.H, M.Cs',
            'mother_man'        => 'Nike Aprillia S.E, M.Kom',
            'child_man'         => 1,
            'photo_man'         => asset('template/template1/couple1.jpeg'),
            'nickname_woman'    => 'Yuuki',
            'fullname_woman'    => 'Yuuki Kojiro S.St',
            'father_woman'      => 'H. Suprapto S.T',
            'mother_woman'      => 'Hj. Aini Setia S.T, M.Si',
            'child_woman'       => 3,
            'photo_woman'       => asset('template/template1/couple2.jpeg'),
            'photo_couple'      => asset('template/template1/example1.jpeg'),
            'countdown'         => '2022-05-26 15:03:57',
            'bank'              => 'bni',
            'number_bank'       => '81810000000000',
            'name_bank'         => 'Shiro Tamadoki',
            'name_gift'         => 'Shiro & Yuuki',
            'number'            => '085800000000',
            'address_gift'      => 'Jl. Cendrawasih no.18, Kota Madiun',
            'slug'              => 'shiro-yuuki',
        ]);
        $user->save();
    }
}
