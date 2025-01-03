<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\FlightController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('flights', [FlightController::class, 'index'])->name('flights.index');
Route::get('flights/{flightNumber}/choose-tier', [FlightController::class, 'show'])->name('flights.show');
Route::get('flights/booking/{flightNumber}', [BookingController::class, 'booking'])->name('booking');
Route::get('check-booking', [BookingController::class, 'checkBooking'])->name('booking.check');

Route::get('flights/booking/{flightNumber}/choose-seat', [BookingController::class, 'chooseSeat'])->name('booking.choose-seat');

Route::post('flights/booking/{flightNumber}/confirm-seat', [BookingController::class, 'confirmSeat'])->name('booking.confirm-seat');

Route::get('flights/booking/{flightNumber}/passenger-details', [BookingController::class, 'passengerDetails'])->name('booking.passenger-details');

Route::post('flights/booking/{flightNumber}/save-passenger-details', [BookingController::class, 'savePassengerDetails'])->name('booking.save-passenger-details');

Route::get('flights/booking/{flightNumber}/checkout', [BookingController::class, 'checkout'])->name('booking.checkout');

Route::post('/flights/booking/{flightNumber}/payment', [BookingController::class, 'payment'])->name('booking.payment');