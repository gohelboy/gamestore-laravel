<?php

use App\Http\Controllers\ProductDataController;
use App\Http\Controllers\QueriesController;
use App\Http\Controllers\UserDataController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

Route::get('/', function () {
    $games = DB::select('select * from products');
    return view('index', ['games' => $games]);
});

Route::get('/{id}', function ($id) {
    $data = DB::table('products')->select('*')->where('id', '=', $id)->get();
    return view('gamepage', ['game' => $data]);
});

Route::get('/checkout', function () {
    return view('checkout');
});

Route::get('/about', function () {
    return view('about-us');
});

Route::get('/contact-us', function () {
    return view('contact-us');
});

Route::get('/contact', [QueriesController::class, 'create']);
Route::post('/contact', [QueriesController::class, 'store']);

Route::get('/register-user', [UserDataController::class, 'register_page']);
Route::post('/register-user', [UserDataController::class, 'register_user']);
Route::get('/login-user', [UserDataController::class, 'login_page']);
Route::post('/login-user', [UserDataController::class, 'login_user']);
Route::post('/logout-user', [UserDataController::class, 'logout_user']);

Route::get('/product', [ProductDataController::class, 'index']);
Route::post('/product', [ProductDataController::class, 'show']);

require __DIR__ . '/auth.php';
