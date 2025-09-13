<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CycleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $collection = [
            [// 01 Creación
                'title' => 'Creación',
                'description' => null
            ],
            [// 02 Producción
                'title' => 'Producción',
                'description' => null
            ],
            [// 03 Difusión/Transmisión
                'title' => 'Difusión/Transmisión',
                'description' => null
            ],
            [// 04 Exhibición/Recepción
                'title' => 'Exhibición/Recepción',
                'description' => null
            ],
            [// 05 Consumo/Participación
                'title' => 'Consumo/Participación',
                'description' => null
            ],
            [// 06 Archivística/Preservación
                'title' => 'Archivística/Preservación',
                'description' => null
            ],
            [// 07 Educación/Capacitación
                'title' => 'Educación/Capacitación',
                'description' => null
            ],
            [// 08 Producción/Difusión
                'title' => 'Producción/Difusión',
                'description' => null
            ],
            [// 09 Difusión
                'title' => 'Difusión',
                'description' => null
            ],
        ];

        DB::table('cycles')->insert($collection);
    }
}
