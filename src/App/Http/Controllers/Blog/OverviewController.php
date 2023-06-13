<?php

namespace parzival42codes\LaravelBlogBackend\App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Support\Renderable;

class OverviewController extends Controller
{
    /**
     * Show the application dashboard.
     */
    public function index(): Renderable
    {
        $data = [];

        return view('blog-backend::blog.overview', $data);
    }
}
