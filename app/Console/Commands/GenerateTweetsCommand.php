<?php

namespace App\Console\Commands;

use App;
use App\Services\TweetRegexService;
use Illuminate\Support\Facades\Cache;
use Illuminate\Console\Command;

class GenerateTweetsCommand extends Command
{
    private const NUM_SECONDS_TO_CACHE = 600; // 10 minutes

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
     * @return mixed
     */
    public function handle(TweetRegexService $tweetRegexService)
    {
        $languages = array_keys(config('laravellocalization.supportedLocales'));

        foreach ($languages as $language) {
            App::setLocale($language);

            $key = "tweets$language";
            \Log::info('Generating tweets', ['lang' => $language]);
            try {
                $localizedTweets = __('tweets'); // takes some time, in order to generate tinyUrls.
                echo "tweets localized ($language) \n";

                $tweets = $tweetRegexService->generate_tweets($localizedTweets);
                echo "tweets generated ($language) \n";

                Cache::put($key, $tweets, self::NUM_SECONDS_TO_CACHE);
                \Log::info('Finished Generating tweets', ['lang' => $language]);
            } catch (\Exception $e) {
                \Log::error('Could not generate tweets', [
                    'lang' => $language,
                    'error' => $e->getMessage(),
                    'line number' => $e->getLine(),
                ]);
            }
        }
    }
}
