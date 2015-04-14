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
            $img = Image::make($image);
            $img->fit(100);
            $this->attributes['image'] = $img->save('img/author-' . $this->id . '-' . str_slug($this->attributes['name']) . '.jpg')->basename;
        }
    }

    public function articles()
    {
        return $this->belongsToMany('App\Article')->withTimestamps();
    }

}
