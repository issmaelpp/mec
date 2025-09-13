<?php

namespace App\Enums;

enum DimensionMeasureEnum: string
{
    case servicios_culturales = 'Servicios culturales';
    case actividades_productivas = 'Actividades productivas';
    case bienes_y_servicios = 'Bienes y servicios';

    public static function getValues(): array
    {
        return array_column(self::cases(), 'value');
    }

    public function getLabel(): ?string
    {
        return $this->value;
    }
}
