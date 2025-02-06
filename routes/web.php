<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});


// rules

Route::get('/rules', function () {
    return view('rules.home');
});

Route::get('/rules/network', function () {
    return view('rules.network');
});

Route::get('/rules/skyblock', function () {
    return view('rules.skyblock');
});

Route::get('/rules/allowed-modifications', function () {
    return view('rules.allowed-modifications');
});

Route::get('/rules/forum', function () {
    return view('rules.forum-rules');
});

