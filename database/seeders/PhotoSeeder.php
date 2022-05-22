<?php

namespace Database\Seeders;

use App\Models\Photo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PhotoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $file_photo = [
            asset('template/template1/gambar1.jpg'),
            asset('template/template1/gambar2.jpg'),
            asset('template/template1/gambar3.jpg'),
            asset('template/template1/gambar4.jpg'),
            asset('template/template1/gambar5.jpg'),
        ];

        $id_invitation = [
            1,
            1,
            1,
            1,
            1,
        ];

        for ($i = 0; $i < count($file_photo); $i++) {
            $user = Photo::create([
                'file_photo'            => $file_photo[$i],
                'id_invitation'         => $id_invitation[$i],
            ]);
            $user->save();
        };
    }
}
