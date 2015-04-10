<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model {

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'subtitle',
        'content',
        'issue_id'
    ];


    /**
     * An Article belongs to an Issue
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function issue() {
        return $this->belongsTo('App\Issue');
    }

}
