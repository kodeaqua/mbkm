<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PlaceController;
use App\Http\Controllers\VillageController;
use App\Http\Controllers\CategoryController;

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
    return view('landing');
})->name('landing');

Route::get('/request', function () {
    return view('request');
})->name('request');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/places', function () {
    return view('places');
})->name('places');

Auth::routes();

Route::get('/register', function () {
    return abort(404);
});

Route::post('/register', function () {
    return abort(404);
});

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::resource('home/places', PlaceController::class)->middleware('auth');

Route::resource('master/villages', VillageController::class)->middleware('auth');
Route::resource('master/categories', CategoryController::class)->middleware('auth');
