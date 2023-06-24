<?php

namespace parzival42codes\LaravelBlogBackend\App\Tables\Formatters;

use Illuminate\Database\Eloquent\Model;
use Okipa\LaravelTable\Abstracts\AbstractFormatter;
use parzival42codes\LaravelBlogBackend\App\Models\BlogPost;

class BlogPostStatusFormatter extends AbstractFormatter
{
    /**
     * @param  BlogPost  $model
     */
    public function format(Model $model, string $attribute): string
    {
        return '<div class="blog--post-status status-' . $model->post_status . '">' . __('admin.blog.post.status.' . $model->post_status) . '</div>';
    }
}
