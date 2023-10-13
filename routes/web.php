<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
route::get('home',[HomeController::class,'index'])->name('home.index');
use App\Http\Controllers\AboutController;
route::get('home',[AboutController::class,'index'])->name('about.index');
use App\Http\Controllers\NewController;
route::get('home',[NewsController::class,'index'])->name('news.index');


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
