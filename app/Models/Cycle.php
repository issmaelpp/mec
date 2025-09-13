<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Cycle extends Model
{
    protected $fillable = [
        'title',
        'description',
    ];

    public function dimensions(): HasMany
    {
        return $this->hasMany(Dimension::class);
    }
}
