<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::prefix('Admin/customers/')->group(function(){
    Route::get('/', [\App\Http\Controllers\CustomerController::class, 'index'])->name('customers.index');
    Route::delete('/{customer}', [\App\Http\Controllers\CustomerController::class, 'destroy'])->name('customers.destroy');
});

Route::prefix('Admin/staffs/')->group(function(){
    Route::get('/', [\App\Http\Controllers\StaffController::class, 'index'])->name('staffs.index');
    Route::get('/create', [\App\Http\Controllers\StaffController::class, 'create'])->name('staffs.create');
    Route::post('/create', [\App\Http\Controllers\StaffController::class, 'store'])->name('staffs.store');
    Route::get('/{staff}/edit', [\App\Http\Controllers\StaffController::class, 'edit'])->name('staffs.edit');
    Route::put('/{staff}/edit', [\App\Http\Controllers\StaffController::class, 'update'])->name('staffs.update');
    Route::delete('/{staff}', [\App\Http\Controllers\StaffController::class, 'destroy'])->name('staffs.destroy');

});

Route::prefix('Admin/pitches/')->group(function(){
    Route::get('/', [\App\Http\Controllers\PitchController::class, 'index'])->name('pitches.index');
    Route::get('/create', [\App\Http\Controllers\PitchController::class, 'create'])->name('pitches.create');
    Route::post('/create', [\App\Http\Controllers\PitchController::class, 'store'])->name('pitches.store');
    Route::get('/{pitch}/edit', [\App\Http\Controllers\PitchController::class, 'edit'])->name('pitches.edit');
    Route::put('/{pitch}/edit', [\App\Http\Controllers\PitchController::class, 'update'])->name('pitches.update');
    Route::delete('/{pitch}/destroy', [\App\Http\Controllers\PitchController::class, 'destroy'])->name('pitches.destroy');

});

Route::prefix('Admin/pitch_types/')->group(function(){
    Route::get('/', [\App\Http\Controllers\PitchTypeController::class, 'index'])->name('pitch_types.index');
    Route::get('/create', [\App\Http\Controllers\PitchTypeController::class, 'create'])->name('pitch_types.create');
    Route::post('/create', [\App\Http\Controllers\PitchTypeController::class, 'store'])->name('pitch_types.store');
    Route::get('/{pitchType}/edit', [\App\Http\Controllers\PitchTypeController::class, 'edit'])->name('pitch_types.edit');
    Route::put('/{pitchType}/edit', [\App\Http\Controllers\PitchTypeController::class, 'update'])->name('pitch_types.update');
    Route::delete('/{pitchType}/destroy', [\App\Http\Controllers\PitchTypeController::class, 'destroy'])->name('pitch_types.destroy');
});

Route::prefix('Admin/timelines/')->group(function(){
    Route::get('/', [\App\Http\Controllers\TimelineController::class, 'index'])->name('timelines.index');
    Route::get('/create', [\App\Http\Controllers\TimelineController::class, 'create'])->name('timelines.create');
    Route::post('/create', [\App\Http\Controllers\TimelineController::class, 'store'])->name('timelines.store');
    Route::get('/{timeline}/edit', [\App\Http\Controllers\TimelineController::class, 'edit'])->name('timelines.edit');
    Route::put('/{timeline}/edit', [\App\Http\Controllers\TimelineController::class, 'update'])->name('timelines.update');
    Route::delete('/{timeline}/destroy', [\App\Http\Controllers\TimelineController::class, 'destroy'])->name('timelines.destroy');

});

Route::prefix('Admin/bookings/')->group(function(){
    Route::get('/', [\App\Http\Controllers\BookingController::class, 'index'])->name('bookings.index');
    Route::get('/create', [\App\Http\Controllers\BookingController::class, 'create'])->name('bookings.create');
    Route::post('/create', [\App\Http\Controllers\BookingController::class, 'store'])->name('bookings.store');
    Route::get('/{booking_id}/edit', [\App\Http\Controllers\BookingController::class, 'edit'])->name('bookings.edit');
    Route::put('/{booking_id}/edit', [\App\Http\Controllers\BookingController::class, 'update'])->name('bookings.update');
    Route::delete('/{booking_id}/destroy', [\App\Http\Controllers\BookingController::class, 'destroy'])->name('bookings.destroy');

});

//Route::prefix('Admin/login/')->group(function(){
//    Route::get('/login', [\App\Http\Controllers\Admin\LoginController::class, 'login'])->name('users.login');
//    Route::post('/login', [\App\Http\Controllers\Admin\LoginController::class, 'loginProcess'])->name('user.loginProcess');
//    Route::get('/logout', [\App\Http\Controllers\Admin\LoginController::class, 'logout'])->name('user.logout');
//});
