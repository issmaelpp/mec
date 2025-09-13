<?php

namespace App\Enums;

enum GenderEnum: string
{
    case masculino = 'Masculino';
    case femenino = 'Femenino';
    case no_binario = 'No binario';

    public static function getValues(): array
    {
        return array_column(self::cases(), 'value');
    }

    public function getLabel(): ?string
    {
        return $this->value;
    }
}
