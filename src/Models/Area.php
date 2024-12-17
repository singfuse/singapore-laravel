<?php

namespace Vinkas\Singapore\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Vinkas\Singapore\Support\Model;

class Area extends Model
{
    protected $fillable = [
        'region_id',
        'key',
        'name',
        'slug',
        'zh_name',
        'ta_name',
        'latitude',
        'longitude',
    ];

    /**
     * Get the region that owns the area.
     */
    public function region(): BelongsTo
    {
        return $this->belongsTo(Region::class);
    }

    /**
     * Get the subzones for the area.
     */
    public function subzones(): HasMany
    {
        return $this->hasMany(Subzone::class);
    }
}
