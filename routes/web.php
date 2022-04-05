<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;

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

Route::get('/register/input', [UsersController::class, 'input'])->name('users_input');
Route::post('/register/confirm', [UsersController::class, 'confirm'])->name('users_input_confirm');
Route::post('/register/complete', [UsersController::class, 'complete'])->name('users_input_complete');
