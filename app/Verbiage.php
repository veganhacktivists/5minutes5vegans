<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Verbiage extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'icon', 'body', 'title'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

}
