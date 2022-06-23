<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\ItemStoreController;


Route::get('/', function () {

    return view('welcome');
});

Route::get('/', [MainController::class, 'index']);
Route::resource('main', MainController::class);
Route::resource('client', ClientController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('item', ItemController::class);
Route::resource('store', StoreController::class);
Route::resource('itemStore', ItemStoreController::class);
