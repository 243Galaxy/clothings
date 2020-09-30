<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClothingController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\SigninController;
use App\Http\Controllers\DashboardController;

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

Route::get('/dashboard', [DashboardController::class, 'index']);

Route::match(['get', 'post'], '/signin', [SigninController::class, 'index']);

Route::match(['get', 'post'], 'gallery', [GalleryController::class, 'gallery']);

Route::match(['get', 'post'], 'admin/creategallery', [GalleryController::class, 'creategallery']);


Route::match(['get', 'post'], '/clothings', [ClothingController::class, 'index']);

Route::match(['get', 'post'], '/order', [ClothingController::class, 'order']);

Route::get('/{id}', [ClothingController::class, 'show']);

Route::get('a/{id}', [ClothingController::class, 'showa']);

Route::match(['get', 'post'], '/register', [SigninController::class, 'register']);



Route::get('/{id}', [GalleryController::class, 'show']);

Route::match(['get', 'post'], '/orderg', [GalleryController::class, 'orderg']);


Route::group(array('prefix' => 'admin'), function()
{
	Route::get('/dashboard', [DashboardController::class, 'index']);
	Route::get('/logout', [DashboardController::class, 'logout']);
	Route::get('/{id}', [ClothingController::class, 'show']);
	Route::match(['get', 'post'], 'admin/creategallery', [GalleryController::class, 'creategallery']);
	Route::match(['get', 'post'], '/changepassword', [ProfileController::class, 'changepassword']);
	Route::match(['get', 'post'], '/updateprofile', [ProfileController::class, 'updateprofile']);
});


