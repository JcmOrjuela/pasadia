<?php

use App\Http\Controllers\ActivityController;
use App\Http\Controllers\ReserveController;
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

Route::view('/', 'index')->name('home');
Route::get('activity/{id}', [ActivityController::class, 'show'])->name('activity');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::post('reserve', [ReserveController::class, 'store'])->name('reserve');

    Route::get('reserves', [ReserveController::class, 'index'])->name('reserve.index');
    Route::delete('reserve/{id}', [ReserveController::class, 'destroy'])->name('reserve.destroy');

    Route::get('activities', [ActivityController::class, 'index'])->name('activity.index');
    Route::delete('activity/{id}', [ActivityController::class, 'destroy'])->name('activity.destroy');
});
