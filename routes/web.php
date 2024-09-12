<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/projekt/58-mwp-solar-projekt-in-dautchland', function () {
    return view('58-mwp');
})->name('58-mwp');

Route::get('/projekt/65-mwp-solar-projekt-in-dautchland', function () {
    return view('65-mwp');
})->name('65-mwp');

Route::get('/projekt/727-kwp-roof-solar-projekt-in-dautchland', function () {
    return view('727-kwp');
})->name('727-kwp');

Route::get('/projekt/761-kwp-solar-projekt-in-dautchland', function () {
    return view('761-kwp');
})->name('761-kwp');

Route::get('/impressum-datenschutzerklärung', function () {
    return view('imprint');
})->name('imprint');