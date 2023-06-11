<?php

namespace parzival42codes\LaravelBlogBackend\App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Concerns\HasTimestamps;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use parzival42codes\LaravelBlogBackend\Database\factories\BlogPostFactory;

class BlogPost extends Model
{
    use HasTimestamps;

    public const DBNAME = 'blog_posts';

    protected $table = self::DBNAME;

    protected $casts = [
        //        'post_status' => StatusEnum::class,
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'post_title', 'post_content', 'post_status', 'post_path', 'user_id',
    ];

    public function blogComment(): HasMany
    {
        return $this->hasMany(BlogComment::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    protected static function boot()
    {
        parent::boot();

        static::deleted(function ($post) {
            $post->trixRichText->each->delete();
            $post->trixAttachments->each->purge();
        });
    }

    public function scopePublished(Builder $query): void
    {
        $query->where('post_status', '=', 'published');
    }

    /**
     * Create a new factory instance for the model.
     */
    protected static function newFactory(): Factory
    {
        return BlogPostFactory::new();
    }

    public static function getPost(string $path): BlogPost
    {
        return BlogPost::firstOrFail()->published()->where('post_path', '=', $path);
    }
}
