<?php

namespace Vinkas\Singapore\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Vinkas\Singapore\Support\Model;

class NewsArticle extends Model
{
    protected $fillable = [
        'website_id',
        'google_search_trend_id',
        'title',
        'url',
        'image_url',
    ];

    /**
     * Get the website that owns the news article.
     */
    public function website(): BelongsTo
    {
        return $this->belongsTo(NewsWebsite::class);
    }

    /**
     * Get the google search trend that owns the news article.
     */
    public function googleSearchTrend(): BelongsTo
    {
        return $this->belongsTo(GoogleSearchTrend::class);
    }
}
