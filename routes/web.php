<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
//use Illuminate\Support\Facades\Log;

Route::get('/{locale}', function ($locale) {
    App::setLocale($locale);
    return view('app');
});

Route::get('/', function () {
    App::setLocale('ua');
    return view('app');
});

