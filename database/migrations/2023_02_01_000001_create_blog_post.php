<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use parzival42codes\LaravelBlogBackend\App\Models\BlogPost;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * Add the User
     */
    public function up(): void
    {
        Schema::create(BlogPost::DBNAME, function (Blueprint $table) {
            $table->id();
            $table->string('post_title');
            $table->longText('post_content');
            $table->enum('post_status', [
                'draft',
                'published',
                'hidden',
            ])
                ->index();
            $table->text('post_password')
                ->nullable();
            $table->string('post_path')
                ->index();
            $table->integer('user_id');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists(BlogPost::DBNAME);
        Schema::enableForeignKeyConstraints();
    }
};
