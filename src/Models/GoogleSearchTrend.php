<?php

namespace Vinkas\Singapore\Models;

use Illuminate\Database\Eloquent\Relations\HasMany;
use Vinkas\Singapore\Support\Model;

class GoogleSearchTrend extends Model
{
    protected $fillable = [
        'title',
        'trended_at',
        'picture_url',
    ];

    protected $casts = [
        'trended_at' => 'datetime',
    ];

    public function newsArticles(): HasMany
    {
        return $this->hasMany(NewsArticle::class);
    }
}
