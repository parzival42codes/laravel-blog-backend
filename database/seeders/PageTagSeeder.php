<?php

namespace parzival42codes\LaravelBlogBackend\Database\seeders;

use Illuminate\Database\Seeder;
use parzival42codes\LaravelBlogBackend\App\Models\PageTags;

class PageTagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PageTags::newFactory()
            ->count(5)
            ->create();
    }
}
