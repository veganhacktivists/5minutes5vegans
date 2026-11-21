<?php

namespace App\Console\Commands;

use App\Models\Tweet;
use Illuminate\Console\Command;

class PruneTweetsCommand extends Command
{
    protected $signature = 'tweets:prune {--keep=500 : How many posts to keep in each language on each platform}';

    protected $description = 'Delete posts too old for the feed, and all but the newest in each language on each platform';

    public function handle(): int
    {
        $keep = max(1, (int) $this->option('keep'));

        $old = Tweet::where('date', '<', now()->subDays(Tweet::FEED_DAYS))->delete();
        $this->info("Deleted $old posts older than ".Tweet::FEED_DAYS.' days');

        foreach (Tweet::query()->select('lang', 'platform')->distinct()->get() as $group) {
            $oldestKept = Tweet::timeline($group->lang, $group->platform)->skip($keep - 1)->value('date');

            if ($oldestKept === null) {
                continue;
            }

            $deleted = Tweet::where('lang', $group->lang)->where('platform', $group->platform)->where('date', '<', $oldestKept)->delete();
            $this->info("Deleted $deleted posts ($group->lang, $group->platform)");
        }

        return self::SUCCESS;
    }
}
