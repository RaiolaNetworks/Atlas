<?php

declare(strict_types=1);

namespace Raiolanetworks\Atlas\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Currency extends Model
{
    protected $guarded = [];

    public $timestamps = false;

    /**
     * Get the table associated with the model.
     */
    public function getTable(): string
    {
        return config('atlas.currencies_tablename', parent::getTable());
    }

    /**
     * @return BelongsTo<Country,Currency>
     */
    public function country(): BelongsTo
    {
        return $this->belongsTo(Country::class);
    }
}
