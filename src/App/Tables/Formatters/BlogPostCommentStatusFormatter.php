<?php

namespace parzival42codes\LaravelBlogBackend\App\Tables\Formatters;

use Illuminate\Database\Eloquent\Model;
use Okipa\LaravelTable\Abstracts\AbstractFormatter;
use parzival42codes\LaravelBlogBackend\App\Models\BlogComment;

class BlogPostCommentStatusFormatter extends AbstractFormatter
{
    /**
     * @param  BlogComment  $model
     */
    public function format(Model $model, string $attribute): string
    {
        return '<div class="blog--post--comment-status blog--post--comment-status-' . $model->status . '">' . __('admin.blog.comment.status.' . $model->status) . '</div>';
    }
}
