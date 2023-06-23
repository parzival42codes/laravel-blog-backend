<?php

namespace parzival42codes\LaravelBlogBackend\App\Http\Middleware;

use App\Helpers\Icon;
use App\Helpers\MenuHelper;
use Closure;
use Illuminate\Http\Request;
use Spatie\Menu\Laravel\Link;
use Spatie\Menu\Laravel\Menu;
use Symfony\Component\HttpFoundation\Response;

class AdminMenu
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next): Response
    {
        $menuContent = Menu::new()
            ->setAttributes(['id' => 'adminMenuContent'])
            ->addClass('collapse')
            ->link(route('blog-backend.blog'), __('admin.side.menu.blog'))
            ->link(
                route('blog-backend.comment'),
                __('blog-backend.side.menu.comment')
            )
            ->link(
                route('blog-backend.page'),
                __('blog-backend.side.menu.page')
            );

        MenuHelper::get('admin')
            ->wrap('div', [
                'class' => 'spatie--laravel--menu administration-menu',
            ])
            ->link(route('blog-backend.dashboard'), __('admin.side.menu.dashboard'))
            ->submenu(
                Link::to(
                    '#adminMenuContent',
                    Icon::googleMaterial('folder') . '&nbsp;' . __('admin.side.subMenu.content')
                )
                    ->addClass('dropdown-bs-toggle')
                    ->setAttributes([
                        'data-bs-toggle' => 'collapse',
                        'role' => 'button',
                    ]),
                $menuContent
            );

        return $next($request);
    }
}
