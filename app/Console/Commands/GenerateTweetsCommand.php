<?php

namespace App\Console\Commands;

use App;
use App\Services\TweetGenerator;
use Illuminate\Support\Facades\Cache;
use Illuminate\Console\Command;

class GenerateTweetsCommand extends Command
{
    protected $signature = 'tweets:generate';

    protected $description = 'Generate tweets in every supported language';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle(TweetGenerator $generator)
    {
        $languages = array_keys(config('laravellocalization.supportedLocales'));
        $failed = [];

        foreach ($languages as $language) {
            App::setLocale($language);

            $key = "tweets$language";
            if (($lastGood = Cache::get($key)) !== null) {
                Cache::forever($key, $lastGood);
            }

            \Log::info('Generating tweets', ['lang' => $language]);
            try {
                $localizedTweets = __('tweets'); // takes some time, in order to generate short URLs.
                echo "tweets localized ($language) \n";

                $tweets = $generator->generate($localizedTweets);
                echo "tweets generated ($language) \n";

                // Stored as JSON, ready to send
                Cache::forever($key, json_encode($tweets, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_THROW_ON_ERROR));
                \Log::info('Finished Generating tweets', ['lang' => $language]);
            } catch (\Throwable $e) {
                $failed[] = $language;

                // At most once an hour per language
                if (Cache::add("tweets-generate-reported-$language", true, now()->addHour())) {
                    report(new \RuntimeException("Could not generate tweets ($language)", 0, $e));
                }

                $this->error("Could not generate tweets ($language): {$e->getMessage()}");
            }
        }

        return $failed ? self::FAILURE : self::SUCCESS;
    }
}
