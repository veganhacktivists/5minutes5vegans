$(() => {
    const $registerSection = $('#register-pane')
    const $loginSection = $('#login-pane')

    showLoginSection = () => {
        $loginSection.addClass('d-block')
        $loginSection.removeClass('d-none')

        $registerSection.addClass('d-none')
        $registerSection.removeClass('d-block')
    }

    showRegisterSection = () => {
        $loginSection.removeClass('d-block')
        $loginSection.addClass('d-none')

        $registerSection.removeClass('d-none')
        $registerSection.addClass('d-block')
    }

    if (new URL(window.location).searchParams.get('login') === '1') {
        showLoginSection()
    } else {
        showRegisterSection()
    }
});
