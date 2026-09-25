<?php

namespace App\Console\Commands;

use App\Models\Tweet;
use Illuminate\Console\Command;

class PruneTweetsCommand extends Command
{
    protected $signature = 'tweets:prune {--keep=500 : How many posts to keep in each language}';

    protected $description = 'Delete posts too old for the feed, and all but the newest in each language';

    /**
     * The feed only shows the newest 50 in each language from the last
     * Tweet::FEED_DAYS days, so there's no need to keep every post, name and
     * avatar the bot has ever sent.
     */
    public function handle(): int
    {
        $keep = max(1, (int) $this->option('keep'));

        $old = Tweet::where('date', '<', now()->subDays(Tweet::FEED_DAYS))->delete();
        $this->info("Deleted $old posts older than ".Tweet::FEED_DAYS.' days');

        foreach (Tweet::query()->distinct()->pluck('lang') as $lang) {
            $oldestKept = Tweet::timeline($lang)->skip($keep - 1)->value('id');

            if ($oldestKept === null) {
                continue;
            }

            $deleted = Tweet::where('lang', $lang)->where('id', '<', $oldestKept)->delete();
            $this->info("Deleted $deleted posts ($lang)");
        }

        return self::SUCCESS;
    }
}
