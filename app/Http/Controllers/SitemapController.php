<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class SitemapController extends Controller
{
    /**
     * One home page per language, each listing the others as alternates.
     */
    public function __invoke(): Response
    {
        // The XML declaration is added here because Blade reads "<?" as PHP
        $urls = view('sitemap', ['locales' => array_keys(LaravelLocalization::getSupportedLocales())])->render();

        return response('<?xml version="1.0" encoding="UTF-8"?>'."\n".$urls)
            ->header('Content-Type', 'application/xml');
    }
}
