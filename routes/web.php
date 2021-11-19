<?php

use App\Http\Controllers\DashboardPostController;
use App\Models\Post;
use App\Models\User;
use App\Models\category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

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
    return view('welcome', [
        "title" => "Welcome"
    ]);
});

Route::get('/home', function () {
    return view('home', [
        "title" => "Home",
        "name" => "Xiao",
        "email" => "xiao@gi.com",
        "image" => "xiao.png"
    ]);
});

Route::get('/blog', [PostController::class, 'index'] ); 
//bikin route itu harus terhubung ke controller, tentukan classnya apa, 
// trus nanti dari controller ngambil data dari model

Route::get('blog/{post:slug}', [PostController::class, 'show']);
//'blog/{variable model yg dikirim:variable yg ingin ditunjuk atau dicari}

Route::get('/categories', function(){
    return view('categories', [
        'title' => 'Post Categories',
        'categories' => category::all()
    ]);
});

Route::get('categories/{category:slug}', function(category $category){
    return view('blog',[
        'title' => "Publish by Category: $category->name",
        'posts' => $category->posts->load('category','user')
    ]);
});

Route::get('/authors/{user:username}', function(User $user){
    return view('blog', [
        'title' => "Publish by Author: $user->name", 
        'posts' => $user->posts->load('category','user'), 
    ]);
});

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);


Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', function(){
    return view('dashboard.index');
})->middleware('auth');

Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');