<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\ContactController;

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



Route::controller(ContactController::class)->group(function() {
    Route::get('users_views/contact_page','contact_page');
    Route::post('users_views/contact_page','send_contact_mail');
    
});

Route::controller(UserController::class)->group(function() {
    Route::get('admin/add_user','add_users')->middleware(['auth','isAdmin']);
    Route::get('users_views/single_post/{id}','delete_comm');
    Route::get('users_views/edit_comm/{id}','edit_comm');
    Route::post('users_views/edit_comm/{id}','update_comm');  
});

Route::controller(PostController::class)->group(function() {
    Route::get('admin/add_post','create_post')->middleware(['auth','isAdmin']);
    Route::post('admin/add_post','store_post')->middleware(['auth','isAdmin']);
    Route::get('admin/add_post/{id}','delete_post')->middleware(['auth','isAdmin']);
    Route::get('admin/edit_post/{id}','edit_post')->middleware(['auth','isAdmin']);
    Route::post('admin/edit_post/{id}','update_post')->middleware(['auth','isAdmin']);
    Route::get('users_views/post_by_cat/{id}','post_by_cat');
    Route::get('users_views/post_by_tag/{id}','post_by_tag');
    Route::get('users_views/single_post/{id}','single_post');
    Route::get('users_views/search','search');
});

Route::controller(CategoryController::class)->middleware(['auth','isAdmin'])->group(function() {
    Route::get('admin/add_cat','create_cat');
    Route::post('admin/add_cat','store_cat')->name('store_category');
    Route::get('admin/add_cat/{id}','delete_cat');
    Route::get('admin/edit_cat/{id}','edit_cat');
    Route::post('admin/edit_cat/{id}','update_cat');
    
});

Route::controller(TagController::class)->middleware(['auth','isAdmin'])->group(function() {
    Route::get('admin/add_tag','create_tag');
    Route::post('admin/add_tag','store_tag')->name('store_tag');
    Route::get('admin/add_tag/{id}','delete_tag');
    Route::get('admin/edit_tag/{id}','edit_tag');
    Route::post('admin/edit_tag/{id}','update_tag');
    
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
//Auth::routes(['verify' => true]);
Route::controller(AdminController::class)->group(function() {
    Route::get('/','index');
    Route::get('admin/index','admin_home')->middleware(['auth','isAdmin']);
    Route::get('admin/logout','logout');
});
