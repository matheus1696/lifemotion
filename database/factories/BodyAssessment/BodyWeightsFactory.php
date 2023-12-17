<?php

namespace Database\Factories\BodyAssessment;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\BodyAssessment\BodyWeights>
 */
class BodyWeightsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        return [
            'weight' => rand(60.00,110.00),
            'user_id' => User::inRandomOrder()->first(),
        ];
    }
}
