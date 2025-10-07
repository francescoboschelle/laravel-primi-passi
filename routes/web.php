<?php

use Illuminate\Support\Facades\Route;

$framework = "Laravel 12";

Route::get('/', function () use ($framework) {
    return view('home', compact("framework"));
})->name("home");

Route::get('/about', function () use ($framework) {
    return view('about', compact("framework"));
})->name("about");
