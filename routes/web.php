<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\CategoryController;
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

//root
Route::get('/', function () {
    if (session()->has('user')) {
        return redirect('profile');
    }

    return view('welcome');
});

//register
Route::get('/register', function () {
    if (session()->has('user')) {
        return redirect('profile');
    }

    return view('user-form');
});
Route::post('/register', [RegisterController::class, "register"]);

//login
Route::get('/login', function () {
    if (session()->has('user')) {
        return redirect('profile');
    }
    return view('user-form');
});
Route::post('/login', [LoginController::class, "login"]);

//logout
Route::get('/logout', function () {
    if (session()->has('user')) {
        session()->pull('user');
    }
    return redirect('/login');
});

//profile
Route::get('profile', function () {
    return view('profile');
});

//categories
Route::get('/categories', [CategoryController::class, "getCategories"]);

