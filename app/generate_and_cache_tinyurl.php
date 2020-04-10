<?php

use Illuminate\Support\Facades\Cache;

function generate_and_cache_tinyurl($url) {
    $key = 'tinyurl-' . $url;
    $cachedUrl = Cache::get($key);

    if ($cachedUrl) {
        return $cachedUrl;
    }

    try {
        $tinyUrl = file_get_contents('http://tinyurl.com/api-create.php?url=' . $url);
        Cache::put($key, preg_quote($tinyUrl), 60 * 60 * 12); // changes every 12 hours

        // give tinyurl api some slack. To increase if some url can't be generated properly
        sleep(1);
    } catch (Exception $e) {
        echo $e->getMessage();
        $tinyUrl = $url;
    }

    return preg_quote($tinyUrl);
}
