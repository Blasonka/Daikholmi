<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/form', function () {
    return view('form');
})->name('form');

Route::post('/form', [StudentController::class, 'store'])->name('student.store');

Auth::routes();

Route::get('/profile', [App\Http\Controllers\HomeController::class, 'index'])->name('profile');
