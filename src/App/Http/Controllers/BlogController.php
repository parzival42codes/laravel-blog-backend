<?php

namespace parzival42codes\LaravelBlogBackend\App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Support\Renderable;
use parzival42codes\LaravelBlogBackend\App\Models\BlogPost;

class BlogController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Show the application dashboard.
     */
    public function postView(string $post): Renderable
    {
        $blogPost = BlogPost::with('blogComment')
            ->where('post_path', '=', $post)
            ->firstOrFail();

        $blogPostComments = $blogPost->blogComment()
            ->paginate(2)
            ->withQueryString();

        return view('blog.postView', compact([
            'blogPost',
            'blogPostComments',
        ]));
    }
}
