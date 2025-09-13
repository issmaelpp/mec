<?php

namespace App\Enums;

enum OrganizationTypeEnum: string
{
    case persona_jurídica = 'Persona Jurídica';
    case privado = 'Privado'; // Se usa en comercio
    case publico = 'Público'; // Pensado para Salud, Educacion, Cultura

    public static function getValues(): array
    {
        return array_column(self::cases(), 'value');
    }

    public function getLabel(): ?string
    {
        return $this->value;
    }
}
