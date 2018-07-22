<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subscriber extends Model
{
    //
    protected $fillable = [
        'email', 'user_id'
    ];

    /**
     * Return user which this Subscriber belongs to
     *
     * @return App\User
     */
    public function user() 
    {
        return $this->belongsTo('App\User::class', 'user_id');
    }
}
