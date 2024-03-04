<?php

use App\Http\Controllers\AdminController;
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

Route::get('/', [ClientController::class, 'homepage'])->name('home');
Route::get('/janta-darbar', [ClientController::class, 'janta'])->name('janta');
Route::get('/election-rally-view', [ClientController::class, 'rally'])->name('rally');
Route::get('/staff-profile', [ClientController::class, 'staff'])->name('staff');
Route::get('/upcoming-event', [ClientController::class, 'upcoming_event'])->name('upcoming_event');


Route::get('/admin', [AdminController::class, 'login'])->name('admin_login');
Route::post('/admin', [AdminController::class, 'login_auth'])->name('admin_login_auth');

Route::group(['prefix' => 'admin'], function () {

    Route::middleware('adminlogin')->group(function () {
        
        Route::get('janta', [AdminController::class, 'janta'])->name('admin_janta');
        Route::get('rally', [AdminController::class, 'rally'])->name('admin_rally');
        Route::get('staff', [AdminController::class, 'staff'])->name('admin_staff');
        Route::get('upcoming_event', [AdminController::class, 'upcoming_event'])->name('admin_upcoming_event');

        // post route

        Route::post('/add-janta', [AdminController::class, 'add_janta_darbar'])->name('admin_add_janta_darbar');
        Route::post('/add-rally', [AdminController::class, 'add_rally'])->name('admin_add_rally');
        Route::post('/add-contact-person', [AdminController::class, 'add_contact_person'])->name('admin_add_contact_person');
        Route::post('/add-upcomming-event', [AdminController::class, 'add_upcomming_event'])->name('admin_add_upcomming_event');
    });
});

