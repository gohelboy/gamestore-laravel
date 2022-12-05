<?php

use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;

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

Route::get('/about', function () {
    return view('about-us');
});

Route::get('/register-page', function () {
    return view('register');
})->name('register-page');

Route::post('/register-user', function (Request $request) {

    //get the data from form and store in var
    $user = User::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => Hash::make($request->password),
    ]);

    //ragister using entered data
    event(new Registered($user));
    Auth::login($user);

    // return 
    return redirect('/');
})->name('register-user');

Route::get('/login-page', function () {
    return view('login');
})->name('login-page');

Route::post('/login-user', function (LoginRequest $request) {

    // authenticate user and create session
    $request->authenticate();
    $request->session()->regenerate();
    return redirect('/');

    //return view('home');
})->name('login-user');

Route::get('/logout-user', function (Request $request) {
    //remove session and logout
    $request->session()->flush();
    Auth::logout();
    return view('home');
})->name('logout-user');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__ . '/auth.php';
