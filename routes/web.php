<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ItemController;
use Illuminate\Support\Facades\Route;

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

//category C
Route::get('/category/create', [CategoryController::class, "createCategory_get"]);
Route::post('/category/create', [CategoryController::class, "createCategory_post"]);

//category R
Route::get('/category', [CategoryController::class, "getCategory"]);

//category U
Route::get('/category/update', [CategoryController::class, "updateCategory_get"]);
Route::post('/category/update', [CategoryController::class, "updateCategory_post"]);

//category D
Route::post('/category/delete', [CategoryController::class, "deleteCategory_post"]);

//items all
Route::get('/items', [ItemController::class, "getItems"]);


//item C
Route::get('/item/create', [ItemController::class, "createitem_get"]);
Route::post('/item/create', [ItemController::class, "createitem_post"]);

//item R
Route::get('/item', [ItemController::class, "getitem"]);

//item U
Route::get('/item/update', [ItemController::class, "updateitem_get"]);
Route::post('/item/update', [itemController::class, "updateitem_post"]);

//item D
Route::post('/item/delete', [itemController::class, "deleteitem_post"]);


