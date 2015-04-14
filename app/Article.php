<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class Article extends Model {

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'slug',
        'subtitle',
        'jumbotron_photo',
        'content',
        'short_description'
    ];

    /**
     * Uploads the image and sets the URL.
     *
     * @param $image
     */
    public function setJumbotronPhotoAttribute($image)
    {
        if($image instanceof UploadedFile) $this->attributes['jumbotron_photo'] = img_save($image);
    }

    public function getAuthorListAttribute()
    {
        return $this->authors()->lists('id');
    }

    /**
     * An Article belongs to an Issue.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function issue()
    {
        return $this->belongsTo('App\Issue');
    }

    /**
     * An Article has many authors.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function authors()
    {
        return $this->belongsToMany('App\Author');
    }

    public function scopeVisible($query)
    {
        if(Auth::guest())   return $query->published();
        return $query;
    }

    public function scopePublished($query)
    {
        return $query->where('published', true);
    }

    public function getPreviousAttribute()
    {
        return $this->issue->articles()->visible()->where('id', '<', $this->id)->orderBy('id', 'desc')->first();
    }

    public function getNextAttribute()
    {
        return $this->issue->articles()->visible()->where('id', '>', $this->id)->orderBy('id', 'asc')->first();
    }
}
