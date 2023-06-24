<?php

namespace parzival42codes\LaravelBlogBackend\App\Http\Controllers\Comment;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Support\Renderable;

class CommentOverviewController extends Controller
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
