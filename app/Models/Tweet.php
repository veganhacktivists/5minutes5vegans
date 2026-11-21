<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property string $id
 * @property string $platform
 * @property string $lang
 * @property \DateTime $date
 * @property string $text
 * @property array[] $media
 * @property string $from_user_name
 * @property string $from_full_name
 * @property string|null $from_profile_image
 * @property \DateTime $created_at
 * @property \DateTime $updated_at
 */
class Tweet extends Model
{
    use HasFactory;

    // Older posts are too late to reply to, so the feed leaves them out
    public const FEED_DAYS = 60;

    protected $guarded = [];

    // Matches the column's default, so posts made in code are from X too
    protected $attributes = ['platform' => 'x'];

    // Post IDs are strings in the database; as integers, large ones overflow
    public $incrementing = false;

    protected $keyType = 'string';

    protected $casts = [
        'date'  => 'datetime',
        'media' => 'array',
    ];

    public const PLATFORMS = ['x', 'bluesky'];

    // For posts whose author has no picture, and pictures that fail to load
    public const DEFAULT_AVATAR = 'https://abs.twimg.com/sticky/default_profile_images/default_profile_200x200.png';

    public static $rules = [
        'id' => ['required', 'string', 'regex:/^\d{1,25}\z/'],
        'date' => 'required|date',
        'text' => 'required|string|max:25000',
        'media' => 'array|max:4',
        'media.*.type' => 'required|string|in:photo,video,animated_gif',
        // The feed renders these URLs, so only accept X's own image and video hosts
        'media.*.url' => 'required|string|max:255|starts_with:https://pbs.twimg.com/,https://video.twimg.com/',
        'from_user_name' => ['required', 'string', 'regex:/^\w{1,50}\z/'],
        'from_full_name' => 'required|string|max:100',
        'from_profile_image' => 'required|string|max:255|starts_with:https://pbs.twimg.com/,https://abs.twimg.com/',
    ];

    // Bluesky ids are AT URIs, which also name the author, and there's no media
    private const BLUESKY_RULES = [
        'id' => ['required', 'string', 'max:255', 'regex:#^at://did:[a-z]+:[A-Za-z0-9._:%-]{1,200}/app\.bsky\.feed\.post/[A-Za-z0-9._~:-]{1,100}\z#'],
        'date' => 'required|date',
        'text' => 'required|string|max:25000',
        'media' => 'prohibited',
        'from_user_name' => ['required', 'string', 'regex:/^[A-Za-z0-9.-]{1,253}\z/'],
        'from_full_name' => 'required|string|max:100',
        'from_profile_image' => 'nullable|string|max:255|starts_with:https://cdn.bsky.app/',
    ];

    public static function rulesFor(string $platform): array
    {
        return $platform === 'bluesky' ? self::BLUESKY_RULES : self::$rules;
    }

    // Where the card opens the post. A Bluesky id is at://{did}/app.bsky.feed.post/{rkey}.
    public function link(): string
    {
        if ($this->platform === 'bluesky') {
            [$did, , $rkey] = explode('/', substr($this->id, strlen('at://')));

            return "https://bsky.app/profile/$did/post/$rkey";
        }

        return "https://x.com/{$this->from_user_name}/status/{$this->id}";
    }

    // By date, since X and Bluesky ids don't sort against each other
    public function scopeTimeline(Builder $query, string $lang, string $platform = 'x'): void
    {
        $query->where('lang', $lang)->where('platform', $platform)->orderByDesc('date')->orderByDesc('id');
    }

    public function scopeRecent(Builder $query): void
    {
        $query->where('date', '>=', now()->subDays(self::FEED_DAYS));
    }
}
