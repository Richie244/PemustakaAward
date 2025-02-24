<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('leaderboard');
})->name('leaderboard');

Route::get('/profile', function () {
    return view('profile');
})->name('profile');

Route::get('/reward', function () {
    return view('reward');
})->name('reward');

Route::get('/kegiatan', function () {
    return view('kegiatan');
})->name('kegiatan');

Route::get('/aksara', function () {
    return view('aksara');
})->name('aksara');
