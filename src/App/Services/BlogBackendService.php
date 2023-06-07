<?php

namespace parzival42codes\LaravelBlogBackend\App\Services;

use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use parzival42codes\LaravelBlogBackend\App\Models\BlogPost;

class BlogBackendService
{
    private static LengthAwarePaginator|null $posts = null;

    public static function getPosts(int $paginate = 10, string $path = null): LengthAwarePaginator
    {
        if (! static::$posts) {
            static::$posts = BlogPost::with('user')
                ->withCount('blogComment')
                ->paginate($paginate)
                ->withPath($path);
        }

        return static::$posts;
    }
}
