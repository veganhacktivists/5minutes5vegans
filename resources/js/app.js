/**
 * First, we will load all of this project's Javascript utilities and other
 * dependencies. Then, we will be ready to develop a robust and powerful
 * application frontend using useful Laravel and JavaScript libraries.
 */

require('./bootstrap');

var startTime, timerInterval;
$(() => {
    startTime = Date.now();
    timerInterval = setInterval(updateTimer, 1000);
});

function updateTimer() {

    var time = new Date(5 * 60 * 1000 + startTime - Date.now())
    $('.timer-display').html(time.getMinutes() + ':' + time.getSeconds());

}
