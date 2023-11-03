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

Route::middleware('checkLoginStaff')->prefix('Admin/customers/')->group(function(){
    Route::get('/', [\App\Http\Controllers\CustomerController::class, 'index'])->name('customers.index');
    Route::delete('/{customer}', [\App\Http\Controllers\CustomerController::class, 'destroy'])->name('customers.destroy');
});

Route::middleware('checkLoginStaff')->prefix('Admin/staffs/')->group(function(){
    Route::get('/', [\App\Http\Controllers\StaffController::class, 'index'])->name('staffs.index');
    Route::get('/create', [\App\Http\Controllers\StaffController::class, 'create'])->name('staffs.create');
    Route::post('/create', [\App\Http\Controllers\StaffController::class, 'store'])->name('staffs.store');
    Route::get('/{staff}/edit', [\App\Http\Controllers\StaffController::class, 'edit'])->name('staffs.edit');
    Route::put('/{staff}/edit', [\App\Http\Controllers\StaffController::class, 'update'])->name('staffs.update');
    Route::delete('/{staff}', [\App\Http\Controllers\StaffController::class, 'destroy'])->name('staffs.destroy');

});

Route::middleware('checkLoginStaff')->prefix('Admin/pitches/')->group(function(){
    Route::get('/', [\App\Http\Controllers\PitchController::class, 'index'])->name('pitches.index');
    Route::get('/create', [\App\Http\Controllers\PitchController::class, 'create'])->name('pitches.create');
    Route::post('/create', [\App\Http\Controllers\PitchController::class, 'store'])->name('pitches.store');
    Route::get('/{pitch}/edit', [\App\Http\Controllers\PitchController::class, 'edit'])->name('pitches.edit');
    Route::put('/{pitch}/edit', [\App\Http\Controllers\PitchController::class, 'update'])->name('pitches.update');
    Route::delete('/{pitch}/destroy', [\App\Http\Controllers\PitchController::class, 'destroy'])->name('pitches.destroy');

});

Route::middleware('checkLoginStaff')->prefix('Admin/pitch_types/')->group(function(){
    Route::get('/', [\App\Http\Controllers\PitchTypeController::class, 'index'])->name('pitch_types.index');
    Route::get('/create', [\App\Http\Controllers\PitchTypeController::class, 'create'])->name('pitch_types.create');
    Route::post('/create', [\App\Http\Controllers\PitchTypeController::class, 'store'])->name('pitch_types.store');
    Route::get('/{pitchType}/edit', [\App\Http\Controllers\PitchTypeController::class, 'edit'])->name('pitch_types.edit');
    Route::put('/{pitchType}/edit', [\App\Http\Controllers\PitchTypeController::class, 'update'])->name('pitch_types.update');
    Route::delete('/{pitchType}/destroy', [\App\Http\Controllers\PitchTypeController::class, 'destroy'])->name('pitch_types.destroy');


});

Route::middleware('checkLoginStaff')->prefix('Admin/timelines/')->group(function(){
    Route::get('/', [\App\Http\Controllers\TimelineController::class, 'index'])->name('timelines.index');
    Route::get('/create', [\App\Http\Controllers\TimelineController::class, 'create'])->name('timelines.create');
    Route::post('/create', [\App\Http\Controllers\TimelineController::class, 'store'])->name('timelines.store');
    Route::get('/{timeline}/edit', [\App\Http\Controllers\TimelineController::class, 'edit'])->name('timelines.edit');
    Route::put('/{timeline}/edit', [\App\Http\Controllers\TimelineController::class, 'update'])->name('timelines.update');
    Route::delete('/{timeline}/destroy', [\App\Http\Controllers\TimelineController::class, 'destroy'])->name('timelines.destroy');

});

Route::middleware('checkLoginStaff')->prefix('Admin/bookings/')->group(function(){
    Route::get('/', [\App\Http\Controllers\BookingController::class, 'index'])->name('bookings.index');
    Route::get('/create', [\App\Http\Controllers\BookingController::class, 'create'])->name('bookings.create');
    Route::post('/create', [\App\Http\Controllers\BookingController::class, 'store'])->name('bookings.store');
    Route::get('/{booking_id}/edit', [\App\Http\Controllers\BookingController::class, 'edit'])->name('bookings.edit');
    Route::put('/{booking_id}/edit', [\App\Http\Controllers\BookingController::class, 'update'])->name('bookings.update');

    Route::get('/{booking_id}/booking_details', [\App\Http\Controllers\BookingController::class, 'detail'])->name('bookings.detail');
    Route::get('{booking_id}/confirm', [\App\Http\Controllers\BookingController::class, 'confirm'])->name('bookings.confirm');
    Route::get('{booking_id}/inProgess', [\App\Http\Controllers\BookingController::class, 'inProgess'])->name('bookings.inProgess');
    Route::get('{booking_id}/completeBooking', [\App\Http\Controllers\BookingController::class, 'completeBooking'])->name('bookings.completeBooking');
    Route::get('{booking_id}/cancelBooking', [\App\Http\Controllers\BookingController::class, 'cancelBooking'])->name('bookings.cancelBooking');

    Route::get('/getPitch/{id}',[\App\Http\Controllers\BookingController::class, 'getPitch'])->name('bookings.getPitch');
});

Route::middleware('checkLoginStaff')->get('Admin/dashboard',[\App\Http\Controllers\DashBoardController::class, 'index'] )->name('dashboard.index');

Route::prefix('Client/')->group(function(){
    Route::get('index',[\App\Http\Controllers\ClientIndexController::class, 'index'] )->name('client.index');
    Route::get('about',[\App\Http\Controllers\ClientAboutController::class, 'index'] )->name('client.about');
    Route::get('contact',[\App\Http\Controllers\ClientContactController::class, 'index'] )->name('client.contact');

    Route::get('booking',[\App\Http\Controllers\ClientBookingController::class, 'create'] )->name('client.booking');
    Route::post('booking',[\App\Http\Controllers\ClientBookingController::class, 'store'] )->name('booking.store');
    Route::get('booking/getPitch/{id}',[\App\Http\Controllers\ClientBookingController::class, 'getPitch'])->name('booking.getPitch');

    Route::get('news',[\App\Http\Controllers\ClientNewsController::class, 'index'] )->name('client.news');

    Route::get('/searchBooking', [\App\Http\Controllers\ClientIndexController::class, 'searchBooking'])->name('client.searchBooking');
    Route::post('/searchBookingProcess', [\App\Http\Controllers\ClientIndexController::class, 'searchBookingProcess'])->name('client.searchBookingProcess');
});

Route::prefix('Client')->group(function(){
    Route::get('/login', [\App\Http\Controllers\StaffController::class, 'login'])->name('staffs.login');
    Route::post('/login', [\App\Http\Controllers\StaffController::class, 'loginProcess'])->name('staffs.loginProcess');
    Route::get('/logout', [\App\Http\Controllers\StaffController::class, 'logout'])->name('staffs.logout');
});
