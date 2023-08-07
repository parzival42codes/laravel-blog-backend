<?php

namespace parzival42codes\LaravelBlogBackend\App\Helpers;

use Spatie\Menu\Laravel\Menu;

class MenuHelper
{
    private static array $menuContainer;

    public static function get(string $menu): Menu
    {
        if (! isset(self::$menuContainer[$menu])) {
            self::$menuContainer[$menu] = self::create();
        }

        return self::$menuContainer[$menu];
    }

    public static function active(string $menu, string $path = ''): void
    {
        $activePath = request()->getSchemeAndHttpHost() . $path;
        self::$menuContainer[$menu]->setActive($activePath);
    }

    private static function create(): Menu
    {
        return Menu::new()
            ->setActiveFromRequest()
            ->wrap('div', [
                'class' => 'spatie--laravel--menu administration-menu',
            ]);
    }
}
