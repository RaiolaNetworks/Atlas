<?php

declare(strict_types=1);

namespace Raiolanetworks\Atlas\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Country extends Model
{
    protected $guarded = [];

    public $timestamps = false;

    /**
     * Get the table associated with the model.
     */
    public function getTable(): string
    {
        return config('atlas.countries_tablename', parent::getTable());
    }

    /**
     * @return HasMany<State>
     */
    public function states(): HasMany
    {
        return $this->hasMany(State::class, 'country_id', 'id');
    }

    /**
     * @return HasMany<City>
     */
    public function cities(): HasMany
    {
        return $this->hasMany(City::class, 'country_id', 'id');
    }

    /**
     * @return HasMany<Timezone>
     */
    public function timezones(): HasMany
    {
        return $this->hasMany(Timezone::class, 'country_id', 'id');
    }

    /**
     * @return HasOne<Currency>
     */
    public function currency(): HasOne
    {
        return $this->hasOne(Currency::class, 'country_id', 'id');
    }
}
