<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

//Route::get('/students', [StudentController::class, 'create'])->name('student.create');
//Route::post('/students', [StudentController::class, 'store'])->name('student.store');
Route::resource('/students', StudentController::class)
    ->name('index', 'student.index')
    ->name('create', 'student.create')
    ->name('store', 'student.store')
    ->name('destroy', 'student.delete');

    Route::get('/user/{id}', function (string $id) {
    return 'User '.$id;
});

Auth::routes();

Route::get('/profile', [App\Http\Controllers\HomeController::class, 'index'])->name('profile');
