$(() => {
    const $signupSection = $('#register-pane')
    const $loginSection = $('#login-pane')
    const $loginButton = $('#login-btn')

    showLoginSection = () => {
        $loginSection.classList.add('d-block')
        $loginSection.classList.remove('d-none')

        $signupSection.classList.add('d-none')
        $signupSection.classList.remove('d-block')
    }

    $loginButton.addEventListener("click", showLoginSection)

    if (new URL(window.location).searchParams.get('login') === '1') {
        showLoginSection()
    }
});
