<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/blog', 'App\Http\Controllers\BlogController@blog')->name('blog');
