<?php

use App\Http\Controllers\System\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.index');
});

Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/services', function () {
    return view('pages.services');
});

Route::get('/portfolio', function () {
    return view('pages.portfolio');
});

Route::get('/blog', function () {
    return view('pages.blog');
});

Route::get('/contact', function () {
    return view('pages.contact');
});


Route::get('system/home',[HomeController::class, 'index'])->name('admin.home');
