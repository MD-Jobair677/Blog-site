<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Backend\PostController;
use App\Http\Controllers\Backend\FrofileController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\Subcategorycontroller;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\frontendController;

// Route::get('/', function () {
//     return view('frontendlayout.home');
// })->name('home');


Route::get('/',[frontendController::class,'homepage'])->name('home');
Route::get('/category/{slug}',[frontendController::class,'getPostbycategory'])->name('catagorypost.all'); //class num 15
Route::get('/singleBlog/{slug}',[frontendController::class, 'singleblog'])->name('allsingleblog');
Route::post('/comment.all',[CommentController::class, 'comment'])->name('all.comment');
Route::get('/search',[CommentController::class, 'searchinput'])->name('search.input');