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
        $nationality = [
            'American',
            'British',
            'Canadian',
            'Australian',
        ];
        $status = ['pending','accept','reject'];
        for($i=0;$i<20;$i++)
        {
            shuffle($nationality);
            shuffle($status);
            $faker = \Faker\Factory::create();
            Invitation::create([
                'name' => $faker->name,
                'email' => $faker->email,
                'resident_or_passport_id' => $faker->city,
                'nationality' => $nationality[0],
                'status' => $status[0],
            ]);
        }
    }
}
