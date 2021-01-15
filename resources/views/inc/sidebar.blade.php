<div id="feed-nav-2">
    @include('inc.feed-nav')
</div>

@php
    $routes = [
        'login' => route('login'),
        'logout' => route('logout'),
        'register' => route('register')
    ]
@endphp

<script>
    var customVerbiages = @json($verbiages);
    var routes = @json($routes);
    @auth
        var currentUser = @json(['name' => Auth::user()->name]);
    @endauth
</script>

<verbiages></verbiages>
