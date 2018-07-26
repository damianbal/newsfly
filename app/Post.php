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
        'title', 'content', 'user_id',
    ];

    /**
     * Returns user who owns that post
     *
     * @return void
     */
    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }
}
