<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

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
    return view('partial.show');
});

Route::get('/', [PostController::class,'index'])->name('index');
Route::get('/posts/{id}', [PostController::class,'show'])->name('show');
Route::get('/search', [PostController::class, 'search'])->name('search');