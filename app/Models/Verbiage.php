<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Verbiage extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'icon', 'body', 'title'
    ];

    protected $hidden = [
    ];

    protected $casts = [
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

}
