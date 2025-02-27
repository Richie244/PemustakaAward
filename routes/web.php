<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('leaderboard');
})->name('leaderboard');

// Route::get('/leaderboard', function () {
//     return view('leaderboard');
// })->name('leaderboard');

Route::get('/profile', function () {
    return view('profile');
})->name('profile');

Route::get('/reward', function () {
    return view('reward');
})->name('reward');

Route::get('/kegiatan', function () {
    return view('kegiatan');
})->name('kegiatan');

Route::get('/riwayatkegiatan', function () {
    return view('riwayatkegiatan');
})->name('riwayatkegiatan');

Route::get('/aksara', function () {
    return view('aksaradinamika');
})->name('aksara');

Route::get('/formaksaradinamika', function () {
    return view('formaksaradinamika');
})->name('formaksaradinamika');