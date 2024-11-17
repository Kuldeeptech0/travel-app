<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

/**
 * Public Routes
 * These routes are accessible to all users without authentication.
 */
Route::get('/', function () {
    return view('pages.home.index'); // Home page view
})->name('index');

Route::get('/package', function () {
    return view('pages.packages.index'); // Package listing view
})->name('packages');

Route::get('/singlepackage', function () {
    return view('pages.home.sinlgepackage'); // singlePackage view
})->name('singlepackage');



/**
 * Admin Authentication Routes
 * Handles admin login and logout functionality.
 */
Route::get('/admin/login', function () {
    return view('pages.admin.auth.login'); // Admin login form view
})->name('login');

// Process login request
Route::post('/admin/login', [LoginController::class, 'login'])->name('admin.login.process');

// Logout route for admin
Route::get('/admin/logout', [LoginController::class, 'logout'])->name('admin.logout');

/**
 * Protected Admin Routes
 * Routes under the `/admin` prefix are only accessible to authenticated admins.
 */
Route::prefix('admin')->middleware('auth')->group(function () {
    // Admin Dashboard
    Route::get('/', function () {
        return view('pages.admin.index'); // Admin dashboard view
    })->name('admin.dashboard');

    // Admin History
    Route::get('/history', function () {
        return view('pages.admin.history'); // Admin history view
    })->name('admin.history');

    // Admin Location
    Route::get('/location', function () {
        return view('pages.admin.location');
    })->name('admin.location');

    // Admin Packages
    Route::get('/addpackage', function () {
        return view('pages.admin.addpackage');
    })->name('admin.addpackage');

    // package-categories
    Route::get('/package-categories', function () {
        return view('pages.admin.packagecategories');
    })->name('admin.packagecategories');
});



