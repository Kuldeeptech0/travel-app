<?php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\Admin\LeadController;


Route::get('/', [HomeController::class, 'index']);
Route::get('/packages', [PackageController::class, 'index'])->name('packages.index');
Route::get('/packages/{id}', [PackageController::class, 'show'])->name('packages.show');
Route::get('/booking', [BookingController::class, 'index'])->name('booking.index');

// Admin routes
Route::prefix('admin')->group(function () {
    Route::get('/leads', [LeadController::class, 'index'])->name('admin.leads.index');
    Route::get('/leads/{id}', [LeadController::class, 'show'])->name('admin.leads.show');
});
