<?php

use Illuminate\Support\Facades\Route;

$routes = [
    'test',
];

$routes = [
    'howdy',
    'projects',
    'contact',
    'resume',
];

Route::get('/', function () use ($routes) {
    return view('template', [
        'title' => 'Home',
        'routes' => $routes
    ]);
})->name('home');

foreach ($routes as $route) {
    Route::get("/$route", function () use ($routes, $route) {
        return view('template', [
            'title' => ucfirst($route),
            'routes' => $routes
        ]);
    })->name($route);
}
