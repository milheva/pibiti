<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/categories', function () {
    return view('category.index');
});

Route::get('/categories/create', function () {
    return view('category.create');
});
