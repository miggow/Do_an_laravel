<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;

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

Route::get('/', [PostController::class,'index'])->name('home');

Route::get('/profile', function(){
    return view('profile');
})->name('profile');


Route::get('/post-detail/{id}', [PostController::class,'show'])->name('show');


Route::get('/create-post', [PostController::class,'create'])->name('create-post');
Route::post('/create-post', [PostController::class,'store'])->name('store');

Route::get('/edit/{id}', [PostController::class,'edit'])->name('edit');
Route::put('/update/{id}', [PostController::class,'update'])->name('update');

Route::get('/delete/{id}', [PostController::class,'remove'])->name('delete');

Route::post('/comment',[CommentController::class,'store'])->name('create-comment');



Route::get('/profile/{id}', [ProfileController::class,'show'])->name('show-profile');
Route::get('/edit-profile/{id}', [ProfileController::class,'edit'])->name('edit-profile');
Route::put('/update-profile/{id}', [ProfileController::class,'update'])->name('update-profile');
Route::get('/login', [AuthController::class,'login'])->name('login');
Route::post('/login', [AuthController::class,'doLogin'])->name('do-login');

Route::get('/register', [AuthController::class,'register'])->name('register');
Route::post('/register', [AuthController::class,'doRegister'])->name('do-register');
Route::get('/logout', [AuthController::class, 'doLogout'])->name('logout');
