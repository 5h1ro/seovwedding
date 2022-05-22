<?php

namespace Database\Seeders;

use App\Models\LoveStory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LoveStorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // asset('template/template1/gambar1.png'),
        // asset('template/template1/gambar2.png'),
        // asset('template/template1/gambar3.png'),
        // asset('template/template1/gambar4.png'),
        // asset('template/template1/gambar5.png'),
        $year_ls = [
            2019,
            2021
        ];

        $story_ls = [
            'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse rhoncus eget leo ut sodales. Vestibulum sodales risus vitae nibh tristique, nec ultrices eros condimentum. Mauris vestibulum risus eu nibh porttitor luctus. Suspendisse suscipit metus et velit placerat placerat. Etiam at nunc nec velit semper placerat. Fusce mattis elit a nulla gravida fermentum. Duis sagittis posuere auctor.',
            'Mauris in ante vitae velit dapibus dapibus vel id lorem. Aliquam quis fringilla leo, eget malesuada felis. Nullam varius vitae magna sit amet elementum. Curabitur sit amet orci porta, ultrices nulla at, eleifend nulla. '
        ];

        $id_invitation = [
            1,
            1
        ];

        for ($i = 0; $i < count($year_ls); $i++) {
            $user = LoveStory::create([
                'year_ls'               => $year_ls[$i],
                'story_ls'              => $story_ls[$i],
                'id_invitation'         => $id_invitation[$i],
            ]);
            $user->save();
        };
    }
}
