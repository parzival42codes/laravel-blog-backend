<?php

namespace parzival42codes\LaravelBlogBackend\App\Http\Controllers\Page;

use App\Enum\Model\BlogPost\StatusEnum;
use App\Helpers\ResponseHelper;
use App\Http\Controllers\Controller;
use App\Http\Requests\Blog\StoreBlogPostRequest;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\RedirectResponse;
use parzival42codes\LaravelBlogBackend\App\Models\BlogPost;
use parzival42codes\LaravelBlogBackend\App\Models\Page;

class PageEditController extends Controller
{
    /**
     * Show the application dashboard.
     */
    public function index(string|int $id = 0): Renderable
    {
        /** @var BlogPost $blogPost */
        $blogPost = BlogPost::findOrNew($id);

        $blogPostStatus = StatusEnum::array();

        return view('blog-backend::page.edit', compact([
            'blogPost',
            'blogPostStatus',
            'id',
        ]));
    }

    public function store(StoreBlogPostRequest $request): RedirectResponse
    {
        /** @var array $validated */
        $validated = $request->validated();

        /** @var Page $page */
        $page = Page::findOrNew($validated['_id']);

        $page->fill($validated);
        $page->save();

        return ResponseHelper::responseWitMessage('administration.company::edit', [
            'id' => $page->id,
        ])
            ->translate('Die Firma :item wurde gespeichert!')
            ->item($page->title)
            ->redirect();

        d(request()->all());
        d($validated);
        d($blogPost);

        exit();
    }
}
