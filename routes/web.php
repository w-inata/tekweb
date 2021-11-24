<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\TamuController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\ResepsionisController;
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

Route::get('/', [LandingController::class, 'index']);
Route::get('/room', [LandingController::class, 'room']);
Route::get('/gallery', [LandingController::class, 'gallery']);
Route::get('/contact', [LandingController::class, 'contact']);

Route::get('/booking', [LandingController::class, 'booking'])->middleware(['auth'])->name('booking');

Route::get('/admin-room', [RoomController::class, 'index'])->middleware(['auth'])->name('adminPage');
Route::get('/add-room', [RoomController::class, 'create'])->middleware(['auth'])->name('addRoom');

Route::get('/admin-tamu', [TamuController::class, 'index'])->middleware(['auth'])->name('adminTamu');

Route::post('/save-room', [RoomController::class, 'store'])->name('save-room');

Route::post('/save-booking', [LandingController::class, 'store'])->name('save-booking');

Route::get('/edit-tamu/{id}', [TamuController::class, 'edit'])->middleware(['auth'])->name('editTamu');
Route::post('/update-tamu/{id}', [TamuController::class, 'update'])->name('updateTamu');
Route::get('/delete-tamu/{id}', [TamuController::class, 'destroy'])->name('deleteTamu');

Route::get('/edit-room/{id}', [RoomController::class, 'edit'])->middleware(['auth'])->name('editRoom');
Route::post('/update-room/{id}', [RoomController::class, 'update'])->name('editTamu');
Route::get('/delete-room/{id}', [RoomController::class, 'destroy'])->name('deleteRoom');
Route::get('/resepsionis', [ResepsionisController::class, 'index']);


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->middleware(['auth'])->name('resepsionis');

require __DIR__ . '/auth.php';
