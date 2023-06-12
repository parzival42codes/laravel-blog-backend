<?php

namespace parzival42codes\LaravelBlogBackend\App\Services;

use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use parzival42codes\LaravelBlogBackend\App\Models\BlogPost;

class BlogBackendService
{
    protected static LengthAwarePaginator|null $posts = null;

    public static function getPosts(int $paginate = 10, string $path = ''): LengthAwarePaginator
    {
        if (! static::$posts) {
            static::$posts = BlogPost::with('user')
                ->withCount('blogComment')
                ->published()
                ->paginate($paginate)
                ->withPath($path);
        }

        return static::$posts;
    }
}
