<?php

namespace Database\Seeders;

use App\Models\StatisticalFramework;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StatisticalFrameworkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        /* StatisticalFramework::factory()->create();
        StatisticalFramework::factory()->deleted()->create();
        StatisticalFramework::factory(5)->create(); */

        StatisticalFramework::factory(68)->randomCiuo08()->create();
    }
}
