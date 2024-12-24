<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\UserManagement\UserManagementController;

/**
 * Public Routes
 */
Route::get('/', function () {
    return view('pages.home.index');
})->name('index');

Route::get('/package', function () {
    return view('pages.packages.index');
})->name('packages');

Route::get('/singlepackage', function () {
    return view('pages.home.singlepackage');
})->name('singlepackage');

Route::get('/auth', function () {
    return view('common.auth');
})->name('user.auth');

/**
 * Admin Authentication Routes
 */
Route::get('/admin/login', function () {
    return view('pages.admin.auth.login');
})->name('login');

Route::post('/admin/login', [LoginController::class, 'login'])->name('admin.login.process');
Route::get('/admin/logout', [LoginController::class, 'logout'])->name('admin.logout');

/**
 * Protected Admin Routes
 */
Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('/', function () {
        return view('pages.admin.index');
    })->name('admin.dashboard');

    Route::get('/history', function () {
        return view('pages.admin.history');
    })->name('admin.history');

    Route::get('/location', function () {
        return view('pages.admin.location');
    })->name('admin.location');

    Route::get('/package-categories', function () {
        return view('pages.admin.packagecategories');
    })->name('admin.packagecategories');

    Route::get('/profile', function () {
        return view('pages.profile.index');
    })->name('admin.profile');

    Route::get('/users', function () {
        return view('pages.admin.users');
    })->name('admin.users');


        Route::get('/packages/create', [PackageController::class, 'create'])->name('admin.addpackage');
        Route::post('/packages', [PackageController::class, 'store'])->name('packages.store');
        Route::get('/packages/{package}/edit', [PackageController::class, 'edit'])->name('packages.edit');
        Route::put('/packages/{package}', [PackageController::class, 'update'])->name('packages.update');
        Route::delete('/packages/{package}', [PackageController::class, 'destroy'])->name('packages.destroy');
        Route::get('/packages', [PackageController::class, 'index'])->name('packages.index');

        Route::get('/user',[UserManagementController::class,'index'])->name('admin.user.index');


  });



Route::get('/package/{id}', [PackageController::class, 'show'])->name('package.show');
