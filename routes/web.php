<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () use ($routes) {
    return view('home');
})->name('home');

Route::get('/tracker', function () use ($routes) {
    return view('tracker');
})->name('tracker');
