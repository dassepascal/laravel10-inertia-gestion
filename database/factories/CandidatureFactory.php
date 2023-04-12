<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Enterprise;
use App\Models\Candidature;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Candidature>
 */
class CandidatureFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

protected $model = Candidature::class;

    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence,
            'description' => $this->faker->text,
            'lien' => $this->faker->url,
            'user_id' =>User:: all()-> random()->id,
            'enterprise_id' =>Enterprise::all()-> random()->id,
        ];
    }
}
