<?php

namespace parzival42codes\LaravelBlogBackend;

use Illuminate\Support\Facades\Route;
use parzival42codes\LaravelBlogBackend\App\Http\Controllers\Blog\EditController;
use parzival42codes\LaravelBlogBackend\App\Http\Controllers\Blog\OverviewController;
use parzival42codes\LaravelBlogBackend\App\Http\Controllers\DashboardController;
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

        Route::get('blog-backend/blog', [
            OverviewController::class,
            'index',
        ])
            ->name('blog-backend.blog');

        Route::get('blog-backend/blog/edit/{id}', [
            EditController::class,
            'index',
        ])
            ->name('blog-backend.blog::edit');

        Route::get('blog-backend/comment', [
            OverviewController::class,
            'index',
        ])
            ->name('blog-backend.comment');

        Route::get('blog-backend/comment/{id}', [
            EditController::class,
            'index',
        ])
            ->name('blog-backend.comment::edit');

        Route::post('blog-backend/comment/{id}', [
            EditController::class,
            'index',
        ])
            ->name('blog-backend.comment::store');
    });
