<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Auth\EmailVerificationRequest;

Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

// Diák létrehozása - ezt bárki láthatja
Route::get('/students/create', [StudentController::class, 'create'])->name('students.create');
Route::post('/students/store', [StudentController::class, 'store'])->name('students.store');

Auth::routes(['register' => false]); // Kikapcsolja a nyilvános regisztrációt

// Csak bejelentkezett felhasználók férhetnek hozzá a többi route-hoz
Route::middleware(['auth'])->group(function () {
    Route::resource('/students', StudentController::class)->except(['create', 'store']);
    Route::get('/student/export', [StudentController::class, 'export'])->name('student.export');

    Route::get('/register', [App\Http\Controllers\Auth\RegisterController::class, 'showRegistrationForm'])->name('register');
    Route::post('/register', [App\Http\Controllers\Auth\RegisterController::class, 'register']);

    Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('user.home');

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {

$request->fulfill();



return redirect('/home');

})->middleware(['auth', 'signed'])->name('verification.verify');

// Minden más nem létező útvonal átirányítása a főoldalra
Route::fallback(function () {
    return redirect()->route('home');
});
