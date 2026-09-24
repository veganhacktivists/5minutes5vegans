<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:xhtml="http://www.w3.org/1999/xhtml">
@foreach ($locales as $locale)
    <url>
        <loc>{{ url($locale) }}</loc>
@foreach ($locales as $alternate)
        <xhtml:link rel="alternate" hreflang="{{ $alternate }}" href="{{ url($alternate) }}"/>
@endforeach
        <xhtml:link rel="alternate" hreflang="x-default" href="{{ url('en') }}"/>
    </url>
@endforeach
</urlset>
