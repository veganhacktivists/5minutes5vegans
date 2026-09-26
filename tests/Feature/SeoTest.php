<?php

namespace Tests\Feature;

use Mcamara\LaravelLocalization\Middleware\LaravelLocalizationRedirectFilter;
use Mcamara\LaravelLocalization\Middleware\LocaleSessionRedirect;
use Tests\TestCase;

class SeoTest extends TestCase
{
    public function testTheSitemapListsEveryLanguage()
    {
        $response = $this->get('/sitemap.xml')->assertOk();

        $this->assertStringStartsWith('application/xml', $response->headers->get('Content-Type'));
        $xml = simplexml_load_string($response->getContent());
        $this->assertCount(count(config('laravellocalization.supportedLocales')), $xml->url);
    }

    public function testPagesLinkEveryLanguageVersion()
    {
        $this->withoutVite();
        $this->withoutMiddleware([LaravelLocalizationRedirectFilter::class, LocaleSessionRedirect::class]);

        $html = $this->get(route('login'))->assertOk()->getContent();

        $this->assertStringContainsString('rel="canonical"', $html);
        foreach (array_keys(config('laravellocalization.supportedLocales')) as $locale) {
            $this->assertStringContainsString("hreflang=\"$locale\"", $html);
        }
        $this->assertStringContainsString('hreflang="x-default"', $html);
    }

    public function testAlternatesLeaveOutTheQueryString()
    {
        $this->withoutVite();
        $this->withoutMiddleware([LaravelLocalizationRedirectFilter::class, LocaleSessionRedirect::class]);

        $html = $this->get(route('login').'?utm_source=newsletter')->assertOk()->getContent();

        preg_match_all('/<link rel="alternate" hreflang="[^"]+" href="([^"]+)"/', $html, $matches);
        $this->assertCount(count(config('laravellocalization.supportedLocales')) + 1, $matches[1]);
        foreach ($matches[1] as $href) {
            $this->assertStringNotContainsString('?', $href);
        }
    }

    public function testTheSitemapSetsNoCookies()
    {
        $this->assertEmpty($this->get('/sitemap.xml')->headers->getCookies());
    }

    private function page(): string
    {
        $this->withoutVite();
        $this->withoutMiddleware([LaravelLocalizationRedirectFilter::class, LocaleSessionRedirect::class]);

        return $this->get(route('login'))->assertOk()->getContent();
    }

    public function testThereIsNoGoogleAnalytics()
    {
        $html = $this->page();

        $this->assertStringNotContainsString('googletagmanager', $html);
        $this->assertStringNotContainsString('gtag(', $html);
    }

    public function testFontAwesomeComesFromTheSiteItself()
    {
        $html = $this->page();

        // app.js imports it, so Vite builds it into the site's own assets
        $this->assertStringNotContainsString('cdnjs.cloudflare.com', $html);
        $this->assertStringNotContainsString('fontawesome.com', $html);
        $this->assertStringNotContainsString('cdnjs', $this->get(route('login'))->headers->get('Content-Security-Policy'));
    }

    public function testUmamiLoadsOnlyOnceConfigured()
    {
        $this->assertStringNotContainsString('data-website-id', $this->page());

        config(['services.umami.website_id' => 'abc-123']);
        $html = $this->page();

        $this->assertStringContainsString('src="https://analytics.veganhacktivists.org/script.js"', $html);
        $this->assertStringContainsString('data-website-id="abc-123"', $html);
        $this->assertStringContainsString('data-exclude-search="true"', $html);
    }

    public function testThePrivacyPolicyIsLinkedWithoutTheCookieBanner()
    {
        $this->assertStringContainsString('href="https://veganhacktivists.org/privacy-policy"', $this->page());

        $this->artisan('migrate');
        $feed = $this->get(route('feed'))->assertOk()->getContent();
        $this->assertStringContainsString('href="https://veganhacktivists.org/privacy-policy"', $feed);
    }

    public function testUmamiStaysOffThePasswordResetPage()
    {
        $this->withoutVite();
        $this->withoutMiddleware([LaravelLocalizationRedirectFilter::class, LocaleSessionRedirect::class]);
        config(['services.umami.website_id' => 'abc-123']);

        $html = $this->get(route('password.reset', ['token' => 'a-secret-token']))->assertOk()->getContent();

        $this->assertStringContainsString('a-secret-token', $html);
        $this->assertStringNotContainsString('data-website-id', $html);
        $this->assertStringContainsString('data-website-id', $this->page());
    }

    public function testRobotsPointsAtTheSitemap()
    {
        $this->assertStringContainsString('Sitemap: https://5minutes5vegans.org/sitemap.xml', file_get_contents(public_path('robots.txt')));
    }

    private function feed(): string
    {
        $this->withoutVite();
        $this->withoutMiddleware([LaravelLocalizationRedirectFilter::class, LocaleSessionRedirect::class]);
        $this->artisan('migrate');

        return $this->get(route('feed'))->assertOk()->getContent();
    }

    public function testTheFeedsHeadingIsTheSiteName()
    {
        $feed = $this->feed();

        // The nav is there twice, for phones and for the sidebar, and CSS shows one
        $logos = preg_match_all('#<h1[^>]*>\s*<a [^>]*>\s*<img [^>]*alt="5 Minutes 5 Vegans"#', $feed);
        $this->assertSame(2, $logos);
        $this->assertSame($logos, substr_count($feed, '<h1'));
    }

    public function testOnlyTheFeedIsOfferedToSearchEngines()
    {
        $this->assertStringNotContainsString('name="robots"', $this->feed());

        foreach (['login', 'register', 'password.request'] as $route) {
            $html = $this->get(route($route))->assertOk()->getContent();
            $this->assertStringContainsString('<meta name="robots" content="noindex">', $html, $route);
        }
    }

    public function testEachPageHasItsOwnTitle()
    {
        $this->assertStringContainsString('<title>5 Minutes 5 Vegans | Help people on X go vegan</title>', $this->feed());

        foreach (['login' => 'Login', 'register' => 'Register', 'password.request' => 'Reset Password'] as $route => $name) {
            $html = $this->get(route($route))->assertOk()->getContent();
            $this->assertStringContainsString("<title>$name | 5 Minutes 5 Vegans</title>", $html);
            $this->assertStringContainsString("<meta property=\"og:title\" content=\"$name | 5 Minutes 5 Vegans\">", $html);
        }
    }

    public function testTheFeedTellsSearchEnginesWhatTheSiteIs()
    {
        $feed = $this->feed();

        $this->assertMatchesRegularExpression('#<script type="application/ld\+json" nonce="[^"]+">(.*?)</script>#s', $feed);
        preg_match('#<script type="application/ld\+json"[^>]*>(.*?)</script>#s', $feed, $match);
        $data = json_decode($match[1], true, flags: JSON_THROW_ON_ERROR);
        $this->assertSame('WebSite', $data['@type']);
        $this->assertSame('5 Minutes 5 Vegans', $data['name']);
        $this->assertSame('en', $data['inLanguage']);
        $this->assertSame('Vegan Hacktivists', $data['publisher']['name']);

        $this->assertStringContainsString('<meta property="og:site_name" content="5 Minutes 5 Vegans">', $feed);
        $this->assertStringContainsString('<meta property="og:locale:alternate" content="de_DE">', $feed);
        $this->assertStringNotContainsString('<meta property="og:locale:alternate" content="en_GB">', $feed);
    }

    public function testEveryLanguageHasItsOwnSearchSnippet()
    {
        $english = __('landing.description', [], 'en');
        $this->assertNotSame('landing.description', $english);

        foreach (array_keys(config('laravellocalization.supportedLocales')) as $locale) {
            $description = __('landing.description', [], $locale);
            $this->assertLessThanOrEqual(160, mb_strlen($description), $locale);

            if ($locale !== 'en') {
                $this->assertNotSame($english, $description, $locale);
                $this->assertNotSame('Help people on X go vegan', __('Help people on X go vegan', [], $locale), $locale);
            }
        }
    }
}
