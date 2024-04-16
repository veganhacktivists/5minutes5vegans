/**
 * First, we will load all of this project's Javascript utilities and other
 * dependencies. Then, we will be ready to develop a robust and powerful
 * application frontend using useful Laravel and JavaScript libraries.
 */

require('./bootstrap')
window.axios = require('axios')
import Swiper from 'swiper/bundle'
import Clipboard from 'v-clipboard'
import { createApp } from 'vue'
import App from './components/App.vue'

/*********
 * TIMER *
 *********/

var startTime, timerInterval
$(() => {
    startTimer()
    $('.timer-restart').click(startTimer)
})

function setTimer(minutes, seconds) {
    $('.timer-display .minutes').html(minutes)
    $('.timer-display .seconds').html(seconds)
}

function startTimer() {
    startTime = Date.now()
    timerInterval = setInterval(updateTimer, 1000)
    setTimer('05', '00')
    $('.timer-complete').hide(400)
    $('.timer-section').show(400)
}

function updateTimer() {
    var timestamp = 5 * 60 * 1000 + startTime - Date.now()
    if (timestamp < 0) {
        clearInterval(timerInterval)
        $('.timer-section').hide(400)
        $('.timer-complete').show(400)
        return
    }

    var time = new Date(timestamp)
    setTimer(
        ('0' + time.getMinutes()).substr(-2),
        ('0' + time.getSeconds()).substr(-2),
    )
}

// Vue.use(Clipboard)
//
// Vue.component('App', require('./components/App.vue').default)
// Vue.component('Menu', require('./components/Menu.vue').default)
// Vue.component('Verbiages', require('./components/Verbiages.vue').default)
// Vue.component('UserEdit', require('./components/UserEdit.vue').default)

// Register CSRF token for use with vue-resource
let token = document.head.querySelector('meta[name="csrf-token"]')

if (token) {
    window.axios.defaults.headers.common = {
        'X-Requested-With': 'XMLHttpRequest',
        'X-CSRF-TOKEN': token.content,
    }
} else
    console.error(
        'CSRF token not found: https://laravel.com/docs/csrf#csrf-x-csrf-token',
    )

$(() => {
    initializeMdForm()
    if ($('app').length) {
        createApp(App).use(Clipboard).mount('app')
    }
})

/******************
 * MD Form Helper *
 ******************/
function initializeMdForm() {
    $('.form-control-md').blur((event) => {
        if ($(event.target).val()) {
            $(event.target).addClass('has-value')
        } else {
            $(event.target).removeClass('has-value')
        }
    })
}

/******************************
 * SwiperJS for the feed page *
 ******************************/
$(() => {
    if (!$('.swiper-container').length) {
        return
    }
    window.mySwiper = new Swiper('.swiper-container', {
        direction: 'horizontal',
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
            renderBullet: function(index, className) {
                return `
                <span class="swirvy-box ${className}">${
                    index === 0 ? 'resources' : 'feed'
                }</span>
                `
            },
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        slidesPerView: 2,
        spaceBetween: 0,
        breakpoints: {
            0: {
                slidesPerView: 1,
                spaceBetween: 10,
            },
            767: {
                slidesPerView: 2,
                spaceBetween: 0,
            },
        },
        watchOverflow: true,
        allowTouchMove: false,
    })

    // Start on the twitter slide in mobile view
    window.mySwiper.slideTo(2, false, false)
})

// Scroll animation for landing page
$(window).scroll(function() {
    if ($(window).scrollTop() > 15) {
        $('.landing header').addClass('header-scroll')
        $('#landing-logo-mobile').addClass('logo-scroll')
    } else {
        $('.landing header').removeClass('header-scroll')
        $('#landing-logo-mobile').removeClass('logo-scroll')
    }
})

/************************************
 * Script to reset the timer *
 ************************************/
window.onload = function() {
    // set the focus to the language bar
    document.getElementById('languageFlags').focus()

    // reset the timer by clicking the icon
    var as = document.querySelectorAll('#resetLink')
    as.forEach(function(a) {
        a.onclick = function() {
            startTimer()
            return false
        }
    })
}
