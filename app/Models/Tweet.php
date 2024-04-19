<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property string $id
 * @property string $lang
 * @property string $from
 * @property string $text
 */
class Tweet extends Model
{
    use HasFactory;

    public function scopeTimeline(Builder $query, string $lang): void
    {
        $query->where('lang', $lang)->orderByDesc('id');
    }
}
