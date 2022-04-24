<?php

use App\Http\Controllers\News_post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\MapelController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\RegisterController;


Route::get('admin/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('admin/login', [LoginController::class, 'authenticate']);

Route::get('admin/register', [RegisterController::class, 'index'])->middleware('guest');;
Route::post('admin/register', [RegisterController::class, 'create']);

Route::post('admin/logout', [LoginController::class, 'logout']);

Route::get('admin/dashboard', [UsersController::class, 'index'])->middleware('auth');
Route::get('admin/user/users', [UsersController::class,'users'])->middleware('auth');
Route::post('admin/user/users', [UsersController::class, 'create']);

// Route::get('admin/blog/index', [PostController::class, 'index'])->middleware('auth');
// Route::get('admin/blog/create', [PostController::class, 'insert'])->middleware('auth');
// Route::post('admin/blog/create', [PostController::class, 'create']);

Route::get('admin/blog/index', [BeritaController::class, 'index'])->middleware('auth');
Route::get('admin/blog/create', [BeritaController::class, 'insert'])->middleware('auth');
Route::post('admin/blog/create', [BeritaController::class, 'create']);
Route::get('admin/blog/edit/{id}', [BeritaController::class, 'edit'])->middleware('auth');
Route::post('admin/blog/update/{id}', [BeritaController::class, 'update']);

Route::get('admin/category/index', [CategoryController::class,'index'])->middleware('auth');
Route::get('admin/category/create', [CategoryController::class, 'insert'])->middleware('auth');
Route::post('admin/category/create', [CategoryController::class, 'create']);
Route::get('admin/category/edite/{id}', [CategoryController::class, 'edite'])->middleware('auth');
Route::post('admin/category/update/{id}', [CategoryController::class, 'update']);
Route::get('admin/category/destroy/{id}', [CategoryController::class, 'destroy']);

Route::get('admin/service/index', [ServiceController::class, 'index'])->middleware('auth');

Route::get('admin/mapel/index', [MapelController::class, 'index'])->middleware('auth');
Route::get('admin/mapel/create', [MapelController::class, 'create'])->middleware('auth');
Route::post('admin/mapel/store', [MapelController::class, 'store'])->middleware('auth');

Route::get('admin/podcast', [BeritaController::class, 'podcast'])->middleware('auth');