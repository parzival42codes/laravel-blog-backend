<?php

namespace parzival42codes\LaravelBlogBackend\App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Support\Renderable;

class OverviewController extends Controller
{
    /**
     * Show the application dashboard.
     */
    public function index(): Renderable
    {
        return view('blog-backend::page.overview');
    }
}
