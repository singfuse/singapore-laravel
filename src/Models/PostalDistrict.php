<?php

namespace Vinkas\Singapore\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Vinkas\Singapore\Support\Model;

class PostalDistrict extends Model
{
    protected $fillable = [
        'region_id',
        'code',
        'locations',
        'sectors',
    ];

    protected $casts = [
        'locations' => 'array',
        'sectors' => 'array',
    ];

    /**
     * Get the region that owns the postal district.
     */
    public function region(): BelongsTo
    {
        return $this->belongsTo(Region::class);
    }
}
