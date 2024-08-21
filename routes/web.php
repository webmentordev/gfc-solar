<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/projekt/50-mw-solar-projekt-in-dautchland', function () {
    return view('50-mw');
})->name('50-mw');

Route::get('/projekt/65-mw-solar-projekt-in-dautchland', function () {
    return view('65-mw');
})->name('65-mw');

Route::get('/projekt/730-kw-roof-solar-projekt-in-dautchland', function () {
    return view('730-kw');
})->name('730-kw');

Route::get('/projekt/750-kw-solar-projekt-in-dautchland', function () {
    return view('750-kw');
})->name('750-kw');

Route::get('/impressum-datenschutzerklärung', function () {
    return view('imprint');
})->name('imprint');
