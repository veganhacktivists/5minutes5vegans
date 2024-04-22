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
 * @property int $view_count
 * @property int $like_count
 * @property int $reply_count
 * @property int $retweet_count
 * @property int $quote_count
 * @property \DateTime $created_at
 * @property \DateTime $updated_at
 */
class Tweet extends Model
{
    use HasFactory;

    protected $casts = [
        'date' => 'datetime',
        'media' => 'array',
    ];

    public function scopeTimeline(Builder $query, string $lang): void
    {
        $query->where('lang', $lang)->orderByDesc('id');
    }
}
