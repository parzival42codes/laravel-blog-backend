<?php

namespace parzival42codes\LaravelBlogBackend\App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Page extends Model
{
    public const DBNAME = 'pages';

    protected $table = self::DBNAME;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'ident', 'title', 'content', 'path', 'status', 'rate', 'story', 'distraction', 'version',
    ];

    public function pageTags(): HasMany
    {
        return $this->hasMany(PageTags::class);
    }
}
