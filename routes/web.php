<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Welcome;
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
Route::get('/', [Welcome::class, 'index']);
Route::get('/about-yoga-path', [Welcome::class, 'aboutyogapath']);
Route::get('/yoga-service', [Welcome::class, 'yogaservice']);
Route::get('/yoga-price', [Welcome::class, 'yogaprice']);
Route::get('/yoga-class', [Welcome::class, 'yogaclass']);
Route::get('/yoga-team', [Welcome::class, 'yogateam']);
Route::get('/yoga-portfolio', [Welcome::class, 'yogaportfolio']);
Route::get('/yoga-blog', [Welcome::class, 'yogablog']);
Route::get('/yoga-single', [Welcome::class, 'yogasingle']);
Route::get('/yoga-contact', [Welcome::class, 'yogacontact']);
Route::get('/about-yoga-index', [Welcome::class, 'index']);


//Admin login
Route::get('/adminlogin', [UserController::class, 'adminlogin']);
Route::get('/forgot-password', [UserController::class, 'forgotpassword']);
Route::post('/loginUser', [UserController::class, 'loginUser']);


