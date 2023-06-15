<?php

namespace parzival42codes\LaravelBlogBackend\App\Tables;

use Okipa\LaravelTable\Abstracts\AbstractTableConfiguration;
use Okipa\LaravelTable\Column;
use Okipa\LaravelTable\Formatters\DateFormatter;
use Okipa\LaravelTable\RowActions\EditRowAction;
use Okipa\LaravelTable\Table;
use parzival42codes\LaravelBlogBackend\App\Models\BlogComment;
use parzival42codes\LaravelBlogBackend\App\Tables\Formatters\BlogPostCommentStatusFormatter;

class BlogCommentTable extends AbstractTableConfiguration
{
    protected function table(): Table
    {
        $table = Table::make()
            ->model(BlogComment::class);

        $table->rowActions(fn (BlogComment $blogComment) => [
            new EditRowAction(route('blog-backend.comment::edit', $blogComment)),
        ]);

        return $table;
    }

    protected function columns(): array
    {
        return [
            Column::make('id')
                ->title('ID')
                ->sortable()
                ->sortByDefault(),

            Column::make('email')
                ->title(__('admin.blog.comment.table.email')),

            Column::make('content')
                ->title(__('admin.blog.comment.table.content')),

            Column::make('status')
                ->title(__('admin.blog.comment.table.status'))
                ->format(new BlogPostCommentStatusFormatter())
                ->sortable(),

            Column::make('created_at')
                ->title(__('admin.blog.post.table.created_at'))
                ->format(new DateFormatter('d.m.Y H:i', 'Europe/Paris')),

            Column::make('updated_at')
                ->title(__('admin.blog.post.table.updated_at'))
                ->format(new DateFormatter('d.m.Y H:i', 'Europe/Paris')),
        ];
    }
}
