<?php

namespace parzival42codes\LaravelBlogBackend\App\Http\Controllers\Administration;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Support\Renderable;

class DashboardController extends Controller
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
    public function index(): Renderable
    {
        $data = [];

        return view('admin.dashboard', $data);
    }
}
