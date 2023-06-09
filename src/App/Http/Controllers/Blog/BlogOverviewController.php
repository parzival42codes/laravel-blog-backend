<?php

namespace parzival42codes\LaravelBlogBackend\App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Support\Renderable;

class BlogOverviewController extends Controller
{
    /**
     * Show the application dashboard.
     */
    public function index(): Renderable
    {
        return view('blog-backend::blog.overview');
    }
}
