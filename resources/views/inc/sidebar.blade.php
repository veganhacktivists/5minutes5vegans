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

<verbiages></verbiages>

@guest
<p style="color:#19443a;">
    Want to write and copy your own resources? 
    {{ link_to_route('register', __('Register'), null, array('style' => 'font-size: 16px;color:#EC361F;')) }} or 
    {{ link_to_route('login', __('Login'), null, array('style' => 'font-size: 16px;color:#EC361F;')) }}!
</p>
@endguest
@auth
<p style="color:#19443a;">
    Welcome, {{ Auth::user()->name }}!  You can click here to
    {{ link_to_route('logout', __('log out'), null, ['style' => 'font-size: 16px;color:#EC361F;', 'onclick' => 'event.preventDefault(); $("#logout-form").submit();']) }}.
</p>
@endauth