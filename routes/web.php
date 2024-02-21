<?php

use App\Http\Controllers\ClientController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [ClientController::class , 'homepage'])->name('home');
Route::get('/janta-darbar', [ClientController::class , 'janta'])->name('janta');
Route::get('/election-rally-view', [ClientController::class , 'rally'])->name('rally');
Route::get('/staff-profile', [ClientController::class , 'staff'])->name('staff');
Route::get('/upcoming-event', [ClientController::class , 'upcoming_event'])->name('upcoming_event');