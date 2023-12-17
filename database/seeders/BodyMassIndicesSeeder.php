<?php

namespace Database\Seeders;

use App\Models\BodyAssessment\BodyMassIndices;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BodyMassIndicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        BodyMassIndices::factory(500)->create();
    }
}
