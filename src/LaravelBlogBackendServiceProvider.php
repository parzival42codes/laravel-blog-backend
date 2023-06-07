<?php

namespace parzival42codes\LaravelBlogBackend;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LaravelBlogBackendServiceProvider extends PackageServiceProvider
{
    public const PACKAGE_NAME = 'laravel-blog-backend';

    public const PACKAGE_NAME_SHORT = 'blog-backend';

    public function configurePackage(Package $package): void
    {
        $package->name(self::PACKAGE_NAME)->hasRoute('route');
    }

    public function registeringPackage(): void
    {
    }
}
