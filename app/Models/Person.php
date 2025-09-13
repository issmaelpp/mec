<?php

namespace App\Models;

use App\Enums\GenderEnum;
use App\Enums\StatusEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Person extends Model
{
    /** @use HasFactory<\Database\Factories\PersonFactory> */
    use HasFactory, SoftDeletes;

    protected $dateFormat = 'Y-m-d H:i:s.u';
    protected $fillable = [
        'user_id',
        'family_name',
        'given_name',
        'additional_name',
        'other_name',
        'honorific_suffix',
        'gender',
        'birth_date',
        'death_date',
        'summary',
        'biography',
        'status',
    ];

    protected function casts(): array
    {
        return [
            'gender' => GenderEnum::class,
            'birth_date' => 'date',
            'death_date' => 'date',
            'status' => StatusEnum::class
        ];
    }

    /* protected $appends = ['full_name'];
    protected function fullName(): Attribute
    {
        return Attribute::make(
            get: fn () => implode(' ', array_filter([$this->family_name, $this->given_name, $this->additional_name])),
        )->shouldCache();
    } */

    /* protected function dni(): Attribute
    {
        return Attribute::make(
            get: fn () => $this->identifications()->where('type', 'D.N.I.')->value('value'),
        )->shouldCache();
    } */

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /* public function contacts(): HasMany
    {
        return $this->hasMany(Contact::class);
    } */

    /* public function addresses(): HasMany
    {
        return $this->hasMany(Address::class);
    } */

    /* public function foreignOrganizations(): BelongsToMany
    {
        return $this->belongsToMany(ForeignOrganization::class)->using(ForeignOrganizationPerson::class)->withTimestamps()->withPivot('foreign_organization_id','person_id','type');
    } */

    /* public function identifications(): HasMany
    {
        return $this->hasMany(Identification::class);
    } */

    /* public function articles(): HasMany
    {
        return $this->hasMany(Article::class);
    } */

    public function statististicalFrameworks(): HasMany
    {
        return $this->hasMany(StatisticalFramework::class);
    }
}
