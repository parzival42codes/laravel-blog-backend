<?php

namespace parzival42codes\LaravelBlogBackend\database\seeders;

use Illuminate\Database\Seeder;
use parzival42codes\LaravelCodeVersion\App\Models\BlogComment;

class BlogCommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BlogComment::factory()
            ->count(15)
            ->create();
    }
}
