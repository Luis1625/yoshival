<?php

use App\Http\Controllers\CarContoller;
use App\Http\Controllers\ContractContoller;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\IngresoContoller;
use App\Http\Controllers\ProfileController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::resource('customer', CustomerController::class)->middleware(['auth', 'verified']);
Route::resource('car', CarContoller::class)->middleware(['auth', 'verified']);
Route::resource('contract', ContractContoller::class)->middleware(['auth', 'verified']);
Route::resource('ingreso', IngresoContoller::class)->middleware(['auth', 'verified']);