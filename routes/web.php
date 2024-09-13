<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\AdminController;
Use App\Http\Controllers\AuthController;
Use Illuminate\Support\Facades\Auth;


Route::get('/', [HomeController::class,'index'])->name('home'); 
Route::get('/events/{event}',[EventController::class,'show'])->name('events.show');
Route::get('/events/{event}/book',[BookingController::class,'store'])->name('events.book');

Route::middleware('auth','admin')->group(function() {
Route::get('/admin/dashboard',[AdminController::class,'dashboard'])->name('admin.dashboard');
Route::resource('admin/events',EventController::class);
});


// Authentication Routes
Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('login', [AuthController::class, 'login']);
Route::post('logout', [AuthController::class, 'logout'])->name('logout');

// Admin Routes
Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {
    Route::get('/events', [AdminController::class, 'index'])->name('admin.events.index');
    Route::get('/events/create', [AdminController::class, 'create'])->name('admin.events.create');
    Route::post('/events', [AdminController::class, 'store'])->name('admin.events.store');
    Route::get('/events/{event}/edit', [AdminController::class, 'edit'])->name('admin.events.edit');
    Route::put('events/{event}', [AdminController::class, 'update'])->name('admin.events.update');
    Route::delete('/events/{event}', [AdminController::class, 'destroy'])->name('admin.events.destroy');
    Route::get('/bookings', [AdminController::class, 'viewBookings'])->name('admin.bookings');
});

// Event Routes
Route::get('/', [EventController::class, 'index'])->name('events.index');
Route::get('/events/{event}', [EventController::class, 'show'])->name('events.show');

// Booking Routes
Route::middleware('auth')->post('/events/{event}/book', [BookingController::class, 'store'])->name('events.book');


