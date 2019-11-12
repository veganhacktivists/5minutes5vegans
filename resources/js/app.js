/**
 * First, we will load all of this project's Javascript utilities and other
 * dependencies. Then, we will be ready to develop a robust and powerful
 * application frontend using useful Laravel and JavaScript libraries.
 */

require('./bootstrap');
window.Vue = require('vue');
require('vue-resource');
require('fontawesome-iconpicker');
import Swiper from 'swiper';
import Clipboard from 'v-clipboard';

/*********
 * TIMER *
 *********/

var startTime, timerInterval;
$(() => {
    startTimer();
    $('.timer-restart').click(startTimer);

});

function setTimer(minutes, seconds){
    $('.timer-display .minutes').html(minutes)
    $('.timer-display .seconds').html(seconds)
}

function startTimer() {

    startTime = Date.now();
    timerInterval = setInterval(updateTimer, 1000);
    // $('.timer-display').html('5:00')
    setTimer('05', '00')
    $('.timer-complete').hide(400);
    $('.timer-section').show(400);
}

function updateTimer() {

    var timestamp = 5 * 60 * 1000 + startTime - Date.now();
    if( timestamp < 0 ) {
        clearInterval( timerInterval );
        $('.timer-section').hide(400);
        $('.timer-complete').show(400);
        return;
    }

    var time = new Date(timestamp)
    // $('.timer-display').html(time.getMinutes() + ':' + ('0'+ time.getSeconds()).substr(-2));
    setTimer(('0'+ time.getMinutes()).substr(-2), ('0'+ time.getSeconds()).substr(-2))

}

Vue.use(Clipboard)

Vue.component('verbiages', require('./components/Verbiages.vue').default)

// Register CSRF token for use with vue-resource
let token = document.head.querySelector('meta[name="csrf-token"]');

if (token) {
    Vue.http.interceptors.push((request, next) => {
        request.headers.set('X-CSRF-TOKEN', token.content);
        next();
    });
} else
    console.error('CSRF token not found: https://laravel.com/docs/csrf#csrf-x-csrf-token');

$(() => {
    bindLanguageSelector();
    initializeMdForm();
    new Vue({ el: 'verbiages' });
});

/*********************
 * Language Selector *
 *********************/

function bindLanguageSelector(){
    const $languageDropdown = $('.lang-selector-dropdown');

    //  without the timeout it can happen that the dropdown closes before the anchor can be clicked
    $languageDropdown.on('blur', () =>
        setTimeout(() => $languageDropdown.hide(), 100)
    );

    $('.lang-selector-container').click(e => {
        e.preventDefault();
        $languageDropdown.show().focus();
    });
}

/******************
 * MD Form Helper *
 ******************/
function initializeMdForm () {
    $('.form-control-md').blur((event) => {
        if ($(event.target).val()) {
            $(event.target).addClass('has-value');
        } else {
            $(event.target).removeClass('has-value');
        }
    });
}

/******************************
 * SwiperJS for the feed page *
 ******************************/
$(() => {
    window.mySwiper = new Swiper ('.swiper-container', {
        direction: 'horizontal',
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
            renderBullet: function (index, className) {
                return '<span class="swirvy-box ' + className + '">' + ((index === 0) ? "Resources" : "Feed") + '</span>';
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
                spaceBetween: 10
            },
            767: {
                slidesPerView: 2,
                spaceBetween: 0
            }
        },
        watchOverflow: true
    });

    // Start on the twitter slide in mobile view
    window.mySwiper.slideTo(2, false,false);
});
