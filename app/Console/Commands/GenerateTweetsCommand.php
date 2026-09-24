<?php

namespace App\Console\Commands;

use App;
use App\Services\TweetGenerator;
use Illuminate\Support\Facades\Cache;
use Illuminate\Console\Command;

class GenerateTweetsCommand extends Command
{
    // Refreshed every minute. The long lifetime keeps the last good set on
    // the site if a run fails.
    private const NUM_SECONDS_TO_CACHE = 60 * 60 * 24;

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'tweets:generate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate tweets in every supported language';

    /**
     * Create a new command instance.
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle(TweetGenerator $generator)
    {
        $languages = array_keys(config('laravellocalization.supportedLocales'));
        $failed = [];

        foreach ($languages as $language) {
            App::setLocale($language);

            $key = "tweets$language";
            \Log::info('Generating tweets', ['lang' => $language]);
            try {
                $localizedTweets = __('tweets'); // takes some time, in order to generate short URLs.
                echo "tweets localized ($language) \n";

                $tweets = $generator->generate($localizedTweets);
                echo "tweets generated ($language) \n";

                Cache::put($key, $tweets, self::NUM_SECONDS_TO_CACHE);
                \Log::info('Finished Generating tweets', ['lang' => $language]);
            } catch (\Throwable $e) {
                $failed[] = $language;

                // Once an hour per language, so an outage doesn't send Sentry an event a minute
                if (Cache::add("tweets-generate-reported-$language", true, now()->addHour())) {
                    report(new \RuntimeException("Could not generate tweets ($language)", 0, $e));
                }

                $this->error("Could not generate tweets ($language): {$e->getMessage()}");
            }
        }

        return $failed ? self::FAILURE : self::SUCCESS;
    }
}
