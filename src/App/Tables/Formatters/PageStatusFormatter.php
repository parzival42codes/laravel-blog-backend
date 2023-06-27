<?php

namespace parzival42codes\LaravelBlogBackend\App\Tables\Formatters;

use Illuminate\Database\Eloquent\Model;
use Okipa\LaravelTable\Abstracts\AbstractFormatter;
use parzival42codes\LaravelBlogBackend\App\Models\Page;

class PageStatusFormatter extends AbstractFormatter
{
    /**
     * @param  Page  $model
     */
    public function format(Model $model, string $attribute): string
    {
        return '<div class="app--admin--page-status status-' . $model->status . '">' . __('admin.page.status.' . $model->status) . '</div>';
    }
}
