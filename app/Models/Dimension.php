<?php

namespace App\Models;

use App\Enums\DimensionMeasureEnum;
use App\Enums\DimensionTypeEnum;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Dimension extends Model
{
    protected $fillable = [
        'classification_id',
        'cycle_id',
        'domain_id',
        'subdomain_id',
        'code',
        'note',
        'label',
        'measure',
        'type',
    ];

    protected function casts(): array
    {
        return [
            'measure' => DimensionMeasureEnum::class,
            'type' => DimensionTypeEnum::class,
        ];
    }

    public function classification(): BelongsTo
    {
        return $this->belongsTo(Classification::class);
    }

    public function cycle(): BelongsTo
    {
        return $this->belongsTo(Cycle::class);
    }

    public function domain(): BelongsTo
    {
        return $this->belongsTo(Domain::class);
    }

    public function subdomain(): BelongsTo
    {
        return $this->belongsTo(Subdomain::class);
    }

    public function statisticalFrameworks(): HasMany
    {
        return $this->hasMany(StatisticalFramework::class);
    }
}
