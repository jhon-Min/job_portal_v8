<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Category
Route::get('category/data_table', [CategoryController::class, 'ssdataTable'])->name('category.ssdt');
Route::resource('category', CategoryController::class)->except('show');

// Job
Route::get('job/data_query', [PostController::class, 'queryTable'])->name('job.queryTable');
Route::resource('job', PostController::class);
