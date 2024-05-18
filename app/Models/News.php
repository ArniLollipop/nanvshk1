<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class News extends Model
{
    protected $translatable = ['title', 'seo_title', 'excerpt', 'body', 'slug', 'meta_description', 'meta_keywords'];

    public function reviews():HasMany
    {
        return $this->hasMany(Review::class, 'news_id');
    }

   
}


