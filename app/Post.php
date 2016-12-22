<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'title',
        'abstract',
        'content',
        'url_thumbnail',
        'date',
        'status',
    ];

    /**
     * user relationship
     *
     * @return relation
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
