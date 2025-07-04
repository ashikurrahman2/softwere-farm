<?php

use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Admin\SeoController;
use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\RessumeController;
use App\Http\Controllers\Admin\PortfolioController;
use App\Http\Controllers\Admin\SkillController;
use App\Http\Controllers\Admin\JobpositionController;
use App\Http\Controllers\Admin\JobdetailsController;
use App\Http\Controllers\Admin\JobaplicationController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\AdminUserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\SmtpController;

Route::prefix('admin')->middleware('auth:admin', 'role:super-admin|admin')->group(function () {
    //admin.dashboard
    Route::resource('permissions',PermissionController::class);
    
    Route::resource('roles', RoleController::class);
    
    Route::get('roles/{id}/give-permissions', [RoleController::class, 'addPermissionToRole'])->name('roles.give-permissions');
    Route::put('roles/{id}/give-permissions', [RoleController::class, 'givePermissionToRole'])->name('roles.update-permissions');

    Route::resource('users',AdminUserController::class);

    Route::get('/dashboard', function () { return view('admin.dashboard'); })->name('admin.dashboard');
    Route::get('logout', [LoginController::class, 'destroy'])->name('admin.logout');
});

Route::prefix('admin')->middleware('auth:admin')->group(function () {
    //Website route
    Route::resource('service',ServiceController::class);
    Route::resource('about',AboutController::class);
    Route::resource('product',ProductController::class);
    Route::resource('banner',BannerController::class);
    Route::resource('ressume',RessumeController::class);
    Route::resource('portfolio',PortfolioController::class);
    Route::resource('skills',SkillController::class);
    Route::resource('position',JobpositionController::class);
    Route::resource('details',JobdetailsController::class);
    Route::resource('aplication',JobaplicationController::class);
    Route::patch('job-applications/{id}/approve', [JobaplicationController::class, 'approve'])->name('job.approve');
    Route::patch('job-applications/{id}/reject', [JobaplicationController::class, 'reject'])->name('job.reject');
    Route::get('/resume/download/{id}', [JobaplicationController::class, 'downloadResume'])->name('resume.download');

   
});

Route::middleware('auth:admin')->group(function() {
    //Setting Route
    Route::prefix('setting')->group(function () {
        Route::resource('seo', SeoController::class)->only(['index', 'update']);
        Route::resource('smtp', SmtpController::class)->only(['index', 'update']);
        Route::resource('website', SettingController::class)->only(['index', 'update']);
        Route::resource('page', PageController::class);
    });
});

