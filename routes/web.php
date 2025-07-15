<?php

use Illuminate\Support\Facades\Route;

$routes = [
    'test',
];

Route::get('/', function () {
    return view('home');
})->name('home');

foreach ($routes as $route) {
    Route::get("/{$route}", function () use ($route) {
        return view($route);
    })->name($route);
}
