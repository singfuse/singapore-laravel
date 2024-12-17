<?php

namespace Vinkas\Singapore\Models;

use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;
use Vinkas\Singapore\Support\Model;

class Region extends Model
{
    /**
     * Get the areas for the region.
     */
    public function areas(): HasMany
    {
        return $this->hasMany(Area::class);
    }

    /**
     * Get the subzones for the region.
     */
    public function subzones(): HasManyThrough
    {
        return $this->hasManyThrough(Subzone::class, Area::class);
    }

    /**
     * Get the postal districts for the region.
     */
    public function postalDistricts(): HasMany
    {
        return $this->hasMany(PostalDistrict::class);
    }
}
