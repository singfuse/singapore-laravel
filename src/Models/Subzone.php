<?php

namespace Vinkas\Singapore\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Vinkas\Singapore\Support\Model;

class Subzone extends Model
{
    protected $fillable = [
        'area_id',
        'key',
        'name',
        'slug',
        'zh_name',
        'ta_name',
        'latitude',
        'longitude',
    ];

    /**
     * Get the area that owns the subzone.
     */
    public function area(): BelongsTo
    {
        return $this->belongsTo(Area::class);
    }
}
