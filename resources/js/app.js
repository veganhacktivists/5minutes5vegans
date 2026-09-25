/**
 * First, we will load all of this project's Javascript utilities and other
 * dependencies. Then, we will be ready to develop a robust and powerful
 * application frontend using useful Laravel and JavaScript libraries.
 */

import './bootstrap';
import axios from 'axios';

window.axios = axios;
import Swiper from 'swiper'
import { Pagination } from 'swiper/modules'
import { createApp } from 'vue'
import { track } from './track'
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
    clearInterval(timerInterval)
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
    if ($('app').length) {
        createApp(App).mount('app')
    }
})

/******************************
 * SwiperJS for the feed page *
 ******************************/
$(() => {
    if (!$('.swiper-container').length) {
        return
    }
    window.mySwiper = new Swiper('.swiper-container', {
        modules: [Pagination],
        direction: 'horizontal',
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
            renderBullet: function(index, className) {
                // Buttons, so keyboards and screen readers can use the pager
                return `
                <button type="button" class="swirvy-box ${className}">${
                    index === 0 ? window.lang.messages : window.lang.feed
                }</button>
                `
            },
        },
        slidesPerView: 2,
        spaceBetween: 0,
        breakpoints: {
            0: {
                slidesPerView: 1,
                spaceBetween: 10,
            },
            768: {
                slidesPerView: 2,
                spaceBetween: 0,
                preventClicks: false,
                preventClicksPropagation: false,
            },
        },
        watchOverflow: true,
        allowTouchMove: false,
        on: {
            paginationUpdate(swiper) {
                swiper.pagination.bullets.forEach((bullet) => {
                    bullet.setAttribute('aria-pressed', bullet.classList.contains('swiper-pagination-bullet-active'))
                })
            },
        },
    })

    // Start on the twitter slide in mobile view
    window.mySwiper.slideTo(2, false, false)

    // Swiper moves slides with transforms, so its container should never scroll.
    // On phones the reply box moves into the pager when a topic is picked, and
    // the browser then scrolled the container sideways, pushing the tiles and
    // the reply box off-screen. Undo any such scroll straight away.
    const container = window.mySwiper.el
    container.addEventListener('scroll', () => {
        if (container.scrollLeft) container.scrollLeft = 0
    })
})

/*******************************************
 * Post ages, and the posts already opened *
 *******************************************/
const OPENED_POSTS_KEY = 'opened-posts'
const OPENED_POSTS_LIMIT = 200

// Browsers can refuse storage (private windows, blocked site data), so every
// read and write is allowed to fail
function openedPosts() {
    try {
        return JSON.parse(localStorage.getItem(OPENED_POSTS_KEY)) || []
    } catch {
        return []
    }
}

function rememberOpened(id) {
    const opened = openedPosts().filter((other) => other !== id)
    opened.push(id)
    try {
        localStorage.setItem(OPENED_POSTS_KEY, JSON.stringify(opened.slice(-OPENED_POSTS_LIMIT)))
    } catch {}
}

// "12 minutes ago" in the page's language. The server's own text stays as the
// fallback, and the full local time goes in the tooltip.
function showPostAges() {
    if (typeof Intl === 'undefined' || !Intl.RelativeTimeFormat) return

    const lang = document.documentElement.lang
    const relative = new Intl.RelativeTimeFormat(lang, { numeric: 'auto' })
    const now = Date.now()

    document.querySelectorAll('.timeline time[datetime]').forEach((time) => {
        const date = new Date(time.getAttribute('datetime'))
        const minutes = Math.round((now - date) / 60000)
        if (Number.isNaN(minutes)) return

        if (minutes < 1) time.textContent = relative.format(0, 'second')
        else if (minutes < 60) time.textContent = relative.format(-minutes, 'minute')
        else if (minutes < 60 * 24) time.textContent = relative.format(-Math.round(minutes / 60), 'hour')
        else time.textContent = relative.format(-Math.round(minutes / (60 * 24)), 'day')

        time.title = date.toLocaleString(lang, { dateStyle: 'medium', timeStyle: 'short' })
    })
}

$(() => {
    const timeline = document.querySelector('.timeline')
    if (!timeline) return

    const opened = new Set(openedPosts())
    timeline.querySelectorAll('.card[data-post]').forEach((card) => {
        card.classList.toggle('opened', opened.has(card.dataset.post))
    })

    // auxclick catches a middle click, which also opens the post
    const markOpened = (event) => {
        const card = event.target.closest('.card[data-post]')
        if (!card || (event.type === 'auxclick' && event.button !== 1)) return

        card.classList.add('opened')
        rememberOpened(card.dataset.post)
        track('Open post')
    }
    timeline.addEventListener('click', markOpened)
    timeline.addEventListener('auxclick', markOpened)

    showPostAges()
    setInterval(showPostAges, 60000)
})

/************************************
 * Script to reset the timer *
 ************************************/
window.onload = function() {
    // set the focus to the language bar
    const languageFlags = document.getElementById('languageFlags');
    if (languageFlags) {
        languageFlags.focus();
    }

    // reset the timer by clicking the icon
    var as = document.querySelectorAll('#resetLink')
    as.forEach(function(a) {
        a.onclick = function() {
            startTimer()
            return false
        }
    })
}
