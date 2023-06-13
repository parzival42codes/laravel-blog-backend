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
        $menuTools = Menu::new()
            ->setAttributes(['id' => 'adminMenuTools'])
            ->addClass('collapse')
            ->link(route('admin.translation.manager'), __('admin.side.menu.translation'))
            ->link(route('admin.log-viewer'), __('admin.side.menu.logViewer'));

        $menuContent = Menu::new()
            ->setAttributes(['id' => 'adminMenuContent'])
            ->addClass('collapse')
            ->link(route('blog-backend.blog'), __('admin.side.menu.comment'))->link(
                route('blog-backend.comment'),
                __('admin.side.menu.comment')
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
            )
            ->submenu(
                Link::to(
                    '#adminMenuTools',
                    Icon::googleMaterial('folder') . '&nbsp;' . __('admin.side.subMenu.tools')
                )
                    ->addClass('dropdown-bs-toggle')
                    ->setAttributes([
                        'data-bs-toggle' => 'collapse',
                        'role' => 'button',
                    ]),
                $menuTools
            );

        return $next($request);
    }
}
