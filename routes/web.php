<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TodoController;

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


Route::get("/",HomeController::class)->name('home');
Route::get("/single-post/{id}/{slug}",[HomeController::class,'singlePost'])->name('single-post');
Route::get("/comment-reply/{id}/{slug}",[HomeController::class,'commentReply'])->name('comment-reply');
Route::post("comment",[HomeController::class,'store'])->name('comment');
Route::post("reply-comment",[HomeController::class,'replyComment'])->name('reply-comment');
Route::group(['middleware'=>['auth']],function (){
    Route::resource("categories",CategoryController::class)->except('show');
    Route::get('/dashboard', [TodoController::class,"index"])->middleware(['auth'])->name('dashboard');
    Route::resource("todos",TodoController::class)->except('show','index');
    Route::get("Complete-todo/{id}",[TodoController::class,'complete'])->name('Complete-todo');
});



require __DIR__.'/auth.php';
