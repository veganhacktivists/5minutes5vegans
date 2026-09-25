<div id="feed-nav-2">
    @include('inc.feed-nav')
</div>

@php
    $routes = [
        'login' => route('login'),
        'logout' => route('logout'),
        'register' => route('register'),
        'tweets' => route('tweets', [], false)
    ];

    $lang = [
        'default' => __('Ready-made'),
        'customized' => __('Your own'),
        'loginToCustomize' => __('Log in to write your own messages'),
        'editProfile' => __('Edit Profile'),
        'logout' => __('Logout'),
        'login' => __('Login'),
        'register' => __('Register'),
        'howItWorks' => __('loginregister.how'),
        'placeholder' => __('Pick a topic above to get a message you can copy.'),
        'loading' => __('Loading messages…'),
        'loadFailed' => __("The messages didn't load. Refresh the page to try again."),
        'new' => __('New'),
        'save' => __('Save'),
        'edit' => __('Edit'),
        'cancel' => __('Cancel'),
        'delete' => __('Delete'),
        'copy' => __('Copy message'),
        'reword' => __('Reword'),
        'close' => __('Close'),
        'copied' => __('Copied!'),
        'copyHint' => __('Now open a post and paste this as your reply.'),
        'copyFailed' => __("Couldn't copy. Select the text and copy it yourself."),
        'charactersLeft' => __('characters left'),
        'enterTitle' => __('Enter title'),
        'confirmDelete' => __('Delete \':title\'?'),
        'error' => __('Something went wrong. Please try again.'),
        'profileSaved' => __('Profile saved.'),
        'yourName' => __('Your Name'),
        'yourEmail' => __('Your Email'),
        'password' => __('Password'),
        'confirmPassword' => __('Confirm Password'),
        'currentPassword' => __('Current password (needed to change your email or password)'),
        'saveProfile' => __('Save Profile'),
        'messages' => __('Messages'),
        'feed' => __('Feed'),
    ];

    $user = Auth::user();
@endphp

<script>
    var customVerbiages = @json($verbiages);
    var routes = @json($routes);
    var lang = @json($lang);
    @auth
        var currentUser = @json([
                'name' => $user->name,
                'email' => $user->email,
            ]);
        routes['user.update'] = @json(route('user.update', Auth::user(), false));
    @endauth
</script>

<App></App>
