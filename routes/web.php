<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
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


//post
Route::get('/', [PostController::class, 'index'])->name('home')->middleware('auth') ;
Route::get('/post-detail/{id}', [PostController::class, 'show'])->name('show')->middleware('auth');
Route::get('/create-post', [PostController::class, 'create'])->name('create-post')->middleware('auth');
Route::post('/create-post', [PostController::class, 'store'])->name('store')->middleware('auth');
Route::get('/edit/{id}', [PostController::class, 'edit'])->name('edit')->middleware('auth');
Route::put('/update/{id}', [PostController::class, 'update'])->name('update')->middleware('auth');
Route::get('/delete/{id}', [PostController::class, 'remove'])->name('delete')->middleware('auth');
Route::get('/search',[PostController::class,'search'])->name('search')->middleware('auth');
  

//comment
Route::post('/comment', [CommentController::class, 'store'])->name('create-comment')->middleware('auth');
Route::get('/delete/comment/{id}', [CommentController::class, 'remove'])->name('delete-comment')->middleware('auth');




//profile user
Route::get('/profile', function () {
    return view('profile');
})->name('profile')->middleware('auth') ;
Route::get('/profile/{id}', [ProfileController::class, 'show'])->name('show-profile')->middleware('auth');
Route::get('/edit-profile/{id}', [ProfileController::class, 'edit'])->name('edit-profile')->middleware('auth');
Route::put('/update-profile/{id}', [ProfileController::class, 'update'])->name('update-profile')->middleware('auth');


//Admin
Route::get('/dashboard',[ManageController::class,'index'])->middleware('auth','isAdmin');
Route::get('/dashboard/user-manage',[ManageController::class, 'indexUser'])->name('index-user')->middleware('auth','isAdmin');
Route::get('/dashboard/post-manage',[ManageController::class, 'indexPost'])->name('index-post')->middleware('auth','isAdmin');
Route::get('/dashboard/block/{id}',[ManageController::class,'blockUser'])->name('block.user')->middleware('auth','isAdmin');
Route::get('/dashboard/open/{id}',[ManageController::class,'openUser'])->name('open.user')->middleware('auth','isAdmin');
Route::get('/dashboard/admin/{id}',[ManageController::class,'chuyenDoiAdmin'])->name('chuyen.user')->middleware('auth','isAdmin');
Route::get('/dashboard/user/{id}',[ManageController::class,'chuyenDoiUser'])->name('chuyen.admin')->middleware('auth','isAdmin');
Route::get('/dashboard/blockpost/{id}',[ManageController::class,'blockPost'])->name('block.post')->middleware('auth','isAdmin');
Route::get('/dashboard/openpost/{id}',[ManageController::class,'openPost'])->name('open.post')->middleware('auth','isAdmin');

Route::get('/categories',[CategoryController::class,'index'])->name('category.index')->middleware('auth','isAdmin');
Route::get('/categories/create-post', [CategoryController::class, 'create'])->name('category.create');
Route::post('/categories/create-category', [CategoryController::class, 'store'])->name('category.store');
Route::get('/categories/edit/{id}', [CategoryController::class, 'edit'])->name('category.edit')->middleware('auth','isAdmin');
Route::put('/categories/update/{id}', [CategoryController::class, 'update'])->name('category.update')->middleware('auth','isAdmin');
Route::get('/categories/delete/{id}', [CategoryController::class, 'destroy'])->name('category.delete')->middleware('auth','isAdmin');


Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'doLogin'])->name('do-login');
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'doRegister'])->name('do-register');
Route::get('/logout', [AuthController::class, 'doLogout'])->name('logout');
