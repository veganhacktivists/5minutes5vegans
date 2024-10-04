<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property string $id
 * @property string $lang
 * @property \DateTime $date
 * @property string $text
 * @property array[] $media
 * @property string $from_user_name
 * @property string $from_full_name
 * @property string $from_profile_image
 * @property \DateTime $created_at
 * @property \DateTime $updated_at
 */
class Tweet extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $casts = [
        'date'  => 'datetime',
        'media' => 'array',
    ];

    public static $rules = [
        'id' => 'required|string',
        'date' => 'required|date',
        'text' => 'required|string',
        'media' => 'array',
        'media.*.type' => 'required|string|in:photo,video,animated_gif',
        'media.*.url' => 'required|string',
        'from_user_name' => 'required|string',
        'from_full_name' => 'required|string',
        'from_profile_image' => 'required|string',
    ];

    public function scopeTimeline(Builder $query, string $lang): void
    {
        $query->where('lang', $lang)->orderByDesc('id');
    }
}
