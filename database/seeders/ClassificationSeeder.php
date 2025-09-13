<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClassificationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $collection = [
            ['acronym' => 'CIIU 4', 'title' => 'Clasificación Industrial Internacional Uniforme de todas las Actividades Económicas', 'description' => null],
            ['acronym' => 'CPC 2', 'title' => 'Clasificación Central de Productos', 'description' => null],
            ['acronym' => 'SA 07', 'title' => 'Sistema Armonizado de Descripción y Codificación de Mercancías 2007', 'description' => null],
            ['acronym' => 'SITC 4', 'title' => 'Clasificación Estándar de Comercio Internacional', 'description' => null],
            ['acronym' => 'CIUO 08', 'title' => 'Clasificación Internacional Uniforme de Ocupaciones', 'description' => null],
            ['acronym' => 'ICATUS', 'title' => 'Clasificación Internacional de Actividades para Estadísticas sobre el Uso del Tiempo de las Naciones Unidas', 'description' => null],
            ['acronym' => 'EBOPS', 'title' => 'Clasificación Extendida de Servicios de la Balanza de Pagos', 'description' => null],
        ];

        DB::table('classifications')->insert($collection);
    }
}
