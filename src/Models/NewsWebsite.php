<?php

namespace Vinkas\Singapore\Models;

use Illuminate\Database\Eloquent\Relations\HasMany;
use Vinkas\Singapore\Support\Model;

class NewsWebsite extends Model
{
    protected $fillable = [
        'name',
        'url',
        'image_url',
    ];

    public function newsArticles(): HasMany
    {
        return $this->hasMany(NewsArticle::class);
    }
}
