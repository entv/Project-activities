<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\News\NewsController;
use App\Http\Controllers\News\Comments\CommentController;
use App\Http\Controllers\Authentication\AuthenticationController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [AboutController::class, 'index'])->name('about');

Route::group(['prefix' => 'news'], function()
{
    Route::get('/', [NewsController::class, 'index'])->name('news');
    Route::get('/{post}', [NewsController::class, 'showById'])->name('post');

    Route::group(['prefix' => '{post}/comments'], function()
    {
        Route::post('/', CommentController::class)->name('news.post.comment');
    });
});

Route::group(['prefix' => 'authentication'], function()
{
    Route::get('/', [AuthenticationController::class, 'index'])->name('authentication');
    Route::post('/register', [AuthenticationController::class, 'register'])->name('authentication.register');
    Route::post('/login', [AuthenticationController::class, 'login'])->name('authentication.login');
    Route::get('/logout', [AuthenticationController::class, 'logout'])->name('authentication.logout');
});

Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function()
{
    Route::get('/', [AdminController::class, 'index'])->name('admin');
    Route::post('/new', [AdminController::class, 'createPost'])->name('admin.newPost');
});