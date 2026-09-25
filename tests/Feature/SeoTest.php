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

    public function testAnalyticsWaitsForConsent()
    {
        $this->withoutVite();
        $this->withoutMiddleware([LaravelLocalizationRedirectFilter::class, LocaleSessionRedirect::class]);

        $html = $this->get(route('login'))->assertOk()->getContent();

        $this->assertStringNotContainsString('<script async src="https://www.googletagmanager.com', $html);
        $this->assertStringContainsString('id="cookie-consent"', $html);
    }

    public function testRobotsPointsAtTheSitemap()
    {
        $this->assertStringContainsString('Sitemap: https://5minutes5vegans.org/sitemap.xml', file_get_contents(public_path('robots.txt')));
    }
}
