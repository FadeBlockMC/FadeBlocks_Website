<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('rules/home', function () {
    return view('rules/home');
});

Route::get('/leaderboards/skyblock', function () {
    return view('leaderboards/skyblock');
});

Route::get('/leaderboards/survival', function () {
    return view('leaderboards/survival');
});

Route::get('/forumpage', function () {
    return view('forumpage');
});

Route::get('/createforum', function () {
    return view('createforum');
});