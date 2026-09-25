{{--
  Umami analytics, self-hosted by Vegan Hacktivists. It sets no cookies, so it
  needs no consent banner. Renders nothing until UMAMI_WEBSITE_ID is set, which
  keeps local, test and unconfigured environments untracked. Query strings are
  left out of what it records.
--}}
@if ($umamiWebsiteId = config('services.umami.website_id'))
    <script nonce="{{ Vite::cspNonce() }}" defer src="{{ config('services.umami.script_url') }}" data-website-id="{{ $umamiWebsiteId }}" data-exclude-search="true"></script>
@endif
