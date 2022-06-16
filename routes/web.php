<?php

use App\Http\Controllers\PostsController;
use App\Http\Controllers\SubscriptionsController;
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

Route::post('/create-post', [PostsController::class, 'create'])->name('create-post');
Route::post('/subscribe', [SubscriptionsController::class, 'subscribe'])->name('subscribe');
