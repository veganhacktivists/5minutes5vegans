<!-- <div class="text-center">
    <a href="{{ route('feed') }}"><img class="w-50 logo" src="{{ asset('images/logo.png') }}"/></a>
</div> -->
<div id="feed-nav-2">
    @include('inc.feed-nav')
</div>

<!--
<div class="d-flex justify-content-between">
    <h3 id="easy-to-copy-resources" class="pb-1">@lang('EASY TO COPY RESOURCES')</h3>
    <div id="auth-links-inline">
        @auth
            {{ link_to_route('logout', __('logout'), null, ['class' => 'auth-link', 'onclick' => 'event.preventDefault(); $("#logout-form").submit();']) }}
        @endauth
        @guest
            {{ link_to_route('register', __('Register'), null, array('class' => 'auth-link')) }}
            @lang('or')
            {{ link_to_route('login', __('Login'), null, array('class' => 'auth-link')) }}
        @endguest
    </div>
</div>
-->

<script>
    var customVerbiages = @json($verbiages);
</script>

<verbiages :is-guest="{{ json_encode(auth()->guest()) }}"></verbiages>