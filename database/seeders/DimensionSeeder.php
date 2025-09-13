<?php

namespace Database\Seeders;

use App\Enums\DimensionMeasureEnum;
use App\Enums\DimensionTypeEnum;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DimensionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        {
            $collection = [
    /** SERVICIOS CULTURALES */
        /** EBOPS */
            /* Core Cultural Services */
                [// 8.4.1
                    'code' => '8.4.1',
                    'note' => 'Esta categoría también incluye otras licencias artísticas y literarias como las de artistas, autores, compositores, escultores y otros, por ejemplo, diseñadores escénicos, de disfraces y de iluminación.',
                    'label' => 'Licencias para reproducir y/o distribuir productos audiovisuales',
                    'measure' => DimensionMeasureEnum::servicios_culturales,
                    'type' => null,
                    'classification_id' => 7,
                    'cycle_id' => null,
                    'domain_id' => null,
                    'subdomain_id' => null
                ],
                [// 8.4.2
                    'code' => '8.4.2',
                    'note' => null,
                    'label' => 'Licencias para reproducir y/o distribuir productos relacionados',
                    'measure' => DimensionMeasureEnum::servicios_culturales,
                    'type' => null,
                    'classification_id' => 7,
                    'cycle_id' => null,
                    'domain_id' => null,
                    'subdomain_id' => null
                ],
                [// 9.3.1
                    'code' => '9.3.1',
                    'note' => 'Entre los servicios de las agencias de noticias se incluye, además de noticias, fotografías y crónicas a los medios de comunicación.',
                    'label' => 'Servicios de agencias de noticias',
                    'measure' => DimensionMeasureEnum::servicios_culturales,
                    'type' => null,
                    'classification_id' => 7,
                    'cycle_id' => null,
                    'domain_id' => null,
                    'subdomain_id' => null
                ],
                [// 9.3.2
                    'code' => '9.3.2',
                    'note' => 'Incluye servicios bibliotecarios y de archivos.',
                    'label' => 'Otros servicios informativos',
                    'measure' => DimensionMeasureEnum::servicios_culturales,
                    'type' => null,
                    'classification_id' => 7,
                    'cycle_id' => null,
                    'domain_id' => null,
                    'subdomain_id' => null
                ],
                [// 10.2.2
                    'code' => '10.2.2',
                    'note' => null,
                    'label' => 'Publicidad, investigación de mercado y encuestas de opinión',
                    'measure' => DimensionMeasureEnum::servicios_culturales,
                    'type' => null,
                    'classification_id' => 7,
                    'cycle_id' => null,
                    'domain_id' => null,
                    'subdomain_id' => null
                ],
                [// 10.3.1.1
                    'code' => '10.3.1.1',
                    'note' => null,
                    'label' => 'Servicios de arquitectura',
                    'measure' => DimensionMeasureEnum::servicios_culturales,
                    'type' => null,
                    'classification_id' => 7,
                    'cycle_id' => null,
                    'domain_id' => null,
                    'subdomain_id' => null
                ],
                [// 11.1.1
                    'code' => '11.1.1',
                    'note' => null,
                    'label' => 'Productos audiovisuales',
                    'measure' => DimensionMeasureEnum::servicios_culturales,
                    'type' => null,
                    'classification_id' => 7,
                    'cycle_id' => null,
                    'domain_id' => null,
                    'subdomain_id' => null
                ],
                [// 11.1.2
                    'code' => '11.1.2',
                    'note' => 'Incluye otros servicios culturales.',
                    'label' => 'Servicios relacionados',
                    'measure' => DimensionMeasureEnum::servicios_culturales,
                    'type' => null,
                    'classification_id' => 7,
                    'cycle_id' => null,
                    'domain_id' => null,
                    'subdomain_id' => null
                ],
                [// 11.2.3
                    'code' => '11.2.3',
                    'note' => 'Los servicios recreacionales se incluyen bajo el Código 11.2.3 - Servicios del patrimonio y recreacionales.',
                    'label' => 'Servicios del patrimonio y recreacionales',
                    'measure' => DimensionMeasureEnum::servicios_culturales,
                    'type' => null,
                    'classification_id' => 7,
                    'cycle_id' => null,
                    'domain_id' => null,
                    'subdomain_id' => null
                ],
    
            /* Equipamiento y Materiales de Apoyo */
                [// 8.3
                    'code' => '8.3',
                    'note' => null,
                    'label' => 'Licencias para reproducir y/o distribuir programas computacionales',
                    'measure' => DimensionMeasureEnum::servicios_culturales,
                    'type' => null,
                    'classification_id' => 7,
                    'cycle_id' => null,
                    'domain_id' => 10,
                    'subdomain_id' => null
                ],
                [// 9.2.1
                    'code' => '9.2.1',
                    'note' => null,
                    'label' => 'Servicios informáticos',
                    'measure' => DimensionMeasureEnum::servicios_culturales,
                    'type' => null,
                    'classification_id' => 7,
                    'cycle_id' => null,
                    'domain_id' => 10,
                    'subdomain_id' => null
                ],
                [// 9.2.2
                    'code' => '9.2.2',
                    'note' => null,
                    'label' => 'Otros servicios informáticos',
                    'measure' => DimensionMeasureEnum::servicios_culturales,
                    'type' => null,
                    'classification_id' => 7,
                    'cycle_id' => null,
                    'domain_id' => 10,
                    'subdomain_id' => null
                ],
    
            /* Servicios Culturales Relacionados */
                [// 4.2.3
                    'code' => '4.2.3',
                    'note' => 'Esta categoría debe incluir todo gasto cultural realizado en el extranjero durante cualquier tipo de viaje (de estudio, negocio o por motivos de salud).',
                    'label' => 'Viajes - Otros de naturaleza personal',
                    'measure' => DimensionMeasureEnum::servicios_culturales,
                    'type' => null,
                    'classification_id' => 7,
                    'cycle_id' => null,
                    'domain_id' => 11,
                    'subdomain_id' => null
                ],
    
    /** ACTIVIDADES PRODUCTIVAS */
        /** CIIU 4 */
          /* DOMINIOS CULTURALES */
            /* Patrimonio Cultural y Natural */
                [// 9000
                    'code' => '9000',
                    'note' => null,
                    'label' => 'Actividades creativas, artísticas y de entretenimiento',
                    'measure' => DimensionMeasureEnum::actividades_productivas,
                    'type' => DimensionTypeEnum::dominios_culturales,
                    'classification_id' => 1,
                    'cycle_id' => null,
                    'domain_id' => 1,
                    'subdomain_id' => null
                ],
                [// 9102
                    'code' => '9102',
                    'note' => 'Excluye la restauración de obras de arte y objetos que forman partes de colecciones de museos (en 9000).',
                    'label' => 'Actividades de museos y gestión de lugares y edificios históricos',
                    'measure' => DimensionMeasureEnum::actividades_productivas,
                    'type' => DimensionTypeEnum::dominios_culturales,
                    'classification_id' => 1,
                    'cycle_id' => null,
                    'domain_id' => 1,
                    'subdomain_id' => null
                ],
                [// 9103
                    'code' => '9103',
                    'note' => null,
                    'label' => 'Actividades de jardines botánicos y zoológicos y reservas naturales',
                    'measure' => DimensionMeasureEnum::actividades_productivas,
                    'type' => DimensionTypeEnum::dominios_culturales,
                    'classification_id' => 1,
                    'cycle_id' => null,
                    'domain_id' => 1,
                    'subdomain_id' => null
                ],
                [// 4774
                    'code' => '4774',
                    'note' => 'Incluye ventas al por menor de antigüedades. No se incluye el código 4773 "Actividades de galerías comerciales, de antigüedades, actividades de casas de subasta (minorista)”, dado que su alcance es demasiado amplio.',
                    'label' => 'Venta al por menor de artículos de segunda mano',
                    'measure' => DimensionMeasureEnum::actividades_productivas,
                    'type' => DimensionTypeEnum::dominios_culturales,
                    'classification_id' => 1,
                    'cycle_id' => null,
                    'domain_id' => 1,
                    'subdomain_id' => null
                ],
    
            /* Presentaciones Artisticas y Celebraciones */
                [// 9000
                    'code' => '9000',
                    'note' => 'Producción de presentaciones teatrales en vivo, conciertos, óperas y otras producciones escénicas; actividades de grupos, circos o compañías, orquestas o bandas; actividades de artistas individuales, tales como músicos, autores y actividades de productores o empresarios de eventos artísticos en vivo con o sin instalaciones.',
                    'label' => 'Actividades creativas, artísticas y de entretenimiento',
                    'measure' => DimensionMeasureEnum::actividades_productivas,
                    'type' => DimensionTypeEnum::dominios_culturales,
                    'classification_id' => 1,
                    'cycle_id' => null,
                    'domain_id' => 2,
                    'subdomain_id' => null
                ],
                [// 3220
                    'code' => '3220',
                    'note' => null,
                    'label' => 'Fabricación de instrumentos musicales',
                    'measure' => DimensionMeasureEnum::actividades_productivas,
                    'type' => DimensionTypeEnum::dominios_culturales,
                    'classification_id' => 1,
                    'cycle_id' => null,
                    'domain_id' => 2,
                    'subdomain_id' => null
                ],
                [// 5920
                    'code' => '5920',
                    'note' => null,
                    'label' => 'Actividades de grabación de sonido y edición música',
                    'measure' => DimensionMeasureEnum::actividades_productivas,
                    'type' => DimensionTypeEnum::dominios_culturales,
                    'classification_id' => 1,
                    'cycle_id' => null,
                    'domain_id' => 2,
                    'subdomain_id' => null
                ],
                [// 4762
                    'code' => '4762',
                    'note' => null,
                    'label' => 'Venta al por menor de grabaciones de música y de vídeo en comercios especializados',
                    'measure' => DimensionMeasureEnum::actividades_productivas,
                    'type' => DimensionTypeEnum::dominios_culturales,
                    'classification_id' => 1,
                    'cycle_id' => null,
                    'domain_id' => 2,
                    'subdomain_id' => null
                ],
    
            /* Artes Visuales y Artesanías */
                [// 9000
                    'code' => '9000',
                    'note' => 'Incluye las actividades de escultores, pintores, profesionales de la animación, aguafuertistas, grabadores, etc., y restauración de obras de arte como pinturas etc.',
                    'label' => 'Actividades creativas, artísticas y de entretenimiento',
                    'measure' => DimensionMeasureEnum::actividades_productivas,
                    'type' => DimensionTypeEnum::dominios_culturales,
                    'classification_id' => 1,
                    'cycle_id' => null,
                    'domain_id' => 3,
                    'subdomain_id' => null
                ],
                [// 7420
                    'code' => '7420',
                    'note' => 'Las actividades de distribución relacionadas con la fotografía (minorista y mayorista) no están lo suficientemente desagregadas en la CPC ya que se encuentran combinadas con ‘Equipos ópticos y de precisión’. Por consiguiente, estos códigos han sido omitidos de los dominios culturales.',
                    'label' => 'Actividades de fotografía',
                    'measure' => DimensionMeasureEnum::actividades_productivas,
                    'type' => DimensionTypeEnum::dominios_culturales,
                    'classification_id' => 1,
                    'cycle_id' => null,
                    'domain_id' => 3,
                    'subdomain_id' => null
                ],
                [// 5819
                    'code' => '5819',
                    'note' => null,
                    'label' => 'Otras actividades de edición',
                    'measure' => DimensionMeasureEnum::actividades_productivas,
                    'type' => DimensionTypeEnum::dominios_culturales,
                    'classification_id' => 1,
                    'cycle_id' => null,
                    'domain_id' => 3,
                    'subdomain_id' => null
                ],
                [// 3211
                    'code' => '3211',
                    'note' => null,
                    'label' => 'Fabricación de joyas y artículos conexos',
                    'measure' => DimensionMeasureEnum::actividades_productivas,
                    'type' => DimensionTypeEnum::dominios_culturales,
                    'classification_id' => 1,
                    'cycle_id' => null,
                    'domain_id' => 3,
                    'subdomain_id' => null
                ],
                [// 7220
                    'code' => '7220',
                    'note' => null,
                    'label' => 'Investigación y desarrollo experimental en el campo de las ciencias sociales y las humanidades',
                    'measure' => DimensionMeasureEnum::actividades_productivas,
                    'type' => DimensionTypeEnum::dominios_culturales,
                    'classification_id' => 1,
                    'cycle_id' => null,
                    'domain_id' => 3,
                    'subdomain_id' => null
                ],
    
            /* Libros y Prensa */
                [// 9101
                    'code' => '9101',
                    'note' => null,
                    'label' => 'Actividades de librerías y archivos',
                    'measure' => DimensionMeasureEnum::actividades_productivas,
                    'type' => DimensionTypeEnum::dominios_culturales,
                    'classification_id' => 1,
                    'cycle_id' => null,
                    'domain_id' => 4,
                    'subdomain_id' => null
                ],
                [// 5811
                    'code' => '5811',
                    'note' => null,
                    'label' => 'Edición de libros',
                    'measure' => DimensionMeasureEnum::actividades_productivas,
                    'type' => DimensionTypeEnum::dominios_culturales,
                    'classification_id' => 1,
                    'cycle_id' => null,
                    'domain_id' => 4,
                    'subdomain_id' => null
                ],
                [// 5813
                    'code' => '5813',
                    'note' => null,
                    'label' => 'Edición de periódicos, revistas y otras publicaciones periódicas',
                    'measure' => DimensionMeasureEnum::actividades_productivas,
                    'type' => DimensionTypeEnum::dominios_culturales,
                    'classification_id' => 1,
                    'cycle_id' => null,
                    'domain_id' => 4,
                    'subdomain_id' => null
                ],
                [// 5819
                    'code' => '5819',
                    'note' => null,
                    'label' => 'Otras actividades de edición',
                    'measure' => DimensionMeasureEnum::actividades_productivas,
                    'type' => DimensionTypeEnum::dominios_culturales,
                    'classification_id' => 1,
                    'cycle_id' => null,
                    'domain_id' => 4,
                    'subdomain_id' => null
                ],
                [// 4761
                    'code' => '4761',
                    'note' => null,
                    'label' => 'Venta al por menor de libros, periódicos y artículos de papelería en comercios especializados',
                    'measure' => DimensionMeasureEnum::actividades_productivas,
                    'type' => DimensionTypeEnum::dominios_culturales,
                    'classification_id' => 1,
                    'cycle_id' => null,
                    'domain_id' => 4,
                    'subdomain_id' => null
                ],
                [// 6391
                    'code' => '6391',
                    'note' => null,
                    'label' => 'Actividades de agencias de noticias',
                    'measure' => DimensionMeasureEnum::actividades_productivas,
                    'type' => DimensionTypeEnum::dominios_culturales,
                    'classification_id' => 1,
                    'cycle_id' => null,
                    'domain_id' => 4,
                    'subdomain_id' => null
                ],
                [// 6399
                    'code' => '6399',
                    'note' => null,
                    'label' => 'Otras actividades de servicios de información n.c.p.',
                    'measure' => DimensionMeasureEnum::actividades_productivas,
                    'type' => DimensionTypeEnum::dominios_culturales,
                    'classification_id' => 1,
                    'cycle_id' => null,
                    'domain_id' => 4,
                    'subdomain_id' => null
                ],
                [// 4649*
                    'code' => '4649*',
                    'note' => 'Incluye la venta mayorista de útiles de escritorio, libros, revistas y periódicos.',
                    'label' => 'Venta al por mayor de otros enseres domésticos *',
                    'measure' => DimensionMeasureEnum::actividades_productivas,
                    'type' => DimensionTypeEnum::dominios_culturales,
                    'classification_id' => 1,
                    'cycle_id' => null,
                    'domain_id' => 4,
                    'subdomain_id' => null
                ],
                [// 9000
                    'code' => '9000',
                    'note' => 'Incluye actividades de escritores y periodistas independientes.',
                    'label' => 'Actividades creativas, artísticas y de entretenimiento',
                    'measure' => DimensionMeasureEnum::actividades_productivas,
                    'type' => DimensionTypeEnum::dominios_culturales,
                    'classification_id' => 1,
                    'cycle_id' => null,
                    'domain_id' => 4,
                    'subdomain_id' => null
                ],
    
            /* Medios Audiovisuales e Interactivos */
                [// 5820
                    'code' => '5820',
                    'note' => null,
                    'label' => 'Edición de programas informáticos (software)',
                    'measure' => DimensionMeasureEnum::actividades_productivas,
                    'type' => DimensionTypeEnum::dominios_culturales,
                    'classification_id' => 1,
                    'cycle_id' => null,
                    'domain_id' => 5,
                    'subdomain_id' => null
                ],
                [// 5911
                    'code' => '5911',
                    'note' => null,
                    'label' => 'Actividades de producción de películas cinematográficas, vídeos y programas de televisión',
                    'measure' => DimensionMeasureEnum::actividades_productivas,
                    'type' => DimensionTypeEnum::dominios_culturales,
                    'classification_id' => 1,
                    'cycle_id' => null,
                    'domain_id' => 5,
                    'subdomain_id' => null
                ],
                [// 5912
                    'code' => '5912',
                    'note' => null,
                    'label' => 'Actividades de postproducción de películas cinematográficas, vídeos y programas de televisión',
                    'measure' => DimensionMeasureEnum::actividades_productivas,
                    'type' => DimensionTypeEnum::dominios_culturales,
                    'classification_id' => 1,
                    'cycle_id' => null,
                    'domain_id' => 5,
                    'subdomain_id' => null
                ],
                [// 5913
                    'code' => '5913',
                    'note' => null,
                    'label' => 'Actividades de distribución de películas cinematográficas, vídeos y programas de televisión',
                    'measure' => DimensionMeasureEnum::actividades_productivas,
                    'type' => DimensionTypeEnum::dominios_culturales,
                    'classification_id' => 1,
                    'cycle_id' => null,
                    'domain_id' => 5,
                    'subdomain_id' => null
                ],
                [// 5920
                    'code' => '5920',
                    'note' => null,
                    'label' => 'Actividades de grabación de sonido y edición de música',
                    'measure' => DimensionMeasureEnum::actividades_productivas,
                    'type' => DimensionTypeEnum::dominios_culturales,
                    'classification_id' => 1,
                    'cycle_id' => null,
                    'domain_id' => 5,
                    'subdomain_id' => null
                ],
                [// 5914
                    'code' => '5914',
                    'note' => null,
                    'label' => 'Actividades de exhibición de películas cinematográficas y cintas de vídeo',
                    'measure' => DimensionMeasureEnum::actividades_productivas,
                    'type' => DimensionTypeEnum::dominios_culturales,
                    'classification_id' => 1,
                    'cycle_id' => null,
                    'domain_id' => 5,
                    'subdomain_id' => null
                ],
                [// 6010
                    'code' => '6010',
                    'note' => null,
                    'label' => 'Transmisiones de radio',
                    'measure' => DimensionMeasureEnum::actividades_productivas,
                    'type' => DimensionTypeEnum::dominios_culturales,
                    'classification_id' => 1,
                    'cycle_id' => null,
                    'domain_id' => 5,
                    'subdomain_id' => null
                ],
                [// 6020
                    'code' => '6020',
                    'note' => null,
                    'label' => 'Programación y transmisiones de televisión',
                    'measure' => DimensionMeasureEnum::actividades_productivas,
                    'type' => DimensionTypeEnum::dominios_culturales,
                    'classification_id' => 1,
                    'cycle_id' => null,
                    'domain_id' => 5,
                    'subdomain_id' => null
                ],
                [// 6312
                    'code' => '6312',
                    'note' => null,
                    'label' => 'Portales web',
                    'measure' => DimensionMeasureEnum::actividades_productivas,
                    'type' => DimensionTypeEnum::dominios_culturales,
                    'classification_id' => 1,
                    'cycle_id' => null,
                    'domain_id' => 5,
                    'subdomain_id' => null
                ],
                [// 7722
                    'code' => '7722',
                    'note' => null,
                    'label' => 'Alquiler de cintas de vídeo y discos',
                    'measure' => DimensionMeasureEnum::actividades_productivas,
                    'type' => DimensionTypeEnum::dominios_culturales,
                    'classification_id' => 1,
                    'cycle_id' => null,
                    'domain_id' => 5,
                    'subdomain_id' => null
                ],
                [// 6391
                    'code' => '6391',
                    'note' => null,
                    'label' => 'Actividades de agencias de noticias',
                    'measure' => DimensionMeasureEnum::actividades_productivas,
                    'type' => DimensionTypeEnum::dominios_culturales,
                    'classification_id' => 1,
                    'cycle_id' => null,
                    'domain_id' => 5,
                    'subdomain_id' => null
                ],
                [// 4762
                    'code' => '4762',
                    'note' => null,
                    'label' => 'Venta al por menor de grabaciones de música y de vídeo en comercios especializados',
                    'measure' => DimensionMeasureEnum::actividades_productivas,
                    'type' => DimensionTypeEnum::dominios_culturales,
                    'classification_id' => 1,
                    'cycle_id' => null,
                    'domain_id' => 5,
                    'subdomain_id' => null
                ],
                [// 4791
                    'code' => '4791',
                    'note' => null,
                    'label' => 'Venta al por menor por correo o por internet',
                    'measure' => DimensionMeasureEnum::actividades_productivas,
                    'type' => DimensionTypeEnum::dominios_culturales,
                    'classification_id' => 1,
                    'cycle_id' => null,
                    'domain_id' => 5,
                    'subdomain_id' => null
                ],
    
            /* Diseño y Servicios Creativos */
                [// 7410
                    'code' => '7410',
                    'note' => 'Incluye: diseño de modas relacionado con textiles, vestuario, calzado, joyas, mobiliario, otros tipos de decoración interior y otros bienes relacionados con la moda y con insumos del hogar; ‘actividades de diseño gráfico’; actividades de decoración interior. También es necesario evaluar el segmento relacionado con actividades de arquitectura. Los códigos CIIU no establecen una distinción entre las diversas actividades (por ej., paisajismo, restauración de edificaciones históricas, etc.).',
                    'label' => 'Actividades especializadas de diseño',
                    'measure' => DimensionMeasureEnum::actividades_productivas,
                    'type' => DimensionTypeEnum::dominios_culturales,
                    'classification_id' => 1,
                    'cycle_id' => null,
                    'domain_id' => 6,
                    'subdomain_id' => null
                ],
                [// 7110
                    'code' => '7110',
                    'note' => null,
                    'label' => 'Actividades de arquitectura e ingeniería y actividades conexas de consultoría técnica',
                    'measure' => DimensionMeasureEnum::actividades_productivas,
                    'type' => DimensionTypeEnum::dominios_culturales,
                    'classification_id' => 1,
                    'cycle_id' => null,
                    'domain_id' => 6,
                    'subdomain_id' => null
                ],
                [// 7310
                    'code' => '7310',
                    'note' => null,
                    'label' => 'Publicidad',
                    'measure' => DimensionMeasureEnum::actividades_productivas,
                    'type' => DimensionTypeEnum::dominios_culturales,
                    'classification_id' => 1,
                    'cycle_id' => null,
                    'domain_id' => 6,
                    'subdomain_id' => null
                ],
    
            /* Educación y Capacitación */
                [// 8522*
                    'code' => '8522*',
                    'note' => null,
                    'label' => 'Enseñanza secundaria de formación técnica y profesional *',
                    'measure' => DimensionMeasureEnum::actividades_productivas,
                    'type' => DimensionTypeEnum::dominios_transversales,
                    'classification_id' => 1,
                    'cycle_id' => null,
                    'domain_id' => 9,
                    'subdomain_id' => null
                ],
                [// 8530*
                    'code' => '8530*',
                    'note' => null,
                    'label' => 'Enseñanza superior *',
                    'measure' => DimensionMeasureEnum::actividades_productivas,
                    'type' => DimensionTypeEnum::dominios_transversales,
                    'classification_id' => 1,
                    'cycle_id' => null,
                    'domain_id' => 9,
                    'subdomain_id' => null
                ],
                [// 8542
                    'code' => '8542',
                    'note' => null,
                    'label' => 'Enseñanza cultural',
                    'measure' => DimensionMeasureEnum::actividades_productivas,
                    'type' => DimensionTypeEnum::dominios_transversales,
                    'classification_id' => 1,
                    'cycle_id' => null,
                    'domain_id' => 9,
                    'subdomain_id' => null
                ],
          /* DOMINIOS RELACIONADOS */
            /* Turismo */
                [// 4911*
                    'code' => '4911*',
                    'note' => null,
                    'label' => 'Transporte interurbano de pasajeros por ferrocarril *',
                    'measure' => DimensionMeasureEnum::actividades_productivas,
                    'type' => DimensionTypeEnum::dominios_relacionados,
                    'classification_id' => 1,
                    'cycle_id' => null,
                    'domain_id' => 11,
                    'subdomain_id' => null
                ],
                [// 4922*
                    'code' => '4922*',
                    'note' => null,
                    'label' => 'Otras actividades de transporte de pasajeros por vía terrestre *',
                    'measure' => DimensionMeasureEnum::actividades_productivas,
                    'type' => DimensionTypeEnum::dominios_relacionados,
                    'classification_id' => 1,
                    'cycle_id' => null,
                    'domain_id' => 11,
                    'subdomain_id' => null
                ],
                [// 5011
                    'code' => '5011',
                    'note' => null,
                    'label' => 'Transporte de pasajeros marítimo y de cabotaje',
                    'measure' => DimensionMeasureEnum::actividades_productivas,
                    'type' => DimensionTypeEnum::dominios_relacionados,
                    'classification_id' => 1,
                    'cycle_id' => null,
                    'domain_id' => 11,
                    'subdomain_id' => null
                ],
                [// 5110
                    'code' => '5110',
                    'note' => null,
                    'label' => 'Transporte de pasajeros por vía aérea',
                    'measure' => DimensionMeasureEnum::actividades_productivas,
                    'type' => DimensionTypeEnum::dominios_relacionados,
                    'classification_id' => 1,
                    'cycle_id' => null,
                    'domain_id' => 11,
                    'subdomain_id' => null
                ],
                [// 5510
                    'code' => '5510',
                    'note' => null,
                    'label' => 'Actividades de alojamiento para estancias cortas',
                    'measure' => DimensionMeasureEnum::actividades_productivas,
                    'type' => DimensionTypeEnum::dominios_relacionados,
                    'classification_id' => 1,
                    'cycle_id' => null,
                    'domain_id' => 11,
                    'subdomain_id' => null
                ],
                [// 5520
                    'code' => '5520',
                    'note' => null,
                    'label' => 'Actividades de campamentos, parques de vehículos recreativos y parques de caravanas',
                    'measure' => DimensionMeasureEnum::actividades_productivas,
                    'type' => DimensionTypeEnum::dominios_relacionados,
                    'classification_id' => 1,
                    'cycle_id' => null,
                    'domain_id' => 11,
                    'subdomain_id' => null
                ],
                [// 7911
                    'code' => '7911',
                    'note' => null,
                    'label' => 'Actividades de agencias de viajes',
                    'measure' => DimensionMeasureEnum::actividades_productivas,
                    'type' => DimensionTypeEnum::dominios_relacionados,
                    'classification_id' => 1,
                    'cycle_id' => null,
                    'domain_id' => 11,
                    'subdomain_id' => null
                ],
                [// 7912
                    'code' => '7912',
                    'note' => null,
                    'label' => 'Actividades de operadores turísticos',
                    'measure' => DimensionMeasureEnum::actividades_productivas,
                    'type' => DimensionTypeEnum::dominios_relacionados,
                    'classification_id' => 1,
                    'cycle_id' => null,
                    'domain_id' => 11,
                    'subdomain_id' => null
                ],
                [// 7990
                    'code' => '7990',
                    'note' => null,
                    'label' => 'Otros servicios de reserva y actividades conexas',
                    'measure' => DimensionMeasureEnum::actividades_productivas,
                    'type' => DimensionTypeEnum::dominios_relacionados,
                    'classification_id' => 1,
                    'cycle_id' => null,
                    'domain_id' => 11,
                    'subdomain_id' => null
                ],
    
            /* Deportes y Recreación */
                [// 5520
                    'code' => '5520',
                    'note' => null,
                    'label' => 'Actividades de campamentos, parques de vehículos de recreo y parques de caravanas',
                    'measure' => DimensionMeasureEnum::actividades_productivas,
                    'type' => DimensionTypeEnum::dominios_relacionados,
                    'classification_id' => 1,
                    'cycle_id' => null,
                    'domain_id' => 12,
                    'subdomain_id' => null
                ],
                [// 7721
                    'code' => '7721',
                    'note' => null,
                    'label' => 'Alquiler y arrendamiento de equipo recreativo y deportivo',
                    'measure' => DimensionMeasureEnum::actividades_productivas,
                    'type' => DimensionTypeEnum::dominios_relacionados,
                    'classification_id' => 1,
                    'cycle_id' => null,
                    'domain_id' => 12,
                    'subdomain_id' => null
                ],
                [// 9311
                    'code' => '9311',
                    'note' => null,
                    'label' => 'Gestión de instalaciones deportivas',
                    'measure' => DimensionMeasureEnum::actividades_productivas,
                    'type' => DimensionTypeEnum::dominios_relacionados,
                    'classification_id' => 1,
                    'cycle_id' => null,
                    'domain_id' => 12,
                    'subdomain_id' => null
                ],
                [// 9312
                    'code' => '9312',
                    'note' => null,
                    'label' => 'Actividades de clubes deportivos',
                    'measure' => DimensionMeasureEnum::actividades_productivas,
                    'type' => DimensionTypeEnum::dominios_relacionados,
                    'classification_id' => 1,
                    'cycle_id' => null,
                    'domain_id' => 12,
                    'subdomain_id' => null
                ],
                [// 9319
                    'code' => '9319',
                    'note' => null,
                    'label' => 'Otras actividades deportivas',
                    'measure' => DimensionMeasureEnum::actividades_productivas,
                    'type' => DimensionTypeEnum::dominios_relacionados,
                    'classification_id' => 1,
                    'cycle_id' => null,
                    'domain_id' => 12,
                    'subdomain_id' => null
                ],
                [// 9200
                    'code' => '9200',
                    'note' => null,
                    'label' => 'Actividades de juego de azar y apuestas',
                    'measure' => DimensionMeasureEnum::actividades_productivas,
                    'type' => DimensionTypeEnum::dominios_relacionados,
                    'classification_id' => 1,
                    'cycle_id' => null,
                    'domain_id' => 12,
                    'subdomain_id' => null
                ],
                [// 9321
                    'code' => '9321',
                    'note' => null,
                    'label' => 'Actividades de parques de atracciones y parques temáticos',
                    'measure' => DimensionMeasureEnum::actividades_productivas,
                    'type' => DimensionTypeEnum::dominios_relacionados,
                    'classification_id' => 1,
                    'cycle_id' => null,
                    'domain_id' => 12,
                    'subdomain_id' => null
                ],
                [// 9329
                    'code' => '9329',
                    'note' => null,
                    'label' => 'Otras actividades de esparcimiento y recreativas n.c.p.',
                    'measure' => DimensionMeasureEnum::actividades_productivas,
                    'type' => DimensionTypeEnum::dominios_relacionados,
                    'classification_id' => 1,
                    'cycle_id' => null,
                    'domain_id' => 12,
                    'subdomain_id' => null
                ],
                [// 9609
                    'code' => '9609',
                    'note' => null,
                    'label' => 'Otras actividades de servicios personales n.c.p.',
                    'measure' => DimensionMeasureEnum::actividades_productivas,
                    'type' => DimensionTypeEnum::dominios_relacionados,
                    'classification_id' => 1,
                    'cycle_id' => null,
                    'domain_id' => 12,
                    'subdomain_id' => null
                ],
                [// 8541
                    'code' => '8541',
                    'note' => null,
                    'label' => 'Enseñanza deportiva y recreativa',
                    'measure' => DimensionMeasureEnum::actividades_productivas,
                    'type' => DimensionTypeEnum::dominios_relacionados,
                    'classification_id' => 1,
                    'cycle_id' => null,
                    'domain_id' => 12,
                    'subdomain_id' => null
                ],
          /* EQUIPAMIENTO Y MATERIALES DE APOYO DE DOMINIOS CULTURALES */
            /* Presentaciones Artisticas y Celebraciones */
                [// 1820
                    'code' => '1820',
                    'note' => null,
                    'label' => 'Reproducción de grabaciones',
                    'measure' => DimensionMeasureEnum::actividades_productivas,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_dominios_culturales,
                    'classification_id' => 1,
                    'cycle_id' => null,
                    'domain_id' => 2,
                    'subdomain_id' => null
                ],
                [// 3290*
                    'code' => '3290*',
                    'note' => null,
                    'label' => 'Otras industrias manufactureras n.c.p.',
                    'measure' => DimensionMeasureEnum::actividades_productivas,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_dominios_culturales,
                    'classification_id' => 1,
                    'cycle_id' => null,
                    'domain_id' => 2,
                    'subdomain_id' => null
                ],
                [// 2640*
                    'code' => '2640*',
                    'note' => null,
                    'label' => 'Fabricación de aparatos electrónicos de consumo',
                    'measure' => DimensionMeasureEnum::actividades_productivas,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_dominios_culturales,
                    'classification_id' => 1,
                    'cycle_id' => null,
                    'domain_id' => 2,
                    'subdomain_id' => null
                ],
            /* Artes Visuales y Artesanías */
                [// 2022*
                    'code' => '2022*',
                    'note' => null,
                    'label' => 'Fabricación de pinturas, barnices y productos de revestimiento similares, tintas de imprenta y masillas *',
                    'measure' => DimensionMeasureEnum::actividades_productivas,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_dominios_culturales,
                    'classification_id' => 1,
                    'cycle_id' => null,
                    'domain_id' => 3,
                    'subdomain_id' => null
                ],
                [// 2670*
                    'code' => '2670*',
                    'note' => null,
                    'label' => 'Fabricación de instrumentos ópticos y equipo fotográfico *',
                    'measure' => DimensionMeasureEnum::actividades_productivas,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_dominios_culturales,
                    'classification_id' => 1,
                    'cycle_id' => null,
                    'domain_id' => 3,
                    'subdomain_id' => null
                ],
                [// 2029*
                    'code' => '2029*',
                    'note' => null,
                    'label' => 'Fabricación de otros productos químicos n.c.p. *',
                    'measure' => DimensionMeasureEnum::actividades_productivas,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_dominios_culturales,
                    'classification_id' => 1,
                    'cycle_id' => null,
                    'domain_id' => 3,
                    'subdomain_id' => null
                ],
            /* Libros y Prensa */
                [// 5813
                    'code' => '5813',
                    'note' => null,
                    'label' => 'Edición de periódicos, revistas y otras publicaciones periódicas',
                    'measure' => DimensionMeasureEnum::actividades_productivas,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_dominios_culturales,
                    'classification_id' => 1,
                    'cycle_id' => null,
                    'domain_id' => 4,
                    'subdomain_id' => null
                ],
                [// 1811
                    'code' => '1811',
                    'note' => null,
                    'label' => 'Impresión',
                    'measure' => DimensionMeasureEnum::actividades_productivas,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_dominios_culturales,
                    'classification_id' => 1,
                    'cycle_id' => null,
                    'domain_id' => 4,
                    'subdomain_id' => null
                ],
                [// 1812
                    'code' => '1812',
                    'note' => null,
                    'label' => 'Actividades de servicios relacionadas con la impresión',
                    'measure' => DimensionMeasureEnum::actividades_productivas,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_dominios_culturales,
                    'classification_id' => 1,
                    'cycle_id' => null,
                    'domain_id' => 4,
                    'subdomain_id' => null
                ],
                [// 2829*
                    'code' => '2829*',
                    'note' => null,
                    'label' => 'Fabricación de otros tipos de maquinaria de uso especial *',
                    'measure' => DimensionMeasureEnum::actividades_productivas,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_dominios_culturales,
                    'classification_id' => 1,
                    'cycle_id' => null,
                    'domain_id' => 4,
                    'subdomain_id' => null
                ],
            /* Medios Audiovisuales e Interactivos */
                [// 2610*
                    'code' => '2610*',
                    'note' => null,
                    'label' => 'Fabricación de componentes y tableros electrónicos *',
                    'measure' => DimensionMeasureEnum::actividades_productivas,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_dominios_culturales,
                    'classification_id' => 1,
                    'cycle_id' => null,
                    'domain_id' => 5,
                    'subdomain_id' => null
                ],
                [// 2620
                    'code' => '2620',
                    'note' => null,
                    'label' => 'Fabricación de ordenadores y equipo periférico',
                    'measure' => DimensionMeasureEnum::actividades_productivas,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_dominios_culturales,
                    'classification_id' => 1,
                    'cycle_id' => null,
                    'domain_id' => 5,
                    'subdomain_id' => null
                ],
                [// 2630
                    'code' => '2630',
                    'note' => null,
                    'label' => 'Fabricación de equipo de comunicaciones',
                    'measure' => DimensionMeasureEnum::actividades_productivas,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_dominios_culturales,
                    'classification_id' => 1,
                    'cycle_id' => null,
                    'domain_id' => 5,
                    'subdomain_id' => null
                ],
                [// 2640*
                    'code' => '2640*',
                    'note' => null,
                    'label' => 'Fabricación de aparatos de electrónicos de consumo *',
                    'measure' => DimensionMeasureEnum::actividades_productivas,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_dominios_culturales,
                    'classification_id' => 1,
                    'cycle_id' => null,
                    'domain_id' => 5,
                    'subdomain_id' => null
                ],
                [// 2670*
                    'code' => '2670*',
                    'note' => null,
                    'label' => 'Fabricación de instrumentos ópticos y equipo fotográfico *',
                    'measure' => DimensionMeasureEnum::actividades_productivas,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_dominios_culturales,
                    'classification_id' => 1,
                    'cycle_id' => null,
                    'domain_id' => 5,
                    'subdomain_id' => null
                ],
                [// 2680*
                    'code' => '2680*',
                    'note' => null,
                    'label' => 'Fabricación de soportes magnéticos y ópticos *',
                    'measure' => DimensionMeasureEnum::actividades_productivas,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_dominios_culturales,
                    'classification_id' => 1,
                    'cycle_id' => null,
                    'domain_id' => 5,
                    'subdomain_id' => null
                ],
                [// 3290*
                    'code' => '3290*',
                    'note' => null,
                    'label' => 'Otras industrias manufactureras n.c.p. *',
                    'measure' => DimensionMeasureEnum::actividades_productivas,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_dominios_culturales,
                    'classification_id' => 1,
                    'cycle_id' => null,
                    'domain_id' => 5,
                    'subdomain_id' => null
                ],
                [// 5820
                    'code' => '5820',
                    'note' => null,
                    'label' => 'Edición de programas informáticos',
                    'measure' => DimensionMeasureEnum::actividades_productivas,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_dominios_culturales,
                    'classification_id' => 1,
                    'cycle_id' => null,
                    'domain_id' => 5,
                    'subdomain_id' => null
                ],
                [// 6201
                    'code' => '6201',
                    'note' => null,
                    'label' => 'Actividades de programación informática',
                    'measure' => DimensionMeasureEnum::actividades_productivas,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_dominios_culturales,
                    'classification_id' => 1,
                    'cycle_id' => null,
                    'domain_id' => 5,
                    'subdomain_id' => null
                ],
                [// 6202
                    'code' => '6202',
                    'note' => null,
                    'label' => 'Actividades de consultoría informática y actividades de administración de medios informáticos',
                    'measure' => DimensionMeasureEnum::actividades_productivas,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_dominios_culturales,
                    'classification_id' => 1,
                    'cycle_id' => null,
                    'domain_id' => 5,
                    'subdomain_id' => null
                ],
                [// 6020
                    'code' => '6020',
                    'note' => null,
                    'label' => 'Actividades de programación y difusión televisiva',
                    'measure' => DimensionMeasureEnum::actividades_productivas,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_dominios_culturales,
                    'classification_id' => 1,
                    'cycle_id' => null,
                    'domain_id' => 5,
                    'subdomain_id' => null
                ],
                [// 6110
                    'code' => '6110',
                    'note' => null,
                    'label' => 'Actividades de telecomunicaciones por cable',
                    'measure' => DimensionMeasureEnum::actividades_productivas,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_dominios_culturales,
                    'classification_id' => 1,
                    'cycle_id' => null,
                    'domain_id' => 5,
                    'subdomain_id' => null
                ],
                [// 6120
                    'code' => '6120',
                    'note' => null,
                    'label' => 'Actividades de telecomunicaciones inalámbricas',
                    'measure' => DimensionMeasureEnum::actividades_productivas,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_dominios_culturales,
                    'classification_id' => 1,
                    'cycle_id' => null,
                    'domain_id' => 5,
                    'subdomain_id' => null
                ],
                [// 6311*
                    'code' => '6311*',
                    'note' => 'No debe incluir el procesamiento de datos de actividades conexas.',
                    'label' => 'Procesamiento de datos, hospedaje y actividades conexas *',
                    'measure' => DimensionMeasureEnum::actividades_productivas,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_dominios_culturales,
                    'classification_id' => 1,
                    'cycle_id' => null,
                    'domain_id' => 5,
                    'subdomain_id' => null
                ],
                [// 6312
                    'code' => '6312',
                    'note' => null,
                    'label' => 'Portales Web',
                    'measure' => DimensionMeasureEnum::actividades_productivas,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_dominios_culturales,
                    'classification_id' => 1,
                    'cycle_id' => null,
                    'domain_id' => 5,
                    'subdomain_id' => null
                ],
                [// 7730*
                    'code' => '7730*',
                    'note' => null,
                    'label' => 'Alquiler de otros tipo de maquinaria, equipo y mercancías tangibles *',
                    'measure' => DimensionMeasureEnum::actividades_productivas,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_dominios_culturales,
                    'classification_id' => 1,
                    'cycle_id' => null,
                    'domain_id' => 5,
                    'subdomain_id' => null
                ],
                [// 4742
                    'code' => '4742',
                    'note' => null,
                    'label' => 'Venta al por menor de equipo de audio y video en almacenes especializados',
                    'measure' => DimensionMeasureEnum::actividades_productivas,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_dominios_culturales,
                    'classification_id' => 1,
                    'cycle_id' => null,
                    'domain_id' => 5,
                    'subdomain_id' => null
                ],
                [// 4651
                    'code' => '4651',
                    'note' => null,
                    'label' => 'Venta al por mayor de computadoras, equipo informático periférico y programas informáticos',
                    'measure' => DimensionMeasureEnum::actividades_productivas,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_dominios_culturales,
                    'classification_id' => 1,
                    'cycle_id' => null,
                    'domain_id' => 5,
                    'subdomain_id' => null
                ],
                [// 4652*
                    'code' => '4652*',
                    'note' => 'Incluye "Venta al por mayor de grabaciones de audio y video, CDs, DVDs". Adicionalmente, el código abarca la venta al por mayor de aparatos electrónicos: equipos de radio y televisión; reproductores y grabadores de CD y DVD; equipos estereofónicos y consolas de videojuegos.',
                    'label' => 'Venta al por mayor de equipo electrónico de telecomunicaciones y de sus partes y piezas *',
                    'measure' => DimensionMeasureEnum::actividades_productivas,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_dominios_culturales,
                    'classification_id' => 1,
                    'cycle_id' => null,
                    'domain_id' => 5,
                    'subdomain_id' => null
                ],
                [// 9511
                    'code' => '9511',
                    'note' => null,
                    'label' => 'Reparación de computadoras y equipo periférico',
                    'measure' => DimensionMeasureEnum::actividades_productivas,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_dominios_culturales,
                    'classification_id' => 1,
                    'cycle_id' => null,
                    'domain_id' => 5,
                    'subdomain_id' => null
                ],
                [// 3320*
                    'code' => '3320*',
                    'note' => null,
                    'label' => 'Instalación de maquinaria y equipo industrial *',
                    'measure' => DimensionMeasureEnum::actividades_productivas,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_dominios_culturales,
                    'classification_id' => 1,
                    'cycle_id' => null,
                    'domain_id' => 5,
                    'subdomain_id' => null
                ],
                [// 6209
                    'code' => '6209',
                    'note' => null,
                    'label' => 'Otras actividades del servicio de tecnología de información',
                    'measure' => DimensionMeasureEnum::actividades_productivas,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_dominios_culturales,
                    'classification_id' => 1,
                    'cycle_id' => null,
                    'domain_id' => 5,
                    'subdomain_id' => null
                ],
            /* Diseño y Servicios Creativos */
                [// 7310
                    'code' => '7310',
                    'note' => null,
                    'label' => 'Publicidad',
                    'measure' => DimensionMeasureEnum::actividades_productivas,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_dominios_culturales,
                    'classification_id' => 1,
                    'cycle_id' => null,
                    'domain_id' => 6,
                    'subdomain_id' => null
                ],
          /* EQUIPAMIENTO Y MATERIALES DE APOYO DE DOMINIOS RELACIONADOS */
            /* Deportes y Recreación */
                [// 1410*
                    'code' => '1410*',
                    'note' => null,
                    'label' => 'Fabricación de prendas de vestir, excepto prendas de piel *',
                    'measure' => DimensionMeasureEnum::actividades_productivas,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_dominios_relacionados,
                    'classification_id' => 1,
                    'cycle_id' => null,
                    'domain_id' => 12,
                    'subdomain_id' => null
                ],
                [// 2829*
                    'code' => '2829*',
                    'note' => null,
                    'label' => 'Fabricación de otros tipos de maquinaria de uso especial *',
                    'measure' => DimensionMeasureEnum::actividades_productivas,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_dominios_relacionados,
                    'classification_id' => 1,
                    'cycle_id' => null,
                    'domain_id' => 12,
                    'subdomain_id' => null
                ],
                [// 1520*
                    'code' => '1520*',
                    'note' => null,
                    'label' => 'Fabricación de calzado *',
                    'measure' => DimensionMeasureEnum::actividades_productivas,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_dominios_relacionados,
                    'classification_id' => 1,
                    'cycle_id' => null,
                    'domain_id' => 12,
                    'subdomain_id' => null
                ],
                [// 3012
                    'code' => '3012',
                    'note' => null,
                    'label' => 'Construcción de embarcaciones de recreo y deporte',
                    'measure' => DimensionMeasureEnum::actividades_productivas,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_dominios_relacionados,
                    'classification_id' => 1,
                    'cycle_id' => null,
                    'domain_id' => 12,
                    'subdomain_id' => null
                ],
                [// 3230
                    'code' => '3230',
                    'note' => null,
                    'label' => 'Fabricación de artículos de deporte',
                    'measure' => DimensionMeasureEnum::actividades_productivas,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_dominios_relacionados,
                    'classification_id' => 1,
                    'cycle_id' => null,
                    'domain_id' => 12,
                    'subdomain_id' => null
                ],
                [// 4763
                    'code' => '4763',
                    'note' => null,
                    'label' => 'Venta al por menor de artículos de deporte en almacenes especializados',
                    'measure' => DimensionMeasureEnum::actividades_productivas,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_dominios_relacionados,
                    'classification_id' => 1,
                    'cycle_id' => null,
                    'domain_id' => 12,
                    'subdomain_id' => null
                ],
                [// 4290*
                    'code' => '4290*',
                    'note' => null,
                    'label' => 'Construcción de otros proyectos de ingeniería civil *',
                    'measure' => DimensionMeasureEnum::actividades_productivas,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_dominios_relacionados,
                    'classification_id' => 1,
                    'cycle_id' => null,
                    'domain_id' => 12,
                    'subdomain_id' => null
                ],
                [// 4791*
                    'code' => '4791*',
                    'note' => null,
                    'label' => 'Venta al por menor a través de pedido por correo o vía Internet *',
                    'measure' => DimensionMeasureEnum::actividades_productivas,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_dominios_relacionados,
                    'classification_id' => 1,
                    'cycle_id' => null,
                    'domain_id' => 12,
                    'subdomain_id' => null
                ],
    
    /** BIENES Y SERVICIOS */
        /** CPC 2 */
          /* DOMINIOS CULTURALES */
            /* Patrimonio Cultural y Natural */
                [// 38962
                    'code' => '38962',
                    'note' => null,
                    'label' => 'Sellos de correos o timbres fiscales, matasellos postales, sobres de primer día de emisión, sobres postales con franqueo impreso y artículos análogos; colecciones de interés zoológico, botánico, mineralógico, anatómico, histórico, etnográfico o numismático; antigüedades',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::dominios_culturales,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 1,
                    'subdomain_id' => null
                ],
                [// 96411
                    'code' => '96411',
                    'note' => null,
                    'label' => 'Servicios relacionados con museos excepto sitios y edificios históricos',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::dominios_culturales,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 1,
                    'subdomain_id' => null
                ],
                [// 96412
                    'code' => '96412',
                    'note' => null,
                    'label' => 'Servicios de conservación de sitios y edificios históricos',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::dominios_culturales,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 1,
                    'subdomain_id' => null
                ],
                [// 96421
                    'code' => '96421',
                    'note' => null,
                    'label' => 'Servicios relacionados con jardines botánicos y parques zoológicos',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::dominios_culturales,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 1,
                    'subdomain_id' => null
                ],
                [// 96422
                    'code' => '96422',
                    'note' => null,
                    'label' => 'Servicios relacionados con reservas naturales, incluida la conservación de la flora y la fauna',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::dominios_culturales,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 1,
                    'subdomain_id' => null
                ],
                [// 621**
                    'code' => '621**',
                    'note' => 'Incluye los servicios de casas de subasta minoristas. La CPC no tiene un código que cubra exclusivamente productos de segunda mano.',
                    'label' => 'Servicios comerciales al por menor en tiendas no especializadas',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::dominios_culturales,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 1,
                    'subdomain_id' => null
                ],
            /* Presentaciones Artisticas y Celebraciones */
                [// 96210
                    'code' => '96210',
                    'note' => null,
                    'label' => 'Servicios de promoción y organización de espectáculos artísticos',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::dominios_culturales,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 2,
                    'subdomain_id' => null
                ],
                [// 96220
                    'code' => '96220',
                    'note' => null,
                    'label' => 'Servicios de producción y presentación de espectáculos artísticos',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::dominios_culturales,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 2,
                    'subdomain_id' => null
                ],
                [// 96230
                    'code' => '96230',
                    'note' => null,
                    'label' => 'Servicios de operación de instalaciones para espectáculos artísticos',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::dominios_culturales,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 2,
                    'subdomain_id' => null
                ],
                [// 96290
                    'code' => '96290',
                    'note' => null,
                    'label' => 'Otros servicios relacionados con las artes escénicas y los espectáculos en vivo',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::dominios_culturales,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 2,
                    'subdomain_id' => null
                ],
                [// 96310
                    'code' => '96310',
                    'note' => null,
                    'label' => 'Servicios relacionados con actores',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::dominios_culturales,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 2,
                    'subdomain_id' => null
                ],
                [// 95997
                    'code' => '95997',
                    'note' => null,
                    'label' => 'Asociaciones culturales y recreacionales (excepto de deportes o juegos)',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::dominios_culturales,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 2,
                    'subdomain_id' => null
                ],
                [// 38310
                    'code' => '38310',
                    'note' => null,
                    'label' => 'Pianos y otros instrumentos de teclado con cuerdas',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::dominios_culturales,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 2,
                    'subdomain_id' => null
                ],
                [// 38320
                    'code' => '38320',
                    'note' => null,
                    'label' => 'Otros instrumentos musicales de cuerda',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::dominios_culturales,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 2,
                    'subdomain_id' => null
                ],
                [// 38330
                    'code' => '38330',
                    'note' => null,
                    'label' => 'Instrumentos musicales de viento (incluso órganos de tubos, acordeones e instrumentos metálicos de viento)',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::dominios_culturales,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 2,
                    'subdomain_id' => null
                ],
                [// 38340
                    'code' => '38340',
                    'note' => null,
                    'label' => 'Instrumentos musicales cuyo sonido se produce o debe amplificarse eléctricamente',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::dominios_culturales,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 2,
                    'subdomain_id' => null
                ],
                [// 38350
                    'code' => '38350',
                    'note' => null,
                    'label' => 'Otros instrumentos musicales (incluso instrumentos de percusión, cajas de música y orquestriones); reclamos; silbatos, cuernos de llamada y otros instrumentos de boca para llamada y señales',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::dominios_culturales,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 2,
                    'subdomain_id' => null
                ],
                [// 38360
                    'code' => '38360',
                    'note' => null,
                    'label' => 'Partes y accesorios para instrumentos musicales; metrónomos, diapasones y artículos análogos de todas clases',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::dominios_culturales,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 2,
                    'subdomain_id' => null
                ],
                [// 32520
                    'code' => '32520',
                    'note' => null,
                    'label' => 'Partituras impresas o manuscritas',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::dominios_culturales,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 2,
                    'subdomain_id' => null
                ],
                [// 47610
                    'code' => '47610',
                    'note' => null,
                    'label' => 'Discos y cintas musicales, y otros soportes físicos',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::dominios_culturales,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 2,
                    'subdomain_id' => null
                ],
                [// 96111
                    'code' => '96111',
                    'note' => null,
                    'label' => 'Servicios de grabaciones sonoras',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::dominios_culturales,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 2,
                    'subdomain_id' => null
                ],
                [// 96112
                    'code' => '96112',
                    'note' => null,
                    'label' => 'Servicios de grabación en vivo',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::dominios_culturales,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 2,
                    'subdomain_id' => null
                ],
                [// 96113
                    'code' => '96113',
                    'note' => null,
                    'label' => 'Grabaciones sonoras originales',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::dominios_culturales,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 2,
                    'subdomain_id' => null
                ],
                [// 84321
                    'code' => '84321',
                    'note' => null,
                    'label' => 'Descargas musicales de audio',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::dominios_culturales,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 2,
                    'subdomain_id' => null
                ],
                [// 73320
                    'code' => '73320',
                    'note' => 'Al igual que otras clasificaciones, la CPC muestra una amplia cobertura de las actividades audiovisuales. Sin embargo, persisten algunas dudas sobre la capacidad de esta clasificación para recoger estas actividades en forma completa y precisa. Claramente, el código 73320 ‘Servicios de concesión de licencias relativas al derecho a utilizar originales literarios, acústicos y relacionados con espectáculos’, cubre tanto las actividades audiovisuales como otras pertenecientes a distintos dominios culturales. Sería necesario realizar estudios empíricos país por país para determinar una forma más eficiente de designar actividades de esta clase a los distintos dominios.',
                    'label' => 'Servicios de concesión de licencias relativas al derecho a utilizar originales literarios, acústicos y relacionados con espectáculos',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::dominios_culturales,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 2,
                    'subdomain_id' => null
                ],
                [// 62242
                    'code' => '62242',
                    'note' => null,
                    'label' => 'Servicios comerciales al por menor de equipos de radio y televisión y discos y cintas de video grabadas en almacenes especializados',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::dominios_culturales,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 2,
                    'subdomain_id' => null
                ],
            /* Artes Visuales y Artesanías */
                [// 38961
                    'code' => '38961',
                    'note' => null,
                    'label' => 'Pinturas, dibujos y pasteles; grabados, estampas y litografías originales; obras originales de arte escultórico y estatuario, de cualquier material',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::dominios_culturales,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 3,
                    'subdomain_id' => null
                ],
                [// 83811
                    'code' => '83811',
                    'note' => null,
                    'label' => 'Servicios de retratos fotográficos',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::dominios_culturales,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 3,
                    'subdomain_id' => null
                ],
                [// 83812
                    'code' => '83812',
                    'note' => null,
                    'label' => 'Publicidad y servicios fotográficos conexos',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::dominios_culturales,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 3,
                    'subdomain_id' => null
                ],
                [// 83813
                    'code' => '83813',
                    'note' => null,
                    'label' => 'Servicios de reportajes fotográficos de actualidad',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::dominios_culturales,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 3,
                    'subdomain_id' => null
                ],
                [// 83814
                    'code' => '83814',
                    'note' => null,
                    'label' => 'Servicios de fotografía especializada ',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::dominios_culturales,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 3,
                    'subdomain_id' => null
                ],
                [// 83815
                    'code' => '83815',
                    'note' => null,
                    'label' => 'Servicios de restauración, copia y retoque de fotografías',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::dominios_culturales,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 3,
                    'subdomain_id' => null
                ],
                [// 83819
                    'code' => '83819',
                    'note' => null,
                    'label' => 'Otros servicios fotográficos',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::dominios_culturales,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 3,
                    'subdomain_id' => null
                ],
                [// 83820
                    'code' => '83820',
                    'note' => null,
                    'label' => 'Servicios de procesamiento fotográfico',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::dominios_culturales,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 3,
                    'subdomain_id' => null
                ],
                [// 38942
                    'code' => '38942',
                    'note' => null,
                    'label' => 'Placas y películas fotográficas impresionadas y reveladas, excepto películas cinematográficas',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::dominios_culturales,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 3,
                    'subdomain_id' => null
                ],
                [// 38941
                    'code' => '38941',
                    'note' => null,
                    'label' => 'Placas, películas, papeles, cartulinas y tejidos fotográficos, impresionados pero sin revelar ',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::dominios_culturales,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 3,
                    'subdomain_id' => null
                ],
                [// 32540
                    'code' => '32540',
                    'note' => null,
                    'label' => 'Imágenes, diseños y fotografías impresas',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::dominios_culturales,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 3,
                    'subdomain_id' => null
                ],
                [// 38220
                    'code' => '38220',
                    'note' => null,
                    'label' => 'Perlas de cultivo, piedras preciosas o semipreciosas sintéticas o reconstruidas (excepto diamantes industriales)',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::dominios_culturales,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 3,
                    'subdomain_id' => null
                ],
                [// 38240
                    'code' => '38240',
                    'note' => null,
                    'label' => 'Joyas y otros artículos de metales preciosos o de metales enchapados con metales preciosos; artículos de perlas naturales o de cultivo o de piedras preciosas o semipreciosas',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::dominios_culturales,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 3,
                    'subdomain_id' => null
                ],
                [// 38210
                    'code' => '38210',
                    'note' => 'Las perlas sólo se consideran en conexión con joyas y artesanías.',
                    'label' => 'Perlas, naturales o de cultivo, sin elaborar',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::dominios_culturales,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 3,
                    'subdomain_id' => null
                ],
                [// 81229
                    'code' => '81229',
                    'note' => 'Incluye servicios de investigación y desarrollo experimental relacionados con historia, filosofía, artes, religión, teología, etc.',
                    'label' => 'Servicios de investigación y desarrollo experimental relacionados con otras humanidades',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::dominios_culturales,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 3,
                    'subdomain_id' => null
                ],
            /* Libros y Prensa */
                [// 84510
                    'code' => '84510',
                    'note' => null,
                    'label' => 'Servicios bibliotecarios',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::dominios_culturales,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 4,
                    'subdomain_id' => null
                ],
                [// 84520
                    'code' => '84520',
                    'note' => null,
                    'label' => 'Servicios de archivo',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::dominios_culturales,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 4,
                    'subdomain_id' => null
                ],
                [// 32210
                    'code' => '32210',
                    'note' => null,
                    'label' => 'Libros educativos, impresos ',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::dominios_culturales,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 4,
                    'subdomain_id' => null
                ],
                [// 32220
                    'code' => '32220',
                    'note' => null,
                    'label' => 'Libros de referencia general, impresos',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::dominios_culturales,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 4,
                    'subdomain_id' => null
                ],
                [// 32291
                    'code' => '32291',
                    'note' => null,
                    'label' => 'Libros profesionales, técnicos y académicos, impresos',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::dominios_culturales,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 4,
                    'subdomain_id' => null
                ],
                [// 32292
                    'code' => '32292',
                    'note' => null,
                    'label' => 'Libros infantiles, impresos',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::dominios_culturales,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 4,
                    'subdomain_id' => null
                ],
                [// 32299
                    'code' => '32299',
                    'note' => null,
                    'label' => 'Otros libros, n.c.p., impresos',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::dominios_culturales,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 4,
                    'subdomain_id' => null
                ],
                [// 32510
                    'code' => '32510',
                    'note' => null,
                    'label' => 'Manufacturas cartográficas de todas clases, no en forma de libros o folletos',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::dominios_culturales,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 4,
                    'subdomain_id' => null
                ],
                [// 32511
                    'code' => '32511',
                    'note' => null,
                    'label' => 'Manufacturas cartográficas de todas clases, incluidos los mapas murales, planos topográficos y esferas, impresos, no en forma de libros o folletos',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::dominios_culturales,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 4,
                    'subdomain_id' => null
                ],
                [// 32530
                    'code' => '32530',
                    'note' => null,
                    'label' => 'Tarjetas postales impresas o ilustradas; tarjetas impresas con felicitaciones o comunicaciones personales, incluso con ilustraciones, adornos o aplicaciones, o con sobres ',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::dominios_culturales,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 4,
                    'subdomain_id' => null
                ],
                [// 47691
                    'code' => '47691',
                    'note' => null,
                    'label' => 'Libros de audio en cintas, discos u otros soportes físicos',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::dominios_culturales,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 4,
                    'subdomain_id' => null
                ],
                [// 47692
                    'code' => '47692',
                    'note' => null,
                    'label' => 'Texto sobre disco, cinta u otros soportes físicos',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::dominios_culturales,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 4,
                    'subdomain_id' => null
                ],
                [// 84311
                    'code' => '84311',
                    'note' => null,
                    'label' => 'Libros ‘en línea’',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::dominios_culturales,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 4,
                    'subdomain_id' => null
                ],
                [// 89110
                    'code' => '89110',
                    'note' => null,
                    'label' => 'Servicios editoriales, a comisión o por contrato',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::dominios_culturales,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 4,
                    'subdomain_id' => null
                ],
                [// 32300
                    'code' => '32300',
                    'note' => null,
                    'label' => 'Diarios, revistas y publicaciones periódicas, publicados por lo menos cuatro veces por semana',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::dominios_culturales,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 4,
                    'subdomain_id' => null
                ],
                [// 32410
                    'code' => '32410',
                    'note' => null,
                    'label' => 'Diarios y publicaciones periódicas de interés general, impresos, excepto los de publicación diaria',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::dominios_culturales,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 4,
                    'subdomain_id' => null
                ],
                [// 32420
                    'code' => '32420',
                    'note' => null,
                    'label' => 'Diarios comerciales, profesionales o académicos, impresos, excepto los de publicación diaria',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::dominios_culturales,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 4,
                    'subdomain_id' => null
                ],
                [// 32490
                    'code' => '32490',
                    'note' => null,
                    'label' => 'Otros diarios y publicaciones periódicas, impresas, excepto los de publicación diaria',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::dominios_culturales,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 4,
                    'subdomain_id' => null
                ],
                [// 84312
                    'code' => '84312',
                    'note' => null,
                    'label' => 'Periódicos y publicaciones periódica en línea',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::dominios_culturales,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 4,
                    'subdomain_id' => null
                ],
                [// 84399
                    'code' => '84399',
                    'note' => null,
                    'label' => 'Otros contenidos en línea n.c.p.',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::dominios_culturales,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 4,
                    'subdomain_id' => null
                ],
                [// 62251
                    'code' => '62251',
                    'note' => null,
                    'label' => 'Servicios comerciales al por menor de libros, revistas, periódicos y artículos de escritorio en tiendas especializadas',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::dominios_culturales,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 4,
                    'subdomain_id' => null
                ],
                [// 62151
                    'code' => '62151',
                    'note' => null,
                    'label' => 'Servicios comerciales al por menor de libros, revistas, periódicos y artículos de escritorio en tiendas no especializadas',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::dominios_culturales,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 4,
                    'subdomain_id' => null
                ],
                [// 62451
                    'code' => '62451',
                    'note' => null,
                    'label' => 'Otros servicios comerciales al por menor de libros, revistas, periódicos y artículos de escritorio sin intervención de tiendas de venta',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::dominios_culturales,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 4,
                    'subdomain_id' => null
                ],
                [// 62551
                    'code' => '62551',
                    'note' => null,
                    'label' => 'Servicios comerciales al por menor de libros, revistas, periódicos y artículos de escritorio a comisión o por contrato',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::dominios_culturales,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 4,
                    'subdomain_id' => null
                ],
                [// 62351
                    'code' => '62351',
                    'note' => null,
                    'label' => 'Servicios comerciales al por menor de libros, revistas, periódicos y artículos de escritorio por pedido postal',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::dominios_culturales,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 4,
                    'subdomain_id' => null
                ],
                [// 84410
                    'code' => '84410',
                    'note' => null,
                    'label' => 'Servicios de agencias de noticias a periódicos y publicaciones periódicas',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::dominios_culturales,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 4,
                    'subdomain_id' => null
                ],
                [// 85991
                    'code' => '85991',
                    'note' => null,
                    'label' => 'Otros servicios de información',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::dominios_culturales,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 4,
                    'subdomain_id' => null
                ],
                [// 61251
                    'code' => '61251',
                    'note' => null,
                    'label' => 'Servicios comerciales al por mayor prestados a comisión o por contrato, de libros, revistas, periódicos y artículos de escritorio',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::dominios_culturales,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 4,
                    'subdomain_id' => null
                ],
                [// 61151
                    'code' => '61151',
                    'note' => null,
                    'label' => 'Servicios comerciales al por mayor, excepto los prestados a comisión o por contrato, de libros, revistas, periódicos y artículos de escritorio',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::dominios_culturales,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 4,
                    'subdomain_id' => null
                ],
                [// 96320
                    'code' => '96320',
                    'note' => 'Este es un código algo problemático ya que, si bien claramente cubre a los autores, también cubre muchos otros tipos de actividades individuales de creación cultural. Se requiere realizar investigación país por país para establecer una mejor asignación de las actividades incluidas en esta clase.',
                    'label' => 'Servicios prestados por compositores, escultores y otros artistas, excepto los actores',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::dominios_culturales,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 4,
                    'subdomain_id' => null
                ],
                [// 96330
                    'code' => '96330',
                    'note' => 'Este es un código algo problemático ya que, si bien claramente cubre a los autores, también cubre muchos otros tipos de actividades individuales de creación cultural. Se requiere realizar investigación país por país para establecer una mejor asignación de las actividades incluidas en esta clase.',
                    'label' => 'Obras originales de autores, compositores y otros artistas excepto actores, pintores y escultores',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::dominios_culturales,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 4,
                    'subdomain_id' => null
                ],
            /* Medios Audiovisuales e Interactivos */
                [// 38582
                    'code' => '38582',
                    'note' => null,
                    'label' => 'Cartuchos de software para consolas de videojuegos',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::dominios_culturales,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 5,
                    'subdomain_id' => null
                ],
                [// 47822
                    'code' => '47822',
                    'note' => null,
                    'label' => 'Software para juegos de computadora, empaquetados',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::dominios_culturales,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 5,
                    'subdomain_id' => null
                ],
                [// 84391
                    'code' => '84391',
                    'note' => null,
                    'label' => 'Juegos en línea',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::dominios_culturales,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 5,
                    'subdomain_id' => null
                ],
                [// 38950
                    'code' => '38950',
                    'note' => null,
                    'label' => 'Películas cinematográficas impresionadas y reveladas, que tengan o no banda sonora o que consistan solamente en banda sonora',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::dominios_culturales,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 5,
                    'subdomain_id' => null
                ],
                [// 47620
                    'code' => '47620',
                    'note' => null,
                    'label' => 'Contenidos de películas y videocintas en discos, cintas u otros soportes físicos',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::dominios_culturales,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 5,
                    'subdomain_id' => null
                ],
                [// 84331
                    'code' => '84331',
                    'note' => null,
                    'label' => 'Descargas de películas y videos',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::dominios_culturales,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 5,
                    'subdomain_id' => null
                ],
                [// 84332
                    'code' => '84332',
                    'note' => null,
                    'label' => 'Contenido de video en tiempo real (streaming)',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::dominios_culturales,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 5,
                    'subdomain_id' => null
                ],
                [// 96121
                    'code' => '96121',
                    'note' => null,
                    'label' => 'Servicios de producción de películas cinematográficas, cintas de vídeo y programas de televisión',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::dominios_culturales,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 5,
                    'subdomain_id' => null
                ],
                [// 96123
                    'code' => '96123',
                    'note' => null,
                    'label' => 'Originales de películas cinematográficas, videocintas y programas de radio',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::dominios_culturales,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 5,
                    'subdomain_id' => null
                ],
                [// 96131
                    'code' => '96131',
                    'note' => null,
                    'label' => 'Servicios de montaje audiovisual',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::dominios_culturales,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 5,
                    'subdomain_id' => null
                ],
                [// 96132
                    'code' => '96132',
                    'note' => null,
                    'label' => 'Servicios de transferencia y duplicación de originales',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::dominios_culturales,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 5,
                    'subdomain_id' => null
                ],
                [// 96133
                    'code' => '96133',
                    'note' => null,
                    'label' => 'Servicios de corrección de colores y restauración digital',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::dominios_culturales,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 5,
                    'subdomain_id' => null
                ],
                [// 96134
                    'code' => '96134',
                    'note' => null,
                    'label' => 'Servicios de efectos visuales',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::dominios_culturales,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 5,
                    'subdomain_id' => null
                ],
                [// 96135
                    'code' => '96135',
                    'note' => null,
                    'label' => 'Servicios de animación',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::dominios_culturales,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 5,
                    'subdomain_id' => null
                ],
                [// 96136
                    'code' => '96136',
                    'note' => null,
                    'label' => 'Servicios de doblaje e incorporación de títulos y subtítulo',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::dominios_culturales,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 5,
                    'subdomain_id' => null
                ],
                [// 96139
                    'code' => '96139',
                    'note' => null,
                    'label' => 'Otros servicios de post-producción',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::dominios_culturales,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 5,
                    'subdomain_id' => null
                ],
                [// 96140
                    'code' => '96140',
                    'note' => null,
                    'label' => 'Servicios de distribución de películas, videocintas y programas de radio y televisión',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::dominios_culturales,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 5,
                    'subdomain_id' => null
                ],
                [// 96137
                    'code' => '96137',
                    'note' => null,
                    'label' => 'Servicios de diseño y montaje sonoro',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::dominios_culturales,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 5,
                    'subdomain_id' => null
                ],
                [// 47699
                    'code' => '47699',
                    'note' => null,
                    'label' => 'Otros discos y cintas de audio no musicales',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::dominios_culturales,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 5,
                    'subdomain_id' => null
                ],
                [// 84322
                    'code' => '84322',
                    'note' => null,
                    'label' => 'Contenido corriente de audio',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::dominios_culturales,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 5,
                    'subdomain_id' => null
                ],
                [// 96150
                    'code' => '96150',
                    'note' => null,
                    'label' => 'Servicios de proyección de películas',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::dominios_culturales,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 5,
                    'subdomain_id' => null
                ],
                [// 96152
                    'code' => '96152',
                    'note' => null,
                    'label' => 'Servicios de proyección de videocintas',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::dominios_culturales,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 5,
                    'subdomain_id' => null
                ],
                [// 84611
                    'code' => '84611',
                    'note' => null,
                    'label' => 'Programas de radio originales',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::dominios_culturales,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 5,
                    'subdomain_id' => null
                ],
                [// 84621
                    'code' => '84621',
                    'note' => null,
                    'label' => 'Programas de canales Transmisiones de radio de emisoras radiales',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::dominios_culturales,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 5,
                    'subdomain_id' => null
                ],
                [// 96122
                    'code' => '96122',
                    'note' => null,
                    'label' => 'Servicios de producción de programas de radio',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::dominios_culturales,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 5,
                    'subdomain_id' => null
                ],
                [// 84612
                    'code' => '84612',
                    'note' => null,
                    'label' => 'Programas de televisión originales',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::dominios_culturales,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 5,
                    'subdomain_id' => null
                ],
                [// 84622
                    'code' => '84622',
                    'note' => null,
                    'label' => 'Programas de canales televisivos',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::dominios_culturales,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 5,
                    'subdomain_id' => null
                ],
                [// 84631
                    'code' => '84631',
                    'note' => null,
                    'label' => 'Servicios de difusión de radio y televisión (programación y emisión)',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::dominios_culturales,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 5,
                    'subdomain_id' => null
                ],
                [// 84632
                    'code' => '84632',
                    'note' => null,
                    'label' => 'Servicios de distribución de programas a hogares, paquete de programa básico',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::dominios_culturales,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 5,
                    'subdomain_id' => null
                ],
                [// 84633
                    'code' => '84633',
                    'note' => null,
                    'label' => 'Servicios de distribución de programas a hogares, paquete de programa discrecional',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::dominios_culturales,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 5,
                    'subdomain_id' => null
                ],
                [// 84634
                    'code' => '84634',
                    'note' => null,
                    'label' => 'Servicios de distribución de programas a hogares, pago-por-vista',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::dominios_culturales,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 5,
                    'subdomain_id' => null
                ],
                [// 84394
                    'code' => '84394',
                    'note' => null,
                    'label' => 'Contenido de búsquedas en portales Internet',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::dominios_culturales,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 5,
                    'subdomain_id' => null
                ],
                [// 73220
                    'code' => '73220',
                    'note' => null,
                    'label' => 'Servicios de arrendamiento con o sin opción de compra de cintas de video',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::dominios_culturales,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 5,
                    'subdomain_id' => null
                ],
                [// 84420
                    'code' => '84420',
                    'note' => null,
                    'label' => 'Servicios de agencias de noticias a los medios audiovisuales',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::dominios_culturales,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 5,
                    'subdomain_id' => null
                ],
                [// 62542
                    'code' => '62542',
                    'note' => null,
                    'label' => 'Servicios comerciales al por menor de equipo de radio y televisión, instrumentos musicales y discos',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::dominios_culturales,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 5,
                    'subdomain_id' => null
                ],
                [// 62242
                    'code' => '62242',
                    'note' => null,
                    'label' => 'Servicios comerciales al por menor de equipo de radio y televisión, discos y cintas grabadas en tiendas especializadas',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::dominios_culturales,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 5,
                    'subdomain_id' => null
                ],
                [// 62342
                    'code' => '62342',
                    'note' => null,
                    'label' => 'Servicios comerciales al por menor de equipo de radio y televisión, instrumentos musicales y discos, partituras y cintas grabadas por pedido postal',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::dominios_culturales,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 5,
                    'subdomain_id' => null
                ],
            /* Diseno y Servicios Creativos */
                [// 83911
                    'code' => '83911',
                    'note' => null,
                    'label' => 'Servicios de diseño de interior',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::dominios_culturales,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 6,
                    'subdomain_id' => null
                ],
                [// 83919
                    'code' => '83919',
                    'note' => null,
                    'label' => 'Otros servicios especializados de diseño',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::dominios_culturales,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 6,
                    'subdomain_id' => null
                ],
                [// 83920
                    'code' => '83920',
                    'note' => null,
                    'label' => 'Originales de diseño',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::dominios_culturales,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 6,
                    'subdomain_id' => null
                ],
                [// 32550
                    'code' => '32550',
                    'note' => 'El código 32550 Planos y dibujos de arquitectura o ingeniería y otros planos y dibujos para fines industriales, comerciales y topográficos o fines análogos, originales, trazados a mano; textos manuscritos; reproducciones fotográficas y copias carbónicas de dichos artículos relacionados con planos y dibujos de arquitectura’ sólo debe ser incluido si el país no está en condiciones de distinguir entre productos culturales y no culturales.',
                    'label' => 'Planos y dibujos de arquitectura o ingeniería y otros planos y dibujos para fines industriales, comerciales y topográficos o fines análogos, originales, trazados a mano; textos manuscritos; reproducciones fotográficas y copias carbónicas de dichos artículos',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::dominios_culturales,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 6,
                    'subdomain_id' => null
                ],
                [// 83211
                    'code' => '83211',
                    'note' => null,
                    'label' => 'Servicios de asesoramiento en arquitectura',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::dominios_culturales,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 6,
                    'subdomain_id' => null
                ],
                [// 83212
                    'code' => '83212',
                    'note' => null,
                    'label' => 'Servicios de asesoramiento en arquitectura para proyectos mobiliarios residenciales',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::dominios_culturales,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 6,
                    'subdomain_id' => null
                ],
                [// 83213
                    'code' => '83213',
                    'note' => null,
                    'label' => 'Servicios de asesoramiento en arquitectura para proyectos mobiliarios no residenciales',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::dominios_culturales,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 6,
                    'subdomain_id' => null
                ],
                [// 83214
                    'code' => '83214',
                    'note' => null,
                    'label' => 'Servicios de arquitectura y restauración histórica',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::dominios_culturales,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 6,
                    'subdomain_id' => null
                ],
                [// 83231
                    'code' => '83231',
                    'note' => null,
                    'label' => 'Servicios de asesoramiento en arquitectura paisajista',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::dominios_culturales,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 6,
                    'subdomain_id' => null
                ],
                [// 83232
                    'code' => '83232',
                    'note' => null,
                    'label' => 'Servicios de arquitectura paisajista',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::dominios_culturales,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 6,
                    'subdomain_id' => null
                ],
                [// 73390
                    'code' => '73390',
                    'note' => 'Esta subclase comprende: ‘servicios de concesión de licencias para el derecho de utilizar otros productos de propiedad intelectual, por ejemplo, planos de arquitectura e ingeniería, diseños industriales, etc.',
                    'label' => 'Servicios de concesión de licencias para el derecho de usar otros productos de propiedad intelectual',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::dominios_culturales,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 6,
                    'subdomain_id' => null
                ],
                [// 83611
                    'code' => '83611',
                    'note' => null,
                    'label' => 'Servicios integrales de publicidad',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::dominios_culturales,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 6,
                    'subdomain_id' => null
                ],
                [// 83619
                    'code' => '83619',
                    'note' => null,
                    'label' => 'Otros servicios de publicidad',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::dominios_culturales,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 6,
                    'subdomain_id' => null
                ],
            /* Educación y Capacitación */
                [// 92911
                    'code' => '92911',
                    'note' => null,
                    'label' => 'Servicios de educación cultural',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::dominios_transversales,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 9,
                    'subdomain_id' => null
                ],
          /* DOMINIOS RELACIONADOS */
            /* Turismo */
                [// 64131
                    'code' => '64131',
                    'note' => null,
                    'label' => 'Servicios de turismo por vía férrea',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::dominios_relacionados,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 11,
                    'subdomain_id' => null
                ],
                [// 64132
                    'code' => '64132',
                    'note' => null,
                    'label' => 'Servicios de turismo terrestre, excepto por vía férrea',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::dominios_relacionados,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 11,
                    'subdomain_id' => null
                ],
                [// 64133
                    'code' => '64133',
                    'note' => null,
                    'label' => 'Servicios de turismo marítimo',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::dominios_relacionados,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 11,
                    'subdomain_id' => null
                ],
                [// 64134
                    'code' => '64134',
                    'note' => null,
                    'label' => 'Servicios de turismo aéreo',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::dominios_relacionados,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 11,
                    'subdomain_id' => null
                ],
                [// 63111
                    'code' => '63111',
                    'note' => null,
                    'label' => 'Servicios de alojamiento para viajeros, con servicio doméstico diario',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::dominios_relacionados,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 11,
                    'subdomain_id' => null
                ],
                [// 63112
                    'code' => '63112',
                    'note' => null,
                    'label' => 'Servicios de alojamiento para viajeros, sin servicio doméstico diario',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::dominios_relacionados,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 11,
                    'subdomain_id' => null
                ],
                [// 63113
                    'code' => '63113',
                    'note' => null,
                    'label' => 'Servicios de alojamiento para viajeros en régimen de tiempo compartido',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::dominios_relacionados,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 11,
                    'subdomain_id' => null
                ],
                [// 63114
                    'code' => '63114',
                    'note' => null,
                    'label' => 'Servicios de alojamiento para viajeros en albergues de juventud y bungalows',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::dominios_relacionados,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 11,
                    'subdomain_id' => null
                ],
                [// 63120
                    'code' => '63120',
                    'note' => null,
                    'label' => 'Servicios de camping',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::dominios_relacionados,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 11,
                    'subdomain_id' => null
                ],
                [// 63130
                    'code' => '63130',
                    'note' => null,
                    'label' => 'Servicios de aparcamientos para caravanas',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::dominios_relacionados,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 11,
                    'subdomain_id' => null
                ],
                [// 85511
                    'code' => '85511',
                    'note' => null,
                    'label' => 'Servicios de reserva para transporte aéreo',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::dominios_relacionados,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 11,
                    'subdomain_id' => null
                ],
                [// 85521
                    'code' => '85521',
                    'note' => null,
                    'label' => 'Servicios de reserva para alojamiento',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::dominios_relacionados,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 11,
                    'subdomain_id' => null
                ],
                [// 85523
                    'code' => '85523',
                    'note' => null,
                    'label' => 'Servicios de reserva para cruceros',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::dominios_relacionados,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 11,
                    'subdomain_id' => null
                ],
                [// 85524
                    'code' => '85524',
                    'note' => null,
                    'label' => 'Servicios de reserva para circuitos combinados',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::dominios_relacionados,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 11,
                    'subdomain_id' => null
                ],
                [// 85540
                    'code' => '85540',
                    'note' => null,
                    'label' => 'Servicios de operadores turísticos',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::dominios_relacionados,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 11,
                    'subdomain_id' => null
                ],
                [// 85512
                    'code' => '85512',
                    'note' => null,
                    'label' => 'Servicios de reserva para transporte ferroviario',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::dominios_relacionados,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 11,
                    'subdomain_id' => null
                ],
                [// 85513
                    'code' => '85513',
                    'note' => null,
                    'label' => 'Servicios de reserva para transporte en bus',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::dominios_relacionados,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 11,
                    'subdomain_id' => null
                ],
                [// 85514
                    'code' => '85514',
                    'note' => null,
                    'label' => 'Servicios de reserva para transporte para alquiler de vehículos',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::dominios_relacionados,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 11,
                    'subdomain_id' => null
                ],
                [// 85519
                    'code' => '85519',
                    'note' => null,
                    'label' => 'Otros servicios de transporte y reservas, n.c.p.',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::dominios_relacionados,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 11,
                    'subdomain_id' => null
                ],
                [// 85539
                    'code' => '85539',
                    'note' => null,
                    'label' => 'Servicios de reservas para actos; servicios de entretenimiento y recreación, y otros servicios de reservas',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::dominios_relacionados,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 11,
                    'subdomain_id' => null
                ],
                [// 85550
                    'code' => '85550',
                    'note' => null,
                    'label' => 'Servicios de guía de turismo',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::dominios_relacionados,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 11,
                    'subdomain_id' => null
                ],
                [// 85561
                    'code' => '85561',
                    'note' => null,
                    'label' => 'Servicios de fomento del turismo',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::dominios_relacionados,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 11,
                    'subdomain_id' => null
                ],
                [// 85562
                    'code' => '85562',
                    'note' => null,
                    'label' => 'Servicios de información para visitantes',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::dominios_relacionados,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 11,
                    'subdomain_id' => null
                ],
            /* Deportes y Recreación */
                [// 63130
                    'code' => '63130',
                    'note' => null,
                    'label' => 'Servicios de aparcamientos para caravanas',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::dominios_relacionados,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 12,
                    'subdomain_id' => null
                ],
                [// 73240
                    'code' => '73240',
                    'note' => null,
                    'label' => 'Servicios de renta o alquiler de equipo de recreo y esparcimiento',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::dominios_relacionados,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 12,
                    'subdomain_id' => null
                ],
                [// 96520
                    'code' => '96520',
                    'note' => null,
                    'label' => 'Servicios de explotación de instalaciones para deportes de competición y para deportes de esparcimiento',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::dominios_relacionados,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 12,
                    'subdomain_id' => null
                ],
                [// 96512
                    'code' => '96512',
                    'note' => null,
                    'label' => 'Servicios de clubes deportivos',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::dominios_relacionados,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 12,
                    'subdomain_id' => null
                ],
                [// 96511
                    'code' => '96511',
                    'note' => null,
                    'label' => 'Servicios de promoción y organización de pruebas deportivas de competición',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::dominios_relacionados,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 12,
                    'subdomain_id' => null
                ],
                [// 96590
                    'code' => '96590',
                    'note' => null,
                    'label' => 'Otros servicios deportivos y esparcimiento',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::dominios_relacionados,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 12,
                    'subdomain_id' => null
                ],
                [// 96610
                    'code' => '96610',
                    'note' => null,
                    'label' => 'Servicios de atletas',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::dominios_relacionados,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 12,
                    'subdomain_id' => null
                ],
                [// 96620
                    'code' => '96620',
                    'note' => null,
                    'label' => 'Servicios de apoyo relacionados con deportes y esparcimiento',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::dominios_relacionados,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 12,
                    'subdomain_id' => null
                ],
                [// 96921
                    'code' => '96921',
                    'note' => null,
                    'label' => 'Servicios de juegos de azar en línea',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::dominios_relacionados,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 12,
                    'subdomain_id' => null
                ],
                [// 96929
                    'code' => '96929',
                    'note' => null,
                    'label' => 'Otros servicios de apuesta y juegos de azar',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::dominios_relacionados,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 12,
                    'subdomain_id' => null
                ],
                [// 96910
                    'code' => '96910',
                    'note' => null,
                    'label' => 'Servicios relacionados con parques de atracciones e instalaciones similares',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::dominios_relacionados,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 12,
                    'subdomain_id' => null
                ],
                [// 96990
                    'code' => '96990',
                    'note' => null,
                    'label' => 'Otros servicios de esparcimiento y diversión n.c.p.',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::dominios_relacionados,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 12,
                    'subdomain_id' => null
                ],
                [// 96930
                    'code' => '96930',
                    'note' => null,
                    'label' => 'Servicios de máquinas recreativas que funcionan con monedas',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::dominios_relacionados,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 12,
                    'subdomain_id' => null
                ],
                [// 97230
                    'code' => '97230',
                    'note' => null,
                    'label' => 'Servicios de bienestar físico',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::dominios_relacionados,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 12,
                    'subdomain_id' => null
                ],
                [// 92912
                    'code' => '92912',
                    'note' => null,
                    'label' => 'Servicios de educación deportiva y recreativa',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::dominios_relacionados,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 12,
                    'subdomain_id' => null
                ],
          /* EQUIPAMIENTO Y MATERIALES DE APOYO DE DOMINIOS CULTURALES */
            /* Presentaciones Artisticas y Celebraciones */
                [// 89123
                    'code' => '89123',
                    'note' => null,
                    'label' => 'Servicios de reproducción de grabaciones, a comisión o por contrato',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_dominios_culturales,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 2,
                    'subdomain_id' => null
                ],
                [// 38991
                    'code' => '38991',
                    'note' => null,
                    'label' => 'Artículos para festivales, carnaval y otras diversiones, incluidos los artículos de magia y de broma',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_dominios_culturales,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 2,
                    'subdomain_id' => null
                ],
                [// 47321
                    'code' => '47321',
                    'note' => 'Sólo debe incluir aparatos de grabación de música.',
                    'label' => 'Aparatos de grabación o reproducción',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_dominios_culturales,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 2,
                    'subdomain_id' => null
                ],
            /* Artes Visuales y Artesanías */
                [// 35120
                    'code' => '35120',
                    'note' => null,
                    'label' => 'Colores para la pintura artística, la enseñanza y la pintura de rótulos, colores para modificar los matices, colores para el esparcimiento y productos similares',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_dominios_culturales,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 3,
                    'subdomain_id' => null
                ],
                [// 46520
                    'code' => '46520',
                    'note' => null,
                    'label' => 'Bombillas de ""flash"", cubos de ""flash"" y materiales análogos para fotografía',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_dominios_culturales,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 3,
                    'subdomain_id' => null
                ],
                [// 48321
                    'code' => '48321',
                    'note' => null,
                    'label' => 'Objetivos para cámaras, proyectores o ampliadoras o reductoras fotográficas',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_dominios_culturales,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 3,
                    'subdomain_id' => null
                ],
                [// 48322
                    'code' => '48322',
                    'note' => null,
                    'label' => 'Cámaras fotográficas (incluso cinematográficas)',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_dominios_culturales,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 3,
                    'subdomain_id' => null
                ],
                [// 48324
                    'code' => '48324',
                    'note' => null,
                    'label' => 'Dispositivos para la producción de destellos fotográficos; ampliadoras fotográficas; aparatos para laboratorios fotográficos n.c.p.; negatoscopios, pantallas de proyección',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_dominios_culturales,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 3,
                    'subdomain_id' => null
                ],
                [// 48341
                    'code' => '48341',
                    'note' => null,
                    'label' => 'Placas y películas fotográficas (excepto las cinematográficas) películas de impresión instantánea, sensibilizada y sin impresionar',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_dominios_culturales,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 3,
                    'subdomain_id' => null
                ],
                [// 48342
                    'code' => '48342',
                    'note' => null,
                    'label' => 'Preparaciones químicas para uso en fotografía',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_dominios_culturales,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 3,
                    'subdomain_id' => null
                ],
            /* Libros y Prensa */
                [// 83631
                    'code' => '83631',
                    'note' => null,
                    'label' => 'Venta de espacio publicitario en medios impresos (excepto a comisión)',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_dominios_culturales,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 4,
                    'subdomain_id' => null
                ],
                [// 89121
                    'code' => '89121',
                    'note' => null,
                    'label' => 'Servicios de impresión',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_dominios_culturales,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 4,
                    'subdomain_id' => null
                ],
                [// 89122
                    'code' => '89122',
                    'note' => null,
                    'label' => 'Servicios de impresión anexos',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_dominios_culturales,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 4,
                    'subdomain_id' => null
                ],
                [// 32800
                    'code' => '32800',
                    'note' => null,
                    'label' => 'Planchas o cilindros de impresión y otros elementos de impresión',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_dominios_culturales,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 4,
                    'subdomain_id' => null
                ],
                [// 44914
                    'code' => '44914',
                    'note' => null,
                    'label' => 'Maquinaria para la encuadernación; maquinaria para la impresión en offset y similares (excepto de oficina)',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_dominios_culturales,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 4,
                    'subdomain_id' => null
                ],
            /* Medios Audiovisuales e Interactivos */
                [// 45281
                    'code' => '45281',
                    'note' => null,
                    'label' => 'Tarjetas de sonido, vídeo, red y similares para ordenadores para computadoras',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_dominios_culturales,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 5,
                    'subdomain_id' => null
                ],
                [// 45221
                    'code' => '45221',
                    'note' => null,
                    'label' => 'Computadoras portátiles de peso igual o inferior a 10 kg; tales como notebooks y artículos similares',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_dominios_culturales,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 5,
                    'subdomain_id' => null
                ],
                [// 45222
                    'code' => '45222',
                    'note' => null,
                    'label' => 'Agendas electrónicas y artículos similares',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_dominios_culturales,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 5,
                    'subdomain_id' => null
                ],
                [// 45230
                    'code' => '45230',
                    'note' => null,
                    'label' => 'Computadoras incluidas las que contengan en la misma carcasa al menos, una unidad central de proceso, una unidad de entrada y una de salida, combinadas o no',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_dominios_culturales,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 5,
                    'subdomain_id' => null
                ],
                [// 45240
                    'code' => '45240',
                    'note' => null,
                    'label' => 'Computadoras presentadas en forma de sistema',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_dominios_culturales,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 5,
                    'subdomain_id' => null
                ],
                [// 47550
                    'code' => '47550',
                    'note' => null,
                    'label' => 'Dispositivo de memoria no volátiles transistor izados',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_dominios_culturales,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 5,
                    'subdomain_id' => null
                ],
                [// 45250
                    'code' => '45250',
                    'note' => null,
                    'label' => 'Otros tipos de computadoras incluidos los que contengan en la misma carcasa uno o dos de los tipos de unidades siguientes: unidad de memoria, unidad de entrada y unidad de salida',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_dominios_culturales,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 5,
                    'subdomain_id' => null
                ],
                [// 45261
                    'code' => '45261',
                    'note' => null,
                    'label' => 'Periféricos de entrada (teclados, joysticks, mouse etc.)',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_dominios_culturales,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 5,
                    'subdomain_id' => null
                ],
                [// 45271
                    'code' => '45271',
                    'note' => null,
                    'label' => 'Unidades fijas de memoria',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_dominios_culturales,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 5,
                    'subdomain_id' => null
                ],
                [// 45272
                    'code' => '45272',
                    'note' => null,
                    'label' => 'Unidades removibles de memoria',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_dominios_culturales,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 5,
                    'subdomain_id' => null
                ],
                [// 45289
                    'code' => '45289',
                    'note' => null,
                    'label' => 'Otros tipos de computadoras',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_dominios_culturales,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 5,
                    'subdomain_id' => null
                ],
                [// 45290
                    'code' => '45290',
                    'note' => null,
                    'label' => 'Partes y accesorios de equipos informáticos',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_dominios_culturales,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 5,
                    'subdomain_id' => null
                ],
                [// 47314
                    'code' => '47314',
                    'note' => null,
                    'label' => 'Pantallas y proyectores sin aparatos de televisión y que no son utilizados principalmente en computadoras',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_dominios_culturales,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 5,
                    'subdomain_id' => null
                ],
                [// 47315
                    'code' => '47315',
                    'note' => null,
                    'label' => 'Pantallas y proyectores, utilizados principalmente en computadoras',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_dominios_culturales,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 5,
                    'subdomain_id' => null
                ],
                [// 88742
                    'code' => '88742',
                    'note' => null,
                    'label' => 'Servicios de fabricación de computadoras y periféricos',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_dominios_culturales,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 5,
                    'subdomain_id' => null
                ],
                [// 47211
                    'code' => '47211',
                    'note' => null,
                    'label' => 'Emisores de radio o televisión con aparato receptor incorporado',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_dominios_culturales,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 5,
                    'subdomain_id' => null
                ],
                [// 47212
                    'code' => '47212',
                    'note' => null,
                    'label' => 'Emisores de radio o televisión con aparato receptor no incorporado',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_dominios_culturales,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 5,
                    'subdomain_id' => null
                ],
                [// 47213
                    'code' => '47213',
                    'note' => null,
                    'label' => 'Cámaras de televisión',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_dominios_culturales,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 5,
                    'subdomain_id' => null
                ],
                [// 47403
                    'code' => '47403',
                    'note' => null,
                    'label' => 'Partes para los productos incluidos en las subclases 47211 a 47213, 47311 a 47315 y 48220',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_dominios_culturales,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 5,
                    'subdomain_id' => null
                ],
                [// 47214
                    'code' => '47214',
                    'note' => null,
                    'label' => 'Cámaras de vídeo y otros aparatos de grabación o reproducción de sonido',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_dominios_culturales,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 5,
                    'subdomain_id' => null
                ],
                [// 47311
                    'code' => '47311',
                    'note' => null,
                    'label' => 'Receptores de radiodifusión (excepto para automóviles) que funcionen con o sin aparatos de grabación o reproducción de sonidos o reloj',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_dominios_culturales,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 5,
                    'subdomain_id' => null
                ],
                [// 47312
                    'code' => '47312',
                    'note' => null,
                    'label' => 'Receptores de radiodifusión que sólo funcionen con una fuente de energía exterior, del tipo utilizado en automóviles',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_dominios_culturales,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 5,
                    'subdomain_id' => null
                ],
                [// 47313
                    'code' => '47313',
                    'note' => null,
                    'label' => 'Televisores, incluso combinados con receptores de radiodifusión o aparatos de grabación o reproducción de sonido o imágenes',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_dominios_culturales,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 5,
                    'subdomain_id' => null
                ],
                [// 47323
                    'code' => '47323',
                    'note' => null,
                    'label' => 'Cámaras de vídeo y otros aparatos de grabación o reproducción de sonido',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_dominios_culturales,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 5,
                    'subdomain_id' => null
                ],
                [// 47330
                    'code' => '47330',
                    'note' => null,
                    'label' => 'Micrófonos y sus soportes; altavoces; auriculares, incluso combinados con un micrófono; amplificadores eléctricos de audiofrecuencia; aparatos eléctricos para amplificación del sonido',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_dominios_culturales,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 5,
                    'subdomain_id' => null
                ],
                [// 47402
                    'code' => '47402',
                    'note' => null,
                    'label' => 'Partes y piezas de los productos de las subclases 47321, 47323 y 47330',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_dominios_culturales,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 5,
                    'subdomain_id' => null
                ],
                [// 47215
                    'code' => '47215',
                    'note' => null,
                    'label' => 'Cámaras digitales ',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_dominios_culturales,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 5,
                    'subdomain_id' => null
                ],
                [// 38581
                    'code' => '38581',
                    'note' => null,
                    'label' => 'Consolas de videojuegos',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_dominios_culturales,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 5,
                    'subdomain_id' => null
                ],
                [// 48323
                    'code' => '48323',
                    'note' => null,
                    'label' => 'Proyectores cinematográficos; proyectores de diapositivas; proyectores de imágenes fijas, excepto lectores de micro formatos',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_dominios_culturales,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 5,
                    'subdomain_id' => null
                ],
                [// 47530
                    'code' => '47530',
                    'note' => null,
                    'label' => 'Soportes magnéticos, sin grabar, excepto tarjetas con banda magnética',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_dominios_culturales,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 5,
                    'subdomain_id' => null
                ],
                [// 47540
                    'code' => '47540',
                    'note' => null,
                    'label' => 'Soportes ópticos sin grabar',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_dominios_culturales,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 5,
                    'subdomain_id' => null
                ],
                [// 47910
                    'code' => '47910',
                    'note' => null,
                    'label' => 'Tarjetas con banda magnética',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_dominios_culturales,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 5,
                    'subdomain_id' => null
                ],
                [// 47590
                    'code' => '47590',
                    'note' => null,
                    'label' => 'Otros soportes para grabación, incluyendo matrices y originales para la producción de discos',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_dominios_culturales,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 5,
                    'subdomain_id' => null
                ],
                [// 47812
                    'code' => '47812',
                    'note' => null,
                    'label' => 'Programas informáticos (software) de redes, empacados',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_dominios_culturales,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 5,
                    'subdomain_id' => null
                ],
                [// 47814
                    'code' => '47814',
                    'note' => null,
                    'label' => 'Programas informáticos (software) de herramientas de desarrollo y programación de idiomas, empacados',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_dominios_culturales,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 5,
                    'subdomain_id' => null
                ],
                [// 47829
                    'code' => '47829',
                    'note' => null,
                    'label' => 'Otras aplicaciones de software, empacadas',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_dominios_culturales,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 5,
                    'subdomain_id' => null
                ],
                [// 73311
                    'code' => '73311',
                    'note' => null,
                    'label' => 'Servicios de concesión de licencias para el derecho de usar software informático',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_dominios_culturales,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 5,
                    'subdomain_id' => null
                ],
                [// 83143
                    'code' => '83143',
                    'note' => null,
                    'label' => 'Originales de programas informáticos (software)',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_dominios_culturales,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 5,
                    'subdomain_id' => null
                ],
                [// 84341
                    'code' => '84341',
                    'note' => null,
                    'label' => 'Sistema de descarga de software',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_dominios_culturales,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 5,
                    'subdomain_id' => null
                ],
                [// 84342
                    'code' => '84342',
                    'note' => null,
                    'label' => 'Aplicaciones para descarga de software',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_dominios_culturales,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 5,
                    'subdomain_id' => null
                ],
                [// 84392
                    'code' => '84392',
                    'note' => null,
                    'label' => 'Programas informáticos (software) en línea',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_dominios_culturales,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 5,
                    'subdomain_id' => null
                ],
                [// 83141
                    'code' => '83141',
                    'note' => null,
                    'label' => 'Servicios de diseño y desarrollo de tecnologías de la información para aplicaciones',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_dominios_culturales,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 5,
                    'subdomain_id' => null
                ],
                [// 83142
                    'code' => '83142',
                    'note' => null,
                    'label' => 'Servicios de diseño y desarrollo de tecnologías de la información para redes y sistemas',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_dominios_culturales,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 5,
                    'subdomain_id' => null
                ],
                [// 83161
                    'code' => '83161',
                    'note' => null,
                    'label' => 'Servicios de administración de redes',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_dominios_culturales,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 5,
                    'subdomain_id' => null
                ],
                [// 83632
                    'code' => '83632',
                    'note' => null,
                    'label' => 'Venta de espacio publicitario en radio o televisión (excepto a comisión)',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_dominios_culturales,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 5,
                    'subdomain_id' => null
                ],
                [// 84210
                    'code' => '84210',
                    'note' => null,
                    'label' => 'Servicios básicos de Internet',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_dominios_culturales,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 5,
                    'subdomain_id' => null
                ],
                [// 84221
                    'code' => '84221',
                    'note' => null,
                    'label' => 'Servicios de acceso de banda estrecha a Internet',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_dominios_culturales,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 5,
                    'subdomain_id' => null
                ],
                [// 84222
                    'code' => '84222',
                    'note' => null,
                    'label' => 'Servicios de acceso de banda estrecha a Internet',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_dominios_culturales,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 5,
                    'subdomain_id' => null
                ],
                [// 84290
                    'code' => '84290',
                    'note' => null,
                    'label' => 'Otros servicios de telecomunicaciones en Internet por cable',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_dominios_culturales,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 5,
                    'subdomain_id' => null
                ],
                [// 83151
                    'code' => '83151',
                    'note' => null,
                    'label' => 'Servicios de hosting de servidores de páginas web',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_dominios_culturales,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 5,
                    'subdomain_id' => null
                ],
                [// 83152
                    'code' => '83152',
                    'note' => null,
                    'label' => 'Prestación de servicios de aplicaciones',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_dominios_culturales,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 5,
                    'subdomain_id' => null
                ],
                [// 83159
                    'code' => '83159',
                    'note' => null,
                    'label' => 'Otros servicios de hosting de servidores y suministro de infraestructuras de tecnologías de la información',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_dominios_culturales,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 5,
                    'subdomain_id' => null
                ],
                [// 83633
                    'code' => '83633',
                    'note' => null,
                    'label' => 'Venta de espacio publicitario en Internet (excepto a comisión)',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_dominios_culturales,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 5,
                    'subdomain_id' => null
                ],
                [// 73124
                    'code' => '73124',
                    'note' => null,
                    'label' => 'Servicios de arriendo o alquiler de computadoras son operador',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_dominios_culturales,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 5,
                    'subdomain_id' => null
                ],
                [// 73210
                    'code' => '73210',
                    'note' => null,
                    'label' => 'Servicios de arriendo o alquiler de televisiones, radios, reproductoras de video cassettes y equipos y accesorios conexos',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_dominios_culturales,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 5,
                    'subdomain_id' => null
                ],
                [// 62242
                    'code' => '62242',
                    'note' => null,
                    'label' => 'Servicios de venta al por menor de equipos de radio y televisión y discos y cintas de grabaciones de audio',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_dominios_culturales,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 5,
                    'subdomain_id' => null
                ],
                [// 61184
                    'code' => '61184',
                    'note' => null,
                    'label' => 'Computadoras y programas informáticos (software)',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_dominios_culturales,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 5,
                    'subdomain_id' => null
                ],
                [// 61185
                    'code' => '61185',
                    'note' => null,
                    'label' => 'Equipos electrónico y de telecomunicaciones y sus partes y piezas',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_dominios_culturales,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 5,
                    'subdomain_id' => null
                ],
                [// 87130
                    'code' => '87130',
                    'note' => null,
                    'label' => 'Servicios de mantención y reparación de computadoras y equipos periféricos',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_dominios_culturales,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 5,
                    'subdomain_id' => null
                ],
                [// 87340
                    'code' => '87340',
                    'note' => null,
                    'label' => 'Servicios de instalación de radios, televisiones y maquinarias y equipo de comunicaciones',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_dominios_culturales,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 5,
                    'subdomain_id' => null
                ],
                [// 87332
                    'code' => '87332',
                    'note' => null,
                    'label' => 'Servicios de instalación de computadoras personales y equipos periféricos',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_dominios_culturales,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 5,
                    'subdomain_id' => null
                ],
            /* Diseno y Servicios Creativos */
                [// 83620
                    'code' => '83620',
                    'note' => null,
                    'label' => 'Compra o venta de espacio o tiempo publicitario, a comisión',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_dominios_culturales,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 6,
                    'subdomain_id' => null
                ],
                [// 83639
                    'code' => '83639',
                    'note' => null,
                    'label' => 'Compra o venta de otros espacios o tiempos publicitarios (excepto a comisión )',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_dominios_culturales,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 6,
                    'subdomain_id' => null
                ],
          /* EQUIPAMIENTO Y MATERIALES DE APOYO DE DOMINIOS RELACIONADOS */
            /* Deportes y Recreación */
                [// 28228
                    'code' => '28228',
                    'note' => null,
                    'label' => 'Buzos de atletismo, trajes de esquiar, trajes de baño y otras prendas, de punto o ganchillo n.c.p.',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_dominios_relacionados,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 12,
                    'subdomain_id' => null
                ],
                [// 28236
                    'code' => '28236',
                    'note' => null,
                    'label' => 'Buzos de atletismo, trajes de esquiar, trajes de baño y otras prendas, de tejidos que no sean de punto o ganchillo',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_dominios_relacionados,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 12,
                    'subdomain_id' => null
                ],
                [// 38600
                    'code' => '38600',
                    'note' => null,
                    'label' => 'Tiovivos, columpios, barracas de tiro al blanco y demás atracciones de ferias',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_dominios_relacionados,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 12,
                    'subdomain_id' => null
                ],
                [// 29420
                    'code' => '29420',
                    'note' => null,
                    'label' => 'Zapatillas de tenis, zapatillas de baloncesto, zapatillas de gimnasia, zapatillas de entrenamiento y zapatillas análogas',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_dominios_relacionados,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 12,
                    'subdomain_id' => null
                ],
                [// 29490
                    'code' => '29490',
                    'note' => null,
                    'label' => 'Otro calzado para deportes, excepto botas de patinar sobre hielo',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_dominios_relacionados,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 12,
                    'subdomain_id' => null
                ],
                [// 49410
                    'code' => '49410',
                    'note' => null,
                    'label' => 'Embarcaciones de vela no inflables, con motor auxiliar o sin él',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_dominios_relacionados,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 12,
                    'subdomain_id' => null
                ],
                [// 49490
                    'code' => '49490',
                    'note' => null,
                    'label' => 'Otras embarcaciones para recreo o deportes; botes de remos y canoas',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_dominios_relacionados,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 12,
                    'subdomain_id' => null
                ],
                [// 38410
                    'code' => '38410',
                    'note' => null,
                    'label' => 'Esquíes para nieve y otro equipo para esquiar sobre nieve; patines para hielo y patines de ruedas',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_dominios_relacionados,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 12,
                    'subdomain_id' => null
                ],
                [// 38420
                    'code' => '38420',
                    'note' => null,
                    'label' => 'Esquíes acuáticos, acuaplanos o tablas hawaianas, tablas de vela y otro equipo para deportes acuáticos',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_dominios_relacionados,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 12,
                    'subdomain_id' => null
                ],
                [// 38430
                    'code' => '38430',
                    'note' => null,
                    'label' => 'Artículos y equipo para gimnasia o atletismo',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_dominios_relacionados,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 12,
                    'subdomain_id' => null
                ],
                [// 38440
                    'code' => '38440',
                    'note' => null,
                    'label' => 'Otros artículos y equipo para deportes o para juegos al aire libre',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_dominios_relacionados,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 12,
                    'subdomain_id' => null
                ],
                [// 38450
                    'code' => '38450',
                    'note' => null,
                    'label' => 'Cañas y otros artículos para pescar con sedal; redes de pesca, cazamariposas y redes similares',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_dominios_relacionados,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 12,
                    'subdomain_id' => null
                ],
                [// 29410
                    'code' => '29410',
                    'note' => null,
                    'label' => 'Botas de esquiar, botas para planchas de nieve y calzado de esquiar a campo traviesa',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_dominios_relacionados,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 12,
                    'subdomain_id' => null
                ],
                [// 62255
                    'code' => '62255',
                    'note' => null,
                    'label' => 'Servicios comerciales al por menor de artículos de deporte (incluidas las bicicletas) en tiendas especializadas',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_dominios_relacionados,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 12,
                    'subdomain_id' => null
                ],
                [// 53270
                    'code' => '53270',
                    'note' => null,
                    'label' => 'Instalaciones deportivas y de esparcimiento al aire libre',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_dominios_relacionados,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 12,
                    'subdomain_id' => null
                ],
                [// 62355
                    'code' => '62355',
                    'note' => null,
                    'label' => 'Servicios comerciales al por menor de artículos de deporte (incluidas las bicicletas) por pedido postal',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_dominios_relacionados,
                    'classification_id' => 2,
                    'cycle_id' => null,
                    'domain_id' => 12,
                    'subdomain_id' => null
                ],
        /** SA 07 */
          /* BIENES CULTURALES */
            /* Patrimonio Cultural y Natural */
              /* Antigüedades */
                [// 970500
                    'code' => '970500',
                    'note' => null,
                    'label' => 'Colecciones y especimenes para colecciones de zoología, botánica, mineralogía o anatomía o que tengan interés histórico, arqueológico, paleontológico, etnográfico o numismático',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::bienes_culturales,
                    'classification_id' => 3,
                    'cycle_id' => null,
                    'domain_id' => 1,
                    'subdomain_id' => 1
                ],
                [// 970600
                    'code' => '970600',
                    'note' => null,
                    'label' => 'Antigüedades de más de cien años',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::bienes_culturales,
                    'classification_id' => 3,
                    'cycle_id' => null,
                    'domain_id' => 1,
                    'subdomain_id' => 1
                ],
            /* Presentaciones Artisticas y Celebraciones */
              /* Instrumentos Musicales */
                [// 830610
                    'code' => '830610',
                    'note' => null,
                    'label' => 'Campanas, campanillas, gongos y artículos similares',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::bienes_culturales,
                    'classification_id' => 3,
                    'cycle_id' => null,
                    'domain_id' => 2,
                    'subdomain_id' => 2
                ],
                [// 920110
                    'code' => '920110',
                    'note' => null,
                    'label' => 'Pianos verticales',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::bienes_culturales,
                    'classification_id' => 3,
                    'cycle_id' => null,
                    'domain_id' => 2,
                    'subdomain_id' => 2
                ],
                [// 920120
                    'code' => '920120',
                    'note' => null,
                    'label' => 'Pianos de cola',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::bienes_culturales,
                    'classification_id' => 3,
                    'cycle_id' => null,
                    'domain_id' => 2,
                    'subdomain_id' => 2
                ],
                [// 920190
                    'code' => '920190',
                    'note' => null,
                    'label' => 'Clavecines y demás instrumentos de cuerda con teclado (excepto pianos)',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::bienes_culturales,
                    'classification_id' => 3,
                    'cycle_id' => null,
                    'domain_id' => 2,
                    'subdomain_id' => 2
                ],
                [// 920210
                    'code' => '920210',
                    'note' => null,
                    'label' => 'Los demás instrumentos musicales de cuerda (por ejemplo: guitarras, violines, arpas) de arco',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::bienes_culturales,
                    'classification_id' => 3,
                    'cycle_id' => null,
                    'domain_id' => 2,
                    'subdomain_id' => 2
                ],
                [// 920290
                    'code' => '920290',
                    'note' => null,
                    'label' => 'Guitarras, arpas y los demás instrumentos musicales de cuerda (excepto instrumentos con teclado y de arco)',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::bienes_culturales,
                    'classification_id' => 3,
                    'cycle_id' => null,
                    'domain_id' => 2,
                    'subdomain_id' => 2
                ],
                [// 920510
                    'code' => '920510',
                    'note' => null,
                    'label' => 'Instrumentos musicales de viento (por ejemplo: clarinetes, trompetas, gaitas)',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::bienes_culturales,
                    'classification_id' => 3,
                    'cycle_id' => null,
                    'domain_id' => 2,
                    'subdomain_id' => 2
                ],
                [// 920590
                    'code' => '920590',
                    'note' => null,
                    'label' => 'Instrumentos musicales de viento (excepto instrumentos llamados «metales»)',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::bienes_culturales,
                    'classification_id' => 3,
                    'cycle_id' => null,
                    'domain_id' => 2,
                    'subdomain_id' => 2
                ],
                [// 920600
                    'code' => '920600',
                    'note' => null,
                    'label' => 'Instrumentos musicales de percusión (por ejemplo: tambores, cajas, xilófonos, platillos, castañuelas, maracas)',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::bienes_culturales,
                    'classification_id' => 3,
                    'cycle_id' => null,
                    'domain_id' => 2,
                    'subdomain_id' => 2
                ],
                [// 920710
                    'code' => '920710',
                    'note' => null,
                    'label' => 'Instrumentos de teclado (excepto los acordeones)',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::bienes_culturales,
                    'classification_id' => 3,
                    'cycle_id' => null,
                    'domain_id' => 2,
                    'subdomain_id' => 2
                ],
                [// 920790
                    'code' => '920790',
                    'note' => null,
                    'label' => 'Acordeones e instrumentos musicales sin teclado, en los que el sonido se produzca o tenga que amplificarse eléctricamente',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::bienes_culturales,
                    'classification_id' => 3,
                    'cycle_id' => null,
                    'domain_id' => 2,
                    'subdomain_id' => 2
                ],
                [// 920810
                    'code' => '920810',
                    'note' => null,
                    'label' => 'Cajas de música',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::bienes_culturales,
                    'classification_id' => 3,
                    'cycle_id' => null,
                    'domain_id' => 2,
                    'subdomain_id' => 2
                ],
                [// 920890
                    'code' => '920890',
                    'note' => null,
                    'label' => 'Orquestriones, organillos, pájaros cantores, sierras musicales y demás instrumentos musicales; reclamos de cualquier clase; silbatos, cuernos y demás instrumentos de boca, de llamada o aviso',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::bienes_culturales,
                    'classification_id' => 3,
                    'cycle_id' => null,
                    'domain_id' => 2,
                    'subdomain_id' => 2
                ],
              /* Grabaciones */
                [// 852321
                    'code' => '852321',
                    'note' => null,
                    'label' => 'Tarjetas con tira magnética incorporada',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::bienes_culturales,
                    'classification_id' => 3,
                    'cycle_id' => null,
                    'domain_id' => 2,
                    'subdomain_id' => 3
                ],
                [// 852329
                    'code' => '852329',
                    'note' => null,
                    'label' => 'Soportes magnéticos para grabar sonidos o grabaciones análogas (excepto, tarjetas con tira magnética incorporada y los productos del capítulo 37)',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::bienes_culturales,
                    'classification_id' => 3,
                    'cycle_id' => null,
                    'domain_id' => 2,
                    'subdomain_id' => 3
                ],
                [// 852351
                    'code' => '852351',
                    'note' => null,
                    'label' => 'Memorias transistorizadas no volátiles',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::bienes_culturales,
                    'classification_id' => 3,
                    'cycle_id' => null,
                    'domain_id' => 2,
                    'subdomain_id' => 3
                ],
                [// 852359
                    'code' => '852359',
                    'note' => null,
                    'label' => 'Soportes semiconductores, sin grabar, para grabar sonidos o grabaciones análogas',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::bienes_culturales,
                    'classification_id' => 3,
                    'cycle_id' => null,
                    'domain_id' => 2,
                    'subdomain_id' => 3
                ],
                [// 852380
                    'code' => '852380',
                    'note' => null,
                    'label' => 'Discos para tocadiscos y demás soportes para grabar sonido o grabaciones análogas, grabados, incluso las matrices y moldes galvánicos para fabricación de discos',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::bienes_culturales,
                    'classification_id' => 3,
                    'cycle_id' => null,
                    'domain_id' => 2,
                    'subdomain_id' => 3
                ],
                [// 490400
                    'code' => '490400',
                    'note' => null,
                    'label' => 'Música manuscrita o impresa, incluso con ilustraciones o encuadernada',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::bienes_culturales,
                    'classification_id' => 3,
                    'cycle_id' => null,
                    'domain_id' => 2,
                    'subdomain_id' => 3
                ],
            /* Artes Visuales y Artesanías */
              /* Pinturas */
                [// 970110
                    'code' => '970110',
                    'note' => null,
                    'label' => 'Cuadros, pinturas y dibujos hechos totalmente a mano, (excepto los dibujos de la partida 4906 y artículos manufacturados decorados a mano); collages y cuadros similares',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::bienes_culturales,
                    'classification_id' => 3,
                    'cycle_id' => null,
                    'domain_id' => 3,
                    'subdomain_id' => 4
                ],
                [// 970190
                    'code' => '970190',
                    'note' => null,
                    'label' => 'Collages y cuadros similares',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::bienes_culturales,
                    'classification_id' => 3,
                    'cycle_id' => null,
                    'domain_id' => 3,
                    'subdomain_id' => 4
                ],
                [// 491191
                    'code' => '491191',
                    'note' => 'Los diseños deben ser excluidos de esta categoría e incluidos en el Dominio F ‘Servicios de Diseño y Creativos’.',
                    'label' => 'Estampas, grabados y fotografías',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::bienes_culturales,
                    'classification_id' => 3,
                    'cycle_id' => null,
                    'domain_id' => 3,
                    'subdomain_id' => 4
                ],
              /* Otras Artes Visuales */
                [// 970200
                    'code' => '970200',
                    'note' => null,
                    'label' => 'Grabados, estampas y litografías originales',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::bienes_culturales,
                    'classification_id' => 3,
                    'cycle_id' => null,
                    'domain_id' => 3,
                    'subdomain_id' => 5
                ],
                [// 970300
                    'code' => '970300',
                    'note' => null,
                    'label' => 'Obras originales de estatuaria o escultura, de cualquier materia',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::bienes_culturales,
                    'classification_id' => 3,
                    'cycle_id' => null,
                    'domain_id' => 3,
                    'subdomain_id' => 5
                ],
                [// 392640
                    'code' => '392640',
                    'note' => null,
                    'label' => 'Estatuillas y demás objetos de adorno, de plástico',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::bienes_culturales,
                    'classification_id' => 3,
                    'cycle_id' => null,
                    'domain_id' => 3,
                    'subdomain_id' => 5
                ],
                [// 442010
                    'code' => '442010',
                    'note' => null,
                    'label' => 'Estatuillas y demás objetos de adorno, de madera',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::bienes_culturales,
                    'classification_id' => 3,
                    'cycle_id' => null,
                    'domain_id' => 3,
                    'subdomain_id' => 5
                ],
                [// 442090
                    'code' => '442090',
                    'note' => null,
                    'label' => 'Marquetería y taracea; cofrecillos y estuches para joyería u orfebrería y manufacturas similares, de madera; estatuillas y demás objetos de adorno, de madera; artículos de mobiliario, de madera',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::bienes_culturales,
                    'classification_id' => 3,
                    'cycle_id' => null,
                    'domain_id' => 3,
                    'subdomain_id' => 5
                ],
                [// 691310
                    'code' => '691310',
                    'note' => null,
                    'label' => 'Estatuillas y demás objetos de adorno de porcelana',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::bienes_culturales,
                    'classification_id' => 3,
                    'cycle_id' => null,
                    'domain_id' => 3,
                    'subdomain_id' => 5
                ],
                [// 691390
                    'code' => '691390',
                    'note' => null,
                    'label' => 'Estatuillas y demás objetos de adorno de cerámica, n.e.p (excepto los de porcelana)',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::bienes_culturales,
                    'classification_id' => 3,
                    'cycle_id' => null,
                    'domain_id' => 3,
                    'subdomain_id' => 5
                ],
                [// 701890
                    'code' => '701890',
                    'note' => null,
                    'label' => 'Artículos de vidrio incluyendo estatuillas',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::bienes_culturales,
                    'classification_id' => 3,
                    'cycle_id' => null,
                    'domain_id' => 3,
                    'subdomain_id' => 5
                ],
                [// 830621
                    'code' => '830621',
                    'note' => null,
                    'label' => 'Estatuillas y demás artículos de adorno de metal común, plateados, dorados o platinados',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::bienes_culturales,
                    'classification_id' => 3,
                    'cycle_id' => null,
                    'domain_id' => 3,
                    'subdomain_id' => 5
                ],
                [// 830629
                    'code' => '830629',
                    'note' => null,
                    'label' => 'Estatuillas y demás artículos de adorno de metal común, no plateados, dorados o platinados (excepto obras de arte, piezas de colección y antigüedades)',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::bienes_culturales,
                    'classification_id' => 3,
                    'cycle_id' => null,
                    'domain_id' => 3,
                    'subdomain_id' => 5
                ],
                [// 960110
                    'code' => '960110',
                    'note' => null,
                    'label' => 'Marfil trabajado y sus manufacturas',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::bienes_culturales,
                    'classification_id' => 3,
                    'cycle_id' => null,
                    'domain_id' => 3,
                    'subdomain_id' => 5
                ],
                [// 960190
                    'code' => '960190',
                    'note' => null,
                    'label' => 'Marfil, hueso, concha (caparazón) de tortuga, cuerno, asta, coral, nácar y demás materias animales para tallar, trabajadas, y manufacturas de estas materias (incluso las obtenidas por moldeo)',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::bienes_culturales,
                    'classification_id' => 3,
                    'cycle_id' => null,
                    'domain_id' => 3,
                    'subdomain_id' => 5
                ],
              /* Artesanías */
                [// 580500
                    'code' => '580500',
                    'note' => null,
                    'label' => 'Tapicería tejida a mano (gobelinos, Flandes, Aubusson, Beauvais y similares) y tapicería de aguja',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::bienes_culturales,
                    'classification_id' => 3,
                    'cycle_id' => null,
                    'domain_id' => 3,
                    'subdomain_id' => 6
                ],
                [// 580610
                    'code' => '580610',
                    'note' => null,
                    'label' => 'Cintas: Cintas de terciopelo, de felpa, de tejidos de chenilla o de tejidos con bucles del tipo toalla',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::bienes_culturales,
                    'classification_id' => 3,
                    'cycle_id' => null,
                    'domain_id' => 3,
                    'subdomain_id' => 6
                ],
                [// 580620
                    'code' => '580620',
                    'note' => null,
                    'label' => 'Cintas: Las demás cintas, con un contenido de hilos de elastómeros o de hilos de caucho superior o igual al 5 % en peso',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::bienes_culturales,
                    'classification_id' => 3,
                    'cycle_id' => null,
                    'domain_id' => 3,
                    'subdomain_id' => 6
                ],
                [// 580631
                    'code' => '580631',
                    'note' => null,
                    'label' => 'Cintas: Las demás cintas de algodón',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::bienes_culturales,
                    'classification_id' => 3,
                    'cycle_id' => null,
                    'domain_id' => 3,
                    'subdomain_id' => 6
                ],
                [// 580632
                    'code' => '580632',
                    'note' => null,
                    'label' => 'Cintas: Las demás cintas de fibras sintéticas o artificiales',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::bienes_culturales,
                    'classification_id' => 3,
                    'cycle_id' => null,
                    'domain_id' => 3,
                    'subdomain_id' => 6
                ],
                [// 580639
                    'code' => '580639',
                    'note' => null,
                    'label' => 'Cintas: Las demás cintas de las demás materias textiles',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::bienes_culturales,
                    'classification_id' => 3,
                    'cycle_id' => null,
                    'domain_id' => 3,
                    'subdomain_id' => 6
                ],
                [// 580640
                    'code' => '580640',
                    'note' => null,
                    'label' => 'Cintas sin trama, de hilados o fibras paralelizados y aglutinados',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::bienes_culturales,
                    'classification_id' => 3,
                    'cycle_id' => null,
                    'domain_id' => 3,
                    'subdomain_id' => 6
                ],
                [// 580810
                    'code' => '580810',
                    'note' => null,
                    'label' => 'Trenzas en pieza; artículos de pasamanería y artículos ornamentales análogos, en pieza, sin bordar (excepto los de punto)',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::bienes_culturales,
                    'classification_id' => 3,
                    'cycle_id' => null,
                    'domain_id' => 3,
                    'subdomain_id' => 6
                ],
                [// 580890
                    'code' => '580890',
                    'note' => null,
                    'label' => 'Las demás trenzas en pieza; artículos de pasamanería y artículos ornamentales análogos, en pieza, sin bordar (excepto los de punto)',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::bienes_culturales,
                    'classification_id' => 3,
                    'cycle_id' => null,
                    'domain_id' => 3,
                    'subdomain_id' => 6
                ],
                [// 580900
                    'code' => '580900',
                    'note' => null,
                    'label' => 'Tejidos de hilos de metal y tejidos de hilados metálicos o de hilados textiles metalizados de la partida 5605, de los tipos utilizados en prendas de vestir, tapicería o usos similares',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::bienes_culturales,
                    'classification_id' => 3,
                    'cycle_id' => null,
                    'domain_id' => 3,
                    'subdomain_id' => 6
                ],
                [// 581010
                    'code' => '581010',
                    'note' => null,
                    'label' => 'Bordados en pieza, tiras o motivos con fondo recortado',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::bienes_culturales,
                    'classification_id' => 3,
                    'cycle_id' => null,
                    'domain_id' => 3,
                    'subdomain_id' => 6
                ],
                [// 581091
                    'code' => '581091',
                    'note' => null,
                    'label' => 'Bordados en pieza, tiras o motivos: los demás bordados de algodón',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::bienes_culturales,
                    'classification_id' => 3,
                    'cycle_id' => null,
                    'domain_id' => 3,
                    'subdomain_id' => 6
                ],
                [// 581092
                    'code' => '581092',
                    'note' => null,
                    'label' => 'Bordados en pieza, tiras o motivos: los demás bordados, de fibras sintéticas o artificiales',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::bienes_culturales,
                    'classification_id' => 3,
                    'cycle_id' => null,
                    'domain_id' => 3,
                    'subdomain_id' => 6
                ],
                [// 581099
                    'code' => '581099',
                    'note' => null,
                    'label' => 'Bordados en pieza, tiras o motivos: los demás bordados, de las demás materias textiles',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::bienes_culturales,
                    'classification_id' => 3,
                    'cycle_id' => null,
                    'domain_id' => 3,
                    'subdomain_id' => 6
                ],
                [// 581100
                    'code' => '581100',
                    'note' => null,
                    'label' => 'Productos textiles acolchados en pieza',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::bienes_culturales,
                    'classification_id' => 3,
                    'cycle_id' => null,
                    'domain_id' => 3,
                    'subdomain_id' => 6
                ],
                [// 600240
                    'code' => '600240',
                    'note' => null,
                    'label' => 'Tejidos de punto de anchura no superior a 30 cm., con un contenido de hilados de elastómeros superior o igual al 5 % en peso, sin hilos de caucho',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::bienes_culturales,
                    'classification_id' => 3,
                    'cycle_id' => null,
                    'domain_id' => 3,
                    'subdomain_id' => 6
                ],
                [// 600290
                    'code' => '600290',
                    'note' => null,
                    'label' => 'Los demás tejidos de punto de anchura inferior o igual a 30 cm., con un contenido de hilados de elastómeros o de hilos de caucho superior o igual al 5 % en peso',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::bienes_culturales,
                    'classification_id' => 3,
                    'cycle_id' => null,
                    'domain_id' => 3,
                    'subdomain_id' => 6
                ],
                [// 600310
                    'code' => '600310',
                    'note' => null,
                    'label' => 'Tejidos de punto de anchura inferior o igual a 30 cm., de lana o pelo fino',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::bienes_culturales,
                    'classification_id' => 3,
                    'cycle_id' => null,
                    'domain_id' => 3,
                    'subdomain_id' => 6
                ],
                [// 600320
                    'code' => '600320',
                    'note' => null,
                    'label' => 'Tejidos de punto de anchura inferior o igual a 30 cm., de algodón',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::bienes_culturales,
                    'classification_id' => 3,
                    'cycle_id' => null,
                    'domain_id' => 3,
                    'subdomain_id' => 6
                ],
                [// 600330
                    'code' => '600330',
                    'note' => null,
                    'label' => 'Tejidos de punto de anchura inferior o igual a 30 cm., de fibras sintéticas',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::bienes_culturales,
                    'classification_id' => 3,
                    'cycle_id' => null,
                    'domain_id' => 3,
                    'subdomain_id' => 6
                ],
                [// 600340
                    'code' => '600340',
                    'note' => null,
                    'label' => 'Tejidos de punto de anchura inferior o igual a 30 cm., de fibras artificiales',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::bienes_culturales,
                    'classification_id' => 3,
                    'cycle_id' => null,
                    'domain_id' => 3,
                    'subdomain_id' => 6
                ],
                [// 600390
                    'code' => '600390',
                    'note' => null,
                    'label' => 'Otros tejidos de punto de anchura inferior o igual a 30 cm.',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::bienes_culturales,
                    'classification_id' => 3,
                    'cycle_id' => null,
                    'domain_id' => 3,
                    'subdomain_id' => 6
                ],
                [// 600410
                    'code' => '600410',
                    'note' => null,
                    'label' => 'Tejidos de punto de anchura superior a 30 cm., con un contenido de hilados de elastómeros superior o igual al 5 % en peso, sin hilos de caucho',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::bienes_culturales,
                    'classification_id' => 3,
                    'cycle_id' => null,
                    'domain_id' => 3,
                    'subdomain_id' => 6
                ],
                [// 600490
                    'code' => '600490',
                    'note' => null,
                    'label' => 'Otros tejidos de punto de anchura superior a 30 cm., con un contenido de hilados de elastómeros o de hilos de caucho superior o igual al 5 % en peso',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::bienes_culturales,
                    'classification_id' => 3,
                    'cycle_id' => null,
                    'domain_id' => 3,
                    'subdomain_id' => 6
                ],
              /* Joyas */
                [// 711311
                    'code' => '711311',
                    'note' => null,
                    'label' => 'Artículos de joyería y sus partes de plata, incluso revestidos o chapados de metal precioso (plaqué)',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::bienes_culturales,
                    'classification_id' => 3,
                    'cycle_id' => null,
                    'domain_id' => 3,
                    'subdomain_id' => 7
                ],
                [// 711319
                    'code' => '711319',
                    'note' => null,
                    'label' => 'Artículos de joyería y sus partes de los demás metales preciosos, incluso revestidos o chapados de metal precioso (plaqué)',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::bienes_culturales,
                    'classification_id' => 3,
                    'cycle_id' => null,
                    'domain_id' => 3,
                    'subdomain_id' => 7
                ],
                [// 711320
                    'code' => '711320',
                    'note' => null,
                    'label' => 'Artículos de joyería y sus partes de chapado de metal precioso (plaqué) sobre metal común',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::bienes_culturales,
                    'classification_id' => 3,
                    'cycle_id' => null,
                    'domain_id' => 3,
                    'subdomain_id' => 7
                ],
                [// 711411
                    'code' => '711411',
                    'note' => null,
                    'label' => 'Artículos de orfebrería y sus partes de plata, incluso revestida o chapada de otro metal precioso (plaqué)',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::bienes_culturales,
                    'classification_id' => 3,
                    'cycle_id' => null,
                    'domain_id' => 3,
                    'subdomain_id' => 7
                ],
                [// 711419
                    'code' => '711419',
                    'note' => null,
                    'label' => 'Artículos de orfebrería y sus partes, de los demás metales preciosos, incluso revestidos o chapados de metal precioso (plaqué)',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::bienes_culturales,
                    'classification_id' => 3,
                    'cycle_id' => null,
                    'domain_id' => 3,
                    'subdomain_id' => 7
                ],
                [// 711420
                    'code' => '711420',
                    'note' => null,
                    'label' => 'Artículos de orfebrería y sus partes de chapado de metal precioso (plaqué) sobre metal común',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::bienes_culturales,
                    'classification_id' => 3,
                    'cycle_id' => null,
                    'domain_id' => 3,
                    'subdomain_id' => 7
                ],
                [// 711610
                    'code' => '711610',
                    'note' => null,
                    'label' => 'Manufacturas de perlas finas (naturales) o cultivadas',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::bienes_culturales,
                    'classification_id' => 3,
                    'cycle_id' => null,
                    'domain_id' => 3,
                    'subdomain_id' => 7
                ],
                [// 711620
                    'code' => '711620',
                    'note' => null,
                    'label' => 'Manufacturas de piedras preciosas o semipreciosas (naturales, sintéticas o reconstituidas)',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::bienes_culturales,
                    'classification_id' => 3,
                    'cycle_id' => null,
                    'domain_id' => 3,
                    'subdomain_id' => 7
                ],
              /* Fotografías */
                [// 370510
                    'code' => '370510',
                    'note' => null,
                    'label' => 'Placas y películas, fotográficas, impresionadas y reveladas (excepto las cinematográficas [filmes]) para la reproducción offset',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::bienes_culturales,
                    'classification_id' => 3,
                    'cycle_id' => null,
                    'domain_id' => 3,
                    'subdomain_id' => 8
                ],
                [// 370590
                    'code' => '370590',
                    'note' => null,
                    'label' => 'Placas y películas, fotográficas, impresionadas y reveladas (excepto para la reproducción offset)',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::bienes_culturales,
                    'classification_id' => 3,
                    'cycle_id' => null,
                    'domain_id' => 3,
                    'subdomain_id' => 8
                ],
            /* Libros y Prensa */
              /* Libros */
                [// 490110
                    'code' => '490110',
                    'note' => null,
                    'label' => 'Libros, folletos e impresos similares , incluso en hojas sueltas o plegadas',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::bienes_culturales,
                    'classification_id' => 3,
                    'cycle_id' => null,
                    'domain_id' => 4,
                    'subdomain_id' => 9
                ],
                [// 490191
                    'code' => '490191',
                    'note' => null,
                    'label' => 'Diccionarios y enciclopedias, incluso en fascículos',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::bienes_culturales,
                    'classification_id' => 3,
                    'cycle_id' => null,
                    'domain_id' => 4,
                    'subdomain_id' => 9
                ],
                [// 490199
                    'code' => '490199',
                    'note' => null,
                    'label' => 'Libros, folletos e impresos similares',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::bienes_culturales,
                    'classification_id' => 3,
                    'cycle_id' => null,
                    'domain_id' => 4,
                    'subdomain_id' => 9
                ],
              /* Diarios */
                [// 490210
                    'code' => '490210',
                    'note' => null,
                    'label' => 'Diarios y publicaciones periódicas, impresos, incluso ilustrados o con publicidad, que se publiquen cuatro veces por semana como mínimo',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::bienes_culturales,
                    'classification_id' => 3,
                    'cycle_id' => null,
                    'domain_id' => 4,
                    'subdomain_id' => 10
                ],
                [// 490290
                    'code' => '490290',
                    'note' => null,
                    'label' => 'Los demás diarios y publicaciones periódicas',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::bienes_culturales,
                    'classification_id' => 3,
                    'cycle_id' => null,
                    'domain_id' => 4,
                    'subdomain_id' => 10
                ],
              /* Otros Materiales Impresos */
                [// 490300
                    'code' => '490300',
                    'note' => null,
                    'label' => 'Álbumes o libros de estampas y cuadernos para dibujar o colorear',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::bienes_culturales,
                    'classification_id' => 3,
                    'cycle_id' => null,
                    'domain_id' => 4,
                    'subdomain_id' => 11
                ],
                [// 490591
                    'code' => '490591',
                    'note' => null,
                    'label' => 'Manufacturas cartográficas de todas clases en forma de libros o folletos',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::bienes_culturales,
                    'classification_id' => 3,
                    'cycle_id' => null,
                    'domain_id' => 4,
                    'subdomain_id' => 11
                ],
                [// 490510
                    'code' => '490510',
                    'note' => null,
                    'label' => 'Manufacturas cartográficas de todas clases en forma de esferas',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::bienes_culturales,
                    'classification_id' => 3,
                    'cycle_id' => null,
                    'domain_id' => 4,
                    'subdomain_id' => 11
                ],
                [// 490599
                    'code' => '490599',
                    'note' => null,
                    'label' => 'Las demás manufacturas cartográficas de todas clases',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::bienes_culturales,
                    'classification_id' => 3,
                    'cycle_id' => null,
                    'domain_id' => 4,
                    'subdomain_id' => 11
                ],
                [// 490900
                    'code' => '490900',
                    'note' => null,
                    'label' => 'Tarjetas postales impresas o ilustradas; tarjetas impresas con felicitaciones',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::bienes_culturales,
                    'classification_id' => 3,
                    'cycle_id' => null,
                    'domain_id' => 4,
                    'subdomain_id' => 11
                ],
                [// 491000
                    'code' => '491000',
                    'note' => null,
                    'label' => 'Calendarios de cualquier clase impresos, incluidos los tacos de calendario',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::bienes_culturales,
                    'classification_id' => 3,
                    'cycle_id' => null,
                    'domain_id' => 4,
                    'subdomain_id' => 11
                ],
            /* Medios Audiovisuales e Interactivos */
              /* Filmes y Videos */
                [// 370610
                    'code' => '370610',
                    'note' => null,
                    'label' => 'Películas cinematográficas (filmes), impresionadas y reveladas, con registro de sonido o sin él, o con registro de sonido solamente de anchura superior o igual a 35 mm',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::bienes_culturales,
                    'classification_id' => 3,
                    'cycle_id' => null,
                    'domain_id' => 5,
                    'subdomain_id' => 12
                ],
              /*  */
                [// 370690
                    'code' => '370690',
                    'note' => null,
                    'label' => 'Películas cinematográficas (filmes), impresionadas y reveladas, con registro de sonido o sin él, o con registro de sonido solamente de anchura < 35 mm',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::bienes_culturales,
                    'classification_id' => 3,
                    'cycle_id' => null,
                    'domain_id' => 5,
                    'subdomain_id' => null
                ],
                [// 950410
                    'code' => '950410',
                    'note' => null,
                    'label' => '',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::bienes_culturales,
                    'classification_id' => 3,
                    'cycle_id' => null,
                    'domain_id' => 5,
                    'subdomain_id' => null
                ],
            /* Diseno y Servicios Creativos */
              /* Arquitectura y Diseño */
                [// 490600
                    'code' => '490600',
                    'note' => null,
                    'label' => 'Planos y dibujos originales hechos a mano, de arquitectura, ingeniería, industriales, comerciales, topográficos o similares; textos manuscritos; reproducciones fotográficas sobre papel sensibilizado y copias con papel carbón (carbónico) de los planos, dibujos o textos antes mencionados',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::bienes_culturales,
                    'classification_id' => 3,
                    'cycle_id' => null,
                    'domain_id' => 6,
                    'subdomain_id' => 14
                ],
          /* BIENES CULTURALES RELACIONADOS */
            /* Turismo */
            /* Deportes y Recreación */
          /* EQUIPAMIENTO Y MATERIALES DE APOYO DE BIENES CULTURALES */
            /* Presentaciones Artisticas y Celebraciones */
              /* Celebraciones */
                [// 950510
                    'code' => '950510',
                    'note' => null,
                    'label' => 'Artículos para fiestas de Navidad',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_bienes_culturales,
                    'classification_id' => 3,
                    'cycle_id' => null,
                    'domain_id' => 2,
                    'subdomain_id' => 15
                ],
                [// 950590
                    'code' => '950590',
                    'note' => null,
                    'label' => 'Artículos para fiestas, carnaval u otras diversiones, incluidos los de magia y artículos sorpresa, n.e.p.',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_bienes_culturales,
                    'classification_id' => 3,
                    'cycle_id' => null,
                    'domain_id' => 2,
                    'subdomain_id' => 15
                ],
                [// 950810
                    'code' => '950810',
                    'note' => 'Incluye sólo circos y zoológicos ambulantes (excluye el código 950890).',
                    'label' => 'Circos y zoológicos ambulantes',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_bienes_culturales,
                    'classification_id' => 3,
                    'cycle_id' => null,
                    'domain_id' => 2,
                    'subdomain_id' => 15
                ],
              /* Musicas */
                [// 851920
                    'code' => '851920',
                    'note' => null,
                    'label' => 'Aparatos de grabación de sonido activados con monedas, billetes, tarjetas, fichas o cualquier otro medio de pago',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_bienes_culturales,
                    'classification_id' => 3,
                    'cycle_id' => null,
                    'domain_id' => 2,
                    'subdomain_id' => 16
                ],
                [// 851930
                    'code' => '851930',
                    'note' => null,
                    'label' => 'Giradiscos (tocadiscos)',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_bienes_culturales,
                    'classification_id' => 3,
                    'cycle_id' => null,
                    'domain_id' => 2,
                    'subdomain_id' => 16
                ],
                [// 851810
                    'code' => '851810',
                    'note' => null,
                    'label' => 'Micrófonos y sus soportes',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_bienes_culturales,
                    'classification_id' => 3,
                    'cycle_id' => null,
                    'domain_id' => 2,
                    'subdomain_id' => 16
                ],
                [// 851821
                    'code' => '851821',
                    'note' => null,
                    'label' => 'Un altavoz (altoparlante) montado en su caja',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_bienes_culturales,
                    'classification_id' => 3,
                    'cycle_id' => null,
                    'domain_id' => 2,
                    'subdomain_id' => 16
                ],
                [// 851822
                    'code' => '851822',
                    'note' => null,
                    'label' => 'Varios altavoces (altoparlantes) montados en una misma caja',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_bienes_culturales,
                    'classification_id' => 3,
                    'cycle_id' => null,
                    'domain_id' => 2,
                    'subdomain_id' => 16
                ],
                [// 851829
                    'code' => '851829',
                    'note' => null,
                    'label' => 'Los demás micrófonos y sus soportes',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_bienes_culturales,
                    'classification_id' => 3,
                    'cycle_id' => null,
                    'domain_id' => 2,
                    'subdomain_id' => 16
                ],
                [// 851830
                    'code' => '851830',
                    'note' => null,
                    'label' => 'Auriculares, incluidos los de casco, y demás auriculares, incluso combinados con micrófono y juegos o conjuntos constituidos por un micrófono y uno o varios altavoces (altoparlantes)',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_bienes_culturales,
                    'classification_id' => 3,
                    'cycle_id' => null,
                    'domain_id' => 2,
                    'subdomain_id' => 16
                ],
                [// 851840
                    'code' => '851840',
                    'note' => null,
                    'label' => 'Amplificadores eléctricos de audiofrecuencia',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_bienes_culturales,
                    'classification_id' => 3,
                    'cycle_id' => null,
                    'domain_id' => 2,
                    'subdomain_id' => 16
                ],
                [// 851850
                    'code' => '851850',
                    'note' => null,
                    'label' => 'Equipos eléctricos para amplificación de sonido',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_bienes_culturales,
                    'classification_id' => 3,
                    'cycle_id' => null,
                    'domain_id' => 2,
                    'subdomain_id' => 16
                ],
                [// 920930
                    'code' => '920930',
                    'note' => null,
                    'label' => 'Cuerdas armónicas',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_bienes_culturales,
                    'classification_id' => 3,
                    'cycle_id' => null,
                    'domain_id' => 2,
                    'subdomain_id' => 16
                ],
                [// 920991
                    'code' => '920991',
                    'note' => null,
                    'label' => 'Partes y accesorios de pianos',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_bienes_culturales,
                    'classification_id' => 3,
                    'cycle_id' => null,
                    'domain_id' => 2,
                    'subdomain_id' => 16
                ],
                [// 920992
                    'code' => '920992',
                    'note' => null,
                    'label' => 'Partes y accesorios de instrumentos musicales de la partida 9202',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_bienes_culturales,
                    'classification_id' => 3,
                    'cycle_id' => null,
                    'domain_id' => 2,
                    'subdomain_id' => 16
                ],
                [// 920994
                    'code' => '920994',
                    'note' => null,
                    'label' => 'Partes y accesorios de instrumentos musicales de la partida 9207',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_bienes_culturales,
                    'classification_id' => 3,
                    'cycle_id' => null,
                    'domain_id' => 2,
                    'subdomain_id' => 16
                ],
                [// 920999
                    'code' => '920999',
                    'note' => null,
                    'label' => 'Partes y accesorios para instrumentos musicales (por ejemplo, mecanismos de cajas de música, tarjetas, discos y rollos para aparatos mecánicos) de instrumentos musicales; n.e.p., metrónomos y diapasones de cualquier tipo',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_bienes_culturales,
                    'classification_id' => 3,
                    'cycle_id' => null,
                    'domain_id' => 2,
                    'subdomain_id' => 16
                ],
            /* Artes Visuales y Artesanías */
              /* Fotografías */
                [// 370120
                    'code' => '370120',
                    'note' => 'Excluye placas y películas para rayos X (código 370110).',
                    'label' => 'Películas autorrevelables',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_bienes_culturales,
                    'classification_id' => 3,
                    'cycle_id' => null,
                    'domain_id' => 3,
                    'subdomain_id' => 17
                ],
                [// 370130
                    'code' => '370130',
                    'note' => null,
                    'label' => 'Las demás placas y películas planas en las que por lo menos un lado sea superior a 255 mm.',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_bienes_culturales,
                    'classification_id' => 3,
                    'cycle_id' => null,
                    'domain_id' => 3,
                    'subdomain_id' => 17
                ],
                [// 370191
                    'code' => '370191',
                    'note' => null,
                    'label' => 'Placas y películas planas, fotográficas, sensibilizadas, sin impresionar para fotografía en colores (policroma)',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_bienes_culturales,
                    'classification_id' => 3,
                    'cycle_id' => null,
                    'domain_id' => 3,
                    'subdomain_id' => 17
                ],
                [// 370199
                    'code' => '370199',
                    'note' => null,
                    'label' => 'Placas y películas planas, fotográficas, sensibilizadas, sin impresionar, excepto las de papel, cartón o textiles; (excepto películas para rayos X y placas fotográficas, películas planas de cualquier tamaño > 255 mm. y películas autorrevelables)',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_bienes_culturales,
                    'classification_id' => 3,
                    'cycle_id' => null,
                    'domain_id' => 3,
                    'subdomain_id' => 17
                ],
                [// 3702
                    'code' => '3702',
                    'note' => 'Excluye películas fotográficas en rollos para rayos X (código 370210).',
                    'label' => 'Películas fotográficas en rollos, sensibilizadas, sin impresionar, excepto las de papel, cartón o textiles',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_bienes_culturales,
                    'classification_id' => 3,
                    'cycle_id' => null,
                    'domain_id' => 3,
                    'subdomain_id' => 17
                ],
                [// 3703
                    'code' => '3703',
                    'note' => 'Sólo incluye fotografía',
                    'label' => 'Papel, cartón y materias textiles, fotográficos, sensibilizados, sin impresionar',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_bienes_culturales,
                    'classification_id' => 3,
                    'cycle_id' => null,
                    'domain_id' => 3,
                    'subdomain_id' => 17
                ],
                [// 370400
                    'code' => '370400',
                    'note' => null,
                    'label' => 'Papel, cartón y materias textiles, fotográficos, sensibilizados, pero sin revelar',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_bienes_culturales,
                    'classification_id' => 3,
                    'cycle_id' => null,
                    'domain_id' => 3,
                    'subdomain_id' => 17
                ],
                [// 370710
                    'code' => '370710',
                    'note' => null,
                    'label' => 'Emulsiones para sensibilizar superficies',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_bienes_culturales,
                    'classification_id' => 3,
                    'cycle_id' => null,
                    'domain_id' => 3,
                    'subdomain_id' => 17
                ],
                [// 370790
                    'code' => '370790',
                    'note' => null,
                    'label' => 'Las demás preparaciones químicas para uso fotográfico',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_bienes_culturales,
                    'classification_id' => 3,
                    'cycle_id' => null,
                    'domain_id' => 3,
                    'subdomain_id' => 17
                ],
                [// 9006
                    'code' => '9006',
                    'note' => 'Excluye cámaras diseñadas para usos especializados, por ejemplo, cámaras para exámenes médicos (código 900630).',
                    'label' => 'Cámaras fotográficas; accesorios',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_bienes_culturales,
                    'classification_id' => 3,
                    'cycle_id' => null,
                    'domain_id' => 3,
                    'subdomain_id' => 17
                ],
                [// 901010
                    'code' => '901010',
                    'note' => null,
                    'label' => 'Aparatos y material para revelado automático de película fotográfica, película cinematográfica (filme) o papel fotográfico en rollo o para la impresión automática de películas reveladas en rollos de papel fotográfico',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_bienes_culturales,
                    'classification_id' => 3,
                    'cycle_id' => null,
                    'domain_id' => 3,
                    'subdomain_id' => 17
                ],
                [// 901050
                    'code' => '901050',
                    'note' => null,
                    'label' => 'Los demás aparatos y material para laboratorios fotográfico o cinematográfico; negatoscopios',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_bienes_culturales,
                    'classification_id' => 3,
                    'cycle_id' => null,
                    'domain_id' => 3,
                    'subdomain_id' => 17
                ],
                [// 901060
                    'code' => '901060',
                    'note' => null,
                    'label' => 'Pantallas de proyección',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_bienes_culturales,
                    'classification_id' => 3,
                    'cycle_id' => null,
                    'domain_id' => 3,
                    'subdomain_id' => 17
                ],
                [// 901090
                    'code' => '901090',
                    'note' => null,
                    'label' => 'Partes y accesorios de aparatos y material para laboratorios fotográfico',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_bienes_culturales,
                    'classification_id' => 3,
                    'cycle_id' => null,
                    'domain_id' => 3,
                    'subdomain_id' => 17
                ],
            /* Libros y Prensa */
              /*  */
                [// 844314
                    'code' => '844314',
                    'note' => null,
                    'label' => 'Máquinas y aparatos para imprimir, tipográficos (excepto las máquinas y aparatos, flexográficos)',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_bienes_culturales,
                    'classification_id' => 3,
                    'cycle_id' => null,
                    'domain_id' => 4,
                    'subdomain_id' => null
                ],
                [// 844315
                    'code' => '844315',
                    'note' => null,
                    'label' => 'Máquinas y aparatos para imprimir, distintas a los alimentados con bobinas (excepto las máquinas y aparatos, flexográficos)',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_bienes_culturales,
                    'classification_id' => 3,
                    'cycle_id' => null,
                    'domain_id' => 4,
                    'subdomain_id' => null
                ],
                [// 834316
                    'code' => '834316',
                    'note' => null,
                    'label' => 'Máquinas y aparatos para imprimir, flexográficos',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_bienes_culturales,
                    'classification_id' => 3,
                    'cycle_id' => null,
                    'domain_id' => 4,
                    'subdomain_id' => null
                ],
                [// 834317
                    'code' => '834317',
                    'note' => null,
                    'label' => 'Máquinas y aparatos para imprimir, heliográficos (huecograbado)',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_bienes_culturales,
                    'classification_id' => 3,
                    'cycle_id' => null,
                    'domain_id' => 4,
                    'subdomain_id' => null
                ],
            /* Medios Audiovisuales e Interactivos */
              /* Audiovisuales */
                [// 852110
                    'code' => '852110',
                    'note' => null,
                    'label' => 'Aparatos de grabación o reproducción de imagen y sonido (vídeos), de cinta magnética',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_bienes_culturales,
                    'classification_id' => 3,
                    'cycle_id' => null,
                    'domain_id' => 5,
                    'subdomain_id' => 18
                ],
                [// 852190
                    'code' => '852190',
                    'note' => null,
                    'label' => 'Aparatos de grabación o reproducción de imagen y sonido (vídeos), incluso con receptor de señales de imagen y sonido incorporado (excepto de cinta magnética y videocámaras)',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_bienes_culturales,
                    'classification_id' => 3,
                    'cycle_id' => null,
                    'domain_id' => 5,
                    'subdomain_id' => 18
                ],
                [// 852550
                    'code' => '852550',
                    'note' => null,
                    'label' => 'Aparatos emisores',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_bienes_culturales,
                    'classification_id' => 3,
                    'cycle_id' => null,
                    'domain_id' => 5,
                    'subdomain_id' => 18
                ],
                [// 852560
                    'code' => '852560',
                    'note' => null,
                    'label' => 'Aparatos emisores con aparato receptor incorporado',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_bienes_culturales,
                    'classification_id' => 3,
                    'cycle_id' => null,
                    'domain_id' => 5,
                    'subdomain_id' => 18
                ],
                [// 852580
                    'code' => '852580',
                    'note' => null,
                    'label' => 'Cámaras de televisión, cámaras digitales y videocámaras',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_bienes_culturales,
                    'classification_id' => 3,
                    'cycle_id' => null,
                    'domain_id' => 5,
                    'subdomain_id' => 18
                ],
                [// 8527
                    'code' => '8527',
                    'note' => null,
                    'label' => 'Aparatos receptores de radiotelefonía, radiotelegrafía o radiodifusión, incluso combinados en la misma carcasa con grabador o reproductor de sonido o con reloj',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_bienes_culturales,
                    'classification_id' => 3,
                    'cycle_id' => null,
                    'domain_id' => 5,
                    'subdomain_id' => 18
                ],
                [// 8528
                    'code' => '8528',
                    'note' => null,
                    'label' => 'Monitores, proyectores que no incorporan aparatos receptores de televisión; aparatos receptores de televisión, incluso con aparato receptor de radiodifusión o de grabación o reproducción de sonido o imagen, incorporado',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_bienes_culturales,
                    'classification_id' => 3,
                    'cycle_id' => null,
                    'domain_id' => 5,
                    'subdomain_id' => 18
                ],
                [// 9007
                    'code' => '9007',
                    'note' => null,
                    'label' => 'Cámaras y proyectores cinematográficos, incluso con grabador o reproductor de sonido incorporados',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_bienes_culturales,
                    'classification_id' => 3,
                    'cycle_id' => null,
                    'domain_id' => 5,
                    'subdomain_id' => 18
                ],
                [// 900820
                    'code' => '900820',
                    'note' => null,
                    'label' => 'Lectores de microfilmes, microfichas u otros micro formatos, incluso copiadores',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_bienes_culturales,
                    'classification_id' => 3,
                    'cycle_id' => null,
                    'domain_id' => 5,
                    'subdomain_id' => 18
                ],
                [// 900810
                    'code' => '900810',
                    'note' => null,
                    'label' => 'Proyectores de imagen fija',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_bienes_culturales,
                    'classification_id' => 3,
                    'cycle_id' => null,
                    'domain_id' => 5,
                    'subdomain_id' => 18
                ],
                [// 900830
                    'code' => '900830',
                    'note' => null,
                    'label' => 'Los demás proyectores de imagen fija',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_bienes_culturales,
                    'classification_id' => 3,
                    'cycle_id' => null,
                    'domain_id' => 5,
                    'subdomain_id' => 18
                ],
                [// 900840
                    'code' => '900840',
                    'note' => null,
                    'label' => 'Ampliadoras o reductoras, fotográficas',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_bienes_culturales,
                    'classification_id' => 3,
                    'cycle_id' => null,
                    'domain_id' => 5,
                    'subdomain_id' => 18
                ],
                [// 900890
                    'code' => '900890',
                    'note' => null,
                    'label' => 'Partes y accesorios de proyectores de imagen fija, partida 9008',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_bienes_culturales,
                    'classification_id' => 3,
                    'cycle_id' => null,
                    'domain_id' => 5,
                    'subdomain_id' => 18
                ],
              /* Computadoras y Equipamientos Relacionados */
                [// 847130
                    'code' => '847130',
                    'note' => null,
                    'label' => 'Máquinas automáticas para tratamiento o procesamiento de datos',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_bienes_culturales,
                    'classification_id' => 3,
                    'cycle_id' => null,
                    'domain_id' => 5,
                    'subdomain_id' => 19
                ],
                [// 847141
                    'code' => '847141',
                    'note' => null,
                    'label' => 'Las demás máquinas automáticas para tratamiento o procesamiento de datos que incluyan en la misma carcasa, al menos, una unidad central de proceso y, aunque estén combinadas, una unidad de entrada y una de salida',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_bienes_culturales,
                    'classification_id' => 3,
                    'cycle_id' => null,
                    'domain_id' => 5,
                    'subdomain_id' => 19
                ],
                [// 847149
                    'code' => '847149',
                    'note' => null,
                    'label' => 'Las demás máquinas automáticas para tratamiento o procesamiento de datos presentadas en forma de sistemas',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_bienes_culturales,
                    'classification_id' => 3,
                    'cycle_id' => null,
                    'domain_id' => 5,
                    'subdomain_id' => 19
                ],
                [// 847150
                    'code' => '847150',
                    'note' => null,
                    'label' => 'Unidades de proceso (excepto las de las subpartidas 847141 u 847149), aunque incluyan en la misma carcasa uno o dos de los tipos siguientes de unidades: unidad de memoria, unidad de entrada y unidad de salida',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_bienes_culturales,
                    'classification_id' => 3,
                    'cycle_id' => null,
                    'domain_id' => 5,
                    'subdomain_id' => 19
                ],
                [// 847160
                    'code' => '847160',
                    'note' => null,
                    'label' => 'Unidades de entrada o salida, incluso con unidades de memoria en la misma carcasa',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_bienes_culturales,
                    'classification_id' => 3,
                    'cycle_id' => null,
                    'domain_id' => 5,
                    'subdomain_id' => 19
                ],
                [// 847170
                    'code' => '847170',
                    'note' => null,
                    'label' => 'Unidades de memoria',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_bienes_culturales,
                    'classification_id' => 3,
                    'cycle_id' => null,
                    'domain_id' => 5,
                    'subdomain_id' => 19
                ],
                [// 847180
                    'code' => '847180',
                    'note' => null,
                    'label' => 'Las demás unidades de máquinas automáticas para tratamiento o procesamiento de datos',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_bienes_culturales,
                    'classification_id' => 3,
                    'cycle_id' => null,
                    'domain_id' => 5,
                    'subdomain_id' => 19
                ],
                [// 847330
                    'code' => '847330',
                    'note' => null,
                    'label' => 'Partes y accesorios de máquinas de la partida 8471',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_bienes_culturales,
                    'classification_id' => 3,
                    'cycle_id' => null,
                    'domain_id' => 5,
                    'subdomain_id' => 19
                ],
          /* EQUIPAMIENTO Y MATERIALES DE APOYO DE BIENES RELACIONADOS */
            /* Turismo */
              /*  */
                [// 890110
                    'code' => '890110',
                    'note' => null,
                    'label' => 'Transatlánticos',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_bienes_relacionados,
                    'classification_id' => 3,
                    'cycle_id' => null,
                    'domain_id' => 11,
                    'subdomain_id' => null
                ],
            /* Deportes y Recreación */
              /* Deportes */
                [// 950611
                    'code' => '950611',
                    'note' => null,
                    'label' => 'Esquís',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_bienes_relacionados,
                    'classification_id' => 3,
                    'cycle_id' => null,
                    'domain_id' => 12,
                    'subdomain_id' => 26
                ],
                [// 950612
                    'code' => '950612',
                    'note' => null,
                    'label' => 'Fijadores de esquí',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_bienes_relacionados,
                    'classification_id' => 3,
                    'cycle_id' => null,
                    'domain_id' => 12,
                    'subdomain_id' => 26
                ],
                [// 950619
                    'code' => '950619',
                    'note' => null,
                    'label' => 'Artículos para práctica de deportes de invierno (excepto esquís y fijadores de esquí)',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_bienes_relacionados,
                    'classification_id' => 3,
                    'cycle_id' => null,
                    'domain_id' => 12,
                    'subdomain_id' => 26
                ],
                [// 950621
                    'code' => '950621',
                    'note' => null,
                    'label' => 'Deslizadores de vela',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_bienes_relacionados,
                    'classification_id' => 3,
                    'cycle_id' => null,
                    'domain_id' => 12,
                    'subdomain_id' => 26
                ],
                [// 950629
                    'code' => '950629',
                    'note' => null,
                    'label' => 'Esquís acuáticos, tablas y demás artículos para práctica de deportes acuáticos (excepto deslizadores de vela)',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_bienes_relacionados,
                    'classification_id' => 3,
                    'cycle_id' => null,
                    'domain_id' => 12,
                    'subdomain_id' => 26
                ],
                [// 950631
                    'code' => '950631',
                    'note' => null,
                    'label' => 'Palos de golf',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_bienes_relacionados,
                    'classification_id' => 3,
                    'cycle_id' => null,
                    'domain_id' => 12,
                    'subdomain_id' => 26
                ],
                [// 950632
                    'code' => '950632',
                    'note' => null,
                    'label' => 'Pelotas de golf',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_bienes_relacionados,
                    'classification_id' => 3,
                    'cycle_id' => null,
                    'domain_id' => 12,
                    'subdomain_id' => 26
                ],
                [// 950639
                    'code' => '950639',
                    'note' => null,
                    'label' => 'Artículos para golf (excepto pelotas y palos completos)',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_bienes_relacionados,
                    'classification_id' => 3,
                    'cycle_id' => null,
                    'domain_id' => 12,
                    'subdomain_id' => 26
                ],
                [// 950640
                    'code' => '950640',
                    'note' => null,
                    'label' => 'Artículos y material para tenis de mesa',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_bienes_relacionados,
                    'classification_id' => 3,
                    'cycle_id' => null,
                    'domain_id' => 12,
                    'subdomain_id' => 26
                ],
                [// 950661
                    'code' => '950661',
                    'note' => null,
                    'label' => 'Pelotas de tenis',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_bienes_relacionados,
                    'classification_id' => 3,
                    'cycle_id' => null,
                    'domain_id' => 12,
                    'subdomain_id' => 26
                ],
                [// 950662
                    'code' => '950662',
                    'note' => null,
                    'label' => 'Inflables',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_bienes_relacionados,
                    'classification_id' => 3,
                    'cycle_id' => null,
                    'domain_id' => 12,
                    'subdomain_id' => 26
                ],
                [// 950669
                    'code' => '950669',
                    'note' => null,
                    'label' => 'Las demás pelotas (excepto las pelotas de golf y de tenis de mesa)',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_bienes_relacionados,
                    'classification_id' => 3,
                    'cycle_id' => null,
                    'domain_id' => 12,
                    'subdomain_id' => 26
                ],
                [// 950699
                    'code' => '950699',
                    'note' => null,
                    'label' => 'Los demás artículos y material para cultura física',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_bienes_relacionados,
                    'classification_id' => 3,
                    'cycle_id' => null,
                    'domain_id' => 12,
                    'subdomain_id' => 26
                ],
                [// 950651
                    'code' => '950651',
                    'note' => null,
                    'label' => 'Raquetas de tenis',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_bienes_relacionados,
                    'classification_id' => 3,
                    'cycle_id' => null,
                    'domain_id' => 12,
                    'subdomain_id' => 26
                ],
                [// 950659
                    'code' => '950659',
                    'note' => null,
                    'label' => 'Raquetas de bádminton o similares, incluso sin cordaje (excepto raquetas de tenis y paletas de tenis de mesa)',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_bienes_relacionados,
                    'classification_id' => 3,
                    'cycle_id' => null,
                    'domain_id' => 12,
                    'subdomain_id' => 26
                ],
                [// 950670
                    'code' => '950670',
                    'note' => null,
                    'label' => 'Patines para hielo y patines de ruedas',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_bienes_relacionados,
                    'classification_id' => 3,
                    'cycle_id' => null,
                    'domain_id' => 12,
                    'subdomain_id' => 26
                ],
                [// 950691
                    'code' => '950691',
                    'note' => null,
                    'label' => 'Artículos y material para cultura física',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_bienes_relacionados,
                    'classification_id' => 3,
                    'cycle_id' => null,
                    'domain_id' => 12,
                    'subdomain_id' => 26
                ],
              /* Deportes y Recreación */
                [// 890310
                    'code' => '890310',
                    'note' => null,
                    'label' => 'Embarcaciones inflables para deportes o recreación',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_bienes_relacionados,
                    'classification_id' => 3,
                    'cycle_id' => null,
                    'domain_id' => 12,
                    'subdomain_id' => 27
                ],
                [// 890391
                    'code' => '890391',
                    'note' => null,
                    'label' => 'Barcos de vela',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_bienes_relacionados,
                    'classification_id' => 3,
                    'cycle_id' => null,
                    'domain_id' => 12,
                    'subdomain_id' => 27
                ],
                [// 890392
                    'code' => '890392',
                    'note' => null,
                    'label' => 'Barcos de motor',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_bienes_relacionados,
                    'classification_id' => 3,
                    'cycle_id' => null,
                    'domain_id' => 12,
                    'subdomain_id' => 27
                ],
                [// 890399
                    'code' => '890399',
                    'note' => null,
                    'label' => 'Los demás',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_bienes_relacionados,
                    'classification_id' => 3,
                    'cycle_id' => null,
                    'domain_id' => 12,
                    'subdomain_id' => 27
                ],
                [// 950890
                    'code' => '950890',
                    'note' => 'Excluye circos y zoológicos ambulantes (9508.10)',
                    'label' => 'Tiovivos, columpios, casetas de tiro y demás atracciones de feria; teatros, ambulantes',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_bienes_relacionados,
                    'classification_id' => 3,
                    'cycle_id' => null,
                    'domain_id' => 12,
                    'subdomain_id' => 27
                ],
              /* Juegos de Azar */
                [// 950490
                    'code' => '950490',
                    'note' => null,
                    'label' => 'Mesas para juegos de casino, artículos para juegos de bolos automáticos, y los demás artículos para salas de juego, juegos de mesa o salón, incluidos los juegos con motor o mecanismo (excepto los activados con monedas, billetes de banco, fichas o demás artículos similares, billares, videojuegos video para usar con un receptor de televisión y naipes)',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_bienes_relacionados,
                    'classification_id' => 3,
                    'cycle_id' => null,
                    'domain_id' => 12,
                    'subdomain_id' => 28
                ],
    
        /** SITC 4 */
          /* BIENES CULTURALES */
            /* Patrimonio Cultural y Natural */
              /* Antigüedades */
                [// 89650*
                    'code' => '89650*',
                    'note' => null,
                    'label' => 'Colecciones y especimenes para colecciones de zoología, botánica, mineralogía o anatomía o que tengan interés histórico, arqueológico, paleontológico, etnográfico o numismático',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::bienes_culturales,
                    'classification_id' => 4,
                    'cycle_id' => null,
                    'domain_id' => 1,
                    'subdomain_id' => 1
                ],
                [// 89660
                    'code' => '89660',
                    'note' => null,
                    'label' => 'Antigüedades de más de cien años',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::bienes_culturales,
                    'classification_id' => 4,
                    'cycle_id' => null,
                    'domain_id' => 1,
                    'subdomain_id' => 1
                ],
            /* Presentaciones Artisticas y Celebraciones */
              /* Instrumentos Musicales */
                [// 69952
                    'code' => '69952',
                    'note' => null,
                    'label' => 'Campanas, campanillas, gongos y artículossimilares, y partes de ellos que no sean eléctricas, de metal común',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::bienes_culturales,
                    'classification_id' => 4,
                    'cycle_id' => null,
                    'domain_id' => 2,
                    'subdomain_id' => 2
                ],
                [// 89813
                    'code' => '89813',
                    'note' => null,
                    'label' => 'Pianos, incluso automáticos; clavecines y demás instrumentos de cuerda con teclado',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::bienes_culturales,
                    'classification_id' => 4,
                    'cycle_id' => null,
                    'domain_id' => 2,
                    'subdomain_id' => 2
                ],
                [// 89815
                    'code' => '89815',
                    'note' => null,
                    'label' => 'Los demás instrumentos musicales de cuerda (por ejemplo: guitarras, violines, arpas)',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::bienes_culturales,
                    'classification_id' => 4,
                    'cycle_id' => null,
                    'domain_id' => 2,
                    'subdomain_id' => 2
                ],
                [// 89823
                    'code' => '89823',
                    'note' => null,
                    'label' => 'Los demás instrumentos musicales de viento (por ejemplo: clarinetes, trompetas, gaitas)',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::bienes_culturales,
                    'classification_id' => 4,
                    'cycle_id' => null,
                    'domain_id' => 2,
                    'subdomain_id' => 2
                ],
                [// 89824
                    'code' => '89824',
                    'note' => null,
                    'label' => 'Instrumentos musicales de percusión (por ejemplo: tambores, cajas, xilófonos, platillos, castañuelas, maracas)',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::bienes_culturales,
                    'classification_id' => 4,
                    'cycle_id' => null,
                    'domain_id' => 2,
                    'subdomain_id' => 2
                ],
                [// 89825
                    'code' => '89825',
                    'note' => null,
                    'label' => 'Instrumentos de teclado (excepto los acordeones), en los que el sonido se produzca o tenga que amplificarse eléctricamente (por ejemplo, órganos)',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::bienes_culturales,
                    'classification_id' => 4,
                    'cycle_id' => null,
                    'domain_id' => 2,
                    'subdomain_id' => 2
                ],
                [// 89826
                    'code' => '89826',
                    'note' => null,
                    'label' => 'Instrumentos musicales, n.e.p., en los que el sonido se produzca o tenga que amplificarse eléctricamente (por ejemplo, guitarras, acordeones)',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::bienes_culturales,
                    'classification_id' => 4,
                    'cycle_id' => null,
                    'domain_id' => 2,
                    'subdomain_id' => 2
                ],
                [// 89829
                    'code' => '89829',
                    'note' => null,
                    'label' => 'Cajas de música, orquestriones, organillos, pájaros cantores, sierras musicales y demás instrumentos musicales; reclamos de cualquier clase; silbatos, cuernos y demás instrumentos de boca, de llamada o aviso',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::bienes_culturales,
                    'classification_id' => 4,
                    'cycle_id' => null,
                    'domain_id' => 2,
                    'subdomain_id' => 2
                ],
              /* Grabaciones */
                [// 89842
                    'code' => '89842',
                    'note' => null,
                    'label' => 'Soportes magnéticos',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::bienes_culturales,
                    'classification_id' => 4,
                    'cycle_id' => null,
                    'domain_id' => 2,
                    'subdomain_id' => 3
                ],
                [// 89846
                    'code' => '89846',
                    'note' => null,
                    'label' => 'Soportes semiconductores',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::bienes_culturales,
                    'classification_id' => 4,
                    'cycle_id' => null,
                    'domain_id' => 2,
                    'subdomain_id' => 3
                ],
                [// 89849
                    'code' => '89849',
                    'note' => null,
                    'label' => 'Los demás discos, cintas, memoria transistorizada no volátil, tarjetas inteligentes y demás soportes para grabar sonido o grabaciones análogas, grabados, incluso las matrices y moldes galvánicos para fabricación de Medios grabados discos (excepto los productos del grupo 882)',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::bienes_culturales,
                    'classification_id' => 4,
                    'cycle_id' => null,
                    'domain_id' => 2,
                    'subdomain_id' => 3
                ],
                [// 89285
                    'code' => '89285',
                    'note' => null,
                    'label' => 'Música manuscrita o impresa, incluso con ilustraciones o encuadernada',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::bienes_culturales,
                    'classification_id' => 4,
                    'cycle_id' => null,
                    'domain_id' => 2,
                    'subdomain_id' => 3
                ],
            /* Artes Visuales y Artesanías */
              /* Pinturas */
                [// 89611
                    'code' => '89611',
                    'note' => null,
                    'label' => 'Pinturas, dibujos y pasteles',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::bienes_culturales,
                    'classification_id' => 4,
                    'cycle_id' => null,
                    'domain_id' => 3,
                    'subdomain_id' => 4
                ],
                [// 89612
                    'code' => '89612',
                    'note' => null,
                    'label' => 'Collages y cuadros similares',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::bienes_culturales,
                    'classification_id' => 4,
                    'cycle_id' => null,
                    'domain_id' => 3,
                    'subdomain_id' => 4
                ],
                [// 89287
                    'code' => '89287',
                    'note' => null,
                    'label' => 'Estampas, grabados y fotografías',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::bienes_culturales,
                    'classification_id' => 4,
                    'cycle_id' => null,
                    'domain_id' => 3,
                    'subdomain_id' => 4
                ],
              /* Otras Artes Visuales */
                [// 89620
                    'code' => '89620',
                    'note' => null,
                    'label' => 'Grabados, estampas y litografías originales',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::bienes_culturales,
                    'classification_id' => 4,
                    'cycle_id' => null,
                    'domain_id' => 3,
                    'subdomain_id' => 5
                ],
                [// 89630
                    'code' => '89630',
                    'note' => null,
                    'label' => 'Obras originales de estatuaria o escultura, de cualquier materia',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::bienes_culturales,
                    'classification_id' => 4,
                    'cycle_id' => null,
                    'domain_id' => 3,
                    'subdomain_id' => 5
                ],
                [// 89399*
                    'code' => '89399*',
                    'note' => null,
                    'label' => 'Los demás objetos de plástico, n.e.p.',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::bienes_culturales,
                    'classification_id' => 4,
                    'cycle_id' => null,
                    'domain_id' => 3,
                    'subdomain_id' => 5
                ],
                [// 63549*
                    'code' => '63549*',
                    'note' => null,
                    'label' => 'Marquetería y taracea; cofrecillos y estuches para joyería u orfebrería y manufacturas similares, de madera; estatuillas y demás objetos de adorno, de madera; artículos de mobiliario, de madera no comprendidos en la división 82',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::bienes_culturales,
                    'classification_id' => 4,
                    'cycle_id' => null,
                    'domain_id' => 3,
                    'subdomain_id' => 5
                ],
                [// 66621
                    'code' => '66621',
                    'note' => null,
                    'label' => 'Estatuillas y demás objetos de adorno de porcelana',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::bienes_culturales,
                    'classification_id' => 4,
                    'cycle_id' => null,
                    'domain_id' => 3,
                    'subdomain_id' => 5
                ],
                [// 66629
                    'code' => '66629',
                    'note' => null,
                    'label' => 'Las demás estatuillas y demás objetos de adorno de cerámica',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::bienes_culturales,
                    'classification_id' => 4,
                    'cycle_id' => null,
                    'domain_id' => 3,
                    'subdomain_id' => 5
                ],
                [// 66593*
                    'code' => '66593*',
                    'note' => null,
                    'label' => 'Cuentas de vidrio, imitaciones de perlas, de piedras preciosas o semipreciosas y artículos similares de abalorio y sus manufacturas (excepto la bisutería); ojos de vidrio (excepto los de prótesis); estatuillas y demás artículos de adorno, de vidrio trabajado al soplete (vidrio ahilado) (excepto la bisutería); micro esferas de vidrio con un diámetro inferior o igual a 1 mm',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::bienes_culturales,
                    'classification_id' => 4,
                    'cycle_id' => null,
                    'domain_id' => 3,
                    'subdomain_id' => 5
                ],
                [// 69782*
                    'code' => '69782*',
                    'note' => null,
                    'label' => 'Estatuillas y demás artículos de adorno de metal común; marcos para fotografías, grabados o similares, de metal común; espejos de metal común',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::bienes_culturales,
                    'classification_id' => 4,
                    'cycle_id' => null,
                    'domain_id' => 3,
                    'subdomain_id' => 5
                ],
                [// 89911* 
                    'code' => '89911*',
                    'note' => null,
                    'label' => 'Marfil, hueso, concha (caparazón) de tortuga, cuerno, asta, coral, nácar y demás materias animales para tallar, trabajadas, y manufacturas de estas materias (incluso las obtenidas por moldeo)',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::bienes_culturales,
                    'classification_id' => 4,
                    'cycle_id' => null,
                    'domain_id' => 3,
                    'subdomain_id' => 5
                ],
              /* Artesanías */
                [// 65891
                    'code' => '65891',
                    'note' => null,
                    'label' => 'Tapicería tejida a mano (gobelinos, Flandes, Aubusson, Beauvais y similares) y tapicería de aguja (por ejemplo: de petit point, de punto de cruz), incluso confeccionadas',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::bienes_culturales,
                    'classification_id' => 4,
                    'cycle_id' => null,
                    'domain_id' => 3,
                    'subdomain_id' => 6
                ],
                [// 65611
                    'code' => '65611',
                    'note' => null,
                    'label' => 'Cintas de terciopelo, de felpa, de tejidos de chenilla o de tejidos con bucles del tipo toalla',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::bienes_culturales,
                    'classification_id' => 4,
                    'cycle_id' => null,
                    'domain_id' => 3,
                    'subdomain_id' => 6
                ],
                [// 65612
                    'code' => '65612',
                    'note' => null,
                    'label' => 'Las demás cintas, con un contenido de hilos de elastómeros o de hilos de caucho superior o igual al 5 % en peso',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::bienes_culturales,
                    'classification_id' => 4,
                    'cycle_id' => null,
                    'domain_id' => 3,
                    'subdomain_id' => 6
                ],
                [// 65613
                    'code' => '65613',
                    'note' => null,
                    'label' => 'Las demás cintas',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::bienes_culturales,
                    'classification_id' => 4,
                    'cycle_id' => null,
                    'domain_id' => 3,
                    'subdomain_id' => 6
                ],
                [// 65614
                    'code' => '65614',
                    'note' => null,
                    'label' => 'Cintas sin trama, de hilados o fibras paralelizados y aglutinados',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::bienes_culturales,
                    'classification_id' => 4,
                    'cycle_id' => null,
                    'domain_id' => 3,
                    'subdomain_id' => 6
                ],
                [// 65632
                    'code' => '65632',
                    'note' => null,
                    'label' => 'Trenzas en pieza; artículos de pasamanería y artículos ornamentales análogos, en pieza, sin bordar (excepto los de punto); bellotas, madroños, pompones, borlas y artículos similares',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::bienes_culturales,
                    'classification_id' => 4,
                    'cycle_id' => null,
                    'domain_id' => 3,
                    'subdomain_id' => 6
                ],
                [// 65491
                    'code' => '65491',
                    'note' => null,
                    'label' => 'Tejidos de hilos de metal y tejidos de hilados metálicos o de hilados textiles metalizados de la partida 651.91, de los tipos utilizados en prendas de vestir, tapicería o usos similares, n.e.p.',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::bienes_culturales,
                    'classification_id' => 4,
                    'cycle_id' => null,
                    'domain_id' => 3,
                    'subdomain_id' => 6
                ],
                [// 65651
                    'code' => '65651',
                    'note' => null,
                    'label' => 'Bordados en pieza, tiras o motivos con fondo recortado',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::bienes_culturales,
                    'classification_id' => 4,
                    'cycle_id' => null,
                    'domain_id' => 3,
                    'subdomain_id' => 6
                ],
                [// 65659
                    'code' => '65659',
                    'note' => null,
                    'label' => 'Los demás bordados en pieza, tiras o motivos',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::bienes_culturales,
                    'classification_id' => 4,
                    'cycle_id' => null,
                    'domain_id' => 3,
                    'subdomain_id' => 6
                ],
                [// 65740
                    'code' => '65740',
                    'note' => null,
                    'label' => 'Productos textiles acolchados en pieza, constituidos por una o varias capas de materia textil combinadas con una materia de relleno y mantenidas mediante puntadas u otra forma de sujeción. n.e.p.',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::bienes_culturales,
                    'classification_id' => 4,
                    'cycle_id' => null,
                    'domain_id' => 3,
                    'subdomain_id' => 6
                ],
                [// 65521
                    'code' => '65521',
                    'note' => null,
                    'label' => 'Los demás tejidos de punto, de anchura inferior o igual a 30 cm., no impregnados, revestidos o estratificados',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::bienes_culturales,
                    'classification_id' => 4,
                    'cycle_id' => null,
                    'domain_id' => 3,
                    'subdomain_id' => 6
                ],
                [// 65522
                    'code' => '65522',
                    'note' => null,
                    'label' => 'Los demás tejidos de punto, de anchura superior a 30 cm., con un contenido de hilados de elastómeros o de hilos de caucho superior o igual al 5 % en peso, no impregnados, revestidos o estratificados',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::bienes_culturales,
                    'classification_id' => 4,
                    'cycle_id' => null,
                    'domain_id' => 3,
                    'subdomain_id' => 6
                ],
              /* Joyas */
                [// 89731
                    'code' => '89731',
                    'note' => null,
                    'label' => 'Artículos de joyería y sus partes de los demás metales preciosos, incluso revestidos o chapados de metal precioso (excepto relojes y estuches para relojes)',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::bienes_culturales,
                    'classification_id' => 4,
                    'cycle_id' => null,
                    'domain_id' => 3,
                    'subdomain_id' => 7
                ],
                [// 89732
                    'code' => '89732',
                    'note' => null,
                    'label' => 'Artículos de orfebrería y sus partes, de metal precioso, incluso revestidos o chapados de metal precioso (distintos a los productos de la partida 897.31)',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::bienes_culturales,
                    'classification_id' => 4,
                    'cycle_id' => null,
                    'domain_id' => 3,
                    'subdomain_id' => 7
                ],
                [// 89733
                    'code' => '89733',
                    'note' => null,
                    'label' => 'Manufacturas de piedras preciosas o semipreciosas (naturales, sintéticas o reconstituidas)',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::bienes_culturales,
                    'classification_id' => 4,
                    'cycle_id' => null,
                    'domain_id' => 3,
                    'subdomain_id' => 7
                ],
              /* Fotografías */
                [// 88260*
                    'code' => '88260*',
                    'note' => null,
                    'label' => 'Placas y películas, fotográficas, impresionadas y reveladas (excepto las cinematográficas)',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::bienes_culturales,
                    'classification_id' => 4,
                    'cycle_id' => null,
                    'domain_id' => 3,
                    'subdomain_id' => 8
                ],
            /* Libros y Prensa */
              /* Libros */
                [// 89215
                    'code' => '89215',
                    'note' => null,
                    'label' => 'Libros, folletos e impresos similares , incluso en hojas sueltas o plegadas',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::bienes_culturales,
                    'classification_id' => 4,
                    'cycle_id' => null,
                    'domain_id' => 4,
                    'subdomain_id' => 9
                ],
                [// 89216
                    'code' => '89216',
                    'note' => null,
                    'label' => 'Diccionarios y enciclopedias, no en hojas sueltas',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::bienes_culturales,
                    'classification_id' => 4,
                    'cycle_id' => null,
                    'domain_id' => 4,
                    'subdomain_id' => 9
                ],
                [// 89219
                    'code' => '89219',
                    'note' => null,
                    'label' => 'Los demás libros, folletos e impresos similares excluyendo hojas',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::bienes_culturales,
                    'classification_id' => 4,
                    'cycle_id' => null,
                    'domain_id' => 4,
                    'subdomain_id' => 9
                ],
              /* Diarios */
                [// 89221
                    'code' => '89221',
                    'note' => null,
                    'label' => 'Diarios y publicaciones periódicas, impresos, incluso ilustrados o con publicidad, que se publiquen cuatro veces por semana como mínimo',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::bienes_culturales,
                    'classification_id' => 4,
                    'cycle_id' => null,
                    'domain_id' => 4,
                    'subdomain_id' => 10
                ],
                [// 89229
                    'code' => '89229',
                    'note' => null,
                    'label' => 'Los demás diarios y publicaciones periódicas, incluso ilustrados o con publicidad',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::bienes_culturales,
                    'classification_id' => 4,
                    'cycle_id' => null,
                    'domain_id' => 4,
                    'subdomain_id' => 10
                ],
              /* Otros Materiales Impresos */
                [// 89212
                    'code' => '89212',
                    'note' => null,
                    'label' => 'Álbumes o libros de estampas y cuadernos para dibujar o colorear',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::bienes_culturales,
                    'classification_id' => 4,
                    'cycle_id' => null,
                    'domain_id' => 4,
                    'subdomain_id' => 11
                ],
                [// 89213
                    'code' => '89213',
                    'note' => null,
                    'label' => 'Manufacturas cartográficas de todas clases en forma de libros o folletos',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::bienes_culturales,
                    'classification_id' => 4,
                    'cycle_id' => null,
                    'domain_id' => 4,
                    'subdomain_id' => 11
                ],
                [// 89214
                    'code' => '89214',
                    'note' => null,
                    'label' => 'Manufacturas cartográficas de todas clases, incluidos los mapas murales, planos topográficos y esferas, impresos, no en forma de libros o folletos',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::bienes_culturales,
                    'classification_id' => 4,
                    'cycle_id' => null,
                    'domain_id' => 4,
                    'subdomain_id' => 11
                ],
                [// 89242
                    'code' => '89242',
                    'note' => null,
                    'label' => 'Tarjetas postales impresas o ilustradas; tarjetas impresas con felicitaciones o comunicaciones personales, incluso con ilustraciones, adornos o Otros Materiales aplicaciones, o con sobres',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::bienes_culturales,
                    'classification_id' => 4,
                    'cycle_id' => null,
                    'domain_id' => 4,
                    'subdomain_id' => 11
                ],
                [// 89284
                    'code' => '89284',
                    'note' => null,
                    'label' => 'Calendarios de cualquier clase impresos, incluidos los tacos de calendario)',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::bienes_culturales,
                    'classification_id' => 4,
                    'cycle_id' => null,
                    'domain_id' => 4,
                    'subdomain_id' => 11
                ],
            /* Medios Audiovisuales e Interactivos */
              /* Filmes y Videos */
                [// 88310
                    'code' => '88310',
                    'note' => null,
                    'label' => 'Películas cinematográficas (filmes), impresionadas y reveladas, con registro de sonido o sin él, o con registro de sonido solamente de anchura superior o igual a 35 mm',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::bienes_culturales,
                    'classification_id' => 4,
                    'cycle_id' => null,
                    'domain_id' => 5,
                    'subdomain_id' => 12
                ],
              /*  */
                [// 88390
                    'code' => '88390',
                    'note' => null,
                    'label' => 'Películas cinematográficas (filmes), impresionadas y reveladas, con registro de sonido o sin él, o con registro de sonido solamente',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::bienes_culturales,
                    'classification_id' => 4,
                    'cycle_id' => null,
                    'domain_id' => 5,
                    'subdomain_id' => null
                ],
                [// 89431
                    'code' => '89431',
                    'note' => null,
                    'label' => 'Videojuegos utilizados con receptor de televisión',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::bienes_culturales,
                    'classification_id' => 4,
                    'cycle_id' => null,
                    'domain_id' => 5,
                    'subdomain_id' => null
                ],
            /* Diseno y Servicios Creativos */
              /* Arquitectura y Diseño */
                [// 89282*
                    'code' => '89282*',
                    'note' => null,
                    'label' => 'Planos y dibujos originales hechos a mano, de arquitectura, ingeniería, industriales, comerciales, topográficos o similares; textos manuscritos; reproducciones fotográficas sobre papel sensibilizado y copias con papel carbón (carbónico) de los planos, dibujos o textos antes mencionados',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::bienes_culturales,
                    'classification_id' => 4,
                    'cycle_id' => null,
                    'domain_id' => 6,
                    'subdomain_id' => 14
                ],
          /* BIENES CULTURALES RELACIONADOS */
            /* Turismo */
            /* Deportes y Recreación */
          /* EQUIPAMIENTO Y MATERIALES DE APOYO DE BIENES CULTURALES */
            /* Presentaciones Artisticas y Celebraciones */
              /* Celebraciones */
                [// 89445
                    'code' => '89445',
                    'note' => null,
                    'label' => 'Los demás artículos para fiestas de Navidad',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_bienes_culturales,
                    'classification_id' => 4,
                    'cycle_id' => null,
                    'domain_id' => 2,
                    'subdomain_id' => 15
                ],
                [// 89449
                    'code' => '89449',
                    'note' => null,
                    'label' => 'Los demás artículos para entretenciones',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_bienes_culturales,
                    'classification_id' => 4,
                    'cycle_id' => null,
                    'domain_id' => 2,
                    'subdomain_id' => 15
                ],
                [// 89460*
                    'code' => '89460*',
                    'note' => null,
                    'label' => 'Tiovivos, columpios, casetas de tiro y demás atracciones de feria; circos, zoológicos y teatros, ambulantes',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_bienes_culturales,
                    'classification_id' => 4,
                    'cycle_id' => null,
                    'domain_id' => 2,
                    'subdomain_id' => 15
                ],
              /* Musicas */
                [// 76331
                    'code' => '76331',
                    'note' => null,
                    'label' => 'Aparatos activados con monedas, billetes, tarjetas, fichas o cualquier otro medio de pago',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_bienes_culturales,
                    'classification_id' => 4,
                    'cycle_id' => null,
                    'domain_id' => 2,
                    'subdomain_id' => 16
                ],
                [// 76335
                    'code' => '76335',
                    'note' => null,
                    'label' => 'Giradiscos (tocadiscos)',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_bienes_culturales,
                    'classification_id' => 4,
                    'cycle_id' => null,
                    'domain_id' => 2,
                    'subdomain_id' => 16
                ],
                [// 76421
                    'code' => '76421',
                    'note' => null,
                    'label' => 'Micrófonos y sus soportes',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_bienes_culturales,
                    'classification_id' => 4,
                    'cycle_id' => null,
                    'domain_id' => 2,
                    'subdomain_id' => 16
                ],
                [// 76422
                    'code' => '76422',
                    'note' => null,
                    'label' => 'Altoparlantes montados en sus cajas',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_bienes_culturales,
                    'classification_id' => 4,
                    'cycle_id' => null,
                    'domain_id' => 2,
                    'subdomain_id' => 16
                ],
                [// 76423
                    'code' => '76423',
                    'note' => null,
                    'label' => 'Altoparlantes, no montados en sus cajas',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_bienes_culturales,
                    'classification_id' => 4,
                    'cycle_id' => null,
                    'domain_id' => 2,
                    'subdomain_id' => 16
                ],
                [// 76424
                    'code' => '76424',
                    'note' => null,
                    'label' => 'Auriculares, incluidos los de casco, y juegos de micrófono y altavoces (altoparlantes) combinados',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_bienes_culturales,
                    'classification_id' => 4,
                    'cycle_id' => null,
                    'domain_id' => 2,
                    'subdomain_id' => 16
                ],
                [// 76425
                    'code' => '76425',
                    'note' => null,
                    'label' => 'Amplificadores eléctricos de audiofrecuencia',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_bienes_culturales,
                    'classification_id' => 4,
                    'cycle_id' => null,
                    'domain_id' => 2,
                    'subdomain_id' => 16
                ],
                [// 76426
                    'code' => '76426',
                    'note' => null,
                    'label' => 'Equipos eléctricos para amplificación de sonido ',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_bienes_culturales,
                    'classification_id' => 4,
                    'cycle_id' => null,
                    'domain_id' => 2,
                    'subdomain_id' => 16
                ],
                [// 89890
                    'code' => '89890',
                    'note' => null,
                    'label' => 'Partes y accesorios de instrumentos musicales (por ejemplo, mecanismos de cajas de música, tarjetas perforadas, discos y rollos para aparatos mecánicos de instrumentos musicales); metrónomos y diapasones de cualquier tipo',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_bienes_culturales,
                    'classification_id' => 4,
                    'cycle_id' => null,
                    'domain_id' => 2,
                    'subdomain_id' => 16
                ],
            /* Artes Visuales y Artesanías */
              /* Fotografías */
                [// 88220*
                    'code' => '88220*',
                    'note' => null,
                    'label' => 'Placas y películas planas, fotográficas, sensibilizadas, sin impresionar, excepto las de papel, cartón o textiles; películas fotográficas planas autorrevelables, sensibilizadas, sin impresionar, incluso en cargadores',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_bienes_culturales,
                    'classification_id' => 4,
                    'cycle_id' => null,
                    'domain_id' => 3,
                    'subdomain_id' => 17
                ],
                [// 88230*
                    'code' => '88230*',
                    'note' => null,
                    'label' => 'Películas fotográficas en rollos, sensibilizadas, sin impresionar, excepto las de papel, cartón o textiles; películas fotográficas autorrevelables en rollos, sensibilizadas, sin impresionar',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_bienes_culturales,
                    'classification_id' => 4,
                    'cycle_id' => null,
                    'domain_id' => 3,
                    'subdomain_id' => 17
                ],
                [// 88240*
                    'code' => '88240*',
                    'note' => null,
                    'label' => 'Papel, cartón y materias textiles, fotográficos, sensibilizados, sin impresionar',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_bienes_culturales,
                    'classification_id' => 4,
                    'cycle_id' => null,
                    'domain_id' => 3,
                    'subdomain_id' => 17
                ],
                [// 88250
                    'code' => '88250',
                    'note' => null,
                    'label' => 'Papel, cartón y materias textiles, fotográficos, sensibilizados, pero sin revelar',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_bienes_culturales,
                    'classification_id' => 4,
                    'cycle_id' => null,
                    'domain_id' => 3,
                    'subdomain_id' => 17
                ],
                [// 88210
                    'code' => '88210',
                    'note' => null,
                    'label' => 'Preparaciones químicas para uso fotográfico (excepto los barnices, colas, adhesivos y preparaciones similares); productos sin mezclar para uso fotográfico, dosificados o acondicionados para la venta al por menor para uso fotográfico y listos para su empleo',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_bienes_culturales,
                    'classification_id' => 4,
                    'cycle_id' => null,
                    'domain_id' => 3,
                    'subdomain_id' => 17
                ],
                [// 8811*
                    'code' => '8811*',
                    'note' => null,
                    'label' => 'Cámaras fotográficas; aparatos y dispositivos, incluidos las lámparas y tubos, para la producción de destellos en fotografía (excepto las lámparas y tubos de descarga del subgrupo 778.2); sus partes y accesorios',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_bienes_culturales,
                    'classification_id' => 4,
                    'cycle_id' => null,
                    'domain_id' => 3,
                    'subdomain_id' => 17
                ],
                [// 88135
                    'code' => '88135',
                    'note' => null,
                    'label' => 'Aparatos y material para laboratorios fotográfico o cinematográfico, incluidos los aparatos para proyectar o realizar esquemas (trazas) de circuitos sobre superficies sensibilizadas de material semiconductor, n.e.p.; negatoscopios; pantallas de proyección',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_bienes_culturales,
                    'classification_id' => 4,
                    'cycle_id' => null,
                    'domain_id' => 3,
                    'subdomain_id' => 17
                ],
                [// 88136
                    'code' => '88136',
                    'note' => null,
                    'label' => 'Partes y accesorios de aparatos y materiales de la partida 881.35',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_bienes_culturales,
                    'classification_id' => 4,
                    'cycle_id' => null,
                    'domain_id' => 3,
                    'subdomain_id' => 17
                ],
            /* Libros y Prensa */
              /*  */
                [// 72661
                    'code' => '72661',
                    'note' => null,
                    'label' => 'Máquinas y aparatos para imprimir',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_bienes_culturales,
                    'classification_id' => 4,
                    'cycle_id' => null,
                    'domain_id' => 4,
                    'subdomain_id' => null
                ],
                [// 72663
                    'code' => '72663',
                    'note' => null,
                    'label' => 'Máquinas y aparatos para imprimir, flexográficos 
                    ',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_bienes_culturales,
                    'classification_id' => 4,
                    'cycle_id' => null,
                    'domain_id' => 4,
                    'subdomain_id' => null
                ],
                [// 72665
                    'code' => '72665',
                    'note' => null,
                    'label' => 'Máquinas y aparatos para imprimir, heliográficos (huecograbado)',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_bienes_culturales,
                    'classification_id' => 4,
                    'cycle_id' => null,
                    'domain_id' => 4,
                    'subdomain_id' => null
                ],
            /* Medios Audiovisuales e Interactivos */
              /* Audiovisuales */
                [// 76381
                    'code' => '76381',
                    'note' => null,
                    'label' => 'Aparatos de grabación o reproducción de imagen y sonido (vídeos), incluso con receptor de señales de imagen y sonido incorporado de cinta magnética',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_bienes_culturales,
                    'classification_id' => 4,
                    'cycle_id' => null,
                    'domain_id' => 5,
                    'subdomain_id' => 18
                ],
                [// 76384
                    'code' => '76384',
                    'note' => null,
                    'label' => 'Los demás aparatos de grabación o reproducción de imagen y sonido (vídeos), incluso con receptor de señales de imagen y sonido incorporado',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_bienes_culturales,
                    'classification_id' => 4,
                    'cycle_id' => null,
                    'domain_id' => 5,
                    'subdomain_id' => 18
                ],
                [// 76431
                    'code' => '76431',
                    'note' => null,
                    'label' => 'Aparatos emisores',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_bienes_culturales,
                    'classification_id' => 4,
                    'cycle_id' => null,
                    'domain_id' => 5,
                    'subdomain_id' => 18
                ],
                [// 76432
                    'code' => '76432',
                    'note' => null,
                    'label' => 'Aparatos emisores con aparato receptor incorporado',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_bienes_culturales,
                    'classification_id' => 4,
                    'cycle_id' => null,
                    'domain_id' => 5,
                    'subdomain_id' => 18
                ],
                [// 76484
                    'code' => '76484',
                    'note' => null,
                    'label' => 'Cámaras de televisión, cámaras digitales y videocámaras',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_bienes_culturales,
                    'classification_id' => 4,
                    'cycle_id' => null,
                    'domain_id' => 5,
                    'subdomain_id' => 18
                ],
                [// 762
                    'code' => '762',
                    'note' => null,
                    'label' => 'Aparatos receptores de radiotelefonía, radiotelegrafía o radiodifusión,
                    incluso combinados en la misma carcasa con grabador o reproductor
                    de sonido o con reloj',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_bienes_culturales,
                    'classification_id' => 4,
                    'cycle_id' => null,
                    'domain_id' => 5,
                    'subdomain_id' => 18
                ],
                [// 761
                    'code' => '761',
                    'note' => null,
                    'label' => 'Aparatos receptores de televisión, incluso con aparato receptor de radiodifusión o de grabación o reproducción de sonido o imagen, incorporado',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_bienes_culturales,
                    'classification_id' => 4,
                    'cycle_id' => null,
                    'domain_id' => 5,
                    'subdomain_id' => 18
                ],
                [// 8812
                    'code' => '8812',
                    'note' => null,
                    'label' => 'Cámaras y proyectores cinematográficos, incluso con grabador o reproductor de sonido incorporados; sus partes y accesorios',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_bienes_culturales,
                    'classification_id' => 4,
                    'cycle_id' => null,
                    'domain_id' => 5,
                    'subdomain_id' => 18
                ],
                [// 88131
                    'code' => '88131',
                    'note' => null,
                    'label' => 'Lectores de microfilmes, microfichas u otros micro formatos, incluso copiadores',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_bienes_culturales,
                    'classification_id' => 4,
                    'cycle_id' => null,
                    'domain_id' => 5,
                    'subdomain_id' => 18
                ],
                [// 88132
                    'code' => '88132',
                    'note' => null,
                    'label' => 'Proyectores de imagen fija, n.e.p.',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_bienes_culturales,
                    'classification_id' => 4,
                    'cycle_id' => null,
                    'domain_id' => 5,
                    'subdomain_id' => 18
                ],
                [// 88133
                    'code' => '88133',
                    'note' => null,
                    'label' => 'Ampliadoras o reductoras, fotográficas',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_bienes_culturales,
                    'classification_id' => 4,
                    'cycle_id' => null,
                    'domain_id' => 5,
                    'subdomain_id' => 18
                ],
                [// 88134
                    'code' => '88134',
                    'note' => null,
                    'label' => 'Partes y accesorios de materiales comprendidos desde la partida 881.31 hasta la partida 881.33',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_bienes_culturales,
                    'classification_id' => 4,
                    'cycle_id' => null,
                    'domain_id' => 5,
                    'subdomain_id' => 18
                ],
              /* Computadoras y Equipamientos Relacionados */
                [// 75220
                    'code' => '75220',
                    'note' => null,
                    'label' => 'Máquinas automáticas para tratamiento o procesamiento de datos, portátiles, de peso inferior o igual a 10 kg, que estén constituidas, al menos, por una unidad central de proceso, un teclado y un visualizador',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_bienes_culturales,
                    'classification_id' => 4,
                    'cycle_id' => null,
                    'domain_id' => 5,
                    'subdomain_id' => 19
                ],
                [// 75230
                    'code' => '75230',
                    'note' => null,
                    'label' => 'Las demás máquinas automáticas para tratamiento o procesamiento de datos',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_bienes_culturales,
                    'classification_id' => 4,
                    'cycle_id' => null,
                    'domain_id' => 5,
                    'subdomain_id' => 19
                ],
                [// 75260
                    'code' => '75260',
                    'note' => null,
                    'label' => 'Unidades de entrada o salida, incluso con unidades de memoria en la misma carcasa',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_bienes_culturales,
                    'classification_id' => 4,
                    'cycle_id' => null,
                    'domain_id' => 5,
                    'subdomain_id' => 19
                ],
                [// 75270
                    'code' => '75270',
                    'note' => null,
                    'label' => 'Unidades de memoria',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_bienes_culturales,
                    'classification_id' => 4,
                    'cycle_id' => null,
                    'domain_id' => 5,
                    'subdomain_id' => 19
                ],
                [// 75280
                    'code' => '75280',
                    'note' => null,
                    'label' => 'Las demás unidades de máquinas automáticas para tratamiento o procesamiento de datos',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_bienes_culturales,
                    'classification_id' => 4,
                    'cycle_id' => null,
                    'domain_id' => 5,
                    'subdomain_id' => 19
                ],
                [// 75997
                    'code' => '75997',
                    'note' => null,
                    'label' => 'Partes y accesorios (excepto los estuches, fundas y similares) identificables como destinados, exclusiva o principalmente, a las máquinas o aparatos del grupo 752',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_bienes_culturales,
                    'classification_id' => 4,
                    'cycle_id' => null,
                    'domain_id' => 5,
                    'subdomain_id' => 19
                ],
          /* EQUIPAMIENTO Y MATERIALES DE APOYO DE BIENES RELACIONADOS */
            /* Turismo */
              /*  */
                [// 79328
                    'code' => '79328',
                    'note' => null,
                    'label' => 'Transatlánticos, barcos para excursiones (de cruceros) y barcos similares concebidos principalmente para transporte de personas; transbordadores de todo tipo',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_bienes_relacionados,
                    'classification_id' => 4,
                    'cycle_id' => null,
                    'domain_id' => 11,
                    'subdomain_id' => null
                ],
            /* Deportes y Recreación */
              /* Deportes */
                [// 89473
                    'code' => '89473',
                    'note' => null,
                    'label' => 'Esquís para nieve y demás artículos para práctica del esquí de nieve',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_bienes_relacionados,
                    'classification_id' => 4,
                    'cycle_id' => null,
                    'domain_id' => 12,
                    'subdomain_id' => 26
                ],
                [// 89474
                    'code' => '89474',
                    'note' => null,
                    'label' => 'Esquís acuáticos, tablas, deslizadores de vela y demás artículos para práctica de deportes acuáticos',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_bienes_relacionados,
                    'classification_id' => 4,
                    'cycle_id' => null,
                    'domain_id' => 12,
                    'subdomain_id' => 26
                ],
                [// 89475
                    'code' => '89475',
                    'note' => null,
                    'label' => 'Artículos para golf',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_bienes_relacionados,
                    'classification_id' => 4,
                    'cycle_id' => null,
                    'domain_id' => 12,
                    'subdomain_id' => 26
                ],
                [// 89479
                    'code' => '89479',
                    'note' => null,
                    'label' => 'Productos deportivos, n.e.p.',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_bienes_relacionados,
                    'classification_id' => 4,
                    'cycle_id' => null,
                    'domain_id' => 12,
                    'subdomain_id' => 26
                ],
                [// 89476
                    'code' => '89476',
                    'note' => null,
                    'label' => 'Raquetas de tenis, bádminton o similares, incluso sin cordaje',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_bienes_relacionados,
                    'classification_id' => 4,
                    'cycle_id' => null,
                    'domain_id' => 12,
                    'subdomain_id' => 26
                ],
                [// 89472
                    'code' => '89472',
                    'note' => null,
                    'label' => 'Patines para hielo y patines de ruedas (incluido el calzado con patines fijos)',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_bienes_relacionados,
                    'classification_id' => 4,
                    'cycle_id' => null,
                    'domain_id' => 12,
                    'subdomain_id' => 26
                ],
                [// 89478
                    'code' => '89478',
                    'note' => null,
                    'label' => 'Artículos y material para cultura física, gimnasia o atletismo',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_bienes_relacionados,
                    'classification_id' => 4,
                    'cycle_id' => null,
                    'domain_id' => 12,
                    'subdomain_id' => 26
                ],
              /* Deportes y Recreación */
                [// 79311
                    'code' => '79311',
                    'note' => null,
                    'label' => 'Embarcaciones inflables (incluso botes a remo y canoas)',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_bienes_relacionados,
                    'classification_id' => 4,
                    'cycle_id' => null,
                    'domain_id' => 12,
                    'subdomain_id' => 27
                ],
                [// 79312
                    'code' => '79312',
                    'note' => null,
                    'label' => 'Barcos de vela, no inflables, con o sin motor auxiliar',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_bienes_relacionados,
                    'classification_id' => 4,
                    'cycle_id' => null,
                    'domain_id' => 12,
                    'subdomain_id' => 27
                ],
                [// 79319
                    'code' => '79319',
                    'note' => null,
                    'label' => 'Botes a remo, canoas y embarcaciones para deportes o recreación no inflables, n.e.p.',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_bienes_relacionados,
                    'classification_id' => 4,
                    'cycle_id' => null,
                    'domain_id' => 12,
                    'subdomain_id' => 27
                ],
                [// 89460
                    'code' => '89460',
                    'note' => null,
                    'label' => 'Tiovivos, columpios, casetas de tiro y demás atracciones de feria; circos, zoológicos y teatros, ambulantes',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_bienes_relacionados,
                    'classification_id' => 4,
                    'cycle_id' => null,
                    'domain_id' => 12,
                    'subdomain_id' => 27
                ],
              /* Juegos de Azar */
                [// 89439
                    'code' => '89439',
                    'note' => null,
                    'label' => 'Artículos para salas de juego, juegos de mesa o salón, n.e.p.',
                    'measure' => DimensionMeasureEnum::bienes_y_servicios,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_bienes_relacionados,
                    'classification_id' => 3,
                    'cycle_id' => null,
                    'domain_id' => 12,
                    'subdomain_id' => 28
                ],
    /** OCUPACIONES CULTURALES */
        /** CIUO 08 */
          /* OCUPACIONES CULTURALES */
            /* Patrimonio Cultural y Natural */
              /* Creación */
                [// 2632
                    'code' => '2632',
                    'note' => 'Incluye arqueólogos y conservadores.',
                    'label' => 'Sociólogos, antropólogos, y profesionales afines',
                    'measure' => DimensionMeasureEnum::actividades_productivas,
                    'type' => DimensionTypeEnum::ocupaciones_culturales,
                    'classification_id' => 5,
                    'cycle_id' => 1,
                    'domain_id' => 1,
                    'subdomain_id' => null
                ],
              /* Difusión */
                [// 3433
                    'code' => '3433',
                    'note' => null,
                    'label' => 'Técnicos de galerías, bibliotecas y museos',
                    'measure' => DimensionMeasureEnum::actividades_productivas,
                    'type' => DimensionTypeEnum::ocupaciones_culturales,
                    'classification_id' => 5,
                    'cycle_id' => 9,
                    'domain_id' => 1,
                    'subdomain_id' => null
                ],
              /* Exhibición/Transmisión */
                [// 1349
                    'code' => '1349',
                    'note' => 'También incluye administradores de archivos y profesionales de museos. Cuando ello sea factible, se deben incluir los administradores de teatros en el Dominio B. Presentaciones artísticas y Celebraciones.',
                    'label' => 'Gerentes de servicios profesionales, n.c.p.',
                    'measure' => DimensionMeasureEnum::actividades_productivas,
                    'type' => DimensionTypeEnum::ocupaciones_culturales,
                    'classification_id' => 5,
                    'cycle_id' => 4,
                    'domain_id' => 1,
                    'subdomain_id' => null
                ],
              /* Archivística/Preservación */
                [// 2133
                    'code' => '2133',
                    'note' => 'Incluye a profesionales que trabajan en zonas protegidas.',
                    'label' => 'Profesionales de protección del medio ambiente',
                    'measure' => DimensionMeasureEnum::actividades_productivas,
                    'type' => DimensionTypeEnum::ocupaciones_culturales,
                    'classification_id' => 5,
                    'cycle_id' => 6,
                    'domain_id' => 1,
                    'subdomain_id' => null
                ],
                [// 2621
                    'code' => '2621',
                    'note' => 'Incluye archivistas, curadores de galerías de arte y curadores de museo.',
                    'label' => 'Archivistas y curadores',
                    'measure' => DimensionMeasureEnum::actividades_productivas,
                    'type' => DimensionTypeEnum::ocupaciones_culturales,
                    'classification_id' => 5,
                    'cycle_id' => 6,
                    'domain_id' => 1,
                    'subdomain_id' => null
                ],
            /* Presentaciones Artisticas y Celebraciones */
              /* Creación */
                [// 2659
                    'code' => '2659',
                    'note' => 'Otras actuaciones en vivo (artistas de teatro de variedades, ventrílocuos, toreros, bailarines de tap, etc.); artistas comunitarios, payasos, magos y trabajadores afines.',
                    'label' => 'Artistas creativos e interpretativos n.c.p.',
                    'measure' => DimensionMeasureEnum::actividades_productivas,
                    'type' => DimensionTypeEnum::ocupaciones_culturales,
                    'classification_id' => 5,
                    'cycle_id' => 1,
                    'domain_id' => 2,
                    'subdomain_id' => null
                ],
              /* Producción */
                [// 2652
                    'code' => '2652',
                    'note' => null,
                    'label' => 'Músicos, cantantes y compositores',
                    'measure' => DimensionMeasureEnum::actividades_productivas,
                    'type' => DimensionTypeEnum::ocupaciones_culturales,
                    'classification_id' => 5,
                    'cycle_id' => 2,
                    'domain_id' => 2,
                    'subdomain_id' => null
                ],
                [// 2653
                    'code' => '2653',
                    'note' => null,
                    'label' => 'Bailarines y coreógrafos',
                    'measure' => DimensionMeasureEnum::actividades_productivas,
                    'type' => DimensionTypeEnum::ocupaciones_culturales,
                    'classification_id' => 5,
                    'cycle_id' => 2,
                    'domain_id' => 2,
                    'subdomain_id' => null
                ],
                [// 7312
                    'code' => '7312',
                    'note' => null,
                    'label' => 'Fabricantes y afinadores de instrumentos musicales',
                    'measure' => DimensionMeasureEnum::actividades_productivas,
                    'type' => DimensionTypeEnum::ocupaciones_culturales,
                    'classification_id' => 5,
                    'cycle_id' => 2,
                    'domain_id' => 2,
                    'subdomain_id' => null
                ],
              /* Educación/Capacitación */
                [// 2310
                    'code' => '2310',
                    'note' => 'Debiera incluir a profesores de música de educación formal.',
                    'label' => 'Profesores universitarios y de educación superior',
                    'measure' => DimensionMeasureEnum::actividades_productivas,
                    'type' => DimensionTypeEnum::ocupaciones_culturales,
                    'classification_id' => 5,
                    'cycle_id' => 7,
                    'domain_id' => 2,
                    'subdomain_id' => null
                ],
                [// 2320
                    'code' => '2320',
                    'note' => 'Debiera incluir a profesores de música de educación formal.',
                    'label' => 'Profesores de enseñanza vocacional',
                    'measure' => DimensionMeasureEnum::actividades_productivas,
                    'type' => DimensionTypeEnum::ocupaciones_culturales,
                    'classification_id' => 5,
                    'cycle_id' => 7,
                    'domain_id' => 2,
                    'subdomain_id' => null
                ],
                [// 2354
                    'code' => '2354',
                    'note' => null,
                    'label' => 'Otros profesores de música',
                    'measure' => DimensionMeasureEnum::actividades_productivas,
                    'type' => DimensionTypeEnum::ocupaciones_culturales,
                    'classification_id' => 5,
                    'cycle_id' => 7,
                    'domain_id' => 2,
                    'subdomain_id' => null
                ],
            /* Artes Visuales y Artesanías */
              /* Creación */
                [// 2651
                    'code' => '2651',
                    'note' => null,
                    'label' => 'Artistas visuales',
                    'measure' => DimensionMeasureEnum::actividades_productivas,
                    'type' => DimensionTypeEnum::ocupaciones_culturales,
                    'classification_id' => 5,
                    'cycle_id' => 1,
                    'domain_id' => 3,
                    'subdomain_id' => null
                ],
                [// 3118
                    'code' => '3118',
                    'note' => null,
                    'label' => 'Delineantes y dibujantes técnicos',
                    'measure' => DimensionMeasureEnum::actividades_productivas,
                    'type' => DimensionTypeEnum::ocupaciones_culturales,
                    'classification_id' => 5,
                    'cycle_id' => 1,
                    'domain_id' => 3,
                    'subdomain_id' => null
                ],
              /* Producción */
                [// 3431
                    'code' => '3431',
                    'note' => null,
                    'label' => 'Fotógrafos',
                    'measure' => DimensionMeasureEnum::actividades_productivas,
                    'type' => DimensionTypeEnum::ocupaciones_culturales,
                    'classification_id' => 5,
                    'cycle_id' => 2,
                    'domain_id' => 3,
                    'subdomain_id' => null
                ],
                [// 7313
                    'code' => '7313',
                    'note' => null,
                    'label' => 'Joyeros, orfebres y plateros',
                    'measure' => DimensionMeasureEnum::actividades_productivas,
                    'type' => DimensionTypeEnum::ocupaciones_culturales,
                    'classification_id' => 5,
                    'cycle_id' => 2,
                    'domain_id' => 3,
                    'subdomain_id' => null
                ],
                [// 7314
                    'code' => '7314',
                    'note' => null,
                    'label' => 'Alfareros y afines',
                    'measure' => DimensionMeasureEnum::actividades_productivas,
                    'type' => DimensionTypeEnum::ocupaciones_culturales,
                    'classification_id' => 5,
                    'cycle_id' => 2,
                    'domain_id' => 3,
                    'subdomain_id' => null
                ],
                [// 7315
                    'code' => '7315',
                    'note' => null,
                    'label' => 'Sopladores, modeladores, laminadores, cortadores y pulidores de vidrio',
                    'measure' => DimensionMeasureEnum::actividades_productivas,
                    'type' => DimensionTypeEnum::ocupaciones_culturales,
                    'classification_id' => 5,
                    'cycle_id' => 2,
                    'domain_id' => 3,
                    'subdomain_id' => null
                ],
                [// 7316
                    'code' => '7316',
                    'note' => null,
                    'label' => 'Redactores de carteles, pintores decorativos y grabadores',
                    'measure' => DimensionMeasureEnum::actividades_productivas,
                    'type' => DimensionTypeEnum::ocupaciones_culturales,
                    'classification_id' => 5,
                    'cycle_id' => 2,
                    'domain_id' => 3,
                    'subdomain_id' => null
                ],
                [// 7317
                    'code' => '7317',
                    'note' => null,
                    'label' => 'Artesanos en madera, cestería y materiales similares',
                    'measure' => DimensionMeasureEnum::actividades_productivas,
                    'type' => DimensionTypeEnum::ocupaciones_culturales,
                    'classification_id' => 5,
                    'cycle_id' => 2,
                    'domain_id' => 3,
                    'subdomain_id' => null
                ],
                [// 7318
                    'code' => '7318',
                    'note' => null,
                    'label' => 'Artesanos de los tejidos, el cuero y materiales similares',
                    'measure' => DimensionMeasureEnum::actividades_productivas,
                    'type' => DimensionTypeEnum::ocupaciones_culturales,
                    'classification_id' => 5,
                    'cycle_id' => 2,
                    'domain_id' => 3,
                    'subdomain_id' => null
                ],
                [// 7319
                    'code' => '7319',
                    'note' => null,
                    'label' => 'Artesanos, n.c.p.',
                    'measure' => DimensionMeasureEnum::actividades_productivas,
                    'type' => DimensionTypeEnum::ocupaciones_culturales,
                    'classification_id' => 5,
                    'cycle_id' => 2,
                    'domain_id' => 3,
                    'subdomain_id' => null
                ],
                [// 7522
                    'code' => '7522',
                    'note' => null,
                    'label' => 'Ebanistas y afines',
                    'measure' => DimensionMeasureEnum::actividades_productivas,
                    'type' => DimensionTypeEnum::ocupaciones_culturales,
                    'classification_id' => 5,
                    'cycle_id' => 2,
                    'domain_id' => 3,
                    'subdomain_id' => null
                ],
                [// 7531
                    'code' => '7531',
                    'note' => null,
                    'label' => 'Sastres, modistos, peleteros y sombrereros',
                    'measure' => DimensionMeasureEnum::actividades_productivas,
                    'type' => DimensionTypeEnum::ocupaciones_culturales,
                    'classification_id' => 5,
                    'cycle_id' => 2,
                    'domain_id' => 3,
                    'subdomain_id' => null
                ],
                [// 7532
                    'code' => '7532',
                    'note' => null,
                    'label' => 'Patronistas y cortadores de tela y afines',
                    'measure' => DimensionMeasureEnum::actividades_productivas,
                    'type' => DimensionTypeEnum::ocupaciones_culturales,
                    'classification_id' => 5,
                    'cycle_id' => 2,
                    'domain_id' => 3,
                    'subdomain_id' => null
                ],
                [// 7533
                    'code' => '7533',
                    'note' => null,
                    'label' => 'Costureros, bordadores y afines',
                    'measure' => DimensionMeasureEnum::actividades_productivas,
                    'type' => DimensionTypeEnum::ocupaciones_culturales,
                    'classification_id' => 5,
                    'cycle_id' => 2,
                    'domain_id' => 3,
                    'subdomain_id' => null
                ],
                [// 7534
                    'code' => '7534',
                    'note' => null,
                    'label' => 'Tapiceros, colchoneros y afines',
                    'measure' => DimensionMeasureEnum::actividades_productivas,
                    'type' => DimensionTypeEnum::ocupaciones_culturales,
                    'classification_id' => 5,
                    'cycle_id' => 2,
                    'domain_id' => 3,
                    'subdomain_id' => null
                ],
                [// 7535
                    'code' => '7535',
                    'note' => null,
                    'label' => 'Apelambradores, pellejeros y curtidores',
                    'measure' => DimensionMeasureEnum::actividades_productivas,
                    'type' => DimensionTypeEnum::ocupaciones_culturales,
                    'classification_id' => 5,
                    'cycle_id' => 2,
                    'domain_id' => 3,
                    'subdomain_id' => null
                ],
                [// 7536
                    'code' => '7536',
                    'note' => null,
                    'label' => 'Zapateros y afines',
                    'measure' => DimensionMeasureEnum::actividades_productivas,
                    'type' => DimensionTypeEnum::ocupaciones_culturales,
                    'classification_id' => 5,
                    'cycle_id' => 2,
                    'domain_id' => 3,
                    'subdomain_id' => null
                ],
                [// 7549
                    'code' => '7549',
                    'note' => null,
                    'label' => 'Oficiales, operarios y artesanos de artes mecánicas y de otros oficios, n.c.p.',
                    'measure' => DimensionMeasureEnum::actividades_productivas,
                    'type' => DimensionTypeEnum::ocupaciones_culturales,
                    'classification_id' => 5,
                    'cycle_id' => 2,
                    'domain_id' => 3,
                    'subdomain_id' => null
                ],
              /* Educación/Capacitación */
                [// 2310
                    'code' => '2310',
                    'note' => 'Debiera incluir a profesores de artes visuales de educación formal.',
                    'label' => 'Profesores de universidades y de la enseñanza superior',
                    'measure' => DimensionMeasureEnum::actividades_productivas,
                    'type' => DimensionTypeEnum::ocupaciones_culturales,
                    'classification_id' => 5,
                    'cycle_id' => 7,
                    'domain_id' => 3,
                    'subdomain_id' => null
                ],
                [// 2320
                    'code' => '2320',
                    'note' => 'Debiera incluir a profesores de artes visuales de educación formal.',
                    'label' => 'Profesores de formación profesional',
                    'measure' => DimensionMeasureEnum::actividades_productivas,
                    'type' => DimensionTypeEnum::ocupaciones_culturales,
                    'classification_id' => 5,
                    'cycle_id' => 7,
                    'domain_id' => 3,
                    'subdomain_id' => null
                ],
                [// 2330
                    'code' => '2330',
                    'note' => 'Debiera incluir a profesores de artes visuales de educación formal.',
                    'label' => 'Profesores de enseñanza secundaria',
                    'measure' => DimensionMeasureEnum::actividades_productivas,
                    'type' => DimensionTypeEnum::ocupaciones_culturales,
                    'classification_id' => 5,
                    'cycle_id' => 7,
                    'domain_id' => 3,
                    'subdomain_id' => null
                ],
                [// 2355
                    'code' => '2355',
                    'note' => 'Cuando ello sea factible, los maestros de drama y baile se deben clasificar dentro del Dominio B. Presentaciones artísticas y Celebraciones.',
                    'label' => 'Otros profesores de artes',
                    'measure' => DimensionMeasureEnum::actividades_productivas,
                    'type' => DimensionTypeEnum::ocupaciones_culturales,
                    'classification_id' => 5,
                    'cycle_id' => 7,
                    'domain_id' => 3,
                    'subdomain_id' => null
                ],
            /* Libros y Prensa */
              /* Creación */
                [// 2641
                    'code' => '2641',
                    'note' => null,
                    'label' => 'Autores y otros escritores',
                    'measure' => DimensionMeasureEnum::actividades_productivas,
                    'type' => DimensionTypeEnum::ocupaciones_culturales,
                    'classification_id' => 5,
                    'cycle_id' => 1,
                    'domain_id' => 4,
                    'subdomain_id' => null
                ],
              /* Producción/Difusión*/
                [// 2642
                    'code' => '2642',
                    'note' => null,
                    'label' => 'Periodistas',
                    'measure' => DimensionMeasureEnum::actividades_productivas,
                    'type' => DimensionTypeEnum::ocupaciones_culturales,
                    'classification_id' => 5,
                    'cycle_id' => 8,
                    'domain_id' => 4,
                    'subdomain_id' => null
                ],
                [// 2643
                    'code' => '2643',
                    'note' => null,
                    'label' => 'Traductores, intérpretes y lingüistas',
                    'measure' => DimensionMeasureEnum::actividades_productivas,
                    'type' => DimensionTypeEnum::ocupaciones_culturales,
                    'classification_id' => 5,
                    'cycle_id' => 8,
                    'domain_id' => 4,
                    'subdomain_id' => null
                ],
              /* Archivística/Preservación */
                [// 2622
                    'code' => '2622',
                    'note' => null,
                    'label' => 'Bibliotecarios documentalistas y afines',
                    'measure' => DimensionMeasureEnum::actividades_productivas,
                    'type' => DimensionTypeEnum::ocupaciones_culturales,
                    'classification_id' => 5,
                    'cycle_id' => 6,
                    'domain_id' => 4,
                    'subdomain_id' => null
                ],
                [// 4411
                    'code' => '4411',
                    'note' => null,
                    'label' => 'Empleados de bibliotecas',
                    'measure' => DimensionMeasureEnum::actividades_productivas,
                    'type' => DimensionTypeEnum::ocupaciones_culturales,
                    'classification_id' => 5,
                    'cycle_id' => 6,
                    'domain_id' => 4,
                    'subdomain_id' => null
                ],
            /* Medios Audiovisuales e Interactivos */
              /* Producción */
                [// 2513
                    'code' => '2513',
                    'note' => null,
                    'label' => 'Desarrolladores Web y multimedia',
                    'measure' => DimensionMeasureEnum::actividades_productivas,
                    'type' => DimensionTypeEnum::ocupaciones_culturales,
                    'classification_id' => 5,
                    'cycle_id' => 2,
                    'domain_id' => 5,
                    'subdomain_id' => null
                ],
                [// 2654
                    'code' => '2654',
                    'note' => null,
                    'label' => 'Directores de cine, de teatro y afines',
                    'measure' => DimensionMeasureEnum::actividades_productivas,
                    'type' => DimensionTypeEnum::ocupaciones_culturales,
                    'classification_id' => 5,
                    'cycle_id' => 2,
                    'domain_id' => 5,
                    'subdomain_id' => null
                ],
                [// 2655
                    'code' => '2655',
                    'note' => null,
                    'label' => 'Actores',
                    'measure' => DimensionMeasureEnum::actividades_productivas,
                    'type' => DimensionTypeEnum::ocupaciones_culturales,
                    'classification_id' => 5,
                    'cycle_id' => 2,
                    'domain_id' => 5,
                    'subdomain_id' => null
                ],
                [// 3435
                    'code' => '3435',
                    'note' => 'Incluye ayudantes de guión, apuntadores, directores escénicos, artistas del cuerpo.',
                    'label' => 'Otros profesionales de nivel medio en actividades culturales y artísticas',
                    'measure' => DimensionMeasureEnum::actividades_productivas,
                    'type' => DimensionTypeEnum::ocupaciones_culturales,
                    'classification_id' => 5,
                    'cycle_id' => 2,
                    'domain_id' => 5,
                    'subdomain_id' => null
                ],
              /* Difusión */
                [// 2656
                    'code' => '2656',
                    'note' => null,
                    'label' => 'Locutores de radio, televisión y otros medios de comunicación',
                    'measure' => DimensionMeasureEnum::actividades_productivas,
                    'type' => DimensionTypeEnum::ocupaciones_culturales,
                    'classification_id' => 5,
                    'cycle_id' => 9,
                    'domain_id' => 5,
                    'subdomain_id' => null
                ],
              /* Educación/Capacitación */
                [// 2310
                    'code' => '2310',
                    'note' => 'Debería incluir a profesores de medios audiovisuales e interactivos.',
                    'label' => 'Profesores universitarios y de educación superior',
                    'measure' => DimensionMeasureEnum::actividades_productivas,
                    'type' => DimensionTypeEnum::ocupaciones_culturales,
                    'classification_id' => 5,
                    'cycle_id' => 7,
                    'domain_id' => 5,
                    'subdomain_id' => null
                ],
                [// 2320
                    'code' => '2320',
                    'note' => 'Debería incluir a profesores de medios audiovisuales e interactivos.',
                    'label' => 'Profesores de enseñanza vocacional',
                    'measure' => DimensionMeasureEnum::actividades_productivas,
                    'type' => DimensionTypeEnum::ocupaciones_culturales,
                    'classification_id' => 5,
                    'cycle_id' => 7,
                    'domain_id' => 5,
                    'subdomain_id' => null
                ],
            /* Diseño y Servicios Creativos */
              /* Creación */
                [// 2161
                    'code' => '2161',
                    'note' => null,
                    'label' => 'Arquitectos',
                    'measure' => DimensionMeasureEnum::actividades_productivas,
                    'type' => DimensionTypeEnum::ocupaciones_culturales,
                    'classification_id' => 5,
                    'cycle_id' => 1,
                    'domain_id' => 6,
                    'subdomain_id' => null
                ],
                [// 2162
                    'code' => '2162',
                    'note' => null,
                    'label' => 'Arquitectos paisajistas',
                    'measure' => DimensionMeasureEnum::actividades_productivas,
                    'type' => DimensionTypeEnum::ocupaciones_culturales,
                    'classification_id' => 5,
                    'cycle_id' => 1,
                    'domain_id' => 6,
                    'subdomain_id' => null
                ],
                [// 2163
                    'code' => '2163',
                    'note' => null,
                    'label' => 'Diseñadores de productos y de prendas',
                    'measure' => DimensionMeasureEnum::actividades_productivas,
                    'type' => DimensionTypeEnum::ocupaciones_culturales,
                    'classification_id' => 5,
                    'cycle_id' => 1,
                    'domain_id' => 6,
                    'subdomain_id' => null
                ],
                [// 2164
                    'code' => '2164',
                    'note' => null,
                    'label' => 'Urbanistas e ingenieros de tránsito',
                    'measure' => DimensionMeasureEnum::actividades_productivas,
                    'type' => DimensionTypeEnum::ocupaciones_culturales,
                    'classification_id' => 5,
                    'cycle_id' => 1,
                    'domain_id' => 6,
                    'subdomain_id' => null
                ],
                [// 2165
                    'code' => '2165',
                    'note' => null,
                    'label' => 'Cartógrafos y agrimensores',
                    'measure' => DimensionMeasureEnum::actividades_productivas,
                    'type' => DimensionTypeEnum::ocupaciones_culturales,
                    'classification_id' => 5,
                    'cycle_id' => 1,
                    'domain_id' => 6,
                    'subdomain_id' => null
                ],
                [// 2166
                    'code' => '2166',
                    'note' => null,
                    'label' => 'Diseñadores gráficos y multimedia',
                    'measure' => DimensionMeasureEnum::actividades_productivas,
                    'type' => DimensionTypeEnum::ocupaciones_culturales,
                    'classification_id' => 5,
                    'cycle_id' => 1,
                    'domain_id' => 6,
                    'subdomain_id' => null
                ],
                [// 3432
                    'code' => '3432',
                    'note' => null,
                    'label' => 'Diseñadores y decoradores de interior',
                    'measure' => DimensionMeasureEnum::actividades_productivas,
                    'type' => DimensionTypeEnum::ocupaciones_culturales,
                    'classification_id' => 5,
                    'cycle_id' => 1,
                    'domain_id' => 6,
                    'subdomain_id' => null
                ],
              /* Producción */
                [// 3118
                    'code' => '3118',
                    'note' => null,
                    'label' => 'Delineantes y dibujantes técnicos',
                    'measure' => DimensionMeasureEnum::actividades_productivas,
                    'type' => DimensionTypeEnum::ocupaciones_culturales,
                    'classification_id' => 5,
                    'cycle_id' => 2,
                    'domain_id' => 6,
                    'subdomain_id' => null
                ],
              /* Difusión */
                [// 1222
                    'code' => '1222',
                    'note' => null,
                    'label' => 'Gerentes de publicidad y relaciones públicas',
                    'measure' => DimensionMeasureEnum::actividades_productivas,
                    'type' => DimensionTypeEnum::ocupaciones_culturales,
                    'classification_id' => 5,
                    'cycle_id' => 9,
                    'domain_id' => 6,
                    'subdomain_id' => null
                ],
                [// 2431
                    'code' => '2431',
                    'note' => null,
                    'label' => 'Profesionales de marketing y publicidad',
                    'measure' => DimensionMeasureEnum::actividades_productivas,
                    'type' => DimensionTypeEnum::ocupaciones_culturales,
                    'classification_id' => 5,
                    'cycle_id' => 9,
                    'domain_id' => 6,
                    'subdomain_id' => null
                ],
              /* Educación/Capacitación */
                [// 2310
                    'code' => '2310',
                    'note' => 'Debiera incluir a profesores de diseño y servicios creativos.',
                    'label' => 'Profesores universitarios y de educación superior',
                    'measure' => DimensionMeasureEnum::actividades_productivas,
                    'type' => DimensionTypeEnum::ocupaciones_culturales,
                    'classification_id' => 5,
                    'cycle_id' => 7,
                    'domain_id' => 6,
                    'subdomain_id' => null
                ],
                [// 2320
                    'code' => '2320',
                    'note' => 'Debiera incluir a profesores de diseño y servicios creativos.',
                    'label' => 'Profesores de enseñanza vocacional',
                    'measure' => DimensionMeasureEnum::actividades_productivas,
                    'type' => DimensionTypeEnum::ocupaciones_culturales,
                    'classification_id' => 5,
                    'cycle_id' => 7,
                    'domain_id' => 6,
                    'subdomain_id' => null
                ],
    /** OCUPACIONES DE DOMINIOS RELACIONADOS */
        /** CIUO 08 */
          /* OCUPACIONES DE DOMINIOS RELACIONADOS */
            /* Turismo */
              /* Difusión */
                [// 4221
                    'code' => '4221',
                    'note' => null,
                    'label' => 'Empleados de agencias de viajes',
                    'measure' => DimensionMeasureEnum::actividades_productivas,
                    'type' => DimensionTypeEnum::ocupaciones_de_dominios_relacionados,
                    'classification_id' => 5,
                    'cycle_id' => 9,
                    'domain_id' => 11,
                    'subdomain_id' => null
                ],
                [// 5111
                    'code' => '5111',
                    'note' => null,
                    'label' => 'Auxiliares de servicio de abordo',
                    'measure' => DimensionMeasureEnum::actividades_productivas,
                    'type' => DimensionTypeEnum::ocupaciones_de_dominios_relacionados,
                    'classification_id' => 5,
                    'cycle_id' => 9,
                    'domain_id' => 11,
                    'subdomain_id' => null
                ],
                [// 5113
                    'code' => '5113',
                    'note' => null,
                    'label' => 'Guías de turismo',
                    'measure' => DimensionMeasureEnum::actividades_productivas,
                    'type' => DimensionTypeEnum::ocupaciones_de_dominios_relacionados,
                    'classification_id' => 5,
                    'cycle_id' => 9,
                    'domain_id' => 11,
                    'subdomain_id' => null
                ],
            /* Deportes y Recreación */
              /* Producción */
                [// 3421
                    'code' => '3421',
                    'note' => null,
                    'label' => 'Atletas y deportistas',
                    'measure' => DimensionMeasureEnum::actividades_productivas,
                    'type' => DimensionTypeEnum::ocupaciones_de_dominios_relacionados,
                    'classification_id' => 5,
                    'cycle_id' => 2,
                    'domain_id' => 12,
                    'subdomain_id' => null
                ],
              /* Difusión */
                [// 1431
                    'code' => '1431',
                    'note' => 'Incluye administradores de parques de temáticos y de entretención. Cuando ello sea factible, los administradores de cine se deben incluir en el dominio audiovisual E.',
                    'label' => 'Gerentes de centros deportivos, de esparcimiento y culturales',
                    'measure' => DimensionMeasureEnum::actividades_productivas,
                    'type' => DimensionTypeEnum::ocupaciones_de_dominios_relacionados,
                    'classification_id' => 5,
                    'cycle_id' => 9,
                    'domain_id' => 12,
                    'subdomain_id' => null
                ],
                [// 4212
                    'code' => '4212',
                    'note' => null,
                    'label' => 'Receptores de apuestas y afines',
                    'measure' => DimensionMeasureEnum::actividades_productivas,
                    'type' => DimensionTypeEnum::ocupaciones_de_dominios_relacionados,
                    'classification_id' => 5,
                    'cycle_id' => 9,
                    'domain_id' => 12,
                    'subdomain_id' => null
                ],
                [// 4213
                    'code' => '4213',
                    'note' => null,
                    'label' => 'Prestamistas',
                    'measure' => DimensionMeasureEnum::actividades_productivas,
                    'type' => DimensionTypeEnum::ocupaciones_de_dominios_relacionados,
                    'classification_id' => 5,
                    'cycle_id' => 9,
                    'domain_id' => 12,
                    'subdomain_id' => null
                ],
              /* Educación/Capacitación */
                [// 3422
                    'code' => '3422',
                    'note' => null,
                    'label' => 'Entrenadores, instructores y árbitros de actividades deportivas',
                    'measure' => DimensionMeasureEnum::actividades_productivas,
                    'type' => DimensionTypeEnum::ocupaciones_de_dominios_relacionados,
                    'classification_id' => 5,
                    'cycle_id' => 7,
                    'domain_id' => 12,
                    'subdomain_id' => null
                ],
                [// 3423
                    'code' => '3423',
                    'note' => null,
                    'label' => 'Instructores de educación física y actividades recreativas',
                    'measure' => DimensionMeasureEnum::actividades_productivas,
                    'type' => DimensionTypeEnum::ocupaciones_de_dominios_relacionados,
                    'classification_id' => 5,
                    'cycle_id' => 7,
                    'domain_id' => 12,
                    'subdomain_id' => null
                ],
          /* DOMINIOS TRANSVERSALES */
            /*Patrimonio Inmaterial */
              /* Producción */
                [// 1113
                    'code' => '1113',
                    'note' => null,
                    'label' => 'Jefes de pequeñas poblaciones',
                    'measure' => DimensionMeasureEnum::actividades_productivas,
                    'type' => DimensionTypeEnum::dominios_transversales,
                    'classification_id' => 5,
                    'cycle_id' => 2,
                    'domain_id' => 7,
                    'subdomain_id' => null
                ],
                [// 2636
                    'code' => '2636',
                    'note' => null,
                    'label' => 'Profesionales religiosos',
                    'measure' => DimensionMeasureEnum::actividades_productivas,
                    'type' => DimensionTypeEnum::dominios_transversales,
                    'classification_id' => 5,
                    'cycle_id' => 2,
                    'domain_id' => 7,
                    'subdomain_id' => null
                ],
                [// 3230
                    'code' => '3230',
                    'note' => 'Incluye herbalistas y curanderos.',
                    'label' => 'Profesionales de nivel medio de medicina tradicional y alternativa',
                    'measure' => DimensionMeasureEnum::actividades_productivas,
                    'type' => DimensionTypeEnum::dominios_transversales,
                    'classification_id' => 5,
                    'cycle_id' => 2,
                    'domain_id' => 7,
                    'subdomain_id' => null
                ],
                [// 5169
                    'code' => '5169',
                    'note' => null,
                    'label' => 'Trabajadores de servicios personales, n.c.p.',
                    'measure' => DimensionMeasureEnum::actividades_productivas,
                    'type' => DimensionTypeEnum::dominios_transversales,
                    'classification_id' => 5,
                    'cycle_id' => 2,
                    'domain_id' => 7,
                    'subdomain_id' => null
                ],
              /* Difusión */
                [// 3413
                    'code' => '3413',
                    'note' => 'Incluye curadores por fe.',
                    'label' => 'Auxiliares laicos de las religiones',
                    'measure' => DimensionMeasureEnum::actividades_productivas,
                    'type' => DimensionTypeEnum::dominios_transversales,
                    'classification_id' => 5,
                    'cycle_id' => 9,
                    'domain_id' => 7,
                    'subdomain_id' => null
                ],
              /* Educación/Capacitación */
                [// 2353
                    'code' => '2353',
                    'note' => null,
                    'label' => 'Otros profesores de idiomas',
                    'measure' => DimensionMeasureEnum::actividades_productivas,
                    'type' => DimensionTypeEnum::dominios_transversales,
                    'classification_id' => 5,
                    'cycle_id' => 7,
                    'domain_id' => 7,
                    'subdomain_id' => null
                ],
          /* EQUIPAMIENTO Y MATERIALES DE APOYO (de ocupaciones culturales) */
            /* Artes Visuales y Artesanías */
              /* Producción */
                [// 7322
                    'code' => '7322',
                    'note' => null,
                    'label' => 'Impresores: impresores de serigrafía, y textiles (trabajadores artesanales)',
                    'measure' => DimensionMeasureEnum::actividades_productivas,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_ocupaciones_culturales,
                    'classification_id' => 5,
                    'cycle_id' => 2,
                    'domain_id' => 3,
                    'subdomain_id' => null
                ],
                [// 7521
                    'code' => '7521',
                    'note' => null,
                    'label' => 'Operarios del tratamiento de la madera',
                    'measure' => DimensionMeasureEnum::actividades_productivas,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_ocupaciones_culturales,
                    'classification_id' => 5,
                    'cycle_id' => 2,
                    'domain_id' => 3,
                    'subdomain_id' => null
                ],
                [// 7523
                    'code' => '7523',
                    'note' => null,
                    'label' => 'Reguladores y operadores de máquinas de labrar madera',
                    'measure' => DimensionMeasureEnum::actividades_productivas,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_ocupaciones_culturales,
                    'classification_id' => 5,
                    'cycle_id' => 2,
                    'domain_id' => 3,
                    'subdomain_id' => null
                ],
                [// 8132
                    'code' => '8132',
                    'note' => null,
                    'label' => 'Operadores de máquinas para fabricar productos fotográficos',
                    'measure' => DimensionMeasureEnum::actividades_productivas,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_ocupaciones_culturales,
                    'classification_id' => 5,
                    'cycle_id' => 2,
                    'domain_id' => 3,
                    'subdomain_id' => null
                ],
            /* Libros y Prensa */
              /* Producción */
                [// 7321
                    'code' => '7321',
                    'note' => 'Incluye compositores, cajistas y trabajadores afines.',
                    'label' => 'Cajistas, tipógrafos y afines',
                    'measure' => DimensionMeasureEnum::actividades_productivas,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_ocupaciones_culturales,
                    'classification_id' => 5,
                    'cycle_id' => 2,
                    'domain_id' => 4,
                    'subdomain_id' => null
                ],
                [// 7322
                    'code' => '7322',
                    'note' => null,
                    'label' => 'Impresores',
                    'measure' => DimensionMeasureEnum::actividades_productivas,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_ocupaciones_culturales,
                    'classification_id' => 5,
                    'cycle_id' => 2,
                    'domain_id' => 4,
                    'subdomain_id' => null
                ],
                [// 7323
                    'code' => '7323',
                    'note' => null,
                    'label' => 'Encuadernadores y afines',
                    'measure' => DimensionMeasureEnum::actividades_productivas,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_ocupaciones_culturales,
                    'classification_id' => 5,
                    'cycle_id' => 2,
                    'domain_id' => 4,
                    'subdomain_id' => null
                ],
            /* Medios Audiovisuales e Interactivos */
              /* Producción */
                [// 1330
                    'code' => '1330',
                    'note' => null,
                    'label' => 'Directores de servicios de tecnología de la información y las comunicaciones',
                    'measure' => DimensionMeasureEnum::actividades_productivas,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_ocupaciones_culturales,
                    'classification_id' => 5,
                    'cycle_id' => 2,
                    'domain_id' => 5,
                    'subdomain_id' => null
                ],
                [// 2511
                    'code' => '2511',
                    'note' => null,
                    'label' => 'Analistas de sistemas',
                    'measure' => DimensionMeasureEnum::actividades_productivas,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_ocupaciones_culturales,
                    'classification_id' => 5,
                    'cycle_id' => 2,
                    'domain_id' => 5,
                    'subdomain_id' => null
                ],
                [// 2512
                    'code' => '2512',
                    'note' => null,
                    'label' => 'Desarrolladores de software',
                    'measure' => DimensionMeasureEnum::actividades_productivas,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_ocupaciones_culturales,
                    'classification_id' => 5,
                    'cycle_id' => 2,
                    'domain_id' => 5,
                    'subdomain_id' => null
                ],
                [// 2514
                    'code' => '2514',
                    'note' => null,
                    'label' => 'Programadores de aplicaciones',
                    'measure' => DimensionMeasureEnum::actividades_productivas,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_ocupaciones_culturales,
                    'classification_id' => 5,
                    'cycle_id' => 2,
                    'domain_id' => 5,
                    'subdomain_id' => null
                ],
                [// 2519
                    'code' => '2519',
                    'note' => null,
                    'label' => 'Desarrolladores y analistas de software y multimedia y analistas, n.c.p.',
                    'measure' => DimensionMeasureEnum::actividades_productivas,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_ocupaciones_culturales,
                    'classification_id' => 5,
                    'cycle_id' => 2,
                    'domain_id' => 5,
                    'subdomain_id' => null
                ],
                [// 2523
                    'code' => '2523',
                    'note' => null,
                    'label' => 'Profesionales en redes de computadores',
                    'measure' => DimensionMeasureEnum::actividades_productivas,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_ocupaciones_culturales,
                    'classification_id' => 5,
                    'cycle_id' => 2,
                    'domain_id' => 5,
                    'subdomain_id' => null
                ],
                [// 3511
                    'code' => '3511',
                    'note' => null,
                    'label' => 'Técnicos en operaciones de tecnología de la información y las comunicaciones',
                    'measure' => DimensionMeasureEnum::actividades_productivas,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_ocupaciones_culturales,
                    'classification_id' => 5,
                    'cycle_id' => 2,
                    'domain_id' => 5,
                    'subdomain_id' => null
                ],
                [// 3512
                    'code' => '3512',
                    'note' => null,
                    'label' => 'Técnicos en asistencia al usuario de tecnología de la información y las comunicaciones',
                    'measure' => DimensionMeasureEnum::actividades_productivas,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_ocupaciones_culturales,
                    'classification_id' => 5,
                    'cycle_id' => 2,
                    'domain_id' => 5,
                    'subdomain_id' => null
                ],
                [// 3513
                    'code' => '3513',
                    'note' => null,
                    'label' => 'Técnicos en redes y sistemas de computadores',
                    'measure' => DimensionMeasureEnum::actividades_productivas,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_ocupaciones_culturales,
                    'classification_id' => 5,
                    'cycle_id' => 2,
                    'domain_id' => 5,
                    'subdomain_id' => null
                ],
                [// 3514
                    'code' => '3514',
                    'note' => null,
                    'label' => 'Técnicos de la web',
                    'measure' => DimensionMeasureEnum::actividades_productivas,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_ocupaciones_culturales,
                    'classification_id' => 5,
                    'cycle_id' => 2,
                    'domain_id' => 5,
                    'subdomain_id' => null
                ],
              /* Difusión */
                [// 3521
                    'code' => '3521',
                    'note' => null,
                    'label' => 'Técnicos de radiodifusión y grabación audio visual',
                    'measure' => DimensionMeasureEnum::actividades_productivas,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_ocupaciones_culturales,
                    'classification_id' => 5,
                    'cycle_id' => 9,
                    'domain_id' => 5,
                    'subdomain_id' => null
                ],
              /* Educación/Capacitación */
                [// 2356
                    'code' => '2356',
                    'note' => null,
                    'label' => 'Instructores en tecnología de la información',
                    'measure' => DimensionMeasureEnum::actividades_productivas,
                    'type' => DimensionTypeEnum::equipamiento_y_materiales_de_apoyo_de_ocupaciones_culturales,
                    'classification_id' => 5,
                    'cycle_id' => 7,
                    'domain_id' => 5,
                    'subdomain_id' => null
                ],
    /** ENCUESTAS SOBRE EL USO DEL TIEMPO */
        /** ICATUS */
          /* DOMINIOS CULTURALES */
            /* Patrimonio Cultural y Natural */
              /* Consumo/Participación */
                [// 071135
                    'code' => '071135',
                    'note' => null,
                    'label' => 'Acompañamiento de menores a excursiones, a visita a museos y salidas similares; coordinación o facilitación de actividades sociales o extraescolares de los menores',
                    'measure' => null,
                    'type' => DimensionTypeEnum::dominios_culturales,
                    'classification_id' => 6,
                    'cycle_id' => 5,
                    'domain_id' => 1,
                    'subdomain_id' => null
                ],
                [// 111110
                    'code' => '111110',
                    'note' => null,
                    'label' => 'Visitar museos, galerías de arte, parques históricos/culturales, sitios del patrimonio',
                    'measure' => null,
                    'type' => DimensionTypeEnum::dominios_culturales,
                    'classification_id' => 6,
                    'cycle_id' => 5,
                    'domain_id' => 1,
                    'subdomain_id' => null
                  ],
            /* Presentaciones Artísticas y Celebraciones */
              /* Consumo/Participación */
                [// 101210
                    'code' => '101210',
                    'note' => 'Exclusión: en relación con estos eventos, ciertas actividades no sujetas a pago como cocinar, construcción de escenarios, actividades organizativas, recaudación de aportes, preparación de disfraces, etc., se han clasificado bajo el código 08121.',
                    'label' => 'Participación en celebraciones de eventos culturales e históricos de la comunidad',
                    'measure' => null,
                    'type' => DimensionTypeEnum::dominios_culturales,
                    'classification_id' => 6,
                    'cycle_id' => 5,
                    'domain_id' => 2,
                    'subdomain_id' => null
                ],
                [// 101230
                    'code' => '101230',
                    'note' => null,
                    'label' => 'Participación en funciones sociales (música, bailes, etc.) de la comunidad',
                    'measure' => null,
                    'type' => DimensionTypeEnum::dominios_culturales,
                    'classification_id' => 6,
                    'cycle_id' => 5,
                    'domain_id' => 2,
                    'subdomain_id' => null
                ],
                [// 111130
                    'code' => '111130',
                    'note' => null,
                    'label' => 'Asistencia al teatro, ópera, ballet, conciertos',
                    'measure' => null,
                    'type' => DimensionTypeEnum::dominios_culturales,
                    'classification_id' => 6,
                    'cycle_id' => 5,
                    'domain_id' => 2,
                    'subdomain_id' => null
                ],
                [// 111190
                    'code' => '111190',
                    'note' => null,
                    'label' => 'Asistencia a otros eventos culturales masivos especificados',
                    'measure' => null,
                    'type' => DimensionTypeEnum::dominios_culturales,
                    'classification_id' => 6,
                    'cycle_id' => 5,
                    'domain_id' => 2,
                    'subdomain_id' => null
                ],
                [// 121130
                    'code' => '121130',
                    'note' => null,
                    'label' => 'Artes escénicas (baile, música, teatro)',
                    'measure' => null,
                    'type' => DimensionTypeEnum::dominios_culturales,
                    'classification_id' => 6,
                    'cycle_id' => 5,
                    'domain_id' => 2,
                    'subdomain_id' => null
                ],
                [// 1211x
                    'code' => '1211x',
                    'note' => 'Este código también cubre las artes visuales y literarias.',
                    'label' => 'Artes visuales, literarios y escénicos n.p.d.',
                    'measure' => null,
                    'type' => DimensionTypeEnum::dominios_culturales,
                    'classification_id' => 6,
                    'cycle_id' => 5,
                    'domain_id' => 2,
                    'subdomain_id' => null
                ],
                [// 141320
                    'code' => '141320',
                    'note' => 'Entre los medio de audio se incluyen CD, grabaciones, cintas y reproductores MP3. Escuchar música en una computadora se ha clasificado bajo el código 14142.',
                    'label' => 'Escuchar otros soportes de audio',
                    'measure' => null,
                    'type' => DimensionTypeEnum::dominios_culturales,
                    'classification_id' => 6,
                    'cycle_id' => 5,
                    'domain_id' => 2,
                    'subdomain_id' => null
                ],
                [// 141420
                    'code' => '141420',
                    'note' => null,
                    'label' => 'Utilizar tecnología informática para ver videos o escuchar audio',
                    'measure' => null,
                    'type' => DimensionTypeEnum::dominios_culturales,
                    'classification_id' => 6,
                    'cycle_id' => 5,
                    'domain_id' => 2,
                    'subdomain_id' => null
                ],
            /* Artes Visuales y Artesanías */
              /* Consumo/Participación */
                [// 031141
                    'code' => '031141',
                    'note' => 'Incluye todas las actividades económicas contempladas en las clases 20, 21, 242, 26, 289, 36 de la CIIU, por ejemplo, el tratamiento y tallado de madera, la cestería, la soldadura, la fabricación de ladrillos y la fabricación de herramientas.',
                    'label' => 'Confeccionar productos de madera incluso muebles y similares, estatuillas y otras decoraciones',
                    'measure' => null,
                    'type' => DimensionTypeEnum::dominios_culturales,
                    'classification_id' => 6,
                    'cycle_id' => 5,
                    'domain_id' => 3,
                    'subdomain_id' => null
                ],
                [// 031142
                    'code' => '031142',
                    'note' => 'Incluye todas las actividades económicas contempladas en las clases 20, 21, 242, 26, 289, 36 de la CIIU, por ejemplo, el tratamiento y tallado de madera, la cestería, la soldadura, la fabricación de ladrillos y la fabricación de herramientas.',
                    'label' => 'Confeccionar artículos de mimbre y otros productos similares',
                    'measure' => null,
                    'type' => DimensionTypeEnum::dominios_culturales,
                    'classification_id' => 6,
                    'cycle_id' => 5,
                    'domain_id' => 3,
                    'subdomain_id' => null
                ],
                [// 031143
                    'code' => '031143',
                    'note' => 'Incluye todas las actividades económicas contempladas en las clases 20, 21, 242, 26, 289, 36 de la CIIU, por ejemplo, el tratamiento y tallado de madera, la cestería, la soldadura, la fabricación de ladrillos y la fabricación de herramientas.',
                    'label' => 'Fabricación de cubiertos para la mesa, cuchillos, tijeras, herramientas manuales y otros productos de metal',
                    'measure' => null,
                    'type' => DimensionTypeEnum::dominios_culturales,
                    'classification_id' => 6,
                    'cycle_id' => 5,
                    'domain_id' => 3,
                    'subdomain_id' => null
                ],
                [// 031144
                    'code' => '031144',
                    'note' => 'Incluye todas las actividades económicas contempladas en las clases 20, 21, 242, 26, 289, 36 de la CIIU, por ejemplo, el tratamiento y tallado de madera, la cestería, la soldadura, la fabricación de ladrillos y la fabricación de herramientas.',
                    'label' => 'Trabajo metalúrgico',
                    'measure' => null,
                    'type' => DimensionTypeEnum::dominios_culturales,
                    'classification_id' => 6,
                    'cycle_id' => 5,
                    'domain_id' => 3,
                    'subdomain_id' => null
                ],
                [// 031145
                    'code' => '031145',
                    'note' => 'Incluye todas las actividades económicas contempladas en las clases 20, 21, 242, 26, 289, 36 de la CIIU, por ejemplo, el tratamiento y tallado de madera, la cestería, la soldadura, la fabricación de ladrillos y la fabricación de herramientas.',
                    'label' => 'Fabricación de cacharros, hornos y cocinas, ornamentos, etc., con arcilla, yeso o cemento',
                    'measure' => null,
                    'type' => DimensionTypeEnum::dominios_culturales,
                    'classification_id' => 6,
                    'cycle_id' => 5,
                    'domain_id' => 3,
                    'subdomain_id' => null
                ],
                [// 031146
                    'code' => '031146',
                    'note' => 'Incluye todas las actividades económicas contempladas en las clases 20, 21, 242, 26, 289, 36 de la CIIU, por ejemplo, el tratamiento y tallado de madera, la cestería, la soldadura, la fabricación de ladrillos y la fabricación de herramientas.',
                    'label' => 'Fabricación de papel y productos de papel; artesanías de papel',
                    'measure' => null,
                    'type' => DimensionTypeEnum::dominios_culturales,
                    'classification_id' => 6,
                    'cycle_id' => 5,
                    'domain_id' => 3,
                    'subdomain_id' => null
                ],
                [// 031147
                    'code' => '031147',
                    'note' => 'Incluye todas las actividades económicas contempladas en las clases 20, 21, 242, 26, 289, 36 de la CIIU, por ejemplo, el tratamiento y tallado de madera, la cestería, la soldadura, la fabricación de ladrillos y la fabricación de herramientas.',
                    'label' => 'Fabricación de jabones, perfumes, velas etc.',
                    'measure' => null,
                    'type' => DimensionTypeEnum::dominios_culturales,
                    'classification_id' => 6,
                    'cycle_id' => 5,
                    'domain_id' => 3,
                    'subdomain_id' => null
                ],
                [// 031149
                    'code' => '031149',
                    'note' => 'Incluye todas las actividades económicas contempladas en las clases 20, 21, 242, 26, 289, 36 de la CIIU, por ejemplo, el tratamiento y tallado de madera, la cestería, la soldadura, la fabricación de ladrillos y la fabricación de herramientas.',
                    'label' => 'Otras actividades especificadas relacionadas con artesanías',
                    'measure' => null,
                    'type' => DimensionTypeEnum::dominios_culturales,
                    'classification_id' => 6,
                    'cycle_id' => 5,
                    'domain_id' => 3,
                    'subdomain_id' => null
                ],
                [// 03114x
                    'code' => '03114x',
                    'note' => null,
                    'label' => 'Creación de artesanías usando todo tipo de materiales n.p.d.',
                    'measure' => null,
                    'type' => DimensionTypeEnum::dominios_culturales,
                    'classification_id' => 6,
                    'cycle_id' => 5,
                    'domain_id' => 3,
                    'subdomain_id' => null
                ],
                [// 031210
                    'code' => '031210',
                    'note' => null,
                    'label' => 'Compra de insumos o provisiones utilizados en actividades de producción no primarias en el hogar',
                    'measure' => null,
                    'type' => DimensionTypeEnum::dominios_culturales,
                    'classification_id' => 6,
                    'cycle_id' => 5,
                    'domain_id' => 3,
                    'subdomain_id' => null
                ],
                [// 031220
                    'code' => '031220',
                    'note' => 'Incluye la venta de artesanías, productos alimenticios, etc. producidos como pasatiempo o por entretención o en conexión con un hobby o venta en domicilios privados (ventas de patio o garaje).',
                    'label' => 'Venta de productos resultado de actividades de producción no primarias en el hogar',
                    'measure' => null,
                    'type' => DimensionTypeEnum::dominios_culturales,
                    'classification_id' => 6,
                    'cycle_id' => 5,
                    'domain_id' => 3,
                    'subdomain_id' => null
                ],
                [// 121110
                    'code' => '121110',
                    'note' => null,
                    'label' => 'Artes visuales',
                    'measure' => null,
                    'type' => DimensionTypeEnum::dominios_culturales,
                    'classification_id' => 6,
                    'cycle_id' => 5,
                    'domain_id' => 3,
                    'subdomain_id' => null
                ],
            /* Libros y Prensa */
              /* Consumo/Participación */
                [// 121120
                    'code' => '121120',
                    'note' => null,
                    'label' => 'Artes literarias',
                    'measure' => null,
                    'type' => DimensionTypeEnum::dominios_culturales,
                    'classification_id' => 6,
                    'cycle_id' => 5,
                    'domain_id' => 4,
                    'subdomain_id' => null
                ],
                [// 141110
                    'code' => '141110',
                    'note' => 'Leer por mediante el uso de computadoras y tecnología conexa se ha clasificado bajo el código 14141. Exclusión: leer libros religiosos en conexión a la práctica de una religión se clasifica bajo el código 1515',
                    'label' => 'Lectura de libros',
                    'measure' => null,
                    'type' => DimensionTypeEnum::dominios_culturales,
                    'classification_id' => 6,
                    'cycle_id' => 5,
                    'domain_id' => 4,
                    'subdomain_id' => null
                ],
                [// 141120
                    'code' => '141120',
                    'note' => 'Leer por mediante el uso de computadoras y tecnología conexa se ha clasificado bajo el código 14141. Exclusión: leer libros religiosos en conexión a la práctica de una religión se clasifica bajo el código 1515',
                    'label' => 'Lectura de publicaciones periódicas',
                    'measure' => null,
                    'type' => DimensionTypeEnum::dominios_culturales,
                    'classification_id' => 6,
                    'cycle_id' => 5,
                    'domain_id' => 4,
                    'subdomain_id' => null
                ],
                [// 141190
                    'code' => '141190',
                    'note' => 'Leer por mediante el uso de computadoras y tecnología conexa se ha clasificado bajo el código 14141. Exclusión: leer libros religiosos en conexión a la práctica de una religión se clasifica bajo el código 1515',
                    'label' => 'Lectura de otros materiales especificados',
                    'measure' => null,
                    'type' => DimensionTypeEnum::dominios_culturales,
                    'classification_id' => 6,
                    'cycle_id' => 5,
                    'domain_id' => 4,
                    'subdomain_id' => null
                ],
                [// 1411x
                    'code' => '1411x',
                    'note' => 'Incluye la lectura de revistas, libros y otros materiales similares.',
                    'label' => 'Lectura, n.p.d.',
                    'measure' => null,
                    'type' => DimensionTypeEnum::dominios_culturales,
                    'classification_id' => 6,
                    'cycle_id' => 5,
                    'domain_id' => 4,
                    'subdomain_id' => null
                ],
                [// 141320
                    'code' => '141320',
                    'note' => 'Los medio de audio incluyen CD, cintas, grabaciones y reproductores MP3. Escuchar música en una computadora se ha clasificado bajo el código 14142.',
                    'label' => 'Escuchar otros soportes de audio',
                    'measure' => null,
                    'type' => DimensionTypeEnum::dominios_culturales,
                    'classification_id' => 6,
                    'cycle_id' => 5,
                    'domain_id' => 4,
                    'subdomain_id' => null
                ],
                [// 141410
                    'code' => '141410',
                    'note' => null,
                    'label' => 'Utilizar tecnología informática para leer',
                    'measure' => null,
                    'type' => DimensionTypeEnum::dominios_culturales,
                    'classification_id' => 6,
                    'cycle_id' => 5,
                    'domain_id' => 4,
                    'subdomain_id' => null
                ],
                [// 142000
                    'code' => '142000',
                    'note' => null,
                    'label' => 'visitar bibliotecas',
                    'measure' => null,
                    'type' => DimensionTypeEnum::dominios_culturales,
                    'classification_id' => 6,
                    'cycle_id' => 5,
                    'domain_id' => 4,
                    'subdomain_id' => null
                ],
            /* Medios Audiovisuales e Interactivos */
              /* Consumo/Participación */
                [// 101113
                    'code' => '101113',
                    'note' => null,
                    'label' => 'Chatear en Internet, enviar mensajes y participar en foros cibernéticos, etc',
                    'measure' => null,
                    'type' => DimensionTypeEnum::dominios_culturales,
                    'classification_id' => 6,
                    'cycle_id' => 5,
                    'domain_id' => 5,
                    'subdomain_id' => null
                ],
                [// 101130
                    'code' => '101130',
                    'note' => null,
                    'label' => 'Leer y escribir correos',
                    'measure' => null,
                    'type' => DimensionTypeEnum::dominios_culturales,
                    'classification_id' => 6,
                    'cycle_id' => 5,
                    'domain_id' => 5,
                    'subdomain_id' => null
                ],
                [// 111120
                    'code' => '111120',
                    'note' => null,
                    'label' => 'Asistir al cine/películas',
                    'measure' => null,
                    'type' => DimensionTypeEnum::dominios_culturales,
                    'classification_id' => 6,
                    'cycle_id' => 5,
                    'domain_id' => 5,
                    'subdomain_id' => null
                ],
                [// 121330
                    'code' => '121330',
                    'note' => null,
                    'label' => 'Juegos de computadora (incluyendo juegos de máquinas (arcade) y videojuegos)',
                    'measure' => null,
                    'type' => DimensionTypeEnum::dominios_culturales,
                    'classification_id' => 6,
                    'cycle_id' => 5,
                    'domain_id' => 5,
                    'subdomain_id' => null
                ],
                [// 141211
                    'code' => '141211',
                    'note' => 'Mirar y escuchar televisión y videos estrictamente en relación con actividades laborales y de aprendizaje se ha clasificado bajo las grandes divisiones 01 a 05 o 09.',
                    'label' => 'Mirar/escuchar televisión (programación regular)',
                    'measure' => null,
                    'type' => DimensionTypeEnum::dominios_culturales,
                    'classification_id' => 6,
                    'cycle_id' => 5,
                    'domain_id' => 5,
                    'subdomain_id' => null
                ],
                [// 141212
                    'code' => '141212',
                    'note' => 'Mirar y escuchar televisión y videos estrictamente en relación con actividades laborales y de aprendizaje se ha clasificado bajo las grandes divisiones 01 a 05 o 09.',
                    'label' => 'Mirar/escuchar televisión (programación diferida)',
                    'measure' => null,
                    'type' => DimensionTypeEnum::dominios_culturales,
                    'classification_id' => 6,
                    'cycle_id' => 5,
                    'domain_id' => 5,
                    'subdomain_id' => null
                ],
                [// 141219
                    'code' => '141219',
                    'note' => 'Mirar y escuchar televisión y videos estrictamente en relación con actividades laborales y de aprendizaje se ha clasificado bajo las grandes divisiones 01 a 05 o 09.',
                    'label' => 'Otras actividades especificadas relacionadas con mirar/escuchar televisión',
                    'measure' => null,
                    'type' => DimensionTypeEnum::dominios_culturales,
                    'classification_id' => 6,
                    'cycle_id' => 5,
                    'domain_id' => 5,
                    'subdomain_id' => null
                ],
                [// 14121x
                    'code' => '14121x',
                    'note' => null,
                    'label' => 'Mirar/escuchar televisión, n.p.d.',
                    'measure' => null,
                    'type' => DimensionTypeEnum::dominios_culturales,
                    'classification_id' => 6,
                    'cycle_id' => 5,
                    'domain_id' => 5,
                    'subdomain_id' => null
                ],
                [// 141221
                    'code' => '141221',
                    'note' => 'Los medios de video incluyen los reproductores de cassettes (VCR), los discos compactos de video (VCD), los reproductores de videodiscos digitales (DVD) y dispositivos diferentes a las computadoras. Mirar y escuchar utilizando una computadora se ha clasificado bajo el código 14142.',
                    'label' => 'Mirar/escuchar películas alquiladas o compradas',
                    'measure' => null,
                    'type' => DimensionTypeEnum::dominios_culturales,
                    'classification_id' => 6,
                    'cycle_id' => 5,
                    'domain_id' => 5,
                    'subdomain_id' => null
                ],
                [// 141222
                    'code' => '141222',
                    'note' => 'Los medios de video incluyen los reproductores de cassettes (VCR), los discos compactos de video (VCD), los reproductores de videodiscos digitales (DVD) y dispositivos diferentes a las computadoras. Mirar y escuchar utilizando una computadora se ha clasificado bajo el código 14142.',
                    'label' => 'Mirar/escuchar programas de video alquilados o comprados, distintos a películas',
                    'measure' => null,
                    'type' => DimensionTypeEnum::dominios_culturales,
                    'classification_id' => 6,
                    'cycle_id' => 5,
                    'domain_id' => 5,
                    'subdomain_id' => null
                ],
                [// 141229
                    'code' => '141229',
                    'note' => 'Los medios de video incluyen los reproductores de cassettes (VCR), los discos compactos de video (VCD), los reproductores de videodiscos digitales (DVD) y dispositivos diferentes a las computadoras. Mirar y escuchar utilizando una computadora se ha clasificado bajo el código 14142.',
                    'label' => 'Otras actividades especificadas relacionadas con mirar/escuchar videos',
                    'measure' => null,
                    'type' => DimensionTypeEnum::dominios_culturales,
                    'classification_id' => 6,
                    'cycle_id' => 5,
                    'domain_id' => 5,
                    'subdomain_id' => null
                ],
                [// 14122x
                    'code' => '14122x',
                    'note' => 'Los medios de video incluyen los reproductores de cassettes (VCR), los discos compactos de video (VCD), los reproductores de videodiscos digitales (DVD) y dispositivos diferentes a las computadoras. Mirar y escuchar utilizando una computadora se ha clasificado bajo el código 14142.',
                    'label' => 'Mirar/escuchar programas de video, n.c.p.',
                    'measure' => null,
                    'type' => DimensionTypeEnum::dominios_culturales,
                    'classification_id' => 6,
                    'cycle_id' => 5,
                    'domain_id' => 5,
                    'subdomain_id' => null
                ],
                [// 141310
                    'code' => '141310',
                    'note' => null,
                    'label' => 'Escuchar programas de radio',
                    'measure' => null,
                    'type' => DimensionTypeEnum::dominios_culturales,
                    'classification_id' => 6,
                    'cycle_id' => 5,
                    'domain_id' => 5,
                    'subdomain_id' => null
                ],
                [// 1413x
                    'code' => '1413x',
                    'note' => null,
                    'label' => 'Escuchar la radio y aparatos de audio, n.p.d.',
                    'measure' => null,
                    'type' => DimensionTypeEnum::dominios_culturales,
                    'classification_id' => 6,
                    'cycle_id' => 5,
                    'domain_id' => 5,
                    'subdomain_id' => null
                ],
                [// 141420
                    'code' => '141420',
                    'note' => null,
                    'label' => 'Usar tecnología computacional para ver videos o escuchar grabaciones de audio',
                    'measure' => null,
                    'type' => DimensionTypeEnum::dominios_culturales,
                    'classification_id' => 6,
                    'cycle_id' => 5,
                    'domain_id' => 5,
                    'subdomain_id' => null
                ],
                [// 141430
                    'code' => '141430',
                    'note' => 'Si se ha especificado el objetivo de ‘navegar’ se debe codificar de acuerdo a los siguientes códigos: por ejemplo, para comprar se utiliza el código 06121 o 06122; para el pago de cuentas el 06115; para cursos en línea los códigos 09111 o 09113 son apropiados.',
                    'label' => 'Navegar por Internet, cargar y descargar',
                    'measure' => null,
                    'type' => DimensionTypeEnum::dominios_culturales,
                    'classification_id' => 6,
                    'cycle_id' => 5,
                    'domain_id' => 5,
                    'subdomain_id' => null
                ],
                [// 1414x
                    'code' => '1414x',
                    'note' => null,
                    'label' => 'Utilizar tecnología informática, n.p.d.',
                    'measure' => null,
                    'type' => DimensionTypeEnum::dominios_culturales,
                    'classification_id' => 6,
                    'cycle_id' => 5,
                    'domain_id' => 5,
                    'subdomain_id' => null
                ],
                [// 149000
                    'code' => '149000',
                    'note' => null,
                    'label' => 'Medios masivos de comunicación n.c.p.',
                    'measure' => null,
                    'type' => DimensionTypeEnum::dominios_culturales,
                    'classification_id' => 6,
                    'cycle_id' => 5,
                    'domain_id' => 5,
                    'subdomain_id' => null
                ],
          /* DOMINIOS RELACIONADOS */
            /* Turismo */
              /* Consumo/Participación */
                [// 102000
                  'code' => '102000',
                  'note' => null,
                  'label' => 'Desplazamientos relacionados con actividades de socialización y participación comunitaria',
                  'measure' => null,
                  'type' => DimensionTypeEnum::dominios_relacionados,
                  'classification_id' => 6,
                  'cycle_id' => 5,
                  'domain_id' => 11,
                  'subdomain_id' => null
                ],
                [// 112000
                  'code' => '112000',
                  'note' => null,
                  'label' => 'Desplazamientos relacionados con la asistencia a sitios culturales y eventos deportivos y de esparcimiento',
                  'measure' => null,
                  'type' => DimensionTypeEnum::dominios_relacionados,
                  'classification_id' => 6,
                  'cycle_id' => 5,
                  'domain_id' => 11,
                  'subdomain_id' => null
                ],
                [// 122000
                  'code' => '122000',
                  'note' => null,
                  'label' => 'Desplazamientos relacionados con hobbies, juegos y otros pasatiempos',
                  'measure' => null,
                  'type' => DimensionTypeEnum::dominios_relacionados,
                  'classification_id' => 6,
                  'cycle_id' => 5,
                  'domain_id' => 11,
                  'subdomain_id' => null
                ],
                [// 131230
                    'code' => '131230',
                    'note' => null,
                    'label' => 'Desplazamientos en automóvil por placer; hacer turismo',
                    'measure' => null,
                    'type' => DimensionTypeEnum::dominios_relacionados,
                    'classification_id' => 6,
                    'cycle_id' => 5,
                    'domain_id' => 11,
                    'subdomain_id' => null
                ],
                [// 132000
                    'code' => '132000',
                    'note' => null,
                    'label' => 'Desplazamientos relacionados con participación en deportes en recintos cerrados o al aire libre y cursos conexos',
                    'measure' => null,
                    'type' => DimensionTypeEnum::dominios_relacionados,
                    'classification_id' => 6,
                    'cycle_id' => 5,
                    'domain_id' => 11,
                    'subdomain_id' => null
                ],
                [// 143000
                    'code' => '143000',
                    'note' => null,
                    'label' => 'Desplazamientos relacionados con los medios de comunicación',
                    'measure' => null,
                    'type' => DimensionTypeEnum::dominios_relacionados,
                    'classification_id' => 6,
                    'cycle_id' => 5,
                    'domain_id' => 11,
                    'subdomain_id' => null
                ],
            /* Deportes y Recreación */
              /* Consumo/Participación */
                [// 071234
                    'code' => '071234',
                    'note' => null,
                    'label' => 'Acompañamiento de adultos a actividades sociales',
                    'measure' => null,
                    'type' => DimensionTypeEnum::dominios_relacionados,
                    'classification_id' => 6,
                    'cycle_id' => 5,
                    'domain_id' => 12,
                    'subdomain_id' => null
                ],
                [// 071235
                    'code' => '071235',
                    'note' => 'Este código también cubre a los adultos acompañantes a eventos culturales.',
                    'label' => 'Acompañamiento de adultos a eventos culturales, deportivos o de esparcimiento',
                    'measure' => null,
                    'type' => DimensionTypeEnum::dominios_relacionados,
                    'classification_id' => 6,
                    'cycle_id' => 5,
                    'domain_id' => 12,
                    'subdomain_id' => null
                ],
                [// 111200
                    'code' => '111200',
                    'note' => null,
                    'label' => 'Visitar zoológicos, parques zoológicos, jardines botánicos, centros de esparcimiento y asistir a ferias, festivales, circos, y exhibiciones de plantas y animales.',
                    'measure' => null,
                    'type' => DimensionTypeEnum::dominios_relacionados,
                    'classification_id' => 6,
                    'cycle_id' => 5,
                    'domain_id' => 12,
                    'subdomain_id' => null
                ],
                [// 111310
                    'code' => '111310',
                    'note' => null,
                    'label' => 'Asistir a eventos deportistas profesionales',
                    'measure' => null,
                    'type' => DimensionTypeEnum::dominios_relacionados,
                    'classification_id' => 6,
                    'cycle_id' => 5,
                    'domain_id' => 12,
                    'subdomain_id' => null
                ],
                [// 111320
                    'code' => '111320',
                    'note' => null,
                    'label' => 'Asistir a eventos deportistas de aficionados',
                    'measure' => null,
                    'type' => DimensionTypeEnum::dominios_relacionados,
                    'classification_id' => 6,
                    'cycle_id' => 5,
                    'domain_id' => 12,
                    'subdomain_id' => null
                ],
                [// 111x
                    'code' => '111x',
                    'note' => 'Este código también cubre eventos culturales.',
                    'label' => 'Asistir a eventos culturales, deportivos o de esparcimiento, n.p.d.',
                    'measure' => null,
                    'type' => DimensionTypeEnum::dominios_relacionados,
                    'classification_id' => 6,
                    'cycle_id' => 5,
                    'domain_id' => 12,
                    'subdomain_id' => null
                ],
                [// 119000
                    'code' => '119000',
                    'note' => null,
                    'label' => 'Asistir a eventos culturales, deportivos o de esparcimiento',
                    'measure' => null,
                    'type' => DimensionTypeEnum::dominios_relacionados,
                    'classification_id' => 6,
                    'cycle_id' => 5,
                    'domain_id' => 12,
                    'subdomain_id' => null
                ],
                [// 129000
                    'code' => '129000',
                    'note' => null,
                    'label' => 'Hobbies, juegos y otros pasatiempos n.c.p.',
                    'measure' => null,
                    'type' => DimensionTypeEnum::dominios_relacionados,
                    'classification_id' => 6,
                    'cycle_id' => 5,
                    'domain_id' => 12,
                    'subdomain_id' => null
                ],
                [// 121200
                    'code' => '121200',
                    'note' => 'Exclusión: los hobbies generadores de ingreso en términos de servicios prestados o productos vendidos se han clasificado bajo las grandes divisiones correspondientes (de 02 a 05).',
                    'label' => 'Hobbies técnicos y cursos conexos',
                    'measure' => null,
                    'type' => DimensionTypeEnum::dominios_relacionados,
                    'classification_id' => 6,
                    'cycle_id' => 5,
                    'domain_id' => 12,
                    'subdomain_id' => null
                ],
                [// 121310
                    'code' => '121310',
                    'note' => null,
                    'label' => 'Jugar solitarios',
                    'measure' => null,
                    'type' => DimensionTypeEnum::dominios_relacionados,
                    'classification_id' => 6,
                    'cycle_id' => 5,
                    'domain_id' => 12,
                    'subdomain_id' => null
                ],
                [// 121320
                    'code' => '121320',
                    'note' => 'Exclusión: las apuestas en juegos se han clasificado bajo el código 12135.',
                    'label' => 'Juegos de naipe y tablero',
                    'measure' => null,
                    'type' => DimensionTypeEnum::dominios_relacionados,
                    'classification_id' => 6,
                    'cycle_id' => 5,
                    'domain_id' => 12,
                    'subdomain_id' => null
                ],
                [// 121340
                    'code' => '121340',
                    'note' => null,
                    'label' => 'Juegos sociales/grupales',
                    'measure' => null,
                    'type' => DimensionTypeEnum::dominios_relacionados,
                    'classification_id' => 6,
                    'cycle_id' => 5,
                    'domain_id' => 12,
                    'subdomain_id' => null
                ],
                [// 121350
                    'code' => '121350',
                    'note' => null,
                    'label' => 'Juegos de azar',
                    'measure' => null,
                    'type' => DimensionTypeEnum::dominios_relacionados,
                    'classification_id' => 6,
                    'cycle_id' => 5,
                    'domain_id' => 12,
                    'subdomain_id' => null
                ],
                [// 1213x
                    'code' => '1213x',
                    'note' => null,
                    'label' => 'Juegos y otros pasatiempos y cursos conexos, n.p.d.',
                    'measure' => null,
                    'type' => DimensionTypeEnum::dominios_relacionados,
                    'classification_id' => 6,
                    'cycle_id' => 5,
                    'domain_id' => 12,
                    'subdomain_id' => null
                ],
                [// 131110
                    'code' => '131110',
                    'note' => null,
                    'label' => 'Caminatas, senderismo; trotar y correr',
                    'measure' => null,
                    'type' => DimensionTypeEnum::dominios_relacionados,
                    'classification_id' => 6,
                    'cycle_id' => 5,
                    'domain_id' => 12,
                    'subdomain_id' => null
                ],
                [// 131120
                    'code' => '131120',
                    'note' => null,
                    'label' => 'Ciclismo, patinaje, monopatín (skateboarding)',
                    'measure' => null,
                    'type' => DimensionTypeEnum::dominios_relacionados,
                    'classification_id' => 6,
                    'cycle_id' => 5,
                    'domain_id' => 12,
                    'subdomain_id' => null
                ],
                [// 131130
                    'code' => '131130',
                    'note' => null,
                    'label' => 'Aeróbica, yoga, levantamiento de pesas y otros programas de acondicionamiento físico',
                    'measure' => null,
                    'type' => DimensionTypeEnum::dominios_relacionados,
                    'classification_id' => 6,
                    'cycle_id' => 5,
                    'domain_id' => 12,
                    'subdomain_id' => null
                ],
                [// 131140
                    'code' => '131140',
                    'note' => null,
                    'label' => 'Juegos de balón, deportes individuales',
                    'measure' => null,
                    'type' => DimensionTypeEnum::dominios_relacionados,
                    'classification_id' => 6,
                    'cycle_id' => 5,
                    'domain_id' => 12,
                    'subdomain_id' => null
                ],
                [// 131150
                    'code' => '131150',
                    'note' => null,
                    'label' => 'Juegos de balón, deportes en equipo',
                    'measure' => null,
                    'type' => DimensionTypeEnum::dominios_relacionados,
                    'classification_id' => 6,
                    'cycle_id' => 5,
                    'domain_id' => 12,
                    'subdomain_id' => null
                ],
                [// 131160
                    'code' => '131160',
                    'note' => null,
                    'label' => 'Deportes acuáticos',
                    'measure' => null,
                    'type' => DimensionTypeEnum::dominios_relacionados,
                    'classification_id' => 6,
                    'cycle_id' => 5,
                    'domain_id' => 12,
                    'subdomain_id' => null
                ],
                [// 131170
                    'code' => '131170',
                    'note' => null,
                    'label' => 'Deportes de invierno, hielo, nieve',
                    'measure' => null,
                    'type' => DimensionTypeEnum::dominios_relacionados,
                    'classification_id' => 6,
                    'cycle_id' => 5,
                    'domain_id' => 12,
                    'subdomain_id' => null
                ],
                [// 131180
                    'code' => '131180',
                    'note' => null,
                    'label' => 'Deportes de contacto',
                    'measure' => null,
                    'type' => DimensionTypeEnum::dominios_relacionados,
                    'classification_id' => 6,
                    'cycle_id' => 5,
                    'domain_id' => 12,
                    'subdomain_id' => null
                ],
                [// 131220
                    'code' => '131220',
                    'note' => null,
                    'label' => 'Equitación',
                    'measure' => null,
                    'type' => DimensionTypeEnum::dominios_relacionados,
                    'classification_id' => 6,
                    'cycle_id' => 5,
                    'domain_id' => 12,
                    'subdomain_id' => null
                ],
                [// 131x
                    'code' => '131x',
                    'note' => null,
                    'label' => 'Participación en deportes en recintos cerrados o al aire libre n.p.d.',
                    'measure' => null,
                    'type' => DimensionTypeEnum::dominios_relacionados,
                    'classification_id' => 6,
                    'cycle_id' => 5,
                    'domain_id' => 12,
                    'subdomain_id' => null
                ],
                [// 139000
                    'code' => '139000',
                    'note' => null,
                    'label' => 'Participación en deportes en recintos cerrados o al aire libre y cursos conexos n.c.p.',
                    'measure' => null,
                    'type' => DimensionTypeEnum::dominios_relacionados,
                    'classification_id' => 6,
                    'cycle_id' => 5,
                    'domain_id' => 12,
                    'subdomain_id' => null
                ],
          /* DOMINIOS TRANSVERSALES */
            /* Patrimonio Cultural Inmaterial */
              /* Consumo/Participación */
                [// 031170
                  'code' => '031170',
                  'note' => null,
                  'label' => 'Elaboración de preparaciones herbales y medicinales',
                  'measure' => null,
                  'type' => DimensionTypeEnum::dominios_transversales,
                  'classification_id' => 6,
                  'cycle_id' => 5,
                  'domain_id' => 7,
                  'subdomain_id' => null
                ],
                [// 071234
                    'code' => '071234',
                    'note' => null,
                    'label' => 'Acompañamiento de adultos a actividades sociales',
                    'measure' => null,
                    'type' => DimensionTypeEnum::dominios_transversales,
                    'classification_id' => 6,
                    'cycle_id' => 5,
                    'domain_id' => 7,
                    'subdomain_id' => null
                ],
                [// 07123x
                    'code' => '07123x',
                    'note' => null,
                    'label' => 'Acompañamiento de adultos a lugares n.p.d.',
                    'measure' => null,
                    'type' => DimensionTypeEnum::dominios_transversales,
                    'classification_id' => 6,
                    'cycle_id' => 5,
                    'domain_id' => 7,
                    'subdomain_id' => null
                ],
                [// 081210
                    'code' => '081210',
                    'note' => null,
                    'label' => 'Trabajo organizado por la comunidad: cocinar para celebraciones etc.',
                    'measure' => null,
                    'type' => DimensionTypeEnum::dominios_transversales,
                    'classification_id' => 6,
                    'cycle_id' => 5,
                    'domain_id' => 7,
                    'subdomain_id' => null
                ],
                [// 081230
                    'code' => '081230',
                    'note' => null,
                    'label' => 'Organizar y trabajar en iniciativas comunitarias de asistencia a aldeas, otros subsectores',
                    'measure' => null,
                    'type' => DimensionTypeEnum::dominios_transversales,
                    'classification_id' => 6,
                    'cycle_id' => 5,
                    'domain_id' => 7,
                    'subdomain_id' => null
                ],
                [// 081240
                    'code' => '081240',
                    'note' => null,
                    'label' => 'Organizar y trabajar en iniciativas comunitarias de asistencia a personas y familias',
                    'measure' => null,
                    'type' => DimensionTypeEnum::dominios_transversales,
                    'classification_id' => 6,
                    'cycle_id' => 5,
                    'domain_id' => 7,
                    'subdomain_id' => null
                ],
                [// 082000
                    'code' => '082000',
                    'note' => 'Incluye: todo tipo de reuniones auspiciadas por organizaciones sociales, políticas, religiosas, fraternidades, clubes y grupos scout.',
                    'label' => 'Asistencia a reuniones',
                    'measure' => null,
                    'type' => DimensionTypeEnum::dominios_transversales,
                    'classification_id' => 6,
                    'cycle_id' => 5,
                    'domain_id' => 7,
                    'subdomain_id' => null
                ],
                [// 101124
                    'code' => '101124',
                    'note' => null,
                    'label' => 'Servir de anfitrión en fiestas, recepciones y tertulias',
                    'measure' => null,
                    'type' => DimensionTypeEnum::dominios_transversales,
                    'classification_id' => 6,
                    'cycle_id' => 5,
                    'domain_id' => 7,
                    'subdomain_id' => null
                ],
                [// 101125
                    'code' => '101125',
                    'note' => null,
                    'label' => 'Asistir a fiestas, recepciones y tertulias',
                    'measure' => null,
                    'type' => DimensionTypeEnum::dominios_transversales,
                    'classification_id' => 6,
                    'cycle_id' => 5,
                    'domain_id' => 7,
                    'subdomain_id' => null
                ],
                [// 101126
                    'code' => '101126',
                    'note' => null,
                    'label' => 'Socializar en bares, clubes',
                    'measure' => null,
                    'type' => DimensionTypeEnum::dominios_transversales,
                    'classification_id' => 6,
                    'cycle_id' => 5,
                    'domain_id' => 7,
                    'subdomain_id' => null
                ],
                [// 101129
                    'code' => '101129',
                    'note' => null,
                    'label' => 'Otras actividades de socialización especificadas',
                    'measure' => null,
                    'type' => DimensionTypeEnum::dominios_transversales,
                    'classification_id' => 6,
                    'cycle_id' => 5,
                    'domain_id' => 7,
                    'subdomain_id' => null
                ],
                [// 101210
                    'code' => '101210',
                    'note' => 'Exclusión: en relación con estos eventos, ciertas actividades no sujetas a pago como cocinar, construcción de escenarios, actividades organizativas, recaudación de aportes, preparación de disfraces, etc., se han clasificado bajo el código 08121.',
                    'label' => 'Participación en celebraciones de eventos culturales/históricos en la comunidad',
                    'measure' => null,
                    'type' => DimensionTypeEnum::dominios_transversales,
                    'classification_id' => 6,
                    'cycle_id' => 5,
                    'domain_id' => 7,
                    'subdomain_id' => null
                ],
                [// 101220
                    'code' => '101220',
                    'note' => null,
                    'label' => 'Participación en ritos/eventos (no religiosos), matrimonios, funerales, nacimientos y ritos de pasaje, en la comunidad',
                    'measure' => null,
                    'type' => DimensionTypeEnum::dominios_transversales,
                    'classification_id' => 6,
                    'cycle_id' => 5,
                    'domain_id' => 7,
                    'subdomain_id' => null
                ],
                [// 101230
                    'code' => '101230',
                    'note' => null,
                    'label' => 'Participación en funciones sociales (música, bailes, etc.) en la comunidad',
                    'measure' => null,
                    'type' => DimensionTypeEnum::dominios_transversales,
                    'classification_id' => 6,
                    'cycle_id' => 5,
                    'domain_id' => 7,
                    'subdomain_id' => null
                ],
                [// 1012x
                    'code' => '1012x',
                    'note' => null,
                    'label' => 'Participación comunitaria',
                    'measure' => null,
                    'type' => DimensionTypeEnum::dominios_transversales,
                    'classification_id' => 6,
                    'cycle_id' => 5,
                    'domain_id' => 7,
                    'subdomain_id' => null
                ],
                [// 151510
                    'code' => '151510',
                    'note' => null,
                    'label' => 'Rezar, meditar, en privado, y otras actividades espirituales informales',
                    'measure' => null,
                    'type' => DimensionTypeEnum::dominios_transversales,
                    'classification_id' => 6,
                    'cycle_id' => 5,
                    'domain_id' => 7,
                    'subdomain_id' => null
                ],
                [// 151520
                    'code' => '151520',
                    'note' => null,
                    'label' => 'Participación en actividades religiosas (practicar alguna forma de la religión)',
                    'measure' => null,
                    'type' => DimensionTypeEnum::dominios_transversales,
                    'classification_id' => 6,
                    'cycle_id' => 5,
                    'domain_id' => 7,
                    'subdomain_id' => null
                ],
                [// 151630
                    'code' => '151630',
                    'note' => null,
                    'label' => 'Reflexionar, meditar, pensar, planificar',
                    'measure' => null,
                    'type' => DimensionTypeEnum::dominios_transversales,
                    'classification_id' => 6,
                    'cycle_id' => 5,
                    'domain_id' => 7,
                    'subdomain_id' => null
                ],
            /* Educación */
              /* Consumo/Participación */
                [// 091300
                    'code' => '091300',
                    'note' => 'Exclusión: la asistencia a cursos sobre pasatiempos y juegos y deportes recreacionales, se ha clasificado bajo las grandes divisiones 12 y 13. La asistencia a cursos relacionados con una carrera o desarrollo profesional se ha clasificado bajo el código 0914.',
                    'label' => 'Estudios adicionales, cursos de educación no formal durante el tiempo libre',
                    'measure' => null,
                    'type' => DimensionTypeEnum::dominios_transversales,
                    'classification_id' => 6,
                    'cycle_id' => 5,
                    'domain_id' => 9,
                    'subdomain_id' => null
                ],
            ];
    
            DB::table('dimensions')->insert($collection);
        }
    }
}
