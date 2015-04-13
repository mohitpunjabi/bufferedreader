<?php namespace App;

use Illuminate\Database\Eloquent\Model;
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

    /**
     * An Article belongs to an Issue
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function issue() {
        return $this->belongsTo('App\Issue');
    }

}
