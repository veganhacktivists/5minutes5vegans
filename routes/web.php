<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/twitteroauth', 'OauthController@index')->name('twitteroauth');
Route::post('/twitteroauth', 'OauthController@verify')->name('twitteroauth.verify');

Route::group( [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath'],
    ], function () {

        Auth::routes();

        Route::get('/', 'LandingController@index')->name('landing');
        Route::get('/feed', 'FeedController@index')->name('feed');

        Route::get('/tweet', 'TweetController@tweet');
        Route::get('/tweets', 'TweetController@tweets');

        Route::get('/login', function () {
            return redirect()->route('register', ['login' => true]);
        })->name('login');
    });

Route::middleware( [ 'auth', 'ownsVerbiage' ] )->group(function () {
    Route::resource( 'verbiage', 'verbiageController' )->only( 'store', 'update', 'destroy' );
});
