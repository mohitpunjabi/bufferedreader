<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model {


    public function getPathAttribute()
    {
        return '/img/' . $this->name;
    }

    public function getThumbnailAttribute()
    {
        return '/img/thumbnails/' . $this->name;
    }

    public function tags()
    {
        return $this->belongsToMany('App\Tag');
    }

    public function scopeFilterByTags($query, $tags)
    {
        if($tags == null) return $query;
        return $query->whereHas('tags', function($q) use ($tags)
        {
            $q->whereIn('tags.id', $tags);
        });
    }

}
