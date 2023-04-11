<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Poste;
use App\Models\Enterprise;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // $this->call([
        //     UserTableSeeder::class,
        //     EnterpriseSeeder::class,
        //     PosteSeeder::class,
        // ]);
        User::factory(10)->create();
        Enterprise::factory(10)->create();
        Poste::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
