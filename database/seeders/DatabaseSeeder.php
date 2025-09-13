<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            CycleSeeder::class,
            ClassificationSeeder::class,
            DomainSeeder::class,
            SubdomainSeeder::class,
            DimensionSeeder::class,
            PersonSeeder::class,
            OrganizationSeeder::class,
            StatisticalFrameworkSeeder::class,
        ]);
    }
}
