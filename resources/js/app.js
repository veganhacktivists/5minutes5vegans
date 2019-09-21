/**
 * First, we will load all of this project's Javascript utilities and other
 * dependencies. Then, we will be ready to develop a robust and powerful
 * application frontend using useful Laravel and JavaScript libraries.
 */

require('./bootstrap');


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



/************
 * VERBIAGE *
 ************/

$(() => {
    $('.verbiage-link').click(function(e){
        console.log(e);
        $('.verbiage-message').val(e.currentTarget.dataset.verbiage);
    });
});
