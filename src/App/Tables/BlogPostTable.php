<?php

namespace parzival42codes\LaravelBlogBackend\App\Tables;

use Okipa\LaravelTable\Abstracts\AbstractTableConfiguration;
use Okipa\LaravelTable\Column;
use Okipa\LaravelTable\Formatters\DateFormatter;
use Okipa\LaravelTable\RowActions\EditRowAction;
use Okipa\LaravelTable\Table;
use parzival42codes\LaravelBlogBackend\App\Models\BlogPost;
use parzival42codes\LaravelBlogBackend\App\Tables\Formatters\BlogPostStatusFormatter;

class BlogPostTable extends AbstractTableConfiguration
{
    protected function table(): Table
    {
        $table = Table::make()
            ->model(BlogPost::class);

        $table->rowActions(fn (BlogPost $blogPost) => [
            new EditRowAction(route('admin.blog.post.edit', $blogPost)),
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

            Column::make('post_title')
                ->title(__('admin.blog.post.table.post_title')),

            Column::make('post_status')
                ->title(__('admin.blog.post.table.post_status'))
                ->format(new BlogPostStatusFormatter())
                ->sortable(),

            Column::make('author')
                ->title(__('admin.blog.post.table.author')),

            Column::make('created_at')
                ->title(__('admin.blog.post.table.created_at'))
                ->format(new DateFormatter('d.m.Y H:i', 'Europe/Paris')),

            Column::make('updated_at')
                ->title(__('admin.blog.post.table.updated_at'))
                ->format(new DateFormatter('d.m.Y H:i', 'Europe/Paris')),
        ];
    }
}
