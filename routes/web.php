<?php

use App\Http\Controllers\AdressController;
use App\Http\Controllers\Contact\ContactCreateController;
use App\Http\Controllers\Contact\ContactDestroyController;
use App\Http\Controllers\Contact\ContactEditController;
use App\Http\Controllers\Contact\ContactIndexController;
use App\Http\Controllers\Contact\ContactShowController;
use App\Http\Controllers\Contact\ContactStoreController;
use App\Http\Controllers\Contact\ContactUpdateController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MapsController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PhoneController;
use App\Http\Controllers\Post\CreateController;
use App\Http\Controllers\Post\IndexController;
use App\Http\Controllers\Post\DestroyController;
use App\Http\Controllers\Post\EditController;
use App\Http\Controllers\Post\ShowController;
use App\Http\Controllers\Post\StoreController;
use App\Http\Controllers\Post\UpdateController;
use App\Http\Controllers\Video\VideoIndexController;
use App\Http\Controllers\Video\VideoCreateController;
use App\Http\Controllers\Video\VideoDestroyController;
use App\Http\Controllers\Video\VideoEditController;
use App\Http\Controllers\Video\VideoShowController;
use App\Http\Controllers\Video\VideoStoreController;
use App\Http\Controllers\Video\VideoUpdateController;
use App\Http\Controllers\Blog\BlogCreateController;
use App\Http\Controllers\Blog\BlogDestroyController;
use App\Http\Controllers\Blog\BlogEditController;
use App\Http\Controllers\Blog\BlogIndexController;
use App\Http\Controllers\Blog\BlogShowController;
use App\Http\Controllers\Blog\BlogStoreController;
use App\Http\Controllers\Blog\BlogUpdateController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyPageController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\BlogsController;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\VideoController;


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

Route::group(['prefix' => 'videos'], function () {
    Route::get('', VideoIndexController::class)->name('video.index');
    Route::get('create', VideoCreateController::class)->name('video.create');
    Route::post('', VideoStoreController::class)->name('video.store');
    Route::get('{video}', VideoShowController::class)->name('video.show');
    Route::get('{video}/edit', VideoEditController::class)->name('video.edit');
    Route::patch('{video}/', VideoUpdateController::class)->name('video.update');
    Route::delete('{video}/', VideoDestroyController::class)->name('video.delete');
});
Route::group(['prefix' => 'contacts'], function () {
    Route::get('', ContactIndexController::class)->name('contact.index');
    Route::get('create', ContactCreateController::class)->name('contact.create');
    Route::post('', ContactStoreController::class)->name('contact.store');
    Route::get('{contact}', ContactShowController::class)->name('contact.show');
    Route::get('{contact}/edit', ContactEditController::class)->name('contact.edit');
    Route::patch('{contact}/', ContactUpdateController::class)->name('contact.update');
    Route::delete('{contact}/', ContactDestroyController::class)->name('contact.delete');
});
Route::group(['prefix' => 'blogs'], function () {
    Route::get('', BlogIndexController::class)->name('blog.index');
    Route::get('create', BlogCreateController::class)->name('blog.create');
    Route::post('', BlogStoreController::class)->name('blog.store');
    Route::get('{blog}', BlogShowController::class)->name('blog.show');
    Route::get('{blog}/edit', BlogEditController::class)->name('blog.edit');
    Route::patch('{blog}/', BlogUpdateController::class)->name('blog.update');
    Route::delete('{blog}/', BlogDestroyController::class)->name('blog.delete');
});
Route::group(['prefix' => 'posts'], function () {
    Route::get('', IndexController::class)->name('post.index');
    Route::get('create', CreateController::class)->name('post.create');
    Route::post('', StoreController::class)->name('post.store');
    Route::get('{post}', ShowController::class)->name('post.show');
    Route::get('{post}/edit', EditController::class)->name('post.edit');
    Route::patch('{post}/', UpdateController::class)->name('post.update');
    Route::delete('{post}/', DestroyController::class)->name('post.delete');
});
//Route::get('/post', [BlogIndexController::class, 'index']);
//Route::get('/blog', [BlogController::class, 'index']);
//Route::get('/contact', [ContactController::class, 'index']);
//Route::get('/video', [VideoController::class, 'index']);
