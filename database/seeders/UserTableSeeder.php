<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Poste;
use App\Models\Enterprise;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory(10)->create()->each(function ($user) {

            $user->enterprises()->saveMany(Enterprise::factory(10)->create([
                'user_id'=>$user->id,

            ]));

            $user->postes()->saveMany(Poste::factory(10))->create([

                'user_id' => $user->id,

                'enterprise_id' => rand(1, 10),
            ]);

        });
    }
}
