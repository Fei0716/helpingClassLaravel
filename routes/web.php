<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
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
Route::get('/' , [PostController::class,'index'])->name('index');
Route::get('/create-post' , [PostController::class,'create'])->name('createPost');
Route::post('/insert-post',[PostController::class,'insertPost'])->name('insertPost');
Route::post('/delete-post/{id}',[PostController::class,'deletePost'])->name('deletePost');
Route::get('/edit-post/{id}',[PostController::class,'editPost'])->name('editPost');
Route::post('/update-post/{id}',[PostController::class,'updatePost'])->name('updatePost');