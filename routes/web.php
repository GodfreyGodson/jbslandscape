<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
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

Route::get('/', 'App\Http\Controllers\ContentsController@home')->name('home');

Route::get('/aboutUs', 'App\Http\Controllers\AboutController@about')->name('aboutUs');
Route::get('/faqs', 'App\Http\Controllers\FaqController@faq')->name('faqs');

Route::get('/ourgallery', 'App\Http\Controllers\OurgalleryController@gallery')->name('ourgallery');
Route::get('/projects', 'App\Http\Controllers\ProjectsController@project')->name('projects');

Route::get('/ourservices', 'App\Http\Controllers\OurservicesController@service')->name('ourservices');

Route::get('/contacts', 'App\Http\Controllers\ContactusController@contact')->name('contacts');

Route::get('/news', 'App\Http\Controllers\NewsController@new')->name('news');

Route::get('/residential', 'App\Http\Controllers\ResidentialController@residential')->name('residentials');
Route::get('/commercial', 'App\Http\Controllers\CommercialController@commercial')->name('commercials');
Route::get('/civic', 'App\Http\Controllers\CivicController@civic')->name('civics');
Route::get('/light', 'App\Http\Controllers\LightController@light')->name('lights');

Route::get('/design', 'App\Http\Controllers\DesignController@design')->name('designs');
Route::get('/clean', 'App\Http\Controllers\CleanController@clean')->name('cleans');
Route::get('/arborculture', 'App\Http\Controllers\ArborcultureController@arborculture')->name('arborcultures');




// author:caudle


Route::post('/admin/check',[AdminController::class,'check'])->name('admin.check');
Route::get('/admin/logout',[AdminController::class,'logout'])->name('admin.logout');

// route group
Route::group(['middleware'=>['AdminMiddleware']], function(){
    Route::get('/admin/login',[AdminController::class,'login'])->name('admin.login');
    Route::post('/blog',[PostsController::class,'store'])->name('blog.store');
    Route::get('/blog/create',[PostsController::class,'create'])->name('blog.create');    
    Route::put('/blog/{blog}',[PostsController::class,'update'])->name('blog.update');
    Route::delete('/blog/{blog}',[PostsController::class,'destroy'])->name('blog.destroy');
    Route::get('/blog/{blog}/edit',[PostsController::class,'edit'])->name('blog.edit');

});

// blog routes
Route::get('/blog',[PostsController::class,'index'])->name('blog.index');
Route::get('/blog/{blog}',[PostsController::class,'show'])->name('blog.show');
Route::get('/blog/category/{cat}',[PostsController::class,'category'])->name('blog.category');
Route::get('/blog/archive/{archive}',[PostsController::class,'archive'])->name('blog.archive');