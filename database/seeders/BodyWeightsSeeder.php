<?php

namespace Database\Seeders;

use App\Models\BodyAssessment\BodyWeights;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BodyWeightsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        BodyWeights::factory(50000)->create();
    }
}
