<?php

use App\Http\Controllers\AlternativeController;
use App\Http\Controllers\NormalizationController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WeightController;
use App\Http\Controllers\ResultController;
use App\Http\Controllers\Auth\SocialiteController;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Alternative
Route::get('/alternative', [AlternativeController::class, 'index']) -> name('alternative');

// Create Alternative
Route::get('/alternatives/create', [AlternativeController::class, 'create']) -> name('create-alternative');

// Execute Create
Route::post('/alternatives', [AlternativeController::class,'store']) -> name('store-alternative');

// Edit Alternative
Route::get('/alternatives/{alternative}/edit', [AlternativeController::class, 'edit']) -> name('edit-alternative');

// Execute Update
Route::put('/alternatives/{alternative}', [AlternativeController::class, 'update']) -> name('update-alternative');

// Delete Alternative
Route::delete('alternatives/{alternative}', [AlternativeController::class, 'destroy'])->name('destroy');

// Weight
Route::get('/weight', [WeightController::class, 'index']) -> name('weight');

// Edit Weight
Route::get('/weights/{weight}/edit', [WeightController::class, 'edit']) -> name('edit-weight');

// Execute Update
Route::put('/weights/{weight}', [WeightController::class, 'update']) -> name('update-weight');



// Normalization
Route::get('/normalization', [NormalizationController::class, 'index']) -> name('normalization');

// Result
Route::get('/result', [ResultController::class, 'index']) -> name('result');

// Google Login
Route::get('auth/google', [SocialiteController::class, 'redirectToGoogle']);

Route::get('auth/google/callback', [SocialiteController::class, 'handleGoogleCallback']);

require __DIR__.'/auth.php';


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
