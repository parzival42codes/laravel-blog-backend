<?php

namespace parzival42codes\LaravelBlogBackend\Database\Factories;

use App\Enum\Model\BlogPost\StatusEnum;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;
use parzival42codes\LaravelBlogBackend\App\Models\BlogPost;

class BlogPostFactory extends Factory
{
    protected $model = BlogPost::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $blogStatus = Arr::shuffle([
            StatusEnum::Draft, StatusEnum::Published, StatusEnum::Hidden,
        ]);

        $fakeTitle = $this->faker->text(10);
        $fakePath = strtr($fakeTitle, config('custom_blog.replaceForUrl'));

        return [
            'post_title' => $fakeTitle, 'post_path' => $fakePath, 'post_content' => $this->faker->text(100),
            'post_status' => reset($blogStatus), 'user_id' => 1,
        ];
    }
}
