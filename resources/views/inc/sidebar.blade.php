<div id="feed-nav-2">
    @include('inc.feed-nav')
</div>

@php
    $routes = [
        'login' => route('login'),
        'logout' => route('logout'),
        'register' => route('register'),
    ];

    $user = Auth::user();
@endphp

<script>
    var customVerbiages = @json($verbiages);
    var routes = @json($routes);
    @auth
    var currentUser = @json([
        'name' => $user->name,
        'email' => $user->email,
    ]);
    routes['user.update'] = @json(route('user.update', Auth::user()));
    @endauth
</script>

<App></App>
