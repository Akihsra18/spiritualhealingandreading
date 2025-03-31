<?php

use App\Http\Controllers\FormController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('akr.index');
})->name('akr.index');

Route::get('/about', function () {
    return view('akr.about');
});

Route::get('/akashic-records-reading', function () {
    return view('akr.akashic-records-reading');
});

Route::get('/chakra-reading-and-healing', function () {
    return view('akr.chakra-reading-and-healing');
});

Route::get('/higher-self-reading', function () {
    return view('akr.higher-self-reading');
});

Route::get('/seven-energy-crescent-reading', function () {
    return view('akr.seven-energy-crescent-reading');
});

Route::get('/shamanic-reading', function () {
    return view('akr.shamanic-reading');
});

Route::get('/space-healing', function () {
    return view('akr.space-healing');
});

Route::get('/tarot-card-reading', function () {
    return view('akr.tarot-card-reading');
});

Route::get('/contact', function () {
    return view('akr.contact');
})->name('contact');

Route::post('/contact', 
    [FormController::class, 'submit']
)->name('contact.submit');
