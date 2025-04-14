<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;

Route::get('/about', [ \App\Http\Controllers\motoren::class, 'index'])->name('about');

Route::get('/projects/add', [ProjectController::class, 'add'])->name('project.add');

Route::get('/detail', [ \App\Http\Controllers\DetailpageController::class, 'index'])->name('detail');

Route::get('/main', [ \App\Http\Controllers\MainpageController::class, 'index'])->name('main');

Route::get('/welcome', [ \App\Http\Controllers\WelcomepageController::class, 'index'])->name('welcome');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
