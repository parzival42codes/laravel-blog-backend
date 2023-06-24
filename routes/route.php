<?php

namespace parzival42codes\LaravelBlogBackend;

use Illuminate\Support\Facades\Route;
use parzival42codes\LaravelBlogBackend\App\Http\Controllers\Blog\BlogEditController;
use parzival42codes\LaravelBlogBackend\App\Http\Controllers\Blog\BlogOverviewController;
use parzival42codes\LaravelBlogBackend\App\Http\Controllers\Comment\CommentEditController;
use parzival42codes\LaravelBlogBackend\App\Http\Controllers\Comment\CommentOverviewController;
use parzival42codes\LaravelBlogBackend\App\Http\Controllers\DashboardController;
use parzival42codes\LaravelBlogBackend\App\Http\Controllers\Page\PageEditController;
use parzival42codes\LaravelBlogBackend\App\Http\Controllers\Page\PageOverviewController;
use parzival42codes\LaravelBlogBackend\App\Http\Middleware\AdminMenu;

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

Route::middleware(['web', 'auth', AdminMenu::class])
    ->group(function () {
        Route::get('blog-backend', [DashboardController::class, 'index'])
            ->name('blog-backend.dashboard');

        // Blog

        Route::get('blog-backend/blog', [BlogOverviewController::class, 'index'])
            ->name('blog-backend.blog');

        Route::get('blog-backend/blog/{id?}', [BlogEditController::class, 'index'])
            ->name('blog-backend.blog::edit');

        Route::post('blog-backend/blog/{id?}', [BlogEditController::class, 'store'])
            ->name('blog-backend.blog::store');

        // Comment

        Route::get('blog-backend/comment', [CommentOverviewController::class, 'index'])
            ->name('blog-backend.comment');

        Route::get('blog-backend/comment/{id?}', [CommentEditController::class, 'index'])
            ->name('blog-backend.comment::edit');

        Route::post('blog-backend/comment/{id}', [CommentEditController::class, 'store'])
            ->name('blog-backend.comment::store');

        // Comment

        Route::get('blog-backend/page', [PageOverviewController::class, 'index'])
            ->name('blog-backend.page');

        Route::get('blog-backend/page/{id?}', [PageEditController::class, 'index'])
            ->name('blog-backend.page::edit');

        Route::post('blog-backend/page/{id}', [PageEditController::class, 'store'])
            ->name('blog-backend.page::store');
    });
