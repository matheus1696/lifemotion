<?php

namespace Database\Factories\BodyAssessment;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\BodyAssessment\BodyHeights>
 */
class BodyHeightsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'height' => rand(160.00,180.00),
            'user_id' => User::factory(),
        ];
    }
}
