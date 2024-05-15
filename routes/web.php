<?php

use Illuminate\Support\Facades\Route;

Route::get('/welcome', function () {
    return view('Tugas.welcome');
});

Route::get('home', function () {
    return view('Tugas.home');
});

Route::get('form', function () {
    return view('Tugas.form');
});

Route::get('/', function () {
    return view('dasboard');
});

Route::get('icon', function () {
    return view('icon');
});

Route::get('dasboard', function () {
    return view('dasboard');
});

Route::get('notification', function () {
    return view('notification');
});

Route::get('user', function () {
    return view('user');
});