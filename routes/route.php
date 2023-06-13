<?php

namespace parzival42codes\LaravelBlogBackend;

use Illuminate\Support\Facades\Route;
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

        Route::get('blog-backend/blogpost', [
            OverviewController::class,
            'index',
        ])
            ->name('blog-backend.blogpost');
    });
