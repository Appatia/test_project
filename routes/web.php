<?php

use App\Http\Controllers\AdressController;
use App\Http\Controllers\MapController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PhoneController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\VideoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyPageController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\BlogController;


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

Route::get('/', [WelcomeController::class, 'index']);

Route::get('/contact', [ContactController::class, 'index']);

Route::get('/home', [TestController::class, 'index']);

Route::get('/my_page', [MyPageController::class, 'index']);

Route::get('/blog', [BlogController::class, 'index']);

Route::get('/video', [VideoController::class, 'index']);

Route::get('/news', [NewsController::class, 'index']);

Route::get('/adress', [AdressController::class, 'index']);

Route::get('/phone', [PhoneController::class, 'index']);

Route::get('/maps', [MapController::class, 'index']);

Route::get('/weldone', [MapController::class, 'index']);
