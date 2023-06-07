<?php

namespace parzival42codes\LaravelBlogBackend\App\Http\Controllers\Administration\Comment;

use App\Enum\Model\BlogComment\StatusEnum;
use App\Http\Controllers\Controller;
use App\Http\Requests\Comment\StoreCommentPostRequest;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\RedirectResponse;
use parzival42codes\LaravelBlogBackend\App\Models\BlogComment;
use parzival42codes\LaravelBlogBackend\App\Models\BlogPost;

class EditController extends Controller
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
        $blogComment = BlogComment::findOrNew($id);
        $blogCommentStatus = StatusEnum::array();

        $blogPost = BlogPost::findOrFail($blogComment->blog_post_id);

        return view('admin.comment.edit', compact([
            'blogComment', 'blogCommentStatus', 'blogPost',
        ]));
    }

    public function store(StoreCommentPostRequest $request): RedirectResponse
    {
        $validated = $request->validated();

        $blogPost = BlogComment::findOrNew($validated['id']);

        $blogPost->fill($validated);
        $blogPost->save();

        d(request()->all());
        d($validated);
        d($blogPost);

        exit();
    }
}
