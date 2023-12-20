<?php

namespace Database\Seeders;

use App\Models\Body\BodyMassIndex;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BodyMassIndexSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        BodyMassIndex::factory(500)->create();
    }
}
