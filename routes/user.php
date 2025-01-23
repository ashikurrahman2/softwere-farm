<?php

use App\Http\Controllers\User\UserController;
// use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function () {
    // Profile route
    Route::get('/profile', [UserController::class, 'index'])->name('profile');
    // Route::post('/profile/update-image', [ProfileController::class, 'updateProfileImage'])->name('profile.update.image');
    // Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');


});
