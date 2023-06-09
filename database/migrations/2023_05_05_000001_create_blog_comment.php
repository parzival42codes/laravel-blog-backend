<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use parzival42codes\LaravelBlogBackend\App\Models\BlogComment;

return new class() extends Migration
{
    public function up(): void
    {
        Schema::create(BlogComment::DBNAME, function (Blueprint $table) {
            $table->id();
            $table->string('email')
                ->index()
                ->nullable();
            $table->text('content');
            $table->string('status');
            $table->bigInteger('blog_post_id')
                ->index();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists(BlogComment::DBNAME);
        Schema::enableForeignKeyConstraints();
    }
};
