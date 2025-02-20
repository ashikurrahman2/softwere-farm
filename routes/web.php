<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
// Website route
Route::get('/', [FrontendController:: class, 'index'])->name('index');
Route::get('/about', [FrontendController:: class, 'About'])->name('about');
Route::get('/services', [FrontendController:: class, 'Service'])->name('service');
Route::get('/service-details/{id}', [FrontendController:: class, 'ServiceD'])->name('servicedetail');
Route::get('/Teams', [FrontendController:: class, 'Team'])->name('teams');
Route::get('/Teams-details/{id}', [FrontendController:: class, 'TeamD'])->name('teamdetail');
Route::get('/contacts', [FrontendController:: class, 'Communicate'])->name('contact');
Route::get('/case-study', [FrontendController:: class, 'Case'])->name('cdetails');
Route::get('/faq', [FrontendController:: class, 'FAQ'])->name('frequnt');
Route::get('/terms-condition', [FrontendController:: class, 'Terms'])->name('terms');
Route::get('/privacy-policy', [FrontendController:: class, 'Policy'])->name('policies');
Route::get('/career', [FrontendController:: class, 'Career'])->name('career');
Route::get('/career-details/{id}', [FrontendController::class, 'CareerD'])->name('careerd');
Route::get('/job-form', [FrontendController::class, 'AplicationForm'])->name('apply');
Route::post('/job-form', [FrontendController::class, 'AplicationForm'])->name('apply');




// Dashboard route
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

require __DIR__.'/admin-auth.php';
require __DIR__.'/admin-dashboard.php';
require __DIR__.'/user.php';

