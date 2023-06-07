<?php

namespace parzival42codes\LaravelBlogBackend\App\Http\Controllers\Administration;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Support\Renderable;

class BlogPostController extends Controller
{
    /**
     * Show the application dashboard.
     */
    public function index(): Renderable
    {
        $data = [];

        return view('admin.blogPost', $data);
    }
}
