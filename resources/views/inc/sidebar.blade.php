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
        'deleteAccount' => __('Delete your account'),
        'deleteAccountInfo' => __("This deletes your account and the messages you've saved. It can't be undone."),
        'deleteAccountButton' => __('Delete my account'),
        'confirmDeleteAccount' => __('Delete your account and all your messages?'),
        'currentPasswordOnly' => __('Current password'),
        'messages' => __('Messages'),
        'feed' => __('Feed'),
    ];

    $user = Auth::user();
    if ($user) {
        $routes['user.update'] = route('user.update', $user, false);
        $routes['user.destroy'] = route('user.destroy', $user, false);
    }

    $pageData = [
        'customVerbiages' => $verbiages,
        'routes' => $routes,
        'lang' => $lang,
        'currentUser' => $user ? ['name' => $user->name, 'email' => $user->email] : null,
    ];
@endphp

{{-- Also read by languageSwitch.js, which swaps in another language's page without reloading --}}
<script type="application/json" id="page-data">@json($pageData)</script>
<script nonce="{{ Vite::cspNonce() }}">
    var pageData = JSON.parse(document.getElementById('page-data').textContent);
    var customVerbiages = pageData.customVerbiages;
    var routes = pageData.routes;
    var lang = pageData.lang;
    var currentUser = pageData.currentUser || undefined;
</script>

<App></App>
