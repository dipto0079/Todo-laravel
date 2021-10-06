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


Route::get("/",HomeController::class);
Route::group(['middleware'=>['auth']],function (){
    Route::resource("categories",CategoryController::class)->except('show');
    Route::get('/dashboard', [TodoController::class,"index"])->middleware(['auth'])->name('dashboard');
    Route::resource("todos",TodoController::class)->except('show','index');
    Route::get("Complete-todo/{id}",[TodoController::class,'complete'])->name('Complete-todo');
});



require __DIR__.'/auth.php';
