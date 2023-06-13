<?php

namespace parzival42codes\LaravelBlogBackend\App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Support\Renderable;

class WidgetController extends Controller
{
    /**
     * Show the application dashboard.
     */
    public function index(): Renderable
    {
        $data = [];

        return view('blog-backend::widget', $data);
    }
}
