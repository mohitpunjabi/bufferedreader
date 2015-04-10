<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Issue extends Model {

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
    ];

    /**
     * An Issue can have many Articles
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function articles() {
        return $this->hasMany('App\Article');
    }

}
