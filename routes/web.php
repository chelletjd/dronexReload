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

Route::get('/', function () {
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/services', function () {
    return view('services');
})->middleware('auth');

Route::get('/prices', function () {
    return view('prices');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/shipping', function () {
    return view('shipping');
});

Route::post('/shipping/store', 'ShippingsController@store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
