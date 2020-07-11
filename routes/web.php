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

/*
*   Home
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/inicio', function () {
    return view('home');
});

/*
*   Mail
*/

Route::post('send/email', 'MailController@sendemail');




/*
*   Portafolio
*/
Route::get('/event', function () {
    return view('eventhome');
});

Route::get('/ecommerce', function () {
    return view('ecommerce');
});


/*
*   Encuesta
*/
Route::get('/encuesta', function () {
    return view('encuesta/encuesta');
});

Route::get('/askOne', function () {
    return view('encuesta/askOne');
});

Route::get('/askTwo', function () {
    return view('encuesta/askTwo');
});

Route::get('/askThree', function () {
    return view('encuesta/askThree');
});

Route::get('/askFour', function () {
    return view('encuesta/askFour');
});

Route::get('/askFive', function () {
    return view('encuesta/askFive');
});

Route::get('/tranks', function () {
    return view('encuesta/tranks');
});