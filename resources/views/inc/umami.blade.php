{{-- Cookieless, so no consent banner. Off until UMAMI_WEBSITE_ID is set, and on
     the reset page, whose address holds the token. --}}
@if (($umamiWebsiteId = config('services.umami.website_id')) && ! request()->routeIs('password.reset'))
    <script nonce="{{ Vite::cspNonce() }}" defer src="{{ config('services.umami.script_url') }}" data-website-id="{{ $umamiWebsiteId }}" data-exclude-search="true"></script>
@endif
