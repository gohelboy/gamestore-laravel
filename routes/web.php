<?php

use App\Http\Controllers\ProductDataController;
use App\Http\Controllers\UserDataController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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
    return view('home');
});

Route::get('/test', function () {
    return view('test');
});

Route::get('/about', function () {
    return view('about-us');
});

Route::get('/contact-us', function () {
    return view('contact-us');
});

Route::get('/register-user', [UserDataController::class, 'register_page']);
Route::post('/register-user', [UserDataController::class, 'register_user']);
Route::get('/login-user', [UserDataController::class, 'login_page']);
Route::post('/login-user', [UserDataController::class, 'login_user']);
Route::post('/logout-user', [UserDataController::class, 'logout_user']);

Route::get('/product', [ProductDataController::class, 'index']);
Route::post('/product', [ProductDataController::class, 'show']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__ . '/auth.php';
