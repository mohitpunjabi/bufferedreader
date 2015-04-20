<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Intervention\Image\Facades\Image;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class Author extends Model {

	//

    protected $fillable = [
        'name',
        'image',
        'about'
    ];

    /**
     * Uploads the image and sets the URL.
     *
     * @param $image
     */
    public function setImageAttribute($image)
    {
        if($image instanceof UploadedFile)
        {
            $this->attributes['image'] = img_save($image, Tag::whereIn('tag', ['person', 'author'])->get(), function($img)
            {
                $img->fit(100);
            });
        }
    }

    public function articles()
    {
        return $this->belongsToMany('App\Article')->withTimestamps();
    }

}
