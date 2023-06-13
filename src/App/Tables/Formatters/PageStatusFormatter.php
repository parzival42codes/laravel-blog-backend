<?php

namespace parzival42codes\LaravelBlogBackend\App\Tables\Formatters;

use App\Models\Page;
use Illuminate\Database\Eloquent\Model;
use Okipa\LaravelTable\Abstracts\AbstractFormatter;

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
