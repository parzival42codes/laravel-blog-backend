<?php

namespace parzival42codes\LaravelBlogBackend\App\Http\Controllers\Administration;

use App\Enum\Model\BlogPost\StatusEnum;
use App\Http\Controllers\Controller;
use App\Http\Requests\Blog\StoreBlogPostRequest;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\RedirectResponse;
use parzival42codes\LaravelCodeVersion\App\Models\BlogPost;

class BlogPostEditController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     */
    public function index(string|int $id = 0): Renderable
    {
        $blogPost = BlogPost::findOrNew($id);

        $blogPostStatus = StatusEnum::array();

        return view('admin.blog.postEdit', compact('blogPost', 'blogPostStatus'));
    }

    public function store(StoreBlogPostRequest $request): RedirectResponse
    {
        $validated = $request->validated();

        $blogPost = BlogPost::findOrNew($validated['_id']);

        $blogPost->fill($validated);
        $blogPost->save();

        d(request()->all());
        d($validated);
        d($blogPost);

        exit();
    }
}
