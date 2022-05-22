<?php

namespace Database\Seeders;

use App\Models\Schedule;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ScheduleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $name_schedule = [
            'Akad Nikah',
            'Resepsi',
        ];

        $date_schedule = [
            '2022-05-26 07:03:57',
            '2022-05-26 10:03:57',
        ];

        $address_schedule = [
            'Alamat mempelai wanita',
            'Jl. Kasuari no 19 Kota Madiun',
        ];

        $location_schedule = [
            null,
            'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3954.780246391609!2d111.53385781529178!3d-7.5988788772068805!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e79bf11f2294cbb%3A0x751d63928ca621fb!2sJl.%20Kasatrian%2029-1%2C%20Nglames%2C%20Kec.%20Madiun%2C%20Kabupaten%20Madiun%2C%20Jawa%20Timur%2063151!5e0!3m2!1sid!2sid!4v1652373336928!5m2!1sid!2sid',
        ];

        $link_location_schedule = [
            null,
            'https://goo.gl/maps/2TGDeRSG58kvP6Ck6',
        ];

        $id_invitation = [
            1,
            1
        ];

        for ($i = 0; $i < count($name_schedule); $i++) {
            $user = Schedule::create([
                'name_schedule'             => $name_schedule[$i],
                'date_schedule'             => $date_schedule[$i],
                'address_schedule'          => $address_schedule[$i],
                'location_schedule'         => $location_schedule[$i],
                'link_location_schedule'    => $link_location_schedule[$i],
                'id_invitation'             => $id_invitation[$i],
            ]);
            $user->save();
        };
    }
}
