<?php

namespace Database\Seeders;

use App\Models\Greeting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GreetingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $guest = [
            'Toki Anakawa',
            'Kojiro Huna',
            'Mina Korota',
        ];

        $greetings = [
            'Maecenas nec turpis nec sapien sagittis commodo a vitae nisi. Phasellus vitae tincidunt metus, nec vehicula leo. Nunc et lectus a nisi semper interdum molestie sodales ante.',
            'Maecenas commodo sed ligula non egestas. Praesent suscipit fermentum tincidunt. Donec rutrum ex non maximus semper.',
            'Etiam eu tortor ac dolor placerat pulvinar. Nam dignissim pellentesque augue id scelerisque.',
        ];

        $attendance = [
            'Hadir',
            'Akan hadir',
            'Tidak hadir',
        ];

        $id_invitation = [
            1,
            1,
            1,
        ];

        for ($i = 0; $i < count($guest); $i++) {
            $greeting = Greeting::create([
                'guest'            => $guest[$i],
                'greeting'       => $greetings[$i],
                'attendance'      => $attendance[$i],
                'id_invitation'   => $id_invitation[$i],
            ]);
            $greeting->save();
        };
    }
}
