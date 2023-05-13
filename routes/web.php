<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;

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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::controller(AdminController::class)->group(function() {
    Route::get('/','index');
    Route::get('admin/index','admin_home');
});

Route::controller(PostController::class)->group(function() {
    Route::get('admin/add_post','create_post');
    Route::post('admin/add_post','store_post');
    Route::get('admin/add_post/{id}','delete_post');
    Route::get('admin/edit_post/{id}','edit_post');
    Route::post('admin/edit_post/{id}','update_post');
    Route::get('users_views/post_by_cat/{id}','post_by_cat');
    Route::get('users_views/single_post/{id}','single_post');
    Route::get('users_views/search','search');
});

Route::controller(CategoryController::class)->group(function() {
    Route::get('admin/add_cat','create_cat');
    Route::post('admin/add_cat','store_cat')->name('store_category');
    Route::get('admin/add_cat/{id}','delete_cat');
    Route::get('admin/edit_cat/{id}','edit_cat');
    Route::post('admin/edit_cat/{id}','update_cat');
    
});

Route::controller(CommentController::class)->group(function() {
       Route::post('users_views/single_post/{id}','store_comm');  
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
