<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\HomeController;

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

Route::get('/', [HomeController::class, 'index']);
Route::get('/category/{slug}', [HomeController::class, 'getPostByCategory'])->name('getPostByCategory');
Route::get('/category/{slug_category}/{slug_post}', [HomeController::class, 'getPost'])->name('getPost');

