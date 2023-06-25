<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DriverController;
use App\Http\Controllers\VehicleController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SubordinatesController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('auth')->group(function () {
    Route::post('/export-to-excel', function () {
        return "hello export";
    })->name('export-to-excel');
});


Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'create'])->name('dashboard');
});

Route::middleware('auth')->group(function () {
    Route::get('/booking/{id}', [BookingController::class, 'create'])->name(('booking.edit'));
    Route::post('/booking', [BookingController::class, 'store'])->name('booking.store');
});

Route::middleware('auth')->group(function () {
    Route::get('/subordinates', [SubordinatesController::class, 'create'])->name('subordinates');
    Route::patch('/subordinates', [SubordinatesController::class, 'update'])->name('subordinates.update');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::middleware('auth')->group(function () {
    Route::get('/driver', [DriverController::class, 'create'])->name('driver');
    Route::patch('/driver', [DriverController::class, 'edit'])->name('driver.edit');
    Route::post('/driver', [DriverController::class, 'store'])->name('driver.store');
    Route::delete('/driver', [DriverController::class, 'destroy'])->name('driver.delete');
});

Route::middleware('auth')->group(function () {
    Route::get('/vehicle', [VehicleController::class, 'create'])->name('vehicle');
    Route::patch('/vehicle', [VehicleController::class, 'edit'])->name('vehicle.edit');
    Route::post('/vehicle', [VehicleController::class, 'store'])->name('vehicle.store');
    Route::delete('/vehicle', [VehicleController::class, 'destroy'])->name('vehicle.delete');
});


require __DIR__ . '/auth.php';
