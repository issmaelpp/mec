<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubdomainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $collection = [
            /* DOMINIOS CULTURALES */
            [// 01 - Antiguedades
                'title' => 'Antigüedades',
                'description' => null
            ],
            [// 02 - Instrumentos Musicales
                'title' => 'Instrumentos Musicales',
                'description' => null
            ],
            [// 03 - Grabaciones
                'title' => 'Grabaciones',
                'description' => null
            ],
            [// 04 - Pinturas
                'title' => 'Pinturas',
                'description' => null
            ],
            [// 05 - Otras Artes Visuales
                'title' => 'Otras Artes Visuales',
                'description' => null
            ],
            [// 06 - Artesanías
                'title' => 'Artesanías',
                'description' => null
            ],
            [// 07 - Joyas
                'title' => 'Joyas',
                'description' => null
            ],
            [// 08 - Fotografías
                'title' => 'Fotografías',
                'description' => null
            ],
            [// 09 - Libros
                'title' => 'Libros',
                'description' => null
            ],
            [// 10 - Diarios
                'title' => 'Diarios',
                'description' => null
            ],
            [// 11 - Otros Materiales Impresos
                'title' => 'Otros Materiales Impresos',
                'description' => null
            ],
            [// 12 - Filmes y Videos
                'title' => 'Filmes y Videos',
                'description' => null
            ],
            [// 13 - Otros
                'title' => 'Otros',
                'description' => null
            ],
            [// 14 - Arquitectura y Diseño
                'title' => 'Arquitectura y Diseño',
                'description' => null
            ],

            /* EQUIPAMIENTOS Y MATERIALES DE APOYO DE DOMINIOS CULTURALES */
            [// 15 - Celebraciones
                'title' => 'Celebraciones',
                'description' => null
            ],
            [// 16 - Musicas
                'title' => 'Musicas',
                'description' => null
            ],
            [// 17 - Fotografías (Existe en el id 8)
                'title' => 'Fotografías',
                'description' => null
            ],
            [// 18 - Audiovisuales
                'title' => 'Audiovisuales',
                'description' => null
            ],
            [// 19 - Computadoras y Equipamientos Relacionados
                'title' => 'Computadoras y Equipamientos Relacionados',
                'description' => null
            ],
            [// 20 - Otros
                'title' => 'Otros',
                'description' => null
            ],

            /* DOMINIOS TRANSVERSALES */
            [// 21 - Educación Cultural
                'title' => 'Educación Cultural',
                'description' => null
            ],
            [// 22 - Patrimonio Inmaterial
                'title' => 'Patrimonio Inmaterial',
                'description' => null
            ],

            /* DOMINIOS RELACIONADOS */
            [// 23 - Turismo
                'title' => 'Turismo',
                'description' => null
            ],
            [// 24 - Deportes y Recreación
                'title' => 'Deportes y Recreación',
                'description' => null
            ],

            /* EQUIPAMIENTOS Y MATERIALES DE APOYO DE DOMINIOS RELACIONADOS */
            [// 25 - Turismo (Existe en el id 23)
                'title' => 'Turismo',
                'description' => null
            ],
            [// 26 - Deportes
                'title' => 'Deportes',
                'description' => null
            ],
            [// 27 - Deportes y Recreación (Existe en el id 24)
                'title' => 'Deportes y Recreación',
                'description' => null
            ],
            [// 28 - Juegos de Azar
                'title' => 'Juegos de Azar',
                'description' => null
            ],
        ];

        DB::table('subdomains')->insert($collection);
    }
}
