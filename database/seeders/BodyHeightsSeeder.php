<?php

namespace Database\Seeders;

use App\Models\BodyAssessment\BodyHeights;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BodyHeightsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        BodyHeights::factory(350)->create();
    }
}
