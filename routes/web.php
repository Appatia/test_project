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
Route::get('/home', [HomeController::class, 'index']);

Route::get('/my_page', [MyPageController::class, 'index']);

Route::get('/blog/create', [BlogController::class, 'create']);

Route::get('/blog/update', [BlogController::class, 'update']);

Route::get('/blog/delete', [BlogController::class, 'delete']);

Route::get('/blog/first_or_create', [BlogController::class, 'firstOrCreate']);

Route::get('/blog/update_or_create', [BlogController::class, 'updateOrCreate']);

Route::get('/news', [NewsController::class, 'index']);

Route::get('/adress', [AdressController::class, 'index']);

Route::get('/phone', [PhoneController::class, 'index']);

Route::get('/maps', [MapsController::class, 'index']);

Route::get('/main', [MainController::class, 'index'])->name('main.index');

Route::get('/about', [AboutController::class, 'index'])->name('about.index');

Route::get('/video', [VideoController::class, 'index']);
Route::get('/videos', [VideoController::class, 'index'])->name('video.index');
Route::get('/videos/create', [VideoController::class, 'create'])->name('video.create');
Route::post('/videos', [VideoController::class, 'store'])->name('video.store');
Route::get('/videos/{video}', [VideoController::class, 'show'])->name('video.show');
Route::get('/videos/{video}/edit', [VideoController::class, 'edit'])->name('video.edit');
Route::patch('/videos/{video}/', [VideoController::class, 'update'])->name('video.update');
Route::delete('/videos/{video}/', [VideoController::class, 'destroy'])->name('video.delete');

Route::get('/contact', [ContactController::class, 'index']);
Route::get('/contacts', [ContactController::class, 'index'])->name('contact.index');
Route::get('/contacts/create', [ContactController::class, 'create'])->name('contact.create');
Route::post('/contacts', [ContactController::class, 'store'])->name('contact.store');
Route::get('/contacts/{contact}', [ContactController::class, 'show'])->name('contact.show');
Route::get('/contacts/{contact}/edit', [ContactController::class, 'edit'])->name('contact.edit');
Route::patch('/contacts/{contact}/', [ContactController::class, 'update'])->name('contact.update');
Route::delete('/contacts/{contact}/', [ContactController::class, 'destroy'])->name('contact.delete');

Route::get('/blog', [BlogController::class, 'index']);
Route::get('/blogs', [BlogController::class, 'index'])->name('blog.index');
Route::get('/blogs/create', [BlogController::class, 'create'])->name('blog.create');
Route::post('/blogs', [BlogController::class, 'store'])->name('blog.store');
Route::get('/blogs/{blog}', [BlogController::class, 'show'])->name('blog.show');
Route::get('/blogs/{blog}/edit', [BlogController::class, 'edit'])->name('blog.edit');
Route::patch('/blogs/{blog}', [BlogController::class, 'update'])->name('blog.update');
Route::delete('/blogs/{blog}', [BlogController::class, 'destroy'])->name('blog.delete');

Route::get('/post', [PostController::class, 'index']);
Route::get('/posts', [PostController::class, 'index'])->name('post.index');
Route::get('/posts/create', [PostController::class, 'create'])->name('post.create');
Route::post('/posts', [PostController::class, 'store'])->name('post.store');
Route::get('/posts/{post}', [PostController::class, 'show'])->name('post.show');
Route::get('/posts/{post}/edit', [PostController::class, 'edit'])->name('post.edit');
Route::patch('/posts/{post}/', [PostController::class, 'update'])->name('post.update');
Route::delete('/posts/{post}/', [PostController::class, 'destroy'])->name('post.delete');
