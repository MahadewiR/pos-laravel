<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        // $faker = faker::create('id_ID');

        // for ($i = 1; $i <= 100; $i++) {
        //     user::insert([
        //         'id_level' =>$faker->id_lavel,
        //         'name' => $faker->name,
        //         'email' => $faker->email,
        //         'password' => Hash::make($faker->name),
        //     ]);
        // }
        // User::factory(10)->create();
        // $this->call([
        //     UserSeeder::class
        // ]);
        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
