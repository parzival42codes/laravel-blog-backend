<?php

namespace parzival42codes\LaravelBlogBackend\App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Concerns\HasTimestamps;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class BlogPost extends Model
{
    use HasFactory;
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

    public static function wherePublished(): Builder|BlogPost
    {
        return self::where('post_status', '=', 'published');
    }

    protected static function boot()
    {
        parent::boot();

        static::deleted(function ($post) {
            $post->trixRichText->each->delete();
            $post->trixAttachments->each->purge();
        });
    }

    public function blogComment(): HasMany
    {
        return $this->hasMany(BlogComment::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
