<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DomainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $collection = [

            /* DOMINIOS CULTURALES */
            [// 01 Patrimonio Cultural y Natural
                'title' => 'Patrimonio Cultural y Natural',
                'description' => null
            ],
            [// 02 Presentaciones Artísticas y Celebraciones
                'title' => 'Presentaciones Artísticas y Celebraciones',
                'description' => null
            ],
            [// 03 Artes Visuales y Artesanías
                'title' => 'Artes Visuales y Artesanías',
                'description' => null
            ],
            [// 04 Libros y Prensa
                'title' => 'Libros y Prensa',
                'description' => null
            ],
            [// 05 Medios Audiovisuales e Interactivos
                'title' => 'Medios Audiovisuales e Interactivos',
                'description' => null
            ],
            [// 06 Diseño y Servicios Creativos
                'title' => 'Diseño y Servicios Creativos',
                'description' => null
            ],

            /* DOMINIOS TRANSVERSALES */
            [// 07 Patrimonio Cultural Inmaterial
                'title' => 'Patrimonio Cultural Inmaterial',
                'description' => null
            ],
            [// 08 Archivística y Preservación
                'title' => 'Archivística y Preservación',
                'description' => null
            ],
            [// 09 Educación y Capacitación
                'title' => 'Educación y Capacitación',
                'description' => null
            ],
            [// 10 Equipamiento y Materiales de Apoyo
                'title' => 'Equipamiento y Materiales de Apoyo',
                'description' => null
            ],

            /* DOMINIOS RELACIONADOS */
            [// 11 Turismo
                'title' => 'Turismo',
                'description' => null
            ],
            [// 12 Deportes y Recreación
                'title' => 'Deportes y Recreación',
                'description' => null
            ],
        ];

        DB::table('domains')->insert($collection);
    }
}
