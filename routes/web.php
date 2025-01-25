<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Front\ViewsController;
use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
//    return view('home');
//});

Route::prefix('/')->group(function () {

    Route::get('/', [ViewsController::class, 'home'])->name('front.home.view');
    // Home
    Route::get('/resume', [ViewsController::class, 'resume'])->name('front.resume.view');
    // About
    Route::get('/jobss', [ViewsController::class, 'jobs'])->name('front.jobs.view');
    // Works

});
// Route Front


//Route::get('/dashboard', function () {
//    return view('dashboard');
//})->middleware(['auth', 'verified'])->name('dashboard');
// Dash Middleware

//Route::get('/jobs', function () {
//    return view('jobs');
//})->middleware(['auth', 'verified'])->name('jobs');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/jobs', function () {
        return view('jobs');
    })->name('jobs');
});
// Dash Middleware


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
// Auth Middleware


require __DIR__.'/auth.php';
// Require Auth
