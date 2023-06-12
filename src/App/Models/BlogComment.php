<?php

namespace parzival42codes\LaravelBlogBackend\App\Models;

use Illuminate\Database\Eloquent\Concerns\HasTimestamps;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Model;
use parzival42codes\LaravelBlogBackend\Database\factories\BlogCommentFactory;

class BlogComment extends Model
{
    use HasTimestamps;

    public const DBNAME = 'blog_comments';

    protected $table = self::DBNAME;

    protected $casts = [
        //        'post_status' => StatusEnum::class,d
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'email', 'content', 'status', 'blog_post_id',
    ];

    /**
     * Create a new factory instance for the model.
     */
    protected static function newFactory(): Factory
    {
        return BlogCommentFactory::new();
    }
}
