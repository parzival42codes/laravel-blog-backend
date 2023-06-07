<?php

namespace parzival42codes\LaravelBlogBackend\App\Http\Controllers\Administration\Page;

use App\Enum\Model\Page\StatusEnum;
use App\Http\Controllers\Controller;
use App\Http\Requests\Page\StorePageRequest;
use App\Models\Page;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\RedirectResponse;

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
        $page = Page::findOrNew($id);
        $pageStatus = StatusEnum::array();

        return view('admin.page.edit', compact('page', 'pageStatus'));
    }

    public function store(StorePageRequest $request): RedirectResponse
    {
        $validated = $request->validated();

        $blogPost = Page::findOrNew($validated['id']);

        $blogPost->fill($validated);
        $blogPost->save();

        d(request()->all());
        d($validated);
        d($blogPost);

        exit();
    }
}
