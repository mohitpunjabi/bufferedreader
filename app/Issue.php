<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class Issue extends Model {

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'slug',
        'cover_page',
        'jumbotron_photo',
        'pdf_link'
    ];

    public function setCoverPageAttribute($image)
    {
        if($image instanceof UploadedFile) $this->attributes['cover_page'] = img_save($image, Tag::where('tag', 'covers')->get());
    }

    public function setJumbotronPhotoAttribute($image)
    {
        if($image instanceof UploadedFile) $this->attributes['jumbotron_photo'] = img_save($image, Tag::where('tag', 'covers')->get());
    }

    /**
     * An Issue can have many Articles
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function articles()
    {
        return $this->hasMany('App\Article');
    }

    public function getSeeAlsoAttribute()
    {
        return Issue::where('id', '!=', $this->id)->get();
    }
}
