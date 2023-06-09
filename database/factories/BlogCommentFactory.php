<?php

namespace parzival42codes\LaravelBlogBackend\Database\Factories;

use App\Enum\Model\BlogComment\StatusEnum;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\parzival42codes\LaravelBlogBackend\App\Models\BlogPost>
 */
class BlogCommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $blogStatus = Arr::shuffle([
            StatusEnum::Reported, StatusEnum::Published, StatusEnum::Hidden,
        ]);

        return [
            'email' => $this->faker->email, 'content' => $this->faker->text, 'status' => reset($blogStatus),
            'blog_post_id' => $this->faker->numberBetween(1, 5),
        ];
    }
}
