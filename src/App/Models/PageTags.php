<?php

namespace parzival42codes\LaravelBlogBackend\App\Models;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Model;
use parzival42codes\LaravelBlogBackend\Database\factories\PageTagsFactory;

class PageTags extends Model
{
    public const DBNAME = 'page_tags';

    protected $table = self::DBNAME;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'tag',
        'page_id',
    ];

    /**
     * Create a new factory instance for the model.
     */
    protected static function newFactory(): Factory
    {
        return PageTagsFactory::new();
    }
}
