<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        user::create([
        'name' => 'Neythan',
        'email' => 'nsabogalgaitan@gmail.com',
        'password' => bcrypt('123456789'),
        ])->assignRole('Admin');

        User::factory()->create();
    }
}
