<?php

use App\Models\User;
use App\Models\Post;
use App\Models\Category;


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AboutController;

use App\Http\Controllers\Agama003Controller;
use App\Http\Controllers\Login003Controller;
use App\Http\Controllers\User003Controller;
use App\Http\Controllers\Register003Controller;
use App\Http\Controllers\Validation003Controller;
use App\Http\Controllers\UserDataController;
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

Route::get('/home', [HomeController::class, 'viewHome']);

Route::get('/about', [AboutController::class, 'viewAbout']);

Route::get('/posts', [PostController::class, 'viewPost']);

Route::get('/posts/{post:slug}', [PostController::class, 'show']);

Route::get('/categories', function (){
    return view('categories',
    [
        'title' => "Post Catgories",
        'categories' => Category::all()
    ]);
});

Route::get('/categories/{category:slug}', function (Category $category){
    return view('category',
    [
        'title' => $category->name,
        'posts' => $category->posts,
        'category'  => $category->name,
    ]);
});



//ini adalah routes untuk uts
Route::get('/register003', [Register003Controller::class, 'viewregister'])->middleware('guest');
Route::post('/register003', [Register003Controller::class, 'store']);

Route::get('/login003', [Login003Controller::class, 'viewlogin'])->name('login')->middleware('guest');
Route::post('/login003', [Login003Controller::class, 'Authenticate']);
Route::post('/logout003', [Login003Controller::class, 'logout']);

Route::get('/profile003', [UserDataController::class, 'viewprofile'])->middleware('auth');
Route::get('/validation003', [UserDataController::class, 'viewvalidation'])->middleware('auth');
Route::post('/validation003', [UserDataController::class, 'store']);
Route::resource('/user003', UserDataController::class)->middleware('auth');

Route::get('/agama003', [Agama003Controller::class, 'viewagama'])->middleware('auth');
Route::post('/agama003', [Agama003Controller::class, 'store']);
