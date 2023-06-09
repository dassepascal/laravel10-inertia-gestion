<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Enterprise;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Enterprise>
 */
class EnterpriseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

protected $model = Enterprise::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->company,
            'activity'=> $this->faker->jobTitle,
            'phone'=> $this->faker->phoneNumber,
            'address'=> $this->faker->address,
            'site'=> $this->faker->url,
            'user_id' =>User:: all()-> random()->id,
        ];
    }
}
