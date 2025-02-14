<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

// Diák létrehozása - ezt bárki láthatja
Route::get('/students/create', [StudentController::class, 'create'])->name('students.create');

// Csak bejelentkezett felhasználók férhetnek hozzá a többi route-hoz
Route::middleware(['auth'])->group(function () {
    Route::resource('/students', StudentController::class)->except(['create']);
    Route::get('/student/export', [StudentController::class, 'export'])->name('student.export');
});

Auth::routes();

Auth::routes(['register' => false]); // Kikapcsolja a nyilvános regisztrációt

Route::middleware(['auth'])->group(function () {
    Route::get('/register', [App\Http\Controllers\Auth\RegisterController::class, 'showRegistrationForm'])->name('register');
    Route::post('/register', [App\Http\Controllers\Auth\RegisterController::class, 'register']);
});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('user.home');
