<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\LoginController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/register', [SignupController::class, 'index'])->name('register');
Route::post('/register', [SignupController::class, 'store']);
Route::get('activation/{token}', [SignupController::class, 'activation'])->name('activation');

Route::get('/login', [LoginController::class, 'index'])->name('login');
