<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\UserSeeder;
use Database\Seeders\CategorySeeder;
use Illuminate\Foundation\Auth\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // jokon fake na bania nija thaka banobo tokon ababa korta hoba
        $this->call([
            // akana jotogulo seeder call kora hoba sb gulo seed hoita thkba
            UserSeeder::class,
            CategorySeeder::class,


        ]);

        // jokon anak gulo face user banabo tokon ababa korta hoba
       
    }
}
