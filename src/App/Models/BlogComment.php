<?php

namespace parzival42codes\LaravelBlogBackend\App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Concerns\HasTimestamps;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogComment extends Model
{
    use HasTimestamps;
    use HasFactory;

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

    public static function wherePublished(): Builder|BlogComment
    {
        return self::where('post_status', '=', 'published');
    }
}
