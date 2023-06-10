<?php

namespace parzival42codes\LaravelBlogBackend\database\seeders;

use Illuminate\Database\Seeder;
use parzival42codes\LaravelBlogBackend\App\Models\BlogPost;

class BlogPostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BlogPost::newFactory()
            ->count(5)
            ->create();
    }
}
