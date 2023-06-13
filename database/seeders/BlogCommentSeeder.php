<?php

namespace parzival42codes\LaravelBlogBackend\Database\seeders;

use Illuminate\Database\Seeder;
use parzival42codes\LaravelBlogBackend\App\Models\BlogComment;

class BlogCommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BlogComment::newFactory()
            ->count(300)
            ->create();
    }
}
