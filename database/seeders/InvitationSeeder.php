<?php

namespace Database\Seeders;

use App\Models\Invitation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InvitationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $faker = \Faker\Factory::create();
        Invitation::create([
            'name' => $faker->name,
            'email' => $faker->email,
            'resident_or_passport_id' => $faker->city,
            'nationality' => 'American',
        ]);
        
    }
}
