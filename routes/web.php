<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Request;
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


Route::get('/', [PostController::class, 'showHomePage']);

Route::get('/create-new-post', [PostController::class, 'showPostCreateForm'])->name('create-new-post');

Route::post('/create-post',[PostController::class, 'createPost'])->name('create');
