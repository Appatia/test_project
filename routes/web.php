<?php

use App\Http\Controllers\AdressController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MapsController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PhoneController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\VideoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyPageController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\BlogsController;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\PostsController;


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
Route::get('/contact', [ContactController::class, 'index']);

Route::get('/home', [HomeController::class, 'index']);

Route::get('/my_page', [MyPageController::class, 'index']);

Route::get('/blog', [BlogController::class, 'index']);

Route::get('/blog/create', [BlogController::class, 'create']);

Route::get('/blog/update', [BlogController::class, 'update']);

Route::get('/blog/delete', [BlogController::class, 'delete']);

Route::get('/blog/first_or_create', [BlogController::class, 'firstOrCreate']);

Route::get('/blog/update_or_create', [BlogController::class, 'updateOrCreate']);

Route::get('/video', [VideoController::class, 'index']);

Route::get('/news', [NewsController::class, 'index']);

Route::get('/adress', [AdressController::class, 'index']);

Route::get('/phone', [PhoneController::class, 'index']);

Route::get('/maps', [MapsController::class, 'index']);

Route::get('/post', [PostController::class, 'index']);

Route::get('/main', [MainController::class, 'index'])->name('main.index');

Route::get('/about', [AboutController::class, 'index'])->name('about.index');

Route::get('/blogs', [BlogsController::class, 'index'])->name('blog.index');

Route::get('/contacts', [ContactsController::class, 'index'])->name('contact.index');

Route::get('/posts', [PostController::class, 'index'])->name('post.index');

Route::get('/posts/create', [PostController::class, 'create'])->name('post.create');

Route::post('/posts', [PostController::class, 'store'])->name('post.store');

Route::get('/posts/{post}', [PostController::class, 'show'])->name('post.show');

Route::get('/posts/{post}/edit', [PostController::class, 'edit'])->name('post.edit');

Route::patch('/posts/{post}/', [PostController::class, 'update'])->name('post.update');

Route::delete('/posts/{post}/', [PostController::class, 'destroy'])->name('post.delete');
