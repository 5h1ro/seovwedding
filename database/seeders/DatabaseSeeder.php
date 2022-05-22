<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            RoleSeeder::class,
            UserSeeder::class,
            AdminSeeder::class,
            MemberSeeder::class,
            InvitationSeeder::class,
            ScheduleSeeder::class,
            LoveStorySeeder::class,
            PhotoSeeder::class,
            GreetingSeeder::class,
        ]);
    }
}
