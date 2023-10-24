<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RendezVousController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/rendez-vous',[RendezVousController::class, 'index']);
Route::post('/rendez-vous',[RendezVousController::class, 'create']);

/* Dashboard */
Route::middleware(['auth'])->group(function () {
    Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/admin/dashboard/reservation/{id}', [DashboardController::class, 'showReservation']);
    Route::put('/confirme', [DashboardController::class, 'confirme']);
    Route::delete('/delete/{id}', [DashboardController::class, 'destroy']);
});
Auth::routes();

