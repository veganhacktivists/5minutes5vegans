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

    // Older posts are too late to reply to, so the feed leaves them out
    public const FEED_DAYS = 60;

    protected $guarded = [];

    protected $casts = [
        'date'  => 'datetime',
        'media' => 'array',
    ];

    public static $rules = [
        'id' => ['required', 'string', 'regex:/^\d{1,25}$/'],
        'date' => 'required|date',
        'text' => 'required|string|max:25000',
        'media' => 'array|max:4',
        'media.*.type' => 'required|string|in:photo,video,animated_gif',
        // The feed renders these URLs, so only accept X's own image and video hosts
        'media.*.url' => 'required|string|max:255|starts_with:https://pbs.twimg.com/,https://video.twimg.com/',
        'from_user_name' => ['required', 'string', 'regex:/^\w{1,50}$/'],
        'from_full_name' => 'required|string|max:100',
        'from_profile_image' => 'required|string|max:255|starts_with:https://pbs.twimg.com/,https://abs.twimg.com/',
    ];

    public function scopeTimeline(Builder $query, string $lang): void
    {
        $query->where('lang', $lang)->orderByDesc('id');
    }

    public function scopeRecent(Builder $query): void
    {
        $query->where('date', '>=', now()->subDays(self::FEED_DAYS));
    }
}
