{{--
  Umami analytics, self-hosted by Vegan Hacktivists. It sets no cookies, so it
  needs no consent banner. Renders nothing until UMAMI_WEBSITE_ID is set, which
  keeps local, test and unconfigured environments untracked. Query strings are
  left out of what it records. The password reset page isn't tracked at all:
  its address holds the reset token, and Umami would store it.
--}}
@if (($umamiWebsiteId = config('services.umami.website_id')) && ! request()->routeIs('password.reset'))
    <script nonce="{{ Vite::cspNonce() }}" defer src="{{ config('services.umami.script_url') }}" data-website-id="{{ $umamiWebsiteId }}" data-exclude-search="true"></script>
@endif
