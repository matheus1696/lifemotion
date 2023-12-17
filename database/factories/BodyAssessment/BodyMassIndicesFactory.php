<?php

namespace Database\Factories\BodyAssessment;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\BodyAssessment\Body_Mass_Index>
 */
class BodyMassIndicesFactory extends Factory
{

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $user = User::inRandomOrder()->first();
        $height = $user->Heights->random()->height;
        $weight = $user->Weights->random()->weight;

        $bmi = $weight / (($height * $height) / 10000);

        return [
            'bmi' => $bmi,
            'user_id' => $user->id,
            'created_at' => now()
                ->subYears(rand(1, 5)) // Intervalo de 1 a 5 anos
                ->subMonths(rand(0, 11)) // Intervalo de 0 a 11 meses
                ->subDays(rand(0, 30)), // Intervalo de 0 a 30 dias
        ];
    }
}
