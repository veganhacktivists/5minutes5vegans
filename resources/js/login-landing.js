$(() => {
    const $signupSection = $('#register-pane')
    const $loginSection = $('#login-pane')
    const $loginButton = $('#login-btn')

    showLoginSection = () => {
        $loginSection.addClass('d-block')
        $loginSection.removeClass('d-none')

        $signupSection.addClass('d-none')
        $signupSection.removeClass('d-block')
    }

    $loginButton.on("click", showLoginSection)

    if (new URL(window.location).searchParams.get('login') === '1') {
        showLoginSection()
    }
});
