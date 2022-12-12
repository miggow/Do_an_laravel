<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ManageController;
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

Route::get('/', [PostController::class, 'index'])->name('home')->middleware('auth');

Route::get('/profile', function () {
    return view('profile');
})->name('profile')->middleware('auth');


Route::get('/post-detail/{id}', [PostController::class, 'show'])->name('show')->middleware('auth');


Route::get('/create-post', [PostController::class, 'create'])->name('create-post')->middleware('auth');
Route::post('/create-post', [PostController::class, 'store'])->name('store')->middleware('auth');

Route::get('/edit/{id}', [PostController::class, 'edit'])->name('edit')->middleware('auth');
Route::put('/update/{id}', [PostController::class, 'update'])->name('update')->middleware('auth');

Route::get('/delete/{id}', [PostController::class, 'remove'])->name('delete')->middleware('auth');

Route::post('/comment', [CommentController::class, 'store'])->name('create-comment')->middleware('auth');
Route::get('/delete/comment/{id}', [CommentController::class, 'remove'])->name('delete-comment')->middleware('auth');


Route::get('/profile/{id}', [ProfileController::class, 'show'])->name('show-profile')->middleware('auth');
Route::get('/edit-profile/{id}', [ProfileController::class, 'edit'])->name('edit-profile')->middleware('auth');
Route::put('/update-profile/{id}', [ProfileController::class, 'update'])->name('update-profile')->middleware('auth');
Route::get('/login', [AuthController::class, 'login'])->name('login');



Route::get('/dashboard',function(){return view('Admin.dashboard');})->middleware('auth','isAdmin');
Route::get('/dashboard/user-manage',[ManageController::class, 'index'])->name('index-user');
Route::get('/dashboard/post-manage',[ManageController::class, 'indexPost'])->name('index-post');


Route::post('/login', [AuthController::class, 'doLogin'])->name('do-login');
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'doRegister'])->name('do-register');
Route::get('/logout', [AuthController::class, 'doLogout'])->name('logout');
