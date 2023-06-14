<?php

namespace parzival42codes\LaravelBlogBackend\App\Http\Controllers\Blog;

use App\Enum\Model\BlogPost\StatusEnum;
use App\Http\Controllers\Controller;
use App\Http\Requests\Blog\StoreBlogPostRequest;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\RedirectResponse;
use parzival42codes\LaravelBlogBackend\App\Models\BlogPost;

class EditController extends Controller
{
    /**
     * Show the application dashboard.
     */
    public function index(string|int $id = 0): Renderable
    {
        /** @var BlogPost $blogPost */
        $blogPost = BlogPost::findOrNew($id);

        $blogPostStatus = StatusEnum::array();

        return view('blog-backend::blog.postEdit', compact('blogPost', 'blogPostStatus'));
    }

    public function store(StoreBlogPostRequest $request): RedirectResponse
    {
        /** @var array $validated */
        $validated = $request->validated();

        /** @var BlogPost $blogPost */
        $blogPost = BlogPost::findOrNew($validated['_id']);

        $blogPost->fill($validated);
        $blogPost->save();

        d(request()->all());
        d($validated);
        d($blogPost);

        exit();
    }
}
