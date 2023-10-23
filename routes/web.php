<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RendezVousController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/rendez-vous',[RendezVousController::class, 'index']);
Route::post('/rendez-vous',[RendezVousController::class, 'create']);

/* Dashboard */
Route::middleware(['auth'])->group(function () {
    Route::get('/admin/dashboard', [DashboardController::class, 'index']);
    Route::get('/admin/dashboard/reservation/{id}', [DashboardController::class, 'showReservation']);
});
Auth::routes();

