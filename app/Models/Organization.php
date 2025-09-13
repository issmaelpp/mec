<?php

namespace App\Models;

use App\Enums\OrganizationTypeEnum;
use App\Enums\StatusEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Organization extends Model
{
    /** @use HasFactory<\Database\Factories\OrganizationFactory> */
    use HasFactory, SoftDeletes;

    protected $dateFormat = 'Y-m-d H:i:s.u';
    protected $fillable = [
        'company_name',
        'fantasy_name',
        'slug',
        'other_name',
        'type', //public or private
        'abstract',
        'description',
        'founding_date',
        'dissolution_date',
        'image_path',
        'status',
    ];

    protected function casts(): array
    {
        return [
            'type' => OrganizationTypeEnum::class,
            'status' => StatusEnum::class,
        ];
    }

    /* public function contacts(): HasMany
    {
        return $this->hasMany(Contact::class);
    } */

    /* public function addresses(): HasMany
    {
        return $this->hasMany(Address::class);
    } */
    
    /* public function people(): BelongsToMany
    {
        return $this->belongsToMany(Person::class)->using(ForeignOrganizationPerson::class)->withTimestamps()->withPivot('foreign_organization_id','person_id','type');
    } */

    /* public function identifications(): HasMany
    {
        return $this->hasMany(Identification::class);
    } */

    public function statisticalFrameworks(): HasMany
    {
        return $this->hasMany(StatisticalFramework::class);
    }
}
