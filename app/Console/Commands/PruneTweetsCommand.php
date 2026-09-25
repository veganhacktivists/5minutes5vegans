<?php

namespace App\Console\Commands;

use App\Models\Tweet;
use Illuminate\Console\Command;

class PruneTweetsCommand extends Command
{
    protected $signature = 'tweets:prune {--keep=500 : How many posts to keep in each language}';

    protected $description = 'Delete all but the newest posts in each language';

    /**
     * The feed only shows the newest 50 in each language, so there's no need
     * to keep every post, name and avatar the bot has ever sent.
     */
    public function handle(): int
    {
        $keep = max(1, (int) $this->option('keep'));

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
