<?php

use Illuminate\Support\Facades\Route;

// Redirect / to Dutch home page
Route::get('/', function () {
    return redirect('/home/nl');
});

// Redirect /nl to Dutch home page
Route::get('/nl', function () {
    return redirect('/home/nl');
});

// Redirect /en to English home page
Route::get('/en', function () {
    return redirect('/home/en');
});

// Check language for home page
Route::get('/home/{locale}', function (string $locale) {
    if (! in_array($locale, ['en', 'nl'])) {
        abort(400);
    }
 
    App::setLocale($locale);
    
    // Home page
    return view('home');
});